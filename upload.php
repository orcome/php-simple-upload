<h3> Upload Dokumen </h3>

<form action="" method="POST" enctype="multipart/form-data">
    <b> File Upload </b>
    <input type="file" name="file_upload_name" accept=".xlsx">
    <input type="submit" name="process" value="Upload">
</form>

<?php

    if (isset($_POST['process'])) {
        $directory = "temp/";
        $fileName = $_FILES['file_upload_name']['name'];
        $files = glob('temp/*');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        move_uploaded_file($_FILES['file_upload_name']['tmp_name'], $directory.$fileName);

        echo "<b>File berhasil diupload";
    }

?>