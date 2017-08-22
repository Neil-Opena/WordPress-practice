<?php
/*
    Template Name: Home Page
 */

//Custom Fields
$prelaunch_price = get_post_meta(11,'prelaunch_price',true);
$launch_price = get_post_meta(11,'launch_price',true);
$final_price = get_post_meta(11,'final_price',true);
$course_url = get_post_meta(11,'course_url',true);
$button_text = get_post_meta(11,'button_text',true);
$optin_text = get_post_meta(11,'optin_text',true);
$optin_button_text = get_post_meta(11,'optin_button_text',true);

//Advanced Custom Fields
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_description = get_field('reason_2_desciption');

$who_section_title = get_field('who_section_title');
$who_section_image = get_field('who_section_image');
$who_section_body = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

$project_feature_title = get_field("project_feature_title");
$project_feature_body = get_field("project_feature_body");

$video_featurette_title = get_field('video_featurette_title');
$video_featurette_video = get_field('video_featurette_video');

get_header(); ?>

    <!-- Hero -->
    <section id="hero" data-type="background" data-speed="3">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
                    </div>
                    <div class="col-sm-7 hero-text">
                        <h1><?php bloginfo('name'); ?></h1>
                        <p class="lead"><?php bloginfo('description');?></p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                                <span><?php echo $prelaunch_price;?></span>
                            </div>
                            <div class="price">
                                <h4>Launch Price <small>Coming soon!</small></h4>
                                <span><?php echo $launch_price;?></span>
                            </div>
                            <div class="price">
                                <h4>Final Price <small>Coming soon!</small></h4>
                                <span><?php echo $final_price;?></span>
                            </div>
                        </div>

                        <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url;?>" role="button" target="_blank"><?php echo $button_text; ?></a></p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <!-- Opt in Section -->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text;?></p>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text;?></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Boost your income -->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">

                <?php
                    if(!empty($income_feature_image)) : ?>
                    <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
                <?php  endif; ?>

                <h2><?php echo $income_section_title; ?></h2>
            </div>
            <p class="lead"><?php echo $income_section_description; ?></p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1_title; ?></h3>
                    <p><?php echo $reason_1_description; ?></p>
                </div>
                <div class="col-sm-6">
                    <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_description; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who benefits -->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">
                <?php if(!empty($who_section_image)) : ?>
                    <img src="<?php echo $who_section_image['url']; ?>" alt="<?php echo $who_section_image['alt']; ?>">
                <?php endif ?>
                <h2><?php echo $who_section_title ?></h2>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo $who_section_body; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Course features -->
    <section id="course-features">
        <div class="container">
            <div class="section-header">
                <?php if(!empty($features_section_image)) : ?>
                    <img src="<?php echo $features_section_image['url'];?>" alt="<?php echo $features_section_image['alt'];?>">
                <?php endif; ?>
                <h2><?php echo $features_section_title; ?></h2>
                <?php if(!empty($features_section_body)) : ?>
                    <p class="lead"><?php echo $features_section_body; ?></p>
                <?php endif; ?>
            </div>
            <div class="row">

                <?php $loop = new WP_Query( array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

                <?php while($loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-sm-2">
                        <i class="<?php the_field('course_feature_icon');?>"></i>
                        <h4><?php the_title(); ?></h4>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <!-- Project features -->
    <section id="project-features">
        <div class="container">
            <h2><?php echo $project_feature_title; ?></h2>
            <p class="lead"><?php echo $project_feature_body; ?></p>

            <div class="row">
                <?php $loop = new WP_Query( array('post_type' => 'project_feature','orderby' => 'post_id', 'order' => 'ASC'));
                    while($loop -> have_posts() ): $loop-> the_post();
                ?>

                    <div class="col-sm-4">
                        <?php
                            if(has_post_thumbnail() ){
                                the_post_thumbnail();
                            }

                         ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Video featurette -->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2><?php echo $video_featurette_title; ?></h2>
                    <h3><?php echo $video_featurette_video; ?></h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructor -->
    <section id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Your Instructor <small>Brad Hussey</small></h2>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://twitter.com/bradhussey" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://facebook.com/bradhussey" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://plus.google.com/+BradHussey" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.</p>
                    <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>
                    <p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous business, big &amp; small, across the Americas.</p>
                    <p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
                    <hr>
                    <h3>The Numbers <small>They Don't Lie</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41,000+ <span>students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    568 <span>reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    8 <span>courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="kudos">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What People Are Saying About Brad</h2>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brennan.jpg" alt="Brennan">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
                                <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
                                <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/aj.png" alt="Illustration of a man with a beard">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                Brad is amazing and I honestly thiink he's the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
                                <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                Brad is an excellent instructor. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like you're doing something right out of the gate! I really can't believe this is free. I highly recommend taking advantage of this course.
                                <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>