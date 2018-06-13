const $ = require('jquery');
require('slick-carousel');


$(function() {
    $('.slick-box').slick({
          infinite: true,
          dots: true,
          slidesToShow: 1,
          centerMode: true, //要素を中央寄せ
          centerPadding: '50px', //両サイドの見えている部分のサイズ
          autoplay: true, //自動再生
          responsive: [{
               breakpoint: 480,
                    settings: {
                         centerMode: false,
               }
          }]
     });
});

// $(function() {
//      $('.slick-box').slick({
//           infinite: true,
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           arrows: false,
//           fade: true,
//           asNavFor: '.thumb-item-nav' //サムネイルのクラス名
//      });
//      $('.thumb-item-nav').slick({
//           infinite: true,
//           slidesToShow: 4,
//           slidesToScroll: 1,
//           asNavFor: '.thumb-item', //スライダー本体のクラス名
//           focusOnSelect: true,
//      });
// });


// $(function(){
//   $('.slick-box').slick({
//     speed: 1000,
//     dots: true,
//     lazyLoad: 'ondemand',
//   });
// });
