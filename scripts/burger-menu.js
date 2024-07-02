var burgerMenuOpen = false;

jQuery(document).ready(function () {
  jQuery('.toggle-nav').click(function (e) {
    burgerMenuOpen = !burgerMenuOpen;
    jQuery('.mobile-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });

    jQuery('#toggle-nav').css(
      burgerMenuOpen
        ? {
            'background-color': 'unset',
            'border-radius': '0',
          }
        : {
            'background-color': 'unset',
            'border-radius': '0',
          }
    );
    jQuery('#toggle-nav-img').attr(
      'src',
      burgerMenuOpen ? '/parts/icon_closed.svg' : '/parts/icon_open.svg'
    );

    e.preventDefault();
  });

  jQuery('.mobile-menu').click(function () {
    burgerMenuOpen = false;
    jQuery('.mobile-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });

    jQuery('#toggle-nav-img').attr(
      'src',
      burgerMenuOpen ? '/parts/icon_closed.svg' : '/parts/icon_open.svg'
    );
  });

  jQuery('.mobile-menu-inner').click(function (e) {
    e.stopPropagation();
  });
});
