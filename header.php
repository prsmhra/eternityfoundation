<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternity Foundation</title>
    <link href="asset\css\slick\slick.css" rel="stylesheet">
    <link href="asset\css\slick\slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/vanila/main.css" type="text/css">
    <script src="https://kit.fontawesome.com/ca70279aeb.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include_once("asset/connection.php"); ?>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg bg-light">
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
                                <li><a class="dropdown-item" href="health.php">Health</a></li>
                                <li><a class="dropdown-item" href="education.php">Education</a></li>
                                <li><a class="dropdown-item" href="#">Sustainable Development</a></li>
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
                        <li class="nav-item"> 
                            <a class="nav-link" href="involved.php" tabindex="-1" aria-disabled="true">Get Involved</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    