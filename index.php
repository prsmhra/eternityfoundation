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
    <div class="carousel-inner ">
        <?php 
            $sql = 'SELECT `img_link`,`img_description` FROM `images` WHERE `img_for`="carousel" ';
            $result = $conn->query($sql);
            if(isset($result->num_rows)&&$result->num_rows>0){
                for($i = 0; $i<$rows = $result->fetch_assoc();$i++){ ?>
                    <div class="carousel-item <?= $i==0?'active':'' ?>">
                        <img src="<?= $rows['img_link']; ?>" width = "100%" height = "750" class="image img-fluid" alt="<?= $rows['img_description']; ?>" srcset="">
                        <div class="overlay"></div>
                        <!-- <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                        </div> -->
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
<div class="container">
    <div class="row about-section">
        <div class="col-md-7 about text-center">
            <h3 class="about-heading">About <span class="heading-text">Us</span></h3>
            <img src="images\title-bottom.png" alt="">
            <p class="lead about-content">
                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
            </p>
        </div>
        <div class="col-md-5 d-flex align-items-center">
        <?php   
            $sql = "SELECT * FROM `images` WHERE img_for = 'logoImg'";
            $result = $conn->query($sql);
            if (isset($result->num_rows) && $result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                    <img src="<?php echo $row["img_link"]; ?>" alt="<?php echo $row["img_description"]?>" class="img-fluid img-card" height="300" srcset="">
                <?php 
                }
            } 
        ?>
        </div>
    </div>
    <hr class="about-divider">
    <div class="row margin-b">
        <div class="col-md-12 text-center mb-3">
            <h3 class="updates-heading">Latest <span class="heading-text">Update</span></h3>
            <img src="images\title-bottom.png" alt="">
            <p class="text-uppercase">Our charity help those people who have no hope</p>
        </div>
        <div class="container-fluid updates-area">
            <section class="latest-updates slider">
                <?php 
                    $sql = 'SELECT `image`,`about` FROM `updates`';
                    $result = $conn->query($sql);
                    if(isset($result->num_rows)&&$result->num_rows>0){
                        while($rows=$result->fetch_assoc()){?>
                            <div class="card slide" style="width: 18rem;">
                                <img src="<?= $rows['image']; ?>" class="card-img-top update-cards" alt="<?= $rows['about']; ?>" height="500" >
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
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
    <div class="milestone row text-center d-flex align-items-center">
        <div class="col-12">
            <p class="counter-heading">Eye's Screening</p>
            <div class="counter" data-target="1900">0</div>
        </div>
        <div class="col-12">
            <p class="counter-heading">Cataract Cases Found</p>
            <div class="counter" data-target="331">0</div>
        </div>
        <div class="col-12">
            <p class="counter-heading">Pterygium Cases Found</p>
            <div class="counter" data-target="95">0</div>
        </div>
        <div class="col-12">
            <p class="counter-heading">Surgeries Done</p>
            <div class="counter" data-target="321">0</div>
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
                                <img src="<?= $rows['logo']; ?>" alt="<?= $rows['name']; ?>">
                            </div>
                <?php   }
                    }
                ?>
            </section>
        </div>
    </div>
</section>





<?php include("footer.php"); ?>
