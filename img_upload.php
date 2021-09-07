<?php
error_reporting(0);
require_once '../../db_cred.inc.php';
?>
<?php
  $msg = "";
  require_once '../../db_cred.inc.php';
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $image_filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "testfolder_for_images/".$filename;
          
    //$conn = mysqli_connect("localhost", "root", "", "photos");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO users (image_filename) VALUES ('$image_filename')";
  
        // Execute query
        mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($conn, "SELECT * FROM users");
while($data = mysqli_fetch_array($result))
{
  
      ?>
<img src="<?php echo $data['Filename']; ?>">
  
<?php
}
?>
  
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">
  
  <form method="POST" action="" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>
        
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>