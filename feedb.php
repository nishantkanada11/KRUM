<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "", "krum");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Collect data from the form using POST
$name        = $_POST['fname'];
$email       = $_POST['email'];
$countryCode = $_POST['country_code'];
$mobile      = $_POST['mobile'];
$cname       = $_POST['cname'];
$product     = $_POST['product'];
$plan        = $_POST['purchase_plan'];
$requirement = $_POST['requirement'];


// Insert data into the database
$cmd = "INSERT INTO regg (name, mobile, email, company, product, purchase_plan, requirement) 
        VALUES ('$name', '$mobile', '$email', '$cname', '$product', '$plan', '$requirement')";

// Execute the query
$result = mysqli_query($con, $cmd);

// Check result
if ($result) {
    header("Location: index.html?status=success");
    exit();
} else {
    echo "Error: " . mysqli_error($con);
}
?>
