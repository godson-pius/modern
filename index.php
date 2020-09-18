<?php
    require_once 'admin/inc/functions/config.php';
    $news = fetchAllDesc("news", "id", 0, 10);

?>

<?php $page_title = "Home || Modern Nur/Pri Sch.";
require_once 'inc/header.php'; ?>

<div class="banner-wrapper">
    <section class="banner-one banner-carousel__one no-dots owl-theme owl-carousel">
        <div class="banner-one__slide banner-one__slide-one">
            <div class="container">
                <div class="banner-one__bubble-1"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-2"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-3"></div><!-- /.banner-one__bubble- -->
                <div class="bg-danger banner-one__scratch" style="width: 440px; height: 720px; background-image: url('assets/images/main/slide1.png'); background-position: center; background-size: cover;"></div>
                <div class="bg-danger banner-one__person" style="width: 440px; height: 720px; background-image: url('assets/images/main/slide1.png'); background-position: center; background-size: cover;"></div>
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <h3 class="banner-one__title banner-one__light-color">Modern <br>
                            Nursery & Primary School</h3><!-- /.banner-one__title -->
                        <p class="banner-one__tag-line">are you ready to learn?</p><!-- /.banner-one__tag-line -->
                        <a href="about" class="thm-btn banner-one__btn">Know More</a>
                    </div><!-- /.col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.banner-one__slide -->
        <div class="banner-one__slide banner-one__slide-two">
            <div class="container">
                <div class="banner-one__bubble-1"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-2"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-3"></div><!-- /.banner-one__bubble- -->
                <div class="bg-danger banner-one__scratch" style="width: 440px; height: 720px; background-image: url('assets/images/main/img12.jpeg'); background-position: center; background-size: cover;"></div>
                <div class="bg-danger banner-one__person" style="width: 440px; height: 720px; background-image: url('assets/images/main/img12.jpeg'); background-position: center; background-size: cover;"></div>
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <h3 class="banner-one__title banner-one__light-color">We Can <br>
                            Teach You</h3><!-- /.banner-one__title -->
                        <p class="banner-one__tag-line">are you ready to learn?</p><!-- /.banner-one__tag-line -->
                        <a href="#" class="thm-btn banner-one__btn">Learn More</a>
                    </div><!-- /.col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.banner-one__slide -->
    </section><!-- /.banner-one -->
    <div class="banner-carousel-btn">
        <a href="#" class="banner-carousel-btn__left-btn"><i class="kipso-icon-left-arrow"></i></a>
        <a href="#" class="banner-carousel-btn__right-btn"><i class="kipso-icon-right-arrow"></i></a>
    </div><!-- /.banner-carousel-btn -->
    <div class="banner-one__cta">
        <div class="banner-one__cta-icon">
            <i class="kipso-icon-black-graduation-cap-tool-of-university-student-for-head"></i>
            <!-- /.kipso-icon-knowledge -->
        </div><!-- /.banner-one__cta-icon -->
        <div class="banner-one__cta-title">
            <h3 class="banner-one__cta-text"><a href="about">Read how we encourage our
                    students to learn</a></h3><!-- /.banner-one__cta-text -->
        </div><!-- /.banner-one__cta-title -->
        <div class="banner-one__cta-link">
            <a href="#"><i class="kipso-icon-right-arrow"></i><!-- /.kipso-icon-right-arrow --></a>
        </div><!-- /.banner-one__cta-link -->
    </div><!-- /.banner-one__cta -->
</div><!-- /.banner-wrapper -->
<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__content">
                    <div class="block-title text-left">
                        <h1 class="text-dark">Welcome to modern <br>
                            Nursery & Primary School</h1><!-- /.block-title__title -->
                    </div><!-- /.block-title -->
                    <p class="about-two__text">Modern Nursery/Primary School is located at No. 7  Iji / Chukwume Street off St. Mary's Maternity  Hospital Abakpa in Enugu East Local  Government Area, Enugu State.</p><!-- /.about-two__text -->
                    <div class="about-two__single-wrap">
                        <div class="about-two__single">
                            <div class="about-two__single-icon">
                                <i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor -->
                            </div><!-- /.about-two__single-icon -->
                            <div class="about-two__single-content">
                                <p class="about-two__single-text">Start learning from
                                    our experts</p><!-- /.about-two__single-text -->
                            </div><!-- /.about-two__single-content -->
                        </div><!-- /.about-two__single -->
                        <div class="about-two__single">
                            <div class="about-two__single-icon">
                                <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-professor -->
                            </div><!-- /.about-two__single-icon -->
                            <div class="about-two__single-content">
                                <p class="about-two__single-text">Enhance your skills
                                    with us now</p><!-- /.about-two__single-text -->
                            </div><!-- /.about-two__single-content -->
                        </div><!-- /.about-two__single -->
                    </div><!-- /.about-two__single-wrap -->
                    <a href="about" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                </div><!-- /.about-two__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center">
                <div class="about-two__image">
                    <span class="about-two__image-dots"></span><!-- /.about-two__image-dots -->
                    <!--<img src="assets/images/about-1-1.jpg" alt="">-->
                    <div class="bg-danger" style="width: 529px; height: 529px; border-radius: 500px; background-image: url('assets/images/main/img7.jpeg'); background-position: center; background-size: cover;"></div>
                    <div class="about-two__count">
                        <div class="about-two__count-text">Trusted by
                            <span class="counter">4890</span></div><!-- /.about-two__count-text -->
                    </div><!-- /.about-two__count -->
                </div><!-- /.about-two__image -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-two -->
