<?php
include "../inc/session.php";
include "../inc/admin_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from members;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

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
    <title>회원관리</title>
    <link rel="stylesheet" type="text/css" href="/norang/css/admin/index.css">
    <link rel="stylesheet" type="text/css" href="/norang/css/admin/list.css">
    <style>
        .no{width:50px}
        .u_name{width:120px}
        .u_id{width:240px}
        .mobile{width:150px}
        .birth{width:150px}
        .gender{width:50px}
        .privacy_period{width:80px}
        .info_collect_agree{width:80px}
        .marketing_agree{width:80px}
        .email_agree{width:80px}
        .sms_agree{width:80px}
        .withdraw_reason {
            width: 150px;
        }
        .withdraw_wish {
            width: 200px;
        }
        .reg_date{width:120px}
        .modify{width:180px}
    </style>
    <script>
        function mem_del(g_no){
            var rtn_val = confirm("정말 삭제하시겠습니까?");
            if(rtn_val == true){
                location.href = "member_delete.php?g_idx=" + g_no;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.php"; ?>
    <div class="big_container">
        <h2>회원관리</h2>
        <div class="container_inner">
            <p class="write_area">전체 회원수 <?php echo $total; ?>명 <a class="mini_btn" href="join.php">추가</a></p>
            <table class="mem_list_set">
                <tr class="mem_list_title">
                    <th class="no">번호</th>
                    <th class="u_id">아이디</th>
                    <th class="u_name">이름</th>
                    <th class="mobile">휴대폰번호</th>
                    <th class="birth">생년월일</th>
                    <th class="gender">성별</th>
                    <th class="privacy_period">개인정보<br>유효기간</th>
                    <th class="info_collect_agree">개인정보<br>수집동의</th>
                    <th class="marketing_agree">마케팅<br>수신동의</th>
                    <th class="email_agree">이메일<br>수신동의</th>
                    <th class="sms_agree">sms<br>수신동의</th>
                    <th class="withdrawal">탈퇴여부</th>
                    <th class="withdraw_reason">탈퇴사유</th>
                    <th class="withdraw_wish">바라는 점</th>
                    <th class="reg_date">가입일</th>
                    <th class="modify">관리</th>
                </tr>
                <?php
                    // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                    $start = ($page - 1) * $list_num;

                    // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                    // limit 몇번부터, 몇 개
                    $sql = "select * from members limit $start, $list_num;";
                    // echo $sql;
                    /* exit; */

                    // DB에 데이터 전송
                    $result = mysqli_query($dbcon, $sql);

                    // DB에서 데이터 가져오기
                    // pager : 글번호
                    $i = $start + 1;
                    while($array = mysqli_fetch_array($result)){
                ?>
                <tr class="mem_list_content">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $array["u_id"]; ?></td>
                    <td><?php echo $array["u_name"]; ?></td>
                    <?php
                    // $mobile = "00011112222";
                    /* $mobile = strval($array["mobile"]);
                    $mobile1 = substr($mobile, 0, 3);
                    $mobile2 = substr($mobile, 3, -4);
                    $mobile3 = substr($mobile, -4);
                    $mobile = $mobile1."-".$mobile2."-".$mobile3;
                    echo "<td>".$mobile."</td>";  */
                    ?>
                    <td><?php echo $array["mobile"]; ?></td>
                    <td><?php echo $array["birth"]; ?></td>
                    <td><?php echo $array["gender"]; ?></td>
                    <td><?php echo $array["privacy_period"]; ?></td>
                    <td><?php echo $array["info_collect_agree"]; ?></td>
                    <td><?php echo $array["marketing_agree"]; ?></td>
                    <td><?php echo $array["email_agree"]; ?></td>
                    <td><?php echo $array["sms_agree"]; ?></td>
                    <td><?php echo $array["withdrawal"]; ?></td>
                    <td><?php echo $array["withdraw_reason"]; ?></td>
                    <td><?php echo $array["withdraw_wish"]; ?></td>
                    <?php
                        /* $reg_date = substr($array["reg_date"], 0, 10);
                        echo "
                        <td>$reg_date; </td>
                        "; */
                    ?>
                    <td><?php echo $array["reg_date"]; ?></td>
                    <td>
                        <a class="mini_btn" href="member_info.php?g_idx=<?php echo $array["idx"]; ?>">수정</a>
                        <a class="mini_btn" href="#" onclick="mem_del(<?php echo $array['idx']; ?>)">삭제</a>
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