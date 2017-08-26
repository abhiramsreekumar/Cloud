<!-- This cloud was designed and developed By Abhiram sreekumar(Random sasi)-->

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = filetype($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "THANK YOU - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo header('Location: notuploaded.php');
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo header('Location: notuploaded.php');
    $uploadOk = 0;
}

// If you want to allow more files just add the file type to this collection in both small and capital letters.
if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif" && $FileType != "mp4" && $FileType != "ico"
&& $FileType != "mp3" && $FileType != "txt" && $FileType != "TXT"
&& $FileType != "JPG" && $FileType != "PNG" && $FileType != "JPEG"
&& $FileType != "GIF" && $FileType != "MP4" && $FileType != "ICO"
&& $FileType != "MP3" && $FileType != "apk" && $FileType != "APK"
&& $FileType != "M4A" && $FileType != "m4a" && $FileType != "obb"
&& $FileType != "OBB" && $FileType != "pdf" && $FileType != "PDF"
&& $FileType != "bmp" && $FileType != "BMP" && $FileType != "avc"
&& $FileType != "3gp" && $FileType != "3GP" && $FileType != "AVC"
&& $FileType != "avchd" && $FileType != "AVCHD" && $FileType != "avi"
&& $FileType != "AVI" && $FileType != "bdm" && $FileType != "BDM"
&& $FileType != "bdmv"&& $FileType != "BDMV" && $FileType != "flv"
&& $FileType != "FLV" && $FileType != "MP3" && $FileType != "mkv"
&& $FileType != "exe" && $FileType != "mpeg4" && $FileType != "MPEG4"
&& $FileType != "mts" && $FileType != "MTS" && $FileType != "wmv"
&& $FileType != "WMV" && $FileType != "wma"
&& $FileType != "WMA" && $FileType != "zip" && $FileType != "ZIP") {
    echo header('Location: notuploaded.php');
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo header('Location: notuploaded.php');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]).header('Location: uploaded.php');
    } else {
        echo header('Location: notuploaded.php');
    }
}
?>