<section class="contact-section wow fadeInUp" id="contactform">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-md-6  col-sm-12 col-lg-6 col-12 wow fadeInUp" data-wow-duration="2s">
                <div class="contact-left-top">
                    <span class="contact-left-top-img"><img alt="Banner" src="assets/img/contact-left-img.svg"></span>
                    <div class="contact-left-top-text">Do you have
                        any <span>Queries?</span></div>
                </div>
                <div class="contact-left-text">You can get in touch with us any time you want.</div>
                <div class="contact-left-bottom">
                    <a target="_blank" href="mailto:info@latesttrack.co.in">
                        <div class="contact-left-bottom-first">
                            <span><img src="./assets/img/message-icon.svg"></span>
                            <div class="contact-left-bottom-first-right">
                                <div class="contact-left-bottom-first-right-text">Mail us at</div>
                                <div class="contact-left-bottom-first-right-link">info@latesttrack.co.in</div>
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=917004175204">
                        <div class="contact-left-bottom-first">
                            <span><img src="assets/img/call-icon.svg"></span>
                            <div class="contact-left-bottom-first-right">
                                <div class="contact-left-bottom-first-right-text">WhatsApp</div>
                                <div class="contact-left-bottom-first-right-link">+91-70041-75204</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6  col-sm-12 col-lg-6 col-12 contact-form-cover wow fadeInUp" data-wow-duration="2s">
                <form id="FooterMessage" action="https://latesttrack.co.in/site/Footer_message_ajax" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                        <span id="name_error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <span id="email_error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="mob" class="form-control" placeholder="Mobile" pattern="[6789][0-9]{9}" required>
                        <span id="mob_error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <select name="type" class="form-control" required>
                            <option value="" class="text-dark">Select Query Type</option>
                            <option value="1" class="text-dark">Sales</option>
                            <option value="2" class="text-dark">Support</option>
                            <option value="3" class="text-dark">Complaint</option>
                            <!--<option value="4">Renewal</option>
							<option value="5">Coorporate sales inquiry</option>
							<option value="6">Job</option> -->
                            <option value="7" class="text-dark">Other</option>
                        </select>
                        <span id="type_error" class="text-danger"></span>
                    </div>
                    <div class="form-group mb-30">
                        <textarea name="message" class="form-control" placeholder="Tell us about your query" required></textarea>
                        <span class="contact-rest-text">Rest assured, no details go out of this room.</span>
                        <span id="message_error" class="text-danger"></span>
                    </div>
                    <br>
                    <br>
                    <div class="form-group mb-0">
                        <button class="btn" type="submit">get In Touch</button>
                    </div>
                </form>
                <span id="message">
                    <img width="250px;" src="assets/img/Check_success.svg" />
                    <div class="contact-left-text">Thank you for contacting us.<br> We will contact you on your
                        whatsapp / Email soon.</div>
                </span>
            </div>
        </div>
    </div>
</section>
<footer class="footer-section ">
    <div class="footer-top ">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-md-6 col-12 col-sm-12 col-lg-7">
                    <div class="row">
                        <div class="col-md-4 col-12 col-sm-4 col-lg-4">
                            <div class="footer-title">Our Locations</div>
                            <div class="footer-head">Head Office</div>
                            <div class="footer-address">Biharsarif Nalanda Bihar 803101 </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-4 col-lg-4">
                            <div class="footer-title">Links</div>
                            <ul class="footer-top-menu">
                                <li><a href="./files/app-latestTrack-release.apk">Download Application</a></li>
                                <li><a href="http://track.latesttrack.co.in/modern/#/login">Member Login</a></li>
                                <li><a href="gps-tracking-device.php">Products</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="#contactform">Contact Us</a></li>
                            </ul>


                        </div>

                        <!--<div class="col-md-4 col-12 col-sm-4 col-lg-4">
                                <div class="footer-title">Locations</div>
                                <ul class="footer-top-menu">
                                    <li><a href="https://latesttrack.co.in/gps-tracking-device-jodhpur-rajasthan">Jodhpur</a></li>
									<li><a href="https://latesttrack.co.in/gps-tracking-device-sardarshahar-rajasthan">Sardarshahar</a></li>
<li><a href="https://latesttrack.co.in/gps-tracking-device-jaipur-rajasthan">Jaipur</a></li>
                                   <!-- <li><a href="https://latesttrack.co.in/gps-tracking-device-udaipur-rajasthan">Udaipur</a></li> 
									<li><a href="https://latesttrack.co.in/gps-tracking-device-rourkela-odisha">Rourkela</a></li>
                                    
                                </ul>
                            </div> -->
                        <div class="col-md-4 col-12 col-sm-4 col-lg-4">
                            <div class="footer-title">Business</div>
                            <ul class="footer-top-menu">
                                <li><a href="#">Are you a Technician?</a></li>
                                <li><a href="#">Become a Dealer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="col-md-6 col-12 col-sm-6 col-lg-6">
                            <div class="footer-title">Connect With Us</div>
                            <ul class="footer-top-menu">
                                <li><a target="_blank" href="#"><span><img src="assets/img/facebook-icon.svg"></span> Facebook</a></li>
                                <li><a target="_blank" href="#"><span><img src="assets/img/instagram-icon.svg"></span>Instagram</a></li>
                                <li><a target="_blank" href="#"><span><img src="assets/img/twitter-icon.svg"></span>Twitter</a></li>
                                <li><a target="_blank" href="#"><span><img width="20px" src="assets/img/youtube.png"></span>Youtube</a></li>
                                <li><a target="_blank" href="#"><span><img width="20px" src="assets/img/linkedin.png"></span>Linkedin</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6 col-lg-6">
                            <div class="footer-title">Legal</div>
                            <ul class="footer-top-menu">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-12 col-sm-12 col-lg-6 footer-bootm-left-text">
                    Copyright © 2021-2022 All Rights Reserved. Powered by Latest Track
                </div>
                <div class="col-md-6 col-12 col-sm-12 col-lg-6">
                    <ul class="footer-bottom-menu">
                        <li><a href="https://nationconnect.in">Designed by Nation Connect</a></li>
                        <!-- <li><a href="disclaimer.html">Disclaimer</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>