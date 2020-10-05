
<?php
   include_once("./template/header.php");
?>
<!-- breadcrumbs -->
<section class="inner-banner-main">
    <div class="about-inner services editContent">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name editContent">
                    Log In
                </h3>
                <p class="tiltle-para editContent editContent"> Welcome to the Merciado Amusement Park </p>
            </div>
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="index.php" class="editContent">Home <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent"> Contact Us </li>
                </ul>
            </div>
        </div>
    </div>

    </div>
</section>
<!-- breadcrumbs //-->

<section class="contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container">

            <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Us</h6>
                            <p class="para"><a href="tel:+44 99 555 42">+123 45 67 89</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Us</h6>
                            <p class="para"><a href="mailto:example@mail.com" class="mail">mercidado_park@mail.com</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Address</h6>
                            <p class="para"> Viet Nam , 3 Hoa Binh , ward 3 , District 11 , Ho Chi Minh City </p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9">
                    <form action="" method="post">
                    <div class="twice-two">
                            <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" required="">
                            <input type="email" class="form-control" name="Sender" id="Sender" placeholder="Email" required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject" required="">
                        </div>
                        <textarea name="Message" class="form-control" id="Message" placeholder="Message" required=""></textarea>
                        <button type="submit" class="btn btn-contact">Send Message</button>
                    </form>
                        
                    
                </div>
    </div>
    <div class="map-iframe mt-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.571901876508!2d106.63828301516389!3d10.76743919232765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e9990941ae1%3A0x62719997dfc801f9!2zQ8O0bmcgdmnDqm4gdsSDbiBow7NhIMSQ4bqnbSBTZW4!5e0!3m2!1sen!2s!4v1601342300314!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </div></div>
</section>
<?php 
    include_once("./template/footer.php");   
?>