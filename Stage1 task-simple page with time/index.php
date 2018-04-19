<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <style>
        
    </style>

</head>
<body>
    <section class="container">
        <img src="https://i.imgur.com/NlikPEd.jpg" alt="image of IT" width="1250" height="400" >
        <div class= "image-text">
            <p>Welcome To <br>HNG Internship4 <br><span class="awesome">AWESOME</span></p>
            <p class="datetime"><?php
        date_default_timezone_set("Africa/Lagos");
        echo "<span class='day'>" . date("l") . ",</span><br>";
        echo date("d.m.y") . "<br>";
        echo "<span class='date'>" . date("h:i:sA") . "</span>";

    ?>
    </div>
    </section>
    
    
    </p>
</body>
</html>