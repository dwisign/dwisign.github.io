<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- flexslider -->
<script src="js/jquery.flexslider.js"></script>
<!-- form-step -->
<script src="js/jquery.bootstrap.wizard.js"></script>
<script src="js/prettify.js"></script>
<!-- form-validator -->
<script src="js/validator.js"></script>
<!-- tambahan komponen -->
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.countTo.js"></script>


<!-- CONTOH PENGGUNAAN SCRIPT  MULTIPLE FLEXSLIDER -->

<script type="text/javascript">
    $(window).load(function() {

      //SLIDER 1//
        $('#slider-1').flexslider({
          	animation: "slide",
            slideshow: false,
            smoothHeight: true, 
            // reverse: true,
            // animationLoop: true, 
        });
      //END SLIDER 1//
    });
</script>

<script type="text/javascript">
	   $("#nav a[href^='#']").on('click', function(e) {

       // prevent default anchor click behavior
       e.preventDefault();

       // animate
       $('html, body').animate({
           scrollTop: $(this.hash).offset().top
         }, 300, function(){
   
           // when done, add hash to url
           // (default click behaviour)
           window.location.hash = this.hash;
         });
    });
</script>




<!-- CONTOH PENGGUNAAN SCRIPT  MULTIPLE FLEXSLIDER -->

<script type="text/javascript">
    $(window).load(function() {

      //SLIDER 1//
        $('#slider-1').flexslider({
            animation: "slide",
            slideshow: false,
            smoothHeight: true, 
            // reverse: true,
            // animationLoop: true, 
        });
      //END SLIDER 1//
    });
</script>

<script type="text/javascript">
     $("#nav a[href^='#']").on('click', function(e) {

       // prevent default anchor click behavior
       e.preventDefault();

       // animate
       $('html, body').animate({
           scrollTop: $(this.hash).offset().top
         }, 300, function(){
   
           // when done, add hash to url
           // (default click behaviour)
           window.location.hash = this.hash;
         });
    });
</script>

<script>
  $(document).ready(function() {
      $('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
        if(index==2) {
          // Make sure we entered the name
          if(!$('#name').val()) {
            alert('You must enter your name');
            $('#name').focus();
            return false;
          }
        }

        // Set the name for the next tab
        // $('#tab3').html('Hello, ' + $('#name').val());

      }, onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('#rootwizard .progress-bar').css({width:$percent+'%'});
      }});    
    window.prettyPrint && prettyPrint()
  });
</script>

 <script type="text/javascript">
  $(document).ready(function() {
      $('#rootwizard .finish').click(function() {
        alert('Finished!, Starting over!');
        $('#rootwizard').find("a[href*='tab1']").trigger('click');
      });
    });
 </script>

 <script type="text/javascript">
  $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1945:2010"
      });
</script>


<script type="text/javascript">
    jQuery(function ($) {
      // custom formatting example
      $('#earth').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });
                   
      // start all the timers
      $('.timer').each(count);
      
      // restart a timer when a button is clicked
      $('.restart').click(function (event) {
        event.preventDefault();
        var target = $(this).data('target');
        count.call($(target));
      });
      
      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
</script>



<script type="text/javascript">
    $('#jml-spbu-outer').change(function() {
      opt = $(this).val();
      if (opt=="yes") {
          $('#jml-spbu').show();
      }

      else if (opt == "no") {
          $('#jml-spbu').hide();
      }
    });

    $('#jml-spbu-outer-4').change(function() {
      opt = $(this).val();
      if (opt=="yes") {
          $('#jml-spbu-4').show();
      }

      else if (opt == "no") {
          $('#jml-spbu-4').hide();
      }
    });

    var showDiv = function (spbu) {
          $('.spbu-val').hide();
          $('.spbu-val:lt(' + spbu + ')').show();
      };

      $('#jml-spbu-2').change(function () {
        showDiv($(this).prop('selectedIndex') + 1);
      }).change();

      $('#jml-spbu-3').change(function () {
        showDiv($(this).prop('selectedIndex') + 1);
      }).change();


      $('#otherbusiness').change(function() {
        opt = $(this).val();
        if (opt=="yes") {
            $('#formbusiness').show();
        }

        else if (opt == "no") {
            $('#formbusiness').hide();
        }
      });

      $('#otherbusiness-2').change(function() {
        opt = $(this).val();
        if (opt=="yes") {
            $('#formbusiness-2').show();
        }

        else if (opt == "no") {
            $('#formbusiness-2').hide();
        }
      });
</script>











