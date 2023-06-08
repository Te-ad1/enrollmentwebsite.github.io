<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pdf_files'])) {
    $uploadDirectory = 'uploads/';

    // Get the selected PDF files from the form
    $selectedFiles = $_POST['pdf_files'];

    foreach ($selectedFiles as $filename) {
        $filePath = $uploadDirectory . $filename;

        // Set appropriate headers based on file type
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
        $contentType = '';
        if ($fileExtension === 'pdf') {
            $contentType = 'application/pdf';
        } elseif (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
            $contentType = 'image/' . $fileExtension;
        }

        // Send the file to the user for download
        header("Content-type: $contentType");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Pragma: no-cache");
        header("Expires: 0");
        readfile("$filePath");
    }
} else {
    echo "No PDF files selected.";
}
?>
