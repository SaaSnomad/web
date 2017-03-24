<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO buyers (buyer_email) VALUES (:buyer_email)");

// Bind Values
$db->bind(':buyer_email', $_POST['buyer_email']);

if($db->execute()){
    echo "You are subscribed";
} else {
    echo "Could not process your info";
}
?>