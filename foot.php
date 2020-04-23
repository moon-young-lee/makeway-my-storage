 </section>
  <footer>
	<div class="container wrap">
		<div class="col1 col col-xs-12 col-md-4">
			<img src="img/logo_foot.png" alt="">
			<ul class="input_flex">
				<li>회사소개</li>
				<li>개인정보처리방침</li>
				<li>이용약관</li>
				<li>오시는길</li>
			</ul>
			<p>대표 : 김영숙  |  인천광역시 미추홀구 경인로229 인천IT타워 412호<br>
			문의:032)710-0825  |  FAX:032)232-1825<br>
			업무시간:평일 09:00~18:00, 주말·공휴일 휴무<br>
			mkw@makeway.co.kr  |   사업자등록번호: 748-53-00262<br><br>
			Copyrightⓒ2020 MAKEWAY. All right reserved.
			</p>
		</div>
		<div class="col2 col col-xs-12 col-sm-6 col-md-4">
			<div>간편견적문의<span class="col2_smallTxt">상세 견적문의는 전화 또는 여기를 클릭하세요.</span></div>
			<form action="">
				<div class="input_flex">
					<div class="input_txt">
						<input type="text" placeholder="이름(고객성함)">
					</div>
					<div class="input_txt">
						<input type="text" placeholder="휴대폰번호">
					</div>
				</div>
				<div class="input_flex">
					<div class="input_txt">
						<input type="text" placeholder="이메일">
					</div>
					<div class="input_txt">
						<input type="text" placeholder="참고사이트">
					</div>
				</div>
				<div>
					<textarea placeholder="문의내용" class="input_txt" name="" id="" cols="30" rows="10"></textarea>
				</div>
				<div class="input_flex input3">
					<div class="input_txt">
						<input type="text" placeholder="보안문자">
					</div>
					<div class="input_txt">
						<input type="text" placeholder="보안문자확인">
					</div>
					<div class="con_send">보내기</div>
				</div>
			</form>
		</div>
		<div class="col3 col col-xs-12 col-sm-6 col-md-4">
			<div class="map">
				<div class="location_txt">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>Location</div>
                    <p>인천광역시 미추홀구<br>경인로229 인천IT타워 412호</p>
                </div>
			</div>
			
		</div>
	</div>
  </footer>
 </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.0.js"
  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
	win_w = $(window).width();
	win_h = $(window).height();
	console.log(win_w+'/'+win_h);
	banner_left = (win_w-2500)/2
	$('.head_banner').css({'left':banner_left})
    setInterval(head_slide,5000);
});

var i=0;
    
    
function head_slide(){
 i++;
 i=i%2;
 $('.banner_img').stop().animate({'left':-2500*i+'px'},700);
 $('.banner_txt').stop().animate({'left':-2500*i+'px'},700);

}
	



</script>
