<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Eternity_Icon.png">
    <title>Eternity Foundation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="asset\css\slick\slick.css" rel="stylesheet">
    <link href="asset\css\slick\slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/vanila/main.css" type="text/css">
    <script src="https://kit.fontawesome.com/ca70279aeb.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include_once("asset/connection.php"); 
    ?>
    <header>
        <div class="container-fluid header-top d-none d-sm-none d-md-block">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-1"></div>
                <div class="col-6 col-md-5">
                    <div class="text-white">Follow us on:
                    <a  href="http://www.facebook.com/EternityNSD/" target="_blank">
                        <span class="p-2">
                            <i class="fab fa-facebook"></i>
                        </span>
                    </a>
                    <a  href="https://twitter.com/EternityNSD" target="_blank">
                        <span class="p-2">
                            <i class="fab fa-twitter"></i>
                        </span>
                    </a>
                    <a  href="https://linkedin.com/company/28677406/" target="_blank">
                        <span class="p-2">
                            <i class="fab fa-linkedin"></i>
                        </span>
                    </a>
                    <a  href="https://www.instagram.com/eternity_foundation/" target="_blank">
                        <span class="p-2">
                            <i class="fab fa-instagram"></i>
                        </span>
                    </a>
                    <a  href="https://www.youtube.com/channel/UCP0d9LPjBO5IjC5sV9F6hfw?view_as=subscriber" target="_blank">
                        <span class="p-2">
                            <i class="fab fa-youtube-square"></i>
                        </span>
                    </a>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="float-md-left">
                        <a  href="mailto: info@eternityfoundation.net">
                            <span class="p-2">
                            <i class="far fa-envelope"></i>
                                Email:  info@eternityfoundation.net
                            </span>
                        </a>
                    </div>
                    <div class="float-md-left">
                        <a  href="tel:+91 9315258206">
                            <span class="p-2">
                                <i class="fab fa-whatsapp"></i>
                                Whatsapp: +91 9315258206
                            </span>
                        </a>
                    </div>
                    <div class="float-md-left">
                        <a  href="https://webmail1.hostinger.in/?_task=login" target="_blank">
                            <span class="p-2">
                                <i class="fas fa-envelope"></i>
                                Email Login
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <?php 
                    $sql = "SELECT * FROM `images` WHERE img_for = 'logoImg'";
                    $result = $conn->query($sql);
                    if (isset($result->num_rows) && $result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) { ?>
                            <a class="navbar-brand" href="index.php"><img id='eternity-logo'src="<?php echo $row["img_link"]; ?>" alt="<?php echo $row["img_description"]?>"   loading="lazy"></a>
                        <?php
                        }
                    }
                ?>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto justify-content-end w-100">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Initiative
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navDropdownMenu">
                                <li><a class="dropdown-item" href="collage.php">Covid-19 Relief</a></li>
                                <li><a class="dropdown-item" href="webiner.php">Webiners</a></li>
                                <li><a class="dropdown-item" href="health.php">Health</a></li>
                                <li><a class="dropdown-item" href="education.php">Education</a></li>
                                <li><a class="dropdown-item" href="sustainableDevelopnemt.php">Sustainable Development</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Initiative
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="health.php">Health</a></li>
                                <li><a class="dropdown-item" href="#">Education</a></li>
                                <div class="dropdown-divider"></div> 
                                <li><a class="dropdown-item" href="#">Sustainable Development</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="health.php" tabindex="-1" aria-disabled="true">Health</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Gallary</a>
                        </li> -->
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="involvedDropdown" role ="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Get Involved
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="involvedDropdown">
                                <li><a href="involved.php" class="dropdown-item">Get Involved</a></li>
                                <li><a href="corporatepartnership.php" class="dropdown-item">Corporate Partnership</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ml-2 mt-2 mt-lg-0"> 
                            <a class="nav-link active" href="donation.php" tabindex="-1" aria-disabled="true">Donate Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
