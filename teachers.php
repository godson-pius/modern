<?php
require_once 'admin/inc/functions/config.php';

$teachers = fetchAllDesc("teachers");
?>

<?php $page_title = "Teachers || Modern Nur/Pri Sch.";
require_once 'inc/header.php'; ?>

<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Teachers</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title mb-5">Teachers</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="team-one team-page">
    <div class="container">
        <div class="row">

            <?php
                if (!empty($teachers)) {
                    foreach ($teachers as $teacher) {
                        extract($teacher); ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="team-one__single">
                                <div class="team-one__image">
                                    <center>
                                        <div style="width: 206px; height: 206px; border-radius: 300px; background-image: url('assets/images/teachers/<?= $t_image; ?>'); background-position: center; background-size: cover;"></div>
                                    </center>
                                    <!--<img src="assets/images/team-1-1.jpg" alt="">-->
                                </div><!-- /.team-one__image -->
                                <div class="team-one__content">
                                    <h2 class="team-one__name"><a href="team-details.html"><?= strtoupper($teacher_name); ?></a></h2>
                                    <!-- /.team-one__name -->
                                    <p class="team-one__designation">Teacher</p><!-- /.team-one__designation -->
                                    <!-- <p class="team-one__text">There are many varia of passages of lorem.</p> -->
                                    <!-- /.team-one__text -->
                                </div><!-- /.team-one__content -->
                                <div class="team-one__social">
                                   MNPS
                                </div><!-- /.team-one__social -->
                            </div><!-- /.team-one__single -->
                        </div><!-- /.col-lg-3 -->
            <?php } } ?>
            
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-one team-page -->
<div class="cta-two">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6 thm-base-bg">
                <div class="cta-two__single">
                    <div class="cta-two__icon">
                        <span><i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor --></span>
                    </div><!-- /.cta-two__icon -->
                    <div class="cta-two__content">
                        <h2 class="cta-two__title">Become a teacher</h2><!-- /.cta-two__title -->
                        <p class="cta-two__text">There are many variations of passages of lore available but <br> the
                            majority have suffered alteration in some form.</p><!-- /.cta-two__text -->
                        <a href="about" class="thm-btn cta-two__btn">Start Teaching</a><!-- /.thm-btn cta-two__btn -->
                    </div><!-- /.cta-two__content -->
                </div><!-- /.cta-two__single -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 thm-base-bg-2">
                <div class="cta-two__single">
                    <div class="cta-two__icon">
                        <span><i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-knowledge --></span>
                    </div><!-- /.cta-two__icon -->
                    <div class="cta-two__content">
                        <h2 class="cta-two__title">Join our community</h2><!-- /.cta-two__title -->
                        <p class="cta-two__text">There are many variations of passages of lore available but <br> the
                            majority have suffered alteration in some form.</p><!-- /.cta-two__text -->
                        <a href="about" class="thm-btn cta-two__btn">Know More</a><!-- /.thm-btn cta-two__btn -->
                    </div><!-- /.cta-two__content -->
                </div><!-- /.cta-two__single -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row no-gutters -->
    </div><!-- /.container-fluid -->
</div><!-- /.cta-two -->
<?php require_once 'inc/footer.php'; ?>