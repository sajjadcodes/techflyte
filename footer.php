<footer>
            <div class="ftr-main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="contact-form">
                                <h5>CONTACT US</h5>
                                <form>
                                    <label> Name</label>
                                    <input class="input-field form-control" type="text" name="">
                                    <label> Email</label>
                                    <input class="input-field form-control" type="text" name="">
                                    <label>Remarks</label>
                                    <textarea class="input-field form-control"></textarea>
                                    <div class="text-right">
                                        <input type="submit" value="Submit" name="">
                                    </div>
                                </form>
                                <div class="contact-detail">
                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                        <div class="contact-icon">
                                           <img class="img-fluid" src="images/phone-icon.png" alt=""> 
                                        </div>
                                        <p>(502) 612-0809</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="contact-icon">
                                           <img class="img-fluid" src="images/marker-icon.png" alt=""> 
                                        </div>
                                        <p>1866 Campus Place Louisville, KY 40229</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="ftr-right">
                                <div class="social-detail">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Follow Us</label>
                                            <ul>
                                                <li><a href="#"><img src="images/linkedin-img.png" alt=""></a></li>
                                                <li><a href="#"><img src="images/twitter-img.png" alt=""></a></li>
                                                <li><a href="#"><img src="images/google-plus-img.png" alt=""></a></li>
                                                <li><a href="#"><img src="images/fb-img.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="subscriber">
                                                <label>Subscribe To Us</label>
                                                <form class="d-flex justify-content-start align-items-center">
                                                    <input class="input-subscribe" type="text" name="">
                                                    <button class="submit" type="submit"><img src="images/subscribe-img.png" alt=""></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ftr-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6>About</h6>
                                            <ul>
                                                <li><a href="#">Lorem Ipsum</a></li>
                                                <li><a href="#">Lorem IpsumLorem </a></li>
                                                <li><a href="#">Lorem Ipsum Lorem Ipsum</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>Jobs</h6>
                                            <ul>
                                                <li><a href="#">Lorem Ipsum</a></li>
                                                <li><a href="#">Lorem IpsumLorem </a></li>
                                                <li><a href="#">Lorem Ipsum Lorem Ipsum</a></li>
                                                <li><a href="#">Lorem Ipsum Lorem</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>Contractor</h6>
                                            <ul>
                                                <li><a href="#">Lorem Ipsum</a></li>
                                                <li><a href="#">Lorem IpsumLorem </a></li>
                                                <li><a href="#">Lorem Ipsum Lorem Ipsum</a></li>
                                                <li><a href="#">Lorem Ipsum Lorem</a></li>
                                                <li><a href="#">Lorem Ipsum</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-rights">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © 2020 Tech Flyte. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </div>
    <?php wp_footer(); ?>
    <script>
    $('.nav-menu-btn').click(function() {
        $('header').toggleClass('is-active');
    });
    $('.search-btn').click(function() {
        $('.search-bar').toggleClass('is-active');
    });
    </script>
</body>

</html>