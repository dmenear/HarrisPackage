 <!DOCTYPE html>
<html lang="en">
<?php
    $pageID = "deals";
    include("../incl/head.php");
?>
<body>

<?php include("../incl/nav.php"); ?>
    
<script>
    function updateArrows(pushedButton){
        if(pushedButton.innerHTML.includes("down")){
            pushedButton.innerHTML = "<i class='fas fa-angle-double-up'></i>";
        } else{
            pushedButton.innerHTML = "<i class='fas fa-angle-double-down'></i>";
        }
    }
</script>
    
<div id="pageHeader" class="jumbotron jumbotron-fluid container-fluid text-center" style="padding-right: 15px; padding-left: 15px;">
    <div class="row">
        <div class="col-12 h3">Bar Setups / Services</div>
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
    
<div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    First Title
                </div>
                <img class="card-img-top" src="../images/samplebar3.jpeg" alt="First Title">
                <div id="collapseOne" class="collapse hide">
                    <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. 
                         Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. 
                         Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. 
                         Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. 
                         Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. 
                         In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. 
                         Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu. 
                         <br><br>Aliquam sit amet orci orci. In id massa id neque lobortis sagittis quis eu augue. Ut id felis nunc. 
                         Donec eros sapien, dignissim et velit vitae, fringilla consectetur diam. Proin aliquet libero aliquam diam mattis bibendum. 
                         Etiam ac turpis nec dui eleifend varius sed vitae leo. Maecenas scelerisque bibendum aliquam. Etiam finibus sapien nibh, 
                         id euismod lectus lobortis at. 
                    </div>
                </div>
                <div class="card-footer text-center p-0">
                    <button onclick="updateArrows(this);" class="btn btn-light servicesDropdown" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-angle-double-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Second Title
                </div>
                <img class="card-img-top" src="../images/samplebar3.jpeg" alt="Second Title">
                <div id="collapseTwo" class="collapse hide">
                    <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. 
                         Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. 
                         Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. 
                         Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. 
                         Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. 
                         In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. 
                         Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu. 
                         <br><br>Aliquam sit amet orci orci. In id massa id neque lobortis sagittis quis eu augue. Ut id felis nunc. 
                         Donec eros sapien, dignissim et velit vitae, fringilla consectetur diam. Proin aliquet libero aliquam diam mattis bibendum. 
                         Etiam ac turpis nec dui eleifend varius sed vitae leo. Maecenas scelerisque bibendum aliquam. Etiam finibus sapien nibh, 
                         id euismod lectus lobortis at. 
                    </div>
                </div>
                <div class="card-footer text-center p-0">
                    <button onclick="updateArrows(this);" class="btn btn-light servicesDropdown" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-angle-double-down"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Third Title
                </div>
                <img class="card-img-top" src="../images/samplebar3.jpeg" alt="Third Title">
                <div id="collapseThree" class="collapse hide">
                    <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. 
                         Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. 
                         Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. 
                         Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. 
                         Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. 
                         In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. 
                         Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu. 
                         <br><br>Aliquam sit amet orci orci. In id massa id neque lobortis sagittis quis eu augue. Ut id felis nunc. 
                         Donec eros sapien, dignissim et velit vitae, fringilla consectetur diam. Proin aliquet libero aliquam diam mattis bibendum. 
                         Etiam ac turpis nec dui eleifend varius sed vitae leo. Maecenas scelerisque bibendum aliquam. Etiam finibus sapien nibh, 
                         id euismod lectus lobortis at. 
                    </div>
                </div>
                <div class="card-footer text-center p-0">
                    <button onclick="updateArrows(this);" class="btn btn-light servicesDropdown" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <i class="fas fa-angle-double-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card servicescard">
                <div class="card-header">
                    Fourth Title
                </div>
                <img class="card-img-top" src="../images/samplebar3.jpeg" alt="Fourth Title">
                <div id="collapseFour" class="collapse hide">
                    <div class="card-body">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. 
                         Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. 
                         Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. 
                         Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. 
                         Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. 
                         In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. 
                         Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu. 
                         <br><br>Aliquam sit amet orci orci. In id massa id neque lobortis sagittis quis eu augue. Ut id felis nunc. 
                         Donec eros sapien, dignissim et velit vitae, fringilla consectetur diam. Proin aliquet libero aliquam diam mattis bibendum. 
                         Etiam ac turpis nec dui eleifend varius sed vitae leo. Maecenas scelerisque bibendum aliquam. Etiam finibus sapien nibh, 
                         id euismod lectus lobortis at. 
                    </div>
                </div>
                <div class="card-footer text-center p-0">
                    <button onclick="updateArrows(this);" class="btn btn-light servicesDropdown" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <i class="fas fa-angle-double-down"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../incl/footer.php"); ?>

</body>
</html>