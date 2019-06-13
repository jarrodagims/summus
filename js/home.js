(function($) {
  $(document).ready(function() {
    //associate each waypoint with one list item in nav-sidebar

    $(".waypoint").each(function() {
      var self = $(this);

      var inview = new Waypoint.Inview({
        element: self,
        enter: function(direction) {
          $(self.attr("data-target")).addClass("active");
          //alert("Enter triggered with direction " + direction);
        },
        entered: function(direction) {
          //alert("Entered triggered with direction " + direction);
        },
        exit: function(direction) {},
        exited: function(direction) {
          $(self.attr("data-target")).removeClass("active");
          //alert("Exited triggered with direction " + direction);
        }
      });
      // var self = $(this);

      $(this).waypoint({
        handler: function() {
          // self.addClass("active");
          // $(self.attr("data-target")).addClass("active");
          //disable after activating once
          //this.destroy();
        },
        offset: 0
      });
    });

    $(".sidebar-link").click(function(e) {
      e.preventDefault();

      $("html, body").animate(
        {
          scrollTop: $($(this).attr("href")).offset().top
        },
        500,
        "linear"
      );
    });

    //stick nav
    function stickyExample() {
      var $stickyElement = $(".sticky");

      if ($stickyElement.length) {
        sticky = new Waypoint.Sticky({
          element: $stickyElement[0]
        });
      }
    }

    stickyExample();
  });
})(jQuery);
