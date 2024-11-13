function slick_quickview_popup() {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        infinite: true,
        prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        nextArrow: '<i class="fa fa-angle-right " aria-hidden="true"></i>',
    });
}

function kt_get_scrollbar_width() {
    var $inner = jQuery('<div style="width: 100%; height:200px;">test</div>'),
        $outer = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append($inner),
        inner = $inner[0],
        outer = $outer[0];
    jQuery('body').append(outer);
    var width1 = parseFloat(inner.offsetWidth);
    $outer.css('overflow', 'scroll');
    var width2 = parseFloat(outer.clientWidth);
    $outer.remove();
    return (width1 - width2);
}
