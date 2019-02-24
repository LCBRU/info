#!/usr/bin/env python3

import wget
import shutil
import zipfile
import tempfile
import os
import subprocess
from pathlib import Path


HTTP_DIR='/local/www/htdocs/'


def get_automad():
    pwd = os.path.realpath('.')

    with tempfile.TemporaryDirectory() as tmpdirname:
        os.chdir(tmpdirname)

        filename = wget.download('https://automad.org/download')

        with zipfile.ZipFile(filename,"r") as zip_ref:
            zip_ref.extractall(tmpdirname)

        extracted_dir = next(x for x in Path(tmpdirname).iterdir() if x.is_dir())

        shutil.rmtree(HTTP_DIR)
        shutil.copytree(extracted_dir.name, HTTP_DIR)

    os.chdir(pwd)
    shutil.copytree('./info_theme', '{}/packages/lbrc/info_theme'.format(HTTP_DIR))
    shutil.copy('./accounts.php', '{}/config/'.format(HTTP_DIR))


get_automad()

subprocess.run(['setfacl', '-m', 'u:wwwrun:rwx', '{}/cache'.format(HTTP_DIR)])
