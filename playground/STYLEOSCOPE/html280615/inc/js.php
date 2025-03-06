<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!--Owl Carousel-->
<script src="plugin/owl-carousel/owl.carousel.js"></script>
<script src="plugin/owl-carousel/prettify.js"></script>
<!--cropper-->
<script src="plugin/cropper/cropper.js"></script>
<script src="plugin/cropper/main-cropper.js"></script>
<!--scriptcam-->
<script src="plugin/scriptcam/swfobject.js"></script>
<script src="plugin/scriptcam/scriptcam.js"></script>
<!-jquery-crop-zoom-->
<!-- <script type="text/javascript" src="plugin/jqueryCropZoom/js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="plugin/jqueryCropZoom/js/jquery.cropzoom.js"></script> -->



<script type="text/javascript">
	$(document).ready(function() {
		$("#landing-slider").owlCarousel({
		  navigation : true,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : true,
		  pagination : false,
		  autoPlay : true,
		  navigationText: false,
		  responsive: true,
	  	});

	  	$("#question-slider").owlCarousel({
		  navigation : true,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : true,
		  pagination : true,
		  autoPlay : false,
		  rewindNav : false,
		  navigationText: false,
	  	});

	  	$("#pick-bg-slider").owlCarousel({
		  items : 3,
	      itemsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3],
	      itemsTablet : [768,3],
	      itemsMobile : [480,1],
	      navigation: false,
	      pagination: true,
	  	});
	});
</script>


<script language="JavaScript"> 
    $(document).ready(function() {

      $("#webcam").scriptcam({
        showMicrophoneErrors:false,
        onError:onError,
        cornerRadius:0,
        width: 350,
        height: 250,
        cornerColor:'e3e5e2',
        embedcode: 'transparent',
        onWebcamReady:onWebcamReady,
        uploadImage:'images/upload.gif',
        onPictureAsBase64:base64_tofield_and_image,
      });
    });

    function base64_tofield() {
      $('#formfield').val($.scriptcam.getFrameAsBase64());
    };
    function base64_toimage() {
      $('#image').attr("src","data:image/png;base64,"+$.scriptcam.getFrameAsBase64());
    };
    function base64_tofield_and_image(b64) {
      $('#formfield').val(b64);
      $('#image').attr("src","data:image/png;base64,"+b64);
    };
    function changeCamera() {
      $.scriptcam.changeCamera($('#cameraNames').val());
    }
    function onError(errorId,errorMsg) {
      $( "#btn1" ).attr( "disabled", true );
      $( "#btn2" ).attr( "disabled", true );
      alert(errorMsg);
    }     
    function onWebcamReady(cameraNames,camera,microphoneNames,microphone,volume) {
      $.each(cameraNames, function(index, text) {
        $('#cameraNames').append( $('<option></option>').val(index).html(text) )
      }); 
      $('#cameraNames').val(camera);
    };

    if (opts.browser.mozilla) {
        var params = {
          menu: 'false',
          wmode: 'transparent',
          allowScriptAccess: 'always',
          allowFullScreen: 'true'
        };
      }
</script>


<script type="text/javascript">
//<![CDATA[
    $('#pick-bg-slider').addClass('active');  
//]]>
</script>


<script type="text/javascript">
    // $(document).ready(function(){
    //    var cropzoom = $('#crop_container').cropzoom({
    //         width:400,
    //         height:300,
    //         bgColor: '#CCC',
    //         enableRotation:true,
    //         enableZoom:true,
    //         zoomSteps:10,
    //         rotationSteps:10,
    //         selector:{        
    //           centered:false,
    //           borderColor:'blue',
    //           borderColorHover:'yellow',
    //           startWithOverlay: false,
    //           hideOverlayOnDragAndResize: true
    //         },
    //         image:{
    //             source:'images/img-crop.jpg',
    //             width:1024,
    //             height:768,
    //             minZoom:10,
    //             maxZoom:150,
    //             snapToContainer:false
    //         }
    //     });
    //     $('#crop').click(function(){ 
    //         cropzoom.send('resize_and_crop.php','POST',{},function(rta){
    //             $('.result').find('img').remove();
    //             var img = $('<img />').attr('src',rta);
    //             $('.result').find('.txt').hide().end().append(img);
    //         });
    //     });
    //     $('#restore').click(function(){
    //         $('.result').find('img').remove();
    //         $('.result').find('.txt').show();
    //         cropzoom.restore();
    //     });
        
    //    var cropzoom2 = $('#crop_container2').cropzoom({
    //         width:400,
    //         height:300,
    //         bgColor: '#CCC',
    //         enableRotation:true,
    //         enableZoom:true,
    //         zoomSteps:10,
    //         rotationSteps:10,
    //         expose:{
    //             slidersOrientation: 'horizontal',
    //             zoomElement: '#zoom',
    //             rotationElement: '#rot',
    //             elementMovement:'#movement'
    //         },
    //         selector:{        
    //           centered:true,
    //           borderColor:'blue',
    //           borderColorHover:'yellow',
    //           startWithOverlay: false,
    //           hideOverlayOnDragAndResize: true              
    //         },
    //         image:{
    //             source:'images/img-crop.jpg',
    //             width:1024,
    //             height:768,
    //             minZoom:50,
    //             maxZoom:200,
    //             startZoom:40,
    //             useStartZoomAsMinZoom:true,
    //             snapToContainer:true
    //         }
    //     });
    //     $('#restore2').click(function(){
    //         cropzoom2.restore();
    //     });
    //     $('#crop2').click(function(){ 
    //         cropzoom2.send('resize_and_crop.php','POST',{},function(rta){
    //             $('#result_image').find('img').remove();
    //             var img = $('<img />').attr('src',rta);
    //             $('#result_image').append(img);
    //         });
    //     });
        
    // });
</script>












	






