<!-- JavaScript plugins (requires jQuery) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<!-- additional ui element -->
<script src="js/jquery-ui.js"></script>		
<!-- Optionally enable responsive features in IE8 -->
<script src="js/respond.src.js"></script>



<!-- FLEXSLIDER -->
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
	$('#first-slider').flexslider({
	  animation: 'slide',
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




<script type="text/javascript">
    function setImage(select){
      var image = document.getElementsByName("image-swap")[0];
      image.src = select.options[select.selectedIndex].value;
    } 
</script>








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





<script type="text/javascript">
  // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
</script>





<!-- INCREMENT BUTTON -->
<script type="text/javascript">
  $(function() {
    $(".button").on("click", function() {
      var $button = $(this);
      var oldValue = $button.parent().find("input").val();
      if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
       // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }
      $button.parent().find("input").val(newVal);
    });
  });
</script>