<?php
include "../inc/session.php";
include "../inc/admin_check.php";

// DB 연결
include "../inc/dbcon.php";

// 카테고리
$cate = isset($_GET["cate"])? $_GET["cate"] : "";

// 쿼리 작성
if($cate){
    $sql = "select * from notice where cate='$cate';";
} else{
    $sql = "select * from notice;";
};

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 20;

// paging : 한 블럭 당 페이지 수
$page_num = 10;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" type="text/css" href="../css/admin/index.css">
    <link rel="stylesheet" type="text/css" href="../../css/admin/list.css">
    <style>
        table {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
    <script>
        function remove_notice(g_no){
            var ck = confirm("정말 삭제하시겠습니까?");
            if(ck){
                location.href="delete.php?n_idx="+g_no;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.php"; ?>
    <h2>공지사항</h2>
    <p class="notice_write_area">전체<?php echo $total; ?>개 <a class="mini_btn" href="write.php">글쓰기</a></p>
    <table class="notice_list_set">
        <tr class="notice_list_title">
            <th class="no">번호</th>
            <th class="n_title">제목</th>
            <th class="w_date">날짜</th>
            <th class="modify">관리</th>
        </tr>
        <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            if($cate){
                $sql = "select * from notice where cate='$cate' order by always desc, idx desc limit $start, $list_num;";
            } else{
                $sql = "select * from notice order by always desc, idx desc limit $start, $list_num;";
            };
            // echo $sql;
            /* exit; */

            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(역순)
            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
            $i = $total - (($page - 1) * $list_num);
            while($array = mysqli_fetch_array($result)){
            ?>
            <tr class="notice_list_content">
                <td>
                    <?php
                    if($array["always"] == "y"){
                    ?>
                        <i class="fix"></i>
                    <?php
                    } else {
                        echo $i;
                    }
                    ?>
                </td>
                <td class="notice_content_title">
                    <a href="view.php?n_idx=<?php echo $array["idx"]; ?>&number=<?php echo $i; ?>">
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
                    echo $array["n_title"]; ?></a></td>
                <td><?php echo substr($array["w_date"], 0, 10); ?></td>
                <td>
                <a class="mini_btn" href="modify.php?n_idx=<?php echo $array["idx"]; ?>">수정</a>
                <a class="mini_btn" href="#" onclick="remove_notice(<?php echo $array['idx']; ?>)">삭제</a>
                </td>
            </tr>
        <?php
                $i--;
            }; 
        ?>
    </table>
    <p class="pager">
    <?php
    // pager : 이전 페이지
    if($page <= 1){
    ?>
    <a href="list.php?page=1">이전</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page - 1); ?>">이전</a>
    <?php }; ?>

    <?php
    // pager : 페이지 번호 출력
    for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>

    <?php
    // pager : 다음 페이지
    if($page >= $total_page){
    ?>
    <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page + 1); ?>">다음</a>
    <?php }; ?>
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