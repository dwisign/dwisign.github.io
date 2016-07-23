<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!--Owl Carousel-->
<script src="plugin/owl-carousel/owl.carousel.js"></script>
<script src="plugin/owl-carousel/prettify.js"></script>
<!--Form Wizard-->
<script src="plugin/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<!--File Upload-->
<script src="plugin/file-upload/fileinput.min.js" type="text/javascript"></script>
<!--Home Gallery-->
<script src="plugin/gallery/imagesloaded.pkgd.min.js"></script>
<script src="plugin/gallery/masonry.pkgd.min.js"></script>
<script src="plugin/gallery/classie.js"></script>
<script src="plugin/gallery/cbpGridGallery.js"></script>
<!--filter mixitup-->
<script src="plugin/mixitup/jquery.mixitup.js"></script>
<!--select2-->
<script src="plugin/select2/js/select2.min.js"></script>

		

<!--SLIDER-->
<script type="text/javascript">
	$(document).ready(function() {
		$("#testimoni-slider").owlCarousel({
		  navigation : false,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : true,
		  pagination : true,
		  autoPlay : true,
		  responsive: true,
	  	});
	});
</script>


<!--FORM WIZARD-->
<script type="text/javascript">
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard .progress-bar').css({width:$percent+'%'});
		}});
		window.prettyPrint && prettyPrint()
	});
</script>


<!--INPUT UPLOAD FILE-->
<script type="text/javascript">
    $("#file-1").fileinput({
        // uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        showUploadedThumbs: false,
        maxFileSize: 20000,
        maxFilesNum: 1,
	});

	$("#file-2").fileinput({
        // uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        showUploadedThumbs: false,
        maxFileSize: 20000,
        maxFilesNum: 1,
	});
</script>


<!--HOME GALLERY-->
<script type="text/javascript">
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>


<!--FILTER GALLERY-->
<script type="text/javascript">
		$('#filterCaller').mixItUp({
		        activeClass: 'on',
		        callbacks: { 
		            onMixEnd: function(state){
		                masonryGrid(); // ******* here call masonry function
		            }
		        }
		    });

		function masonryGrid(){
		    var $container = $('#grid-gallery');
		    // initialize
		    $container.masonry({
		        itemSelector: '.mix',
		        columnWidth: '.grid-sizer', //as you wish , you can use numeric 
		        isAnimated: true,
		    });
		    $container.masonry('reloadItems');
		    $container.masonry('layout');
		}
</script>

<script type="text/javascript">	
	$(function(){
	  var $filterSelect = $('#FilterSelect'),
	      $container = $('#filterCaller');
	  
	  $container.mixItUp();
	  
	  $filterSelect.on('change', function(){
	    $container.mixItUp('filter', this.value);
	  });
	});
</script> 


<!--SELECT2-->
<script type="text/javascript">
  $('select').select2();
</script>

















	






