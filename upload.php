<?php
session_start();
?>

<form  class="form-signin" action="upload2oop2.php" enctype="multipart/form-data" method="post">

    Select image :<br>

    <input type="file" name="image"> <br>




    <input type="submit"  value="Upload" name="Submit1">

</form>

<input type="button" value="Logout" onClick="document.location.href='OUT.php'">

<?php if(isset($_SESSION['img'])):?>
    <img src="<?php print $_SESSION['img'];?>"><br>
<?php endif?>

<?php if(isset($uploadOk)): ?>
    <a <?php echo $uploadOk ?>> </a> <?php endif?>
