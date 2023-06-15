<?php
  /* ----------- File upload ---------- */

  if (isset($_POST['submit'])) {
    //check if file was uploaded
    if(!empty($_FILES['upload']['name']));
  } else {
    //if there is no file uploaded
    $message = '<p style="color: red;"> Please choose a file</p>';
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