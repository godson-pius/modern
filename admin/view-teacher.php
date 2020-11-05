<?php
require_once 'inc/functions/config.php';
blockUrlHackers("login");

if (isset($_GET['id'])) {
    $teacher_id = $_GET['id'];

    // Getting specific teachers
    $teachers_details = where("teachers", "id", $teacher_id);

    if (!empty($teachers_details)) {
        foreach ($teachers_details as $details) {
            extract($details);
        }
    }

    // Getting class..
    $get_subjects = where("subjects", "subject_teacher_fk", $teacher_id);
}

?>


<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h1 class="mb-1"><?php if ($gender === "male") {
                                    echo "Mr. ";
                                } else {
                                    echo "Mrs. ";
                                } ?> <?= $teacher_name; ?></h1>
            <!-- <p>Approve registered teachers into the system</p> -->
        </div>
        <div class="container-fluid page__container d-flex align-items-center">
            <p class="text-muted">View each teachers details here.</p>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="card-img-top" style="background-color: red; width: 100%; height: 230px; background-image: url(../assets/images/teachers/<?= $t_image; ?>); background-position: center; background-size: cover;"></div> <!-- Staff Image -->
                    <div class="card-body">
                        <h4 class="card-title"><?= $teacher_name; ?></h4>
                        <hr>
                        <p class="card-text"><b>Email: </b><?= $email; ?></p>
                        <p class="card-text"><b>Gender: </b><?= $gender; ?></p>
                        <p class="card-text"><b>Tel: </b><?= $tel; ?></p>
                        <p class="card-text"><b>Qualification(s): </b><?= $qualification; ?></p>
                        <p class="card-text"><b>Address: </b><?= $t_address; ?></p>
                        <p class="card-text"><b>State: </b><?= $t_state; ?></p>
                        <p class="card-text"><b>DOB: </b><?= $dob; ?></p>
                        <p class="card-text"><b>Date Registered: </b><?= $date_entered; ?></p>
                        <p class="card-text"><b>Taking: </b></p>
                        <hr>

                        <?php 
                            if (!empty($get_subjects)) {
                                foreach ($get_subjects as $subject) {
                                    extract($subject); ?>
                                    <a class="btn btn-primary text-light shadow"><?= $subject_name; ?></a>
                        <?php } } ?>
                    </div>
                </div>
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