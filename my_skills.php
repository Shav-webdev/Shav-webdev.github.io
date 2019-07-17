<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Skills</title>
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36"  href="android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48"  href="android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72"  href="android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96"  href="android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144"  href="android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">

</head>
<body class="skills">
    <div class="heading-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_skills.php" target="_blank">My Skills</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contacts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="https://web.facebook.com/shavarsh7777" target="_blank">Facebook</a>
                                <a class="dropdown-item" href="https://www.linkedin.com/in/shavarsh-abrahamyan-42065816a/" target="_blank">LinkedIn</a>
                                <a class="dropdown-item" href="https://github.com/Shav-webdev" target="_blank">Github</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-globe"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">Русский</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sign-in.php">sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-accent" href="sign-up.php">sign up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <main>
        <section class="cards_section">
            <div class="container">
                <div class="heading">
                    <h1>Levels of  Language Proficiency</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3" id="first-card">
                        <div class="card">
                            <div class="card-header">
                                <h2>English</h2>
                            </div>
                            <div class="card-body">
                                <h2>Intermediate</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" id="second-card">
                        <div class="card" >
                            <div class="card-header">
                                <h2>Russian</h2>
                            </div>
                            <div class="card-body">
                                <h2>Intermediate</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" id="third-card">
                        <div class="card" >
                            <div class="card-header">
                                <h2>Armenian</h2>
                            </div>
                            <div class="card-body">
                                <h2>Native</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" id="first-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Write</div>
                        </div>
                    </div>
                    <div class="col-12" id="second-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Read</div>
                        </div>
                    </div>
                    <div class="col-12" id="third-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Speak</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cards_section">
            <div class="container">
                <div class="heading">
                    <h1>Levels of Web Programming Technologies Proficiency</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3" id="html-card">
                        <div class="card">
                            <div class="card-header">
                                <h2>Html</h2>
                            </div>
                            <div class="card-body">
                                <h2>Good</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" id="css-card">
                        <div class="card" >
                            <div class="card-header">
                                <h2>Css/Sass</h2>
                            </div>
                            <div class="card-body">
                                <h2>Good</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" id="js-card">
                        <div class="card" >
                            <div class="card-header">
                                <h2>Java Script</h2>
                            </div>
                            <div class="card-body">
                                <h2>Junior level</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" id="php-card">
                        <div class="card">
                            <div class="card-header">
                                <h2>PHP</h2>
                            </div>
                            <div class="card-body">
                                <h2>Junior level</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" id="program-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Write</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="script.js"></script>

</body>
</html>

