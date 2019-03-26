<?php defined('AUTOMAD') or die('Direct access not permitted!');

if ($_SERVER['HTTP_X_FORWARDED_FOR'] != '86.17.1.198') {
  $notuhl_class = 'not_uhl';
}
if (substr($_SERVER['HTTP_X_FORWARDED_FOR'], 0, 7) != '143.210') {
  $notuol_class = 'not_uol';
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="/packages/lbrc/info_theme/css/brc.css?v=6">

    <title>BRC Intranet</title>
  </head>

  <body class="container <?php echo $notuhl_class; echo $notuol_class ?>">
    <header>
        <h1>Leicester<br>
            <span class="d-none d-sm-block">Biomedical Research Centre</span>
            <span class="d-sm-none">BRC</span>
        </h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand fas fa-home" href="/"></a>
        <@ newPagelist { excludeHidden: false } @>
						<@ foreach in pagelist @>
							<@ if @{ checkboxShowInNavbar } @>
								<a class="nav-link" title="@{ title }" href="@{ url }">@{ title }</a>
					  <@ end @>
				<@ end @>				

    </nav>

    <div>
