<!DOCTYPE html>
<html lang="en" class="gr__mdbootstrap_com">

<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome!</title>
    <link rel="icon" type="image/svg"  href="img/logo.png"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet"> 
    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">  
    <!-- Listing Widget -->
    <link href="css/card.css" rel="stylesheet">  
    <!-- Google Font: Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<style>
    body {
        font-weight:100;
    }
    .container-fluid {
        max-width:2500px;
    }
    option{
        color:#777;
    }
</style>
<body> 
 
  <!-- Main -->
   <div class="container-fluid"> 
        <header style="height:13vh;">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12" style="height:100%;display: flex;align-items: center;padding-left:0;">

                <p class="mb-1 text-muted logo" style="font-size:25px;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" height="5vh" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                <g>
                    <g id="Ellipse_4_copy_5">
                        <g>
                            <path d="M319.305,505.565c14.688,0,26.608-11.921,26.608-26.609c0-14.701-11.907-26.608-26.608-26.608     c-14.702,0-26.609,11.907-26.609,26.608C292.696,493.645,304.603,505.565,319.305,505.565z M518.869,106.435     c-14.701,0-26.608,11.908-26.608,26.609c0,14.688,11.907,26.609,26.608,26.609c14.688,0,26.609-11.921,26.609-26.609     C545.479,118.342,533.571,106.435,518.869,106.435z M518.869,39.913c-46.911,0-85.6,34.711-92.065,79.826H185.196     c-6.466-45.115-45.168-79.826-92.066-79.826C41.696,39.913,0,81.609,0,133.043s41.696,93.13,93.13,93.13     c12.786,0,24.919-2.647,36.001-7.317L252.078,414.63c-16.019,16.71-25.904,39.341-25.904,64.326     c0,51.436,41.696,93.131,93.131,93.131c51.435,0,93.13-41.695,93.13-93.131c0-51.435-41.695-93.13-93.13-93.13     c-16.817,0-32.543,4.523-46.167,12.319L151.909,205.113c17.628-14.436,29.908-35.137,33.287-58.766h241.607     c6.466,45.115,45.168,79.826,92.065,79.826c51.436,0,93.131-41.696,93.131-93.13S570.305,39.913,518.869,39.913z      M319.305,412.435c36.733,0,66.521,29.789,66.521,66.521c0,36.733-29.788,66.522-66.521,66.522s-66.522-29.789-66.522-66.522     C252.783,442.21,282.571,412.435,319.305,412.435z M93.13,199.565c-36.733,0-66.521-29.789-66.521-66.522     c0-36.747,29.788-66.522,66.521-66.522s66.522,29.775,66.522,66.522C159.652,169.777,129.864,199.565,93.13,199.565z      M518.869,199.565c-36.732,0-66.521-29.789-66.521-66.522c0-36.747,29.789-66.522,66.521-66.522     c36.733,0,66.522,29.775,66.522,66.522C585.392,169.777,555.603,199.565,518.869,199.565z M93.13,106.435     c-14.701,0-26.608,11.908-26.608,26.609c0,14.688,11.907,26.609,26.608,26.609c14.688,0,26.609-11.921,26.609-26.609     C119.739,118.342,107.832,106.435,93.13,106.435z" fill="#1de9b6"/>
                        </g>
                    </g>
                </g>
                </svg>
                <b>SaaS</b>Nomad</p>
            </div>
        </header>
