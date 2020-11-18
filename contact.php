<?php $page_title = "Contact || Modern Nur/Pri Sch.";
require_once 'inc/header.php'; ?>

<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Contact</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">Contact</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="contact-info-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info-one__single wow fadeInUp" data-wow-duration="1500ms">
                    <div class="contact-info-one__icon"><i class="kipso-icon-placeholder"></i>
                        <!-- /.kipso-icon-manager -->
                    </div><!-- /.contact-info-one__icon -->
                    <h2 class="contact-info-one__title">Our Address</h2><!-- /.contact-info-one__title -->
                    <p class="contact-info-one__text">Modern Nursery/Primary School is located at No. 7 Iji / Chukwume Street off St. Mary's Maternity Hospital Abakpa in Enugu East Local Government Area, Enugu State.</p><!-- /.contact-info-one__text -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                    <div class="contact-info-one__icon"><i class="kipso-icon-manager"></i><!-- /.kipso-icon-manager -->
                    </div><!-- /.contact-info-one__icon -->
                    <h2 class="contact-info-one__title">About Us </h2><!-- /.contact-info-one__title -->
                    <p class="contact-info-one__text">The Modern Nursery School was established in 1984 as a private educational institution at No. 7 Ok I street now No.7 Chukwume street, Abakpa Nike. The Enugu State Ministry of Education approved the school to open for nursery classes in September 1985.</p><!-- /.contact-info-one__text -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                    <div class="contact-info-one__icon"><i class="kipso-icon-contact"></i><!-- /.kipso-icon-manager -->
                    </div><!-- /.contact-info-one__icon -->
                    <h2 class="contact-info-one__title">Contact Info</h2><!-- /.contact-info-one__title -->
                    <p class="contact-info-one__text">needhelp@mnps.com <br>
                        444 888 0000 <br> &nbsp; </p><!-- /.contact-info-one__text -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-info-one -->
<section class="contact-one">
    <div class="container">
        <h2 class="contact-one__title text-center">Get in touch <br>
            with us</h2><!-- /.contact-one__title -->
        <form action="#" class="contact-one__form">
            <div class="row low-gutters">
                <div class="col-lg-6">
                    <input type="text" placeholder="Your Name">
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <input type="text" placeholder="Email Address">
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <textarea placeholder="Write Message"></textarea>
                    <div class="text-center">
                        <button type="submit" class="contact-one__btn thm-btn">Submit Comment</button>
                    </div><!-- /.text-center -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </form><!-- /.contact-one__form -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<div class="row">
    <div class="col-lg-12">
        <div id="display_map<?= $id; ?>">
            <div id="mapId" class="shadow" style="height: 600px" class="card-body card-block">
                <div style="overflow:hidden;width: 100%;position: relative;"><iframe width="100%" height="600" src="https://maps.google.com/maps?hl=en&amp;q=Emene+(Location)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 0px;background: #fff;"> <a href="https://googlemapsembed.net/" rel="nofollow">Google Maps Embed</a> </small></div>
                    <style>
                        .nvs {
                            position: relative;
                            text-align: right;
                            height: 325px;
                            width: 643px;
                        }

                        #gmap_canvas img {
                            max-width: none !important;
                            background: none !important;
                        }
                    </style>
                </div>
            </div>
        </div> <!-- End of Display Map -->
    </div>
</div>

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact" allowfullscreen></iframe> -->

<!-- Page Footer -->
<?php require_once 'inc/footer.php'; ?>