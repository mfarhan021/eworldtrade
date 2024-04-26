<?php /*session_start();
include $_SERVER['DOCUMENT_ROOT'].'/include.php';
include $_SERVER['DOCUMENT_ROOT'].'/include/csfr.php'; */?>
<!doctype html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/header-scripts.php"); ?>
    <title></title>
    <meta name="description" content="">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-offset="100">
<?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/header.php"); ?>
<section class="contact-banner text-center">
    <div class="container">
        <h1>
            Any Problem?
        </h1>
        <p>
            Now Worries - Our Support Service is always ready to help you.
        </p>
    </div>
</section>
<section class="get-touch">
    <div class="container">
        <div class="heading text-center">
            <h2>
                Get In Touch!
            </h2>
            <p>
                Email us with any question or inquiries. We would be happy to answer your questions and setup a meeting with you.
                <br> Let us know your feedback so that we can do our best to serve you.
            </p>
        </div>
        <div class="row">
            <div class="col-md-10 offset-1">
                <form method="POST" action="https://www.eworldtrade.com/contact-us/" accept-charset="UTF-8" name="contactform" class="validate-form" id="contactForm" novalidate="novalidate"><input name="_token" type="hidden" value="hbW7xqcgtURO8XhESHVKwrRgyVZqwtHWVe7cE10H">
                    <div class="row">
                        <div class="col-sm-4">
                            <input class="form-control" required="" placeholder="First Name" autocomplete="fname" name="first_name" type="text" aria-required="true">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" required="" placeholder="Last Name" autocomplete="lname" name="last_name" type="text" aria-required="true">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" required="" placeholder="Phone" autocomplete="phone" name="phone" type="tel" aria-required="true">
                        </div>

                        <div class="col-sm-4">
                            <input class="form-control" required="" placeholder="E-mail" autocomplete="email" name="email" type="email" aria-required="true">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" required="" placeholder="IM (SKYPE / QQ / WeChat / Whatsapp)" autocomplete="username" name="messenger_id" type="text" aria-required="true">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" required="" placeholder="Company Name / Website" autocomplete="organization" name="company_name" type="text" aria-required="true">
                        </div>

                        <div class="col-sm-10 offset-1">
                            <textarea class="form-control" required="" placeholder="Message" rows="3" name="message" cols="50" aria-required="true"></textarea>
                        </div>
                        <div class="col-sm-5 offset-1">
                            <div class="g-recaptcha" data-sitekey="6Le7mqwZAAAAABUcYfWI4kz6BKS4SztfyeQ6LkyE"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-xn9pe3tdbr6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le7mqwZAAAAABUcYfWI4kz6BKS4SztfyeQ6LkyE&amp;co=aHR0cHM6Ly93d3cuZXdvcmxkdHJhZGUuY29tOjQ0Mw..&amp;hl=en&amp;v=V6_85qpc2Xf2sbe3xTnRte7m&amp;size=normal&amp;cb=578a36p7r8ov"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                        </div>

                        <div class="col-sm-5 text-end">
                            <input type="submit" value="Submit" class="btn btn-red">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="global-business">
    <div class="container">
        <div class="heading text-center">
            <h2>
                Our Global Business Centers
            </h2>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="usa-tab" data-bs-toggle="tab" data-bs-target="#usa" type="button" role="tab" aria-controls="usa" aria-selected="true">USA Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="wuhan-tab" data-bs-toggle="tab" data-bs-target="#wuhan" type="button" role="tab" aria-controls="wuhan" aria-selected="false">Wuhan Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mexico-tab" data-bs-toggle="tab" data-bs-target="#mexico" type="button" role="tab" aria-controls="mexico" aria-selected="false">Mexico Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pakistan-tab" data-bs-toggle="tab" data-bs-target="#pakistan" type="button" role="tab" aria-controls="pakistan" aria-selected="false">Pakistan Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="shanghai-tab" data-bs-toggle="tab" data-bs-target="#shanghai" type="button" role="tab" aria-controls="shanghai" aria-selected="false">Shanghai Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="korea-tab" data-bs-toggle="tab" data-bs-target="#korea" type="button" role="tab" aria-controls="korea" aria-selected="false">South Korea Office </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="vietnam-tab" data-bs-toggle="tab" data-bs-target="#vietnam" type="button" role="tab" aria-controls="vietnam" aria-selected="false">Vietnam Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="uk-tab" data-bs-toggle="tab" data-bs-target="#uk" type="button" role="tab" aria-controls="uk" aria-selected="false">UK Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="africa-tab" data-bs-toggle="tab" data-bs-target="#africa" type="button" role="tab" aria-controls="africa" aria-selected="false">South Africa Office</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="iran-tab" data-bs-toggle="tab" data-bs-target="#iran" type="button" role="tab" aria-controls="iran" aria-selected="false">Iran Office</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="usa" role="tabpanel" aria-labelledby="usa-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13417.450430693558!2d-96.7954577!3d32.7826434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a41a8f459b2be47!2seWorldTrade!5e0!3m2!1sen!2s!4v1496130016477" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="wuhan" role="tabpanel" aria-labelledby="wuhan-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439724.10925274994!2d114.02019340487423!3d30.567816003244722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x342ea376b1a8cb4d%3A0x4bf182fc8cf69440!2sDonghu+Lake!5e0!3m2!1sen!2sus!4v1559242947953!5m2!1sen!2sus" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mexico" role="tabpanel" aria-labelledby="mexico-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <div class="col-md-7 px-0">
                                    <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                    </h6>
                                    <p>
                                        1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                        United States of America.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.007313766225!2d-99.65841298490909!3d19.282048150473553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd89960321cacd%3A0x7c54bbb2524670b2!2sC.%20Mariano%20Matamoros%20611%2C%20Francisco%20Murgu%C3%ADa%2C%2050130%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.%2C%20Mexico!5e0!3m2!1sen!2s!4v1675446467605!5m2!1sen!2s" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pakistan" role="tabpanel" aria-labelledby="pakistan-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.011487796389!2d67.03947411448624!3d24.829280752622502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dca0a1a986f%3A0xbe7bad2cc28cec60!2sThe+Residence+Tower!5e0!3m2!1sen!2s!4v1486466710899" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="shanghai" role="tabpanel" aria-labelledby="shanghai-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.793464476249!2d121.4561523151434!3d31.226450981467845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b2701018ef5325%3A0xa39ca85b09cf2d26!2s696+Wei+Hai+Lu%2C+Jingan+Qu%2C+Shanghai+Shi%2C+China!5e0!3m2!1sen!2s!4v1497006577857" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="korea" role="tabpanel" aria-labelledby="korea-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.720637444514!2d127.06585441481104!3d37.56164513216687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cbb33499de95f%3A0x9051a07d91eb0db3!2s52+Janghan-ro+2-gil%2C+Dongdaemun-gu%2C+Seoul%2C+South+Korea!5e0!3m2!1sen!2s!4v1486548002600" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="vietnam" role="tabpanel" aria-labelledby="vietnam-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7485414.6162862955!2d104.70045938109425!3d16.934719367978396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5f41e95f55%3A0xcfc029607e11a4fe!2sHoa%20Lac%20High-tech%20Park!5e0!3m2!1sen!2s!4v1654213976599!5m2!1sen!2s" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="uk" role="tabpanel" aria-labelledby="uk-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.522281000725!2d-0.37399128407610754!3d51.46692692148243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760cd38b3c01e3%3A0x32640623f01eedf2!2sSuite%202%2C%20Ground%20Floor%2C%20Quest%20House%2C%20125-135%20Staines%20Rd%2C%20Hounslow%20TW3%203JB%2C%20UK!5e0!3m2!1sen!2s!4v1589461744089!5m2!1sen!2s" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="africa" role="tabpanel" aria-labelledby="africa-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229315.0776901978!2d27.652282578817506!3d-26.097348855129987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e959a106fe5e1d1%3A0xb746f4d42c34d9eb!2sKrugersdorp%2C%20South%20Africa!5e0!3m2!1sen!2s!4v1583946261666!5m2!1sen!2s" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="iran" role="tabpanel" aria-labelledby="iran-tab">
                <div class="our-address">
                    <div class="row g-0 mx-0">
                        <div class="col-md-5 px-0">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo $siteurl ?>/assets/images/usa-flag.png" alt="">
                                </div>
                                <h6>
                                    USA Office
                                    <span>
                                        (Headquarter)
                                    </span>
                                </h6>
                                <p>
                                    1910 Pacific Avenue, Suit No. 8025, Dallas, Texas, <br>
                                    United States of America.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="map">
                                <iframe frameborder="0" allowfullscreen="" id="contactMapIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51095.1843592286!2d54.3769556507594!3d36.83172086312301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8349d4bb44853b%3A0xfd797c3f32f58939!2sGorgan%2C%20Golestan%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1695811120921!5m2!1sen!2s" class="w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/footer.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/footer-scripts.php"); ?>
</body>
</html>