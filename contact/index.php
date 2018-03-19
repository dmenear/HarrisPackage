 <!DOCTYPE html>
<html lang="en">
<?php
    $pageID = "contact";
    include("../incl/head.php");
?>
<body>

<?php include("../incl/nav.php"); ?>

    <div id="pageHeader" class="jumbotron jumbotron-fluid container-fluid text-center">
        <div class="row">
            <div class="col-12 h3">Contact Us</div>
        </div>
    </div>
    
    <div class="container">    
        <div class="row" style="margin-bottom: 5%;">
            <div class="col-8">
                <iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.3709751850074!2d-81.9511231487428!3d32.38241588100026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fa6bf75b10c2ab%3A0x3a51631e486b785d!2sRay&#39;s+Place+Package+Shop%2C+Drive-Thru%2C+%26+Lounge!5e0!3m2!1sen!2sus!4v1521437107428" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-4">
                <strong>Address:</strong><br>
                1234 Nothing St.<br>
                Metter, GA 12345
                <br><br>
                
                <strong>Phone:</strong><br>
                (912)555-5555
                <br><br>
                
                <strong>Email:</strong><br>
                nobody@cateredcocktailsofga.com
                <br><br>
                
                <table class="table">
                    <tr>
                        <th class="text-center" scope="col" colspan="2">Available Hours</th>
                    </tr>
                    <tr>
                        <th scope="row">Mon - Thu</th>
                        <td>9:00am - 5:00pm</td>
                    </tr>
                        <th scope="row">Fri</th>
                        <td>9:00am - 7:00pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Sat</th>
                        <td>12:00pm - 7:00pm</td>
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