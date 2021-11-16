<?php include('header.php'); ?>

<section class="main-section ">
    <div class="container-fluid p-5 m-1">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="images/other/donation_page_1.jpg" alt="" srcset="" id="donation_img">
                <p class="donation_page_text text-justify p-3"><strong><i>Your contribution has the power to uplift the underprivileged communities. We’re working towards a nation where its marginalized community lives a secure life, full of opportunities for growth and development. Presently, we have 4 projects running across 6 states of India, where we were able to reach a total of 1.5 Lakh individual till March 2021.</i></strong></p>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-lg-6">
                <div class="donation-form p-2 impact-story">
                    <h4 class="text-center heading-text p-2">Come, play your part. Come, donate</h4>
                    <form action="" method="POST" class="p-3">
                        <div class="form-group row">
                            <label for="donation-name" class="col-sm-2 col-form-label">Name *</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="donation-name" name="donation-name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="donation-email" class="col-sm-2 col-form-label">Email *</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" id="donation-email" name="donation-email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="donation-phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-9">
                            <input type="tel" class="form-control" id="donation-phone" name="donation-phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="donation-add" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="donation-add" name="donation-add">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="donation-dob" class="col-sm-2 col-form-label">D.O.B</label>
                            <div class="col-sm-3">
                                <select class="custom-select" name="donation-agedd">
                                    <option value="">Date</option>
                                    <?php for($i=1;$i<=31;$i++){?>
                                        <option value="<?php echo($i); ?>"> <?php echo($i); ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="custom-select" name="donation-monthdd">
                                    <option value="">Month</option>
                                    <?php for($i=1;$i<=12;$i++){?>
                                        <option value="<?php echo($i); ?>"> <?php echo($i); ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="custom-select" name="donation-yeardd">
                                    <option value="">Year</option>
                                    <?php for($i=1920;$i<=2021;$i++){?>
                                        <option value="<?php echo($i); ?>"> <?php echo($i); ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-sm-2 col-form-label">Enter Amount</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="amount" name="amount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="donation-pan" class="col-sm-2 col-form-label">PAN </label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="donation-pan" name="donation-pan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <div class="col-sm-2">Checkbox</div> -->
                            <div class="col-sm-11">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label text-justify" for="gridCheck1">
                                I give my consent for authorized representatives of Eternity Foundation to contact me occasionally by mobile and email for informing on the latest developments and updated offerings.
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn donation-btn">Donate Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="donation-text text-center mt-3">
                    <empty>
                        <strong>As per the Indian Income Tax Authority Rule, a donor is required to add PAN number in case the donor wishes to receive the 80G certificate.</strong>
                        <!-- <span class="tplx-txt-bold">To know more please sms Eternity Foundation to 56161<br>(Registration No. - 6382)</span> -->
                    </empty>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php include('footer.php'); ?>