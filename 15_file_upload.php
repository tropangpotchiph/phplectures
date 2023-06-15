<?php
  /* ----------- File upload ---------- */

$allowed_ext = array ('png', 'jpg', 'jpeg', 'gif');

  if (isset($_POST['submit'])) {
    //check if file was uploaded
    if(!empty($_FILES['upload']['name'])) {
      /* print_r($_FILES); */
      $file_name = $_FILES['upload']['name'];
      $file_size = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];
      $target_dir = "uploads/" . $file_name;

      //separating the file name (base name) and the extension
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));

      // echo $file_ext;

      //Validate the file type/extension
      if(in_array($file_ext, $allowed_ext)){
        //Validate the file size
        if($file_size <= 1048576) {   // 1MB limit
          //Upload File
          move_uploaded_file($file_tmp, $target_dir);

          //Success message
          echo '<p style="color: green;">File uploaded!</p>';
        } else {
          echo '<p style="color: red;">File too large!</p>';
        }
      } else {
        $message = '<p style="color: red;">Invalid file type!</p>';
      }     
      
    } else {    
    $message = '<p style="color: red;"> Please choose a file</p>';
  }
  } 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload </title>
</head>
<body>
  <?php echo $message ?? null; ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">Select Image to upload: <br><br>
  <input type="file" name="upload"> <br><br>
  <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>