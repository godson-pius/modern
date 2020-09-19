<?php
error_reporting(0);
require_once 'admin/inc/functions/config.php';

if (isset($_POST['submit'])) {
    $response = RegisterTeacher($_POST);

    if ($response === true) {
        $success = true;
        //echo "<script>alert('You have successfully opted in')</script>";
        //echo "<script>alert('Please wait for approval')</script>";
    } else {
        $errors = $response;
        // echo "<script>alert('Failed to register')</script>";
    }
}

?>


<?php $page_title = "Teachers - signIn";
require_once 'inc/header.php'; ?>

<?php
if (isset($errors)) {
    foreach ($errors as $error) { ?>
        <div class="container">
            <div id="err_display" class="bg-danger text-center text-light p-3 mt-5 shadow" style="font-family: roboto; font-size: 20px;"><?= $error; ?> <h2 id="close" class="text-warning" style="cursor: pointer;">&times;</h2>
            </div>

        </div>
<?php }
} ?>

<?php
if ($success === true) { ?>
    <div class="container">
        <div id="err_display" class="bg-success text-center text-light p-2 mt-5 shadow" style="font-family: roboto; font-size: 20px;">You have successfully opted in! <p>Please wait for approval</p>
            <h2 id="close" class="text-warning" style="cursor: pointer;">&times;</h2>
        </div>

    </div>
<?php } ?>


<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Teacher Opt In</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title mb-3">Teacher Opt In</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="become-teacher mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="become-teacher__content">
                    <h2 class="become-teacher__title">Teaching benefits</h2><!-- /.become-teacher__title -->
                    <p class="become-teacher__text">As a teacher, you are afforded the opportunity to influence the world's greatest resource: its youth. Teaching allows you to make a difference in the lives of young people who will shape the future. The profound impact of a teacher on their students cannot be overemphasized</p><!-- /.become-teacher__text -->
                    <h2 class="become-teacher__subtitle">Quotes for Teachers</h2><!-- /.become-teacher__subtitle -->
                    <p class="become-teacher__text">If you are planning for a year, sow rice; if you are planning for a decade, plant trees; if you are planning for a lifetime, educate people.</p><!-- /.become-teacher__text -->
                    <p class="mt-4">If someone is going down the wrong road, he doesn’t need motivation to speed him up. What he needs is education to turn him around.</p>

                    <p class="mt-4">The dream begins, most of the time, with a teacher who believes in you, who tugs and pushes and leads you on to the next plateau, sometimes poking you with a sharp stick called truth.</p>

                    <p class="mt-4">Every child deserves a champion—an adult who will never give up on them, who understands the power of connection and insists that they become the best that they can possibly be.</p>

                    <p class="mt-4">A good teacher is like a candle—it consumes itself to light the way for others.</p>
                </div><!-- /.become-teacher__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-8">
                <div class="become-teacher__form">
                    <div class="become-teacher__form-top">
                        <h2 class="become-teacher__form-title">
                            Opt In to MNPS
                        </h2><!-- /.become-teacher__form-title -->
                    </div><!-- /.become-teacher__top -->
                    <div class="become-teacher__form-content">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter first name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tel">Phone Number</label>
                                    <input type="number" name="tel" class="form-control" id="tel" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="state">State</label>
                                    <select onchange="toggleLGA(this);" name="state" id="state" class="form-control">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="AkwaIbom">AkwaIbom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="FCT">FCT</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Katsina">Katsina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zamfara">Zamafara</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lga">LGA</label>
                                    <select name="lga" id="lga" name="lga" class="form-control select-lga" required>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <textarea name="address" id="inputAddress" class="form-control" placeholder="1234 Main St"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="cert">Certification (s)</label>
                                <textarea name="cert" id="cert" class="form-control" placeholder="Bsc, HND, Masters Degree Holder, O'level"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" class="form-control" id="dob">
                            </div>

                            <div class="form-group">
                                <label for="image">Profile Pic</label>
                                <input type="file" name="image" id="image">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter password">
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary form-control">Sign in</button>
                        </form>
                    </div><!-- /.become-teacher__form-content -->
                </div><!-- /.become-teacher__form -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.become-teacher -->

<section class="cta-one">
    <div class="container">
        <h2 class="cta-one__title">Fill form for free to regitser <br>
            yourself now</h2><!-- /.cta-one__title -->
        <div class="cta-one__btn-block">
            <a href="#" class="thm-btn cta-one__btn">Start Learning Now</a><!-- /.thm-btn -->
        </div><!-- /.cta-one__btn-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
<?php require_once 'inc/footer.php'; ?>

<script>
    $(document).ready(function() {
        $("#close").click(function() {
            $("#err_display").slideToggle();
        })
    })
</script>