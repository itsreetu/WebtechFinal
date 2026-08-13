<?php


if (
    !isset($_GET["applicant_id"]) ||
    !isset($_GET["name"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["phone"]) ||
    !isset($_GET["gender"]) ||
    !isset($_GET["position"]) ||
    !isset($_GET["qualification"]) ||
    !isset($_GET["address"]) ||
    !isset($_GET["cv"])
) {

    echo "<h2>Invalid Result Request!</h2>";
    echo "<p>No application information was found.</p>";

    exit();
}


$applicant_id = $_GET["applicant_id"];
$name         = $_GET["name"];
$email        = $_GET["email"];
$phone        = $_GET["phone"];
$gender       = $_GET["gender"];
$position     = $_GET["position"];
$qualification = $_GET["qualification"];
$address      = $_GET["address"];
$cv           = $_GET["cv"];



$request_applicant_id = $_REQUEST["applicant_id"] ?? "";
$request_name = $_REQUEST["name"] ?? "";


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Application Result</title>


</head>

<body>

<div class="result-container">

    <h1>APPLICATION SUCCESSFUL</h1>

    <div class="details">

        <p>
            <span class="label">Applicant ID:</span>
            <?php echo htmlspecialchars($applicant_id); ?>
        </p>

        <p>
            <span class="label">Name:</span>
            <?php echo htmlspecialchars($name); ?>
        </p>

        <p>
            <span class="label">Email:</span>
            <?php echo htmlspecialchars($email); ?>
        </p>

        <p>
            <span class="label">Phone:</span>
            <?php echo htmlspecialchars($phone); ?>
        </p>

        <p>
            <span class="label">Gender:</span>
            <?php echo htmlspecialchars($gender); ?>
        </p>

        <p>
            <span class="label">Job Position:</span>
            <?php echo htmlspecialchars($position); ?>
        </p>

        <p>
            <span class="label">Qualification:</span>
            <?php echo htmlspecialchars($qualification); ?>
        </p>

        <p>
            <span class="label">Address:</span>
            <?php echo htmlspecialchars($address); ?>
        </p>

    </div>


    <div class="cv">

        <strong>Uploaded CV:</strong>

        <?php echo htmlspecialchars($cv); ?>

    </div>


    <p class="success">
        Application submitted successfully.
    </p>


    <hr>

    <p>
        <strong>$_REQUEST Applicant ID:</strong>
        <?php echo htmlspecialchars($request_applicant_id); ?>
    </p>

    <p>
        <strong>$_REQUEST Name:</strong>
        <?php echo htmlspecialchars($request_name); ?>
    </p>


    <a href="index.php" class="new-application">
        Submit Another Application
    </a>

</div>

</body>

</html>