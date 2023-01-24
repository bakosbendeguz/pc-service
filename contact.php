<?php
include_once("header.php");
require_once("includes/inc_passwords.php");
include("includes/inc_contacts.php");
?>
<!-- Masthead-->
<div class="hero-image">
    <div class="hero-text">
        <h1>Számítógép szerviz</h1>
    </div>
</div>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" id="c_header">Kapcsolat</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form method="POST" id="contactForm" action="includes/inc_contacts.php">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Írja be a teljes nevét" oninvalid="this.setCustomValidity('Kérem töltse ki a mezőt')" oninput="setCustomValidity('')" required />
                        <label for="name">Teljes név</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required oninvalid="this.setCustomValidity('Kérem töltse ki a mezőt')" oninput="setCustomValidity('')" />
                        <label for="email">E-mail cím</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="+36301234567" oninvalid="this.setCustomValidity('Kérem töltse ki a mezőt')" oninput="setCustomValidity('')" required />
                        <label for="phone">Telefonszám</label>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="message" type="text" placeholder="Írja be az üzenetét" style="height: 10rem" oninvalid="this.setCustomValidity('Kérem töltse ki a mezőt')" oninput="setCustomValidity('')" required></textarea>
                        <label for="message">Üzenet</label>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">A levélküldés sikeres</div>
                            Köszönjük megkeresését, hamarosan válaszolunk üzenetére!
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">
                            <div class="fw-bolder">A levélküldés sikertelen</div>
                            Kérem próbálja meg később!
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <input type="submit" class="btn btn-primary btn-xl" id="contact_submitButton" name="contact_submitButton" value="Levél küldése"></input>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="container">
                        <h2 class="centered" id="text">Szegedi üzletünk:</h2>
                        <div id="map_cont">
                            <div id="map1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.7093230624128!2d20.159005316242833!3d46.275880686935324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcd0b82e841efbf4!2zNDbCsDE2JzMzLjIiTiAyMMKwMDknNDAuMyJF!5e0!3m2!1sen!2sus!4v1669747456380!5m2!1sen!2sus" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="container">
                        <h2 class="centered" id="text">Budapesti üzletünk:</h2>
                        <div id="map_cont">
                            <div id="map2">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1348.783657767073!2d19.138166458426582!3d47.459373208270186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3d754b6a1264d44!2zNDfCsDI3JzMyLjkiTiAxOcKwMDgnMTEuNCJF!5e0!3m2!1sen!2sus!4v1669745930152!5m2!1sen!2sus" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<?php
include_once("footer.php");
?>
</body>

</html>