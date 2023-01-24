<?php
include_once("header.php");
?>
<!-- Masthead-->
<div class="hero-image">
    <div class="hero-text">
        <h1>Számítógép szerviz</h1>
    </div>
</div>
<!-- Portfolio Section-->
<section class="page-section" id="services">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" id="s_header">Szolgáltatások</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" align="center" data-bs-toggle="modal" data-bs-target="#startpageModal1">
                    <img class="img-fluid center" width="50%" src="assets/img/portfolio/web-design.png" alt="Weboldal készítés, Webdesign" id="img1" />
                    <div align="center">
                        <p class="lead" id="text">Weboldal készítés, Webdesign</p>
                    </div>
                </div>
            </div>
            <script>
                if (localStorage.getItem('theme') === 'dark') {
                    img1.src = "assets/img/portfolio/web-design-dark.png";
                }
                else {
                    img1.src = "assets/img/portfolio/web-design.png";
                }
            </script>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" align="center" data-bs-toggle="modal" data-bs-target="#startpageModal2">
                    <img class="img-fluid" width=50% src="assets/img/portfolio/computer-servicing.png" alt="Számítógép Szerviz Helyszínen" id="img2" />
                    <div align="center">
                        <p class="lead" id="text">Számítógép Szerviz Helyszínen</p>
                    </div>
                </div>
            </div>
            <script>
                if (localStorage.getItem('theme') === 'dark') {
                    img2.src = "assets/img/portfolio/computer-servicing-dark.png";
                }
                else {
                    img2.src = "assets/img/portfolio/computer-servicing.png";
                }
            </script>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" align="center" data-bs-toggle="modal" data-bs-target="#startpageModal3">
                    <img class="img-fluid" width=50% src="assets/img/portfolio/it-technician.png" alt="Rendszergazda Szolgáltatás" id="img3" />
                    <div align="center">
                        <p class="lead" id="text">Rendszergazda szolgáltatás</p>
                    </div>
                </div>
            </div>
            <script>
                if (localStorage.getItem('theme') === 'dark') {
                    img3.src = "assets/img/portfolio/it-technician-dark.png";
                }
                else {
                    img3.src = "assets/img/portfolio/it-technician.png";
                }
            </script>
            <!-- Portfolio Item 4-->
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" align="center" data-bs-toggle="modal" data-bs-target="#startpageModal4">
                    <img class="img-fluid" width=50% src="assets/img/portfolio/web-storage.png" alt="Domain, E-mail és Webtárhely" id="img4" />
                    <div align="center">
                        <p class="lead" id="text">Domain, E-mail és Webtárhely</p>
                    </div>
                </div>
            </div>
            <script>
                if (localStorage.getItem('theme') === 'dark') {
                    img4.src = "assets/img/portfolio/web-storage-dark.png";
                }
                else {
                    img4.src = "assets/img/portfolio/web-storage.png";
                }
            </script>
            <!-- Portfolio Item 5-->
            <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                <div class="portfolio-item mx-auto" align="center" data-bs-toggle="modal" data-bs-target="#startpageModal5">
                    <img class="img-fluid" width=50% src="assets/img/portfolio/data-recovery.png" alt="Adatmentés, adat-helyreállítás, vírusirtás" id="img5" />
                    <div align="center">
                        <p class="lead" id="text">Adatmentés, adat-helyreállítás, vírusirtás</p>
                    </div>
                </div>
            </div>
            <script>
                if (localStorage.getItem('theme') === 'dark') {
                    img5.src = "assets/img/portfolio/data-recovery-dark.png";
                }
                else {
                    img5.src = "assets/img/portfolio/data-recovery.png";
                }
            </script>
            <!-- Portfolio Item 6-->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" align="center" data-bs-toggle="modal" data-bs-target="#startpageModal6">
                    <img class="img-fluid" width=50% src="assets/img/portfolio/remote-support.png" alt="Távsegítség" id="img6" />
                    <div align="center">
                        <p class="lead" id="text">Távsegítség</p>
                    </div>
                </div>
            </div>
            <script>
                if (localStorage.getItem('theme') === 'dark') {
                    img6.src = "assets/img/portfolio/remote-support-dark.png";
                }
                else {
                    img6.src = "assets/img/portfolio/remote-support.png";
                }
            </script>
        </div>
    </div>
</section>
<!-- Footer-->
<?php
include_once("footer.php");
?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>