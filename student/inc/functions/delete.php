<?php
require_once "config.php";
blockUrlHackers("../../auth_login");

if (isset($_GET['post_id'])) {
    $postId = $_GET['post_id'];
    $result = where("blog_posts", "post_id", $postId);
    $result2 = delete("blog_comments", "post_id", $postId);
    foreach ($result as $data) {
        $post_image = $data['post_image'];
    }

    $result = delete("blog_posts", "post_id", $postId);
    if ($result === true) {
        unlink("../../../img/blog-Post/$post_image");
        $_SESSION['post_deleted'] = true;
        redirect_to("../../");
    }
}

if (isset($_GET['admin_id'])) {
    $adminId = $_GET['admin_id'];

    $result = delete("admins", "admin_id", $adminId);
    if ($result === true) {
        $_SESSION['admin_deleted'] = true;
        redirect_to("../../view-admins.php");
    }
}

if (isset($_GET['contact_id'])) {
    $contactId = $_GET['contact_id'];

    $result = delete("blog_contacts", "contact_id", $contactId);
    if ($result === true) {
        $_SESSION['contact_deleted'] = true;
        redirect_to("../../");
    }
}

if (isset($_GET['cat_id'])) {
    $catId = $_GET['cat_id'];

    $result = delete("blog_categories", "category_id", $catId);
    if ($result === true) {
        $_SESSION['cat_deleted'] = true;
        redirect_to("../../view-category.php");
    }
}

if (isset($_GET['comment_id'])) {
    $commentId = $_GET['comment_id'];

    $result = delete("blog_comments", "comment_id", $commentId);
    $result2 = delete("blog_replies", "comment_id", $commentId);
    if ($result === true && $result2 === true) {
        $_SESSION['comment_deleted'] = true;
        redirect_to("../../");
    }
}