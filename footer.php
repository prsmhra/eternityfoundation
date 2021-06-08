<footer id="footer">
    <div class="container-fluid bg-dark pb-3">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="contact-div">
                    <h3>Work with Us</h3>
                    <p class="lead">want to work with as full time or internship?</p></p>
                    <!-- Button trigger modal -->

                    <button type="button" class="btn btn-outline-primary mt-5" data-toggle="modal" data-target="#exampleModal">
                    Join Us
                    </button>

                    <!-- Modal -->
                    <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <?php 
                                    $sql = "SELECT * FROM `images` WHERE img_for = 'logoImg'";
                                    $result = $conn->query($sql);
                                    if (isset($result->num_rows) && $result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) { ?>
                                            <a class="navbar-brand" href="index.php"><img src="<?php echo $row["img_link"]; ?>" alt="<?php echo $row["img_description"]?>"  width="100" height="40" loading="lazy"></a>
                                        <?php
                                        }
                                    }
                                ?>
                                <h5 class="modal-title align-middle ml-5 mt-3" id="exampleModalLabel">Become a Member </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="contact-form">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" required>
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone No.</label>
                                        <input type="tel" class="form-control" id="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" rows="3"></textarea>
                                    </div>
                                    <!-- <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-outline-primary" onclick="SendEmail()" value="Send An Email">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 locations-div text-center">
                <h3>Our <span class="heading-text">locations</span> </h3>
                <div class="row mt-5">
                    <div class="col-6">
                        <span><i class="fas fa-map-marker-alt fa-2x"></i></span>
                        <p class="lead mt-2">East Delhi, New Delhi</p>
                    </div>
                    <div class="col-6">
                        <span><i class="fas fa-map-marker-alt fa-2x"></i></span>
                        <p class="lead mt-2">Vishakapatnam(Vizag),<br/> Andhra Pradesh</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="about-divider bg-secondary bg-gradient ">
        <div class="row social-icons">
            <div class="col-md-5">
                <a class="social-btn" href="#">
                    <span class="p-2">
                        <i class="fab fa-facebook"></i>
                    </span>
                </a>
                <a class="social-btn" href="#">
                    <span class="p-2">
                        <i class="fab fa-twitter"></i>
                    </span>
                </a>
                <a class="social-btn" href="#">
                    <span class="p-2">
                        <i class="fab fa-linkedin"></i>
                    </span>
                </a>
                <a class="social-btn" href="#">
                    <span class="p-2">
                        <i class="fab fa-instagram"></i>
                    </span>
                </a>
                <a class="social-btn" href="#">
                    <span class="p-2">
                        <i class="fab fa-youtube-square"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <h3 class="send_info"></h3>
</footer>
<?php $conn->close(); ?>

    <script src="asset\js\jquery\jquery-3.5.1.min.js"></script>
    <script src="asset\js\bootstrap\bootstrap.bundle.min.js"></script>
    <script src="asset\js\slick\slick.min.js"></script>
    <script src="asset\js\vanila\main.js"></script>
</body>
</html>