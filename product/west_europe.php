<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

$sql = "select * from products;";

$result = mysqli_query($dbcon, $sql);

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
    <link rel="stylesheet" type="text/css" href="../css/index/header.css">
    <link rel="stylesheet" type="text/css" href="../css/index/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/west_europe.css">
</head>
<body>
    <header>
        <nav class="gnb">
            <!-- depth1 -->
            <div class="container">
                <div class="depth1">
                    <div class="depth1_left">
                        <h1 class="logo"><a href="../index.php">노랑풍선</a></h1>
                        <div>
                            <h2 class="blind">주요메뉴</h2>
                            <ul class="depth1_menu">
                                <li><a class="depth1_link menu1 active" href="#" data-target=".depth2_1menu">패키지여행</a>
                                </li>
                                <li><a class="depth1_link menu2" href="#" data-target=".depth2_2menu">자유여행</a></li>
                            </ul>
                        </div>
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

            <hr />

            <!-- 2depth -->
            <div class="container">
                <div class="depth2">
                    <div class="depth2_left">
                        <ul class="depth2_menu depth2_1menu show">
                            <li>
                                <a class="depth2_link menu1_1 active" href="#" data-target=".menu1_1_1">해외패키지</a>
                            </li>
                            <li>
                                <a class="depth2_link menu1_2" href="#" data-target=".menu1_2_1">국내여행</a>
                            </li>
                            <li>
                                <a class="depth2_link menu1_3" href="#" data-target=".menu1_3_1">에어텔</a>
                            </li>
                            <li>
                                <a class="depth2_link menu1_4" href="#" data-target=".menu1_4_1">허니문</a>
                            </li>
                            <li>
                                <a class="depth2_link menu1_5" href="#" data-target=".menu1_5_1">골프</a>
                            </li>
                            <li>
                                <a class="depth2_link menu1_6" href="#" data-target=".menu1_6_1">프리미엄</a>
                            </li>
                        </ul>

                        <ul class="depth2_menu depth2_2menu">
                            <li>
                                <a class="depth2_link menu2_1" href="#">항공</a>
                            </li>
                            <li>
                                <a class="depth2_link menu2_2" href="#">호텔</a>
                            </li>
                            <li>
                                <a class="depth2_link menu2_3" href="#">투어&티켓</a>
                            </li>
                            <li>
                                <a class="depth2_link menu2_4" href="#">렌터카</a>
                            </li>
                            <li>
                                <a class="depth2_link menu2_5" href="#">여행플래너</a>
                            </li>
                            <li>
                                <a class="depth2_link menu2_6" href="#">항공+호텔</a>
                            </li>
                            <li>
                                <a class="depth2_link menu2_7" href="#">여행편의</a>
                            </li>
                            <li>
                                <a class="depth2_link menu2_8" href="#">쇼핑</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 검색하기 -->
                    <h2 class="screen_out">검색하기</h2>
                    <form class="depth2_search_right" name="" action="" method="">
                        <fieldset>
                            <legend class="hide">검색하기</legend>
                                <label for="search" class="hide">검색</label>
                                <input type="text" name="search" id="search" placeholder="SBS 연애는 직진 러브스토리 in 다낭" />
                                <button type="submit" class="search_button">검색</button>
                        </fieldset>
                    </form>
                </div>
            </div>

            <!-- 3depth -->
            <div class="container">
                <div class="depth3">
                    <div class="depth3_left">
                        <ul class="depth3_menu menu1_1_1 show">
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_1"><a href="#">유럽</a></span>
                                <div class="depth3_popup popup1_1_1">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > 유럽</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">서유럽</a></li>
                                                        <li><a href="#">동유럽</a></li>
                                                        <li><a href="#">발칸</a></li>
                                                        <li><a href="#">스페인/포르투갈/모로코</a></li>
                                                        <li>
                                                            <a href="#">튀르키예(터키)/그리스/두바이</a>
                                                        </li>
                                                        <li><a href="#">북유럽/러시아/발틱</a></li>
                                                        <li><a href="#">이집트/이스라엘/사우디</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">비즈니스 항공</a></li>
                                                        <li><a href="#">대한항공 튀르키예 전세기</a></li>
                                                        <li><a href="#">시즌투어</a></li>
                                                        <li><a href="#">예약과 동시에 출발확정</a></li>
                                                        <li><a href="#">2022 카타르 월드컵</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">유럽여행 최대 2% 추가할인</a></li>
                                                        <li><a href="#">유럽 싱글차지 할인이벤트</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_2"><a href="#">괌/사이판</a></span>
                                <div class="depth3_popup popup1_1_2">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > 괌/사이판</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">괌</a></li>
                                                        <li><a href="#">사이판</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">워터파크</a></li>
                                                        <li><a href="#">시내중심</a></li>
                                                        <li><a href="#">가족패키지</a></li>
                                                        <li><a href="#">친구&커플</a></li>
                                                        <li><a href="#">골프&스포츠</a></li>
                                                        <li><a href="#">허니문</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">ENJOY YOUR SAIPAN 패밀리</a></li>
                                                        <li><a href="#">ENJOY YOUR SAIPAN 프렌즈</a></li>
                                                        <li><a href="#">ENJOY YOUR SAIPAN 스포츠</a></li>
                                                        <li><a href="#">ENJOY YOUR SAIPAN 허니문</a></li>
                                                        <li>
                                                            <a href="#">DFS 괌&사이판, 고정환율 프로모션</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_3"><a href="#">하와이/미국/캐나다</a></span>
                                <div class="depth3_popup popup1_1_3">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > <br />하와이/미국/캐나다</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">미서부</a></li>
                                                        <li><a href="#">캐나다</a></li>
                                                        <li><a href="#">미주 연계</a></li>
                                                        <li><a href="#">칸쿤</a></li>
                                                        <li><a href="#">미동부</a></li>
                                                        <li><a href="#">중남미</a></li>
                                                        <li><a href="#">하와이</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li>
                                                            <a href="#">[노랑풍선 창립기념] 미주 특가상품</a>
                                                        </li>
                                                        <li><a href="#">가을엔 미동부/캐나다</a></li>
                                                        <li><a href="#">오션뷰 하와이</a></li>
                                                        <li><a href="#">이달의 BEST 여행</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_4"><a href="#">동남아</a></span>
                                <div class="depth3_popup popup1_1_4">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > 동남아</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">방콕/파타야</a></li>
                                                        <li><a href="#">치앙마이/치앙라이</a></li>
                                                        <li><a href="#">브루나이</a></li>
                                                        <li><a href="#">발리/족자카르타</a></li>
                                                        <li><a href="#">나트랑/달랏/푸꾸옥</a></li>
                                                        <li><a href="#">라오스</a></li>
                                                        <li><a href="#">세부</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">푸켓</a></li>
                                                        <li><a href="#">싱가포르</a></li>
                                                        <li><a href="#">코타키나블루</a></li>
                                                        <li><a href="#">하노이/하롱베이/호치민</a></li>
                                                        <li><a href="#">다낭/호이안/후에</a></li>
                                                        <li><a href="#">보라카이</a></li>
                                                        <li><a href="#">보홀/마닐라</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li>
                                                            <a href="#">창립 21주년 기념, 동남아 5만원 할인!</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">아시아나 A380타고 떠나는 방콕여행</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">코타키나발루 이달의 추천 Top3 !</a>
                                                        </li>
                                                        <li><a href="#">품격있게 즐기는 푸꾸옥</a></li>
                                                        <li>
                                                            <a href="#">제대로 즐기자! 세부 제이파크리조트</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_5"><a href="#">홍콩/마카오/대만</a></span>
                                <div class="depth3_popup popup1_1_5">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > <br />홍콩/마카오/대만</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">대만</a></li>
                                                        <li><a href="#">대만/홍콩</a></li>
                                                        <li><a href="#">홍콩</a></li>
                                                        <li><a href="#">홍콩/마카오</a></li>
                                                        <li><a href="#">홍콩/마카오/심천</a></li>
                                                        <li><a href="#">마카오</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">미식(美食)여행</a></li>
                                                        <li><a href="#">호캉스투어</a></li>
                                                        <li><a href="#">힐링온천</a></li>
                                                        <li><a href="#">레저파크</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_6"><a href="#">호주/뉴질랜드</a></span>
                                <div class="depth3_popup popup1_1_6">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > 호주/뉴질랜드</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">호주/뉴질랜드</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">2~4명 단독 출발 확정</a></li>
                                                        <li><a href="#">관광 + 자유</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_7"><a href="#">일본</a></span>
                                <div class="depth3_popup popup1_1_7">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > 일본</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">북해도</a></li>
                                                        <li><a href="#">동경</a></li>
                                                        <li><a href="#">도야마</a></li>
                                                        <li><a href="#">오사카</a></li>
                                                        <li><a href="#">요나고</a></li>
                                                        <li><a href="#">큐슈</a></li>
                                                        <li><a href="#">오키나와</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">출발확정 상품 모음</a></li>
                                                        <li><a href="#">단풍맞이 도야마/알펜루트</a></li>
                                                        <li><a href="#">황금연휴에 떠나는 오사카</a></li>
                                                        <li><a href="#">황금연휴에 떠나는 큐슈</a></li>
                                                        <li>
                                                            <a href="#">온전한 휴식! 일본 온천 '료칸'</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">황금연휴 출발확정 모음</a></li>
                                                        <li>
                                                            <a href="#">티웨이와 함께하는 일본 핫스팟</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">MZ 취향저격 '특급호텔 호캉스'</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">비긴어게인, 제주항공 타고 떠나자</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_8"><a href="#">중국</a></span>
                                <div class="depth3_popup popup1_1_8">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > 중국</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">북경</a></li>
                                                        <li><a href="#">청도/대련</a></li>
                                                        <li><a href="#">장가계</a></li>
                                                        <li><a href="#">서안/정주</a></li>
                                                        <li><a href="#">하문</a></li>
                                                        <li><a href="#">상해/남경</a></li>
                                                        <li><a href="#">태항산/황산</a></li>
                                                        <li><a href="#">계림</a></li>
                                                        <li><a href="#">백두산/장춘</a></li>
                                                        <li><a href="#">성도/중경</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li>
                                                            <a href="#">미리 예약하는 2023년 중국의 봄</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_9"><a href="#">중앙아시아/몽골</a></span>
                                <div class="depth3_popup popup1_1_9">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > <br />중앙아시아/몽골</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">몽골</a></li>
                                                        <li><a href="#">중앙아시아</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">연휴출발</a></li>
                                                        <li><a href="#">청춘여행</a></li>
                                                        <li><a href="#">트레킹&글램핑</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li>
                                                            <a href="#">유네스코 세계문화유산 in 중앙아시아</a>
                                                        </li>
                                                        <li><a href="#">격리없이 떠나는 몽골</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_1_10"><a href="#">부산출발</a></span>
                                <div class="depth3_popup popup1_1_10">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">해외패키지 > 부산출발</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">괌/사이판</a></li>
                                                        <li><a href="#">베트남</a></li>
                                                        <li><a href="#">싱가포르</a></li>
                                                        <li><a href="#">태국</a></li>
                                                        <li><a href="#">제주도</a></li>
                                                        <li><a href="#">필리핀</a></li>
                                                        <li><a href="#">몽골</a></li>
                                                        <li><a href="#">일본</a></li>
                                                        <li><a href="#">미주/대양주</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">항공권 + 여행자보험</a></li>
                                                        <li><a href="#">세미패키지</a></li>
                                                        <li><a href="#">NO팁/NO옵션</a></li>
                                                        <li><a href="#">골프 + 관광</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <ul>
                                                    <li></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="depth3_menu menu1_2_1">
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_2_1"><a href="#">제주도</a></span>
                                <div class="depth3_popup popup1_2_1">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">국내여행 > 제주도</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">제주시</a></li>
                                                        <li><a href="#">중문</a></li>
                                                        <li><a href="#">서귀포</a></li>
                                                        <li><a href="#">애월</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">버스패키지</a></li>
                                                        <li><a href="#">렌터카 자유여행</a></li>
                                                        <li><a href="#">에어텔</a></li>
                                                        <li><a href="#">카텔</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">제주에 내륙 더하기</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_2_2"><a href="#">내륙/섬</a></span>
                                <div class="depth3_popup popup1_2_2">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">국내여행 > 내륙/섬</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">내륙</a></li>
                                                        <li><a href="#">울릉도</a></li>
                                                        <li><a href="#">홍도/흑산도</a></li>
                                                        <li><a href="#">백령도/대청도</a></li>
                                                        <li><a href="#">부산</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">다구간</a></li>
                                                        <li><a href="#">결합상품선박</a></li>
                                                        <li><a href="#">결합상품내륙</a></li>
                                                        <li><a href="#">버스여행내륙</a></li>
                                                        <li><a href="#">기차여행시티투어버스</a></li>
                                                        <li><a href="#">투어</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">내륙에 제주 더하기</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="depth3_menu menu1_3_1">
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_3_1"><a href="#">유럽</a></span>
                                <div class="depth3_popup popup1_3_1">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">에어텔 > 유럽</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">프랑스</a></li>
                                                        <li><a href="#">스위스</a></li>
                                                        <li><a href="#">스페인/포르투갈</a></li>
                                                        <li><a href="#">이탈리아</a></li>
                                                        <li><a href="#">영국</a></li>
                                                        <li><a href="#">동유럽/발칸</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_3_2"><a href="#">동남아/몰디브</a></span>
                                <div class="depth3_popup popup1_3_2">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">에어텔 > 동남아/몰디브</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li seperate">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">다낭</a></li>
                                                        <li><a href="#">푸꾸옥</a></li>
                                                        <li><a href="#">세부</a></li>
                                                        <li><a href="#">마닐라/보홀</a></li>
                                                        <li><a href="#">푸켓/치앙마이</a></li>
                                                        <li><a href="#">코타키나발루</a></li>
                                                        <li><a href="#">몰디브</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#">나트랑</a></li>
                                                        <li><a href="#">하노이/호치민</a></li>
                                                        <li><a href="#">보라카이</a></li>
                                                        <li><a href="#">방콕</a></li>
                                                        <li><a href="#">파타야</a></li>
                                                        <li><a href="#">싱가포르</a></li>
                                                        <li><a href="#">발리</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">커플여행</a></li>
                                                        <li><a href="#">가족여행</a></li>
                                                        <li><a href="#">워터파크</a></li>
                                                        <li><a href="#">항공권/숙소</a></li>
                                                        <li><a href="#">특별한 리조트 혜택</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_3_3"><a href="#">일본</a></span>
                                <div class="depth3_popup popup1_3_3">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">에어텔 > 일본</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">동경</a></li>
                                                        <li><a href="#">큐슈</a></li>
                                                        <li><a href="#">오사카</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_3_4"><a href="#">몽골</a></span>
                                <div class="depth3_popup popup1_3_4">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">에어텔 > 몽골</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">몽골</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_3_5"><a href="#">호주</a></span>
                                <div class="depth3_popup popup1_3_5">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">에어텔 > 호주</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">호주</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_3_6"><a href="">미주</a></span>
                                <div class="depth3_popup popup1_3_6">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">에어텔 > 미주</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">미주</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="depth3_menu menu1_4_1">
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_4_1"><a href="#">유럽</a></span>
                                <div class="depth3_popup popup1_4_1">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">허니문 > 유럽</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">서유럽</a></li>
                                                        <li><a href="#">스페인/포르투갈</a></li>
                                                        <li><a href="#">동유럽/발칸</a></li>
                                                        <li><a href="#">그리스/산토리니</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_4_2"><a href="#">동남아</a></span>
                                <div class="depth3_popup popup1_4_2">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">허니문 > 동남아</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">발리</a></li>
                                                        <li><a href="#">코사무이</a></li>
                                                        <li><a href="#">푸켓</a></li>
                                                        <li><a href="#">카오락</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">All about 발리 풀빌라</a></li>
                                                        <li><a href="#">발리 우붓 풀빌라</a></li>
                                                        <li><a href="#">푸켓&카오락 힐링 허니문</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_4_3"><a href="#">몰디브</a></span>
                                <div class="depth3_popup popup1_4_3">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">허니문 > 몰디브</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">몰디브</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_4_4">
                                    <a href="#">하와이/캐나다/칸쿤</a></span>
                                <div class="depth3_popup popup1_4_4">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">허니문 > <br />하와이/캐나다/칸쿤</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">

                                                    <ul>
                                                        <li><a href="#">하와이</a></li>
                                                        <li><a href="#">캐나다</a></li>
                                                        <li><a href="#">칸쿤</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">

                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">

                                                    <ul>
                                                        <li>
                                                            <a href="#">칸쿤 허니문 투어&스냅 이벤트</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_4_5"><a href="#">괌/사이판</a></span>
                                <div class="depth3_popup popup1_4_5">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">허니문 > 괌/사이판</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">괌</a></li>
                                                        <li><a href="#">사이판</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_4_6"><a href="#">특수지역</a></span>
                                <div class="depth3_popup popup1_4_6">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">허니문 > 특수지역</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">모리셔스</a></li>
                                                        <li><a href="#">타히티/세이셸</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="depth3_menu menu1_5_1">
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_5_1"><a href="#">동남아</a></span>
                                <div class="depth3_popup popup1_5_1">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">골프 > 동남아</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">태국</a></li>
                                                        <li><a href="#">베트남/라오스</a></li>
                                                        <li><a href="#">필리핀</a></li>
                                                        <li><a href="#">말레이시아</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_5_2"><a href="#">일본/괌/사이판</a></span>
                                <div class="depth3_popup popup1_5_2">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">골프 > <br />일본/괌/사이판</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">일본</a></li>
                                                        <li><a href="#">괌/사이판</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="depth3_menu menu1_6_1">
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_6_1"><a href="#">미주/하와이/칸쿤</a></span>
                                <div class="depth3_popup popup1_6_1">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">프리미엄 > <br />미주/하와이/칸쿤</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">하와이</a></li>
                                                        <li><a href="#">칸쿤</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_6_2"><a href="#">유럽</a></span>
                                <div class="depth3_popup popup1_6_2">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">프리미엄 > 유럽</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">서유럽</a></li>
                                                        <li><a href="#">터키/그리스/두바이</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_6_3"><a href="#">동남아</a></span>
                                <div class="depth3_popup popup1_6_3">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">프리미엄 > 동남아</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">태국</a></li>
                                                        <li><a href="#">싱가포르</a></li>
                                                        <li><a href="#">인도네시아</a></li>
                                                        <li><a href="#">말레이시아</a></li>
                                                        <li><a href="#">베트남</a></li>
                                                        <li><a href="#">필리핀</a></li>
                                                        <li><a href="#">몰디브</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_6_4"><a href="#">국내</a></span>
                                <div class="depth3_popup popup1_6_4">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">프리미엄 > 국내</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">국내</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_6_5"><a href="#">홍콩/마카오/대만</a></span>
                                <div class="depth3_popup popup1_6_5">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">프리미엄 > <br />홍콩/마카오/대만</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="#">홍콩</a></li>
                                                        <li><a href="#">마카오</a></li>
                                                        <li><a href="#">대만</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="depth3_item">
                                <span class="depth3_link" data-target=".popup1_6_6"><a href="">중국</a></span>
                                <div class="depth3_popup popup1_6_6">
                                    <div class="depth3_popup_cont">
                                        <div class="dep3_direct_link">
                                            <span class="btn_title">프리미엄 > 중국</span><br />
                                            <button type="button">바로가기</button>
                                        </div>
                                        <ul>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">지역별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li><a href="">북경</a></li>
                                                        <li><a href="">상해/황산</a></li>
                                                        <li><a href="">청도</a></li>
                                                        <li><a href="">장가계</a></li>
                                                        <li><a href="">계림/서안</a></li>
                                                        <li><a href="">태항산/하문/백두산</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">테마별</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dep3_li">
                                                <span class="dep3_subtitle">프로모션</span>
                                                <div class="dep3_submenu">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- 부가메뉴 -->
                    <div class="depth3_right">
                        <h2 class="screen_out">부가 메뉴</h2>
                        <ul class="depth3_etc_menu">
                            <li><a href="#">전체메뉴</a></li>
                            <li><a href="#">기획전</a></li>
                            <li><a href="#">이벤트</a></li>
                            <li><a href="#">홈쇼핑</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <ul class="breadcrumb">
            <li><a class="home_icon" href="../index.php">메인홈</a></li>

            <li class="pagenav"><a href="">패키지여행</a></li>

            <li class="pagenav"><a href="">해외패키지</a></li>

            <li class="pagenav"><a href="">유럽</a></li>

            <li class="pagenav"><a href="#">서유럽</a></li>
        </ul>
        <div class="main_title">
            <h2>서유럽</h2>
        </div>
        <section>
            <div class="search_query">
                <h3 class="hide">검색조건</h3>
                <div class="left_cont">
                    <span class="total_number">'6'개</span>
                    <ul class="filter_selected">
                        <li>'3개국 일주'
                            <a href="#">X</a>
                        </li>

                        <li>'오전 출발'
                            <a href="#">X</a>
                        </li>
                    </ul>
                </div>

                <div class="right_cont">
                    <a href="#">전체삭제</a>
                </div>
            </div>
        </section>
        <div class="search_content">
            <section class="search_section">
                <div class="filter_menu">
                    <h3 class="hide">여행상품 검색하기</h3>
                    <div class="product_search_wrap">
                        <h4 class="hide">상품 상세 검색</h4>
                        <input class="product_search" type="text" placeholder="상품 상세 검색">
                        <div class="product_search_btn_wrap">
                            <button type="submit" class="product_search_button">
                                <div class="product_search_icon">검색버튼</div>
                            </button>
                        </div>
                    </div>
                    <div>
                        <h4 class="hide">여행 국가, 기간 선택</h4>
                        <button class="filter 1">한나라 일주</button>
                        <button class="filter 2">2개국 일주</button>
                        <button class="filter 3">3개국 일주</button>
                        <button class="filter 4">4개국 이상</button>
                        <button class="filter 5">단기 (8일 이하)</button>
                        <button class="filter 6">중기 (9~10일)</button>
                        <button class="filter 7">장기 (11일 이상)</button>
                        <button class="filter 8">유럽 속 작은나라</button>
                    </div>

                    <hr class="filter_menu_line">
                    <div class="departure_date_wrap">
                        <div class="departure_month">
                            <div class="toggle">
                                <h4 class="toggle_title">출발 일정</h4>
                                <span class="arrow_open">메뉴 열기</span>
                                <span class="arrow_close show">메뉴 닫기</span>
                            </div>
                            <div class="toggle_menu show">
                                <select>
                                    <option>출발예정월</option>
                                    <option value="2022년 09월">2022년 09월</option>
                                    <option value="2022년 10월">2022년 10월</option>
                                    <option value="2022년 11월">2022년 11월</option>
                                    <option value="2022년 12월">2022년 12월</option>
                                    <option value="2023년 01월">2023년 01월</option>
                                    <option value="2023년 02월">2023년 02월</option>
                                    <option value="2023년 03월">2023년 03월</option>
                                    <option value="2023년 04월">2023년 04월</option>
                                    <option value="2023년 05월">2023년 05월</option>
                                    <option value="2023년 06월">2023년 06월</option>
                                    <option value="2023년 07월">2023년 07월</option>
                                </select>
                                <div class="departure_date">
                                    <input type="button" name="destination" alt="달력">
                                    <button type="button" name="date" alt="날짜검색">
                                        <a href="#"><i>출발날짜 찾기</i></a>
                                    </button>
                                </div>
                                <div class="day_of_week">
                                    <ul>
                                        <li><a href="#">월</a></li>
                                        <li><a href="#">화</a></li>
                                        <li><a href="#">수</a></li>
                                        <li><a href="#">목</a></li>
                                        <li><a href="#">금</a></li>
                                        <li><a href="#">토</a></li>
                                        <li><a href="#">일</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="filter_menu_line">
                    <div class="departure_time_wrap">
                        <div class="toggle">
                            <h4 class="toggle_title">출발 시간</h4>
                            <span class="arrow_open show">메뉴 열기</span>
                            <span class="arrow_close">메뉴 닫기</span>
                        </div>
                        <div class="toggle_menu">
                            <div class="departure_time">
                                <ul>
                                    <li><a href="#">오전</a></li>
                                    <li><a href="#">오후</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr class="filter_menu_line">
                    <div class="departure_airport_wrap">
                        <div class="toggle">
                            <h4 class="toggle_title">출발지 (공항)</h4>
                            <span class="arrow_open show">메뉴 열기</span>
                            <span class="arrow_close">메뉴 닫기</span>
                        </div>
                        <div class="toggle_menu">
                            <div class="departure_airport">
                                <ul>
                                    <li><a href="#">인천</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr class="filter_menu_line">
                    <div class="departure_period_wrap">
                        <div class="toggle">
                            <h4 class="toggle_title">여행 기간</h4>
                            <span class="arrow_open show">메뉴 열기</span>
                            <span class="arrow_close">메뉴 닫기</span>
                        </div>
                        <div class="toggle_menu">
                            <div class="departure_period">
                                <ul>
                                    <li><a href="#">7일</a></li>
                                    <li><a href="#">8일</a></li>
                                    <li><a href="#">9일</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">10일</a></li>
                                    <li><a href="#">11일</a></li>
                                    <li><a href="#">12일</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr class="filter_menu_line">
                    <div class="cost_wrap">
                        <div class="toggle">
                            <h4 class="toggle_title">여행 예산 (1인 기준)</h4>
                            <span class="arrow_open show">메뉴 열기</span>
                            <span class="arrow_close">메뉴 닫기</span>
                        </div>
                        <div class="toggle_menu">
                            <div class="cost">
                                <input type="text" class="min_cost">
                                ~
                                <input type="text" class="max_cost">
                            </div>
                        </div>
                    </div>

                    <hr class="filter_menu_line">
                    <div class="vehicle_wrap">
                        <div class="toggle">
                            <h4 class="toggle_title">이용교통</h4>
                            <span class="arrow_open show">메뉴 열기</span>
                            <span class="arrow_close">메뉴 닫기</span>
                        </div>
                        <div class="toggle_menu">
                            <div class="vehicle_menu active">
                                <div class="vehicle_item"><a href="#"><i class="vehicle_icon daehan"></i>대한항공</a></div>
                                <div class="vehicle_item"><a href="#"><i class="vehicle_icon asiana"></i>아시아나항공</a></div>
                                <div class="vehicle_item"><a href="#"><i class="vehicle_icon airfrance"></i>에어프랑스</a></div>
                                <div class="vehicle_item"><a href="#"><i class="vehicle_icon qatar"></i>카타르항공</a></div>
                                <div class="vehicle_item"><a href="#"><i class="vehicle_icon turky"></i>터키항공</a></div>
                                <div class="vehicle_item"><a href="#"><i class="vehicle_icon pin"></i>핀에어</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="search_result">
                <div class="search_result_top">
                    <h3 class="hide">검색결과 목록</h3>
                    <div>
                        <button class="compare_btn" type="button">선택상품 비교</button>
                    </div>
                    <div>
                        <ul class="ranking_filter">
                            <li><a href="#">인기순</a></li>
                            <li><a href="#">낮은가격순</a></li>
                            <li><a href="#">높은가격순</a></li>
                            <li><a href="#">고객평점순</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="product_ul">
                    <?php while($array = mysqli_fetch_array($result)){ ?>
                    <li class="product_li">
                        <div class="product_card">
                            <div>
                                <a href="#">
                                    <img src="../data/<?php echo $array["f_name"]; ?>" class="product_image" alt="시에나">
                                </a>
                            </div>
                            <div class="product_cont_wrap">
                                <div class="product_cont">
                                    <div class="label_wrap">
                                        <div class="premium_label">프리미엄</div>
                                        <div class="foreign_pkg_label">해외패키지</div>
                                    </div>
                                    <p class="product_title"><?php echo $array["p_name"];?></p>
                                </div>
                                <div class="cont1">
                                    <p class="period">출발기간 : <?php echo substr($array["departure_date1"],0,10);?>~</p>
                                    <p class="price"><?php echo $array["adult_p"];?>원 ~</p>
                                </div>
                                <div class="cont2">
                                    <button type="button" onclick="location.href='product_info.php?n_idx=<?php echo $array['idx'];?>'">출발일 보기</button>
                                    <div class="etc">
                                        <span class="product_number">상품번호 <?php echo $array["idx"];?></span>
                                        <span class="hide">고객평점</span>
                                        <span class="score_i">★</span>
                                        <span class="score">4.7 / 5</span>
                                        <i class="snslink_i">sns공유하기</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .product_details.show로 활성화/비활성화 구분 -->
                        <!-- .product_details > * .blue,.red,.purple로 색상구분 -->
                        <!-- .product_cal_day.active 또는 .product_cal_day:hover로 활성화/비활성화 구분 -->
                        
                        <!-- <div class="product_details">
                            <div class="product_cal_header">
                                <a href="#" class="product_cal_header_arrow_left">&lt;</a>
                                <p>2022년 11월</p>
                                <a href="#" class="product_cal_header_arrow_left">&gt;</a>
                            </div>
                            <div class="product_cal_body">
                                <ul class="product_cal_list">
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">화</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day active">1</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">수</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">2</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">목</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">3</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">금</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">4</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title pink">토</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">5</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title red">일</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">6</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">월</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">7</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">화</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">8</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">수</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">9</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">목</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">10</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">금</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">11</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title pink">토</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">12</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title red">일</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">13</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">월</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">14</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">화</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">15</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">수</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">16</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">목</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">17</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">금</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">18</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title pink">토</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">19</span>
                                            <span class="product_cal_text">287만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title red">일</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">20</span>
                                            <span class="product_cal_text">287만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">월</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">21</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">화</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">22</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">수</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">23</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">목</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">24</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">금</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">25</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title pink">토</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">26</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title red">일</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day red">27</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">월</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">28</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">화</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">29</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">수</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">30</span>
                                            <span class="product_cal_text">285만</span>
                                        </a>
                                    </li>
                                    <li class="product_cal_item">
                                        <span class="product_cal_title">목</span>
                                        <a class="product_cal_link">
                                            <span class="product_cal_day">31</span>
                                            <span class="product_cal_text purple">최저가</span>
                                            <span class="product_cal_text red">282만</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product_cal_filter">
                                <div class="result_count">총2개</div>
                                <select class="result_sort">
                                    <option>출발확정순</option>
                                    <option>출발시간 빠른순</option>
                                    <option>출발시간 늦은순</option>
                                    <option>최저가순</option>
                                    <option>최고가순</option>
                                </select>
                            </div>
                            <div class="product_cal_result">
                                <div class="product_cal_result_item">
                                    <div class="product_cal_result_sub">예약대기<span>(잔여0석)</span></div>
                                    <div class="product_cal_result_content">
                                        <div class="product_cal_result_left">
                                            <div class="product_cal_result_title">[돌체이탈리아9일]슬로우라이프_오르비에토/토스카나+나/폼/소+10대맛체험[OZ/1급호텔]</div>
                                            <div class="product_cal_result_text">
                                                <i class="icon icon-calendar"></i>
                                                2022.11.05(토) 11:30 ~ 2022.11.13(일) 14:10 7박 9일
                                            </div>
                                            <div class="product_cal_result_text">
                                                <i class="icon icon-asiana"></i>
                                                아시아나항공</div>
                                        </div>
                                        <div class="product_cal_result_right">
                                            <div class="product_cal_result_price"><strong>2,829,000</strong><small>원</small></div>
                                            <a href="#" class="product_cal_result_btn">상세일정보기</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_cal_result_item">
                                    <div class="product_cal_result_sub">예약대기<span>(잔여0석)</span></div>
                                    <div class="product_cal_result_content">
                                        <div class="product_cal_result_left">
                                            <div class="product_cal_result_title">[돌체이탈리아9일]슬로우라이프_오르비에토/토스카나+나/폼/소+10대맛체험[OZ/1급호텔]</div>
                                            <div class="product_cal_result_text">
                                                <i class="icon icon-calendar"></i>
                                                2022.11.05(토) 11:30 ~ 2022.11.13(일) 14:10 7박 9일
                                            </div>
                                            <div class="product_cal_result_text">
                                                <i class="icon icon-asiana"></i>
                                                아시아나항공</div>
                                        </div>
                                        <div class="product_cal_result_right">
                                            <div class="product_cal_result_price"><strong>2,829,000</strong><small>원</small></div>
                                            <a href="#" class="product_cal_result_btn">상세일정보기</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product_details_footer">
                                <button class="product_details_close_btn">
                                    접기
                                    <i class="icon icon-arrow-up"></i>
                                </button>
                            </div>
                        </div> -->
                    </li>
                    <?php } ?>
                </ul>
            </section>
        </div>
    </main>
    <hr class="footer_hr">
    <footer>
        <section class="footer_top">
            <!-- 패키지여행 -->
            <div class="consult">
                <div class="pack_image"></div>
                <h3>패키지여행 상담</h3>
                <span>1544-2288</span>
            </div>

            <!-- 자유여행 -->
            <div class="consult">
                <div class="free_image"></div>
                <h3>자유여행 상담</h3>
                <span>1644-3399</span>
            </div>

            <!-- 상담번호 -->
            <div class="consult_info">
                <h3>지역별 직통 상담 번호 안내</h3>
                <p>상담시간</p>
                <p>평일 오전 9시~6시</p>
                <p>(토,일요일 및 공휴일 휴무)</p>
                <p>자유여행 취소/변경/환불 업무는 평일 오후 5시까지</p>
                <p>호텔 취소/변경/환불 업무는 평일 오후 4시까지</p>
            </div>

            <!-- 공지사항 -->
            <div class="notice">
                <h3>공지사항</h3>
                <ul>
                    <li><i></i>[항공권소식][아시아나] 국내선 단독 미성년자 셀프체크인 제한 적용안내</li>
                    <li><i></i>[항공권소식][국내항공][제주항공] 국내선 탑승 게이트 위탁 수하물 요금 시행 안내</li>
                    <li><i></i>[항공권소식][대한항공]인천출발 중국 본토행 기내식 서비스 중단 안내</li>
                </ul>
                <a href="../notice/notice_list.php">더보기</a>
            </div>
        </section>

        <!-- 유틸메뉴 -->
        <div class="util_menu">
            <h3 class="hide">유틸메뉴</h3>
            <table class="util_table">
                <tbody>
                    <tr>
                        <td><a href="">이용안내</a></td>
                        <td><a href="">견적문의</a></td>
                        <td><a href="">기업/단체문의</a></td>
                        <td><a href="">성지순례 문의</a></td>
                        <td><a href="">여행자 보험</a></td>
                        <td><a href="">대리점 안내</a></td>
                        <td><a href="">신문광고</a></td>
                        <td><a href="">오시는 길</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- 약관 및 정책 -->
        <div class="term_sns_wrap">
            <div class="terms">
                <h3 class="hide">약관 및 정책</h3>
                <ul>
                    <li><a href="">회사소개</a></li>
                    <li><a href="">개인정보처리방침</a></li>
                    <li><a href="">이용약관</a></li>
                    <li><a href="">여행약관</a></li>
                </ul>
            </div>

            <!-- SNS -->
            <div class="sns">
                <h3 class="hide">SNS</h3>
                <ul>
                    <li><a class="sns_icon fb" href="">페이스북</a></li>
                    <li><a class="sns_icon inst" href="">인스타그램</a></li>
                    <li><a class="sns_icon ytb" href="">유튜브</a></li>
                    <li><a class="sns_icon kakao" href="">카카오톡</a></li>
                    <li><a class="sns_icon blog" href="">네이버블로그</a></li>
                    <li><a class="sns_icon post" href="">네이버포스트</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <!-- 기업정보 -->
        <section class="company_info">
            <h3 class="hide">기업정보</h3>
            <div class="info title">
                <span class="company_name">(주)노랑풍선
                    <img src="../images/logo_kosdaq.jpg" alt="코스닥상장법인">
                </span>
            </div>
            <div class="info origin">
                <span class="info_txt">대표이사 김진국</span>
                <address>서울특별시 중구 수표로 31, 노랑풍선빌딩</address>

                <div class="info_txt_wrap">
                    <span class="info_txt">사업자등록번호 104-81-64440</span>
                    <span class="info_txt">관광사업자등록증번호 제2006-000003호</span>
                    <span>통신판매업신고번호 제2008-서울중구-0278</span>
                    <a class="info_link" href="#">사업자 정보확인</a>
                </div>

            </div>
            <!-- 부산지사 -->
            <div class="info busan">
                <p>[부산지사] 부산광역시 부산진구 중앙대로668, 9층 912호 (부전동, 에이원프라자)</p>
                <p>사업자등록번호 870-85-01900</p>
            </div>
            <!-- 보험가입 -->
            <div class="info insurance">
                <p>영업배상책임보험가입 총 20억원 · 한국관광협회중앙회 여행공제회 공제영업보증가입 10억원 · 공제기획여행보증가입 5억원</p>
            </div>
            <!-- 메일 -->
            <div class="contact_mail">
                <p>대표메일 master@ybtour.com</p>
                <p>마케팅제휴 marketing@ybtour.com</p>
                <p>판매제휴 salespartner@ybtour.com</p>
            </div>
        </section>
        <!-- 기업수상내역 -->
        <div class="awards">
            <h3 class="hide">기업수상내역</h3>
            <ul>
                <li class="award award1">소비자중심경영 공정거래위원회 한국소비자원</li>
                <li class="award award2">제45회 국가품질경영대회 서비스품질우수상</li>
                <li class="award award3">SCSI 대한민국 소셜미디어대상 1위</li>
                <li class="award award4">국외여행상품 정보제공 표준안 참여여행사 마크</li>
                <li class="award award5">소비자의 날 국무총리 표창</li>
            </ul>
        </div>

        <!-- 하단 -->
        <div class="copy_right">
            <p>노랑풍선은 개별 항공권, 단품 및 일부 여행상품에 대하여 판매중개자로서 통신판매의 당사자가 아닙니다. 따라서 해당 상품의 상품·거래정보 및 거래 등에 대하여 책임을 지지 않습니다.
            </p>
            <p>항공권 또는 항공권이 포함된 상품의 경우, 표시되는 상품요금은 세금 및 예상 유류할증료가 포함된 가격이며, 유류할증료는 유가 및 환율 등에 따라 변동될 수 있습니다.</p>
            <p class="copy_right txt">©Yellow Balloon tour. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- 스크립트 -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var depth1LinkEls = $('.depth1_link');
            var depth2MenuEls = $('.depth2_menu');
            var depth2LinkEls = $('.depth2_link');
            var depth3MenuEls = $('.depth3_menu');

            // depth1 클릭 시 depth2 메뉴 활성화
            depth1LinkEls.click(function () {
                depth1LinkEls.removeClass('active');
                depth2MenuEls.removeClass('show');

                var depth1LinkEl = $(this);
                depth1LinkEl.addClass('active');

                var depth2MenuEl = $(depth1LinkEl.attr('data-target'));
                depth2MenuEl.addClass('show');

                // 항상 맨 왼쪽 depth2 link가 자동클릭되게함
                var depth2FirstLinkEl = depth2MenuEl.find('.depth2_link:first');
                depth2FirstLinkEl.trigger('click');
            });

            // depth2 클릭 시 depth3 메뉴 활성화
            depth2LinkEls.click(function () {
                depth2LinkEls.removeClass('active');
                depth3MenuEls.removeClass('show');

                var depth2LinkEl = $(this);
                depth2LinkEl.addClass('active');

                var depth3MenuEl = $(depth2LinkEl.attr('data-target'));
                depth3MenuEl.addClass('show');
            });

            //depth3 menu slide 효과
            var depth3LinkEls = $('.depth3_link');
            var depth3PopupEls = $('.depth3_popup');

            $(depth3LinkEls).mouseenter(function () {
                var depth3LinkEl = $(this);
                var depth3PopupEl = $(depth3LinkEl.attr('data-target'));
                depth3PopupEl.stop().slideDown("fast");
            });
            $(depth3LinkEls).mouseleave(function () {
                var depth3LinkEl = $(this);
                var depth3PopupEl = $(depth3LinkEl.attr('data-target'));
                depth3PopupEl.stop().slideUp("fast");
            });

            $(depth3PopupEls).mouseenter(function () {
                var depth3PopupEl = $(this);
                depth3PopupEl.stop().slideDown("fast");
            });
            $(depth3PopupEls).mouseleave(function () {
                var depth3PopupEl = $(this);
                depth3PopupEl.stop().slideUp("fast");
            });

            //sidemenu 열고 닫기
            var toggleTitleEls = $('.toggle');
            var toggleMenuEls = $('.toggle_menu');
            var closeEls = $(".arrow_close");
            var openEls = $(".arrow_open");
            
            toggleTitleEls.click(function(){
                var toggleTitleEl = $(this);
                var isOpen = toggleTitleEl.next().hasClass('show');

                toggleMenuEls.removeClass('show');
                openEls.addClass("show");
                closeEls.removeClass("show");
                
                if(!isOpen){ 
                    var openEl = toggleTitleEl.find('.arrow_open');
                    openEl.removeClass("show");

                    var closeEl = toggleTitleEl.find('.arrow_close');
                    closeEl.addClass("show");

                    var currentMenuEl = toggleTitleEl.next();
                    currentMenuEl.addClass('show');
                } 
            });

            //sidemenu 항목 선택 시 배경색 바뀜
            var filterEls = $('.filter');

            filterEls.click(function(){
                filterEls.removeClass('active');
                var currentEl = $(this);
                currentEl.addClass('active');
            });

            var weekEls = $('.day_of_week li');

            weekEls.click(function(){
                weekEls.removeClass('active');
                var currentEl = $(this);
                currentEl.addClass('active');
            });

            var timeEls = $('.departure_time li');

            timeEls.click(function(){
                timeEls.removeClass('active');
                var currentEl = $(this);
                currentEl.addClass('active');
            });

            var airportEls = $('.departure_airport li');

            airportEls.click(function(){
                airportEls.removeClass('active');
                var currentEl = $(this);
                currentEl.addClass('active');
            });

             var periodEls = $('.departure_period li');

            periodEls.click(function(){
                periodEls.removeClass('active');
                var currentEl = $(this);
                currentEl.addClass('active');
            });



        });
    </script>
</body>

</html>