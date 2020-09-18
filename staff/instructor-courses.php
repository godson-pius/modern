
<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                    <h1 class="m-lg-0">Instructor Courses</h1>
                    <a href="instructor-course-edit.html" class="btn btn-success ml-lg-3">New Course <i class="material-icons">add</i></a>
                </div>
            </div>





            <div class="container-fluid page__container">


                <form action="#" class="mb-2">
                    <div class="d-flex">
                        <div class="search-form mr-3 search-form--light">
                            <input type="text" class="form-control" placeholder="Filter by name" id="searchSample02">
                            <button class="btn" type="button"><i class="material-icons">search</i></button>
                        </div>

                        <div class="form-inline ml-auto">
                            <div class="form-group mr-3">
                                <label for="custom-select" class="form-label mr-1">Sort</label>
                                <select id="custom-select" class="form-control custom-select" style="width: 200px;">
                                    <option selected>Name</option>
                                    <option value="2">Created Date</option>
                                    <option value="1">Earnings</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="published01" class="form-label mr-1">Status</label>
                                <select id="published01" class="form-control custom-select" style="width: 200px;">
                                    <option selected>Published</option>
                                    <option value="1">Draft</option>
                                    <option value="3">All</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>



                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="assets/images/logos/vuejs.svg" alt="Card image cap" class="avatar-course-img">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.html">Learn Vue.js</a></h4>
                                                <p class="text-muted">Let’s start with a quick tour of Vue’s data binding features.</p>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="instructor-course-edit.html">Edit Course</a>
                                                    <a class="dropdown-item" href="#">Statistics</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <div class="d-flex flex flex-column mr-3">
                                                <div class="d-flex align-items-center py-2 border-bottom">
                                                    <span class="mr-2">&dollar;1,230/mo</span>
                                                    <small class="text-muted ml-auto">34 SALES</small>
                                                </div>
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="badge badge-vuejs mr-2">VUEJS</span>
                                                    <span class="badge badge-soft-secondary">INTERMEDIATE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="assets/images/logos/node.svg" alt="Card image cap" class="avatar-course-img">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.html">Npm &amp; Gulp Advanced Workflow</a></h4>
                                                <p class="text-muted">Learn the basics of Github and become a power Github developer.</p>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="instructor-course-edit.html">Edit Course</a>
                                                    <a class="dropdown-item" href="#">Statistics</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <div class="d-flex flex flex-column mr-3">
                                                <div class="d-flex align-items-center py-2 border-bottom">
                                                    <span class="mr-2">&dollar;421/mo</span>
                                                    <small class="text-muted ml-auto">12 SALES</small>
                                                </div>
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="badge badge-node mr-2">NODE</span>
                                                    <span class="badge badge-soft-secondary">INTERMEDIATE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="assets/images/logos/gitlab.png" alt="Card image cap" class="avatar-course-img">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.html">Gitlab for Beginners</a></h4>
                                                <p class="text-muted">Developing static website with fast and advanced gulp setup.</p>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="instructor-course-edit.html">Edit Course</a>
                                                    <a class="dropdown-item" href="#">Statistics</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <div class="d-flex flex flex-column mr-3">
                                                <div class="d-flex align-items-center py-2 border-bottom">
                                                    <span class="mr-2">&dollar;2,191/mo</span>
                                                    <small class="text-muted ml-auto">50 SALES</small>
                                                </div>
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="badge badge-gitlab mr-2">GITLAB</span>
                                                    <span class="badge badge-soft-secondary">INTERMEDIATE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="assets/images/logos/rails.svg" alt="Card image cap" class="avatar-course-img">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.html">Ruby on Rails Workflows</a></h4>
                                                <p class="text-muted">Let’s start with a quick tour of Vue’s data binding features.</p>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="instructor-course-edit.html">Edit Course</a>
                                                    <a class="dropdown-item" href="#">Statistics</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <div class="d-flex flex flex-column mr-3">
                                                <div class="d-flex align-items-center py-2 border-bottom">
                                                    <span class="mr-2">&dollar;300/mo</span>
                                                    <small class="text-muted ml-auto">5 SALES</small>
                                                </div>
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="badge badge-angular mr-2">ANGULAR</span>
                                                    <span class="badge badge-soft-secondary">INTERMEDIATE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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