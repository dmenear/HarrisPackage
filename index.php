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
        <div class="col-12 h3">Welcome to Catered Cocktails of Georgia!</div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8"><hr></div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-sm-10">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at mattis nunc. 
            Praesent vehicula ante ac pretium convallis. Morbi hendrerit sem eget nisl interdum, 
            ullamcorper bibendum lectus vestibulum. Vivamus lacinia rhoncus ipsum, non tincidunt 
            erat posuere ac. Aenean at sodales nisl, at consectetur diam. Aliquam mattis placerat 
            tortor a venenatis. Mauris consequat non ligula eu posuere. Suspendisse dictum lectus 
            nec orci fermentum facilisis.
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 text-center">
            <div class="card homecard" onclick="location.href = 'services/';">
                <div class="card-header">
                    <h4>Bar Setups & Services</h4>
                    <img class="rounded-circle" style="width: 70%;" src="images/samplebar.jpg" alt="Bar Setups & Services">
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo egestas 
                    nibh, non lacinia est. Sed luctus nisi nec ex venenatis rhoncus. Ut mattis placerat 
                    eros sed hendrerit. Mauris egestas enim sit amet ullamcorper mattis. Maecenas id 
                    posuere elit. Cras sit amet mattis. Click <a href="services.htm">here</a> for 
                    more information.
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="card homecard">
                <div class="card-header" onclick="location.href = 'contact.htm';">
                    <h4>Contact Us</h4>
                    <img class="rounded-circle" style="width: 70%;" src="images/samplecontact.jpeg" alt="Contact Us">
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo egestas 
                    nibh, non lacinia est. Sed luctus nisi nec ex venenatis rhoncus. Ut mattis placerat 
                    eros sed hendrerit. Mauris egestas enim sit amet ullamcorper mattis. Maecenas id 
                    posuere elit. Cras sit amet mattis. Click <a href="contact.htm">here</a> for 
                    more information.
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="card homecard">
                <div class="card-header" onclick="location.href = 'about.htm';">
                    <h4>About Us</h4>
                    <img class="rounded-circle" style="width: 70%;" src="images/sampleabout.jpeg" alt="About Us">
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo egestas 
                    nibh, non lacinia est. Sed luctus nisi nec ex venenatis rhoncus. Ut mattis placerat 
                    eros sed hendrerit. Mauris egestas enim sit amet ullamcorper mattis. Maecenas id 
                    posuere elit. Cras sit amet mattis. Click <a href="about.htm">here</a> for 
                    more information.
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include("incl/footer.php"); ?>

</body>
</html> 