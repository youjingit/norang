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
    <title>노랑풍선 - 회원가입(admin)</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
    <link rel="stylesheet" type="text/css" href="../../css/common.css">
    <link rel="stylesheet" type="text/css" href="../../css/join.css">
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
                        <li><a href="/chayam/login/login.php">로그인</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <h2 class="join_title">간편 회원가입(관리자모드)</h2>
        <form name="join_form" action="insert.php" method="post" onsubmit="return join_form_check()">
            <input type="hidden" name="u_id" id="u_id">
            <input type="hidden" name="u_id_exist" id="u_id_exist" value="t">
            <fieldset>
                <legend class="hide">회원가입</legend>
                <section class="input_wrap">
                    <div class="email_wrap">
                        <div class="email_input">
                            <input type="text" placeholder="이메일" id="email_id" name="email_id">
                            <select name="email_sel" id="email_sel">
                                <option value="">직접입력</option>
                                <option value="@naver.com">@naver.com</option>
                                <option value="@gmail.com">@gmail.com</option>
                                <option value="@nate.com">@nate.com</option>
                                <option value="@daum.net">@daum.net</option>
                            </select>
                        </div>
                        <button type="button" id="id_search_btn" onclick="id_search()">중복확인</button>
                    </div>
                    <p class="warning">본인 소유의 이메일 계정이 아닐 경우 임의로 삭제될 수 있습니다.</p>
                    <span id="err_id" class="err_txt"></span>

                    <input type="password" id="pwd" name="pwd" placeholder="비밀번호 (영어 숫자 특수문자 조합 8~16자리)">
                    <br><span id="err_pwd" class="err_txt"></span>

                    <input type="password" id="re_pwd" name="re_pwd" placeholder="비밀번호 확인">
                    <br><span id="err_repwd" class="err_txt"></span>

                    <input type="text" id="u_name" name="u_name" placeholder="이름 (실명)">
                    <br><span id="err_name" class="err_txt"></span>

                    <div class="mobile_wrap">
                        <input type="text" id="mobile" name="mobile" placeholder="휴대폰번호 (숫자만 입력)" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        <button type="button" id="auth_number_send">인증번호발송</button>
                    </div>
                    <span id="err_mobile" class="err_txt"></span>

                    <div class="addition_info">
                        <input type="text" id="birth" name="birth" placeholder="생년월일 (예 : 19900101)" maxlength="8" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                        <div class="gender_wrap">
                            <div class="gender_group">
                                <input type="radio" name="gender" id="male" value="m">
                                <label for="male">남</label>
                            </div>
                            <div class="gender_group">
                                <input type="radio" name="gender" id="female" value="f">
                                <label for="female">여</label>
                            </div>
                        </div>
                    </div>
                    <span id="err_birth" class="err_txt"></span>
                </section>

                <h3 class="privacy_title">개인정보 유효기간
                    <span id="arrow_open" class="privacy_arrow open">▼ 자세히</span>
                    <span id="arrow_close" class="privacy_arrow">▲</span>
                </h3>
                <ul class="privacy_cont" id="privacy_cont">
                    <li>3년 이상으로 설정하시면 장기 미 이용 시에 휴면계정으로 전환되지 않고
                        노랑풍선 회원으로 유지되어 다양한 혜택을 이용하실 수 있습니다.</li>
                    <li>개인정보 파기 또는 분리 저장·관리하는 서비스 미이용 기간을
                        위의 선택 기간으로 요청합니다.</li>
                    <li>별도의 요청(선택)이 없으실 경우 서비스 미이용 기간은
                        1년(기본값)으로 설정됩니다.</li>
                </ul>
                <div>
                    <ul class="valid_period">
                        <li>
                            <input type="radio" name="privacy_period" id="until_withdraw" class="privacy" value="until_withdraw">
                            <label for="until_withdraw">회원 탈퇴 시 까지</label>
                        </li>
                        <li>
                            <input type="radio" name="privacy_period" id="5years" class="privacy" value="5y">
                            <label for="5years">5년</label>
                        </li>
                        <li>
                            <input type="radio" name="privacy_period" id="3years" class="privacy" value="3y">
                            <label for="3years">3년</label>
                        </li>
                        <li>
                            <input type="radio" name="privacy_period" id="1year" class="privacy" value="1y">
                            <label for="1year">1년</label>
                        </li>
                    </ul>
                    <span id="err_privacy_year" class="err_txt"></span>
                </div>

                <h3 class="hide">회원가입 약관동의</h3>
                <div class="terms_agree">
                    <div>
                        <div class="essential agree">
                            <input type="checkbox" id="essential_ap">
                            <label for="essential_ap">필수 약관에 동의합니다.</label>
                        </div>
                        <div class="terms essential_cont">
                            <ul>
                                <p>필수</p>
                                <li class="between">
                                    <div>
                                        <input type="checkbox" class="essent_ap" name="essen_agree1" id="essen_agree1">
                                        <label for="essen_agree1">노랑풍선 이용약관 동의</label>
                                    </div>
                                    <span class="read_all"><a href="join_terms.php" target="_blank">전체보기</a></span>
                                </li>
                                <li>
                                    <input type="checkbox" class="essent_ap" name="14age" id="14age">
                                    <label for="14age">
                                        만14세 이상 확인</label>
                                </li>
                                <li class="between">
                                    <div>
                                        <input type="checkbox" class="essent_ap" name="essen_agree2" id="essen_agree2">
                                        <label for="essen_agree2">개인정보 수집 및 이용 동의</label>
                                    </div>
                                    <span class="read_all"><a href="join_terms.php" target="_blank">전체보기</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span id="err_ess_terms" class="err_txt"></span>
                    <div>
                        <div class="option agree">
                            <input type="checkbox" id="option_ap" class="opt_ap">
                            <label for="option_ap">선택 약관에 동의합니다.</label>
                        </div>
                        <div class="terms option_cont">
                            <ul>
                                <p>선택</p>
                                <li class="between">
                                    <div>
                                        <input type="checkbox" class="opt_ap receive_agree" name="info_collect_agree" id="opt_agree1" value="y">
                                        <label for="opt_agree1">개인정보 수집 및 이용동의</label>
                                    </div>
                                    <span class="read_all"><a href="join_terms.php" target="_blank">전체보기</a></span>
                                </li>
                                <li>
                                    <input type="checkbox" class="opt_ap receive_agree" name="marketing_agree" id="opt_agree2" value="y">
                                    <label for="opt_agree2">마케팅 정보 수신 동의</label>
                                    <ul class="agree2_li">
                                        <li>
                                            <input type="checkbox" class="opt_ap" name="email_agree" id="email_agree" value="y">
                                            <label for="email_agree">이메일</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="opt_ap" name="sms_agree" id="sms_agree" value="y">
                                            <label for="sms_agree">SMS</label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit_btn" id="submit_btn">가입완료</button>
            </fieldset>
        </form>
    </main>
    <footer>
        <p class="copy_right">© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>


    <!-- 폼 스크립트 -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
         function join_form_check() {
            var u_id = document.getElementById("email_id");
            var email_sel = document.getElementById("email_sel");
            var u_idEl = document.getElementById("u_id"); //hidden input
            var u_id = email_id.value+email_sel.value;
            u_idEl.value = u_id;
            var u_pwd = document.getElementById("pwd");
            var u_repwd = document.getElementById("re_pwd");
            var u_name = document.getElementById("u_name");
            var u_mobile = document.getElementById("mobile");
            var u_birth = document.getElementById("birth");
            var u_id_existEl= document.getElementById("u_id_exist"); //hidden input

            if(u_id_existEl.value == 't'){
                alert('이메일 중복확인을 해주세요');
                return false;
            }

            if (u_id.value == "") {
                var txt = document.getElementById("err_id");
                txt.innerHTML = "<em>이메일을 입력하세요.</em>";
                u_id.focus();
                return false;
            }  else {
                var regex=/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
                if (!regex.test(u_id)){
                    var txt = document.getElementById("err_id");
                    txt.innerHTML = "<em>올바른 이메일을 입력하세요.</em>";
                    email_id.focus();
                    return false;
                } else {
                    var txt = document.getElementById("err_id");
                    txt.innerHTML = "";
                }
            }

            if (u_pwd.value == "") {
                var txt = document.getElementById("err_pwd");
                txt.innerHTML = "<em>비밀번호를 입력하세요.</em>";
                u_pwd.focus();
                return false;

            } else {
                var txt = document.getElementById("err_pwd");
                txt.innerHTML = "";

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

            if (u_name.value == "") {
                var txt = document.getElementById("err_name");
                txt.innerHTML = "<em>이름을 입력하세요.</em>";
                u_name.focus();
                return false;
            } else {
                var txt = document.getElementById("err_name");
                txt.innerHTML = "";
            }

            if (u_mobile.value == "") {
                var txt = document.getElementById("err_mobile");
                txt.innerHTML = "<em>휴대폰번호를 입력하세요.</em>";
                u_mobile.focus();
                return false;
            } else {
                var txt = document.getElementById("err_mobile");
                txt.innerHTML = "";
            }

            if (u_birth.value == "") {
                var txt = document.getElementById("err_birth");
                txt.innerHTML = "<em>생년월일을 입력하세요.</em><br><br>";
                u_birth.focus();
                return false;
            } else {
                var txt = document.getElementById("err_birth");
                txt.innerHTML = "";
            }

            var genderEl = document.querySelector("[name='gender']:checked");
            if (genderEl == null) {
                var txt = document.getElementById("err_birth");
                txt.innerHTML = "<em>성별을 선택하세요.</em><br><br>";
                return false;
            } else {
                var txt = document.getElementById("err_birth");
                txt.innerHTML = "";
            }

            var priv_yearEl = document.querySelectorAll(".privacy:checked");
            if (priv_yearEl.length < 1) {
                var txt = document.getElementById("err_privacy_year");
                txt.innerHTML = "<em>개인정보 유효기간을 선택하세요.</em><br><br>";
                return false;
            } else {
                var txt = document.getElementById("err_privacy_year");
                txt.innerHTML = "";
            }

            var ess_termsEls = document.querySelectorAll(".essent_ap:checked");
            if (ess_termsEls.length < 3) {
                var txt = document.getElementById("err_ess_terms");
                txt.innerHTML = "<em>필수 약관에 동의해주세요.</em><br><br>";
                return false;
            } else {
                var txt = document.getElementById("err_ess_terms");
                txt.innerHTML = "";
            }
        }

        function id_search(){
            var email_id = document.getElementById("email_id");
            var email_sel = document.getElementById("email_sel");
            var u_id = email_id.value+email_sel.value;

            if (u_id == "") {
                alert('이메일을 입력해주세요');
                return;
            } 

            var regex=/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
            if (!regex.test(u_id)){
                alert('올바른 이메일을 입력하세요');
                return;
            } 
            
            $.ajax({
                url:'exist_id.php',
                method: 'get',
                data: {
                    u_id: u_id
                }
            }).then(function(data){
                if(data === 't'){
                    alert(u_id+"은 사용할 수 없는 아이디입니다.");
                } else {
                    alert(u_id+"은 사용할 수 있는 아이디입니다.");
                }
                $('#u_id_exist').val(data); 
            })
        }

        $("#email_id").change(function(){
            $('#u_id_exist').val('t');
        })

        $("#email_sel").change(function(){
            $('#u_id_exist').val('t');
        })

        // 개인정보 유효기간 자세히 열고 닫기 
        var closeEl = document.getElementById("arrow_close");
        var openEl = document.getElementById("arrow_open");
        var contEl = document.getElementById("privacy_cont");

        closeEl.onclick = function () {
            openEl.classList.add("open");
            closeEl.classList.remove("open");
            contEl.classList.remove("open");
        }

        openEl.onclick = function () {
            openEl.classList.remove("open");
            closeEl.classList.add("open");
            contEl.classList.add("open");
        }


        // 필수약관 전체동의 
        var essentialEl = document.getElementById("essential_ap");
        essentialEl.onclick = function () {
            var isChecked = essentialEl.checked;
            var essentEls = document.querySelectorAll(".essent_ap");

            for (var index = 0; index < essentEls.length; index++) {
                var essentEl = essentEls[index];
                essentEl.checked = isChecked;
            }
        }

        var essentEls = document.querySelectorAll(".essent_ap");
        for (var index = 0; index < essentEls.length; index++) {
            var essentEl = essentEls[index];
            essentEl.onclick = function(){
                var checkEssentEls = document.querySelectorAll(".essent_ap:checked");
                if(essentEls.length === checkEssentEls.length){
                    essentialEl.checked = true;
                } else{
                    essentialEl.checked = false;
                }
            }
        }
        
        

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
        }
    </script>
</body>

</html>