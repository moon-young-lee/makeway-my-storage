</section>
<footer>
    <div class="footer_black" style="display: none">
          <div class="foot_box">
                <span><i class="fas fa-times"></i></span>
                준비중입니다.
          </div>
    </div>
	<div class="wrap">
		<div class="col1 col">
			<div class="footer_logo">
			   <img src="img/logo.png" alt=""> 
			</div>
			<div class="infom">
			    <ul>
                    <li>대표</li>
                    <li class="short">사업자등록번호</li>
			        <li>Call</li>
			        <li>Fax</li>
			        <li>업무시간</li>
			        <li>E-mail</li>
			    </ul>
			    <ul>
                    <li>김영숙</li>
                    <li>748-53-00262</li>
			        <li>032.710.0825</li>
			        <li>032.232.1825</li>
			        <li class="short">평일 09:00~18:00, 주말·공휴일 휴무</li>
			        <li>mkw@makeway.co.kr</li>
			    </ul>
			</div>
			<div class="copy">
			    Copyrightⓒ2020 MAKEWAY. All right reserved.
			</div>
		</div>
		<div class="col2 col">
			<div><span class="qna">간편견적문의</span><span class="col2_smallTxt">상세 견적문의는 전화 또는 <span class="here contact">여기</span>를 클릭하세요.</span></div>
			<form name="inquiryFrm" id="inquiryFrm" method="post" action="/common/board.php">
			<input type='hidden' name='method' id='method' value='mwss'>
			<input type='hidden' name='mode' id='mode' value='mw'>
			<input type="hidden" name="bd_id" id="bd_id" value="inquiry">
			<input type="hidden" name="editor" value="">
				<div class="input_flex">
					<div class="input_txt">
						<input type="text" name="bd_subject" id="bd_subject" placeholder="이름(고객성함)" title="이름(고객성함)" data-valide="input,이름(고객성함)">
					</div>
					<div class="input_txt">
						<input type="text" name="bd_hp" id="bd_hp" placeholder="휴대폰번호" title="휴대폰" class="CheckHypen" maxlength="13" data-valide="input,연락처">
					</div>
				</div>
				<div class="input_flex">
					<div class="input_txt input_txt2">
						<input type="text" name="bd_email" id="bd_email" placeholder="이메일" title="이메일" data-valide="email2,이메일">
					</div>
				</div>
				<div class="con_blank con_blank1">
				    <span>상담유형</span>
				    <div class="flex">
				        <label>
                            <input type="radio" name="bd_addfield1" value="웹솔루션 문의" id="contype" data-valide="radio,상담유형">웹솔루션
                        </label>
                        <label>
                            <input type="radio" name="bd_addfield1" value="홈페이지 제작문의" id="contype" data-valide="radio,상담유형">홈페이지
                        </label>
                        <label>
                            <input type="radio" name="bd_addfield1" value="쇼핑몰 제작문의" id="contype" data-valide="radio,상담유형">쇼핑몰
                        </label>
				    </div>
				</div>
				<div>
					<input type="text" placeholder="문의내용" class="textaa" name="bd_content" id="bd_content" data-valide="textarea,문의내용">
				</div>
				<div class="input_flex">
					<div class="input_txt input_txt2">
						<input type="text" name="bd_addfield2" placeholder="참조사이트">
					</div>
				</div>
				<div class="con_blank con_blank2">
				    <label>
                        <input type="checkbox" id="agreechk" name="agreechk" title="개인정보 수집 이용등의 동의">개인정보수집이용동의
				    </label>
				</div>
				<div class="security_box input_flex">
					<script type="text/javascript" src="<?php echo MKW_CAPTCHA_URL ?>/kcaptcha/kcaptcha.js"></script>
				    <div class="input_txt">
						<fieldset id="captcha" class="captcha"><img id="kcaptcha_image"></fieldset>
						<span id="captchaReload" class="captchaReolad">새로고침</span>
						
					</div>
					<div class="input_txt input_txt4">
						<input type="text" name="mcaptcha_Key" id="mcaptcha_Key" placeholder="보안문자확인" data-valide="input,보안문자" maxlength="6">
					</div>
					<div class="input_send secu_send inquirySubmit" style="cursor:pointer"> 문의하기 
					</div>
				</div>
			</form>
		</div>
		<div class="col3 col">
			<div id="map" class="map"></div>
			<div class="location_txt">
				<p class="addr"><i class="fas fa-map-marker-alt"></i> 인천광역시 미추홀구 경인로229 인천IT타워 412호</p>
			</div>
		</div>
	</div>
  </footer>    
</body>
</html>
<!--
<script
  src="https://code.jquery.com/jquery-1.11.3.js"
  integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0="
  crossorigin="anonymous"></script>
-->

