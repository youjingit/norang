<?php
// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$u_id = $_GET["id"];
$sql = "select * from members where u_id='$u_id';";
// 쿼리 실행
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
// mysqi_fetch_row(쿼리실행문) -- 필드순서
// mysqi_fetch_array(쿼리실행문) -- 필드이름
// mysqi_num_rows(쿼리실행문) -- 전체 행 개수
$array = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노랑풍선 - 회원가입완료</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/welcome.css">
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
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main>
    <div class="compl_container">
        <p class="compl_title"><span><?php echo $array["u_name"];?></span>님, 회원가입이 완료되었습니다.<i></i></p>
        <p class="compl_subtitle">노랑풍선과 함께 즐거운 여행 되세요!</p>

        <div class="id_box">
            <p>이메일 아이디 : <span><?php echo $array["u_id"];?></span></p>
        </div>

    <div class="apply_wrap">
       <p class="apply_title">잠깐! 할인혜택도 놓치지 마세요</p>
       
        <input type="checkbox" id="receive">
        <label for="receive">
            <span class="apply_check">할인, 쿠폰 혜택 수신에 동의(휴대폰, 이메일)</span>
        </label>
        <p class="apply_notice">마케팅 수신 미동의시 혜택은 발송되지 않습니다.</p>
    </div>
        <div class="btn_wrap">
            <button type="button" id="login_btn" onclick="location.href='../login/login.php'">바로 로그인</button>
            <button type="button" id="home_btn" onclick="location.href='../index.php'">메인으로</button>
        </div>
    </div>
    </main>
    <footer>
        <p class="copy_right">© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>
</body>

</html>