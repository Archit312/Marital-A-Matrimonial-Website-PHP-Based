<?php
if (isset($_COOKIE["login"])) {
    $_COOKIE["login"];
    ?>
    <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!----font-Awesome----->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
</head>

<body>
    <!-- ============================  Navigation Start =========================== -->
    <?php
    include("nav.php");
    ?>
    <!-- ============================  Navigation End ============================ -->
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.php"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">More Information</li>
                </ul>
            </div>
            <div class="services">
                <div class="col-sm-6 login_left">
                    <?php
                    if (isset($_GET['success'])) {
                    ?>
                        <div class="alert alert-success">Profile Created</div>
                    <?php
                    } else if (isset($_GET['again'])) {
                    ?>
                        <div class="alert alert-danger">Try Again</div>
                    <?php
                    } else if (isset($_GET['img_err'])) {
                    ?>
                        <div class="alert alert-danger">Image Error...Record Not Saved</div>
                    <?php
                    } else if (isset($_GET['empty'])) {
                    ?>
                        <div class="alert alert-danger">All Field Required</div>
                    <?php
                    }
                    ?>
                    <form method="post" action="enter_more_info.php" >
                        <div class="form-group">
                            <label for="edit-name">Mother Tongue <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="mother_tongue" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Complexion <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="complexion" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Body Type <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="body_type" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-pass">Height <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-pass" name="height" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Weight<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="weight" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Drink <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="drink" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Smoke <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="smoke" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Blood Group <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="blood_group" required>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Diet <span class="form-required" title="This field is required.">*</span></label>
                            <div class="select-block1">
                                <select name="diet" required>
                                    <option value="Veg">Veg</option>
                                    <option value="Non-Veg">Non-Veg</option>
                                    <option value="Vegan">Vegan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="education" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Annual Income <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="annual_income" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Father's Occupation<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="father_occupation" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Mother's Occupation<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="mother_occupation" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Brothers<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="brothers" class="form-text required" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Sisters<span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="sisters" class="form-text required" required>
                        </div>
                        <div class="form-actions">
                            <input type="submit" id="edit-submit" name="op" value="ADD" class="btn_1 submit">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <ul class="sharing">
                        <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
                        <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
                        <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
                        <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
                        <li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
    </div>
    <div class="footer">
        <div class="container">
            <div class="col-md-4 col_2">
                <h4>About Us</h4>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
            </div>
            <div class="col-md-2 col_2">
                <h4>Help & Support</h4>
                <ul class="footer_links">
                    <li><a href="#">24x7 Live help</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                </ul>
            </div>
            <div class="col-md-2 col_2">
                <h4>Quick Links</h4>
                <ul class="footer_links">
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms and Conditions</a></li>
                    <li><a href="services.php">Services</a></li>
                </ul>
            </div>
            <div class="col-md-2 col_2">
                <h4>Social</h4>
                <ul class="footer_social">
                    <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
                    <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="copy">
                <p>Copyright © 2015 Marital . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
        </div>
    </div>
</body>

</html>
    <?php
}
?>
