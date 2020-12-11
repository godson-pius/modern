<?php require_once 'inc/header.php'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">



            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex align-items-center justify-content-between">
                    <h1 class="m-0">Edit Lesson</h1>
                </div>
            </div>





            <div class="container-fluid page__container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-form__body card-body">
                                <div class="form-group">
                                    <label for="category">Course:</label><br />
                                    <select id="category" class="custom-select w-auto">
                                        <option value="usa">Basics of Angular</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fname">Title</label>
                                    <input id="fname" type="text" class="form-control" placeholder="Title goes here" value="Course title is editable here">
                                </div>

                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea id="desc" rows="4" class="form-control" placeholder="Please enter a description"></textarea>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="subscribe">Published</label><br>
                                    <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                        <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                        <label class="custom-control-label" for="subscribe">Yes</label>
                                    </div>
                                    <label for="subscribe" class="mb-0">Yes</label>
                                </div>

                            </div>
                            <div class="card-body text-center">

                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <!-- Lessons -->

                            <div class="card-header card-header-large bg-light d-flex align-items-center">

                                <h4 class="card-header__title">Lesson Video</h4>
                            </div>

                            <div class="card-body">

                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                                </div>
                                <!-- Lessons -->
                                <div class="form-group mb-3">
                                    <div class="dz-clickable media align-items-center" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable" data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                                        <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                            <div class="avatar avatar-lg">
                                                <img src="assets/images/account-add-photo.svg" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <button class="btn btn-sm btn-light dz-clickable">Choose file</button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block">Update Video</button>
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