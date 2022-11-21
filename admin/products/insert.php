<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

$table_name = "products";
// 이전 페이지에서 값 가져오기
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
$inclusion = str_replace('\"', '\\\"', str_replace('\'', '\\\'', $_POST["inclusion"]));
$exclusion = str_replace('\"', '\\\"', str_replace('\'', '\\\'', $_POST["exclusion"]));
$reference = str_replace('\"', '\\\"', str_replace('\'', '\\\'', $_POST["reference"]));
$schedule = $_POST["schedule"];

if($_FILES["up_file"] != NULL){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"];
    $up = move_uploaded_file($tmp_name, "../../data/$f_name");
};

$f_type = $_FILES["up_file"]["type"];
$f_size = $_FILES["up_file"]["size"];
// 작성일자
$reg_date = date("Y-m-d");

// 값 확인
/* echo "<p> 제목 : ".$n_title."</p>";
echo "<p> 내용 : ".$n_content."</p>";
echo "<p> 작성자 : ".$s_name."</p>";
echo "<p> 가입일 : ".$w_date."</p>";
exit; */

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "insert into $table_name(";
$sql .= "p_name, p_explain, departure_vehicle, arrival_vehicle, departure_date1, departure_date2, arrival_date1, arrival_date2, tour_city, adult_p, kid_p, todd_p, adult_fuel, kid_fuel, todd_fuel, inclusion, exclusion,
reference, schedule, reg_date, f_name, f_type, f_size";
$sql .= ") values(";
$sql .= "'$p_name', '$p_explain', '$departure_vehicle', '$arrival_vehicle', '$departure_date1','$departure_date2','$arrival_date1','$arrival_date2','$tour_city','$adult_p','$kid_p','$todd_p','$adult_fuel','$kid_fuel','$todd_fuel','$inclusion', '$exclusion', '$reference', '$schedule', '$reg_date','$f_name', '$f_type', '$f_size'";
$sql .= ");";
/* echo $sql;
exit; */

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);


// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";
?>