<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO sellers (seller_name, seller_email, seller_role, seller_country, seller_company, seller_product, seller_industry, seller_description, seller_mrr, seller_growth, seller_employees) VALUES (:seller_name, :seller_email, :seller_role, :seller_country, :seller_company, :seller_product, :seller_industry, :seller_description, :seller_mrr, :seller_growth, :seller_employees)");

// Bind Values
$db->bind(':seller_name', $_POST['seller_name']);
$db->bind(':seller_email', $_POST['seller_email']);
$db->bind(':seller_role', $_POST['seller_role']);
$db->bind(':seller_country', $_POST['seller_country']);
$db->bind(':seller_company', $_POST['seller_company']);
$db->bind(':seller_product', $_POST['seller_product']);
$db->bind(':seller_industry', $_POST['seller_industry']);
$db->bind(':seller_description', $_POST['seller_description']);
$db->bind(':seller_mrr', $_POST['seller_mrr']);
$db->bind(':seller_growth', $_POST['seller_growth']);
$db->bind(':seller_employees', $_POST['seller_employees']);

if($db->execute()){
    echo "Your application has been successfully sent for review. We will get back to you within 24 hours. ";
} else {
    echo "Could not add your offer";
}
?>