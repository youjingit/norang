<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 데이터 가져오기
$u_name = $_POST["u_name"];
$orders_idx = $_POST["orders_idx"];
$mobile = $_POST["mobile"];

// 쿼리 작성
$sql = "select t1.*, t2.* from products t1, orders t2 where t1.idx = t2.p_id AND t2.idx = '$orders_idx' AND t2.u_name = '$u_name' AND t2.mobile = '$mobile';";

// 쿼리 실행
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

// DB 종료
mysqli_close($dbcon);
?>

<?php
$idx = $array["idx"];
if($idx){ 
?>
    <!DOCTYPE html>
    <html lang="ko">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>노랑풍선 [여행을 가볍게]</title>
            <link rel="stylesheet" type="text/css" href="../css/reset.css">
            <link rel="stylesheet" type="text/css" href="../css/base.css">
            <link rel="stylesheet" type="text/css" href="../css/common.css">
            <link rel="stylesheet" type="text/css" href="../css/order_complete.css">
        </head>
        <body>
            <header>
                <div class="container">
                    <div class="depth1">
                        <div class="depth1_left">
                            <h1 class="logo"><a href="../index.php">노랑풍선</a></h1>
                        </div>
                        <div class="depth1_right">
                        <h2 class="screen_out">사용자메뉴</h2>
                            <ul class="depth1_top_menu">
                            <?php if(!$s_idx){ ?>
                                <!-- 로그인 전 -->
                                <li><a href="/norang/login/login.php">로그인</a></li>
                                <li><a href="/norang/members/join_pre.php">회원가입</a></li>
                                <li><a href="/norang/nonmember/nonmember_reserve_pkg.php">예약확인</a></li>
                            <?php } else if($s_id == "admin@abc.com"){ ?>
                                <!-- 관리자 로그인 -->
                                <li><a href="/norang/login/logout.php">로그아웃</a></li>
                                <li><a href="/norang/admin/index.php">관리자 페이지</a></li>
                            <?php } else{ ?>
                            <!-- 로그인 후 -->   
                                <li><a href="/norang/login/logout.php">로그아웃</a></li>
                                <li><a href="/norang/members/my_page.php">마이페이지</a></li>
                            <?php }; ?>    
                                <li><a href="#">단체문의</a></li>
                                <li><a href="#">고객센터</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <hr>
            <main>
                <div class="compl_container">
                    <p class="compl_title"><span><?php echo $array["u_name"];?></span>님, 예약내역입니다.<i></i></p>
                    <p class="compl_subtitle">노랑풍선과 함께 즐거운 여행 되세요!</p>

                    <div class="compl_info">
                        <p><span class="info_title">예약번호: </span><span> <?php echo $array["idx"];?></span></p>
                        <p><span class="info_title">상품명: </span><span> <?php echo $array["p_name"];?></span></p>
                        <p><span class="info_title">출발일: </span><span> <?php echo $array["departure_date1"];?> → <?php echo $array["departure_date2"];?></span></p>
                        <p><span class="info_title">도착일: </span><span> <?php echo $array["arrival_date1"];?> → <?php echo $array["arrival_date2"];?></span></p>
                        <p><span class="info_title">출발교통: </span><span> <?php echo $array["departure_vehicle"];?></span></p>
                        <p><span class="info_title">도착교통: </span><span> <?php echo $array["arrival_vehicle"];?></span></p>
                        <p><span class="info_title">여행인원: </span>
                        <span>성인 : <?php echo $array["adult_num"];?> 아동 : <?php echo $array["kid_num"];?> 유아 : <?php echo $array["todd_num"];?></span></p>
                        <p id="tourist"></p>
                    </div> 
                
                    <div class="btn_wrap">
                        <button type="button" id="home_btn" onclick="location.href='../index.php'">메인으로</button>
                    </div>
                </div>
            </main>

            <!-- 스크립트 -->
            <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    var touristJsonArray = JSON.parse('<?php echo $array["tourist_json_array"];?>');
                    var touristEl = $("#tourist");
                    for(var i=0; i<touristJsonArray.length; i++){
                        var touristJson = touristJsonArray[i];
                        var innerHtml = `
                        <div>
                            <p class="json_title">여행자 정보</p>
                            <div><span class="json_subtitle">이름(한글): </span>${touristJson.tourName}</div>
                            <div><span class="json_subtitle">성(영어): </span>${touristJson.lastName}</div>
                            <div><span class="json_subtitle">이름(영어): </span>${touristJson.eName}</div>
                            <div><span class="json_subtitle">성별: </span>${touristJson.gender}</div>
                            <div><span class="json_subtitle">생년월일: </span>${touristJson.birth}</div>
                            <div><span class="json_subtitle">휴대폰 번호: </span>${touristJson.mobile}</div>
                        </div>
                        `;
                        touristEl.append($(innerHtml));
                    }
                });
            </script>
        </body>
    </html>
<?php
} else{ 
    echo "
    <script type=\"text/javascript\">
        alert(\"예약정보를 찾을 수 없습니다. 이름과 예약번호, 휴대폰 번호를 다시 확인하세요.\");
        location.href = \"nonmember_reserve_free.php\";
    </script>
    ";
};
?>