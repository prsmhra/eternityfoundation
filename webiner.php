<?php include('header.php') ?>
<section id='webiner'>
    <div class="container">
        <div class="text-center  margin-b">
            <h3><span class="heading-text">Webiners</span></h3>
            <img src="images\title-bottom.png" alt="">
        </div>
        <?php
            $sql = 'SELECT * FROM `updates` where `for` = 0 ';
            $result = $conn->query($sql);
            if(isset($result->num_rows)&&$result->num_rows>0){
                for($i = 1; $i <= $rows = $result->fetch_assoc();$i++){?>
                    <div class="row webiner-list margin-b margin-t">
                        <div class="col-12 col-md-5 <?php echo $rows['id']%2==0 ?  'order-2' :  'order-1';?>"><img src="<?= $rows['image']; ?>" alt="<?= $rows['about'];?>" srcset=""></div>
                        <div class="<?php echo $rows['id']%2==0 ?  'order-1' :  'order-2';?> col-12 col-md-7 mt-3 d-flex flex-column align-self-center">
                            <h5 class="text-center"><?= $rows['about']; ?></h5>
                            <p class="lead text-justify"><?= $rows['description'];?></p>
                            <?php if($rows['links']!=''){?>
                                <a class="stretched-link" href="<?= $rows['links']; ?>" target="_blank">Watch the Webiner here</a>
                            <?php } ?>
                        </div>
                    </div>     
                    <hr class='about-divider'>       
        <?php   }
            }
        ?>
    </div>
</section>


<?php include('footer.php') ?>