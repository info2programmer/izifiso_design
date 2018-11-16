<footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-6 col-md-3 footer-nav">
                    <ul class="nav-link">
                        <li><a href="#" class="nav-link__item">About Us</a></li>
                        <li><a href="movie-list-left.html" class="nav-link__item">Blog</a></li>
                        <li><a href="trailer.html" class="nav-link__item">Camp</a></li>
                        <li><a href="rates-left.html" class="nav-link__item">Trail</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-3 footer-nav">
                    <ul class="nav-link">
                        <li><a href="coming-soon.html" class="nav-link__item">Club</a></li>
                        <li><a href="cinema-list.html" class="nav-link__item">Contact Us</a></li>
                        <li><a href="offers.html" class="nav-link__item">Trams And Conditions</a></li>
                        <li><a href="news-left.html" class="nav-link__item">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">Izifiso<br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <a href='https://www.facebook.com/izifiso/' class="social__variant fa fa-facebook" target="_blank"></a>
                            <a href='https://twitter.com/_izifiso_' class="social__variant fa fa-twitter" target="_blank"></a>
                            <a href='https://www.instagram.com/izifiso/' class="social__variant fa fa-instagram" target="_blank"></a>
                        </div>

                        <div class="clearfix"></div>
                        <p class="copy">&copy; Izifiso, <?php echo date('Y') ?>. All rights reserved. Done by Izifiso Privet Limited</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
    <div class="overlay overlay-hugeinc">

        <section class="container">

            <div class="col-sm-4 col-sm-offset-4">
                <button type="button" class="overlay-close">Close</button>
                <form id="login-form" class="login" method='get' novalidate=''>
                    <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                    <div class="social social--colored">
                        <a href='#' class="social__variant fa fa-facebook"></a>
                        <a href='#' class="social__variant fa fa-twitter"></a>
                        <a href='#' class="social__variant fa fa-tumblr"></a>
                    </div>

                    <p class="login__tracker">or</p>

                    <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                    </div>

                    <div class="login__control">
                        <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                        <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                    </div>
                </form>
            </div>

        </section>
    </div>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Magnific-popup -->
        <script src="js/external/jquery.magnific-popup.min.js"></script>
        
         <!-- jQuery REVOLUTION Slider -->
         <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Stars rate -->
        <script src="js/external/jquery.raty.js"></script>

        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>
         <!-- Swiper slider -->
         <script src="js/external/idangerous.swiper.min.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>

        

		
		<script type="text/javascript">
            $(document).ready(function() {
                init_Gallery();
                init_Home();
                init_SinglePage();
            });
		</script>

</body>

</html>