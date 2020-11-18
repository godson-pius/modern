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

<?php require_once 'inc/footer.php'; ?>