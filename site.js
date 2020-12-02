$.get( "/packages/brc_automad_theme/ip.php", function( data ) {
    if (data != 'uhl') {
        $("body").addClass("not_uhl");
    } else if (data != 'uol') {
        $("body").addClass("not_uol");
    }
});


$(document).ready(function(){
    $('.protocol_statement').each(function() {
        ps = $(this);

        url = "https://info.lbrc.le.ac.uk/information_governance/security_statement/text/" +  ps.data("protocol-statement-id");

        $.get(url, function(data) {
            alert(data);
            ps.html(data);
        });

    });
  });