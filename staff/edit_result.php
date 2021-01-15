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



?>
<style>
    .pt-3-half {
        padding-top: 1.4rem;
    }
</style>
<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0"><?= $name; ?></h1>
                    <a href="manage_results" class="btn btn-light shadow"><i class="material-icons">arrow_forward</i> Manage Results</a>

                </div>
            </div>





            <div class="container-fluid">


                <div class="row">

                    <!-- Main Content -->
                    <div class="container-fluid">

                        <!-- Editable table -->
                        <div class="card">
                            <h3 class="card-header text-center font-weight-bold text-uppercase py-4"><?= $name; ?></h3>
                            <div class="card-body">
                                <div id="table" class="table-editable">
                                    <!-- <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span> -->
                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>First Test (30)</th>
                                                <th>Second Test (30)</th>
                                                <th>Exam Score</th>
                                                <th>Grand Score</th>
                                                <th>Grade</th>
                                                <th class="xt-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- This is our clonable table line -->
                                            <?php
                                            $stud_id = $id;
                                            $results = where("results", "student_id_fk", $stud_id);
                                            if (!empty($results)) {

                                                $num = 0;

                                                foreach ($results as $result) {
                                                    extract($result);
                                                    $subj_id = $subject_id_fk;
                                                    $subjects = where("subjects", "id", $subj_id);

                                                    foreach ($subjects as $subject) { ?>

                                                        <tr class="font-weight-bold">
                                                            <td class="pt-3-half" name="subject" id="subject<?= $num; ?>" contenteditable="true"><?= $subject['subject_name']; ?></td>
                                                            <td class="pt-3-half" name="firstScore" id="firstScore<?= $num; ?>" contenteditable="true"><?= $first_test_score; ?></td>
                                                            <td class="pt-3-half" name="secondScore" id="secondScore<?= $num; ?>" contenteditable="true"><?= $second_test_score; ?></td>

                                                            <td class="pt-3-half" name="examScore" id="examScore<?= $num; ?>" contenteditable="true"><?= $exam_score; ?></td>
                                                            <td class="pt-3-half" name="grandTotal" id="grandTotal<?= $num; ?>" contenteditable="true"><?= $grand_total; ?></td>
                                                            <td class="pt-3-half" name="gradeSubject" id="gradeSubject<?= $num; ?>" contenteditable="true"><?= $grade_subject; ?></td>
                                                            <td>
                                                                <a data-id="<?= $subject['id']; ?>" data-stud="<?= $stud_id; ?>" onclick="editResult(this)" class="btn btn-secondary text-light btn-sm rounded">Save</a>
                                                            </td>
                                                        </tr>

                                            <?php
                                        
                                                    }
                                                }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Editable table -->
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