var isShowMenu = false;
var getDevice = (function () {
  var ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 || ua.indexOf('Windows Phone') > 0) {
    return 'sp';
  } else {
    return 'other';
  }
})();
$(function(){
    // menuを押した時の処理
    $('.hover--showMenu').on('click', function(){
      var windowWidth = window.innerWidth;

      if (!isShowMenu) {
        $('#menu_bar').css('backgroundColor', 'rgba(255, 255, 255, 0.9)');
        $('#menu').animate({
          height: '100vh'
        }, 300);
        $('#menu a').animate({ opacity: 1.0 }, 700); 
        $('#menu a').css('display', 'block');
        $('#menu hr').animate({ opacity: 1.0 }, 700); 
        $('#sns_router').animate({ opacity: 1.0 }, 700);
        $('.hover--showMenu h4').text('CLOSE');
        $('.center_line').animate({ opacity: 0 }, 20);

        if(getDevice === 'other') {
          $('.top_line').animate({zIndex:1}, {
            duration: 300,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * 765 + 'deg)',
                marginTop: '6px',
                marginLeft: '0px',
                width: '13px'
              });
            }
          });
          $('.bottom_line').animate({zIndex:2}, {
            duration: 300,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * -382.5 + 'deg)',
                marginTop: '-7px',
                width: '13px'
              });
            }
          });

        } else {
          $('.top_line').animate({ zIndex: 1 }, {
            duration: 400,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * 765 + 'deg)',
                marginTop: '10px',
                marginLeft: '0px',
                width: '19px'
              });
            }
          });
          $('.bottom_line').animate({ zIndex: 2 }, {
            duration: 400,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * -382.5 + 'deg)',
                marginTop: '-7px',
                width: '19px'
              });
            }
          });
        }
        isShowMenu = true;

      } else {

        // closeを押した時の処理
        $('#menu_bar').css('backgroundColor', 'rgba(255, 255, 255, 0)');
        $('#menu').animate({
          height: '0vh'
        }, 500);
        $('#menu a').animate({ opacity: 0 }, 200);
        $('#menu hr').animate({ opacity: 0 }, 200);
        $('#sns_router').animate({ opacity: 0 }, 200);
        $('.hover--showMenu h4').text('MENU');
        $('.center_line').animate({ opacity: 1.0 }, 700);
        
        if(getDevice === 'other'){
          $('.top_line').animate({ zIndex: 1 }, {
            duration: 300,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * 765 + 'deg)',
                marginTop: '0px',
                marginLeft: '12px',
                width: '8px'
              });
            }
          });
          $('.bottom_line').animate({ zIndex: 1 }, {
            duration: 300,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * 765 + 'deg)',
                marginTop: '3px',
                width: '8px'
              });
            }
          });
        } else {
          $('.top_line').animate({ zIndex: 1 }, {
            duration: 400,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * 765 + 'deg)',
                marginTop: '0px',
                marginLeft: '22px',
                width: '14px'
              });
            }
          });
          $('.bottom_line').animate({ zIndex: 1 }, {
            duration: 400,
            step: function (now) {
              $(this).css({
                transform: 'rotate(' + now * 765 + 'deg)',
                marginTop: '12px',
                width: '14px'
              });
            }
          });
        }
        isShowMenu = false;
    }
  });
});