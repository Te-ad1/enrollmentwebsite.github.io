<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadDirectory = 'STEM/';

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $filePath = $uploadDirectory . $fileName;

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        $message = "File uploaded successfully!";
    } else {
        $message = "Failed to upload the file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("img/backgroundpic.png");
        }

        .container {
            width: 40%;
            background-color: #F49D1A;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            
        }
        
        .label{
            color: white;
        }
        
        .container h1 {
            text-align: center;
            color: ;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="file"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #4CAF50;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 30%;
            font-size: 30px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: white; /* Add white color to the label */
        }
        
        .message {
            text-align: center;
            margin-top: 20px;
            color: #009933;
        }
        
        /* Additional CSS for the form background color */
        .container form {
            background-color: #F49D1A;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Upload enrollment Form</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file"><i class="fas fa-file-upload"></i> INSERT YOUR PDF FORM:</label>
                <input type="file" name="file" id="file">
            </div>
            <div class="form-group">
                <input type="submit" value="Upload">
            </div>
        </form>
    </div>
    

</body>
</html>
