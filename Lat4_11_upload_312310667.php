<?php
$target_dir = "uploads/";

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if (isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error'] === UPLOAD_ERR_OK) {
    $target_path = $target_dir . basename($_FILES['uploadedfile']['name']);

    // Validasi tipe file
    $allowed_types = ['image/jpeg', 'image/png', 'application/pdf'];
    if (!in_array($_FILES['uploadedfile']['type'], $allowed_types)) {
        die("Invalid file type!");
    }

    // Validasi ukuran file
    if ($_FILES['uploadedfile']['size'] > 5000000) { // 5MB
        die("File size exceeds the limit!");
    }

    // Pindahkan file
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
        echo "The file " . htmlspecialchars(basename($_FILES['uploadedfile']['name'])) . " has been uploaded.";
    } else {
        echo "There was an error uploading the file, please try again!";
    }
} else {
    echo "No file was uploaded or there was an error during the upload process.";
}
?>
