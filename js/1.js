    $(document).ready(function() {
     
      var owl = $("#owl-example");
     
      owl.owlCarousel({
      items:4,
      autoPlay: 2000,
      autoheight: true,
      singleItem:true
      });
      owl.trigger('autoplay.play.owl',[1000])
    });

