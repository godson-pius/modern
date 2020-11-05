<?php
require_once 'inc/functions/config.php';
blockUrlHackers("login");

// Getting pending teachers
$pending_teachers = where("teachers", "approve", 0);

?>


<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h1 class="mb-1">Pending</h1>
            <!-- <p>Approve registered teachers into the system</p> -->
        </div>
        <div class="container-fluid page__container d-flex align-items-center">
            <p class="text-muted">Approve registered teachers into the system</p>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="row">
            <?php
            if (!empty($pending_teachers)) {
                foreach ($pending_teachers as $pending) {
                    extract($pending); ?>
                    <div class="col-lg-4">
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
                                <p class="card-text"><b>Date Registered: </b><?= $date_entered; ?></p>
                                <hr>
                                <a onclick="approve(this)" data-approve="<?= $id; ?>" class="btn btn-primary text-light shadow">Give Approval</a>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <div class="col-lg-12 text-light shadow bg-secondary jumbotron">
                    <h5>No Pending Teacher</h5>
                </div>
            <?php } ?>
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