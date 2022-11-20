<?php 
include "../inc/session.php"; 
include "../inc/admin_check.php";

// 데이터 가져오기
$n_idx = $_GET["n_idx"];

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from products where idx = $n_idx;";

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
    <title>상품 수정</title>
    <style>
        body,input,button,textarea{font-size:20px}
        a{text-decoration:none;margin:0 5px}
        table, td{border-collapse:collapse}
        th, td{padding:10px}
        .product_list_set{width:860px}
        .product_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        .product_view_content{border-bottom:1px solid #999}

        .list{width:1200px;text-align:center}
    </style>
     <script>
        function product_check(){
            var n_title = document.getElementById("p_name");
            var n_content = document.getElementById("p_explain");

            if(!p_name.value){
                alert("상품이름을 입력하세요.");
                p_name.focus();
                return false;
            };

            if(!p_explain.value){
                alert("상품설명을 입력하세요.");
                p_explain.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.php"; ?>
    <form name="product_form" action="edit.php?n_idx=<?php echo $n_idx?>" method="post" onsubmit="return product_check()">
        <fieldset>
            <legend>상품</legend>
            <table class="product_list_set">
                <tr>
                    <td>
                        <label for="p_name">상품이름</label>
                        <input type="text" name="p_name" id="p_name" value="<?php echo $array["p_name"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="p_explain">상품설명</label>
                        <textarea name="p_explain" id="p_explain"><?php echo $array["p_explain"]; ?></textarea>
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="departure_vehicle">출발교통</label>
                        <input type="text" name="departure_vehicle" id="departure_vehicle" value="<?php echo $array["departure_vehicle"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="arrival_vehicle">도착교통</label>
                        <input type="text" name="arrival_vehicle" id="arrival_vehicle" value="<?php echo $array["arrival_vehicle"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="departure_date1">출발날짜</label>
                        <input type="text" name="departure_date1" id="departure_date1" value="<?php echo $array["departure_date1"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="departure_date2">현지도착시간</label>
                        <input type="text" name="departure_date2" id="departure_date2" value="<?php echo $array["departure_date2"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="arrival_date1">현지출발날짜</label>
                        <input type="text" name="arrival_date1" id="arrival_date1" value="<?php echo $array["arrival_date1"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="arrival_date2">도착시간</label>
                        <input type="text" name="arrival_date2" id="arrival_date2" value="<?php echo $array["arrival_date2"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="tour_city">여행도시</label>
                        <textarea name="tour_city" id="tour_city"><?php echo $array["tour_city"]; ?></textarea>
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="adult_p">성인기본가격</label>
                        <input type="text" name="adult_p" id="adult_p" value="<?php echo $array["adult_p"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="kid_p">아동기본가격</label>
                        <input type="text" name="kid_p" id="kid_p" value="<?php echo $array["kid_p"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="todd_p">유아기본가격</label>
                        <input type="text" name="todd_p" id="todd_p" value="<?php echo $array["todd_p"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="adult_fuel">성인유류할증료</label>
                        <input type="text" name="adult_fuel" id="adult_fuel" value="<?php echo $array["adult_fuel"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="kid_fuel">아동유류할증료</label>
                        <input type="text" name="kid_fuel" id="kid_fuel" value="<?php echo $array["kid_fuel"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="todd_fuel">유아유류할증료</label>
                        <input type="text" name="todd_fuel" id="todd_fuel" value="<?php echo $array["todd_fuel"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="inclusion">포함내역</label>
                        <input type="text" name="inclusion" id="inclusion" value="<?php echo $array["inclusion"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="exclusion">불포함내역</label>
                        <input type="text" name="exclusion" id="exclusion" value="<?php echo $array["exclusion"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="reference">참고/전달사항</label>
                        <input type="text" name="reference" id="reference" value="<?php echo $array["reference"]; ?>">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="schedule">여행일정</label>
                        <textarea name="schedule" id="schedule"><?php echo $array["schedule"]; ?></textarea>
                    </td>
                </tr>
            </table>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">수정하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>