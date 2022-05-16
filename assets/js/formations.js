(function($) {
    $('h2').each(function () {
        var $nom = $(this).text().replace(/ .*/,'');
       $('aside').append('<a href="'+ window.location.href.split("#")[0] + "#" + $nom + '">' + $nom + '</a>');
    });
})(jQuery);
    