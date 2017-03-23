<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SaaS Nomad</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("SELECT * FROM 'sellers'");

// Assign Result Set
$sellers = $db->resultset();
?>
<body style="background-color:rgba(0,0,0,0.1);">
<div class="row">
    <div class="col-xs-2 col-md-3"></div>
    <div class="col-xs-8 col-md-6">
        <h1 style="margin-top:50px;font-weight:bold;">Admin Area</h1>
        <h2>Sellers</h2>
        <table class="table table-hover" style="margin:50px auto;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Industry</th>
                    <th>MRR</th>
                    <th>Employees</th>
                    <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sellers as $seller) : ?>
                <tr>
                    <td><?php echo $seller->seller_name; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-xs-2 col-md-3"></div>
</div>
<div class="row">
    <div class="col-xs-2 col-md-3"></div>
    <div class="col-xs-8 col-md-6">
        <h2>Buyers</h2>
        <table class="table table-hover" style="margin:50px auto;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xs-2 col-md-3"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
