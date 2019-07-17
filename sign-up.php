<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create accaunt</title>
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
<body class="account-page-bg">
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

    <section class="account-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 offset-md-3">
                    <a id="sign-in" href="sign-in.php" title="Sign-in"><i class="fas fa-sign-in-alt"></i></a>
                </div>
                <div class="col-md-2">
                    <a id="create" href="#" title="Create account"><i class="fas fa-user-plus"></i></a>
                </div>
                <div class="col-md-2">
                    <a id="delete" href="delete.php" title="Delete account"><i class="fas fa-trash"></i></a>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form action="action.php" method="post" id="account-form-input">
                        <div class="form-group">
                            <label for="accountInputUsername">Username <i class="fas fa-user"></i></label>
                            <input type="email" class="form-control" id="accountInputUsername" name="username" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="accountInputEmail">Email <i class="fas fa-envelope"></i></label>
                            <input type="email" class="form-control" id="accountInputEmail" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="accountInputPassword">Password <i class="fas fa-lock"></i></label>
                            <input type="password" class="form-control" id="accountInputPassword" name="pass" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-accent">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="root">
            <div id="root-child">This is old text.</div>
        </div>
    </section>
</main>
    <script>
        let secTest = document.getElementById("root");
        let message = "This is new text";
        while (secTest.firstChild)
            secTest.removeChild(secTest.firstChild);
        secTest.appendChild(document.createTextNode(message));
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/fontawesome.min.js"></script>
<script src="script.js"></script>
</body>
</html>