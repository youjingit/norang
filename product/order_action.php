<?php
// 세션
include "../inc/session.php";

//데이터 가져오기
$order_number = uniqid();
$p_id = $_GET["n_idx"];
$u_id = $s_id;
$opt_apply = $_POST["opt_apply"] == "y" ? "y" : "n";
$u_name = $_POST["u_name"];
$birth = $_POST["birth"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$adult_num = $_POST["adult_num"];
$kid_num = $_POST["kid_num"];
$todd_num = $_POST["todd_num"];
$request = $_POST["request"];
$tourist_json_array = $_POST["tourist_json_array"];
$office = $_POST["office"] == "y" ? "y" : "n";

$reg_date = date("Y-m-d");


// DB 접속
include "../inc/dbcon.php";

// // 쿼리 작성

$sql = "insert into orders(";
$sql .= "idx, p_id, u_id, opt_apply, ";
$sql .= "u_name, birth, email, ";
$sql .= "mobile, adult_num, kid_num, todd_num, ";
$sql .= "request, tourist_json_array, office, reg_date";
$sql .= ") values(";
$sql .= "'$order_number', '$p_id', '$u_id', '$opt_apply', ";
$sql .= "'$u_name', '$birth', '$email', ";
$sql .= "'$mobile', '$adult_num', '$kid_num', '$todd_num', ";
$sql .= "'$request', '$tourist_json_array', '$office', '$reg_date');";

mysqli_query($dbcon, $sql);

// DB 종료
mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        location.href = \"order_complete.php?g_idx=$order_number\";
    </script>
    ";
?>