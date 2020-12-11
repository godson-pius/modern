<?php require_once 'inc/header.php'; ?>

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">



                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center justify-content-between">
                            <h1 class="m-0">Edit Course</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-form__body card-body">
                                        <div class="form-group">
                                            <label for="fname">Slug (URL)</label>
                                            <div class="help-block my-1 p-1 text-muted bg-light border rounded">/course-title-is-editable-here</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="fname">Title</label>
                                            <input id="fname" type="text" class="form-control" placeholder="Title goes here" value="Course title is editable here">
                                        </div>

                                        <div class="form-group">
                                            <label for="desc">Description</label>
                                            <textarea id="desc" rows="4" class="form-control" placeholder="Please enter a description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label><br />
                                            <select id="category" class="custom-select w-auto">
                                                <option value="usa">Web Design</option>
                                                <option value="usa">Web Development</option>
                                                <option value="usa">Marketing</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="subscribe">Published</label><br>
                                            <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                                <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                                <label class="custom-control-label" for="subscribe">Yes</label>
                                            </div>
                                            <label for="subscribe" class="mb-0">Yes</label>
                                        </div>

                                        <div class="form-group">
                                            <label>Course Preview</label>
                                            <div class="dz-clickable media align-items-center" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable" data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                                                <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                                    <div class="avatar avatar-lg">
                                                        <img src="assets/images/account-add-photo.svg" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <button class="btn btn-sm btn-light dz-clickable">Choose photo</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">

                                        <button type="submit" class="btn btn-success">Save Changes</button>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <!-- Lessons -->
                                <div class="card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Lessons</h4>
                                            <div class="card-subtitle text-muted">Manage Lessons</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="student-courses.html" class="btn btn-primary">New <i class="material-icons">add</i></a>
                                        </div>
                                    </div>


                                    <ul class="list-group list-group-fit">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Overview</a>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">3:33</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Asset Pipeline</a>
                                                </div>
                                                <div class="media-right">
                                                    <small>18:43</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Getting Started</a>
                                                    <small class="badge badge-soft-success ">FREE</small>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">5:21</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Advanced Workflows</a>
                                                    <small class="badge badge-soft-warning ">PRO</small>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">5:24</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Tips & Tricks</a>
                                                    <small class="badge badge-soft-warning ">PRO</small>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">11:38</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Final Quiz</a>
                                                </div>
                                                <div class="media-right">
                                                    <small class="badge badge-soft-primary ">QUIZ</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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

                            <!-- Navigation -->
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