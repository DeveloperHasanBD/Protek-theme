(function ($) {
  $(document).ready(function () {
    // home slider

    var swiper = new Swiper('.home-slider', {
      effect: 'fade',
      speed: 2000,
      autoplay: {
        delay: 5000,
      },
      loop: true,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // navbar sticky

    $(window).scroll(function () {
      var navbar = $('#main-header');

      if ($(window).scrollTop() >= 200) {
        navbar.addClass('sticky');
      } else {
        navbar.removeClass('sticky');
      }
    });

    // mobile sidebar show hide
    $(document).on('click', '#openButton', function () {
      $('#targetElement').removeClass('sidebar-hide');
    });
    $(document).on('click', '#closeButton', function () {
      $('#targetElement').addClass('sidebar-hide');
    });

    // mobile menu dropdown show hide with icon

    var previousClickedElement = null;

    $('.mobile-menu-items .has-children ul.sub-menu').hide();

    $('.mobile-menu-items .has-children').each(function () {
      $(this).click(function () {
        if (previousClickedElement !== null && previousClickedElement !== this) {
          $(previousClickedElement)
            .removeClass('show')
            .find('ul.sub-menu')
            .slideUp(300); // Adjust the duration as needed
          $(previousClickedElement).find('.mean-expand').html('+');
        }

        $(this).toggleClass('show');

        var currentIcon = $(this).find('.mean-expand');
        currentIcon.html(currentIcon.html() === '-' ? '+' : '-');

        $(this).find('ul.sub-menu').slideToggle(300); // Adjust the duration as needed

        previousClickedElement = this;
      });
    });

    // scroll to top for all pages

    $('body').append(
      '<button id="scrollToTopBtn"><i class="fa-light fa-arrow-up"></i></button>'
    );

    $('#scrollToTopBtn').hide();

    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#scrollToTopBtn').fadeIn();
      } else {
        $('#scrollToTopBtn').fadeOut();
      }
    });

    $('#scrollToTopBtn').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 'slow');
    });

    // megamenu show hide
    var openMegaMenu = null;

    $('.megamenu-parent a').click(function () {
      var megaMenu = $(this).closest('.megamenu-parent').find('.megamenu-main');

      if (openMegaMenu && openMegaMenu[0] !== megaMenu[0]) {
        openMegaMenu.fadeOut('slow');
        openMegaMenu.closest('.megamenu-parent').find('a').removeClass('active');
      }

      megaMenu.fadeToggle('slow');

      openMegaMenu = megaMenu;
    });

    $('.megamenu-main .megamenu-close').click(function (e) {
      e.preventDefault();

      $(this).closest('.megamenu-main').fadeOut('slow');

      $(this).closest('.megamenu-parent').children('a').removeClass('active');
    });

    $(document).on('click', function (e) {
      if (!$(e.target).closest('.megamenu-parent').length) {
        if (openMegaMenu) {
          openMegaMenu.fadeOut('slow');
          openMegaMenu
            .closest('.megamenu-parent')
            .find('a')
            .removeClass('active');
          openMegaMenu = null;
        }
      }
    });

    $('.megamenu-main').on('click', function (e) {
      e.stopPropagation();
    });

    var menuitemSelector = 'header .main-header ul.parent-ul > li > a';

    $(menuitemSelector).click(function () {
      var isActive = $(this).hasClass('active');

      $(menuitemSelector).removeClass('active');

      if (!isActive) {
        $(this).toggleClass('active');
      }
    });

    // Mobile menu
    // $('.main-header-items .parent-ul').meanmenu();
  });

})(jQuery)