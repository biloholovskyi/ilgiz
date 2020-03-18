$(document).ready(() => {
  $('.catalog-wrap').masonry({
    // options
    itemSelector: ".catalog__block",
    columnWidth: ".grid-sizer",
    percentPosition: true,
    horizontalOrder: true
  });
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 48,
    nav: true,
    dots: false,
    center: true,
    autoWidth: true,
    items: 1,
    responsive: {
      0: {
        dots: true
      },
      1000: {
        dots: false
      },
    }
  });

  $('#first-form, #form-2, #form-modal').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      url: '/wp-content/themes/ilgiz/mail.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function( data ) {
        $('.modal-alert').fadeIn('slow').css('display', 'flex');
        $('input, textarea').val('');
        setTimeout(function () {
          $('.modal-alert').fadeOut('slow');
        }, 2000)
      }
    });
  });
});

$('.catalog__block').on('click', function () {
  const current = $(this);
  // получить данные из картины
  const img = current.children('.catalog__block-img').attr('src');
  const title = current.children('.catalog__block-title').html();
  const tech = current.children('.catalog__block-text').children('.catalog__block--tech').html();
  const size = current.children('.catalog__block-text').children('.catalog__block--size').html();
  const price = current.attr('data-price');

  // передать данные на модалку
  $('.modal-img').css('background-image', 'url(' + img + ')');
  $('.modal-text h2').html(title);
  $('.modal-tech').html(tech);
  $('.modal-size').html(size);
  $('.modal-price').html(price);

  // открыть модалку
  $('.overlay').css('visibility', 'visible');
});

$('.modal-close').on('click', function () {
  $('.overlay').css('visibility', 'hidden');
});

$('.about__btn-text').on('click', function (e) {
  e.preventDefault();
});

$('.menu__item a').on('click', function (e) {
  e.preventDefault();
  const id = $(this).attr('href');
  const top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 600);
});

$('.about__btn').on('click', function () {
  $('.modal-wrapper-video').fadeIn('slow').css('display', 'flex');
});

$('.modal-video__close').on('click', function () {
  $('.modal-wrapper-video').fadeOut('slow');
});

$(document).on('click', function (e) {
  let modal = $('.modal-video');
  let btn = $('.about__btn');
  let catalog = $('.catalog__block');
  let modalImg = $('.modal');

  if (!btn.is(e.target) && btn.has(e.target).length === 0) {
    if (!modal.is(e.target) && modal.has(e.target).length === 0) {
      $('.modal-wrapper-video').fadeOut('slow');
    }
  }
});