$(function() {
    $(".category-link").click(function(event) {
        event.preventDefault();
        var link = $(this).attr('href');
        $.getJSON(link, function(data) {
            html = makeArticle(data);
            $('#posts').html(html);
        })
    });
    function makeArticle(data) {
        var htmlString = "";
        for (let article of data) {
            htmlString += '<article '
            if (article.post_thumbnail) {
            htmlString += 'class="clearfix"';
            }
            htmlString += '>'
            + '<h2> <a href="/posts/' + article.id + '">'
            + article.title + "</a></h2>";
            if (article.post_thumbnail) {
                htmlString += '<img class="float-right mr-3" style="width: 25vw" src="/uploads/'
                + article.post_thumbnail + '">';
            }
            htmlString += '<p>' + article.body + '</p> </article>';
            }
        return htmlString;
    }
});
