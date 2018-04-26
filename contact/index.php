 <!DOCTYPE html>
<html lang="en">
<?php
    $pageID = "contact";
    include("../incl/head.php");
?>
<body>

<?php include("../incl/nav.php"); ?>
    <div id="pageHeader" class="jumbotron jumbotron-fluid container-fluid text-center" style="padding-right: 15px; padding-left: 15px;">
        <div class="row">
            <div class="col-12 h3">Contact Us</div>
        </div>
    </div>
    
    <div class="container">    
        <div class="row" style="margin-bottom: 5%;">
            <div class="col-md-8 col-sm-12">
                <div style="width: 100%; padding-top: 70%; position: relative; margin-bottom: 5%;">
                    <iframe style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; right: 0; bottom: 0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3367.573016944021!2d-81.7599454570159!3d32.43059368662007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fa4741edce76f9%3A0x52f6aa2995d6dcd1!2s785+Brannen+St%2C+Statesboro%2C+GA+30458!5e0!3m2!1sen!2sus!4v1524713305504" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <strong>Address:</strong><br>
                785 Brannen St.<br>
                Statesboro, GA 30458
                <br><br>
                
                <strong>Phone:</strong><br>
                (912)555-5555
                <br><br>
                
                <strong>Email:</strong><br>
                jim@harrispackage.com
                <br><br>
                
                <table class="table">
                    <tr>
                        <th class="text-center" scope="col" colspan="2">Available Hours</th>
                    </tr>
                    <tr>
                        <th scope="row">Mon - Thu</th>
                        <td>10:00am - 9:00pm</td>
                    </tr>
                        <th scope="row">Fri</th>
                        <td>11:00am - 10:00pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Sat</th>
                        <td>12:00pm - 10:00pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Sun</th>
                        <td>Closed</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Send us an email!
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="contactEmail">Your email address:</label>
                                <input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="contactName">Your name:</label>
                                <input type="text" class="form-control" id="contactName">
                            </div>
                            <div class="form-group">
                                <label for="contactMessage">Your Message:</label>
                                <textarea class="form-control" id="contactMessage" rows="6"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include("../incl/footer.php"); ?>

</body>
</html>