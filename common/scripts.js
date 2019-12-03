function selectedActive(elem) {
  var selectedAttr = $(elem),
    selectionID = "." + $(selectedAttr).data("select");

  $(".selecton a").removeClass("active");
  $(selectedAttr).addClass("active");
  $(".food-menu").removeClass("active");

  if (selectionID == ".*") $(".food-menu").addClass("active");
  else $(selectionID).addClass("active");
}

function enableCounterUp(a) {
  var counterElement;
  if (isExists("#counter")) {
    counterElement = $("#counter");
  } else {
    return;
  }
  var oTop = $("#counter").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $(".counter-value").each(function() {
      var $this = $(this),
        countDuration = $this.data("duration"),
        countTo = $this.attr("data-count");
      $({ countNum: $this.text() }).animate(
        { countNum: countTo },
        {
          duration: countDuration,
          easing: "swing",
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        }
      );
    });
    a = 1;
  }
  return a;
}

function panelAccordian() {
  var panelTitle = $(".panel-title");
  panelTitle.on("click", function() {
    $(this).toggleClass("active");
    return false;
  });
}

function enableRadialProgress() {
  $(".radial-progress").each(function() {
    var $this = $(this),
      progPercent = $this.data("prog-percent");

    var bar = new ProgressBar.Circle(this, {
      color: "#fff",
      strokeWidth: 3,
      trailWidth: 0,
      easing: "easeInOut",
      duration: 1400,
      text: {},
      from: { color: "#fff", width: 1 },
      to: { color: "#EF002E", width: 3 },
      // Set default step function for all animate calls
      step: function(state, circle) {
        circle.path.setAttribute("stroke", state.color);
        circle.path.setAttribute("stroke-width", state.width);

        var value = Math.round(circle.value() * 100);
        if (value === 0) {
          circle.setText("");
        } else {
          circle.setText(value);
        }
      }
    });

    $(this).waypoint(
      function() {
        bar.animate(progPercent);
      },
      { offset: "90%" }
    );
  });
}

(function($) {
  "use strict";

  // ACCORDIAN

  panelAccordian();

  // RADIAL PROGRESS BAR
  enableRadialProgress();

  /*COUNTER*/
  var countLineProgress = 0;
  var countCounterUp = 0;
  var a = 0;
  countCounterUp = enableCounterUp(countCounterUp);

  $(window).on("scroll", function() {
    countCounterUp = enableCounterUp(countCounterUp);
  });

  /*CUSTOME ISOTOPE*/
  var selectedAttr = $("[data-select].active");
  selectedActive(selectedAttr);

  $("[data-select]").on("click", function() {
    var selectedAttr = $(this);
    selectedActive(selectedAttr);
    return false;
  });

  // DROPDOWN MENU

  var winWidth = $(window).width();
  dropdownMenu(winWidth);

  $(window).on("resize", function() {
    winWidth = $(window).width();
    dropdownMenu(winWidth);
  });

  $("[data-menu]").on("click", function() {
    var mainMenu = $(this).data("menu");

    $(mainMenu).toggleClass("visible-menu");
  });

  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 30) {
      $("body").addClass("sticky-header");
    } else {
      $("body").removeClass("sticky-header");
    } //if-else
  }); //win func.
})(jQuery);

function dropdownMenu(winWidth) {
  if (winWidth > 767) {
    $(".main-menu li.drop-down")
      .on("mouseover", function() {
        var $this = $(this),
          menuAnchor = $this.children("a");

        menuAnchor.addClass("mouseover");
      })
      .on("mouseleave", function() {
        var $this = $(this),
          menuAnchor = $this.children("a");

        menuAnchor.removeClass("mouseover");
      });
  } else {
    $(".main-menu li.drop-down > a").on("click", function() {
      if ($(this).attr("href") == "#") return false;
      if ($(this).hasClass("mouseover")) {
        $(this).removeClass("mouseover");
      } else {
        $(this).addClass("mouseover");
      }
      return false;
    });
  }
};

function isExists(elem) {
  if ($(elem).length > 0) {
    return true;
  }
  return false;
};

function initMap() {
  // Create a map object, and include the MapTypeId to add
  // to the map type control.

  var uluru = { lat: 56.946285, lng: 24.105078 };
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru
  });

  var image = "images/google-marker.png";
  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    icon: image
  });
  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set("styled_map", styledMapType);
  map.setMapTypeId("styled_map");
}
