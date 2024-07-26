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
    <script src="script5.js" defer></script>
    <title>Index4</title>
</head>

<body>
    <main>
        <h1>jsでFormからデータ取得</h1>
        <form action="" name="contact">
            <ul>
                <li><input type="text" name="username" value="<?php echo $_GET['doctid']; ?>" required /></li>
                <li><input type="password" name="password" required /></li>
            </ul>
        </form>

    </main>

</body>

</html>
