 <!DOCTYPE html>
<html lang="en">
<?php
    $pageID = "products";
    include("../incl/head.php");
?>
<body>

<?php include("../incl/nav.php"); ?>

    <div id="pageHeader" class="jumbotron jumbotron-fluid container-fluid text-center" style="padding-right: 15px; padding-left: 15px;">
        <div class="row">
            <div class="col-12 h3">Product List</div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table style="width: 100%;">
                    <?php
                        $count = 0;
                        $faq["This is the first sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the second sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the third sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the fourth sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the fifth sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the sixth sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the seventh sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the eigth sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the ninth sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        $faq["This is the tenth sample question and it doesn't mean anything?"] = 
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat ipsum posuere dui viverra suscipit. Maecenas vitae sagittis velit. Quisque sed condimentum magna. Suspendisse sagittis nec libero et venenatis. Ut eget bibendum turpis, quis volutpat velit. Donec tempus magna sed risus dignissim, ac viverra sem dapibus. Vestibulum laoreet tristique ligula id pulvinar. Cras accumsan venenatis nibh, quis congue magna maximus vitae. Duis efficitur nunc fermentum erat varius vulputate. In enim lacus, porta sed sagittis non, sagittis sit amet elit. In leo nunc, gravida ut fringilla ac, iaculis in lorem. Vestibulum eleifend porttitor dolor ac sollicitudin. Sed pharetra sit amet enim sed varius. Duis facilisis magna id dolor tempus mollis vitae nec arcu.";
                        foreach($faq as $question => $answer){
                            echo "<tr><td><div class='card'>";
                            echo "<div class='card-header'>";
                            echo "<button style='margin-right: 2%;' class='btn btn-secondary' id='expand$count' data-toggle='collapse' data-target='#collapse$count' aria-expanded='true' aria-controls='collapse$count'><i class='fas fa-plus'></i></button>";
                            echo $question;
                            echo "</div>";
                            echo "<div id='collapse$count' class='collapse hide'><div class='card-body'>";
                            echo $answer;
                            echo "</div></div>";
                            echo "</div></td></tr>";
                            $count++;
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    
<?php include("../incl/footer.php"); ?>

</body>
</html>