 <!DOCTYPE html>
<html lang="en">
<?php
    $pageID = "deals";
    include("../incl/head.php");
?>
<body>

<?php include("../incl/nav.php"); ?>
    
<div id="pageHeader" class="jumbotron jumbotron-fluid container-fluid text-center" style="padding-right: 15px; padding-left: 15px;">
    <div class="row">
        <div class="col-12 h3">Current Deals</div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8"><hr></div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-sm-10">
            Welcome to our deals page! All of our current deals are listed here for your convenience. Please note that
            some of our specials are only available during certain times and/or days.
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
</div>
    
<div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Get two handles of Jack Daniel's Old No. 7 Whiskey for $55.00!
                </div>
                <img class="card-img-top" src="../images/jackdaniels.jpg" alt="Jack Daniels" draggable="false">
                <div class="card-body">
                    This deal is only available Monday through Friday from 12:00pm to 5:00pm.
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Get a fifth of Captain Morgan Loconut Rum for only $10.00!
                </div>
                <img class="card-img-top" src="../images/loconut.jpg" alt="Captain Morgan" draggable="false">
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Get a fifth of Grey Goose for $25.00!
                </div>
                <img class="card-img-top" src="../images/greygoose.jpg" alt="Grey Goose" draggable="false">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Choose any three bottles of Barefoot Champagne for only $22.00!
                </div>
                <img class="card-img-top" src="../images/barefoot.jpg" alt="Barefoot" draggable="false">
            </div>
            <div class="card-body">
                This deal is only available on Saturdays.
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Pick up two 1.5L bottles of Liberty Creek moscato for $9.00!
                </div>
                <img class="card-img-top" src="../images/libertycreek.png" alt="Liberty Creek" draggable="false">
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Get a 6-pack of SweetWater 420 for only $7.00!
                </div>
                <img class="card-img-top" src="../images/sweetwater.jpg" alt="Sweetwater" draggable="false">
            </div>
        </div>
    </div>
</div>

<?php include("../incl/footer.php"); ?>

</body>
</html>