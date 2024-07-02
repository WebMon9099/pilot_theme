jQuery(function ($) {
  $.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $('#test_div').scroll(() => {
    console.log('scroll');
    if ($('#module-purchase').isInViewport()) $('.mobile-footer').hide();
    else $('.mobile-footer').show();
  });
});
