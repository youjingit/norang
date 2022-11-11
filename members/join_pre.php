<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노랑풍선 - 회원가입</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/join_pre.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="depth1">
                <div class="depth1_left">
                    <h1 class="logo"><a href="../index.php">노랑풍선</a></h1>
                </div>
                <div class="depth1_right">
                    <h2 class="screen_out">사용자메뉴</h2>
                    <ul class="depth1_top_menu">
                        <li><a href="../login/login.php">로그인</a></li>
                        <li><a href="join_pre.php">회원가입</a></li>
                        <li><a href="#">고객센터</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <div class="join_container">
            <h2 id="join_title">회원가입</h2>
            <p class="join_subtitle">노랑풍선의 회원이 되시면 더욱 다양한 혜택을 누리실 수 있습니다.</p>
            <div>
                <h3 class="screen_out">혜택 안내</h3>
                <ul class="benefit_wrap">
                    <li><img src="../images/join_pre/coupon.png" alt="쿠폰제공" class="illust1">
                        <div class="benef_text">
                            <span>다양한</span><br>
                            <span>할인 혜택</span><br>
                            <span>쿠폰 제공</span>
                        </div>
                    </li>
                    <li><img src="../images/join_pre/point.png" alt="포인트적립" class="illust2">
                        <div class="benef_text">
                            <span>노랑풍선</span><br>
                            <span>포인트</span><br>
                            <span>적립 · 사용</span>
                        </div>
                    </li>
                    <li><img src="../images/join_pre/alarm.png" alt="특가알림" class="illust3">
                        <div class="benef_text">
                            <span>특가 · 이벤트</span><br>
                            <span>정보알림</span><br>
                            <span>서비스</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <button type="button" id="join_btn" onclick="location.href='join.php'">이메일로 간편 회원가입</button>
            </div> 
            <div>
                <div class="simple_join_title">
                    <div class="simple_join_line"></div>
                    <div class="simple_join_text">
                        <span>또는</span>
                    </div>
                </div>
                    <a class="join_button naver_join" href="#"><i class="join_icon naver"></i>네이버 아이디로 가입</a>
                    <a class="join_button kakao_join" href="#"><i class="join_icon kakao"></i>카카오톡 아이디로 가입</a>
                    <a class="join_button fb_join" href="#"><i class="join_icon fb"></i>페이스북 아이디로 가입</a>
                    <a class="join_button apple_join" href="#"><i class="join_icon apple"></i>애플 아이디로 가입</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer_top">
            <p>노랑풍선 회원으로 가입을 하시면 포인트적립,</p>
            <p>회원전용혜택 등 더 많은 서비스를 이용하실 수 있습니다.</p>
        </div>
        <p class="copy_right">© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>
</body>

</html>