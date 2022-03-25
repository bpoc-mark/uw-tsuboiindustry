window.addEventListener('pageshow',()=>{
  var flg=window.performance.navigation.type;
  if( flg == 2){
    $("body").addClass("preload");
    setTimeout(function(){
      $("body").removeClass("preload");
    },1000)

  }
});

$(function () {

  $(window).on("load scroll", function () {
    var t = $(this).scrollTop();
    if (t > 100) {
      $('#pageTop').addClass('active');
      $('.float_sp').addClass('active');
      $('header').addClass('scroll');
    } else {
      $('#pageTop').removeClass('active');
      $('.float_sp').removeClass('active');
      $('header').removeClass('scroll');
    };
  });

  $('#menu-toggle').click(function () {
    $('header').toggleClass('open');
    $(this).find('.line').toggleClass('show');
    $('header nav').slideToggle();
    $('html').toggleClass('no_move');
  });

  let allowed = false
  var w = $(window).width();
  if (w < 900) {
    allowed = true;
  }

  $(window).on("load resize", function () {
    var w = $(window).width();
    if (w > 900) {
      $('.nav__link--sub-menu').removeAttr('style');
    }else{
      $(".nav__item--isFloat-mid .nav__link").removeAttr('href');
    }
  });

  $('.nav__item--isFloat-mid').click(function(e){
    if(allowed){
      $(this).toggleClass('isActive');
      $(this).find('.nav__link--sub-menu').slideToggle();
    }
  })

  $('.nav__item--isFloat-right').click(function(e){
    if(allowed){
      $(this).toggleClass('isActive');
      $(this).find('.nav__link--sub-menu').slideToggle();
    }
  })

  $('.sub_menu_clk').click(function(e){
    if(allowed){
      if($('.sub_menu_clk').next('.nav__item--sub-menu').hasClass('isOpen')){
      
        $('.sub_menu_clk').next('.nav__item--sub-menu').removeClass('isOpen');
      }
      if( $('.sub_menu_clk').parent().hasClass('isOpen')){
        $('.sub_menu_clk').parent().removeClass('isOpen');
      }
      $(this).next('.nav__item--sub-menu').addClass('isOpen');
      $(this).parent().addClass('isOpen');
    }
  })

  $('.drop-down').hover(function(e){
    $('.overlay').toggleClass('show');
  })

  $('.menu').click(function(e){
    $(this).find('span').toggleClass('show');
    $('.header_inner--right').find('.nav').toggleClass('isOpen');

    if(!$('.float_sp').hasClass('active')){
      $('.float_sp').addClass('active');
    }
  })

});



// シンプルローディング
const spinner = document.querySelector('#loading');
window.addEventListener('load', function() {
  spinner.classList.add('loaded');
});
setTimeout( function () {
  spinner.classList.add('loaded');
}, 2000);


// スクロールアニメーション
var callback = function callback(entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('move');
      observer.unobserve(entry.target);
    }
  });
};
var items_list = document.querySelectorAll('.c-anim-up');
var items = Array.prototype.slice.call(items_list, 0);
var observer = new IntersectionObserver(callback, {
  // 出現タイミングの調整はrootMarginを調整
  rootMargin: '-10%',
  threshold: [0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1]
});
items.forEach(function (item) {
  return observer.observe(item);
});


// [画面に入る前に画像を遅延読み込み]
// タグの記述例 classに[lazy-load]をつけ[data-src]に画像のパスを指定する
// <img class="lazy-load" src="" data-src="images/example.jpg" alt="">
document.addEventListener("DOMContentLoaded", function () {
  let lazyImages = [].slice.call(document.querySelectorAll(".lazy-load"));
  var imgObserver = new IntersectionObserver(callback, {
    rootMargin: '100%',
  });
  let lazyImageObserver = new IntersectionObserver(function (entries, imgObserver) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        let lazyImage = entry.target;
        if (lazyImage.dataset.hasOwnProperty('src')) {
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.dataset.src = '';
          delete lazyImage.dataset.src;
        }
        if (lazyImage.dataset.hasOwnProperty('srcset')) {
          lazyImage.srcset = lazyImage.dataset.srcset;
          lazyImage.dataset.srcset = '';
          delete lazyImage.dataset.srcset;
        }
        lazyImage.classList.remove("lazy-load");
        lazyImageObserver.unobserve(lazyImage);
      }
    });
  });
  lazyImages.forEach(function (lazyImage) {
    lazyImageObserver.observe(lazyImage);
  });
});


// Webfont読込
window.WebFontConfig = {
  google: {
    families: ['Noto+Sans+JP:300,400,500,700&subset=japanese', 'Noto+Serif+JP:300,400,500,600,700&subset=japanese', 'Cormorant+Garamond:400']
  },
  active: function () {
    sessionStorage.fonts = true;
  }
};

(function () {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