</div>


            <!-- Buyer Fullscreen Modal -->
                <div id="buyerNav" class="overlayBuyer">
                  <!-- Button to close the overlay navigation -->
                  <a href="javascript:void(0)" class="closebtn" onclick="closeBuyerNav()">&times;</a>

                  <!-- Overlay content -->
                  <div class="overlay-content" style="top:10%;">
                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-8  col-xs-12">
                                            <form id="buyerApplication" action="add_buyer.php" method="post" data-toggle="validator" role="form" style="margin: 0 auto;">
                                            <!--Email validation--> 
                                            <h2 class="" style="color:white;">Buyer Application</h2>
                                            <p style="color:#1de9b6;">Subscribe for Featured Listings<p>
                                                <div class="md-form input-group" style="width: 100%;margin-top: 40px;"> 
                                                    <input name="buyer_name" type="text" id="buyer_name" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="buyer_name" style="font-weight: 100;">Name</label> 
                                                </div> 
                                                <div class="md-form input-group" style="width: 100%;"> 
                                                    <input name="buyer_email" type="email" id="buyer_email" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="buyer_email" style="font-weight: 100;">Email</label> 
                                                </div>
                                                <div class="md-form input-group" style="width: 100%;"> 
                                                    <input name="buyer_company" type="text" id="buyer_company" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="buyer_company" style="font-weight: 100;">Company</label>
                                                </div> 
                                                <div class="md-form input-group" style="width: 100%;"> 
                                                    <input name="buyer_location" type="text" id="buyer_location" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="buyer_location" style="font-weight: 100;">Location</label>
                                                </div> 
                                                <div class="md-form input-group" style="width: 100%;"> 
                                                    <input name="buyer_industry" type="text" id="buyer_industry" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="buyer_industry" style="font-weight: 100;">Industry Focus</label>
                                                </div> 
                                                <div class="form-inline"> 
                                                    <button name="subscribe" type="submit" class="btn btn-primary text-uppercase">Subscribe</button>   
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
                                    </div>
                                </div>

                </div> 
 



    <div class="container-fluid" id="main"  style="padding:0;position:relative;z-index:2000;"> 
        <!-- Landing -->
        <div class="row center" style="height:auto;padding-bottom: 50px;">
            <!--Parallax -->
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-5 col-md-5 col-sm-11 col-xs-12" style="height:auto;">
                <div class="parallax">
                    <div class="parallax-section">
                        <div class="parallax-layer parallax-layer-base">
                            <div>
                                <h1 class="mb-1">Sell your SaaS</h1> 
                                <h3 class="mb-1" style="line-height: 1.4;margin-bottom: 0 !important;"><b>Anonymously</b> list your company for sale.</br>200+ buyers will be notified.</h3>
                                <div class="row" style="margin-bottom: 20px;">
                                    <span class="text-muted counter" style="margin-right: 10px;font-size:40px;">1,457</span><span class="text-muted" style="font-size:25px;">Companies in Database</span> 
                                </div>
                              <a type="button" id="apply" class="btn btn-primary text-uppercase clear-fix" href="#application" onclick="openSellerNav()" style="background-color: #f94b71;margin-right: 4px;">Apply</a>
                              <button type="button" id="buyer" class="btn btn-outline-success waves-effect" style="border: 2px solid #1de9b6;color: #1de9b6 !important;padding: 0.75rem 2.13rem;" onclick="openBuyerNav()">I'm a buyer</button>
                            </div>
                            <!-- Fuulscreen Modal -->
                            <div id="sellerNav" class="overlaySeller">
                              <!-- Button to close the overlay navigation -->
                              <a href="javascript:void(0)" class="closebtn" onclick="closeSellerNav()">&times;</a>
<style>
    #buyerApplication .input-group, #sellerApplication .input-group {
        width: 100%;
    }
    #buyerApplication, #sellerApplication {
        width:50%;
    }
    #apply{
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    #apply:hover{
        background-color:#f94b71 !important;
        box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
    }
    #buyer:hover{
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    #buyer:hover{
        box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
    }
