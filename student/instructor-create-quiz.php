<?php
    require_once '../admin/inc/functions/config.php';
    if (isset($_POST['setquiz'])) {
        $res = SetQuiz($_POST);
    }

?>



<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Student :: Quiz</h1>
                    <a href="" class="btn btn-success ml-lg-3">Back to Course <i class="material-icons">arrow_forward</i></a>
                </div>
            </div>





            <div class="container-fluid page__container">


                <div class="card">
                    <div class="card-body card-form__body">
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <label class="control-label h6">Subject:</label>
                                <input type="text" name="question[subject]" class="form-control mb-2" required>

                                <label class="control-label h6">New Question:</label>
                                <input type="text" name="question[title]" class="form-control" required>
                            </div>
                            <button class="btn btn-primary" name="setquiz"><i class="material-icons">add</i> Create Question</button>
                        </form>
                    </div>
                </div>

                <div id="questions_wrapper">

                    <div class="card mb-4" data-position="1" data-question-id="1">
                        <div class="btn btn-info btn-sm text-left shadow">Mathematics</div>
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex align-items-center ">

                                <span class="question_handle btn btn-sm btn-secondary">
                                    <i class="material-icons">menu</i>
                                </span>
                                <div class="h4 m-0 ml-4">Q: What is a prop in Angular?</div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                        <!-- <div class="card-body">

                            <div id="answerWrapper_1" class="mb-4">
                                <div class="row mb-1">
                                    <div class="col"><strong></strong></div>
                                    <div class="col text-right"><strong>Correct</strong></div>
                                </div>

                                <form action="#">
                                    <ul class="list-group" id="answer_container_1">
                                        <li class="list-group-item d-flex" data-position="1" data-answer-id="1" data-question-id="1">
                                            <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                            <div>
                                                First Answer Title
                                            </div>
                                            <div class="ml-auto">
                                                <input type="radio" name="question[correct_answer_id]" id="correct_answer_1" checked>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex" data-position="2" data-answer-id="2" data-question-id="1">
                                            <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                            <div>
                                                Second Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="radio" name="question[correct_answer_id]" id="correct_answer_2">
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex" data-position="3" data-answer-id="3" data-question-id="1">
                                            <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                            <div>
                                                Third Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="radio" name="question[correct_answer_id]" id="correct_answer_3">
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>




                            <div class="">
                                <form action="#">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-success">New Answer</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
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


<?php require_once 'inc/drawer.php'; ?>

<?php require_once 'inc/footer.php'; ?>