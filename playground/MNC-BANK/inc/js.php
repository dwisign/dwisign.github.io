<!-- JavaScript plugins (requires jQuery) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>	
<!-- Optionally enable responsive features in IE8 -->
<script src="js/respond.min.js"></script>
<!-- FLEXSLIDER -->
<script src="js/jquery.flexslider.js"></script>
<!-- tiny-scroll-bar-->
<script type="text/javascript" src="js/jquery.tinyscrollbar.js"></script> 
<!-- sorting-->
<script type='text/javascript' src='js/filter.js'></script>



<!-- FLEXSLIDER -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
	$('#first-slider').flexslider({
	  animation: 'fade',
	  slideshow: 'true',
	  controlNav: true,
	  //directionNav: false,             
		});
	
	$('#second-slider').flexslider({
	  animation: 'fade',
		});
	});

  $(window).load(function() {
	  $('#third-slider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });

    $('#fifth-slider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });

    $('#fourth-slider').flexslider({
      animation: 'slide',
      slideshow: 'true',
      //directionNav: false,             
      });
	 });
</script>
<!-- END-FLEXSLIDER -->







<!-- DROPDOWN HOVER -->
<script src="js/twitter-bootstrap-hover-dropdown.js"></script>
<!-- DROPDOWN HOVER SUB-SUBMENU BOOTSTRAP-->
<script type="text/javascript">
  $(function(){
  $(".dropdown-menu > li > a.trigger").on("mouseover",function(e){
    var current=$(this).next();
    var grandparent=$(this).parent().parent();
    if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
      $(this).toggleClass('right-caret left-caret');
    grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
    grandparent.find(".sub-menu:visible").not(current).hide();
    current.toggle();
    e.stopPropagation();
  });
  $(".dropdown-menu > li > a:not(.trigger)").on("mouseover",function(){
    var root=$(this).closest('.dropdown');
    root.find('.left-caret').toggleClass('right-caret left-caret');
    root.find('.sub-menu:visible').hide();
  });
  });
</script>
<!-- END-DROPDOWN HOVER -->




<!-- TINYSCROLBAR -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#scrollbar1').tinyscrollbar();
    });
</script>
<!-- END-TINYSCROLBAR -->



<!-- IE-CONDITION -->
<script>  
        var ms_ie = false;
      var ua = window.navigator.userAgent;
      var old_ie = ua.indexOf('MSIE ');
      var new_ie = ua.indexOf('Trident/');
      if ((old_ie > -1) || (new_ie > -1)) {
      ms_ie = true;
      }
      if ( ms_ie ) {
      $('body').addClass('ie');
      } 
  </script>
<!--END IE-CONDITION -->





<!-- GOOGLE ANLYTIC -->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55547314-1', 'auto');
      ga('send', 'pageview');
  </script>
<!-- END GOOGLE ANLYTIC -->




