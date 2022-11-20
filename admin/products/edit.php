<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

$n_idx = $_GET["n_idx"];

$p_name = $_POST["p_name"];
$p_explain = $_POST["p_explain"];
$departure_vehicle = $_POST["departure_vehicle"];
$arrival_vehicle = $_POST["arrival_vehicle"];
$departure_date1 = $_POST["departure_date1"];
$departure_date2 = $_POST["departure_date2"];
$arrival_date1 = $_POST["arrival_date1"];
$arrival_date2 = $_POST["arrival_date2"];
$tour_city = $_POST["tour_city"];
$adult_p = $_POST["adult_p"];
$kid_p = $_POST["kid_p"];
$todd_p = $_POST["todd_p"];
$adult_fuel = $_POST["adult_fuel"];
$kid_fuel = $_POST["kid_fuel"];
$todd_fuel = $_POST["todd_fuel"];
$inclusion = $_POST["inclusion"];
$exclusion = $_POST["exclusion"];
$reference = $_POST["reference"];
$schedule = $_POST["schedule"];

// 값 확인
/* echo "<p> idx : ".$n_idx."</p>";
echo "<p> 제목 : ".$n_title."</p>";
echo "<p> 내용 : ".$n_content."</p>";
echo "<p> 가입일 : ".$w_date."</p>";
exit; */

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "update products set ";
$sql .= "p_name='$p_name',";
$sql .= "p_explain='$p_explain',";
$sql .= "departure_vehicle='$departure_vehicle',";
$sql .= "arrival_vehicle='$arrival_vehicle',";
$sql .= "departure_date1='$departure_date1',";
$sql .= "departure_date2='$departure_date2',";
$sql .= "arrival_date1='$arrival_date1',";
$sql .= "arrival_date2='$arrival_date2',";
$sql .= "tour_city='$tour_city',";
$sql .= "adult_p='$adult_p',";
$sql .= "kid_p='$kid_p',";
$sql .= "todd_p='$todd_p',";
$sql .= "adult_fuel='$adult_fuel',";
$sql .= "kid_fuel='$kid_fuel',";
$sql .= "todd_fuel='$todd_fuel',";
$sql .= "inclusion='$inclusion',";
$sql .= "exclusion='$exclusion',";
$sql .= "reference='$reference',";
$sql .= "schedule='$schedule' ";
$sql .= "where idx=$n_idx;";
/* echo $sql;
exit; */

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"view.php?n_idx=$n_idx\";
    </script>
    ";
?>