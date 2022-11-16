<?php
// 세션
include "../inc/session.php";

// 데이터 가져오기
$u_id = $_POST["u_id"];

// // 값 확인
// echo "<p> 아이디 : ".$u_id."</p>";

// DB 접속
include "../inc/dbcon.php";

// 쿼리 작성
// update 테이블명 set 필드명='값', 필드명='값',,,, where 필드명='값';

$temp_pwd = uniqid();

$sql = "select pwd from members where u_id='$u_id';";

$result = mysqli_query($dbcon, $sql);

$array= mysqli_fetch_array($result);

$upd_sql = "update members set pwd='$temp_pwd' where u_id='$u_id';";

$upd_result = mysqli_query($dbcon, $upd_sql);

$pwd = $array["pwd"];

//$array_upd = mysqli_fetch_array($upd_result);


// DB 종료
mysqli_close($dbcon);

if($pwd){ 
    echo "
    <script type=\"text/javascript\">
        location.href = \"find_pwd_result.php?pwd=$pwd\";
    </script>
    ";
} else{ 
    echo "
    <script type=\"text/javascript\">
        alert(\"이메일 정보를 찾을 수 없습니다. 이메일을 다시 확인하세요.\");
        location.href = \"find_pwd.php\";
    </script>
    ";
};
?>