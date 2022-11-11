<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노랑풍선 - 아이디 찾기</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/find_id.css">
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
                        <li><a href="../login/login.php">로그인</a></li>
                        <li><a href="join_pre.php">회원가입</a></li>
                        <li><a href="#">고객센터</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <h2 id="find_id">아이디/비밀번호 찾기</h2>

        <div class="title_wrap">
            <h3 class="title id"><a href="#">아이디 찾기</a></h3>
            <h3 class="title pwd"><a href="find_pwd.php">비밀번호 찾기</a></h3>
        </div>

        <div class="form_wrap">
            <form class="find_form" name="find_form" action="find.php" method="post" onsubmit="find_form_check()">
                <fieldset>
                    <legend class="hide">아이디 찾기</legend>
                    <p>회원가입 시 등록한 휴대폰 번호를 입력해주세요.</p>
                    <div>
                        <input type="text" name="u_name" id="u_name" placeholder="이름(실명)">
                    </div>
                    <span id="err_name" class="err_txt"></span>
                    <div class="mobile_wrap">
                        <input type="text" name="mobile" id="mobile" placeholder="휴대폰번호(숫자만입력)" maxlength="11">
                        <button type="submit" name="auth_number_send" id="auth_number_send">인증번호발송</button>
                    </div>
                    <span id="err_mobile" class="err_txt"></span>
                    <button type="submit" name="mobile_find" id="mobile_find">확인</button>
                </fieldset>
            </form>
        </div>

        <section class="authentic_wrap">
            <div class="authentic_cont">
                <p>2020년 09월 28일 이전에 가입하신 아이디의 경우 등록한 휴대폰번호로 아이디찾기가 불가합니다. </p>
                <p>본인인증을 통해 아이디찾기를 진행해주세요.</p>

                <button type="submit" name="authentic_find" id="authentic_find">본인인증으로 아이디 찾기</button>
            </div>
        </section>
    </main>
    <footer>
        <p>© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>
    <script>
    function find_form_check() {
            var u_name = document.getElementById("u_name");
            var u_mobile = document.getElementById("mobile");

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
        };
    </script>
</body>

</html>