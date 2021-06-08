<?php include("header.php"); ?>

<section  id="about_head">
    <div class="container-fluid" id="about-img">
        <div class="overlay"></div>
        <div class="about-text text-center">
            <h1 class="display-5"><span class="span-1">Eternity</span> <span class="span-2">Foundation</span></h1>
            <h2>never stop dreaming</h2>
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
<section id="vision">
    <div class="container-fluid vision-img mt-5">
        <div class="overlay"></div>
        <div class="row">
            <div class="col-12 col-md-6 vision-text">
                <h2 class="text-white ml-5 my-5">Our Vision</h2>
                <ul class="ml-5">
                    <li class="text-white">To create a self-healing society where every individual can access the services and develops self-compassion to make society better.</li>
                    <li class="text-white">To create a self-healing society where every individual can access the services and develops self-compassion to make society better.</li>
                </ul>
            </div>
            <div class="col-12 col-md-6"></div>
        </div>
    </div>
</section>
<section id="team">
    <div class="container my-3 py-5 text-center">
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
                            <img src="<?= $row['image']; ?>" alt="<?= $row['image']; ?>" class="mx-auto d-block w-100" >
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