<section class="course-one__top-title home-one">
    <div class="container">
        <div class="block-title mb-0">
            <h2 class="block-title__title">Explore our <br>
                popular subjects</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
    </div><!-- /.container -->
    <div class="course-one__top-title__curve"></div><!-- /.course-one__top-title__curve -->
</section><!-- /.course-one__top-title -->

<section class="course-one course-one__teacher-details home-one">
    <div class="container">
        <div class="course-one__carousel owl-carousel owl-theme">
            <div class="item">
                <div class="course-one__single color-1">
                    <div class="course-one__image">
                        <!--<img src="assets/images/course-1-1.jpg" alt="">-->
                        <div style="width: 370px; height: 243px; background-image: url('assets/images/patter-1-1.jpg'); background-position: center; background-size: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;"></div>
                        <i class="far fa-heart"></i><!-- /.far fa-heart -->
                    </div><!-- /.course-one__image -->
                    <div class="course-one__content">
                        <a href="#" class="course-one__category">calculations</a><!-- /.course-one__category -->
                        <div class="course-one__admin">
                            <img src="assets/images/team-1-1.jpg" alt="">
                            by <a href="teacher-details.html">Mrs. Jane</a>
                        </div><!-- /.course-one__admin -->
                        <h2 class="course-one__title"><a href="course-details.html">Mathematics</a></h2>
                        <!-- /.course-one__title -->
                        <div class="course-one__stars">
                            <span class="course-one__stars-wrap">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span><!-- /.course-one__stars-wrap -->
                            <span class="course-one__count"></span><!-- /.course-one__count -->
                            <span class="course-one__stars-count">100%</span><!-- /.course-one__stars-count -->
                        </div><!-- /.course-one__stars -->
                        <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                    </div><!-- /.course-one__content -->
                </div><!-- /.course-one__single -->
            </div><!-- /.item -->
            
        
        </div><!-- /.course-one__carousel -->
    </div><!-- /.container -->
</section><!-- /.course-one course-page -->
<section class="video-two">
    <div class="container">
        <img src="assets/images/scratch-1-1.png" class="video-two__scratch" alt="">
        <div class="row">
            <div class="col-lg-7">
                <div class="video-two__content">
                    <h2 class="video-two__title">Modern one & only <br>
                        mission is to extend <br>
                        your knowledge base</h2><!-- /.video-two__title -->
                    <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                </div><!-- /.video-two__content -->
            </div><!-- /.col-lg-7 -->
            <div class="col-lg-5 d-flex justify-content-lg-end justify-content-sm-start">
                <div class="my-auto">
                    <a href="#" class="video-two__popup"><i class="fa fa-play"></i><!-- /.fa fa-play --></a>
                    <!-- /.video-two__popup -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-5 d-flex justify-content-end -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.video-two -->
<section class="countdown-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="countdown-one__content">
                    <h2 class="countdown-one__title">Register now </h2><!-- /.countdown-one__title -->
                    <p class="countdown-one__tag-line">get premium online courses for free!</p>
                    <!-- /.countdown-one__tag-line -->
                    <p class="countdown-one__text">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin,
                        lorem
                        quis bibendum auci elit consequat is simply free text available in the psutis sem nibh id eis
                        sed
                        odio sit amet.</p><!-- /.countdown-one__text -->
                </div><!-- /.countdown-one__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="become-teacher__form">
                    <div class="become-teacher__form-top">
                        <h2 class="become-teacher__form-title">
                            Get free courses
                        </h2><!-- /.become-teacher__form-title -->
                    </div><!-- /.become-teacher__top -->
                    <div class="become-teacher__form-content">
                        <input type="text" placeholder="Your Name" name="name">
                        <input type="text" placeholder="Email Address" name="email">
                        <input type="text" placeholder="Phone Number" name="phone">
                        <input type="text" placeholder="Comment" name="message">
                        <button type="submit" class="thm-btn become-teacher__form-btn">Apply For It</button>
                    </div><!-- /.become-teacher__form-content -->
                </div><!-- /.become-teacher__form -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.countdown-one -->
