<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노랑풍선 - 비밀번호 찾기</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/find_pwd.css">
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
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <h2 id="find_pwd">아이디/비밀번호 찾기</h2>

        <div class="title_wrap">
            <h3 class="title id"><a href="find_id.php">아이디 찾기</a></h3>
            <h3 class="title pwd"><a href="#">비밀번호 찾기</a></h3>
        </div>

        <div class="form_wrap">
            <form class="find_form" name="find_form" action="find_pwd_action.php" method="post" onsubmit="find_form_check()">
                <fieldset>
                    <legend class="hide">비밀번호 찾기</legend>
                    <p>회원가입 시 등록한 이메일 정보를 입력해주세요.</p>
                    <div class="email_wrap">
                        <div>
                            <input type="text" name="u_id" id="u_id" placeholder="아이디(이메일주소형식)">
                            <span id="err_id" class="err_txt"></span>
                        </div>
                        <button type="submit" name="email_find" id="email_find">확인</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <section class="authentic_wrap">
            <div class="authentic_cont">
                <p>2020년 09월 28일 이전에 가입하신 이메일형식이 아닌 아이디의 비밀번호 찾기는 </p>
                <p>본인인증을 통해서만 비밀번호 찾기가 가능합니다.</p>
                <p>소셜 간편회원가입 고객께서는 가입 시 비밀번호 미 설정 상태이기 때문에</p>
                <p>비밀번호 찾기가 불가합니다. <span>(고객센터 1544-2288)</span></p>

                <button type="submit" name="authentic_find" id="authentic_find">본인인증으로 비밀번호 찾기</button>
            </div>
        </section>
    </main>
    <footer>
        <p>© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>
    <script>
        function find_form_check() {
            var u_id = document.getElementById("u_id");

         if (u_id.value == "") {
                var txt = document.getElementById("err_id");
                txt.innerHTML = "<em>이메일을 입력하세요.</em>";
                u_id.focus();
                return false;
            } else {
                var regex=/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
                if (!regex.test(u_id.value)){
                    var txt = document.getElementById("err_id");
                    txt.innerHTML = "<em>올바른 이메일을 입력하세요.</em>";
                    email_id.focus();
                    return false;
                else {
                var txt = document.getElementById("err_id");
                txt.innerHTML = "";
                }
            }
        }};

    </script>
</body>

</html>