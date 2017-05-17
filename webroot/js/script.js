$(document).ready(function() {
    // Empêche le rechargement de la page dût au href vide
    $("#a_inscription").click(function(event){
      event.preventDefault();
      $(".popup.sign-up").show();
    });
    $("#a_connexion").click(function(event){
      event.preventDefault();
      $(".popup.sign-in").show();
    });

    $(".a_grade").click(function(event){
      event.preventDefault();
      $(".popup.grade").show();
    });
    $("#a_creator").click(function(event){
      event.preventDefault();
      $(".popup.become-crea").show();
    });

   $(".close").click(function(){
     $(".popup").hide();
   });

   $(".close").click(function(){
     $(".popup-bg").hide();
   });

   $(".popup-bg").click(function(){
     $(".popup").hide();
   });

   $(".popup-bg").click(function(){
     $(".popup-bg").hide();
   });

   $(".show").click(function(){
     $(".popup-bg").show();
   });

   $(".show.inscription-btn").click(function(){
     $(".popup.sign-up").show();
   });

   $(".show.connexion-btn").click(function(){
     $(".popup.sign-in").show();
   });

   $(".close-ftr").click(function(){
     $(".discover").hide();
   });

   $(".intitule").click(function(){
       $(".mode").show();
     });

     $(".close-mode").click(function(){
       $(".mode").hide();
     });

    $(".lets-grade").click(function(){
       $(".popup.grade").show();
     });

    $(".close").click(function(){
       $(".popup.grade").hide();
     });

    $(".close").click(function(){
       $(".popup-bg").hide();
     });

    $(".lets-grade").click(function(){
       $(".popup-bg").show();
     });

    // searchbar

    $(".loupe").click(function(){
      $(".appear").show();
    });

    $(document).ready(function(){
     $(window).bind('scroll', function() {
     var navHeight = $('.nav').height();
       if ($(window).scrollTop() >= navHeight) {
         $('.categories').addClass('fixedd');
         $('.comble-top').css('display','inline-block');
       }
       else {
         $('.categories').removeClass('fixedd');
         $('.comble-top').css('display','none');
       }
    });
  });

});