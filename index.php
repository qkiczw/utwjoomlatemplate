<?php 
    defined('_JEXEC') or die; 
    $app = JFactory::getApplication(); 
?> 
 
<!DOCTYPE HTML> 
<html> 
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="media/jui/css/bootstrap.min.css" rel="stylesheet">
	<link href="media/jui/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link href="templates/<?php echo $this->template; ?>/css/my-responsive.css" rel="stylesheet">
	<link href="templates/<?php echo $this->template; ?>/css/template.css" rel="stylesheet">
    <jdoc:include type="head" /> 
</head> 
 
<body> 
        <section id="header">
            <div class="container-fluid">
                <row>
                    <header clas="col-12">
                        <img src="temlplates/<?php echo $this->template; ?>/images/header-bg.jpg" class="img-fluid" alt="CKU header image">
                        <!-- <jdoc:include type="modules" name="header" style="xhtml" /> -->
                    </header>
                </row>
            </div>
        </section>
        <section id="nav">
            <div class="container">
                <row>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link disabled" href="#">Disabled</a>
                    </div>
                </div>
                </nav>


                    <!-- <nav class="main-nav">
                        <jdoc:include type="modules" name="nav" style="xhtml" /> 
                    </nav> -->
                </row>
            </div>
        </section>
        <main>
        <section id="last-news">
                <div class="container">
                    <row>
                        <div class="col-12 last-news">
                            <jdoc:include type="modules" name="lastnews" style="xhtml" /> 
                        </div>
                    </row>
                </div>
            </section>
            <section id="main-container">
                <div class="container">
                    <row>
                        <div class="col-12">
                        <jdoc:include type="component" /> 
                        </div>
                    </row>
                </div>
            </section>
            <section id="aboutus">
                <div class="container">
                    <row>
                        <div class="col-12 main-about-us">
                            <jdoc:include type="modules" name="mainaboutus" style="xhtml" />  
                        </div>
                    </row>
                </div>
            </section>
            <section id="mainschedule">
                <div class="container">
                    <row>
                        <div class="col-12 main-schedule">
                            <jdoc:include type="modules" name="mainschedule" style="xhtml"/> 
                        </div>
                    </row>
                </div>
            </section>
            <section>
                <div class="container">
                    <row>
                        <div class="col-12 main-contact">
                            <jdoc:include type="modules" name="maincontact" style="xhtml"/> 
                        </div>
                    </row>
                </div>
            </section>
        </main>
        <section id="footer">
                <div class="container">
                    <row>
                        <footer class="col-12 footer">
                            <jdoc:include type="modules" name="footer" style="xhtml"/> 
                        </footer>
                    </row>
                </div>
            </section>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script> 
<script src="media/jui/js/bootstrap.min.js"></script> 

</body> 
 
</html> 