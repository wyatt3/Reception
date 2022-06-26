<?php session_start();?>
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
<body>
    <div class="container text-center d-flex flex-column justify-content-center vh-100">
        <h1 class="mb-3">Wyatt &amp; Gracie's<br>Wedding Reception</h1>
    <?php
        if ($_SESSION['authenticated']) {
            if ($_REQUEST['page'] == 'thankYou') {?>
                <p>Thanks for sharing some memories with us! If you'd like to upload more pictures, just hit the button below.</p>
                <a class="btn submit w-50 mx-auto" href="/">&larr; Go Back</a>
            <?php } else { ?>
                <div class="photo-upload mx-3">
                    <p>Help us remeber our reception!<br>Snap a few pictures tonight. With us, friends, family, or whatever else you think is photo-worthy!<br>Upload them here so we can look back on all the fun memories of the night!</p>
                    <form method="POST" action="handle.php" enctype="multipart/form-data">
                        <input class="form-control w-50 m-auto mb-3" type="file" multiple required name="files[]">
                        <input type="submit" value="Upload" class="btn submit">
                    </form>
                </div>
                
    <?php }} else { ?>
        <p class="w-50 mx-auto mb-3">Please enter the access code.</p>
        <form method="POST" action="login.php" enctype="multipart/form-data">
            <input class="form-control w-50 m-auto" placeholder="Access Code" type="text" name="accessCode">
        </form>
    <?php }?>
    </div>
</body>
</html>
