<?php

include 'menu.html';

if ($_FILES['photo']['name'] == '') {
    echo "
    <script>
        alert('파일을 선택하지 않으셨습니다.');
        self.location.href='./gallary_list.php';
    </script>
    ";
    exit;
}

$file_name = $_FILES['photo']['name'];
$arr = explode('.', $file_name);
$ext = end($arr); // 확장자

if ($ext == 'jpg' or $ext == 'png' or $ext == 'JPG' or $ext == 'PNG') {
    copy($_FILES['photo']['tmp_name'], "./upload/".$_FILES['photo']['name']);

    echo "
    <script>
        alert('정상적으로 업로드가 완료되었습니다.');
        self.location.href='./gallary_list.php';
    </script>
    ";
} else {
    echo "이미지 포맷 (png, jpg)만 업로드 가능합니다.";
}

?>
