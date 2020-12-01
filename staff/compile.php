<?php
require_once '../admin/inc/functions/config.php';


?>

<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Compile Student Result</h1>
                </div>
            </div>





            <div class="container-fluid page__container">


                <div class="row">

                    <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Result Form</strong></p>
                                <p class="text-muted">Provide correct, accurate result to your students with this form.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <form action="" method="post">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="select01">Select Class</label>
                                            <select id="classid" onchange="getStudent(this.value)" class="form-control">
                                                <option selected value="">Select Class</option>
                                                <?php
                                                $classes = fetchAll("classes");
                                                if (!empty($classes)) {
                                                    foreach ($classes as $class) {
                                                        extract($class); ?>

                                                        <option value="<?= $id; ?>"><?= $class; ?></option>

                                                <?php }
                                                } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="select01">Select Student</label>
                                            <select id="studentid" data-toggle="select" class="form-control">

                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="validationSample01">First name</label>
                                                <input type="text" class="form-control" id="validationSample01" placeholder="First name" value="Mark" required="">
                                                <div class="invalid-feedback">Please provide a first name.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="validationSample02">Last name</label>
                                                <input type="text" class="form-control" id="validationSample02" placeholder="Last name" value="Otto" required="">
                                                <div class="invalid-feedback">Please provide a last name.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="validationSample03">City</label>
                                                <input type="text" class="form-control" id="validationSample03" placeholder="City" required="">
                                                <div class="invalid-feedback">Please provide a valid city.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="validationSample04">State</label>
                                                <input type="text" class="form-control" id="validationSample04" placeholder="State" required="">
                                                <div class="invalid-feedback">Please provide a valid state.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" value="" id="invalidCheck01" required="" checked="">
                                            <label class="custom-control-label" for="invalidCheck01">
                                                Agree to terms and conditions
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        <!-- // END drawer-layout__content -->

        <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-light sidebar-left bg-white" data-perfect-scrollbar>


                    <div class="sidebar-block p-0 m-0">
                        <div class="d-flex align-items-center sidebar-p-a border-bottom bg-light">
                            <a href="#" class="flex d-flex align-items-center text-body text-underline-0">
                                <span class="avatar avatar-sm mr-2">
                                    <span class="avatar-title rounded-circle bg-soft-secondary text-muted">AD</span>
                                </span>
                                <span class="flex d-flex flex-column">
                                    <strong>Adrian Demian</strong>
                                    <small class="text-muted text-uppercase">Instructor</small>
                                </span>
                            </a>
                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="student-dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="student-profile.html">My profile</a>
                                    <a class="dropdown-item" href="student-edit-account.html">Edit account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" rel="nofollow" data-method="delete" href="login.html">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

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

<!-- My Js -->
<script src="assets/js/my.js"></script>