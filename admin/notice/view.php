<?php
include "../inc/session.php";
include "../inc/admin_check.php";

$n_idx = $_GET["n_idx"];
$number = $_GET["number"];

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from notice where idx=$n_idx;";
/* echo $sql;
exit; */

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);
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
        .notice_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        .notice_view_content{border-bottom:1px solid #666}
        .notice_view_text{border-bottom:2px solid #666;}
        .v_title{width:100px; background:#eee}
        .v_content{text-align:left;padding-left:20px}
        /* .v_text{height:200px} */

        .list {
            display: flex;
            justify-content: center;
        }

        .fix {
            display: inline-block;
            width: 50px;
            height: 20px;
            background: url(../../images/notice/fix_i.png) no-repeat;
            text-indent: -9999px;
        }
    </style>
    <script>
        function remove_notice(){
            var ck = confirm("정말 삭제하시겠습니까?");
            if(ck){
                location.href="delete.php?n_idx=<?php echo $n_idx; ?>";
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.php"; ?>
    <!-- 콘텐트 -->
    <h2>공지사항</h2>
    <table class="notice_list_set">
        <tr>
            <th class="v_title">번호</th>
            <td>
                <?php
                    if($array["always"] == "y"){
                ?>
                    <i class="fix"></i>
                <?php
                } else {
                    echo $number;
                }
                ?>
            </td>
            <th class="v_title">카테고리</th>
            <td>
                <?php 
                if($array["cate"] == "all"){
                    echo "";
                }else if($array["cate"] == "notice"){
                    echo "[공지사항]";
                }else if($array["cate"] == "honey"){
                    echo "[허니문]";
                }else if($array["cate"] == "golf"){
                    echo "[골프]";
                }else if($array["cate"] == "cruise"){
                    echo "[크루즈]";
                }else if($array["cate"] == "domestic"){
                    echo "[국내]";
                }else if($array["cate"] == "busanDaegu"){
                    echo "[부산/대구]";
                }else if($array["cate"] == "airport"){
                    echo "[항공권 소식]";
                }else if($array["cate"] == "hotel"){
                    echo "[호텔]";
                };            
                ?>
            </td>
        </tr>
        <tr class="notice_list_title">
            <th class="v_title">제목</th>
            <td class="v_content"><?php echo $array["n_title"]; ?></td>
        </tr>
        <tr class="notice_view_content">
            <th class="v_title">작성자</th>
            <td class="v_content"><?php echo $array["writer"]; ?></td>
        </tr>
        <tr class="notice_view_content">
            <th class="v_title">날짜</th>
            <td class="v_content">
            <?php 
            $w_date = substr($array["w_date"], 0, 10);
            echo $w_date; 
            ?>
            </td>
        </tr>
        <tr class="notice_view_text">
            <td colspan="2" class="v_text">
            <?php 
            // textarea의 엔터를 br로 변경
            // str_repalce("어떤 문자를", "어떤 문자로", "어떤 값에서");
            $n_content = str_replace("\n", "<br>", $array["n_content"]);
            $n_content = str_replace(" ", "&nbsp;", $n_content);
            echo $n_content; 
            ?>
            </td>
        </tr>
    </table>
    <p class="button_wrap">
        <button onclick="location.href='write.php'" class="btn_1">글쓰기</button>
        <button onclick="location.href='list.php'" class="btn_1">목록</button>
        <button onclick="location.href='modify.php?n_idx=<?php echo $n_idx; ?>'" class="btn_2">수정</button>
        <button onclick="remove_product()" class="btn_2">삭제</button>
    </p>
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