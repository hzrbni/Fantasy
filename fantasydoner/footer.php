        <?php $hero = get_field('contacts');?>
        <section class="story-area contact-section color-white pos-relative" style="padding-top: 200px;">
                <div class="container">
                        <div class="row mb-30">
                                <!-- Ugne deleted one div with h2 from here and moved below -->  
                                <h3 class="col-12 mb-3">Come by</h3>
                                <div class="col-sm-12 col-md-4">
                                        <!-- Ugne changed added h2 here with COME BY -->  

                                        <!-- Ugne changed from h5 to h4 here (it was a mistake before) --> 
                                        <h4 class="mb-3"><b>Contact us:</b> </h4>
                                                <h5><?php echo $hero['number'];?></h5>
                                                <h5><?php echo $hero['email'];?></h5>

                                                <h5 class="mt-4"><?php echo $hero['address'];?></h5>
                                                <h5><?php echo $hero['city'];?></h5>
                                                <h5 class="mb-30"><?php echo $hero['zip_code'];?></h5>
                                                <h4 class="mb-3"><b>Opening hours:</b> </h4>
                                                <h5><?php echo $hero['opening_days'];?></h5>
                                                <h5 class="mb-30"><?php echo $hero['opening_hours'];?></h5>
                                              <!-- Ugne added social media div -->  
                                                <div class="row vertical-divider my-5" style="margin-top: 20px">
                                                        <div class="col-xs-6 text-warning font-14 "><a  href="https://www.facebook.com/FantasyRanders/" target="_blank">Facebook</a></div>
                                                        <div class="col-xs-6 text-warning font-14 "><a  href="https://www.instagram.com/">Instagram</a></div>
                                                </div>
                                </div>
                                 <!-- Ugne changed the height and class --> 
                                 <div class="col-sm-12 col-md-7 offset-md-1">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d389.69812776453665!2d10.035278292702376!3d56.459741043747485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c1da50aadaf33%3A0xa79a8228bf819ff!2sFantasy%20D%C3%B6ner%20%26%20Grill!5e0!3m2!1sen!2sdk!4v1575380025231!5m2!1sen!2sdk"
                                                        height="415" frameborder="0" style="border:0;width: 100%;"
                                                        allowfullscreen=""></iframe>
                                        </div>
                               

                        </div><!-- row -->

                </div><!-- container -->
        </section>















  <footer class="pb-50  pt-70">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-4 col-sm-6 text-left">
                                        Copyright &copy;Fantasy Döner&Grill
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                        EST 2019
                                </div>
                                <div class="col-lg-4 col-sm-6 text-right">
                                        <div class="social-btns">
                                                <a href="https://www.facebook.com/FantasyRanders/" class="pr-2"><i class="icon ion-logo-facebook"></i>
                                                </a>
                                                <a href="#" class=""><i class="icon ion-logo-instagram"></i>
                                                </a>
                                        </div>
                                </div>
                        </div>
                </div><!-- container -->
        </footer>

<?php wp_footer();?>

</body>
</html>