/*price range*/

$('#sl2').slider();

var RGBChange = function () {
    $('#RGB').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
};

/*scroll to top*/

$(document).ready(function () {
        $(".news-slider").owlCarousel({
            items: 4,
            navText: ["",""],
            margin: 30,
            autoplay: true,
            nav: true
        });
        $(".main-slider").owlCarousel({
            items: 1,
            dots: true,
            dotsContainer: ".main-sliders .owl-dots",
            autoplay: true,
            nav: false
        });
          var userFeed = new Instafeed({
            get: 'user',
            userId: '2306227916',
            clientId: '651058380a4c4042b3e7cd9790620b82',
            accessToken: '2306227916.6510583.3d450a4b79e1467caf517811ae40c2e6',
            resolution: 'low_resolution',
            template: '<div class="item iteminsta"><a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a></div>',
            sortBy: 'most-recent',
            limit: 4,
            links: false
          });
          userFeed.run();
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            $.jGrowl("Товар добавлен в корзину!");
            return false;
        });
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            scrollDistance: 300, // Distance from top/bottom before showing element (px)
            scrollFrom: 'top', // 'top' or 'bottom'
            scrollSpeed: 300, // Speed back to top (ms)
            easingType: 'linear', // Scroll to top easing (see http://easings.net/)
            animation: 'fade', // Fade, slide, none
            animationSpeed: 200, // Animation in speed (ms)
            scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
            //scrollTarget: false, // Set a custom target element for scrolling to the top
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
            scrollTitle: false, // Set a custom <a> title if required.
            scrollImg: false, // Set true to use image
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647 // Z-Index for the overlay
        });
    });

    $('#myCarousel').carousel({
        interval: 10000
    })

    $('.carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
