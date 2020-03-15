
    $(document).ready(() => {
      $('.catalog-wrap').masonry({
        // options
        itemSelector: ".catalog__block", 
        columnWidth: ".grid-sizer", 
        percentPosition: true, 
        horizontalOrder: true
      });
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:48,
        nav:true,
        dots:false,
        center:true,
        autoWidth:true,
        items:1,
        responsive:{
            0:{
                dots:true
            },
            1000:{
                dots:false
            },               
        }
    });
    });
