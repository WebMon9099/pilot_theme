var helpMenuOpen = false;

jQuery(document).ready(function () {
  jQuery('.help_tab').click(function (e) {
    helpMenuOpen = !helpMenuOpen;
    jQuery('.help-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });

    e.preventDefault();
  });

  jQuery('.close-help').click(function (e) {
    helpMenuOpen = false;

    jQuery('.help-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });

    e.preventDefault();
  });

  jQuery('.help-menu').click(function () {
    helpMenuOpen = false;
    jQuery('.help-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });
  });

  jQuery('.help-menu-inner').click(function (e) {
    e.stopPropagation();
  });
});
