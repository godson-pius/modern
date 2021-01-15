<?php
// error_reporting(0);
require_once '../admin/inc/functions/config.php';
blockUrlHackers('studentId', 'login');

// if (isset($_SESSION['studentId'])) {
//     $studentId = $_SESSION['studentId'];
// }
// checkResultStatus($studentId, $_POST['pin']);

if (isset($_POST['submit'])) {

    $result = cardLogin($_POST);

    if ($result === true) {
        redirect_to('view-result');
    } else {
        $error = $result;
        if (is_array($error)) {
            foreach ($error as $err) {
                echo "<script>alert('$err')</script>";
                // redirect_to('card-login');
            }
        } else {
            echo "<script>alert('$result')</script>";
        }
    }
    die();
}
?>

<?php 
$pageHeader = "Card Login";
require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Card Login</h1>
                    <a href="get-card" class="btn btn-secondary shadow ml-lg-3">Get Scratch Card <i class="material-icons">arrow_forward</i></a>

                </div>
            </div>





            <div class="container-fluid page__container">


                <div class="row">

                    <div class="card card-form">
                        <div class="row no-gutters">

                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Card Details</strong></p>
                                <p class="text-muted">Provide correct, accurate login details from your scratch card!</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <form action="" method="post">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="username">Student Username</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                        </div>

                                        <div class="form-group">
                                            <label for="pin">PIN</label>
                                            <input type="text" class="form-control" name="pin" id="pin" placeholder="Scratch Pin">
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