</style>
                              <!-- Overlay content -->
                              <div class="overlay-content">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-8  col-xs-12">
                                            <form action="add_seller.php" method="post"  id="msform" data-toggle="" role="form" style="margin: 0 auto;">
                                            <!--Email validation--> 
                                            <style>
                                                .fancy-checkbox input[type="checkbox"],
                                                .fancy-checkbox .checked {
                                                    display: none;
                                                }
                                                .fancy-checkbox input[type="checkbox"]:checked ~ .checked
                                                {
                                                    display: inline-block;
                                                }
                                                 
                                                .fancy-checkbox input[type="checkbox"]:checked ~ .unchecked
                                                {
                                                    display: none;
                                                }
                                                .fancy-checkbox i {
                                                    padding-left:10px;
                                                }
                                            </style>


                                            <fieldset>
                                                <h2 style="color:white;">Seller Application</h2>
                                                <h2 class="fs-title" style="color:#1de9b6;">Personal Info</h2>
                                                <h3 class="fs-subtitle" style="color:#1de9b6;">Step 1/3</h3>
                                                <div class="md-form input-group"> 
                                                    <input name="seller_name" id="seller-name" type="text" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-name" style="font-weight: 100;">Your Name</label>
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>
                                                <div class="md-form input-group"> 
                                                    <input name="seller_email" id="seller-email" type="email" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-email" style="font-weight: 100;">Your Email</label>
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>
                                                <div class="md-form input-group" style="margin-bottom: 0"> 
                                                    <select name="seller_role" id="seller-role" class="form-control" aria-describedby="basic-addon2" required style=""/>
                                                          <option value='1'>Role</option>
                                                          <option value='2'>Employee</option>
                                                          <option value='3'>Advisor</option> 
                                                    </select> 
                                                    <label for="seller-role" style="font-weight: 100;"></label>
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>
                                                <div class="md-form input-group" style="margin-top: 2rem;">
                                                    <input name="seller_country" id="seller-country" type="text" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-country" style="font-weight: 100;">Country Value Creation</label> 
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div> 
                                                <input type="button" name="next" class="next action-button" value="Next" i style="display: inline-block; margin-right: 15px;background-color: transparent;text-transform:uppercase;font-weight:bold;"/>
                                            </fieldset> 
                                            <fieldset>
                                                <h2 style="color:white;">Seller Application</h2>
                                                <h2 class="fs-title" style="color:#1de9b6;">Company Info</h2>
                                                <h3 class="fs-subtitle" style="color:#1de9b6;">Step 2/3</h3>
                                                <div class="md-form input-group"> 
                                                    <input name="seller_company" type="text" id="seller-company" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-company" style="font-weight: 100;">Company Name</label> 
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>
                                                <div class="md-form input-group"> 
                                                    <input name="seller_product" type="text" id="seller-product" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-product" style="font-weight: 100;">Product Name</label> 
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div> 
                                                <div class="md-form input-group" style="margin-bottom: 0;"> 
                                                    <select name="seller_industry" id="" class="form-control" name="" placeholder="Industry" aria-describedby="basic-addon2" required style=""/>
                                                          <option value='1'>AdTech</option>
                                                          <option value='2'>AI</option>
                                                          <option value='3'>IoT</option> 
                                                    </select> 
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>
                                                <div class="md-form input-group" style="margin-top: 2rem;">
                                                    <textarea name="seller_description" type="text" id="seller-description" class="md-textarea" class="form-control validate" aria-describedby="basic-addon2" required></textarea>
                                                    <label for="seller-description" style="font-weight: 100;">Business Description</label>
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>  
                                                <input type="button" name="previous" class="previous action-button" value="Previous" i style="display: inline-block; margin-right: 15px;background-color: transparent;text-transform:uppercase;font-weight:bold;"/>
                                                <input type="button" name="next" class="next action-button" value="Next" i style="display: inline-block; margin-right: 15px;background-color: transparent;text-transform:uppercase;font-weight:bold;"/>
                                              </fieldset>
                                              <fieldset>
                                                <h2 style="color:white;">Seller Application</h2>
                                                <h2 class="fs-title" style="color:#1de9b6;">Business Info</h2>
                                                <h3 class="fs-subtitle" style="color:#1de9b6;">Step 3/3</h3>
                                                <div class="md-form input-group"> 
                                                    <input name="seller_mrr" type="text" id="seller-mrr" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-mrr" style="font-weight: 100;">$, Last Month MRR</label> 
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>
                                                <div class="md-form input-group"> 
                                                    <input name="seller_growth" type="text" id="seller-growth" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-mrr-growth" style="font-weight: 100;">%, MRR Growth</label> 
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>
                                                <div class="md-form input-group"> 
                                                    <input name="seller_employees" type="text" id="seller-employees-number" class="form-control validate" aria-describedby="basic-addon2" required>
                                                    <label for="seller-employees-number" style="font-weight: 100;">Employees Number</label> 
                                                    <span class="input-group-addon" style="position:inherit;padding: 6px 12px;">
                                                            <label class="fancy-checkbox" style="color:white;cursor: pointer;">
                                                                <input type="checkbox" id="checkbox1">
                                                                <i class="fa fa-eye unchecked"></i>
                                                                <i class="fa fa-eye-slash checked"></i>
                                                            </label>
                                                    </span>
                                                </div>


                                               

                                                <input type="button" name="previous" class="previous action-button" value="Previous" i style="display: inline-block; margin-right: 15px;background-color: transparent;text-transform:uppercase;font-weight:bold;"/>
                                                <button name="sendOffer" type="submit" class="btn btn-success text-uppercase">Send for review</button>
                                                <!--<button name="sendOffer" type="submit" class="submit action-button btn-primary" value="Send for Review" i style="display: inline-block; padding:0.85rem 2.13rem;width:auto;text-transform:uppercase;"/></button>-->
                                              </fieldset>
                                            
 

                                        </form>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
                                </div>
                              </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                 .input-group {
                    width:100%;
                }
                .input-group .form-control{
                    text-transform: uppercase;
                 }
            </style>




            <div class="col-lg-6 col-md-6 col-sm-11 col-xs-12 wow fadeInRight z-depth-1" data-wow-delay="0.2s" style="height:auto;background: linear-gradient(135deg,#4772d9 30%,#756de3 60%,#756de3);border-top-left-radius:6px;border-bottom-left-radius:6px;color:white;z-index:2000;float:right;">
                
                                <div id="calculator" class="section-heading__content-inner">
                                  <h3 class="text-uppercase mb-1 wow fadeInDown section-heading__heading" data-wow-delay="0.2s" style="display:inline-block;padding-right: 0.5rem;margin-top: 15px;"><b>Evaluate Your SaaS</b></h3>
                                  <span class="section-heading__icon"></span> 
                                </div>

                <div class="form-wrapper col-lg-5 col-md-5 col-sm-5 col-xs-12"  style="padding: 1rem 2rem;">
                        <!-- Nav tabs -->
                            
                              <form id="calculator" data-toggle="validator" role="form">
                                <!--Email validation--> 
                                <div class="md-form input-group"> 
                                    <input type="email" id="" class="form-control validate" placeholder="Type your Email" aria-describedby="basic-addon2" required>
                                </div>
                                <div class="md-form input-group"> 
                                    <select id="industry" class="form-control mdb-select" name="industry" placeholder="Industry" aria-describedby="basic-addon2" required>
                                          <option value='1' data-othervalue='2'>Industry1</option>
                                          <option value='2' data-othervalue='3'>Industry2</option>
                                          <option value='3' data-othervalue='4'>Industry3</option>
                                          <option value='4' data-othervalue='5'>Industry4</option>
                                          <option value='5' data-othervalue='6'>Industry5</option>
                                    </select> 
                                </div>
                                <div class="md-form input-group">
                                    <input type="text" id="mrr" name="mrr" class="form-control" placeholder="$, Last month MRR" aria-label="Amount (to the nearest dollar)" required>
                                </div>
                                <div class="md-form input-group">
                                    <input type="text" id="input3" class="form-control" placeholder="%, Your MRR Growth" aria-label="Amount (to the nearest dollar)">
                                </div>
                                <div class="md-form input-group">
                                    <input type="text" id="input3" class="form-control" placeholder="Number of Employees" aria-label="Amount (to the nearest dollar)">
                                </div>
                                    
                                    <!--<div class="md-form input-group" style="width: 25%; margin-right: 5%;"> 
                                        <input type="text" id="range-from" name="range-from" class="form-control" placeholder="From ..." aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="md-form input-group" style="width: 25%;"> 
                                        <input type="text" id="range-to" name="range-to" class="form-control" placeholder="To ..." aria-label="Amount (to the nearest dollar)" >
                                    </div> -->
                            </form>
                        </div>
                        <style>
                        .calculator {
                            margin:0;
                        }
                        .valuation input[type=text]:disabled {
                            font-size: 285%;
                            color:white;
                            border-bottom: none;
                            cursor:text;
                        } 

                        .valuation .input-group {
                            width: 100%;
                        }
                        .box-btn {
                          background: transparent; 
                          color: rgba(0,0,0,0.3); 
                          cursor: pointer; 
                          border: none;
                          outline: none; 
                          margin-bottom:;
                        } 
                        </style>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" style=" padding: 1rem 2rem;">
                                <div class="row valuation" style="color:white; padding-bottom: 20px;">
                                    <!--<button type="submit" class="btn btn-primary text-uppercase" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing" style="display: inline-block; margin-right: 15px;margin-bottom: 20px;">Calculate</button>-->
                                    
                                        
                                     
                                        
                                    <h3 class="" style="">Suggested Valuation</h3>
                                    <div class="md-form input-group" style=""> 
                                        <h4 class="" style="margin-bottom:0;margin-top:0.8rem;">From:</h4>
                                        <input type="text" id="range-from" name="range-from" class="form-control counter" placeholder="$0" aria-label="Valuation range (from)" disabled>
                                    </div>
                                    <div class="md-form input-group" style=""> 
                                        <h4 class="calculator">To:</h4>
                                        <input type="text" id="range-to" name="range-to" class="form-control counter" placeholder="$0" aria-label="Valuation range (to)" disabled>
                                    </div>
                                    <button class="btn box-btn" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing" style="display: inline-block;margin-bottom: 20px;">Calculate</button>

                                    </br>

                                    <small>The model above is intended more for educational purposes than for performing serious valuations.</br>Please read this 
                                    <a href="#" id="disclaimer" data-toggle="tooltip" data-placement="bottom" title="Please note that this calculator is intended primarily for educational and entertainment purposes. Our goal is to highlight the key factors that investors tend to consider when evaluating the value of a potential investment, and to provide some directionally correct guidance. The actual results may make sense in some situations, but it will not in many others. There is no way that a 25-question multiple choice calculator can capture the many unique attributes of your business, so please do not rely on this model to make any financial decisions.">Important Disclaimer</a></small>
                                </div>
                                
                        </div>

                        
                            </div>
                        

                        </div> 
                    
                    
                    
                </div>
            <div>

        </div>
    </div>
    </div>
