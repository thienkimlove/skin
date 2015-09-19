(function($){
  //slider
  var slideShares = function(){
      $('#slideShare').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            nav:true,
            dots: false
          },
          640:{
            items:1,
            nav:true,
            dots: false
          },
          960:{
          items:3,
          nav:true,
          loop:true,
          dots: false
        }
      }
    });
  };
  //end
  //slide
  var slideRelateds = function(){
    $('#slideRelated').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        responsive:{
        0:{
            items:1,
            nav:true,
            dots: false
        },
        640:{
            items:4,
            nav:true,
            dots: false
        },
        1000:{
            items:4,
            nav:true,
            loop:true,
            dots: false
          }
        }
      });
    };
  //end
  //listQuestion
  $('#listQuestions > li:has(.contentQuestion)').addClass("hasSub");
  $('#listQuestions > li > a').click(function() {
    var checkElement = $(this).next();
    
    $('#listQuestions li').removeClass('active');
    $(this).closest('li').addClass('active'); 
    
    
    if((checkElement.is('.contentQuestion')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    
    if((checkElement.is('.contentQuestion')) && (!checkElement.is(':visible'))) {
      $('#listQuestions .contentQuestion:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    
    if (checkElement.is('.contentQuestion')) {
      return false;
    } else {
      return true;  
    }   
  });
  //end
  //HotnewTab
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');
    $('ul.tabs li').removeClass('active');
    $('.tabContent').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })
  //end
  //ProductTab
  $('.proTabs li').click(function(){
    var tab_id = $(this).attr('data-tab');
    $('.proTabs li').removeClass('active');
    $('.tabProduct').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })
  //end
  //mobile
  /*mobile*/
  var nav_global = $('#globalNav');
  var showMenuMobile = function () {
    $('#btnMenu').click(function(e){
      var w_device = $(window).width();
      if(e.handled !== true){
        if(w_device < 959 && $('#btnMenu').is(':visible')){
          if(nav_global.is(':visible')){
            nav_global.slideUp(500);
          }else{
            nav_global.delay(100).slideDown(500);
          }
        }
        $(this).toggleClass('show');
        e.handled = true;
      }
      e.preventDefault();
    });
  };
  //end
  /*equalHeight*/
   equalHeight($('.boxMedia .item, .boxProducts .proTabs li'));
    function equalHeight(obj) {
      if($(window).width() > 480 && obj.length>0){
          obj.matchHeight();
          $.fn.matchHeight._update();
      } else {
        obj.removeAttr('style');
      }
    }
  //end
  jQuery(document).ready(function() {
    slideShares();
    slideRelateds();
    showMenuMobile();
  });
})(jQuery);
