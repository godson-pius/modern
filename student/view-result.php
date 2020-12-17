<?php
// error_reporting(0);
require_once '../admin/inc/functions/config.php';
blockUrlHackers('studentId', 'login');
blockUrlHackers('cardSet', 'card-login');

?>

<?php
$pageHeader = "Student Result";
require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Student Result</h1>
                    <a href="index" class="btn btn-dark shadow"><i class="material-icons">arrow_forward</i> Home</a>

                </div>
            </div>





            <div class="container-fluid">


                <div class="row">

                    <div class="col-lg-12">
                        <table class="table table-light table-responsive-sm table-responsive-md shadow">
                            <thead class="thead-light">
                                <tr>
                                    <th>Subject</th>
                                    <th>1<sup>st</sup> Test</th>
                                    <th>2<sup>nd</sup> Test</th>
                                    <th>Examination</th>
                                    <th>Total Mark</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $results = where("results", "student_id_fk", $details['id']);
                                if (!empty($results)) {
                                    foreach ($results as $result) {
                                        extract($result);
                                        $subjects = where("subjects", "id", $subject_id_fk);
                                        foreach ($subjects as $subject) { ?>

                                                <tr>
                                                    <td><?= $subject['subject_name']; ?></td>
                                                    <td><?= $first_test_score; ?></td>
                                                    <td><?= $second_test_score; ?></td>
                                                    <td><?= $exam_score; ?></td>
                                                    <td><?= $grand_total; ?></td>
                                                    <td class="font-weight-bold"><?= $grade_subject; ?></td>

                                <?php }
                                        }
                                    } ?>
                            </tbody>
                        </table>

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

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>