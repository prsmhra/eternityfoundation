<?php include('header.php'); ?>
<div class="row-1"> 
  <?php 
    $sql = "SELECT * FROM `images` WHERE `img_for` = 'covid'";
    $result=$conn->query($sql);
      if($result->num_rows>0){
        while($row = $result->fetch_assoc()){?>
          <div class="column">
            <img src="<?= $row['img_link']; ?>" style="width:100%" height="450">
          </div>
        <?php    }
      }
  ?>
</div>
<?php include('footer.php'); ?>
