<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	//HAMBURGER MENU CHANGE ICON TO CLOSE
	$(function() {
	  $('#ChangeToggle').click(function() {
	    $('#navbar-hamburger').toggleClass('hidden');
	    $('#navbar-close').toggleClass('hidden');  
	  });
	});
</script>
