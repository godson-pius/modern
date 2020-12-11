<?php
$pageHeader = "Student Course";
require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Student Subjects</h1>
                    <!-- <a href="instructor-course-edit.html" class="btn btn-success ml-lg-3">New Course <i class="material-icons">add</i></a> -->
                </div>
            </div>





            <div class="container-fluid page__container">

                <div class="row">

                    <?php

                    $subjects = where("subjects", "section_id_fk", $details['section_id_fk']);
                    foreach ($subjects as $subject) {
                        extract($subject); ?>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="d-flex flex-column flex-sm-row">
                                        <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                            <img src="assets/images/logos/vuejs.svg" alt="Card image cap" class="avatar-course-img">
                                        </a>
                                        <div class="flex" style="min-width: 200px;">
                                            <div class="d-flex">
                                                <div>
                                                    <h4 class="card-title font-weight-bold mb-1"><?= $subject_name; ?></h4>
                                                    <p class="text-muted">Building pupils to become great figures in the society.</p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

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

                    <!-- Side Navigation -->
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

<!-- Right Sidebar -->
<?php require_once 'inc/drawer.php'; ?>

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>