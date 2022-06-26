<?php
if(!$_REQUEST['code'] == 'wyattNgracie7-2-2022') {
    header('location:/');
}

$images = scandir('./img/upload');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Fjalla+One&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link rel="stylesheet" href="/styles.css">
    <title>Wyatt & Gracie's Reception</title>
</head>
<body class="container">
    <h1 class="my-5">All Images</h1>
    <div class="d-flex flex-wrap justify-content-between">
    <?php
    foreach($images as $image) {
        if($image != '.' && $image != '..') {
            ?>
            <a class="m-1" href="/img/upload/<?php echo $image ?>" download style="width: 30%;">
                <img src="/img/upload/<?php echo $image ?>" class="w-100">
            </a>
            <?php
        }
    }
    ?>
    </div>
</body>