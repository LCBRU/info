$.get( "/packages/brc_automad_theme/ip.php", function( data ) {
    if (data != 'uhl') {
        $("body").addClass("not_uhl");
    }
    if (data != 'uol') {
        $("body").addClass("not_uol");
    }
});
