<?php include("header.php"); ?>
<!--carousel -->
<div id="myCarousel" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
    <?php 
            $sql = 'SELECT COUNT(img_link) AS num FROM `images` WHERE `img_for`="carousel" ';
            $result = $conn->query($sql);
            if(isset($result->num_rows)&&$result->num_rows>0){
                while($rows = $result->fetch_assoc()){
                    for($i=0;$i<$rows['num'];$i++){ ?>
                        <li data-target="#myCarousel" data-slide-to="<?= $i ?>" class="<?= $i==0 ? 'active': '' ; ?>"></li>
            <?php   }
                }
            }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php 
            $sql = 'SELECT `img_link`,`img_description` FROM `images` WHERE `img_for`="carousel" ';
            $result = $conn->query($sql);
            if(isset($result->num_rows)&&$result->num_rows>0){
                for($i = 0; $i<$rows = $result->fetch_assoc();$i++){ ?>
                    <div class="carousel-item  <?= $i==0?'active':'' ?>">
                        <img src="<?= $rows['img_link']; ?>" width = "100%" height ="500" class="image img-fluid" alt="..." srcset="">
                        <div class="overlay"></div>
                        <div class="container d-none d-sm-none d-md-block">
                            <!-- <div class="carousel-caption text-left">
                                <h1 class="animate__animated animate__slideInRight">WE CAN HELP SOMEONE</h1>
                                <p class="animate__animated animate__slideInRight" style="--animate-delay: 0.9s;">WITH YOUR SMALL CONTRIBUTION MANY LIFE CAN CHANGE</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                            <!-- </div> --> 
                            <?= $rows['img_description']; ?>
                        </div>
                    </div>
        <?php   }
            } ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel Ends -->
<div class="container-fluid">
    <div class="row about-section">
        <div class="col-lg-5 about text-center mt-5">
            <h3 class="about-heading">About <span class="heading-text">Us</span></h3>
            <img src="images\title-bottom.png" alt="">
            <p class="lead about-content">
                Eternity Foundation (EF) is a registered non-profit organization established in 2019. Working with the tag line 'Never Stop Dreaming' The main areas of intervention for the organization are; Education, Health, Livelihoods, and Sustainable Environment. Eternity Foundation's strategic planning focuses on key areas of its work with the aim of addressing the key issues of poverty alleviation, poor healthcare, education and a holistic impact on the quality of life through social development programs.
            </p>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
        <?php   
            $sql = "SELECT * FROM `images` WHERE img_for = 'logoImg'";
            $result = $conn->query($sql);
            if (isset($result->num_rows) && $result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                    <img src="images/other/8.png" alt="/images/other/8.png" class="img-fluid" height="300" srcset="">
                <?php 
                }
            } 
        ?>
        </div>
    </div>
    <!-- <hr class="about-divider"> -->
</div>
<div class="container">
    <div class="row margin-b">
        <div class="col-md-12 text-center">
            <h3 class="updates-heading">Latest <span class="heading-text">Update</span></h3>
            <img src="images\title-bottom.png" alt="">
            <p class="text-uppercase">Our charity help those people who have no hope</p>
        </div>
        <div class="container-fluid updates-area">
            <section class="latest-updates slider">
                <?php 
                    $sql = 'SELECT `image`,`about`,`description`,`speaker`,`date` FROM `updates` ORDER BY `id` DESC';
                    $result = $conn->query($sql);
                    if(isset($result->num_rows)&&$result->num_rows>0){
                        while($rows=$result->fetch_assoc()){?>
                            <div class="card slide" style="width: 18rem;min-height: 35rem;border-radius:.5rem;">
                                <img src="<?= $rows['image']; ?>" class="card-img-top update-cards" alt="<?= $rows['about']; ?>" height="400" >
                                <div class="card-body" style="padding:1rem 1.50rem 0;">
                                    <h5 class="card-title text-center"><?= $rows['about']; ?></h5>
                                    <div class="row">
                                            <p><?= $rows['speaker']; ?></p>
                                            <div class="text-right float-left">
                                                <?php #if($rows['links']!=''){?>
                                                    <!-- <a class="stretched-link" href="<?= $rows['links']; ?>" target="_blank">Watch the Webiner here</a> -->
                                                <?php #} ?>
                                            </div>
                                    </div>
                                    <div class="row text-right d-flex justify-content-end align-items-end">
                                            <p><?= $rows['date']; ?></p>
                                    </div>
                                </div>
                            </div>
                <?php   }
                    } ?>
            </section>
        </div>
    </div>
</div>
<div class="container-fluid my-5 margin-b" id="checks">
    <div class="overlay"></div>
    <div class="milestone row text-center d-flex align-items-center" id="home-page">
        <div class="col-12">
            <p class="counter-heading">lives impacted</p>
            <div class="counter" >1 Lakh +</div>
            <!-- <div>0</div> -->
        </div>
        <div class="col-12">
            <p class="counter-heading">states</p>
            <div class="counter">6</div>
        </div>
        <div class="col-12">
            <p class="counter-heading">partners</p>
            <div class="counter">4</div>
        </div>
        <div class="col-12">
            <p class="counter-heading">Members</p>
            <div class="counter" >10+</div>
        </div>
    </div>
</div>
<section>
    <div class="container margin-t margin-b">
        <div class="text-center">
            <h3>Our <span class="heading-text">Partners</span></h3>
            <img src="images\title-bottom.png" alt="">
        </div>
        <div class="logo-area">
            <section class="logos slider">
                <?php 
                    $sql='SELECT `name`,`logo` FROM partners';
                    $result = $conn->query($sql);
                    if(isset($result->num_rows)&&$result->num_rows>0){
                        while($rows=$result->fetch_assoc()){ ?>
                            <div class="slide d-flex justify-content-center">
                                <div class="d-flex  align-self-center">
                                    <img src="<?= $rows['logo']; ?>" alt="<?= $rows['name']; ?>" >
                                </div>
                                
                            </div>
                <?php   }
                    }
                ?>
            </section>
        </div>
    </div>
</section>





<?php include("footer.php"); ?>
