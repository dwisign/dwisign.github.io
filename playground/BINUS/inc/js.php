<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- owl-carousel -->
<script src="plugin/owl-carousel/owl.carousel.js"></script>
<script src="plugin/owl-carousel/google-code-prettify/prettify.js"></script>

<script type="text/javascript">
  $("#slideBanner").owlCarousel({
      autoPlay: true, //Set AutoPlay to 3 seconds
      items : 1,
      itemsDesktopSmall : [1200,1],
      itemsTablet : [768,1],
      navigation : false
  });

  $("#slideAccreditation").owlCarousel({
      autoPlay: false, //Set AutoPlay to 3 seconds
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      loop: true
  });
</script>
