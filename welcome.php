<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: rgb(109, 109, 178);
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
    
</head>
<body>
    <h1 style="color: rgb(225, 133, 147); text-align:center;">SELAMAT DATANG!</h1>
    <h2 style="color: rgb(225, 133, 147); text-align:center;">
        Welcome <?php echo $_POST["first-name"]; ?> 
        <?php echo $_POST["last-name"];
         ?>!<br/>
        Your Gender Is <?php echo $_POST["Gender"];
         ?>!<br/>
        Your Nationality Is <?php echo $_POST["Negara"]; 
        ?>!<br/>
        Your Language Spoken Is <?php echo $_POST["buatbox"]; 
        ?>!<br/>
        Your Biodata Is <?php echo $_POST["message"];
         ?>!<br/>
    </h2>
    <br>
    <h3 style="color: rgb(225, 133, 147); text-align:center;">Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama!</h3>
</body>
</html>
