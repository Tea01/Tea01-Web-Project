<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web sitesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/girisStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nothing You Could Do">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sunshiney">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=New Tegomin">
</head>
<body onload="slider()">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg">
                <div class="banner">
                    <div class="slider">
                        <img src="Giris Sayfasi/images/img8.jpg" alt="Nature" id="slideImg" >
                    </div>
                    <div class="overlay">
                        <div class="logo">
                            <img src="Giris Sayfasi/images/logo.png" alt="Albanian Logo">
                        </div>
                        <div class="content">
                            <h1>Get To Know Albania</h1>
                            <h4>Sign Up or Log In to explore the beautiful country of Albania</h4>
                            <div>
                                <button type = "button" onclick="window.open('Giris Sayfasi/signup.php')"> Sign Up</button>
                                <button type = "button" onclick="window.open('Giris Sayfasi/login.php')"> Log In</button>
                            </div>
                        </div>
                    </div>
                </div>
         
                <script>
                    var slideImg = document.getElementById("slideImg");
                    var images = new Array(
                        "Giris Sayfasi/images/img12.jpg", 
                        "Giris Sayfasi/images/img1.jpg",
                        "Giris Sayfasi/images/img2.jpg",
                        "Giris Sayfasi/images/img3.jpg",
                        "Giris Sayfasi/images/img6.jpg",
                        "Giris Sayfasi/images/img8.jpg",
                        "Giris Sayfasi/images/img10.jpg",
                        "Giris Sayfasi/images/img7.jpg",
                        "Giris Sayfasi/images/img11.jpg",
                    );
                    var len = images.length;
                    var i=0;
                    function slider()
                    {
                        if(i>len-1)
                        {
                            i=0;
                        }
                        slideImg.src=images[i];
                        i++;
                        setTimeout('slider()',3000);
                    }
                </script>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>