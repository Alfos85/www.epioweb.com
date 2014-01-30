

$(document).ready(function(){

     $('.loader').fadeOut(400);
     $('#wrapper').fadeIn(500);
     $(".anon-nav > a").click(function(){
      return false;
     });
     var pageWidth = $(document).width();

     if(pageWidth < '1100'){
        $('.slogan').hide();
     }
     else{
        $('.slogan').show();
     };
     if(pageWidth < '700'){
        $('#horizontal-multilevel-menu').hide();
        $('#small-nav').show();
     }
     else{
        $('#horizontal-multilevel-menu').show();
        $('#small-nav').hide();
     };
     $('#small-nav').bind('change',function(){
         window.location = $(this).val();
     });
     $('.gx-anons-img').hover(function(){

         $(this).transition({rotateY: '180deg'}, 600);

     },
       function(){

         $(this).transition({rotateY: '0deg'}, 600);

     });

     $('.video-over-button').transition({ scale: '0.85'}, 0);
     $('.video-over-button-in').transition({ scale: '0.90'}, 0);
     $('.video-over-button-in1').transition({ scale: '0'}, 0);

     $('.video-overflow').hover(

         function(){

             $('.video-run').addClass('video-run-hover').removeClass('video-run');
             $('.video-over-button').transition({ scale: '1'}, 300, 'easeInOutBack');
             $('.video-over-button-in').transition({ scale: '1'}, 300, 'easeOutBack');
             $('.video-over-button-in1').transition({ scale: '1'}, 350, 'easeOutExpo');

         },
         function(){

             $('.video-run-hover').addClass('video-run').removeClass('video-run-hover');
             $('.video-over-button').transition({ scale: '0.85'}, 300, 'easeInOutBack');
             $('.video-over-button-in').transition({ scale: '0.90'}, 350, 'easeOutBack');
             $('.video-over-button-in1').transition({ scale: '0'}, 300, 'easeOutExpo');

     });

     $('.video-overflow').click(function(){

         $(".video-rolik").load("/include/video-rolik.html");
         $(this).fadeOut();

     });

     $('.service-header-images').hover(

         function(){

           $('.service-header-img1').transition({ rotate: '-360deg'}, 1000, 'linear');
           $('.service-header-img2').transition({ rotate: '360deg'}, 1000, 'linear');
           $('.service-header-img3').transition({ rotate: '-360deg'}, 1000, 'linear');
     },

         function(){

           $('.service-header-img1').transition({ rotate: '360deg'}, 1000, 'linear');
           $('.service-header-img2').transition({ rotate: '-360deg'}, 1000, 'linear');
           $('.service-header-img3').transition({ rotate: '360deg'}, 1000, 'linear');

     });

     $('.solutions-header-images').hover(

         function(){

           $('.solutions-header-img1').transition({ x: -60}, 400, 'snap');
           $('.solutions-header-img3').transition({ x: 60}, 400, 'snap');
     },

         function(){

           $('.solutions-header-img1').transition({ x: 0}, 400, 'snap');
           $('.solutions-header-img3').transition({ x: 0}, 400, 'snap');

     });

     $('.s-anons').hover(

         function(){

           $(this).addClass('s-hover');
           $('.s-hover .s-over').fadeIn(200);

         },

         function(){

           $('.s-hover .s-over').fadeOut(0);
           $(this).removeClass('s-hover');

      });

     $('#bxslider').bxSlider({
         slideWidth: 275,
         minSlides: 1,
         maxSlides: 10,
         slideMargin: 10
     });


     $('#ourclients').bxSlider({
         slideWidth: 500,
         minSlides: 2,
         maxSlides: 2,
         slideMargin: 8
     });    

     $('#testimonials').bxSlider({
         slideWidth: 1000,
         minSlides: 1,
         maxSlides: 1,
         slideMargin: 0
     });   

});

$(window).resize(function(){
   var pageWidth = $(document).width();

   if(pageWidth < '1100'){

      $('.slogan').hide();

   }

   else{

       $('.slogan').show();

   };

   if(pageWidth < '700'){

       $('#horizontal-multilevel-menu').hide();
       $('#small-nav').show();

   }

   else{

       $('#horizontal-multilevel-menu').show();
       $('#small-nav').hide();

   };

});

  
