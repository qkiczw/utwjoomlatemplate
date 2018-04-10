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
                            <div class="col-sm-12 col-md-3 header-logo">Logo</div>
                            <div class="col-sm-12 col-md-9 header-school-name">NAzwa Szkoly</div>
                        </div>
                </div>
                <!-- Navigation menu -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">UTW</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Start <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">O nas</a>
                        <a class="nav-item nav-link" href="#">Aktualności</a>
                        <a class="nav-item nav-link disabled" href="#">Plan</a>
                        </div>
                    </div>
                </nav>
            </header>
        </section>
        <!-- Main site content -->
        <main>
        
        </main>
        <!--Footer-->
        <footer>
            <section id="footer">
               <p>Łukasz Sztormowski &copy; 2018</p>
            </section>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>