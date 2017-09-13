$(document).ready(function() {
    function formatSearch (article) {
        if (!article.id) {
            return article.text;
        }

        var $article = $(
            '<a href="/news/' + article.id + '/show">' + article.text + '</a>'
        );
        return $article;
    };

    $('.js-example-basic-single').select2({
        placeholder: 'Поиск',
        templateSelection: formatSearch
    });
});
