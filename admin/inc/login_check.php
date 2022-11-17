<?php
if(!$s_idx || $s_id!="admin@abc.com"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"http://localhost/norang/admin/login/login.php\";
        </script>
    ";
    exit;
};
?>