<section class="thm-gray-bg course-category-one">
    <div class="container-fluid text-center">
        <div class="block-title text-center">
            <h2 class="block-title__title">Browse our <br>
                subjects categories</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="course-category-one__carousel owl-carousel owl-theme">
            <div class="item">
                <div class="course-category-one__single color-1">
                    <div class="course-category-one__icon">
                        <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                    </div><!-- /.course-category-one__icon -->
                    <h3 class="course-category-one__title"><a href="#">IT & Software</a></h3>
                    <!-- /.course-category-one__title -->
                </div><!-- /.course-category-one__single -->
            </div><!-- /.item -->
           
        </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->

        <a href="#" class="thm-btn">View All Categories</a><!-- /.thm-btn -->
    </div><!-- /.container-fluid -->
</section><!-- /.thm-gray-bg course-category-one -->
<section class="cta-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 clearfix">
                <div class="cta-three__image" style="width: 932px; height: 764px; background-image: url('assets/images/main/img2.jpeg'); background-position: center; background-size: cover;"></div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="cta-three__content">
                    <div class="block-title text-left">
                        <h2 class="block-title__title">Benefits of learning
                            with modern Nur/Pri School</h2><!-- /.block-title__title -->
                    </div><!-- /.block-title -->
                    <p class="cta-three__text">Ex-students ( old Boys and Old girls) As a testimony of good educational foundation it is note worthy that some of our Old students are now doctors, engineers, lawyers and lecturers in their various fields of endeavour.</p>
                    <!-- /.cta-three__text -->
                    <div class="cta-three__single-wrap">
                        <div class="cta-three__single">
                            <i class="kipso-icon-strategy"></i><!-- /.kipso-icon-strategy -->
                            <p class="cta-three__single-text">Approved
                                Subjects</p><!-- /.cta-three__single-text -->
                        </div><!-- /.cta-three__single -->
                        <div class="cta-three__single">
                            <i class="kipso-icon-training"></i><!-- /.kipso-icon-training -->
                            <p class="cta-three__single-text">Comfortable
                                Learning</p><!-- /.cta-three__single-text -->
                        </div><!-- /.cta-three__single -->
                        <div class="cta-three__single">
                            <i class="kipso-icon-human-resources"></i><!-- /.kipso-icon-human-resources -->
                            <p class="cta-three__single-text">Experienced
                                Teachers</p><!-- /.cta-three__single-text -->
                        </div><!-- /.cta-three__single -->
                    </div><!-- /.cta-three__single-wrap -->
                    <a href="about" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                </div><!-- /.cta-three__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta-three -->

<section class="blog-two">
    <div class="container">
        <div class="block-title text-center">
            <h2 class="block-title__title">Our latest news <br>
                & articles</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="blog-two__carousel owl-carousel owl-theme">
            
            <div class="item">
                <div class="blog-two__single" style="background-image: url(assets/images/main/img3.jpeg); background-position: center; background-size: cover;">
                    <div class="blog-two__inner">
                        <a href="news-details.html" class="blog-two__date">
                            <span>25</span>
                            Jul
                        </a><!-- /.blog-two__date -->
                        <div class="blog-two__meta">
                            <a href="#">by Admin</a>
                            <a href="#">3 Comments</a>
                        </div><!-- /.blog-two__meta -->
                        <h3 class="blog-two__title">
                            <a href="news-details.html">High school journalism camp</a>
                        </h3><!-- /.blog-two__title -->
                    </div><!-- /.blog-two__inner -->
                </div><!-- /.blog-two__single -->
            </div><!-- /.item -->
           
          
        </div><!-- /.blog-two__carousel owl-carousel owl-theme -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-page -->

<!-- Best Teachers -->

<section class="mailchimp-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mailchimp-one__content">
                    <div class="mailchimp-one__icon">
                        <i class="kipso-icon-email"></i><!-- /.kipso-icon-email -->
                    </div><!-- /.mailchimp-one__icon -->
                    <h2 class="mailchimp-one__title">Get our latest <br>
                        updates by signing up</h2><!-- /.mailchimp-one__title -->
                </div><!-- /.mailchimp-one__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 d-flex">
                <div class="my-auto">
                    <form action="#" class="mailchimp-one__form">
                        <input type="text" placeholder="Enter your email ">
                        <button type="submit" class="thm-btn">Subscribe</button>
                    </form><!-- /.mailchimp-one__form -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.mailchimp-one -->

<!-- Page Footer -->
<?php require_once 'inc/footer.php'; ?>