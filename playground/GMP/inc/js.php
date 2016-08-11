<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!--Owl Carousel-->
<script src="plugin/owl-carousel/owl.carousel.js"></script>
<script src="plugin/owl-carousel/prettify.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script src="plugin/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script src="plugin/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script src="plugin/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<!-- chart-js -->
<script src="plugin/chart-js/Chart.js"></script>



<!--SLIDER-->
<script type="text/javascript">
  $(document).ready(function() {
    $("#banner-slider").owlCarousel({
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      pagination : true,
      autoPlay : true,
      transitionStyle : "fadeUp"
      });

 
    $("#media").owlCarousel({
      autoPlay: true, //Set AutoPlay to 3 seconds
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      itemsTablet : [768,3],
      itemsMobile : [480,1],
      navigation: false,
      pagination: true,
    });


    $("#product").owlCarousel({
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      pagination : true,
      autoPlay : true,
      transitionStyle : "goDown"
      });  
  });
</script>



<script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>

  <script type="text/javascript">
      $(function() {
          'use strict';

          var line_chart_options = {
              scaleGridLineColor : "rgba(0,0,0,.05)",
              responsive: true
          };
          var data = {
              labels: ["2011", "2012", "2013", "2014", "2015"],
              datasets: [
                  {
                      label: "Sugar Production",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(151,187,205,1)",
                      pointColor: "rgba(151,187,205,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(151,187,205,1)",
                      data: [20, 40, 30, 75, 45]
                  },
                  {
                      label: "Cane Harvested",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(93,93,93,1)",
                      pointColor: "rgba(93,93,93,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(93,93,93,1)",
                      data: [40, 25, 60, 15, 30]
                  },
                  {
                      label: "Cane Available",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(133,193,52,1)",
                      pointColor: "rgba(133,193,52,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(133,193,52,1)",
                      data: [65, 59, 80, 81, 56]
                  },
                  {
                      label: "Rendemen",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(230,180,0,1)",
                      pointColor: "rgba(230,180,0,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(230,180,0,1)",
                      data: [28, 48, 40, 19, 86]
                  }
              ]
          };

          var line_chart_options_2 = {
              scaleGridLineColor : "rgba(0,0,0,.05)",
              responsive: true
          };
          var data_2 = {
              labels: ["2011", "2012", "2013", "2014", "2015"],
              datasets: [
                  {
                      label: "Sugar Production",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(151,187,205,1)",
                      pointColor: "rgba(151,187,205,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(151,187,205,1)",
                      data: [20, 35, 55, 10, 65]
                  },
                  {
                      label: "Cane Harvested",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(93,93,93,1)",
                      pointColor: "rgba(93,93,93,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(93,93,93,1)",
                      data: [25, 45, 35, 80, 50]
                  },
                  {
                      label: "Cane Available",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(133,193,52,1)",
                      pointColor: "rgba(133,193,52,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(133,193,52,1)",
                      data: [38, 58, 50, 29, 96]
                  },
                  {
                      label: "Rendemen",
                      fillColor: "rgba(0,0,0,0)",
                      strokeColor: "rgba(230,180,0,1)",
                      pointColor: "rgba(230,180,0,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(230,180,0,1)",
                      data: [55, 49, 70, 71, 46]
                  }
              ]
          };

          var ctx1 = $("#chart-gula").get(0).getContext("2d");
          var myLineChart1 = new Chart(ctx1).Line(data, line_chart_options);

          var ctx2 = $("#chart-molase").get(0).getContext("2d");
          var myLineChart2;

          $('#tab1').on('shown.bs.tab', function (e) {
              myLineChart2.destroy();
              myLineChart1 = new Chart(ctx1).Line(data, line_chart_options);
          });

          $('#tab2').on('shown.bs.tab', function (e) {
              myLineChart1.destroy();
              myLineChart2 = new Chart(ctx2).Line(data_2, line_chart_options_2);
          });
      });
  </script>





<script type="text/javascript">
  $("[data-toggle=tooltip]").tooltip();
</script>



<!-- MAP -->
<script type="text/javascript">
    jQuery('#map a').click(function(){var data=jQuery(this).attr('data-type');
    jQuery('#map-menu .child').addClass('hide');
    jQuery('#map-menu .child#list'+data).removeClass('hide').show('medium');
    return false;});
</script>
<!-- END-MAP -->




     





  


 


