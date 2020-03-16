
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



    // Scroll to anchors
(function () {

  const smoothScroll = function (targetEl, duration) {
      const headerElHeight =  document.querySelector('.navbar').clientHeight;
      let target = document.querySelector(targetEl);
      let targetPosition = target.getBoundingClientRect().top - headerElHeight;
      let startPosition = window.pageYOffset;
      let startTime = null;
  
      const ease = function(t,b,c,d) {
          t /= d / 2;
          if (t < 1) return c / 2 * t * t + b;
          t--;
          return -c / 2 * (t * (t - 2) - 1) + b;
      };
  
      const animation = function(currentTime){
          if (startTime === null) startTime = currentTime;
          const timeElapsed = currentTime - startTime;
          const run = ease(timeElapsed, startPosition, targetPosition, duration);
          window.scrollTo(0,run);
          if (timeElapsed < duration) requestAnimationFrame(animation);
      };
      requestAnimationFrame(animation);

  };

  const scrollTo = function () {
      const links = document.querySelectorAll('.js-scroll');
      links.forEach(each => {
          each.addEventListener('click', function () {
              const currentTarget = this.getAttribute('href');
              smoothScroll(currentTarget, 600);
          });
      });
  };
  scrollTo();
}());