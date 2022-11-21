<?php
// 세션
include "../inc/session.php";

// 데이터 가져오기
$g_idx = $_POST["g_idx"];
$pwd = $_POST["pwd"];
$birth = $_POST["birth"];
$gender = $_POST["gender"];
$privacy_period = $_POST["privacy_period"];
$info_collect_apply = $_POST["info_collect_apply"];
$marketing_apply = $_POST["marketing_apply"]== "y" ? "y" : "n";
$email_apply = $_POST["email_apply"] == "y" ? "y" : "n";
$sms_apply = $_POST["sms_apply"] == "y" ? "y" : "n";

// 값 확인
/* echo "<p> 비밀번호 : ".$pwd."</p>";
echo "<p> 전화번호 : ".$mobile."</p>";
echo "<p> 이메일 : ".$email."</p>";
echo "<p> 생년월일 : ".$birth."</p>";
echo "<p> 우편번호 : ".$ps_code."</p>";
echo "<p> 기본주소 : ".$addr_b."</p>";
echo "<p> 상세주소 : ".$addr_d."</p>";
echo "<p> 성별 : ".$gender."</p>"; */

// DB 접속
include "../inc/dbcon.php";

// 쿼리 작성
// update 테이블명 set 필드명='값', 필드명='값',,,, where 필드명='값';

// 비밀번호를 입력한 경우
$sql = "update members set ";
$sql .= "pwd='$pwd', ";
$sql .= "birth='$birth', ";
$sql .= "gender='$gender', ";
$sql .= "privacy_period='$privacy_period', ";
$sql .= "info_collect_apply='$info_collect_apply', ";
$sql .= "marketing_apply='$marketing_apply', ";
$sql .= "email_apply='$email_apply', ";
$sql .= "sms_apply='$sms_apply' ";
$sql .= "where idx=$g_idx;";
// echo $sql;

// 비밀번호를 입력하지 않은 경우
$sql_nPwd = "update members set birth='$birth', gender='$gender', privacy_period='$privacy_period', info_collect_apply='$info_collect_apply', marketing_apply='$marketing_apply', email_apply='$email_apply', sms_apply='$sms_apply' where idx=$g_idx;";
// echo $sql_nPwd;


// 쿼리 전송
// mysqli_query(DB 연결객체, 전송할 쿼리)
if($pwd){ //비밀번호 입력한 경우
    mysqli_query($dbcon, $sql);
} else{ //비밀번호 입력하지 않은 경우
    mysqli_query($dbcon, $sql_nPwd);
};

// DB 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href = \"list.php?g_idx=$g_idx\";
    </script>
    ";
?>