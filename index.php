 <!DOCTYPE html>
<html lang="en">
<?php
    $pageID = "home";
    include("incl/head.php");
?>
<body>

<?php include("incl/nav.php"); ?>

<div id="pageHeader" class="jumbotron jumbotron-fluid container-fluid text-center" style="background: url('images/sample.png') center; background-size: cover; padding-right: 15px; padding-left: 15px;">
    <div class="row">
        <div class="col-12 h2"><b>Welcome to Harris Package!</b></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8"><hr></div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-sm-10">
            Established in 2020, we are the largest liquor store in Statesboro to date. We offer a wide selection of
            adult beverages at the best prices in town. We proudly offer a 10% discount to all Georgia Southern
            students with a valid Student ID. Come in and see what all the excitement is about!
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
</div>

<div class="container">
    <div class="jumbotron text-center featuredDeal" style="background: #fcff7c !important" onclick="location.href = 'deals/';">
        <h2>Get two handles of Jack Daniel's Old No. 7 Whiskey for $55.00!</h2>
        <hr>
        <p>Come in anytime between 12:00pm and 5:00pm on a weekday to take advantage of this amazing deal!</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 text-center">
            <div class="card homecard" onclick="location.href = 'deals/';">
                <div class="card-header">
                    <h4>Current Deals</h4>
                    <img class="rounded-circle" draggable="false" style="width: 70%;" src="images/benjamins.jpg" alt="Current Deals">
                </div>
                <div class="card-body">
                    Here at Harris Package, we always try to ensure that you leave our store feeling satisfied that
                    you received an outstanding deal. That's why we keep a list of specials that we have going on so that
                    you're always able to make an informed purchase. Click <a href="deals.htm">here</a> to see a list of
                    our current deals.
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="card homecard">
                <div class="card-header" onclick="location.href = 'contact/';">
                    <h4>Contact Us</h4>
                    <img class="rounded-circle" draggable="false" style="width: 70%;" src="images/samplecontact.jpeg" alt="Contact Us">
                </div>
                <div class="card-body">
                    We're conveniently located next to the PetCo on Brannen Street. We're closed on Sundays due to local
                    ordinances but we're open every other day of the week. Click <a href="contact.htm">here</a> for
                    more information on our business hours and contact information.
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="card homecard">
                <div class="card-header" onclick="location.href = 'about/';">
                    <h4>About Us</h4>
                    <img class="rounded-circle" draggable="false" style="width: 70%;" src="images/sampleabout.jpeg" alt="About Us">
                </div>
                <div class="card-body">
                    We opened our doors in August, 2020, just after the laws changed on liquor sales in Statesboro and
                    Bulloch County. The business is run by Dr. Jim Harris, a former professor of Computer Science at
                    Georgia Southern University. Click <a href="about.htm">here</a> to learn more about our history.
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include("incl/footer.php"); ?>

</body>
</html> 