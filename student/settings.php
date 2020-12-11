<?php
// error_reporting(0);
require_once '../admin/inc/functions/config.php';

if (isset($_GET['studentId'])) {
    $student_id = $_GET['studentId'];

    $getStudentDetails = where("students", "id", $student_id);
    if (!empty($getStudentDetails)) {
        foreach ($getStudentDetails as $details) {
            extract($details);
        }
    }
}


if (isset($_POST['submit'])) {
    $result = updateStudentProfile($_POST);
    if ($result === true) {
        echo "<script>alert('Profile Updated')</script>";
    } else {
        echo "<script>alert('Failed to update')</script>";
    }
}


?>
<style>
    .pt-3-half {
        padding-top: 1.4rem;
    }
</style>
<?php
$pageHeader = "Profile Settings";
require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Settings</h1>
                    <a href="instructor-profile" class="btn btn-dark shadow"><i class="material-icons">arrow_forward</i> <?= $details['name']; ?></a>

                </div>
            </div>





            <div class="container-fluid">


                <div class="row">

                    <!-- Main Content -->

                    <div class="container-fluid">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="container-fluid page__container">
                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Basic Information</strong></p>
                                            <p class="text-muted mb-0">Edit your account details and settings.</p>
                                        </div>
                                        <div class="col-lg-12 card-form__body card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="fname">Change Name</label>
                                                        <input id="fname" name="fullname" type="text" class="form-control" placeholder="First name" value="<?= $details['name']; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Update Your Password</strong></p>
                                            <p class="text-muted mb-0">Change your password.</p>
                                        </div>
                                        <div class="col-lg-8 card-form__body card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="opass">Old Password</label>
                                                        <input id="opass" name="oldpassword" type="password" class="form-control" placeholder="Old password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="npass">New Password</label>
                                                        <input id="npass" name="newpassword" type="password" class="form-control" placeholder="New Password">
                                                        <small class="invalid-feedback">The new password must not be empty.</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cpass">Confirm Password</label>
                                                        <input id="cpass" name="confirmpassword" type="password" class="form-control" placeholder="Confirm password">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Profile Settings</strong></p>
                                            <p class="text-muted mb-0">Update your public profile.</p>
                                        </div>
                                        <div class="col-lg-8 card-form__body card-body">
                                            <div class="form-group">
                                                <label>Avatar</label>
                                                <input id="pics" required name="pics" type="file" class="form-control">
                                            </div>

                                            <input type="hidden" name="id" value="<?= $details['id']; ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mb-5">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                </div>
                            </div>

                        </form>
                    </div>

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

<!-- My Js -->
<script src="assets/js/toaster.js"></script>
<script src="assets/js/my.js"></script>
<script src="assets/js/edit_result.js"></script>