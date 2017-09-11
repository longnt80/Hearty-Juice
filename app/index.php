<?php $page = 'home'; ?>
<?php include('header.php'); ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
        <?php include('navigation.php'); ?><!-- main menu -->
        </header>

        <!--  ************************************************************** Area that is different between Homepage and subpages **************************************************************  -->

        <!-- Main slider/banner  on homepage-->
        <div class="slider">
            <div class="banner">
                <div class="overlay">
                    <div class="marketing-text">
                            <h2 class="animated slideInUp">Magic shot in cancer</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-content">

             <div class="emphasized-bg animated-element">
                <div class="container small">
                    <div class="span12">
                       <h5 class="text-center">Free trial program 1 week at Hearty Center from 1 Nov. 2017. Please contact email: <a href="mailto:info@heartycenter.com.au">info@heartycenter.com.au</a> to get more information.</h5>
                       <!-- <h5 class="text-center">By 2016, 10 people diagnosed with cancer and other diseases drank the Hearty Condensed Juice. They made <a href="../testimonials/">testimonials</a> on their incredible results.</h5> -->
                    </div>
                </div>
            </div>

            <div class="spacer"></div><!-- horizontal space -->


                <div class="container animated-element">
                    <div class="group">
                            <div class="span12"><h2 class="text-center">We have 3 types of the condensed juice:</h2></div>
                            <div class="span4">
                                <p class="text-center"><strong>For cancer with diabetes</strong></p>
                                <img alt="For diabetes" src="../images/for-diabetes.jpg">
                            </div>
                            <div class="span4">
                                <p class="text-center"><strong>For cancer without diabetes</strong></p>
                                <img alt="Without diabetes" src="../images/condensed-juice.jpg"></div>
                            <div class="span4">
                                <p class="text-center"><strong>Other diseases</strong></p>
                                <img alt="Other diseases" src="../images/other-diseases.jpg"></div>
                    </div>
                </div>


            <div class="spacer"></div><!-- horizontal space -->

            <div class="emphasized-bg animated-element">
                <div class="container small">
                    <h2 class="text-center">You should maintain a strong Immune System when you have cancer. Hearty Juice will assist you with vitamins and antioxidants.</h2>
                    <div class="span12">
                        <p>Hearty Condensed Juice is not for everyone!</p>
                        <p>It is for anyone who:</p>
                        <ul>
                            <li>is sick and committed to healing,</li>
                            <li>is afraid of becoming sick,</li>
                            <li>cares for their families’ health, </li>
                            <li>wants to change their health care system.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="spacer"></div><!-- horizontal space -->

            <div class="container animated-element">
                <h2 class="text-center">How it is made:</h2>
                <div class="group five-cols text-center">
                        <div class="span2">
                            <span><img alt="Prepare ingredients" src="../images/ingredients.jpg"></span>
                            <div>Prepare ingredients</div>
                        </div><div class="span2">
                            <span><img alt="Mix green juice with fermented juice" src="../images/machines.jpg"></span>
                            <div>Mix green juice with fermented juice</div>
                        </div><div class="span2">
                            <span><img alt="Stir and cook until condensation" src="../images/stirring-machine.jpg"></span>
                            <div>Stir and cook until condensation</div>
                        </div><div class="span2">
                            <span><img alt="Finished condensed juice" src="../images/condensed-juice.jpg"></span>
                            <div>Finished condensed juice</div>
                        </div><div class="span2">
                            <span><img alt="Pour condensed juice to 50ml warm water (40°C). Stir and drink." src="../images/finished-product.jpg"></span>
                            <div>Pour condensed juice to 50ml warm water (40°C). Stir and drink.</div>
                        </div>
                </div>
            </div>

        </div><!--  End .main-content  -->

<!--  ************************************************************** End of area that is different between Homepage and subpages **************************************************************  -->

        <?php include('footer.php'); ?><!-- footer -->
        <?php include('common-scripts.php'); ?><!-- scripts -->


    </body>
</html>
