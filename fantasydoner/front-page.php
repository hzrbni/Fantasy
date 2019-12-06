<?php get_header(); ?>


<?php $hero = get_field('hero');?>



        <section class="gradient bg-seller first-section d-flex flex-column justify-content-center align-items-center">
                <div
                        class="container text-white center-text d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <h1><?php echo $hero['main_title'];?></h1>
                        <h2><?php echo $hero['small_title'];?></h2>



                        <?php if($hero['link']):?>
                                <h5>
                                        
                                        <a class="custom mt-30 plr-30 color-black btn btn-warning" href="<?php echo $hero['link'];?>">
                                                <b><?php echo $hero['link_text'];?></b>
                                        </a>
                                         
                                
                                </h5>
                      <?php endif;?>


                </div><!-- container -->
                <div class="scroll-down-icon"><span class="scroll-down"></span></div>
        </section>

        

        <section class="story-area grunge-transition-top color-dark pos-relative" id="menu" style="padding-bottom: 100px;">
                <div class="container">
                        <div class="heading">
                                <h3>Menu</h3>
                        </div>


<!--------------------------------------------------- naujas----------------------------------->


        <?php if( have_rows('our_menu') ): ?>

                <div class="row">
                                <div class="col-lg-12 col-md-4 col-sm-4">
                                        <ul class="selecton mb-70">


                                <?php while( have_rows('our_menu') ): the_row();
                                
                                        $category_name = get_sub_field('category_name');
                                        $menu_items = get_sub_field('category');

                                ?>

                                        <li><a href="#" class="active" data-select="<?php echo sanitize_title($category_name);?>"><b><?php echo $category_name;?></b></a></li>

           
                                        




                                <?php endwhile; ?>
                                <div class="col-12  selecton brdr-b-primary mt-4"></div>
                                        </ul> 
                         </div>
                </div>

        <?php endif; ?>





        <?php if( have_rows('our_menu') ): ?>


                <?php while( have_rows('our_menu') ): the_row();
                
                        $category_name = get_sub_field('category_name');
                        $menu_items = get_sub_field('category');

                ?>

                                <div class=" food-menu <?php echo sanitize_title($category_name);?>">

                                
                            
        <?php if( have_rows('category') ): ?>
                <div class="row">
                <?php while( have_rows('category') ): the_row();
                
                        $image = get_sub_field('image');                     
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $price = get_sub_field('price');

                ?>
                                        <div class="col-12 col-md-6">
                                                <div class="card bg-light menu-item mb-4">
                                                        <div class="row no-gutters">
                                                                <div class="col-4">
                                                                        <?php if($image):?>
                                                                        <img src="<?php echo esc_url($image['url']); ?>" class="card-img"
                                                                                alt="<?php echo $title;?>">
                                                                        <?php endif;?>
                                                                </div>
                                                                <div class="col-8">
                                                                        <div class="card-body">
                                                                                <h5 class="card-title"><?php echo $title;?> </h5>
                                                                               <!--  <div class="price"></div> -->
                                                                                <p class="card-text"><?php echo $description;?></p>
                                                                                <a class="btn btn-warning menu-btn px-4"
                                                                                        ><?php echo $price;?>,-</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                       

                                         <?php endwhile; ?>
                                         </div>
                                         <?php endif; ?>



                                 </div><!-- food-menu -->
  


                        





                <?php endwhile; ?>
<?php endif; ?>




<!--------------------------------------------------- naujas------------------------->

<div class="col-12  selecton brdr-b-primary mt-4"></div>

        </section>

        <?php $hero = get_field('delivery');?>



        <section class="grunge-transition-bottom  pos-relative ">
                <div class="container" id="delivery">
                        <div class="heading">
                                <h3>Skip the Queue</h3>
                        </div>

                        <div class="row">
                                <div class="col-lg-4 col-md-4  col-sm-6">
                                        <div class="center-text mb-30">
                                                <a class="color-white btn btn-danger">STEP 1</a>
                                                <img class="order-img" src="<?php bloginfo('template_directory');?>/images/order.svg" alt="">
                                                <h5 class="font-weight-bold">PLACE AN ORDER</h5>
                                                <h5> <?php echo $hero['order_description'];?></h5>

                                        </div>
                                        <!--text-center-->
                                </div><!-- col-md-3 -->

                                <div class="border-top my-3"></div>

                                <div class="col-lg-4 col-md-4  col-sm-6 ">
                                        <div class="center-text mb-30">
                                                <a class="color-white btn btn-danger">STEP 2</a>
                                                <img class="order-img" src="<?php bloginfo('template_directory');?>/images/bill.svg" alt="">
                                                <h5 class="font-weight-bold"> MAKE A PAYMENT</h5>
                                                <h5> <?php echo $hero['payment_description'];?></h5>


                                        </div>
                                        <!--text-center-->
                                </div><!-- col-md-3 -->

                                <div class="col-lg-4 col-md-4  col-sm-6 ">
                                        <div class="center-text mb-30">
                                                <a class="color-white btn btn-danger">STEP 3</a>
                                                <img class="order-img"  src="<?php bloginfo('template_directory');?>/images/unicorny.svg" alt="">
                                                <h5 class="font-weight-bold">GET IT DELIVERED</h5>
                                                <h5> <?php echo $hero['delivery_description'];?></h5>


                                        </div>
                                        <!--text-center-->

                                </div><!-- col-md-3 -->
                                <div class="col-lg-12 dplay-tbl-cell center-text">

                                <h5>
                                        
                                        <a class="custom mt-30 plr-30 color-black btn btn-warning" target="_blank" href="<?php echo $hero['order_link'];?> ">
                                                <b>MAKE AN ORDER</b>
                                        </a>
                                         
                                
                                </h5>
                                </div><!-- dplay-tbl-cell -->

        </section>






<?php get_footer(); ?>