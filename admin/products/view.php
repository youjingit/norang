<?php
include "../inc/session.php";
include "../inc/admin_check.php";

$n_idx = $_GET["n_idx"];

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from products where idx=$n_idx;";
/* echo $sql;
exit; */

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 20;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

$i = $total - (($page - 1) * $list_num);

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
    <style>
        body{font-size:20px}
        a{text-decoration:none;margin:0 5px}
        table, td{border-collapse:collapse}
        th, td{padding:10px}
        .product_list_set{width:860px}
        .product_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        .product_view_content{border-bottom:1px solid #999}
        .product_view_text{border-bottom:2px solid #999;}
        .v_title{width:60px;background:#eee}
        .v_content{width:500px;text-align:left;padding-left:20px}
        /* .v_text{height:200px} */

        .list{width:1200px;text-align:center}

        a:hover{color:rgb(255, 128, 0)}
    </style>
    <script>
        function remove_product(){
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
    <h2>상품정보</h2>
    <table class="product_list_set">
        <tr>
            <th class="v_title">번호</th>
            <td>
                <?php echo $i; ?>
            </td>
        </tr>
        <tr>
            <th class="v_title">등록일</th>
            <td>
                <?php echo $array["reg_date"]; ?>
            </td>
        </tr>
        <tr class="product_list_title">
            <th class="v_title">상품이름</th>
            <td class="v_content"><?php echo $array["p_name"]; ?></td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">상품설명</th>
            <td class="v_content"><?php echo $array["p_explain"]; ?></td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">출발교통편</th>
            <td class="v_content">
            <?php echo $array["departure_vehicle"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">도착교통편</th>
            <td class="v_content">
            <?php echo $array["arrival_vehicle"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">출발시간</th>
            <td class="v_content">
            <?php echo $array["departure_date1"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">현지도착시간</th>
            <td class="v_content">
            <?php echo $array["departure_date2"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">현지에서 출발시간</th>
            <td class="v_content">
            <?php echo $array["arrival_date1"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">도착당일 도착시간</th>
            <td class="v_content">
            <?php echo $array["arrival_date2"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">여행도시</th>
            <td class="v_content">
            <?php echo $array["tour_city"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">성인기본가격</th>
            <td class="v_content">
            <?php echo $array["adult_p"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">아동기본가격</th>
            <td class="v_content">
            <?php echo $array["kid_p"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">유아기본가격</th>
            <td class="v_content">
            <?php echo $array["todd_p"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">성인유류할증료</th>
            <td class="v_content">
            <?php echo $array["adult_fuel"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">아동유류할증료</th>
            <td class="v_content">
            <?php echo $array["kid_fuel"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">유아유류할증료</th>
            <td class="v_content">
            <?php echo $array["todd_fuel"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">포함내역</th>
            <td class="v_content">
            <?php echo $array["inclusion"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">불포함내역</th>
            <td class="v_content">
            <?php echo $array["exclusion"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">참고/전달사항</th>
            <td class="v_content">
            <?php echo $array["reference"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">여행일정</th>
            <td class="v_content">
            <?php echo $array["schedule"];?>
            </td>
        </tr>
    </table>
    <p class="list">
        <a href="list.php">[목록]</a>
        <a href="modify.php?n_idx=<?php echo $n_idx; ?>">[수정]</a>
        <a href="#" onclick="remove_product()">[삭제]</a>
    </p>
</body>
</html>