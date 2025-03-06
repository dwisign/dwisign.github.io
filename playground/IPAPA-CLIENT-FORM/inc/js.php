<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!--Form Wizard-->
<script src="plugin/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>


<!--FORM WIZARD-->
<script type="text/javascript">
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard .progress-bar').css({width:$percent+'%'});

			$("form").submit(function() {
			    console.log($(this).serializeArray());
			    return false;
			});

			$("#otherRadio0").click(function(){
		        $("#inputOthers0").val("").attr("readonly",true);
		        if($("#otherRadio0").is(":checked")){
		            $("#inputOthers0").removeAttr("readonly");
		            $("#inputOthers0").focus();
		        }
		    });

		    $("#otherRadio1").click(function(){
		        $("#inputOthers1").val("").attr("readonly",true);
		        if($("#otherRadio1").is(":checked")){
		            $("#inputOthers1").removeAttr("readonly");
		            $("#inputOthers1").focus();
		        }
		    });

		    $("#otherRadio2").click(function(){
		        $("#inputOthers2").val("").attr("readonly",true);
		        if($("#otherRadio2").is(":checked")){
		            $("#inputOthers2").removeAttr("readonly");
		            $("#inputOthers2").focus();
		        }
		    });

		    $("#otherRadio3").click(function(){
		        $("#inputOthers3").val("").attr("readonly",true);
		        if($("#otherRadio3").is(":checked")){
		            $("#inputOthers3").removeAttr("readonly");
		            $("#inputOthers3").focus();
		        }
		    });

		    $("#otherRadio4").click(function(){
		        $("#inputOthers4").val("").attr("readonly",true);
		        if($("#otherRadio4").is(":checked")){
		            $("#inputOthers4").removeAttr("readonly");
		            $("#inputOthers4").focus();
		        }
		    });
		}});
		window.prettyPrint && prettyPrint();

		$('#rootwizard .finish').click(function() {
			$('#rootwizard').find("a[href*='tab1']").trigger('click');
			$('#modalSuccess').modal("show");
		})
	});


</script>
