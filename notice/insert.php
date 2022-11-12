<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

$table_name = "notice";
// 이전 페이지에서 값 가져오기
$always = $_POST["always"] == "y" ? "y" : "n";
$cate = $_POST["cate"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];

// 작성일자
$w_date = date("Y-m-d");

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
$sql .= "always, cate, n_title, n_content, w_date";
$sql .= ") values(";
$sql .= "'$always', '$cate', '$n_title', '$n_content', '$w_date'";
$sql .= ");";

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);


// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"notice_list.php\";
    </script>
    ";
?>