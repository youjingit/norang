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
    <title>상품보기</title>
    <link rel="stylesheet" type="text/css" href="/norangcss/admin/index.css">
    <link rel="stylesheet" type="text/css" href="/norang/css/admin/common.css">
    <script>
        function remove_product(){
            var ck = confirm("정말 삭제하시겠습니까?");
            if(ck){
                location.href="delete.php?n_idx=<?php echo $n_idx; ?>";
            };
        };
    </script>
    <style>
        th {
            width: 150px;
        }

        td {
            text-align: center;
        }
    </style>
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
            <th class="v_title">한국출발시간</th>
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
            <th class="v_title">현지출발시간</th>
            <td class="v_content">
            <?php echo $array["arrival_date1"];?>
            </td>
        </tr>
        <tr class="product_view_content">
            <th class="v_title">한국도착시간</th>
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
        <tr class="notice_view_content">
            <th class="v_title">첨부파일</th>
            <td class="v_content">
                <a href="../../data/<?php echo $array["f_name"]; ?>" download="<?php echo $array["f_name"]; ?>">
                <?php echo $array["f_name"]; ?>
                </a>
            </td>
        </tr>
    </table>
    <p class="button_wrap">
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