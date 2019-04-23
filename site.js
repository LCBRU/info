$.get( "/packages/lbrc/brc_automad_theme/ip.php", function( data ) {
    if (data != 'uhl') {
        $("body").addClass("not_uhl");
    } else if (data != 'uol') {
        $("body").addClass("not_uol");
    }
});
