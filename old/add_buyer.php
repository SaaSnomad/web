<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO ajax2 (buyer_name, buyer_email) VALUES (:buyer_name, :buyer_email)");

// Bind Values

$db->bind(':buyer_name', $_POST['buyer_name']);
$db->bind(':buyer_email', $_POST['buyer_email']); 

if($db->execute()){
    echo "You are subscribed";
} else {
    echo "Could not process your info";
}
?>