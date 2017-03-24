<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO sellers (seller_name, seller_email, seller_location, seller_industry, seller_mrr, employees) VALUES (:seller_name, :seller_email, :seller_location, :seller_industry, :seller_mrr, :employees)");

// Bind Values
$db->bind(':seller_name', $_POST['seller_name']);
$db->bind(':seller_email', $_POST['seller_email']);
$db->bind(':seller_location', $_POST['seller_location']);
$db->bind(':seller_industry', $_POST['seller_industry']);
$db->bind(':seller_mrr', $_POST['seller_mrr']);
$db->bind(':employees', $_POST['employees']);

if($db->execute()){
    echo "Offer was added";
} else {
    echo "Could not add your offer";
}
?>