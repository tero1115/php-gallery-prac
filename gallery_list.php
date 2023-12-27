<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>갤러리</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.html'?>
    <div class="wrapper">
        <?php
            $d = dir("./upload");
            while($file = $d->read()){
                if ($file === '.' or $file === '..'){
                    continue;
                }
                $arr = explode('.', $file);
                $ext = end($arr);

                if ($ext == 'jpg' or $ext == 'png' or $ext == 'JPG' or $ext == 'PNG') {
                    echo '
                        <div class="img_div">
                            <img src="upload/'.$file.'"width = "300">
                        </div>
                    ';
                }
            }
        ?>

    </div>
</body>
</html>