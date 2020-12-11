<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">








            <div class="bg-secondary text-white d-flex justify-content-center align-items-center p-4 mb-4" style="height:400px">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center text-center text-lg-left">
                    <div class="mr-lg-4 mb-4 mb-lg-0">
                        <div style="width: 180px; height: 180px; border-radius: 300px; background-image: url(../assets/images/teachers/<?= $details['t_image']; ?>); background-size: cover; background-position: center;">

                        </div>
                        <!-- <img src="../assets/images/teachers/<?= $details['t_image']; ?>" class="rounded-circle" width="200" alt="Frontted"> -->
                    </div>
                    <div>
                        <h1 class="mb-lg-4"><?= $details['teacher_name']; ?></h1>
                        <p class="mb-lg-4"><?= $details['teacher_name']; ?> Modern Nursery and Primry School.</p>
                        <a href="https://modern.com" class="mr-3 text-white text-underline">modern.com</a>
                    </div>
                </div>

            </div>

            <div class="container-fluid page__container">
                <h4 class="mb-4"><?= $details['teacher_name']; ?> Courses</h4>

                <div class="row">

                    <?php

                    $subjects = where("subjects", "subject_teacher_fk", $teacherId);
                    foreach ($subjects as $subject) {
                        extract($subject); ?>

                        <div class="col-md-3">
                            <div class="card card__course shadow">
                                <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                    <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href="#">
                                        <span><img src="assets/images/logos/react.svg" class="mb-1" style="width:34px;" alt="logo"></span>
                                        <span class="course__title"><?= $subject_name; ?></span>
                                        <span class="course__subtitle"><?= $subject_name; ?></span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>


        </div>
        <!-- // END drawer-layout__content -->

        <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-light sidebar-left bg-white" data-perfect-scrollbar>

                    <?php require_once 'inc/navigation.php'; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- // END drawer-layout -->

</div>
<!-- // END header-layout__content -->

</div>
<!-- // END header-layout -->


<div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




            <small class="text-dark-gray px-3 py-1">
                <strong>Thursday, 28 Feb</strong>
            </small>

            <div class="list-group list-group-flush">

                <div class="list-group-item bg-light">
                    <div class="row">
                        <div class="col-auto d-flex flex-column">
                            <small>12:30 PM</small>
                            <small class="text-dark-gray">2 hrs</small>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column flex">
                                <a href="#" class="text-body"><strong class="text-15pt">Marketing Team Meeting</strong></a>

                                <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                            </div>
                            <div class="avatar-group mt-2">

                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>

                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>

                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <small class="text-dark-gray px-3 py-1">
                <strong>Wednesday, 27 Feb</strong>
            </small>

            <div class="list-group list-group-flush">

                <div class="list-group-item bg-light">
                    <div class="row">
                        <div class="col-auto d-flex flex-column">
                            <small>07:48 PM</small>
                            <small class="text-dark-gray">30 min</small>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column flex">
                                <a href="#" class="text-body"><strong class="text-15pt">Call Alex</strong></a>


                                <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                            </div>



                        </div>
                    </div>
                </div>

            </div>

            <small class="text-dark-gray px-3 py-1">
                <strong>Tuesday, 26 Feb</strong>
            </small>

            <div class="list-group list-group-flush">

                <div class="list-group-item bg-light">
                    <div class="row">
                        <div class="col-auto d-flex flex-column">
                            <small>03:13 PM</small>
                            <small class="text-dark-gray">2 hrs</small>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column flex">
                                <a href="#" class="text-body"><strong class="text-15pt">Design Team Meeting</strong></a>

                                <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                            </div>
                            <div class="avatar-group mt-2">

                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>

                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>

                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>

                                <div class="avatar avatar-xs">
                                    <img src="assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <small class="text-dark-gray px-3 py-1">
                <strong>Monday, 25 Feb</strong>
            </small>

            <div class="list-group list-group-flush">

                <div class="list-group-item bg-light">
                    <div class="row">
                        <div class="col-auto d-flex flex-column">
                            <small>12:30 PM</small>
                            <small class="text-dark-gray">2 hrs</small>
                        </div>
                        <div class="col d-flex">
                            <div class="d-flex flex-column flex">
                                <a href="#" class="text-body"><strong class="text-15pt">Call Wendy</strong></a>


                                <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                            </div>


                            <div class="avatar avatar-xs">
                                <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- App Settings FAB -->
<div id="app-settings">
    <app-settings layout-active="default" :layout-location="{
      'default': 'instructor-profile.html',
      'fixed': 'fixed-instructor-profile.html',
      'fluid': 'fluid-instructor-profile.html',
      'mini': 'mini-instructor-profile.html'
    }"></app-settings>
</div>

<!-- jQuery -->
<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="assets/vendor/perfect-scrollbar.min.js"></script>

<!-- DOM Factory -->
<script src="assets/vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="assets/vendor/material-design-kit.js"></script>

<!-- Range Slider -->
<script src="assets/vendor/ion.rangeSlider.min.js"></script>
<script src="assets/js/ion-rangeslider.js"></script>

<!-- App -->
<script src="assets/js/toggle-check-all.js"></script>
<script src="assets/js/check-selected-row.js"></script>
<script src="assets/js/dropdown.js"></script>
<script src="assets/js/sidebar-mini.js"></script>
<script src="assets/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="assets/js/app-settings.js"></script>




</body>

</html>