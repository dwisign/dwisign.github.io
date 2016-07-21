<!-- flexslider -->
<script src="<?php echo URL_ASSETS; ?>/js/jquery.flexslider.js"></script>

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

<script type="text/javascript">
    $(window).load(function() {
        $("#loginForm").submit(function() {
            var url = "<?php echo site_url('home');?>"; // the script where you handle the form input.
            $.ajax({
                   type: "POST",
                   url: url,
                    dataType:'json',
                   data: $(this).serialize(), 
                   success: function(data){
                      if(data[0]==='0'){
                        $("#message-login").html(data[1]);
                      }else{
                        $("#message-login").html(data[1]);
                        window.location.href="<?php echo site_url('dashboard/profile');?>";
                      }
                   }
                 });
            return false; 
        });
    });
</script>

<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>

<!-- plugin call outdatebrowser-->
<script>
    //USING jQuery
    $(document).ready(function() {
        outdatedBrowser({
            bgColor: '#f25648',
            color: '#ffffff',
            lowerThan: 'borderSpacing',
            languagePath: 'id.html'
        })
    })
</script>


