<?php


if ($_SERVER["REQUEST_METHOD"] != "POST") {

    echo "<h2>Invalid Request!</h2>";
    echo "<p>Please submit the application form using POST method.</p>";

    exit();
}
$applicant_id = trim($_POST["applicant_id"] ?? "");
$name         = trim($_POST["name"] ?? "");
$email        = trim($_POST["email"] ?? "");
$phone        = trim($_POST["phone"] ?? "");
$password     = $_POST["password"] ?? "";
$gender       = $_POST["gender"] ?? "";
$position     = $_POST["position"] ?? "";
$qualification = trim($_POST["qualification"] ?? "");
$address      = trim($_POST["address"] ?? "");


$errors = array();



if ($applicant_id == "") {
    $errors[] = "Applicant ID is required.";
}



if ($name == "") {
    $errors[] = "Name is required.";
}



if ($email == "") {

    $errors[] = "Email is required.";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errors[] = "Please enter a valid email address.";
}



if ($phone == "") {

    $errors[] = "Phone number is required.";

} elseif (!preg_match("/^[0-9]{11}$/", $phone)) {

    $errors[] = "Phone number must contain exactly 11 digits.";
}



if ($password == "") {

    $errors[] = "Password is required.";

} elseif (strlen($password) < 6) {

    $errors[] = "Password must contain at least 6 characters.";
}



if ($gender == "") {

    $errors[] = "Please select your gender.";
}



if ($position == "") {

    $errors[] = "Please select a job position.";
}



if ($qualification == "") {

    $errors[] = "Qualification is required.";
}


if ($address == "") {

    $errors[] = "Address is required.";
}



if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] == UPLOAD_ERR_NO_FILE) {

    $errors[] = "Please upload your CV.";

} else {

    $cv = $_FILES["cv"];


    if ($cv["error"] != UPLOAD_ERR_OK) {

        $errors[] = "There was an error uploading the CV.";

    } else {


        $file_name = $cv["name"];

        $file_extension = strtolower(
            pathinfo($file_name, PATHINFO_EXTENSION)
        );

        $allowed_extensions = array(
            "pdf",
            "doc",
            "docx"
        );

        if (!in_array($file_extension, $allowed_extensions)) {

            $errors[] =
                "Invalid CV format. Only PDF, DOC and DOCX files are allowed.";
        }


        $max_size = 2 * 1024 * 1024;

        if ($cv["size"] > $max_size) {

            $errors[] =
                "CV file size must not exceed 2 MB.";
        }
    }
}



if (count($errors) > 0) {

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";

    echo "<title>Application Failed</title>";

    echo "<style>

            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                padding: 40px;
            }

            .error-box {
                width: 650px;
                margin: auto;
                background: white;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.15);
            }

            h1 {
                color: #c62828;
            }

            li {
                margin-bottom: 10px;
            }

            a {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 18px;
                background: #1976d2;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }

          </style>";

    echo "</head>";

    echo "<body>";

    echo "<div class='error-box'>";

    echo "<h1>APPLICATION FAILED!</h1>";

    echo "<p>Please correct the following errors:</p>";

    echo "<ul>";

    foreach ($errors as $error) {

        echo "<li>" . htmlspecialchars($error) . "</li>";
    }

    echo "</ul>";

    echo "<a href='index.php'>Go Back to Application Form</a>";

    echo "</div>";

    echo "</body>";

    echo "</html>";

    exit();
}



$upload_directory = "uploads/";

if (!is_dir($upload_directory)) {

    mkdir($upload_directory, 0777, true);
}


$original_name = $_FILES["cv"]["name"];

$extension = strtolower(
    pathinfo($original_name, PATHINFO_EXTENSION)
);



$new_file_name =
    "CV_" . uniqid() . "." . $extension;



$destination =
    $upload_directory . $new_file_name;


if (!move_uploaded_file(
        $_FILES["cv"]["tmp_name"],
        $destination
    )) {

    echo "<h2>Application Failed!</h2>";
    echo "<p>Unable to save the uploaded CV.</p>";

    exit();
}


$get_data = array(

    "applicant_id" => $applicant_id,

    "name" => $name,

    "email" => $email,

    "phone" => $phone,

    "gender" => $gender,

    "position" => $position,

    "qualification" => $qualification,

    "address" => $address,

    "cv" => $new_file_name
);



$query_string = http_build_query($get_data);


header("Location: result.php?" . $query_string);

exit();

?>