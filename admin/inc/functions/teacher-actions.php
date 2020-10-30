<?php
require_once "config.php";


// This is for registering into the admin.
function RegisterTeacher($post)
{
    extract($post);
    $errors = [];

    if (!empty($fname)) {
        $fname = sanitize($fname);
    } else {
        $errors[] = "first Name is empty" . "<br>";
    }

    if (!empty($lname)) {
        $lname = sanitize($lname);
        $lname = str_replace("'", "&apos;", $lname);
    } else {
        $errors[] = "Last name is empty" . "<br>";
    }

    if (!empty($gender)) {
        $gender = sanitize($gender);
    } else {
        $errors[] = "Gender is empty" . "<br>";
    }

    if (!empty($tel)) {
        $tel = sanitize($tel);
    } else {
        $errors[] = "Phone number is empty" . "<br>";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Email is empty" . "<br>";
    }

    if (!empty($state)) {
        $state = sanitize($state);
    } else {
        $errors[] = "State is empty" . "<br>";
    }

    if (!empty($lga)) {
        $lga = sanitize($lga);
    } else {
        $errors[] = "LGA is empty" . "<br>";
    }

    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $errors[] = "Address is empty" . "<br>";
    }

    if (!empty($cert)) {
        $cert = sanitize($cert);
    } else {
        $errors[] = "Certification is empty" . "<br>";
    }

    if (!empty($dob)) {
        $dob = sanitize($dob);
    } else {
        $errors[] = "Date of birth is empty" . "<br>";
    }

    if (!empty($password)) {
        $tmp_password = sanitize($password);
    } else {
        $errors[] = "Password is empty" . "<br>";
    }

    if (!empty($cpassword)) {
        $tmp_cpassword = sanitize($cpassword);
    } else {
        $errors[] = "Please confirm password" . "<br>";
    }

    if (isset($_FILES['image'])) {
        $image = sanitize($_FILES['image']['name']);
        $tmp_image = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_image, "assets/images/teachers/$image");
    } else {
        $errors[] = "Devotion Image is empty" . "<br>";
    }

    // checking passwords and encrypting it
    if ($tmp_password === $tmp_cpassword) {
        $password = encrypt($tmp_password);
    } else {
        $errors[] = "Passwords do not match" . "<br>";
    }

    // Joining first name and last name together
    $tmp_name = $fname . " " . $lname;

    if (!check_duplicate("teachers", "teacher_name", $tmp_name)) {
        $name = $tmp_name;
    } else {
        $errors[] = "Teacher already exists" . "<br>";
    }

    if (!$errors) {
        $sql = "INSERT INTO teachers (teacher_name, email, gender, tel, dob, qualification, t_password, t_state, lga, t_address, t_image, date_entered) VALUES ('$name', '$email', '$gender', '$tel', '$dob', '$cert', '$password', '$state', '$lga', '$address', '$image', now())";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}

// This is for setting quiz for students..
function SetQuiz($post)
{
    extract($post);
    $errors = [];

    if (!empty($fname)) {
        $fname = sanitize($fname);
    } else {
        $errors[] = "first Name is empty" . "<br>";
    }

    if (!empty($lname)) {
        $lname = sanitize($lname);
        $lname = str_replace("'", "&apos;", $lname);
    } else {
        $errors[] = "Last name is empty" . "<br>";
    }

    if (!empty($gender)) {
        $gender = sanitize($gender);
    } else {
        $errors[] = "Gender is empty" . "<br>";
    }

    if (!empty($tel)) {
        $tel = sanitize($tel);
    } else {
        $errors[] = "Phone number is empty" . "<br>";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Email is empty" . "<br>";
    }

    if (!empty($state)) {
        $state = sanitize($state);
    } else {
        $errors[] = "State is empty" . "<br>";
    }

    if (!empty($lga)) {
        $lga = sanitize($lga);
    } else {
        $errors[] = "LGA is empty" . "<br>";
    }

    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $errors[] = "Address is empty" . "<br>";
    }

    if (!empty($cert)) {
        $cert = sanitize($cert);
    } else {
        $errors[] = "Certification is empty" . "<br>";
    }

    if (!empty($dob)) {
        $dob = sanitize($dob);
    } else {
        $errors[] = "Date of birth is empty" . "<br>";
    }

    if (!empty($password)) {
        $tmp_password = sanitize($password);
    } else {
        $errors[] = "Password is empty" . "<br>";
    }

    if (!empty($cpassword)) {
        $tmp_cpassword = sanitize($cpassword);
    } else {
        $errors[] = "Please confirm password" . "<br>";
    }

    if (isset($_FILES['image'])) {
        $image = sanitize($_FILES['image']['name']);
        $tmp_image = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_image, "assets/images/teachers/$image");
    } else {
        $errors[] = "Devotion Image is empty" . "<br>";
    }

    // checking passwords and encrypting it
    if ($tmp_password === $tmp_cpassword) {
        $password = encrypt($tmp_password);
    } else {
        $errors[] = "Passwords do not match" . "<br>";
    }

    // Joining first name and last name together
    $tmp_name = $fname . " " . $lname;

    if (!check_duplicate("teachers", "teacher_name", $tmp_name)) {
        $name = $tmp_name;
    } else {
        $errors[] = "Teacher already exists" . "<br>";
    }

    if (!$errors) {
        $sql = "INSERT INTO teachers (teacher_name, email, gender, tel, dob, qualification, t_password, t_state, lga, t_address, t_image, date_entered) VALUES ('$name', '$email', '$gender', '$tel', '$dob', '$cert', '$password', '$state', '$lga', '$address', '$image', now())";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}
