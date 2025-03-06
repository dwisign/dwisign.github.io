<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo INCLUDE_JS; ?>/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo INCLUDE_JS; ?>/bootstrap.min.js"></script>
<!-- outdatebrowser -->
<script src="<?php echo INCLUDE_JS; ?>/outdatedbrowser.js"></script>
<!-- IE Bootstrap support -->
<script src="<?php echo INCLUDE_JS; ?>/respond.js"></script>

<!-- CONTOH PENGGUNAAN SCRIPT  MULTIPLE FLEXSLIDER -->
<?php if(isset($dynamic_js)) echo $dynamic_js; ?>


<script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>


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


<script type="text/javascript">
	$(function() {
    	$('.container') .find('legend') .wrapAll('fieldset');
	});
</script>