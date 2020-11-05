<?php 

require_once '../../inc/functions/config.php';

// This block of code is for approving registered teachers..
if (isset($_GET['approve'])) {
    $id = $_GET['approve'];

    $result = teacherAction("teachers", "approve", 1, "id", $id);
    if ($result === true) {
        echo "success";
    } else {
        echo "failed";
    }
}

// This block of code is for granting a particular staff access to his / her dashboard..
if (isset($_GET['access'])) {
    $id = $_GET['access'];

    $result = teacherAction("teachers", "access", 1, "id", $id);
    if ($result === true) {
        echo "success";
    } else {
        echo "failed";
    }
}

// This block of code is for suspending a particular staff from accessing his / her dashboard..
if (isset($_GET['suspend'])) {
    $id = $_GET['suspend'];

    $result = teacherAction("teachers", "access", 0, "id", $id);
    if ($result === true) {
        echo "success";
    } else {
        echo "failed";
    }
}

// This block of code is for deleted a particular staff from the system..
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $result = delete("teachers", "id", $id);
    if ($result === true
    ) {
        echo "success";
    } else {
        echo "failed";
    }
}