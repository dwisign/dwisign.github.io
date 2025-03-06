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
	  controlNav: false,
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
	});
</script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: "1985:2010"
    });
  });
</script>



<!--
<script>
  $( "#pop-up" ).click(function() {
    $('#myModal-1').modal();
    $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: "2002:2012",
    });
    $('#ui-datepicker-div').appendTo($('#myModal-1'));
  });
</script>
-->

<!-- DATEPICKER -->
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
      $('#hotel-date1').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#hotel-date2').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#flight-date').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#reservation1').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#reservation2').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#reservation3').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#reservation4').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#birth1').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#reservationtime').daterangepicker({ timePicker: true, singleDatePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'}, function(start, end, label) {
    	console.log(start.toISOString(), end.toISOString(), label);
  	  });
  	  $('#reservationtime2').daterangepicker({ timePicker: true, singleDatePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'}, function(start, end, label) {
    	console.log(start.toISOString(), end.toISOString(), label);
  	  });
   });
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





  