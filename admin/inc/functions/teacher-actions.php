<?php
require_once "config.php";

// Teacher Login
function teacherLogin($post)
{
    extract($post);
    $errors = [];

    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!";
        }
    } else {
        $errors[] = "Please enter your email address!";
    }


    //Checking for password...
    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $errors[] = "Please enter your password!";
    }


    //The Sql Statement...
    if (!$errors) {
        $sql = "SELECT * FROM teachers WHERE email = '$mail'";
        $result = executeQuery($sql);
        if ($result) {
            $encryptedpassword = $result['t_password'];
            if (decrypt($encryptedpassword, $password)) {
                $_SESSION['teacherId'] = $result['id'];
                // if (isset($rememberMe)) {
                //     setcookie("admin_password", $password, time() + (86400 * 30), "/");
                //     setcookie("admin_email", $mail, time() + (86400 * 30), "/");
                // }
                return true;
            }
        }
        $errors[] = "Invalid Login Details!";
    }
    return $errors;
}


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

// This is for uploading students results..
function uploadResult($post)
{
    extract($post);
    $errors = [];

    if (!empty($class)) {
        $class = sanitize($class);
    } else {
        $errors[] = "Class name is empty";
    }
    
    if (!empty($student)) {
        $student = sanitize($student);
    } else {
        $errors[] = "student name is empty";
    }
    
    if (!empty($subject)) {
        $subject = sanitize($subject);
    } else {
        $errors[] = "subject name is empty";
    }
    
    if (!empty($firstTest)) {
        $firstTest = sanitize($firstTest);
    } else {
        $errors[] = "First Test score is empty";
    }
    
    if (!empty($secondTest)) {
        $secondTest = sanitize($secondTest);
    } else {
        $errors[] = "Second Test score is empty";
    }
    
    if (!empty($examScore)) {
        $examScore = sanitize($examScore);
    } else {
        $errors[] = "Exam score is empty";
    }
    
    if (!empty($grandTotal)) {
        $grandTotal = sanitize($grandTotal);
    } else {
        $errors[] = "Grand Total score is empty";
    }
    
    if (!empty($acadYear)) {
        $acadYear = sanitize($acadYear);
    } else {
        $errors[] = "Academic Year is empty";
    }
    
    if (!empty($subjectGrade)) {
        $subjectGrade = sanitize($subjectGrade);
    } else {
        $errors[] = "Subject Grade is empty";
    }

    if (check_multiple_result_upload("results", "student_id_fk", $student, "subject_id_fk", $subject)) {
        $errors[] = "Subject Already recorded for this student";
    }

    if (isset($_SESSION['teacherId'])) {
        $teacher_id = $_SESSION['teacherId'];
    }

    if (!$errors) {
        $stmt = "INSERT INTO results (student_id_fk, subject_id_fk, teacher_id_fk, first_test_score, second_test_score, exam_score, grand_total, grade_subject, academic_year_fk, date_entered) VALUES ('$student', '$subject', '$teacher_id', '$firstTest', '$secondTest', '$examScore', '$grandTotal', '$subjectGrade', '$acadYear', now())";

        $query = validateQuery($stmt);

        if ($query) {
            return true;
        } else {
            return false;
        }
    } else {
        return $errors;
    }
}
