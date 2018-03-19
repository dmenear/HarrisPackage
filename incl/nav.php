<?php $linkPrefix = ($pageID == "home") ? "" : "../"; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="<?php echo ($pageID == "home") ? "#" : "../"; ?>" style="font-family: 'Kalam';"><i><b>Catered Cocktails of GA</b></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navToggler" aria-controls="navToggler"
            aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navToggler">
        <ul class="navbar-nav px-3">
            <li class="nav-item px-3<?php if($pageID == "home") echo " active"; ?>">
                <a class="nav-link" href="<?php echo ($pageID == "home") ? "#" : "../"; ?>">Home</a>
            </li>
            <li class="nav-item px-3<?php if($pageID == "services") echo " active"; ?>">
                <a class="nav-link" href="<?php echo $linkPrefix; ?>services/">Bar Setups / Services</a>
            </li>
            <li class="nav-item px-3<?php if($pageID == "about") echo " active"; ?>">
                <a class="nav-link" href="<?php echo $linkPrefix; ?>about/">About Us</a>
            </li>
            <li class="nav-item px-3<?php if($pageID == "contact") echo " active"; ?>">
                <a class="nav-link" href="<?php echo $linkPrefix; ?>contact/">Contact Us</a>
            </li>
            <li class="nav-item px-3<?php if($pageID == "faq") echo " active"; ?>">
                <a class="nav-link" href="<?php echo $linkPrefix; ?>faq/">FAQ</a>
            </li>
        </ul>
    </div>
</nav>