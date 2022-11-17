
// Mostra mais informações de determinado livro quando solicitado

$().ready(function() {

    $("span.read__more").click(function() {

        $("div#full-description").slideDown(500);

    });

});