<?php
include "inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>노랑풍선 [여행을 가볍게]</title>
    <link rel="stylesheet" type="text/css" href="./libs/bxsilder/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="./libs/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./css/base.css" />
    <link rel="stylesheet" type="text/css" href="./css/common.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/header.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/main_image.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/recommend.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/banner.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/popular.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/event.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/benefit.css" />
    <link rel="stylesheet" type="text/css" href="./css/index/footer.css" />
</head>
<body>
    <header>
        <nav class="gnb">
            <!-- depth1 -->
            <div class="container">
                <div class="depth1">
                    <div class="depth1_left">
                        <h1 class="logo"><a href="index.php">노랑풍선</a></h1>
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
                            <li><a href="./login/login.php">로그인</a></li>
                            <li><a href="./members/join_pre.php">회원가입</a></li>
                            <li><a href="./nonmember/nonmember_reserve_pkg.php">예약확인</a></li>
                        <?php } else if($s_id == "admin@abc.com"){ ?>
                            <!-- 관리자 로그인 -->
                            <li><a href="./login/logout.php">로그아웃</a></li>
                            <li><a href="./admin/index.php">관리자 페이지</a></li>
                        <?php } else{ ?>
                        <!-- 로그인 후 -->   
                            <li><a href="./login/logout.php">로그아웃</a></li>
                            <li><a href="./members/my_page.php">마이페이지</a></li>
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
                    <div class="depth2_search_right">
                        <input type="text" name="search" id="search" placeholder="SBS 연애는 직진 러브스토리 in 다낭" />
                        <button type="submit" class="search_button">
                            <div class="search_icon">검색버튼</div>
                        </button>
                    </div>
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
                                                        <li><a href="./product/west_europe.php">서유럽</a></li>
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
        <section class="main_section">
            <!-- 메인이벤트 -->
            <h2 class="hide">메인이벤트</h2>
            <div class="slider">
                <div>
                    <div class="main_img main_image1">
                        <a class="main_link" href="#"></a>
                        <p class="hide">심장이 두근두근</p>
                        <p class="hide">너랑 나랑 노랑해</p>
                        <p class="hide">썸남 썸녀들의 직진여행 리얼리티 SBS 연애는 직진</p>
                        <p class="hide">노랑풍선이 함께하는 여행 이벤트!</p>
                    </div>
                </div>
                <div>
                    <div class="main_img main_image2">
                        <a class="main_link" href="#"></a>
                        <p class="hide">다시 떠나는</p>
                        <p class="hide">그리운 너의 이름</p>
                        <p class="hide">다시 다가오는 아련한 너의 모습</p>
                        <p class="hide">오사카 그리고 후쿠오카</p>
                    </div>
                </div>
                <div>
                    <div class="main_img main_image3">
                        <a class="main_link" href="#"></a>
                        <p class="hide">사우디 아라비아</p>
                        <p class="hide">여행의 첫 시작!</p>
                        <p class="hide">중동에서 가장 큰 나라, 고대문명 역사와 마주하다</p>
                    </div>
                </div>
                <div>
                    <div class="main_img main_image4">
                        <a class="main_link" href="#"></a>
                        <p class="hide">PARADISE CITY</p>
                        <p class="hide">두바이/아부다비/샤르자</p>
                        <p class="hide">대한항공 직항으로 편안한 이동</p>
                        <p class="hide">샤르자까지 한번에 관광!</p>
                    </div>
                </div>
                <div>
                    <div class="main_img main_image5">
                        <a class="main_link" href="#"></a>
                        <p class="hide">빠르면 빠를수록 할인이 더해진다!</p>
                        <p class="hide">유럽여행 할인 이벤트</p>
                        <p class="hide">1인당 상품가 기준, 최대 2% 할인!</p>
                    </div>
                </div>
                <div>
                    <div class="main_img main_image6">
                        <a class="main_link" href="#"></a>
                        <p class="hide">RENEW YOURSELF IN SYDNEY</p>
                        <p class="hide">시드니와 뉴사우스웨일즈주에서</p>
                        <p class="hide">새로워진 나를 느껴보세요.</p>
                    </div>
                </div>
                <div>
                    <div class="main_img main_image7">
                        <a class="main_link" href="#"></a>
                        <p class="hide">9월 3일 입국 전 코로나 검사 폐지!</p>
                        <p class="hide">여행에만 집중</p>
                    </div>
                </div>
                <div>
                    <div class="main_img main_image8">
                        <a class="main_link" href="#"></a>
                        <p class="hide">노랑풍선 창립 21주년! 고객감사 이벤트</p>
                        <p class="hide">하나카드 최대 21만원 즉시 할인</p>
                        <p class="hide">선착순 할인챌린지 특전 챌린지</p>
                    </div>
                </div>
            </div>
            <div id="auto_controls">
                <div class="control_box">
                    <div class="control_lt"></div>
                    <div class="control_btn"></div>
                    <div class="control_rt"></div>
                    <div class="control_pager">1/8</div>
                </div>
            </div>
            <!-- 검색하기 -->
            <div class="main_search_wrap">
                <div class="main_search">
                    <h2 class="hide">여행지 & 항공권 검색하기</h2>
                    <div class="main_search_top">
                        <div class="main_search_title">
                            <p>어디로 떠나고 싶으세요?</p>
                        </div>
                        <ul>
                            <a href="#">
                                <li class="pkg active">패키지</li>
                            </a>
                            <a href="#">
                                <li class="airport">항공</li>
                            </a>
                            <a href="#">
                                <li class="hotel">호텔</li>
                            </a>
                        </ul>
                    </div>
                    <form class="main_search_form">
                        <div class="destination">
                            <input type="text" alt="여행지입력" placeholder="여행지입력" />
                            <button type="button" alt="지역검색">
                                지역검색
                                <i></i>
                            </button>
                        </div>

                        <div class="departure_date_wrap">
                            <div class="departure_month">
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
                            </div>
                            <div class="departure_date">
                                <input type="text" name="destination" alt="달력" />
                                <div class="departure_date_button">
                                    <button type="button" name="date" alt="날짜검색">
                                        <a href="#"><i>출발날짜 찾기</i></a>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button class="main_search_button" type="submit" name="submit" alt="검색하기">
                            검색하기
                        </button>
                    </form>

                    <div class="recent_word">
                        <span class="recent_title">최근검색</span>
                        <span class="recent_history">최근검색이 없습니다.</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- 추천여행 -->
        <section class="recomm_contatiner">
            <h2 class="hide">추천여행상품소개</h2>
            <div class="recomm_1">
                <div class="recomm_tab1_wrap">
                    <div class="recomm_tab1_line"></div>
                    <div class="container_inner">
                        <h3 class="recomm_tab1">가성비 갑, 착한여행</h3>
                        <ul class="recomm_subtab1">
                            <li class="subtab_wrap"><a class="subtab subtab1 active" data-target=".recomm1_1">유럽</a>
                            </li>
                            <li><a class="subtab subtab1" data-target=".recomm1_2">동남아</a></li>
                            <li><a class="subtab subtab1" data-target=".recomm1_3">일본</a></li>
                            <li><a class="subtab subtab1" data-target=".recomm1_4">대양주</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recomm_li_container">
                    <ul class="container">
                        <li class="recomm1_1 recomm1 show">
                            <ul class="recomm_list 1_1">
                                <li>
                                    <a href="#">
                                        <div class="recomm1_1_1">
                                            유럽여행에서 더욱 더 빛이 나는 SOLO 싱글차지 10만원 할인!
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_1_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#특급호텔투숙 #4대옵션포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>튀르키예(터키)9일</span><br />
                                            <span>#신나는 튀르키예의 매력속으로</span><br />
                                            <span class="ex_price">1,299,000 원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_1_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#연차 5일로 유럽여행 가능</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>동유럽 3국8일</span><br />
                                            <span>#체코 #오스트리아 #헝가리</span><br />
                                            <span class="ex_price">1,699,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_1_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#로마아울렛방문 #BEST상품</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>서유럽3국8일</span><br />
                                            <span>#프랑스 #이탈리아 #스위스</span><br />
                                            <span class="ex_price">1,899,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_1_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#프라하의 야경!#부타페스트의 전경!</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>동유럽9일</span><br />
                                            <span>#오스트리아 #부다페스트직항</span><br />
                                            <span class="ex_price">1,699,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_1_6">
                                            <div class="recomm_subtitle"></div>
                                            <p>#이집트 일주 10일</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>★월드체인</span><br />
                                            <span>#5성크루즈 #알렉산드리아</span><br />
                                            <span class="ex_price">3,490,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_1_7">
                                            <div class="recomm_subtitle"></div>
                                            <p>#지중해의 3色 매력</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>전 일정 4성UP</span><br />
                                            <span>#스페인/포르투칼/모로코12일</span><br />
                                            <span class="ex_price">3,299,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_1_8">
                                            <div class="recomm_subtitle"></div>
                                            <p>#이태리일주 6일</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>#동유럽+발칸 8일</span><br />
                                            <span>#스페인일주 8일</span><br />
                                            <span class="ex_price">940,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="recomm1_2 recomm1">
                            <ul class="recomm_list 1_2">
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_2_1">
                                            <div class="recomm_subtitle"></div>
                                            <p>#머드온천체험 야시장투어</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>나트랑&달랏4/5/6일</span><br>
                                            <span>놓칠 수 없는 두 지역의 매력!</span><br>
                                            <span class="ex_price">379,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_2_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#호핑투어포함 #자유일정</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>코타키나발루5/6일</span><br>
                                            <span>#샹그릴라 #탄중아루VS라사리아</span><br>
                                            <span class="ex_price">599,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_2_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#연애는 직진 핫플레이스 따라잡기</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>다낭&호이안4/5/6일</span><br>
                                            <span>#안방비치카페 #아시아파크관람차</span><br>
                                            <span class="ex_price">299,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_2_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#NO팁,NO옵션,NO쇼핑</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>파타야 3박5일</span><br>
                                            <span>초특급 로얄클리프 5일</span><br>
                                            <span class="ex_price">690,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_2_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#브루나이/에어텔</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>#황금의 나라 브루나이</span><br>
                                            <span>#에어텔 4/5일</span><br>
                                            <span class="ex_price">899,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="recomm1_3 recomm1">
                            <ul class="recomm_list 1_3">
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_3_1">
                                            <div class="recomm_subtitle"></div>
                                            <p>#알록달록 #단풍놀이</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>알록달록 큐슈가을</span><br>
                                            <span>일년에 단한번</span>
                                            <span class="ex_price">899,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_3_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#시내중심호텔 큐슈여행</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>큐슈3일</span><br>
                                            <span>#후쿠오카 #나카스 #벳부 #유후인</span><br>
                                            <span class="ex_price">799,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_3_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#알프스 감성과 #일본 감성의 콜라보</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>나고야 4일</span><br>
                                            <span>#도야마 #알펜루트</span><br>
                                            <span class="ex_price">1,499,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_3_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#햇살좋은 유후인의 오후</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>특급힐튼 + 정통료칸</span><br>
                                            <span class="ex_price">499,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_3_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#미각찾아 산인기행</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>고급료칸2박+히메지성</span><br>
                                            <span>#요나고 #카이케온천4일</span>
                                            <span class="ex_price">799,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_3_6">
                                            <div class="recomm_subtitle"></div>
                                            <p>#BLUESEA BLUESKY</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>비치리조트2박+특급호텔1박</span><br>
                                            <span>#오키나와4일</span>
                                            <span class="ex_price">1,199,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="recomm1_4 recomm1">
                            <ul class="recomm_list 1_4">
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_4_1">
                                            <div class="recomm_subtitle"></div>
                                            <p>#Wentworth Falls 트래킹!</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>시드니 8일</span><br>
                                            <span>#멜버른#블루마운틴</span>
                                            <span class="ex_price">2,499,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_4_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#후커밸리 #마운트쿡 #푸카키호수</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>뉴질랜드9일</span><br>
                                            <span>#북섬#남섬#오클랜드</span>
                                            <span class="ex_price">3,699,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_4_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#블루마운틴 허니문 브릿지 트래킹!</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>시드니&맬버른 10일</span><br>
                                            <span>#두도시 #동화속으로</span>
                                            <span class="ex_price">3,099,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_4_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#대자연의 호주로 트래킹 Go</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>시드니 6일</span><br>
                                            <span>#저비스베이 #키아마</span>
                                            <span class="ex_price">1,999,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm1_4_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#[부산-연합]</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>미동부 + 캐나다</span><br>
                                            <span>#나이아가라 완전일주 10일</span>
                                            <span class="ex_price">4,410,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 쇼핑에 여행은 덤 -->
            <div class="recomm_2">
                <div class="recomm_tab2_wrap">
                    <div class="recomm_tab2_line"></div>
                    <div class="container_inner reverse">
                        <h3 class="recomm_tab2">쇼핑에 여행은 덤</h3>
                        <ul class="recomm_subtab2">
                            <li><a class="subtab subtab2 active" data-target=".recomm2_1">섬 전체가 면세</a></li>
                            <li><a class="subtab subtab2" data-target=".recomm2_2">보물찾기 아울렛</a></li>
                            <li><a class="subtab subtab2" data-target=".recomm2_3">쇼핑의 메카</a></li>
                            <li class="subtab_wrap2"><a class="subtab subtab2" data-target=".recomm2_4">모였다 쇼핑스팟</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="recomm_li_container">
                    <ul class="container">
                        <li class="recomm2_1 recomm2 show">
                            <ul class="recomm_list 2_1">
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_1_1">
                                            <div class="recomm_subtitle"></div>
                                            <p>#전일정 오션뷰 객실 투숙</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>괌 4/5일</span><br />
                                            <span>#더츠바키타워 #키즈프로그램</span><br />
                                            <span class="ex_price">1,299,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_1_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#전일정 호텔식 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>사이판 5일</span><br />
                                            <span>#PIC #켄싱턴호텔 #골드카드</span><br />
                                            <span class="ex_price">1,299,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_1_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#슬림카드 포함제공</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>사이판 4/5일</span><br />
                                            <span>#켄싱턴호텔 #프라이빗비치</span><br />
                                            <span class="ex_price">1,284,600원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_1_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#전일정 오션뷰 객실 투숙</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>괌 4/5일</span><br />
                                            <span>#두짓비치 리조트 #투몬비치</span><br />
                                            <span class="ex_price">779,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_1_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#전일정 호텔 조식 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>괌 4/5일</span><br />
                                            <span>#롯데호텔 #인피니티풀 #투몬</span><br />
                                            <span class="ex_price">819,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_1_6">
                                            <div class="recomm_subtitle"></div>
                                            <p>#씨뷰룸업그레이드 #호핑투어</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br />
                                            <span>코타키나발루 5/6일</span><br />
                                            <span>샹그릴라 #탄중아루 #라사리아</span><br />
                                            <span class="ex_price">629,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="recomm2_2 recomm2">
                            <ul class="recomm_list 2_2">
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_2_1">
                                            <div class="recomm_subtitle"></div>
                                            <p>#라발레 빌리지 아울렛 자율쇼핑 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>프랑스 7일</span><br>
                                            <span>#아시아나직항 #몽생미셸</span><br>
                                            <span class="ex_price">2,787,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_2_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#우드버리 아울렛 자율쇼핑 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>미동부 & 캐나다 15일</span><br>
                                            <span>#시애틀 #벤쿠버 #로키 #토론토</span><br>
                                            <span class="ex_price">5,499,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_2_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#더 몰 아울렛 자율쇼핑 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>이탈리아 10일</span><br>
                                            <span>#로마 #밀라노 #베니스 #소도시</span><br>
                                            <span class="ex_price">2,099,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_2_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#씨타델 아울렛 자율쇼핑 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>로스엔젤레스 8일</span><br>
                                            <span>#옥스포드호텔 #귀국일 연장가능</span><br>
                                            <span class="ex_price">3,339,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_2_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#판도로프 아울렛 자율쇼핑 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>오스트리아 9일</span><br>
                                            <span>#비엔나직항 #항공마일리지적립</span><br>
                                            <span class="ex_price">2,790,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_2_6">
                                            <div class="recomm_subtitle"></div>
                                            <p>#몽골/트레킹/4인출발</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>체체궁산/흡수골</span><br>
                                            <span>#하샤산/테렐지 국립공원 8일</span><br>
                                            <span class="ex_price">1,990,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_2_7">
                                            <div class="recomm_subtitle"></div>
                                            <p>#SAIPAN FLEX</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>성인2+소아2 패밀리팩</span><br>
                                            <span>#사이판 PIC 골드카드 4일/5일</span><br>
                                            <span class="ex_price">649,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="recomm2_3 recomm2">
                            <ul class="recomm_list 2_3">
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_3_1">
                                            <div class="recomm_subtitle"></div>
                                            <p>#1DAY 자유일정 제공</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>후쿠오카 힐튼호텔 3/4일</span><br>
                                            <span>#벳부 #유후인</span><br>
                                            <span class="ex_price">429,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_3_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#쇼핑의 메카 도쿄 중심가 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>도쿄 3/4일</span><br>
                                            <span>#시부야 #오모테산도 #하라주쿠</span><br>
                                            <span class="ex_price">499,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_3_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#신상 쇼핑몰 라라포트 자유시간 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>후쿠오카 3/4일</span><br>
                                            <span>#벳부 #유후인</span><br>
                                            <span class="ex_price">379,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_3_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#일정 내 호텔에서 온천욕도 함께~</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>도쿄 4일/5일</span><br>
                                            <span>#디즈니랜드 #요코하마 #에비스</span><br>
                                            <span class="ex_price">599,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_3_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#KT알파쇼핑</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>다낭/호이안 4일/5일/6일</span><br>
                                            <span>#바나힐테마파크+스톤마사지90분</span><br>
                                            <span class="ex_price">349,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_3_6">
                                            <div class="recomm_subtitle"></div>
                                            <p>#전일정1급호텔UP!</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>북유럽4국 9일TK</span><br>
                                            <span>#노르웨이/스웨덴/덴마크/핀란드</span><br>
                                            <span class="ex_price">2,699,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="recomm2_4 recomm2">
                            <ul class="recomm_list 2_4">
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_4_1">
                                            <div class="recomm_subtitle"></div>
                                            <p>#동부해안관광 일정포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>하와이 8일</span><br>
                                            <span>#알라모아나 #와이켈레아울렛</span>
                                            <span class="ex_price">2,799,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_4_2">
                                            <div class="recomm_subtitle"></div>
                                            <p>#마하나콘 전망대 일정포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>방콕 5일</span><br>
                                            <span>#왓포사원 #전통안마2시간 #시암</span><br>
                                            <span class="ex_price">819,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_4_3">
                                            <div class="recomm_subtitle"></div>
                                            <p>#희망 숙소 선택 가능</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>싱가포르 5/6일</span><br>
                                            <span>#마리나베이샌즈 #오차드 로드</span>
                                            <span class="ex_price">799,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_4_4">
                                            <div class="recomm_subtitle"></div>
                                            <p>#쿠알로아랜치 무비투어 포함</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>하와이 8일</span><br>
                                            <span>#칼라카우아거리 #카할라</span><br>
                                            <span class="ex_price">3,899,000원~</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="recomm_cont recomm2_4_5">
                                            <div class="recomm_subtitle"></div>
                                            <p>#괌 온워드리조트</p>
                                        </div>
                                        <div class="explain">
                                            <span class="ex_pkg">패키지</span><br>
                                            <span>오전출발4일/5일</span><br>
                                            <span>#워터파크 #조식포함</span><br>
                                            <span class="ex_price">729,000원~</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 배너 -->
        <section class="banner_slider">
            <div class="banner_wrap">
                <ul>
                    <li>
                        <p class="hide">국가별 입국정보 확인하기</p>
                        <a href="#">
                            <img src="./images/banner/banner01.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <p class="hide">배틀트립2 X 노랑풍선 승부 예측 댓글 이벤트</p>
                        <p class="hide">승부 예측에 성공한 100명에게 달콤한 디저트 쏜다!</p>
                        <a href="#">
                            <img src="./images/banner/banner02.jpg" alt="">
                        </a>
                    </li>
                </ul>
                <div class="banner_control_box">
                    <a class="banner_control_prev"></a>
                    <a class="banner_control_next"></a>
                    <div class="banner_control_pager">1/2</div>
                </div>
            </div>
        </section>

        <!-- 인기여행지 -->
        <section class="popular_section">
            <h2>인기여행지</h2>
            <div class="popu_li_container">
                <ul class="popu_center">
                    <li>
                        <a class="popular_item popu_dn" href=""><span>다낭</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_tk" href=""><span>튀르키예(터키)</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_gm" href=""><span>괌</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_ss" href=""><span>스위스</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_sp" href=""><span>스페인</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_kt" href=""><span>코타키나발루</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_sg" href=""><span>싱가포르</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_nt" href=""><span>나트랑</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_sai" href=""><span>사이판</span></a>
                    </li>
                    <li>
                        <a class="popular_item popu_mg" href=""><span>몽골</span></a>
                    </li>
                </ul>
            </div>
        </section>

        <!-- 이벤트 -->
        <section class="event_section">
            <h2 class="hide">이벤트</h2>
            <div class="event_container">
                <div class="event_image">
                    <p>SBS 연애는 직진과 노랑풍선이 만났다!</p>
                    <p>다낭 전일정 고급리조트 투숙은 기본,</p>
                    <p>
                        로맨틱한 로컬 핫플에서 특별한 모먼트까지 담은 여행을 만나보세요!
                    </p>
                </div>
                <ul class="event_list">
                    <li>
                        <a href="#">
                            <div class="event_1"></div>
                            <div class="event_explain">
                                <span class="ex_pkg">패키지</span><br />
                                <span>남호이안 빈펄리조트 4일/5일/6일</span><br />
                                <span class="event_price">1,769,000원~</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="event_2"></div>
                            <div class="event_explain">
                                <span class="ex_pkg">패키지</span><br />
                                <span>나만리트리트 풀빌라 4일/5일/6일</span><br />
                                <span class="event_price">1,829,000원~</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="event_3"></div>
                            <div class="event_explain">
                                <span class="ex_pkg">패키지</span><br />
                                <span>골든베이호텔 4일/5일/6일</span><br />
                                <span class="event_price">1,829,000원~</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="event_4"></div>
                            <div class="event_explain">
                                <span class="ex_pkg">패키지</span><br />
                                <span>포포인츠쉐라톤 4일/5일/6일</span><br />
                                <span class="event_price">629,000원~</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <a class="event_more_icon" href="">더보기</a>
            </div>
        </section>

        <!-- 회원혜택 -->
        <section class="benefit_section">
            <h2 class="benefit_title">회원혜택</h2>
            <div>
                <a href="#" class="benefit_1">바로받는 명품쇼핑 신라면세점 할인혜택</a>
                <a href="#" class="benefit_2">
                    하나카드 10만원 캐시백 하나카드 신규발급 혜택
                </a>
                <a href="#" class="benefit_3">와이파이 5% 추가할인 와이파이 도시락 혜택</a>
                <a href="#" class="benefit_4">고정환율 적용 DFS 괌 & 사이판 구매혜택</a>
                <a href="#" class="benefit_5">
                    할인쿠폰 & 사은품 증정 제주 중문 면세점 헤택
                </a>
            </div>
        </section>
    </main>
    <hr />
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
                    <li>
                        <i></i>[항공권소식][아시아나] 국내선 단독 미성년자 셀프체크인 제한
                        적용안내
                    </li>
                    <li>
                        <i></i>[항공권소식][국내항공][제주항공] 국내선 탑승 게이트 위탁
                        수하물 요금 시행 안내
                    </li>
                    <li>
                        <i></i>[항공권소식][대한항공]인천출발 중국 본토행 기내식 서비스
                        중단 안내
                    </li>
                </ul>
                <a href="./notice/notice_list.php">더보기</a>
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
        <hr />
        <!-- 기업정보 -->
        <section class="company_info">
            <h3 class="hide">기업정보</h3>
            <div class="info title">
                <span class="company_name">(주)노랑풍선
                    <img src="./images/logo_kosdaq.jpg" alt="코스닥상장법인" />
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
                <p>
                    [부산지사] 부산광역시 부산진구 중앙대로668, 9층 912호 (부전동,
                    에이원프라자)
                </p>
                <p>사업자등록번호 870-85-01900</p>
            </div>
            <!-- 보험가입 -->
            <div class="info insurance">
                <p>
                    영업배상책임보험가입 총 20억원 · 한국관광협회중앙회 여행공제회
                    공제영업보증가입 10억원 · 공제기획여행보증가입 5억원
                </p>
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
                <li class="award award1">
                    소비자중심경영 공정거래위원회 한국소비자원
                </li>
                <li class="award award2">제45회 국가품질경영대회 서비스품질우수상</li>
                <li class="award award3">SCSI 대한민국 소셜미디어대상 1위</li>
                <li class="award award4">
                    국외여행상품 정보제공 표준안 참여여행사 마크
                </li>
                <li class="award award5">소비자의 날 국무총리 표창</li>
            </ul>
        </div>

        <!-- 하단 -->
        <div class="copy_right">
            <p>
                노랑풍선은 개별 항공권, 단품 및 일부 여행상품에 대하여 판매중개자로서
                통신판매의 당사자가 아닙니다. 따라서 해당 상품의 상품·거래정보 및 거래
                등에 대하여 책임을 지지 않습니다.
            </p>
            <p>
                항공권 또는 항공권이 포함된 상품의 경우, 표시되는 상품요금은 세금 및
                예상 유류할증료가 포함된 가격이며, 유류할증료는 유가 및 환율 등에 따라
                변동될 수 있습니다.
            </p>
            <p class="copy_right txt">©Yellow Balloon tour. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- 스크립트 -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="./libs/bxsilder/jquery.bxslider.js"></script>
    <script src="./libs/slick/slick.js"></script>

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



            // var depth2_linkEls = document.querySelectorAll(".depth2_link");
            // for (var index = 0; index < depth2_linkEls.length; index++) {
            //     var linkEl = depth2_linkEls[index];
            //     linkEl.onclick = function () {
            //         clearLink();
            //         clearMenu();
            //         var currentLinkEl = this;
            //         currentLinkEl.classList.add("active");
            //         var currentMenuEl = document.querySelector(
            //             currentLinkEl.getAttribute("data-target")
            //         );
            //         currentMenuEl.classList.add("show");
            //     };
            // }
            // function clearLink() {
            //     for (var index = 0; index < depth2_linkEls.length; index++) {
            //         var linkEl = depth2_linkEls[index];
            //         linkEl.classList.remove("active");
            //     }
            // }

            // var depth3_menuEls = document.querySelectorAll(".depth3_menu");
            // function clearMenu() {
            //     for (var index = 0; index < depth3_menuEls.length; index++) {
            //         var dep3MenuEl = depth3_menuEls[index];
            //         dep3MenuEl.classList.remove("show");
            //     }
            // }


            // 메인 예약검색창 패키지,항공,호텔 클릭
            var searchTabEls = $(".main_search_top li");
            searchTabEls.click(function () {
                searchTabEls.removeClass("active");
                $(this).addClass("active");
            });


            // 메인 이미지 슬라이더
            $(".slider").bxSlider({
                auto: true,
                autoControls: true,
                stopAutoOnClick: true,
                pager: false,
                autoControlsSelector: '.control_btn',
                nextSelector: '.control_rt',
                prevSelector: '.control_lt',
                onSlideAfter: function () {
                    $('.control_pager').html((this.getCurrentSlide() + 1) + '/' + this.getSlideCount());
                }
            });

            // 추천상품 1
            var subtabEls = $('.subtab1');
            var recommEls = $('.recomm1');

            subtabEls.click(function () {
                subtabEls.removeClass('active');
                recommEls.removeClass('show');

                var subtabEl = $(this);
                subtabEl.addClass('active');

                var recommEl = $(subtabEl.attr('data-target'));
                recommEl.addClass('show');

                var recommListEl = recommEl.find('.recomm_list');
                // 이미 slick 적용되있으면 slick destroy 시킨다.
                if (recommListEl.hasClass('slick-slider')) {
                    recommListEl.slick('unslick');
                }
                // subtab 클릭 시 slick 적용
                recommListEl.slick({
                    infinite: false,
                    slidesToShow: 4,
                    slidesToScroll: 1
                });
            });

            // 추천상품 2
            var subtab2Els = $('.subtab2');
            var recomm2Els = $('.recomm2');

            subtab2Els.click(function () {
                subtab2Els.removeClass('active');
                recomm2Els.removeClass('show');

                var subtab2El = $(this);
                subtab2El.addClass('active');

                var recomm2El = $(subtab2El.attr('data-target'));
                recomm2El.addClass('show');

                var recommList2El = recomm2El.find('.recomm_list');
                // 이미 slick 적용되있으면 slick destroy 시킨다.
                if (recommList2El.hasClass('slick-slider')) {
                    recommList2El.slick('unslick');
                }
                // subtab 클릭 시 slick 적용
                recommList2El.slick({
                    infinite: false,
                    slidesToShow: 4,
                    slidesToScroll: 1
                });
            });

            // 추천상품 슬라이더
            $('.recomm_list.1_1').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1
            });

            $('.recomm_list.2_1').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1
            });

            // 배너 슬라이더
            var img_width = $(".banner_wrap img").width();
            $(".banner_wrap").width(img_width);

            var list_len = $(".banner_wrap li").length;

            $(".banner_wrap ul").width(img_width * list_len);

            $(".banner_control_box a").click(function () {
                var idx = $(this).index();
                $(".banner_wrap ul").animate({ left: -img_width * idx });
                $(".banner_control_pager").text((idx + 1) + '/2');
            });

            // 인기 여행지
            $('.popu_center').slick({
                centerMode: true,
                infinite: true,
                centerPadding: '10px',
                slidesToShow: 5
            });
        });
    </script>
</body>

</html>