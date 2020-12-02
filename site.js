$.get( "/packages/brc_automad_theme/ip.php", function( data ) {
    if (data != 'uhl') {
        $("body").addClass("not_uhl");
    } else if (data != 'uol') {
        $("body").addClass("not_uol");
    }
});


$(document).ready(function(){
    $('.protocol_statement').each(function() {
        alert(this.data("protocol-statement-id"));
    });
    // // On Page Load this is going to be executed
    // $.ajax({
    //   url: "Volbo/text.html" ,
    // }).always(function(data) {
    //   $("#myTable").html(data);
    // });
    // // on Select change this is going to be executed
    // $("#drop").change(function () {
    //   $.ajax({
    //     url: this.value,
    //   }).always(function(data) {
    //     $("#myTable").html(data);
    //   });
    // });
  });