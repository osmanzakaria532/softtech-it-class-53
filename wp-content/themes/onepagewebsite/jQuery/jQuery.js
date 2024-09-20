(function ($) {
  jQuery(document).ready(function () {
    jQuery(".main-menu ul li a").click(function () {
      var link = jQuery(this).attr("href");

      jQuery("html, body").animate({
        scrollTop: jQuery(link).offset().top,
      });

      return false;
    });

    jQuery(window).scroll(function () {
      if (jQuery(window).scrollTop() > 40) {
        jQuery(".main-menu").slideDown().addClass("fixed");
      } else {
        jQuery(".main-menu").removeClass("fixed");
      }
    });
  });
})(jQuery);
