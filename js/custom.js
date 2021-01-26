

$(document).ready(function() {

  //info_content top에 도달했을때 skill bar 실행
  $(window).scroll(function() {
    var scroll=$(window).scrollTop();

    var infoTop=$(".info_content").offset().top;

    if(scroll >= infoTop){
      $(".progress").css({"display": "block"});
      $(".progress").addClass("on");
    }

    //중앙 line 색 들어오기
    var infoTop=$(".info_content_box").offset().top;
    var coloredLine=$(".line span");
    var coloredLineTop=coloredLine.offset().top;


    $(".line > span").css({height: scroll-infoTop+$(window).height()/2});
  });

  //top_btn 클릭시 상단으로 올라가기
  $(".top_btn").click(function() {
    $("html, body").animate({scrollTop: 0});

  });


  //portfolio content 아래에서 위로 올라오는 event
  AOS.init();





});   //end
