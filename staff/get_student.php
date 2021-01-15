<?php
require_once '../admin/inc/functions/config.php';

if (!empty($_GET["classid"])) {
    $cid = intval($_GET['classid']);
    if (!is_numeric($cid)) {

        echo htmlentities("invalid Class");
        exit;
    } else {
        $stmt = "SELECT name,id FROM students WHERE class_fk = $cid order by name";
        $query = mysqli_query($link, $stmt);
?>
        <option value="" disabled>Select Student </option>
        <?php
        foreach ($query as $student) {
        ?>
            <option value="<?php echo htmlentities($student['id']); ?>"><?php echo htmlentities($student['name']); ?></option>
        <?php
        }
    }
}

if (!empty($_GET["sectionid"])) {
    $sid = intval($_GET['sectionid']);
    if (!is_numeric($sid)) {

        echo htmlentities("invalid Class");
        exit;
    } else {
        $stmt = "SELECT id, subject_name FROM subjects WHERE section_id_fk = $sid order by id";
        $query = mysqli_query($link, $stmt);
        ?>
        <option value="" disabled>Select Subject </option>
        <?php
        foreach ($query as $subject) {
        ?>
            <option value="<?php echo htmlentities($subject['id']); ?>"><?php echo htmlentities($subject['subject_name']); ?></option>
<?php
        }
    }
}

// Editing result

if (!empty($_GET['subject_id']) && !empty($_GET['student_id']) && !empty($_GET['firstTest']) && !empty($_GET['secondTest']) && !empty($_GET['examScore']) && !empty($_GET['grandTotal']) && !empty($_GET['gradeSubject'])) {
    
    $subject_id = $_GET['subject_id'];
    $student_id = $_GET['student_id'];
    $firstTestScore = $_GET['firstTest'];
    $secondTestScore = $_GET['secondTest'];
    $examScore = $_GET['examScore'];
    $grandTotal = $_GET['grandTotal'];
    $gradeSubject = $_GET['gradeSubject'];

    $stmt = "UPDATE results SET first_test_score = $firstTestScore, second_test_score = $secondTestScore, exam_score = $examScore, grand_total = $grandTotal, grade_subject = '$gradeSubject', updated_at = now() WHERE subject_id_fk = $subject_id AND student_id_fk = $student_id";

    // print_r($stmt);
    // die();

    $query = mysqli_query($link, $stmt);

    if ($query) {
        echo "success";
    } else {
        echo mysqli_error($link);
    }
}
