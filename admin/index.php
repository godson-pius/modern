<?php
require_once 'inc/functions/config.php';
blockUrlHackers('login');

// Getting approved teachers
$teachers = where("teachers", "approve", 1, 50);
$classes = fetchAll("classes");

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

        <!-- For Number of Classes -->
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Current Classes</h4>
            </div>


            <div class="table-responsive text-center border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
                <div class="row">




                    <?php
                    if (isset($classes)) {
                        foreach ($classes as $class) {
                            extract($class); ?>
                            <div class="col-lg-4 mt-2 mb-2">
                                <div class="card shadow">
                                    <div class="card-header">
                                        Class Name
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $class; ?></h5>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>

            <div class="card-body text-right">
                <i class="fa fa-cogs text-warning"></i>
                <span class="text-info"> Classes in MNPS</span>
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