</div>    
            

 <style>
    .list-group {
        box-shadow:none;

    }
    .list-group-item {
        background-color: transparent;
        border: none;
    }
 </style>

    <div class="container-fluid" style="padding:0; background-color:#eee;">
    <div class="col-lg-12 hidden-md hidden-sm-up hidden-xs-up" style="background-color:#eee;height: 100px; margin-top: -100px;"></div>
                    <div class="row" >
                        <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding-right:0;padding-left:0;">
                            <h2 class="mb-1 wow fadeInDown" data-wow-delay="0.2s" style="padding-left:15px;">Featured Listings</h2>
                                            <!--Card 1-->
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 15px;height: 198px;">
                                                <div class="card-container1">
                                                    <div class="card card--front1"> 
                                                      <div class="white-text text">
                                                        <header class="head">
                                                          <h3 class="head__name" style="margin-top:0;">
                                                            <b class="name__fn">Ad</b>Tech
                                                          </h3>
                                                          <p class="head__subtitle">$ 20,000 MRR<br>5 Employees<br>United States</p>
                                                        </header>
                                                      </div>
                                                    </div>

                                                    <div class="card card--back1">
                                                      <div class="card__content text white-text">
                                                        <h4 style="font-weight: 400;">Project title</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
                                                        <div class="chip">AdTech</div>
                                                        <div class="chip">Content Creation</div>
                                                        <div class="chip">Marketing Tool</div>
                                                      </div>
                                                    </div> 
                                                </div> 
                                            </div>
                                            <!--/.Card--> 



                                            <!--Card 2-->
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 15px;height: 198px;">
                                                <div class="card-container2">
                                                    <div class="card card--front2"> 
                                                      <div class="white-text text">
                                                        <header class="head">
                                                          <h3 class="head__name" style="margin-top:0;">
                                                            <b class="name__fn">Cloud</b>
                                                            Computing
                                                          </h3>
                                                          <p class="head__subtitle">$ 150,000 MRR<br>56 Employees<br>Estonia</p>
                                                        </header>
                                                      </div>
                                                    </div>

                                                    <div class="card card--back2">
                                                      <div class="card__content text white-text">
                                                        <h4 style="font-weight: 400;">Project title</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
                                                        <div class="chip">AdTech</div>
                                                        <div class="chip">Content Creation</div>
                                                        <div class="chip">Marketing Tool</div>
                                                      </div>
                                                    </div> 
                                                </div> 
                                            </div>
                                            <!--/.Card-->
                                            <!--Card 3-->
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 15px;height: 198px;">
                                                <div class="card-container3">
                                                    <div class="card card--front3"> 
                                                      <div class="white-text text">
                                                        <header class="head">
                                                          <h3 class="head__name" style="margin-top:0;">
                                                            <b class="name__fn">HR</b>Tech
                                                          </h3>
                                                          <p class="head__subtitle">$ 50,000 MRR<br>10 Employees<br>Canada</p>
                                                        </header>
                                                      </div>
                                                    </div>

                                                    <div class="card card--back3">
                                                      <div class="card__content text white-text">
                                                        <h4 style="font-weight: 400;">Project title</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
                                                        <div class="chip">AdTech</div>
                                                        <div class="chip">Content Creation</div>
                                                        <div class="chip">Marketing Tool</div>
                                                      </div>
                                                    </div> 
                                                </div> 
                                            </div>
                                            <!--/.Card-->                                            
                                             
                        </div> 
                        <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                    </div>             
                        
                        <div class="row" style="padding-bottom: 6rem;padding-top:6rem;display: flex;align-items: center;">
                            
                                <!--<h6 style="padding-left: 15px;">20,000+ design ready assets</br>for all your project needs!</h6>-->
                            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding-right:0;padding-left:0;">
                                        <h2 class="mb-1 wow fadeInDown" data-wow-delay="0.2s" style="padding-left: 15px;">How it Works</h2>
                                        <div class="row wow fadeInLeft" style="display: flex;align-items: center;">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right" style="align-items: stretch;">
                                                    <h3 style="font-weight: 300;">Apply SaaS for Review</h3>
                                                    <h4>Lorem Ipsum is simply</br>dummy text of the printing</br>and typesetting industry!</43>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                                                    <img class="features__icon" src="img/svg/layers2.svg">
                                                </div>
                                                <div class="col-lg-3 col-md-3 hidden-sm"></div>                            
                                        </div>
                                        <div class="row wow fadeInRight" style="display: flex;align-items: center;">
                                            <div class="col-lg-3 col-md-3 hidden-sm"></div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs text-right">
                                                <img class="features__icon" src="img/svg/swatch.svg">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="align-items: stretch;">
                                                <h3 style="font-weight: 300;">Buyers Get Notified</h3>
                                                <h4>Lorem Ipsum has been</br>the industry's standard dummy text</br>ever since the 1500s</h4>
                                            </div>
                                        </div>
                                        <div class="row wow fadeInLeft" style="display: flex;align-items: center;">
                                        <!-- display: flex;align-items: center;-->
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right" style="align-items: stretch;">
                                                <h3 style="font-weight: 300;">Receive Offers</h3>
                                                <h4>You get requests from</br>intrested buyers and decide</br>to whom to reveal your contacts</h4>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                                                <img class="features__icon" src="img/svg/venn.svg">
                                            </div>
                                            <div class="col-lg-3 col-md-3 hidden-sm"></div>
                                        </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                        </div>

                        <style>
                        @media screen and (max-width: 768px) {
                            .text-right  {text-align: left !important;} 
                        }  
                        </style>

                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding-bottom:6rem;">
                                <div class="row">
                                <h2 class="mb-1 wow fadeInDown" data-wow-delay="0.2s">Latest News on SaaS M&A</h2>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right:0;padding-left:0;">
                                       
                                            
                                                <!--Jumbotron-->
                                                <div class="jumbotron" style="overflow: auto;padding:0;margin: 0; margin-top: 15px;">
                                                    <section id="content">
                                                      <div id="container">
                                                        <div class="row" style="display: flex;align-items: stretch;">
                                                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding: 40px 60px 60px;">
                                                                <a href="https://techcrunch.com/gallery/the-11-biggest-tech-acquisitions-of-2016/" class="article"  target="_blank">
                                                                    <h3 class="mb-1 ">The 11 biggest tech acquisitions of 2016</h3>
                                                                    <span class="mb-1 text-muted">Jan 3, 2017 <b>Techcrunch</b></span>
                                                                </a>  
                                                                <a href="https://techcrunch.com/2016/11/21/what-does-trump-mean-for-tech-ma/" class="article"  target="_blank">
                                                                    <h3 class="mb-1">What does Trump mean for tech M&A?</h3>
                                                                    <span class="mb-1 text-muted">Nov 21, 2016 <b >Techcrunch</b></span>
                                                                </a> 
                                                                <a href="https://techcrunch.com/2016/07/03/what-this-years-ma-activity-tells-us-about-media-and-entertainment/" class="article" target="_blank">
                                                                    <h3 class="mb-1">What this year’s M&A activity tells us about media and entertainment </h3>
                                                                    <span class="mb-1 text-muted">Jul 3, 2016 <b>Techcrunch</b></span>
                                                                </a>   
                                                                <a href="https://techcrunch.com/2016/11/21/what-does-trump-mean-for-tech-ma/" class="article"  target="_blank">
                                                                    <h3 class="mb-1">What does Trump mean for tech M&A?</h3>
                                                                    <span class="mb-1 text-muted">Nov 21, 2016 <b >Techcrunch</b></span>
                                                                </a> 
                                                                <a href="#" target="_blank" style="text-transform:uppercase;font-weight:bold;color:#777;display:block;float: right;margin-top: 50px;">Read More</a>
                                                            </div>                                  
                                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 white-text" style="padding:60px;align-items: center;display: flex;background: #263238;">
                                                                <div>
                                                                    <h4 style="margin-bottom: 15px;">You can subscribe for the latest M&A news. Just enter your Email and we will send it to your Inbox weekly.</h4>
                                                                    <form id="subscribe" data-toggle="validator" role="form">
                                                                        <div class="md-form input-group" style="margin: 20px 0;width: 100%;">
                                                                            <input type="email" id="free-data" class="form-control validate" placeholder="example@gmail.com">
                                                                        </div>
                                                                        <div class="md-form input-group" style="margin: 20px 0;width: 100%;">
                                                                            <button class="btn btn-primary btn-lg" type="button" style="width: 100%;">Subscribe</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </section>
                                                     
                                                </div> 
                                            </div>
                                            <!--/.Jumbotron-->
                                        
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                        </div>
    </div>                       
                                
                            

    <style> 
        #disclaimer {
            color:white;
        }
        #disclaimer:hover{
            text-decoration:underline;
        }
        footer a {
            color: rgba(255,255,255,0.5);
        }
        footer a:hover {
            color: rgba(255,255,255,1);
        }
        footer ul {
            margin-top: 1.5rem;
            margin-left: 2rem;
        }
        footer ul li{
            display: inline-block;
            line-height: 25px;
            margin: 0 15px 0 0;
        }
    </style>


    <div class="container-fluid" style="padding:0; background-color:#eee;">

        <footer style="height:13vh;background-color: rgba(0,0,0,0.5);">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-6 col-md-6 col-sm-11 col-xs-12" style="height:100%;display: flex;align-items: center;color: rgba(255,255,255,0.5);">

                <a href="index.html" class="mb-1 logo" style="font-size:25px; margin: 0 !important;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" height="5vh" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                <g>
                    <g id="Ellipse_4_copy_5">
                        <g>
                            <path d="M319.305,505.565c14.688,0,26.608-11.921,26.608-26.609c0-14.701-11.907-26.608-26.608-26.608     c-14.702,0-26.609,11.907-26.609,26.608C292.696,493.645,304.603,505.565,319.305,505.565z M518.869,106.435     c-14.701,0-26.608,11.908-26.608,26.609c0,14.688,11.907,26.609,26.608,26.609c14.688,0,26.609-11.921,26.609-26.609     C545.479,118.342,533.571,106.435,518.869,106.435z M518.869,39.913c-46.911,0-85.6,34.711-92.065,79.826H185.196     c-6.466-45.115-45.168-79.826-92.066-79.826C41.696,39.913,0,81.609,0,133.043s41.696,93.13,93.13,93.13     c12.786,0,24.919-2.647,36.001-7.317L252.078,414.63c-16.019,16.71-25.904,39.341-25.904,64.326     c0,51.436,41.696,93.131,93.131,93.131c51.435,0,93.13-41.695,93.13-93.131c0-51.435-41.695-93.13-93.13-93.13     c-16.817,0-32.543,4.523-46.167,12.319L151.909,205.113c17.628-14.436,29.908-35.137,33.287-58.766h241.607     c6.466,45.115,45.168,79.826,92.065,79.826c51.436,0,93.131-41.696,93.131-93.13S570.305,39.913,518.869,39.913z      M319.305,412.435c36.733,0,66.521,29.789,66.521,66.521c0,36.733-29.788,66.522-66.521,66.522s-66.522-29.789-66.522-66.522     C252.783,442.21,282.571,412.435,319.305,412.435z M93.13,199.565c-36.733,0-66.521-29.789-66.521-66.522     c0-36.747,29.788-66.522,66.521-66.522s66.522,29.775,66.522,66.522C159.652,169.777,129.864,199.565,93.13,199.565z      M518.869,199.565c-36.732,0-66.521-29.789-66.521-66.522c0-36.747,29.789-66.522,66.521-66.522     c36.733,0,66.522,29.775,66.522,66.522C585.392,169.777,555.603,199.565,518.869,199.565z M93.13,106.435     c-14.701,0-26.608,11.908-26.608,26.609c0,14.688,11.907,26.609,26.608,26.609c14.688,0,26.609-11.921,26.609-26.609     C119.739,118.342,107.832,106.435,93.13,106.435z" fill="#1de9b6"/>
                        </g>
                    </g>
                </g>
                </svg>
                <b>SaaS</b>Nomad</a>
                <ul style=" margin: 17px 0 0 20px;">
                    <li>
                      <a href="#" class="text-uppercase">
                        <b>FAQ</b>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-uppercase">
                        <b>Privacy</b>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-uppercase">
                        <b>Terms</b>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-uppercase">
                        <b>Send Feedback</b>
                      </a>
                    </li>
                  </ul>
            </div>
            <div class="col-lg-5 col-md-5 hidden-sm">
                
        </footer>
</div>


 
    <!-- SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="js/jquery.number.js"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script> 
    <!-- Bootstrap Form validator -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <!-- Counter -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!-- Multistep Form -->    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="js/multistep-form.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script> 
    <!-- Card Widget -->
    <script type="text/javascript" src="js/card.js"></script>
    <!-- Number formatting -->
    <script type="text/javascript" src="js/jquery.number.js"></script>
    <script type="text/javascript">
            
            $(function(){                 
                $('#mrr').number( true ); 
                $("#range-to").number(true);
                $("#range-from").number(true); 
                $("seller-mrr").number(true); 
                $("seller-mrr-growth").number(true); 
                $("seller-employee-number").number(true); 
            });
    </script>

    
</body>

</html>
