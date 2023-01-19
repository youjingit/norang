<?php
// DB 연결
include "../inc/session.php";
include "../inc/admin_check.php";

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
    <title>노랑풍선 - 가입완료(관리자모드)</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
    <link rel="stylesheet" type="text/css" href="../../css/common.css">
    <link rel="stylesheet" type="text/css" href="../../css/welcome.css">
</head>
<body>
    <main>
    <div class="compl_container">
        <p class="compl_title"><span><?php echo $array["u_name"];?></span>님, 회원가입이 완료되었습니다.<i></i></p>
        <p class="compl_subtitle">노랑풍선과 함께 즐거운 여행 되세요!</p>

        <div class="id_box">
            <p>이메일 아이디 : <span><?php echo $array["u_id"];?></span></p>
        </div>
        <div class="btn_wrap">
            <button type="button" id="login_btn" onclick="location.href='./chayam/login/login.php'">바로 로그인</button>
            <button type="button" id="home_btn" onclick="location.href='../index.php'">메인으로</button>
        </div>
    </div>
    </main>
    <footer>
        <p class="copy_right">© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>
</body>

</html>
