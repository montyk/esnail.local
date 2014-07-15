$(document).ready(function () {
    $('a[data-remote]').on('click', function (e) {
        e.preventDefault();

        $('#menu .tab').closest('li').removeClass('active-link')

        var isTab = $(this).hasClass('tab')
        if (isTab) {
            $(this).closest('li').addClass('active-link')
        }

        var url = $(this).attr('href').replace('.html', '.ajax')
        $.get(url, function (data) {
            $('.content .wrapper .main').html(data)
        });
    });

    $('.content .wrapper').on('click', 'a[data-remote]', function (e) {
        e.preventDefault();
        var url = $(this).attr('href').replace('.html', '.ajax')
        $.get(url, function (data) {
            $('.content .wrapper .addition').html(data)
        });
    });

    function goToByScroll(id) {
        $('html,body').animate({scrollTop: $("#" + id).offset().top}, 'slow');
    }

    $(document).ready(function () {


        $(".testimonials-table tr").hover(
            function () {
                var imgobj = $(this).find('img');
                var imgid = imgobj.attr('id');
                imgobj.attr('src', '/media/images/testimonials/' + imgid + '1.jpg');
            },
            function () {
                var imgobj = $(this).find('img');
                var imgid = imgobj.attr('id');
                imgobj.attr('src', '/media/images/testimonials/' + imgid + '0.jpg');
            });

    });
});