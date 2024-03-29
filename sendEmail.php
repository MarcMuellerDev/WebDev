<?php 

$subject =$_POST['subject']
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:" .$name."<".$email.">\r\n"

$recipient = "marcmueller85@htp-tel.de";

mail($recipient, $subject, $message, $mailheader)
or die("Ein Fehler ist aufgetreten, bitte versuchen Sie es noch einmal!");

echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description"
        content="Svenja S Collection Wolfram Kaschinski - Großhandel für Sanddorn Produkte, Spirituosen, Tee, Süßwaren und maritime Geschenkartikel">
    <meta name="Keywords"
        content="Sanddorn, Svenja, Collection, Marmelade, Tee, Bonbons, Sanddornprodukte, Sanddornmarmelade, Sanddornbonbons, Sanddorntee, Sanddornlikör, Sanddorngeist, Konfitüre, maritime, schräge, Flasche, Spirituose, Spirituosen, Flaschen, Likör, maritim, Lakritze, Geschenkverpackungen, Ostsee, Nordsee, Rügen, Grosshandel, Großhandel, Geschenkartikel, Kaschinski, Wolfram, Nordstemmen, 31171">
    <meta name="Author" content="Svenja S. Collection">
    <meta name="Content-language" content="de">


    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">


    <!--Bootsrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">


    <title>Svenja S. Collection - Sanddorn Spezialitäten, Spirituosen und maritimer Großhandel</title>


</head>

    <!--Navigation-->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fs-1 text-white">
                <img src="gull2.svg" alt="gull" width="35" height="35" class="d-inline-block align-text-top">
                Svenja S. Collection</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#products">Produkte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Kontakt</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Downloads</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Bestellformular.pdf">Bestellformular</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="Bestell_Bio_Handel.pdf">Nordsee Liebe - Bio</a></li>
                          </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Image Slider-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" id="banner-sig" data-bs-interval="8000">
                <div style="background-image: url('banner1.jpg');" class="slider-image"></div>
                <div class="carousel-caption d-none-block d-sm-block">
                    <h1>Svenja S. Collection</h1>
                    <p>Sanddorn Spezialitäten, Spirituosen und maritimer Großhandel</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <div style="background-image: url('banner2.jpg');" class="slider-image"></div>
                <div class="carousel-caption d-none-block d-sm-block">
                    <a href="http://www.nordsee-liebe.de">
                        <img src="nordseeliebe_banner.png" class="img-fluid" alt="Nordsee Liebe">
                    </a>
                    <p>Entdecken Sie unser BIO Sortiment</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Webstite Infos-->

    <!--Produktübersicht-->
    <div id="products" class="container my-5">
        <h1 class="heading fw-bold my-0">Vielen Dank für Ihre Email! Wir werden uns umgehend bei Ihnen melden!</h1>
    </div>
 

    <!--Footer-->
    <div class="footer py-1">
        <a class="navbar-brand fs-1" href="http://www.svenja-s-collection-online.de">
            <img src="gull2.svg" alt="gull" width="35" height="35" class="d-inline-block align-text-top">
            Svenja S. Collection</a>
        <p>&copy; 2022</p>
    </div>
    <!--Bootsrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

</body>

</html>



';


?>