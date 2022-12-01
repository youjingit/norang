<?php
include "../inc/session.php";
?>
<div id="sidebar_wrap">
    <div class="sidebar">
        <div class="sidebar_menu">
            <div class="sidebar-inner">
                <div id="sidebar_btn">
                    <ul>
                        <li class="toggle_btn"><a href="javascript:void(0);" class="toggle_i"><i></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sub_menu_wrap" style="display:none;">
            <div class="sub_menu">
                <h2>관리자님,<br>안녕하세요!</h2>
                <ul class="menu_list">
                    <li><a href="/norang/admin/login/logout.php">로그아웃</a></li>
                    <li><a href="/norang/admin/members/member_info.php?g_idx=<?php echo $s_idx?>">내 정보</a></li>
                    <li><a href="/norang/index.php">메인홈페이지</a></li>
                    <li><a href="/norang/admin/index.php">관리자홈으로</a></li>
                </ul>
                <hr>
                <ul class="menu_list">
                    <li><a href="/norang/admin/notice/list.php">공지사항</a></li>
                    <li><a href="/norang/admin/members/list.php">회원관리</a></li>
                    <li><a href="/norang/admin/products/list.php">상품관리</a></li>
                    <li><a href="">예약내역</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>