<?php 
include "includes/header.php"
?>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="text" name="episodename" placeholder="episode name">
    <textarea name="details" rows="10" cols="30"></textarea>
    <input type="submit" name="submit" value="Upload">
</form>


<?php 
include "includes/footer.php"
?>