<script src="common/jquery/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="common/jquery/jquery.mobile-events.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d11c451534a4d3c24cdabd87bb0077b0&libraries=services"></script>
<script type="text/javascript">


    
    
    
// ***************************************//       
//FOOTER 에 지도    
	var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
		mapOption = { 
			center: new kakao.maps.LatLng(37.464755, 126.667876), // 지도의 중심좌표
			level: 3 // 지도의 확대 레벨
		};

	var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

	// 마커가 표시될 위치입니다 
	var markerPosition  = new kakao.maps.LatLng(37.464755, 126.667876); 

	// 마커를 생성합니다
	var marker = new kakao.maps.Marker({
		position: markerPosition
	});

	// 마커가 지도 위에 표시되도록 설정합니다
	marker.setMap(map);
    $('#map>div>div>div>div img').attr('src','img/location_icon.png');
    
// ***************************************//    
//톡톡 파트너    
(function(d) {
	var options = {
		partnerId : 'W4WIOU', // 톡톡 파트너계정 아이디
		imageUrl : '/img/talk_ico.png', // 버튼아이콘 URL (첨부파일)
				   size : 56, // 버튼 사이즈. PC에서는 80, 모바일에서는 56 권장
		right : 20, // 버튼 위치. 화면 오른쪽에서의 거리
		bottom : 92, // 버튼 위치. 화면 아래에서의 거리
		circle : true, // 버튼 둥글게
		shadow : true // 그림자 효과
	}
	var img = document.createElement('img');
	img.src = options.imageUrl;
	img.width = options.size ;
	img.height = options.size;
	img.style.bottom = options.bottom + 'px';
	img.style.right = options.right + 'px';
	img.style.position = 'fixed';
	img.style.zIndex = 99999;
	img.style.cursor = 'pointer';
	img.style.borderRadius = options.circle ? '50%' : '';
	img.style.boxShadow = options.shadow ? '0 0 4px rgba(0,0,0,.16), 0 4px 4px rgba(0,0,0,.24)' : '';
	img.onclick = function(e) {
	window.open('https://talk.naver.com/' + options.partnerId + '?ref=' + encodeURIComponent(location.href) + '#nafullscreen', 'talktalk', 'scrollbars=1, resizable=1, width=486, height=745');
}
	d.getElementsByTagName('html')[0].appendChild(img);

})(document);

</script>










<script>
  AOS.init();
</script>


<script>
var page_i = 0; var main_i = 0; var main_slide;
    
$(document).ready(function(){
    indi_ani(0);
    setInterval(main_slide,20000); 
    responsiveee();
    $('.ui-loader>h1').hide();
//    win_h = $('section').css('hegith',win_h);
})    
$(window).resize(function(){
//    $('html, body').stop().animate({scrollTop:0},700);
//    indi_ani(0);
//    page_i==0, count==0;
    responsiveee();
    
});    
    
    
// ***************************************//    
//메인 롤링    
function main_slide(){
    main_i++;
    main_i=main_i%3;
    $('.sec1_indi_').eq(main_i).css({'background':'#006cff'});
    $('.sec1_indi_').not($('.sec1_indi_').eq(main_i)).css({'background':'#fff'});
    $('.sec1 .frame').stop().animate({'left':-main_i*100+'%'},700);
}  
   

    
    
