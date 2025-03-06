<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="javascripts/bootstrap.min.js"></script>
<!-- owl-carousel -->
<script src="plugin/owl-carousel/owl.carousel.min.js"></script>
<!-- fancybox -->
<script src="plugin/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    //OWL CAROUSEL
    $("#gallery_slider").owlCarousel({
        autoPlay: false,
        loop: true,
        nav : true,
        dots: false,
        margin: 50,
        navText: ['<img src="images/icon/left_navigation.png">','<img src="images/icon/right_navigation.png">'],
        responsive:{
            0:{
                items:1
            },
            560:{
                items:2
            },
            991:{
                items:3
            },
            1200:{
                items:4
            }
        },
    });

    $("#profil_pts_logo").owlCarousel({
        autoPlay: true,
        loop: false,
        nav : false,
        dots: false,
        margin: 50,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:3
            },
            1200:{
                items:6
            }
        },
    });

    //RUN FANCYBOX
    $('.fancybox').fancybox();

    //BOOTSTRAP TOGGLE MENU
    //HAMBURGER MENU CHANGE ICON TO CLOSE
    $(function() {
      $('#ChangeToggle').click(function() {
        $('#navbar-hamburger').toggleClass('hidden');
        $('#navbar-close').toggleClass('hidden');  
      });
    });

    //AFFIX ELEMENT
    $('.top_menu').affix({
      offset: {
        top: 150
      }
    });

    //BACK TO TOP EFFECT
    $('#back_to_top').each(function(){
      $(this).click(function(){ 
        $('html').animate({ scrollTop: 0 }, 'slow'); return true; 
      });
    });
  });
</script>
