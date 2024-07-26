<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script4.js" defer></script>
    <title>Index4</title>
</head>

<body>
    <main>
        <h1>jsでFormからデータ取得</h1>
        <form action="" name="contact">
            <ul>
                <li><input id="postcode" name="postcode" type="number" placeholder="郵便番号７桁を入力してください！！"></li>
                <li><input id="prefecture" name="prefecture" type="text" placeholder="都道府県名"></li>
                <li><input id="city" name="city" type="text" placeholder="市区町村名"></li>
                <li><input id="town" name="town" type="text" placeholder="町名他"></li>
            </ul>
        </form>

    </main>

</body>

</html>
