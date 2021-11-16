<?php include("header.php"); ?>

<section  id="about_head">
    <div class="container-fluid" id="about-img">
        <div class="overlay"></div>
        <div class="about-text ">
            <h1 class="display-1">About</h1>
            <!-- <h2>never stop dreaming</h2> -->
        </div>
    </div>
</section>
<section id="about">
    <div class="container mt-5">
        <div class="row ">
            <div class="col-12 text-center">
                <h3 class="about-heading">About <span class="heading-text">Us</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-10 text-center">
                <p class="lead text-justify">
                    Eternity Foundation (EF) is a registered non-profit organization established in 2019. Working with the tag line 'Never Stop Dreaming'. 
                    The main areas of intervention for the organization are; Education, Health, Livelihoods, and Sustainable Environment.
                    Eternity Foundation's strategic planning focuses on key areas of its work with the aim of addressing the key issues of poverty alleviation, 
                    economic inequalities, and holistic impact on the quality of life through social development programs.
                    EF’s programs are majorly implemented in the most rural and under-developed areas in the country. Over the years, Eternity Foundation has 
                    expanded its intervention programs through volunteers. The interventions implemented by the foundation range from grass root level to national 
                    level programs. Currently, Eternity Foundation is working in 6 States; Delhi, Andhra Pradesh, Uttar Pradesh, Himachal Pradesh, Bihar, and Rajasthan.
                    Eternity Foundation has a clear social purpose and an explicit commitment to the idea that education can contribute to social change. 
                    The Eternity Foundation aspires to achieve this through the development of talent and the creation of knowledge which can facilitate systemic 
                    change in education and allied development areas. The Eternity Foundation is committed to creating an exceptional learning environment.
                </p>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>
    </div>
</section>
<section id="vision m-5 p-5">
    <div class="container-fluid cont">
        <div class="overlay"></div>
        <div class="row">
            <div class="col">
                <div class="v-div text-center shadow-lg p-3 mb-5 rounded">
                    <h2 class="mt-5 px-5 pt-2 display-4 text-light"><strong>Our Vision</strong></h2> 
                    <p class="text-light p-5 v-text">To create a self-healing society where every individual can access the services and develops self-compassion to make society better.</p>
                </div>
            </div>
            <div class="col">
                <div class="v-div text-center shadow-lg p-3 mb-5 rounded">
                    <h2 class="mt-5 px-5 pt-2 display-4 text-light"><strong>Our Mission</strong></h2> 
                    <p class="text-light p-5 v-text">We are committed to enhancing the dignity and quality of the lives of women, youth, children, veterans, families and communities by helping them reach their full potentials.</p>
                </div>
            </div>
        </div>
        <!-- <h2 class="mt-5 display-4 vision-heading">Our Vision</h2>        -->
    </div>
    <!-- <div class="container-fluid"> 
        <div class="row vision-bottom">
            <div class="col-2"></div>
            <div class="col-8">
                <p class="text-light text-justify text-center">To create a self-healing society where every individual can access the services and develops self-compassion to make society better.</p>
            </div>
            <div class="col-2"></div>
        </div>
    </div> -->
</section>
<section id="team">
    <div class="container my-5 py-5 text-center">
        <div class="row mb-5">
            <div class="col">
                <h3 class="mb-3">Our <span class="heading-text">Team</span></h3>
                <img src="images\title-bottom.png">
            </div>
        </div>
        <div class="row">
        <?php
            $sql = 'SELECT `name`,`image`,`about` FROM `team`';
            $result = $conn->query($sql);
            if(isset($result->num_rows)&& $result->num_rows>0){
                while($row = $result->fetch_assoc()){?>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-img">
                            <img src="<?= $row['image']; ?>" alt="<?= $row['image']; ?>" class="mx-auto d-block w-100 " height="350">
                            <div class="team-info">
                                <h5><?= $row['name']; ?></h5>
                                <p><?= $row['about']; ?></p>
                                <div class="gradient-hover"></div>
                            </div>
                        </div>
                    </div>
        <?php   }
            }
        ?>
            <!-- <div class="col-lg-4 col-md-6">
                <div class="team-img">
                    <img src="images\members\pradhan.jpg" class="mx-auto d-block w-100" >
                    <div class="team-info">
                        <h5>Sabir Khan</h5>
                        <p>member</p>
                        <div class="gradient-hover"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-img">
                    <img src="images\members\pradhan.jpg" class="mx-auto d-block w-100" >
                    <div class="team-info">
                        <h5>Sabir Khan</h5>
                        <p>member</p>
                        <div class="gradient-hover"></div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="card-body">
                        <img src="images\members\img2.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                        <h4>Sabir Khan</h4>
                        <blockquote>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, assumenda.</blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="card-body">
                        <img src="images\members\img1.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                        <h4>Mohd Arbaz Alam</h4>
                        <blockquote>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, assumenda.</blockquote>
                    </div>
                </div>
            </div> -->
        </div>
        <hr class="about-divider">
    </div>
</section>
<?php include("footer.php"); ?>