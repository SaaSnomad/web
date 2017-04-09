<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO buyers (buyer_name, buyer_email, buyer_company, buyer_location, buyer_industry) VALUES (:buyer_name, :buyer_email, :buyer_company, :buyer_location, :buyer_industry)");

// Bind Values

$db->bind(':buyer_name', $_POST['buyer_name']);
$db->bind(':buyer_email', $_POST['buyer_email']);
$db->bind(':buyer_company', $_POST['buyer_company']);
$db->bind(':buyer_location', $_POST['buyer_location']);
$db->bind(':buyer_industry', $_POST['buyer_industry']); 

if($db->execute()){
    echo "You are subscribed";
} else {
    echo "Could not process your info";
}
?>