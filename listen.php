<?php
include "includes/header.php";
?>

<div class="container main">
  <div class="row">
    <div class="col-lg-8" align="center">
       

       <?php
       //Dispaly details 
        include 'dbConfig.php';
       $sql = 'SELECT * FROM audiofiles WHERE id ='.$_GET['data'];
       $result = $db->query($sql);
       
       if ($result->num_rows > 0) {
            
           // output data of each row
           while($row = $result->fetch_assoc()) {
            echo '<p>'.$row["episode_name"]."</p>";
            $audioURL = 'uploads/'.$row["file_name"];
            echo '<article>'.$row["episode_details"]."</article>";
            }
        }
        else{ ?>
            <p>no data found</p>
        <?php } ?>
    </div>
    <div class="col-sm-4" align="center">
        <p>EPISODES</p>
        <?php
         include 'dbConfig.php';
        $sql = "SELECT episode_name,id FROM audiofiles";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
               echo '<form action="listen.php" method="get"> <button name="data" class="btn btn-outline-secondary" type="submit" value="'.$row["id"].'">'.$row["episode_name"].'</button>';
               echo "<p id='styell'>__________________________</p>";
            }
            
        } else {
            echo "0 results";
          }
          $db_close
         ?>
    </div>
</div>
<div class="container fixed-bottom">
    <div class="row">
        <?php
            //Dispaly details 
            include 'dbConfig.php';

            $sql = 'SELECT * FROM audiofiles WHERE id ='.$_GET['data'];
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
                    
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $audioURL = 'uploads/'.$row["file_name"];
                    ?>
                    <audio autoplay controls class="col-xl">
                    <source src="<?php echo $audioURL; ?>" type="audio/mpeg">
                    </audio>
                    <?php 
                    }
                }
                else{ ?> 
                    <p>no data found</p>
                <?php }
                 $db_close
                ?>
    </div>
<div>
<?php 

include "includes/footer.php" 
?>
