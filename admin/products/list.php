<?php
include "../inc/session.php";
include "../inc/admin_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from products;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 10;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

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
    <title>상품관리</title>
    <link rel="stylesheet" type="text/css" href="/norang/css/admin/index.css">
    <link rel="stylesheet" type="text/css" href="/norang/css/admin/list.css">
    <script>
        function product_del(g_no){
            var rtn_val = confirm("정말 삭제하시겠습니까?");
            if(rtn_val == true){
                location.href = "delete.php?n_idx=" + g_no;
            };
        };
    </script>
</head>
<body>
    <?php 
    include "../inc/sub_header.php"; 
    ?>
    <div class="big_container">
        <h2>상품 관리</h2>
        <div class="container_inner">
            <p class="write_area">전체 상품수 <?php echo $total; ?>개<span><a class="mini_btn" href="write.php">글쓰기</a></span></p>
            <table class="product_list_set">
                <tr class="product_list_title">
                    <th class="no">번호</th>
                    <th class="p_name">상품이름</th>
                    <th class="p_explain">상품설명</th>
                    <th class="departure_vehicle">출발교통</th>
                    <th class="arrival_vehicle">도착교통</th>
                    <th class="departure_date1">한국출발날짜</th>
                    <th class="departure_date2">현지도착시간</th>
                    <th class="arrival_date1">현지출발날짜</th>
                    <th class="arrival_date2">한국도착시간</th>
                    <th class="reg_date">등록일</th>
                    <th class="modify">관리</th>
                </tr>
                <?php
                    // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                    $start = ($page - 1) * $list_num;

                    // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                    // limit 몇번부터, 몇 개
                    $sql = "select * from products limit $start, $list_num;";
                    // echo $sql;
                    /* exit; */

                    // DB에 데이터 전송
                    $result = mysqli_query($dbcon, $sql);

                    // DB에서 데이터 가져오기
                    // pager : 글번호
                    $i = $start + 1;
                    while($array = mysqli_fetch_array($result)){
                ?>
                <tr class="product_list_content">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $array["p_name"]; ?></td>
                    <td><?php echo $array["p_explain"]; ?></td>
                    <td><?php echo $array["departure_vehicle"]; ?></td>
                    <td><?php echo $array["arrival_vehicle"]; ?></td>
                    <td><?php echo $array["departure_date1"]; ?></td>
                    <td><?php echo $array["departure_date2"]; ?></td>
                    <td><?php echo $array["arrival_date1"]; ?></td>
                    <td><?php echo $array["arrival_date2"]; ?></td>
                    <!-- <?php
                        /* $reg_date = substr($array["reg_date"], 0, 10);
                        echo "
                        <td>$reg_date; </td>
                        "; */
                    ?> -->
                    <td><?php echo $array["reg_date"]; ?></td>
                    <td>
                        <a class="mini_btn" href="view.php?n_idx=<?php echo $array["idx"]; ?>">보기</a>
                        <a class="mini_btn" href="modify.php?n_idx=<?php echo $array["idx"]; ?>">수정</a>
                        <a class="mini_btn" href="#" onclick="product_del(<?php echo $array['idx']; ?>)">삭제</a>
                    </td>
                </tr>
                <?php
                        $i++;
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
        </div>    
    </div>
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