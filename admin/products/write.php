<?php 
include "../inc/session.php"; 
include "../inc/admin_check.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품등록</title>
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
    <form name="product_form" action="insert.php" method="post" onsubmit="return product_check()">
        <fieldset>
            <legend>상품등록</legend>
            <table class="product_list_set">
                <tr>
                    <td>
                        <label for="p_name">상품이름</label>
                        <input type="text" name="p_name" id="p_name">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="p_explain">상품설명</label>
                        <textarea name="p_explain" id="p_explain"></textarea>
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="departure_vehicle">출발교통</label>
                        <input type="text" name="departure_vehicle" id="departure_vehicle">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="arrival_vehicle">도착교통</label>
                        <input type="text" name="arrival_vehicle" id="arrival_vehicle">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="departure_date1">출발날짜</label>
                        <input type="text" name="departure_date1" id="departure_date1">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="departure_date2">현지도착시간</label>
                        <input type="text" name="departure_date2" id="departure_date2">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="arrival_date1">현지출발날짜</label>
                        <input type="text" name="arrival_date1" id="arrival_date1">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="arrival_date2">도착시간</label>
                        <input type="text" name="arrival_date2" id="arrival_date2">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="tour_city">여행도시</label>
                        <textarea name="tour_city" id="tour_city"></textarea>
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="adult_p">성인기본가격</label>
                        <input type="text" name="adult_p" id="adult_p">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="kid_p">아동기본가격</label>
                        <input type="text" name="kid_p" id="kid_p">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="todd_p">유아기본가격</label>
                        <input type="text" name="todd_p" id="todd_p">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="adult_fuel">성인유류할증료</label>
                        <input type="text" name="adult_fuel" id="adult_fuel">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="kid_fuel">아동유류할증료</label>
                        <input type="text" name="kid_fuel" id="kid_fuel">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="todd_fuel">유아유류할증료</label>
                        <input type="text" name="todd_fuel" id="todd_fuel">
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="inclusion">포함내역</label>
                        <textarea name="inclusion" id="inclusion"></textarea>
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="exclusion">불포함내역</label>
                        <textarea name="exclusion" id="exclusion"></textarea>
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="reference">참고/전달사항</label>
                        <textarea name="reference" id="reference"></textarea>
                    </td>
                </tr>
                <tr class="product_view_content">
                    <td>
                        <label for="schedule">여행일정</label>
                        <textarea name="schedule" id="schedule"></textarea>
                    </td>
                </tr>
            </table>
        <p class="list">
            <button type="button" onclick="history.back()">이전 페이지</button>
            <button type="submit">등록하기</button>
        </p>
        </fieldset>
    </form>
</body>
</html>