<?php 
    defined('_JEXEC') or die; 
    $app = JFactory::getApplication(); 
?> 
 
 <!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>UTW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <jdoc:include type="head" /> 
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--CSS-->
    <link href="templates/<?php echo $this->template; ?>/css/my-responsive.css" rel="stylesheet">
    <link href="templates/<?php echo $this->template; ?>/css/template.css" rel="stylesheet">

</head>
<body>
    <!--Whole site container-->
    <div class="container-fluid">
        <!--Header-->
        <section id="section-header">
            <header>
                <div class="container-fluid header-content-area">
                        <div class="row">
                            <div class="col-sm-12 col-md-5 col-lg-4 header-logo-area"><figure><img class="header-logo img-fluid mx-auto d-block" src="templates/<?php echo $this->template; ?>/images/utw-logo.png"></figure></div>
                            <div class="col-sm-12 col-md-7 col-lg-8 header-school-name">Sopocki Uniwersytet Trzeciego Wieku</div>
                        </div>
                </div>
            </header>
            <!-- Navigation menu -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="http://ckusopot.pl/utw">
                        <div><img class="utw-logo-min img-fluid" src="templates/<?php echo $this->template; ?>/images/utw-logo-min.png"></div><div class="navbar-brand-text">WWW.SUTWSOPOT.PL</div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="http://ckusopot.pl/utw/">Start <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="http://ckusopot.pl/utw/index.php?option=com_content&view=article&id=6">O nas</a>
                        <a class="nav-item nav-link" href="https://ckusopot.pl/utw/index.php/news-test?limitstart=0">Aktualności</a>
                        <a class="nav-item nav-link" href="http://ckusopot.pl/utw/index.php?option=com_content&view=article&id=3">Rekrutacja</a>
                        <a class="nav-item nav-link" href="http://ckusopot.pl/utw/index.php?option=com_content&view=article&id=1">Plan</a>
                        <a class="nav-item nav-link" href="http://ckusopot.pl/utw/index.php?option=com_content&view=article&id=16">15-lecie</a>
                        <!-- <a class="nav-item nav-link" href="http://ckusopot.pl/utw/index.php?option=com_content&view=article&id=5">Turystyka</a> -->
                        <!-- <a class="nav-item nav-link" href="http://ckusopot.pl/utw/index.php?option=com_content&view=article&id=4">Projekty</a> -->
                        <a class="nav-item nav-link" href="http://ckusopot.pl/utw/index.php?option=com_content&view=article&id=2">Kontakt</a>
                        </div>
                    </div>
                </nav>
        </section>
        <!-- Main site content -->
        <main>
            <!-- Main news -->
            <section id="last-news-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 last-news">
                                <jdoc:include type="modules" name="lastnews" style="xhtml" /> 
                            </div>
                        </div>
                    </div>
            </section>
            <!-- Main content -->
            <section id="main-content-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 main-content">
                                <jdoc:include type="component" /> 
                            </div>
                        </div>
                    </div>
            </section>
            <!-- About Us -->
            <section id="main-about-us-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 main-about-us">
                            <jdoc:include type="modules" name="mainaboutus" style="xhtml" /> 
                            </div>
                        </div>
                    </div>
            </section>
             <!-- Main Schedule -->
             <section id="main-schedule-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 main-schedule">
                            <jdoc:include type="modules" name="mainschedule" style="xhtml" /> 
                            </div>
                        </div>
                    </div>
            </section>
            <!-- Main Contact -->
            <section id="main-contact-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 main-contact">
                            <jdoc:include type="modules" name="maincontact" style="xhtml" /> 
                            </div>
                        </div>
                    </div>
            </section>
        </main>
        <!-- Footer -->
        <section id="main-footer-section">
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 footer">
                            <jdoc:include type="modules" name="footer" style="xhtml" /> 
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <?php
        JHtml::script(Juri::base() . 'templates/ckutest2018/js/my-jquery.js');
    ?>

</body>
</html>