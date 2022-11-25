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
    <title>공지사항</title>
    <style>
        body,input,button,textarea{font-size:20px}
        input[type=checkbox]{width:20px;height:20px}
        a{text-decoration:none;margin:0 5px}
    </style>
    <script>
        function notice_check(){
            var n_title = document.getElementById("n_title");
            var n_content = document.getElementById("n_content");

            if(!n_title.value){
                alert("제목을 입력하세요.");
                n_title.focus();
                return false;
            };

            if(!n_content.value){
                alert("내용을 입력하세요.");
                n_content.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.php"; ?>
    <form name="notice_form" action="insert.php" method="post" onsubmit="return notice_check()">
        <fieldset>
            <legend>공지사항</legend>
            <p>
                <label for="writer">작성자<label> 
                <input type="text" name="writer" id="writer" value="<?php echo $s_name; ?>">
                <!-- <input type="hidden"> -->
            </p>
            <p>
                <label for="always">상시 여부</label>
                <input type="checkbox" name="always" id="always" value="y">
            </p>
            <p>
                <label for="cate">카테고리</label>
                <select name="cate" id="cate" class="cate">
                    <option value="all">전체</option>
                    <option value="notice">공지사항</option>
                    <option value="honey">허니문</option>
                    <option value="golf">골프</option>
                    <option value="cruise">크루즈</option>
                    <option value="domestic">국내</option>
                    <option value="busanDaegu">부산/대구</option>
                    <option value="airport">항공권 소식</option>
                    <option value="hotel">호텔</option>
                </select>
            </p>
            <p>
                <label for="n_title">제목</label>
                <input type="text" name="n_title" id="n_title">
            </p>

            <p>
                <label for="n_content">내용</label>
                <textarea cols="60" rows="10" name="n_content" id="n_content"></textarea>
            </p>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>