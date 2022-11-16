<?php
// 세션
include "../inc/session.php";

$u_id = $_POST["u_id"];

include "../inc/dbcon.php";

$sql = "select u_id from members where u_id='$u_id';";

$result = mysqli_query($dbcon, $sql);

$array= mysqli_fetch_array($result);

$u_id2 = $array["u_id"];

if($u_id2){ 
    $temp_pwd = uniqid();

    $upd_sql = "update members set pwd='$temp_pwd' where u_id='$u_id';";

    $upd_result = mysqli_query($dbcon, $upd_sql);
}

mysqli_close($dbcon);

if($u_id2){ 
    echo "
    <script type=\"text/javascript\">
        location.href = \"find_pwd_result.php?id=$u_id2\";
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