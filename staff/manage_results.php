<?php
// error_reporting(0);
require_once '../admin/inc/functions/config.php';
if (isset($_SESSION['teacherId'])) {
    $active_teacher_id = $_SESSION['teacherId'];
}

?>

<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Manage Student Result</h1>
                    <a href="compile" class="btn btn-dark shadow"><i class="material-icons">arrow_forward</i> compile Results</a>

                </div>
            </div>





            <div class="container-fluid">


                <div class="row">

                    <div class="col-lg-12">
                        <table id="myTable" class="table table-light table-responsive-sm table-responsive-md shadow">
                            <thead class="thead-light">
                                <tr>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Reg Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $results = where("results", "teacher_id_fk", $active_teacher_id);
                                if (!empty($results)) {
                                    foreach ($results as $result) {
                                        extract($result);
                                        $students = where("students", "id", $student_id_fk);
                                        foreach ($students as $student) {
                                            $class_id = $student['class_fk'];
                                            $class = where("classes", "id", $class_id);
                                            foreach ($class as $s_class) { ?>

                                                <tr>
                                                    <td><?= $student['name']; ?></td>
                                                    <td><?= $s_class['class']; ?></td>
                                                    <td><?= $student['date_registered']; ?></td>

                                                    <td>
                                                        <?php
                                                        $access = $student['access'];
                                                        if ($access == 0) {
                                                            echo '<a class="btn btn-sm btn-danger shadow text-light">Not active</a>';
                                                        } else {
                                                            echo '<a class="btn btn-sm btn-success shadow text-light">Active</a>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="edit_result?studentId=<?= $student['id']; ?>" class="btn btn-sm btn-info text-light">Edit</a>
                                                        <a href="delete?studentId=<?= $student['id']; ?>" class="btn btn-sm btn-danger text-light">Delete</a>
                                                    </td>
                                                </tr>

                                <?php }
                                        }
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

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>