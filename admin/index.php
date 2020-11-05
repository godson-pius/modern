<?php
require_once 'inc/functions/config.php';
blockUrlHackers("login");

// Getting approved teachers
$teachers = where("teachers", "approve", 1, 50);

?>


<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h1 class="mb-0">Dashboard</h1>
        </div>
    </div>

    <div class="container-fluid page__container">

        <div class="row">
            <div class="col-lg">
                <div class="row card-group-row">
                    <div class="col-lg-6 card-group-row__col">
                        <div class="card card-group-row__card card-body card-body-x-lg shadow" style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                            <div class="card-header__title text-muted mb-2">Number of Students</div>
                            <div class="text-amount font-weight-bold"><?= getTotal("students", null, null); ?></div>
                            <div class="chart" style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                <!-- <p class="mt-5 ml-3 text-secondary">Modern School Nursery & Primary School</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 card-group-row__col">
                        <div class="card card-group-row__card card-body card-body-x-lg shadow" style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                            <div class="card-header__title text-muted mb-2">Number of Teachers</div>
                            <div class="text-amount font-weight-bold"><?= getTotal("teachers", null, null); ?></div>
                            <div class="chart" style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                <!-- <p class="mt-5 ml-3 text-secondary">Modern School Nursery & Primary School</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                        <h4 class="card-header__title flex m-0">Recent Activity</h4>
                        <div data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                            <!-- <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 <span class="text-muted mx-1">to</span> 20/03/2018</a> -->
                            <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                        </div>
                    </div>
                    <div class="card-header card-header-tabs-basic nav" role="tablist">
                        <a href="#activity_all" class="active" data-toggle="tab" role="tab" aria-controls="activity_all" aria-selected="true">All</a>
                        <a href="#activity_purchases" data-toggle="tab" role="tab" aria-controls="activity_purchases" aria-selected="false">Students</a>
                        <a href="#activity_emails" data-toggle="tab" role="tab" aria-controls="activity_emails" aria-selected="false">Teachers</a>
                        <a href="#activity_quotes" data-toggle="tab" role="tab" aria-controls="activity_quotes" aria-selected="false">Subjects</a>
                    </div>
                    <div class="list-group tab-content list-group-flush">
                        <div class="tab-pane active show fade" id="activity_all">


                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                <div class="avatar avatar-xs mr-3">
                                    <span class="avatar-title rounded-circle  bg-purple">
                                        <i class="material-icons">monetization_on</i>
                                    </span>
                                </div>

                                <div class="flex">
                                    <div class="d-flex align-items-middle">
                                        <div class="avatar avatar-xxs mr-1">
                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>
                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>
                                    </div>
                                    <small class="text-muted">4 days ago</small>
                                </div>
                            </div>

                            <div class="card-footer text-center border-0">
                                <p class="text-muted">Modern Nursery and Primary School</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="activity_purchases">

                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                <div class="avatar avatar-xs mr-3">
                                    <span class="avatar-title rounded-circle ">
                                        <i class="material-icons">monetization_on</i>
                                    </span>
                                </div>

                                <div class="flex">
                                    <div class="d-flex align-items-middle">
                                        <div class="avatar avatar-xxs mr-1">
                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>
                                        <strong class="text-15pt mr-1"></strong>

                                    </div>
                                    <small class="text-muted">just now</small>
                                </div>
                                <div>$631</div>
                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                            </div>
                        </div>

                        <div class="tab-pane" id="activity_emails">

                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                <div class="avatar avatar-xs mr-3">
                                    <span class="avatar-title rounded-circle  bg-teal">
                                        <i class="material-icons">email</i>
                                    </span>
                                </div>

                                <div class="flex">
                                    <div class="d-flex align-items-middle">
                                        <div class="avatar avatar-xxs mr-1">
                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>
                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>

                                    </div>
                                    <small>Confirmation required for design</small>
                                </div>
                                <small class="text-muted">4 days ago</small>
                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                            </div>

                        </div>

                        <div class="tab-pane" id="activity_quotes">

                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                <div class="avatar avatar-xs mr-3">
                                    <span class="avatar-title rounded-circle  bg-teal">
                                        <i class="material-icons">email</i>
                                    </span>
                                </div>

                                <div class="flex">
                                    <div class="d-flex align-items-middle">
                                        <div class="avatar avatar-xxs mr-1">
                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>
                                        <strong class="text-15pt mr-1">Mathematics</strong>

                                    </div>
                                    <small>Confirmation required for design</small>
                                </div>
                                <small class="text-muted">4 days ago</small>
                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Current Teachers</h4>
            </div>


            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                <table class="table mb-0 thead-border-top-0">
                    <thead>

                        <tr>

                            <th style="width: 18px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff" id="customCheckAll">
                                    <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                </div>
                            </th>

                            <th style="width: 400px;">Name</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Access</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody class="list" id="staff">

                        <?php
                        if (isset($teachers)) {
                            foreach ($teachers as $teacher) {
                                extract($teacher); ?>
                                <tr class="selected">

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_1">
                                            <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                        </div>
                                    </td>

                                    <td>

                                        <div class="media align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <img src="../assets/images/teachers/<?= $t_image; ?>" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="media-body">

                                                <span class="js-lists-values-employee-name"><a href="view-teacher?id=<?= $id; ?>"><?= $teacher_name; ?></a></span>

                                            </div>
                                        </div>

                                    </td>

                                    <td><?= $email; ?></td>
                                    <td><?= $tel; ?></td>
                                    <td>
                                        <div class="media align-items-center">
                                            <?php
                                            if ($access == 0) { ?>
                                                <a onclick="grant_access(this)" data-access="<?= $id; ?>" class="font-weight-bold text-uppercase btn btn-success btn-sm">Grant</a>
                                            <?php } else { ?>
                                                <a onclick="suspend(this)" data-suspend="<?= $id; ?>" class="ml-1 font-weight-bold text-uppercase btn btn-warning btn-sm">Suspend</a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td>
                                        <a onclick="delete_teacher(this)" data-delete="<?= $id; ?>" class="ml-1 text-light font-weight-bold text-uppercase btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>

            <div class="card-body text-right">
                <i class="fa fa-cogs text-warning"></i>
                <span class="text-info"> Refresh to take double action on a particular teacher</span>
            </div>


        </div>


    </div>


</div>
<!-- // END header-layout__content -->

</div>
<!-- // END header-layout -->

</div>
<!-- // END drawer-layout__content -->

<?php require_once 'inc/nav.php'; ?>

<?php require_once 'inc/drawer.php'; ?>

<?php require_once 'inc/footer.php'; ?>