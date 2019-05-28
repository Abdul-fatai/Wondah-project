<?php

if (isset($_POST['submit'])){
    include_once 'dbh.php';
    $Sname = filter_input(INPUT_POST, 'sname', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $street= filter_input(INPUT_POST, 'streetstreet', FILTER_SANITIZE_STRING);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
    $postal = filter_input(INPUT_POST, 'postal', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $select= filter_input(INPUT_POST, 'select', FILTER_SANITIZE_STRING);
    $massage = filter_input(INPUT_POST, 'massage', FILTER_SANITIZE_STRING);
    $file = $_FILES["file"];

    $fileName = $_FILES['file'] ['name'];
    $fileTmpName = $_FILES['file'] ['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('doc', 'pdf', 'png', 'jpg', 'jpeg');

    // Error handlers
    // Check for empty fields

    if (empty($Same)) {
        header("Location: ../job.php?errorempty");
        die();
    } elseif (empty($name)){
        header("Location: ../job.php?errorempty");
        die();
    }elseif (empty($street)){
        header("Location: ../job.php?errorempty");
        die();
    }elseif (empty($country)){
        header("Location: ../job.php?errorempty");
        die();
    }elseif (empty($postal)){
        header("Location: ../job.php?errorempty");
        die();

    }elseif (empty($tel)){
        header("Location: ../job.php?errorempty");
        die();
    }elseif(empty($email)){
        header("Location: ../job.php?errorempty");
        die();
    }elseif(empty($select)){
        header("Location: ../job.php?errorempty");
        die();

    }elseif(empty($massage)){
        header("Location: ../job.php?errorempty");
        die();
    }else{
        // check if email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../job.php?email");
            die();
        }else {
            // Uploading image
            if(in_array($fileActualExt, $allowed)){
                if ($fileError === 0) {
                    if ($fileSize < 1000000) {
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = '../uploads/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,  $fileDestination);

                        $date_fill = Date('Y-m-d h:i:sa');
                        // insert form into database
                        $sql = "INSERT INTO application (surname, last_name, street, country, postal_code, tel, email, worker_field, img_name, massage,  date_fill) VALUES('$Sname', '$name', '$street', '$country', '$postal', '$tel', '$email', '$select', '$massage', '$fileNameNew', '$date_fill');";
                        mysqli_query($conn, $sql);
                        header("Location: ../index.php?success");
                        die();
                    }else {
                        echo "Your file is too big!";
                    }
                }else {
                    echo "they was a problem uploading your file";
                }

            }else {
                echo "You can not upload file of this type";
            }
        }
    }
}
else {
    header("Location: ../job.php?error");
    die();
}





?>