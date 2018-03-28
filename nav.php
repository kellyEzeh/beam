<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="img-responsive beamlogo-nav" src="assets/img/beamlogo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php if($page_type == "index"){ ?>
            <div class="navbar-nav navbar-left link-color">
                <a class="nav-item nav-link font-weight-bold active" href="./">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link font-weight-bold" href="#">About</a>
                <a class="nav-item nav-link font-weight-bold" href="plan.php">Plans</a>
                <a class="nav-item nav-link font-weight-bold" href="faq.php">FAQs</a>
                <a class="nav-item nav-link font-weight-bold" href="contact.php">Contact Us</a>
            </div>
           <?php }else{ ?>
             <div class="navbar-nav navbar-right link-color">
                <a class="nav-item nav-link font-weight-bold active" href="./">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link font-weight-bold" href="#">About</a>
                <a class="nav-item nav-link font-weight-bold" href="plan.php">Plans</a>
                <a class="nav-item nav-link font-weight-bold" href="faq.php">FAQs</a>
                <a class="nav-item nav-link font-weight-bold" href="contact.php">Contact Us</a>
            </div>

          <?php }; ?>
            
        </div>
    </div>
</nav>
