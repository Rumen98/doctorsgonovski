// Assuming you're still using jQuery for the Owl Carousel
$(document).ready(function() {
    $('#doctorSlideshow').owlCarousel({
      nav: true,
      dots: false,
      navText: ["<span class='mai-arrow-back'></span>", "<span class='mai-arrow-forward'></span>"],
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        992: {
          items: 3
        }
      }
    });

    // Back to top
    var backTop = $(".back-to-top");

    $(window).scroll(function() {
      if ($(document).scrollTop() > 400) {
        backTop.css('visibility', 'visible');
      } else {
        backTop.css('visibility', 'hidden');
      }
    });

    backTop.click(function() {
      $('html').animate({
        scrollTop: 0
      }, 1000);
      return false;
    });
  });

  // This part doesn't need jQuery
  document.addEventListener("DOMContentLoaded", function() {
    // Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl);
    });

    // Page scroll animate
    new WOW().init();
  });
