<?php
include "includes/header.php";
?>
<div class="container main">
  <div class="row">
    <div class="col-lg-8" align="center">
   
    </div>
    <div class="col-sm-4" align="center">
        <?php
         include 'dbConfig.php';
        $sql = "SELECT * FROM audiofiles";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<a href="listen.php>'.$row["episode_name"]."</p> <br>";

            }
            
            
        } else {
            echo "0 results";
          }
          $db->close();
         ?>
          
    </div>
</div


<?php 
include "includes/footer.php" 
?>
