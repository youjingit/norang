<?php
include "../inc/session.php";
include "../inc/admin_check.php";

// 관리자가 선택한 사용자의 데이터 가져오기
$g_idx = $_GET["g_idx"];

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select*from members where idx='$g_idx';";

// 쿼리 실행
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
// mysqi_fetch_row(쿼리실행문) -- 필드순서
// mysqi_fetch_array(쿼리실행문) -- 필드이름
// mysqi_num_rows(쿼리실행문) -- 전체 행 개수
$array = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>개인정보 수정(관리자모드)</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
    <link rel="stylesheet" type="text/css" href="../../css/common.css">
    <link rel="stylesheet" type="text/css" href="../../css/my_page.css">
    <style>
        .content_wrap {
            padding: 0;
        }
    </style>
</head>
<body>
    <main>
        <div class="content_title green">
            <h3>개인정보 수정(관리자모드)</h3>
        </div>
        <div class="content_wrap">
            <div class="content_right_wrap">
                <div class="form_container">
                    <form class="form" name="edit_form" action="edit.php" method="post" onsubmit="return edit_form_check()">
                        <fieldset class="form_body">
                            <legend class="hide">회원정보</legend>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form_inline">
                                        <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
                                        <label class="form_label">이메일 아이디</label>
                                        <div class="form_group">
                                            <input type="text" id="u_id" name="u_id" class="form_control" placeholder="이메일" value="<?php echo $array["u_id"];?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form_inline">
                                        <label class="form_label">비밀번호</label>
                                        <div>
                                            <div class="form_group">
                                                <input type="password" id="pwd" name="pwd" class="form_control" placeholder="비밀번호">
                                            </div>
                                            <span id="err_pwd" class="err_txt"></span>
                                        </div>
                                    </div>
                                    <div class="form_inline">
                                        <label class="form_label">비밀번호 확인</label>
                                        <div>
                                            <div class="form_group">
                                                <input type="password" id="re_pwd" name="re_pwd" class="form_control" placeholder="비밀번호 확인">
                                            </div>
                                            <span id="err_repwd" class="err_txt"></span>
                                        </div>
                                    </div>
                                    <div class="form_inline">
                                        <label class="form_label">이름</label>
                                        <div class="form_group">
                                            <input type="text" id="u_name" name="u_name" class="form_control" placeholder="이름" value="<?php echo $array["u_name"];?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form_inline">
                                        <label class="form_label">휴대폰 번호</label>
                                        <div class="form_group">
                                            <input type="text" id="mobile" name="mobile" class="form_control" placeholder="휴대폰 번호" value="<?php echo $array["mobile"];?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form_inline">
                                        <?php $birth = str_replace("-", "", $array["birth"]);?>
                                        <label class="form_label">생년월일</label>
                                        <div class="form_group">
                                            <input type="text" id="birth" name="birth" class="form_control" placeholder="생년월일" value="<?php echo $birth;?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        </div>
                                    </div>
                                    <div class="form_inline">
                                        <label class="form_label">성별</label>
                                        <div class="form_group">
                                            <div class="form_check">
                                                <input type="radio" name="gender" id="male" class="form_check_input" value="m" <?php if($array["gender"] == "m") echo " checked";?>>
                                                <label class="form_check_label">남</label>
                                            </div>
                                            <div class="form_check">
                                                <input type="radio" name="gender" id="female" class="form_check_input" value="f" <?php if($array["gender"] == "f") echo " checked";?>>
                                                <label class="form_check_label">여</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion open">
                                <div class="accordion_toggle">
                                    개인정보 유효기간
                                    <i class="icon icon_arrow_up" data-open="true"></i>
                                    <i class="icon icon_arrow_down" data-open="false"></i>
                                </div>
                                <div class="accordion_content">
                                    <ul>
                                        <li>3년 이상으로 설정하시면 장기 미 이용 시에 휴면계정으로 전환되지 않고 노랑풍선 회원으로 유지되어 다양한 혜택을 이용하실 수 있습니다.</li>
                                        <li>개인정보 파기 또는 분리 저장·관리하는 서비스 미이용 기간을 위의 선택 기간으로 요청합니다.</li>
                                        <li>별도의 요청(선택)이 없으실 경우 서비스 미이용 기간은 1년(기본값)으로 설정됩니다.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form_inline">
                                <div class="form_group">
                                    <div class="form_check">
                                        <input type="radio" class="form_check_input" id="until_withdraw" class="privacy" name="privacy_period" value="until_withdraw"<?php if($array["privacy_period"] == "until_withdraw") echo " checked";?>>
                                        <label class="form_check_label">회원 탈퇴 시 까지</label>
                                    </div>
                                    <div class="form_check">
                                        <input type="radio" class="form_check_input" id="5years" class="privacy" name="privacy_period" value="5y"<?php if($array["privacy_period"] == "5y") echo " checked";?>>
                                        <label class="form_check_label">5년</label>
                                    </div>
                                    <div class="form_check">
                                        <input type="radio" class="form_check_input" id="3years" class="privacy" name="privacy_period" value="3y"<?php if($array["privacy_period"] == "3y") echo " checked";?>>
                                        <label class="form_check_label">3년</label>
                                    </div>
                                    <div class="form_check">
                                        <input type="radio" class="form_check_input" id="1year" class="privacy" name="privacy_period" value="1y"<?php if($array["privacy_period"] == "1y") echo " checked";?>>
                                        <label class="form_check_label">1년</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="form_check">
                                        <input type="checkbox" class="form_check_input" id="option_ap">
                                        <label class="form_check_label">선택 약관에 동의합니다.</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card_text">선택</p>
                                    <div class="card_section">
                                        <div class="form_group_between">
                                            <div class="form_check">
                                                <input type="checkbox" class="form_check_input opt_ap" name="info_collect_agree" id="opt_agree1" value="y"<?php if($array["info_collect_agree"] == "y") echo " checked";?>>
                                                <label class="form_check_label">개인정보 수집 및 이용 동의</label>
                                            </div>
                                            <a href="javascript:void(0);" class="form_link">전체보기</a>
                                        </div>
                                    </div>
                                    <div class="card_section">
                                        <div class="form_check">
                                            <input type="checkbox" class="form_check_input opt_ap" name="marketing_agree" id="opt_agree2" value="y"<?php if($array["marketing_agree"] == "y") echo " checked";?>>
                                            <label class="form_check_label">마케팅 정보 수신 동의</label>
                                        </div>
                                        <div class="card_inner_section">
                                            <div class="form_group">
                                                <div class="form_check">
                                                    <input type="checkbox" class="form_check_input opt_ap" name="email_agree" id="email_agree" value="y"<?php if($array["email_agree"] == "y") echo " checked";?>>
                                                    <label class="form_check_label">이메일</label>
                                                </div>
                                                <div class="form_check">
                                                    <input type="checkbox" class="form_check_input opt_ap" name="sms_agree" id="sms_agree" value="y"<?php if($array["sms_agree"] == "y") echo " checked";?>>
                                                    <label class="form_check_label">SNS</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form_footer">
                            <button type="button" class="form_btn form_gray_btn" onclick="history.back()">취소</button>
                            <button type="submit" class="form_btn form_yellow_btn">정보수정</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script type="text/javascript">
            // 선택약관 전체동의 
            var optionEl = document.getElementById("option_ap");
            optionEl.onclick = function () {
                var isChecked = optionEl.checked;
                var optEls = document.querySelectorAll(".opt_ap");

                for (var index = 0; index < optEls.length; index++) {
                    var optEl = optEls[index];
                    optEl.checked = isChecked;
                }
            }
            // 선택약관 항목별 자동선택
            var collectagreeEl = document.getElementById("opt_agree1");
            var marketagreeEl = document.getElementById("opt_agree2");
            var emailagreeEl = document.getElementById("email_agree");
            var smsagreeEl = document.getElementById("sms_agree");

            collectagreeEl.onclick = function(){
                var isChecked = collectagreeEl.checked;
                optionEl.checked = isChecked;
                marketagreeEl.checked = isChecked;
                emailagreeEl.checked = isChecked;
                smsagreeEl.checked = isChecked;
            }
            marketagreeEl.onclick = function(){
                var isChecked = marketagreeEl.checked;
                if(isChecked){
                    optionEl.checked = true;
                    collectagreeEl.checked = true;
                    emailagreeEl.checked = true;
                    smsagreeEl.checked = true;
                } else {
                    optionEl.checked = false;
                    emailagreeEl.checked = false;
                    smsagreeEl.checked = false;
                }
            }
            emailagreeEl.onclick = function(){
                var isChecked = emailagreeEl.checked;
                var isSmsChecked = smsagreeEl.checked;
                if(isChecked === true){
                    collectagreeEl.checked = true;
                    marketagreeEl.checked = true;
                    if(isSmsChecked === true){
                        optionEl.checked = true;
                    }
                } else {
                    if(isSmsChecked === false){
                        marketagreeEl.checked = false;
                    }
                    optionEl.checked = false;
                }
            }
            smsagreeEl.onclick = function(){
                var isChecked = smsagreeEl.checked;
                var isEmailChecked = emailagreeEl.checked;
                if(isChecked === true){
                    collectagreeEl.checked = true;
                    marketagreeEl.checked = true;
                    if(isEmailChecked === true){
                        optionEl.checked = true;
                    }
                } else {
                    if(!isEmailChecked){
                        marketagreeEl.checked = false;
                    }
                    optionEl.checked = false;
                }
            };
            function edit_form_check(){
            var u_pwd = document.getElementById("pwd");
            var u_repwd = document.getElementById("re_pwd");

            if(u_pwd.value){
                var cnt = 0;
                var format1 = /[0-9]/;
                if (format1.test(u_pwd.value)) {
                    cnt++;
                }

                var format2 = /[a-zA-Z]/;
                if (format2.test(u_pwd.value)) {
                    cnt++;
                }

                var format3 = /[~?!@#$%<>^&*\()\-=+_\’\:\;\.\,\"\'\[\]\{\}\/\|\`]/gi;
                if (format3.test(u_pwd.value)) {
                    cnt++;
                }

                var txt = document.getElementById("err_pwd");
                if ((cnt >= 2 && u_pwd.value.length >= 10) || (cnt >= 3 && u_pwd.value.length >= 8)) {
                    txt.innerHTML = "";
                } else {
                    txt.innerHTML =
                        "<em>-영문,숫자,특수문자 중 2가지 종류이상을 조합으로 10자리이상 입력하세요.<br>-영문,숫자,특수문자 중 3가지 종류이상을 조합으로 8자리이상 입력하세요.</em>";
                    u_pwd.focus();
                    return false;
                }
                
                if (u_pwd.value != u_repwd.value) {
                    var txt = document.getElementById("err_repwd");
                    txt.innerHTML = "<em>비밀번호를 확인하세요.</em>";
                    u_repwd.focus();
                    return false;
                } else {
                    var txt = document.getElementById("err_repwd");
                    txt.innerHTML = "";
                }
            }
        };
    </script>
</body>
</html>