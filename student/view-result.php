<?php
// error_reporting(0);
require_once '../admin/inc/functions/config.php';
blockUrlHackers('studentId', 'login');
blockUrlHackers('cardSet', 'card-login');

if (isset($_POST['submit'])) {
    if (!empty($_POST['acadYear']) && !empty($_POST['term'])) {

        $academic_year = $_POST['acadYear'];
        $term = $_POST['term'];

        redirect_to("student-result?acad=$academic_year&term=$term");
    } else {
        echo "<script>alert('Please fill in the required field')</script>";
    }
}

?>

<?php
$pageHeader = "Select Result";
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





            <div class="container-fluid page__container">


                <div class="row">


                    <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Select Result</strong></p>
                                <p class="text-muted">Please kindly select the <strong>academic year</strong> and <strong> term</strong> of result you wish to view. <br> And our portal will provide it for you.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <form action="" method="post">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="acadYear">Select Year</label>
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

                                        <div class="form-row">
                                            <div class="col-12 col-md-12 mb-3">
                                                <label for="term">Select Term</label>
                                                <select id="term" data-toggle="select" name="term" class="form-control">
                                                    <option disabled selected value="">Select Term</option>
                                                    <option value="1">First Term</option>
                                                    <option value="2">Second Term</option>
                                                    <option value="3">Third Term</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <button class="btn btn-primary" name="submit" type="submit">View Result</button>
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