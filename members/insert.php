<?php
// 이전 페이지에서 값 가져오기

$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$u_name = $_POST["u_name"];
$mobile = $_POST["mobile"];
$birth = $_POST["birth"];
$gender = $_POST["gender"] == "y" ? "y" : "n";
$privacy_period = $_POST["privacy_period"];
$info_collect_apply = $_POST["info_collect_apply"] == "y" ? "y" : "n";
$marketing_apply = $_POST["marketing_apply"] == "y" ? "y" : "n";
$email_apply = $_POST["email_apply"] == "y" ? "y" : "n";
$sms_apply = $_POST["sms_apply"] == "y" ? "y" : "n";
$withdrawal = 'n';

// 시간 구하기
$reg_date = date("Y-m-d");

// 값 확인
// echo "<p> 이름 : ".$u_name."</p>";
// echo "<p> 아이디 : ".$u_id."</p>";
// echo "<p> 비밀번호 : ".$pwd."</p>";
// echo "<p> 전화번호 : ".$mobile."</p>";
// echo "<p> 생년월일 : ".$birth."</p>";
// echo "<p> 성별 : ".$gender."</p>";
// echo "<p> 개인정보유효기간 : ".$privacy_period."</p>";
// echo "<p> 수집동의 : ".$info_collect_apply."</p>";
// echo "<p> 마케팅 : ".$marketing_apply."</p>";
// echo "<p> 이메일수신 : ".$email_apply."</p>";
// echo "<p> sms수신 : ".$sms_apply."</p>";
// echo "<p> 가입일 : ".$reg_date."</p>"; 


include "../inc/dbcon.php";


$sql = "insert into members(";
$sql .= "u_id, pwd, u_name, ";
$sql .= "mobile, birth, gender, ";
$sql .= "privacy_period, ";
$sql .= "info_collect_apply, marketing_apply, email_apply, sms_apply, reg_date, withdrawal";
$sql .= ") values(";
$sql .= "'$u_id', '$pwd', '$u_name',";
$sql .= "'$mobile', '$birth', '$gender',";
$sql .= "'$privacy_period',";
$sql .= "'$info_collect_apply', '$marketing_apply', '$email_apply', '$sms_apply', '$reg_date', '$withdrawal');";

// 데이터베이스에 쿼리 전송
// mysqli_query("DB 연결객체", "전송할 쿼리");
mysqli_query($dbcon, $sql);

// DB 접속 종료
// mysqli_close("연결객체");
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"welcome.php?id=$u_id\";
    </script>
    ";

/* echo `
    <script type="text/javascript">
        // location.href = "이동할 페이지 주소";
        location.href = "welcome.php";
    </script>
    `; */
?>

<!-- 리디렉션 -->
<!-- <script type="text/javascript">
    // location.href = "이동할 페이지 주소";
    location.href = "welcome.php";
</script> -->