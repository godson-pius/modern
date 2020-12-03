<?php
// error_reporting(0);
require_once '../admin/inc/functions/config.php';

if (isset($_POST['submit'])) {

    $result = uploadResult($_POST);

    if ($result === true) {
        echo "success";
    } else {
        $err = $result;
        foreach ($err as $e) {
            echo $e;
        }
    }
    die();
}
?>

<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Compile Student Result</h1>
                    <a href="manage_results" class="btn btn-light shadow ml-lg-3">Manage Results <i class="material-icons">arrow_forward</i></a>

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
                                <form action="" method="post" id="addResult">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="classid">Select Class</label>
                                            <select id="classid" onchange="getStudents(this.value)" name="class" class="form-control" required>
                                                <option disabled selected value="">Select Class</option>
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

                                        <div class="form-group" id="studentName">
                                            <label for="studentid">Select Student</label>
                                            <select id="studentid" data-toggle="select" name="student" class="form-control">

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="classid">Select Section</label>
                                            <select id="classid" onchange="getSubjects(this.value)" name="class" class="form-control" required>
                                                <option disabled selected value="">Select Section</option>
                                                <?php
                                                $sections = fetchAll("sections");
                                                if (!empty($sections)) {
                                                    foreach ($sections as $section) {
                                                        extract($section); ?>

                                                        <option value="<?= $id; ?>"><?= $section_name; ?></option>

                                                <?php }
                                                } ?>
                                            </select>
                                        </div>

                                        <div class="form-group" id="subjectName">
                                            <label for="subject">Select Subject</label>
                                            <select id="subject" data-toggle="select" name="subject" class="form-control">

                                            </select>
                                        </div>

                                        <div class="form-row" id="testScore">
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="firstTest">First Test Score</label>
                                                <input type="number" onkeyup="getTotalScore()" name="firstTest" class="form-control" id="firstTest" placeholder="First Test" required="">
                                            </div>
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="secondTest">Second Test Score</label>
                                                <input type="number" onkeyup="getTotalScore()" name="secondTest" class="form-control" id="secondTest" placeholder="Second Test" required="">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="examScore">Exam Score</label>
                                                <input type="number" onkeyup="getTotalScore()" name="examScore" class="form-control" id="examScore" placeholder="First Test" required="">
                                            </div>
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="grandTotal">Grand Total</label>
                                                <input type="number" name="grandTotal" class="form-control font-weight-bold" id="grandTotal" placeholder="Total" readonly>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="acadYear">Academic Year</label>
                                                <select name="acadYear" class="form-control" id="acadYear">
                                                    <option disabled selected value="">Select Academic Year</option>
                                                    <?php
                                                    $acadYears = fetchAll("academic_years");
                                                    if (!empty($acadYears)) {
                                                        foreach ($acadYears as $acad) {
                                                            extract($acad); ?>

                                                            <option value="<?= $id; ?>"><?= $academic_year; ?></option>

                                                    <?php }
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6 mb-3">
                                                <label for="subjectGrade">Subject Grade</label>
                                                <input type="text" name="subjectGrade" class="form-control font-weight-bold" id="subjectGrade" placeholder="Subject Grade" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" name="submit" type="submit">Submit Result</button>
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
<script src="assets/js/toaster.js"></script>
<script src="assets/js/my.js"></script>