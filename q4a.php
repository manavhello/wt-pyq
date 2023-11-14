<?php
$message = "No image has been uploaded.";

if (isset($_POST['submit'])) {
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['file']['name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_tmp = $_FILES['file']['tmp_name'];
  
    if (!in_array($file_ext, $allowed_ext)) {
        $message = "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
    } else {
        $upload_directory = "uploads/";
        $upload_path = $upload_directory . $file_name;

        if (file_exists($upload_path)) {
            $message = "Error: File already exists.";
        } else {
            move_uploaded_file($file_tmp, $upload_path);
            $message = "Image has been successfully uploaded.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        Select a JPG, GIF, PNG, or TIF File: <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>

    <p><?php echo $message; ?></p>
</body>
</html>
