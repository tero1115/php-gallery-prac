<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>이미지 업로드</title>
    <script src="upload.js"></script>
</head>
<body>
<?php include 'menu.html';?>
    <form method="post" name="upload_form" enctype="multipart/form-data" action="gallary_upload_form_ok.php">
        이미지 업로드 : <input type="file" name="photo">
        <button id="upload_btn">업로드 확인</button>
    </form>
</body>
</html>