// ***************************************//    
//페이지마다 인디케이터,마우스 다른 색상  
function indi_ani(page_i){
    switch(page_i){
        case 0:
            $('header').css({background:'rgba(0, 0, 0, 0.59)','height':'70px'})  
            $('.indi_line').css({'background':'#eee'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'white'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#aaa'});
            $('.indicator .circle span').eq(page_i).css({'color':'white', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'white', opacity: '.4'});
            $('.indi00').css('color','white');
            $('.mouse').css({border:'2px solid #fff'});
            $('.mouse .mouse_ball').css({background:'#fff'});
            $('.sec1_indi').css({position:'fixed'});
            $('.sec1_indi').show();
            $('.mouse').fadeIn();
            $('.mouse').css({'border':'2px solid #fff'});
            $('.mouse_ball').css({'background':'#fff'});
            break;
        case 1: 
            $('header').css({background:'linear-gradient(to right,  #363b75 0%,#006cff 100%)', 'height':'60px'});
            $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').fadeIn();
            $('.mouse').css({border:'2px solid #333'});
            $('.mouse .mouse_ball').css({background:'#333'});
            $('.sec1_indi').css({position:'absolute'});
            break;
        case 2:
            $('header').css({background:'linear-gradient(to right,  #363b75 0%,#006cff 100%)', 'height':'60px'})  
            $('.indi_line').css({'background':'#eee'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'white'});
			$('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#aaa'});
            $('.indicator .circle span').eq(page_i).css({'color':'white', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'white', opacity: '.4'});
            $('.indi00').css('color','white');
            $('.mouse').fadeIn();
            $('.mouse').css({'border':'2px solid #333'});
            $('.mouse_ball').css({'background':'#333'});
            $('.sec1_indi').css({position:'absolute'});
            break;
        case 3: 
            $('header').css({background:'linear-gradient(to right,  #363b75 0%,#006cff 100%)', 'height':'60px'})  
            $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').css({border:'2px solid #333'});
            $('.mouse .mouse_ball').css({background:'#333'});
            $('.sec1_indi').css({position:'absolute'});
            $('.mouse').fadeIn();
            break;  
        case 4: 
            $('header').css({background:'linear-gradient(to right,  #363b75 0%,#006cff 100%)', 'height':'60px'})   
            $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').css({border:'2px solid #333'});
            $('.mouse .mouse_ball').css({background:'#333'});
            $('.sec1_indi').css({position:'absolute'});
            $('.mouse').fadeIn();
           break;
        case 5: 
            $('header').css({background:'linear-gradient(to right,  #363b75 0%,#006cff 100%)', 'height':'60px'})  
            $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').fadeOut();
            $('.sec1_indi').css({position:'absolute'});
            break;
        }
}
// ***************************************//    
//휠 내리거나 올리거나 할때 화면 이동하는 기능    
var scrollEvent = false;
var count = 0;
var moving=$('html').is(':animated');
$('body').on('mousewheel DOMMouseScroll', function(e,delta){
//    console.log('크롬&익스:'+event.wheelDelta);
//    console.log('ff:'+event.detail)
	var E = e.originalEvent;
	delta = 0;
	if (E.detail) {
		delta = E.detail * -40;
	}else{
		delta = E.wheelDelta;
	};
	var win_h = $(window).height();
    var win_w = $(window).width();
	if(delta < 0 && scrollEvent == false && count < 6 && win_w > 1200 && !moving) {
		scrollEvent = true;
        count==page_i;
		count++;
		$("html, body").stop().animate({scrollTop:win_h*count},{duration:500, complete: function() {
			scrollEvent = false;
			}
		});
		indi_ani(count);

	} else if(delta > 0 && scrollEvent == false && count >= 1 && win_w > 1200 && !moving) {
		scrollEvent = true;
		count--;
		$("html, body").stop().animate({scrollTop:win_h*count},{duration:500, complete: function() {
			scrollEvent = false;
			}
		});
		indi_ani(count);
	}
});
    
/****************************************
 fixed 고정된 메뉴들 클릭시 이벤트
****************************************/   
//메뉴클릭시 이동    
menu=$('nav li')
menu.click(function(){
    count = $(this).index();  
    count = count/2;
    if(count==5){
        $('.footer_black').fadeIn();
    } else if(count<5) {
        $top = $('section').eq(count).offset().top;
        $('html, body').stop().animate({scrollTop:$top},500)
    }
    indi_ani(count);
});   
    
//중앙마우스 클릭시 한컷씩이동
$('.mouse').click(function(){
    win_h = $(window).height();
    count++;
    count%6;
    $('html, body').stop().animate({scrollTop:count*win_h},700);
    indi_ani(count)
});
    
//화면 좌측 인디케이터 클릭시    
$('.indicator .circle span').click(function(){
	var scrollEvent = true;
    win_h = $(window).height();
    count = $(this).parent('.circle').index();
 //   $('html, body').stop().animate({scrollTop:page_i*win_h},700);
	$("html, body").stop().animate({scrollTop:win_h*count},{duration:700, complete: function() {
		scrollEvent = false;
		}
	});
    indi_ani(count);
})    
    
//화면 우측 퀵버튼
$('.right_btn .rb_3, .logo').click(function(){
    $('html, body').stop().animate({scrollTop:0},700);
    page_i=0; count=0;
    indi_ani(count);
})
    
//(작은 기기에서만 - header에 hambtn 
$('.ham_btn').click(function(){
    $(this).toggleClass('clicked');
    $('.ham_menu').fadeToggle();
    $('html').toggleClass('html_fixed')
});
    
//hammenu에서 메뉴클릭시 바로이동    
menu=$('.ham_menu li')
menu.click(function(){
    page_i = $(this).index();  
    $('.ham_menu').fadeOut();
    $('.ham_btn').removeClass('clicked');
    $('html').css('position','relative');
    if(page_i==5){
        $('.footer_black').fadeIn();
    } else {
        $top = $('section').eq(page_i).offset().top;
        $('html, body').stop().animate({scrollTop:$top-55},500)
    }
});       
  
    
/****************************************
섹션별 클릭시 이벤트
****************************************/   
//최상단 메인 롤링 인디케이터    
$('.sec1_indi_').click(function(){
//    clearInterval(main_slide);
    main_i = $(this).index();
    $('.sec1 .frame').stop().animate({'left':-main_i*100+'%'},700);
    $('.sec1_indi_').eq(main_i).css({'background':'#006cff'})
    $('.sec1_indi_').not($('.sec1_indi_').eq(main_i)).css({'background':'#fff'});
    main_i = page_i; 
}); 

    
//솔루션 클릭시 레이어팝업 (준비중입니다)
//$('.main2_box span').click(function(){
//    $('.main2_black').fadeOut();
//})    
function sorry(){
    $('.main2_black').fadeOut();
}    
$('.solution .__icon').click(function(){
    $('.main2_black').fadeIn();
    setTimeout(sorry,1500)
})     

    
//공지사항 클릭시 레이어팝업    
$('.notice .box').click(function(){
    $('.noti_black').fadeIn();
});
$('.noti_black span').click(function(){
    $('.noti_black').fadeOut();
})
    
//상담문의 클릭시 레이어팝업
$('.contact, .right_btn .rb_1').click(function(){
    $('.footer_black').fadeIn();
})    
$('footer .foot_box span').click(function(){
    $('.footer_black').fadeOut();
})

/****************************************
반응형?
****************************************/      
function responsiveee(){
    win_w = $(window).width();
    win_h = $(window).height();
    if( win_w < 980 && win_w > 680){
        $('.about .box2').appendTo('.sec5');
   }else if( win_w < 1200 ){ //width가 980 이하 : 주황이부터? 그 이하
        $('.about .box2').appendTo('.sec5 .contain1');
        $('section').css({'height':'auto'});
        $('footer .col2, footer .col3').prependTo('footer .wrap');
        $('.mouse').hide();
        $('.mouse').css('opacity','0')
        $('.sec1_indi').css('position','absolute');
    }else{     //빨강이~그 이상  풀페이지 홈 ..... 
        $('section').css({'height':'100vh'});
        $('footer .col1').prependTo('footer .wrap');
        $('.mouse').show();
        $('.mouse').css('opacity','1')
        $('.sec1_indi').css('position','absolute');
        scr_t = $(window).scrollTop();
        win_h = $(window).height();
        count= scr_t/win_h;
        count= Math.round(count);
        indi_ani(count);
        $('html').stop().animate({'scrollTop':count*win_h},400);
    }
}        
    
/****************************************
모바일용, 터치 이벤트
****************************************/    
    
$('.frame').on('swipeleft',  function(){
    if(main_i>0 || main_i==0){
        main_i++;
        main_i=main_i%3;
        $('.sec1_indi_').eq(main_i).css({'background':'#006cff'});
        $('.sec1_indi_').not($('.sec1_indi_').eq(main_i)).css({'background':'#fff'});
        $('.sec1 .frame').stop().animate({'left':-main_i*100+'%'},700);
    }
});
$('.frame').on('swiperight',  function(){
    if(main_i>0){
        main_i--;
        main_i=main_i%3;
        $('.sec1_indi_').eq(main_i).css({'background':'#006cff'});
        $('.sec1_indi_').not($('.sec1_indi_').eq(main_i)).css({'background':'#fff'});
        $('.sec1 .frame').stop().animate({'left':-main_i*100+'%'},700);
    }
});

/****************************************
~IE~
****************************************/
var agent = navigator.userAgent.toLowerCase();
if ( (navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) || (agent.indexOf("msie") != -1) ) {
    $('.seconh1').css('color','white')
    IEfitting();

    function IEfitting(){
        win_h = $(window).height();
        if(win_w < 1200){
            $('section').css('height',win_h);
        }else if( win_w > 1200){
            $('section').css({'height':'none','min-height':'100%'});
        }
    }   

    $(window).resize(function(){
        IEfitting();
    }); 
}

    
    

    
    
    
$(document).scroll(function(){
    win_w = $(window).width();
    if(win_w < 1200 ){
        scr_t = $(window).scrollTop();
        if(scr_t == 0){
            $('header').css({background:'rgba(0, 0, 0, 0.59)','height':'60px'}) 
        }else{
            $('header').css({background:'linear-gradient(to right,  #363b75 0%,#006cff 100%)','height':'50px'});
        }
   }
   
})    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


</script>  
<!-- https://jquerymodal.com/ -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script>
$(function() {
	$(document).on("click", ".modal_btn", function(e){
		e.preventDefault();
		var bd_idx =$(this).data("idx");
		$.post("/common/board/board_layer_view.php", {"bd_idx" : bd_idx, "bd_id" : "notice"}, function(data) {
			$("#view_detail_content").html(data);
			$("#view_detail").fadeIn();
		});

		$(this).modal({
			fadeDuration: 250
		});
	});
});
</script>