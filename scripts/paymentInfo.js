var paymentInfoOpen = false;

jQuery(document).ready(function () {
  jQuery('.purchase_information').click(function (e) {
    paymentInfoOpen = !paymentInfoOpen;
    jQuery('.payment-info-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });

    e.preventDefault();
  });

  jQuery('.close-info').click(function (e) {
    paymentInfoOpen = false;

    jQuery('.payment-info-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });

    e.preventDefault();
  });

  jQuery('.payment-info-menu').click(function () {
    paymentInfoOpen = false;
    jQuery('.payment-info-menu').animate({
      width: ['toggle', 'swing'],
      opacity: 'toggle',
    });
  });

  jQuery('.payment-info-inner').click(function (e) {
    e.stopPropagation();
  });
});
