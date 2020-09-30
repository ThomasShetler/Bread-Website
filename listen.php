<?php
include "includes/header.php";
?>
<div class="container main">
  <div class="row">
    <div class="col-lg-8" align="center">
       <h3> Episode Info </h3>
       
       <?php
       //Dispaly details 
        include 'dbConfig.php';
       $_GET['data'];
       $sql = 'SELECT * FROM audiofiles WHERE id ='.$_GET['data'];
       $result = $db->query($sql);
       if ($result->num_rows > 0) {
            
           // output data of each row
           while($row = $result->fetch_assoc()) {
            echo '<p>'.$row["episode_name"]."</p>";
            $audioURL = 'uploads/'.$row["file_name"];
            ?>
            <audio controls>
            <source src="<?php echo $audioURL; ?>" type="audio/mpeg">
            </audio>
            <?php }
        }
        else{ ?>
            <p>no data found</p>
        <?php } ?>
    </div>
    <div class="col-sm-4" align="center">
        <?php
         include 'dbConfig.php';
        $sql = "SELECT episode_name,id FROM audiofiles";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<p>'.$row["episode_name"]."</p>";
               
               echo '<form action="listen.php" method="get"> <button name="data" type="submit" value="'.$row["id"].'">Listen</button> ';
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
