(function($) {
  $(document).ready(function() {
    //associate each waypoint with one list item in nav-sidebar
    $.fn.cycle.log = $.noop;

    //main floor plan slideshow
    $(".slideshow").cycle({
      timeout: 0,
      fx: "slide",
      slides: "> div",
      pauseOnHover: "true",
      // pager: ".slide-nav",
      next: ".slide-next",
      pagerTemplate: ""
      // autoHeight: "container"
    });

    $(".waypoint").each(function() {
      var self = $(this);

      var inview = new Waypoint.Inview({
        element: self,
        enter: function() {
          $(self.attr("data-target")).addClass("active");
        },
        entered: function() {},
        exit: function() {},
        exited: function() {
          $(self.attr("data-target")).removeClass("active");
        }
      });

      $(this).waypoint({
        handler: function() {},
        offset: 0
      });
    });

    (function() {
      var deskFunctions = function() {
        //make dropdown hoverable
      };

      var mobileFunctions = function() {
        //make dropdown clickable
      };

      //Only do slideshow on small screens
      var timeout;
      window.addEventListener(
        "resize",
        function(event) {
          if (timeout) {
            window.cancelAnimationFrame(timeout);
          }
          timeout = window.requestAnimationFrame(function() {
            resize();
          });
        },
        false
      );

      function resize() {
        if ($(window).width() >= 992) {
          deskFunctions();
        } else if ($(window).width() < 992) {
          mobileFunctions();
        }
      }

      resize();
    })();
  });
})(jQuery);
