$(document).ready(function() {
  
  var categoriesCarousel = $("#categories-carousel");
  
  categoriesCarousel.owlCarousel({
    margin:10,
    responsiveClass:true,
    nav:true,
    responsive:{
          0:{
              items:1,
              nav:true
          },
          480:{
              items:2,
              nav:true
          },
          980:{
              items:3,
              nav:true,
              loop:false
          },
          1280:{
              items:4,
              nav:true
          }
      }
  });
  
});


  
  // Custom Navigation Events
  // $(".next").click(function(){
  //   owl.trigger('owl.next');
  // })
  // $(".prev").click(function(){
  //   owl.trigger('owl.prev');
  // })
  // $(".play").click(function(){
  //   owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  // })
  // $(".stop").click(function(){
  //   owl.trigger('owl.stop');
  // })