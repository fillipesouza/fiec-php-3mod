<?php   
if (isset($_FILES['myfile'])) {
    $target_dir = "../imagens/";
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    print($target_file . "\n");
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    print("OI");
    if (isset($_POST["myfile"])) {
        $check = getimagesize($_FILES["myfile"]["tmp_name"]);
        
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
    } else {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
        } 
    }
}



?>