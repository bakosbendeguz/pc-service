<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SOS Szamítógép Szerviz</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/cust_styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" id="header-text" href="#page-top">Számítógép szerviz</a>
            <button id="menu" class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menü
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" id="header-text" href="index.php">Kezdőlap</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="services.php">Szolgáltatások</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="references.php">Referenciák</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="contact.php">Kapcsolat</a></li>
                </ul>
                <img src="assets/img/sun.png" id="icon" onclick="location.reload()">
            </div>
        </div>
    </nav>
    <script>
        const themeToggle = document.getElementById("icon");
        const darkThemeClass = 'dark-theme';

        const toggleTheme = () => {
            setTheme(document.body.classList.contains(darkThemeClass));
        }

        const setTheme = (theme) => {
            localStorage.setItem('theme', theme ? 'light' : 'dark');
            themeToggle.src = `assets/img/${!theme ? 'moon' : 'sun'}.png`;
            document.body.classList.toggle(darkThemeClass, !theme);
        }

        themeToggle.addEventListener('click', toggleTheme);

        (() => localStorage.getItem('theme') === 'dark' && setTheme(false))();
    
    </script>