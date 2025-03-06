<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
//navscroll
$(function () {
  $(document).scroll(function () {
	  var $nav = $(".top-menu");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});

$( document ).ready(function() {
    document.getElementById("capture").autoplay;
});
</script>
