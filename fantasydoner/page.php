<?php get_header(); ?>



<section class="bg-4 h-650x  main-slider pos-relative">
                <div class="container h-100">
                        <div class="dplay-tbl">
                                <div class="dplay-tbl-cell left-text color-white pt-90">
                                        <h1 class="mt-30 mb-15">About <span></span> Us</h1>
                                </div><!-- dplay-tbl-cell -->
                        </div><!-- dplay-tbl -->
                </div><!-- container -->
        </section>

        <?php $hero = get_field('about_me');?>
        <section class="grunge-transition-bottom grunge-transition-top">
                <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
                        <h3 class="mb-30">Who are We</h3>

                        <div class="row">
                                <div class="col-md-6">
                                        <p> <?php echo $hero['about_first'];?>

                                        </p>
                                        
                                        <div class="col-md-10 my-5 p-0">
                                                <img src="<?php bloginfo('template_directory');?> /images/dude.jpg" alt="Menu Image">
                                                <h5><b> <?php echo $hero['name'];?>
</b></h5>
                                                <h5> <?php echo $hero['occupation'];?>
</h5>
                                        </div>

                                        <p class="col-md-12 px-0"> <?php echo $hero['about_second'];?>

                                                
                                        </p>
                                </div>
                                <div class="col-md-6">
                                        <div class="row" style="height: 10%;"></div>
                                        <div class="row" style="height: 70%;">
                                                <img class="" src="<?php bloginfo('template_directory');?> /img/White_2.gif" alt="" style="margin: auto 0;">
                                        </div>
                                        <div class="row" style="height: 20%;"></div>
                                        
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-12"></div>
                                <div class="col flex-shrink-1"></div>
                                <div class="col  flex-grow-1">

                                </div>
                        </div>
                </div>
        </section>




<?php get_footer(); ?>