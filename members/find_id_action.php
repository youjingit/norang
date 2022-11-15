<?php
// 세션
include "../inc/session.php";

// 데이터 가져오기
$u_name = $_POST["u_name"];
$mobile = $_POST["mobile"];


// // 값 확인
// echo "<p> 이름 : ".$u_name."</p>";
// echo "<p> 휴대폰번호 : ".$mobile."</p>";


// // DB 접속
include "../inc/dbcon.php";

// 쿼리 작성
// update 테이블명 set 필드명='값', 필드명='값',,,, where 필드명='값';

$sql = "select u_id from members where u_name='$u_name' and mobile='$mobile';";

$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);

$u_id = $array["u_id"];

// DB 종료
mysqli_close($dbcon);

if($u_id){ 
    echo "
    <script type=\"text/javascript\">
        location.href = \"find_id_result.php?id=$u_id\";
    </script>
    ";
} else{ 
    echo "
    <script type=\"text/javascript\">
        alert(\"아이디를 찾을 수 없습니다. 이름과 휴대폰번호를 다시 확인하세요.\");
        location.href = \"find_id.php\";
    </script>
    ";
};
?>