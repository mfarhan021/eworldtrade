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
    </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/footer.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/footer-scripts.php"); ?>
</body>
</html>