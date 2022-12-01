<?php 
include "../inc/session.php"; 
include "../inc/admin_check.php";

// 데이터 가져오기
$n_idx = $_GET["n_idx"];

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from notice where idx = $n_idx;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

// DB 종료
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" type="text/css" href="/norang/css/admin/index.css">
    <link rel="stylesheet" type="text/css" href="/norang/css/admin/common.css">
    <style>
        td {
        display: flex;
        text-align: left;
        }
    </style>
    <script>
        function notice_check(){
            var n_title = document.getElementById("n_title");
            var n_content = document.getElementById("n_content");

            if(!n_title.value){
                alert("제목을 입력하세요.");
                n_title.focus();
                return false;
            };

            if(!n_content.value){
                alert("내용을 입력하세요.");
                n_content.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.php"; ?>
    <form name="notice_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" onsubmit="return notice_check()">
        <fieldset>
            <legend>공지사항</legend>
                <table>
                    <tr>
                        <td>
                        작성자 <?php echo $s_name; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="always">상시 여부</label>
                        <input type="checkbox" name="always" id="always" value="y"<?php if($array["always"] == "y") echo " checked"; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cate">카테고리</label>
                            <select name="cate" id="cate" class="cate">
                                <option value="all"<?php if($array["cate"] == "all") echo " selected"; ?>>전체</option>
                                <option value="notice"<?php if($array["cate"] == "notice") echo " selected"; ?>>공지사항</option>
                                <option value="honey"<?php if($array["cate"] == "honey") echo " selected"; ?>>허니문</option>
                                <option value="golf"<?php if($array["cate"] == "golf") echo " selected"; ?>>골프</option>
                                <option value="cruise"<?php if($array["cate"] == "cruise") echo " selected"; ?>>크루즈</option>
                                <option value="domestic"<?php if($array["cate"] == "domestic") echo " selected"; ?>>국내</option>
                                <option value="busanDaegu"<?php if($array["cate"] == "busanDaegu") echo " selected"; ?>>부산/대구</option>
                                <option value="airport"<?php if($array["cate"] == "airport") echo " selected"; ?>>항공권 소식</option>
                                <option value="hotel"<?php if($array["cate"] == "hotel") echo " selected"; ?>>호텔</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="n_title">제목</label>
                            <input type="text" name="n_title" id="n_title" value="<?php echo $array["n_title"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="n_content">내용</label>
                            <textarea cols="150" rows="20" name="n_content" id="n_content"><?php echo $array["n_content"]; ?></textarea>
                        </td>
                    </tr>
                </table>
            <p class="button_wrap">
                <button type="button" onclick="history.back()" class="btn_1">이전 페이지</button>
                <button type="submit" class="btn_2">수정하기</button>
            </p>
        </fieldset>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(function () {
            $(".sub_menu_wrap").hide();
            $(".toggle_btn").click(function () {
                $(".sub_menu_wrap").fadeToggle(300);
            });

            $('.sub_menu_wrap').mouseleave(function () {
                $('.sub_menu_wrap').fadeOut();
                $('.hide_sidemenu').fadeIn();
            });
        });
    </script>
</body>
</html>