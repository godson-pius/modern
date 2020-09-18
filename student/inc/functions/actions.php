<?php
require_once "config.php";

function adminLogin($post)
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
    }else {
        $errors[] = "Please enter your password!";
    }


    //The Sql Statement...
    if (!$errors) {
        $sql = "SELECT * FROM admins WHERE admin_email = '$mail'";
        $result = executeQuery($sql);
        if ($result) {
            $encryptedpassword = $result['admin_password'];
            if (decrypt($encryptedpassword, $password)) {
                $_SESSION['adminId'] = $result['admin_id'];
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

function AddPost($post) {
    extract($post);
    $errors = [];

    if (!empty($postTitle)) {
        $tmp_title = sanitize($postTitle);
        if (!check_duplicate("blog_posts", "post_title", $tmp_title)) {
            $tmp_title2 = $tmp_title;
            $title = str_replace("'", "&#39;", $tmp_title2);
        } else {
            $errors[] = "This Blog Post already exists" . "<br>";
        }
    } else {
        $errors[] = "Post Title is empty" . "<br>";
    }

    if (!empty($postAuthor)) {
        $author = sanitize($postAuthor);
    } else {
        $errors[] = "Post Author is empty" . "<br>";
    }

    if (!empty($postCategory)) {
        $postCategory = sanitize($postCategory);
    } else {
        $errors[] = "Post Category is empty" . "<br>";
    }

    if (!empty($postContent)) {
        $tmp_postContent = sanitize($postContent);
        $postContent = str_replace("'", "&#39;", $tmp_postContent);
    } else {
        $errors[] = "Post Content cannot be empty" . "<br>";
    }

    if (isset($_FILES['postImage'])) {
        $image = sanitize($_FILES['postImage']['name']);
        $tmp_image = $_FILES['postImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../img/blog-Post/$image");
    } else {
        $errors[] = "Post Image is empty" . "<br>";
    }

    if (!$errors) {
        $sql = "INSERT INTO blog_posts (post_title, post_author, post_category_id, post_content, post_image, post_date) VALUES ('$title', '$author', '$postCategory', '$postContent', '$image', now())";

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

function editPost($post) {
    extract($post);

    if (!empty($postTitle)) {
        $tmp_title2 = sanitize($postTitle);
        $title = str_replace("'", "&#39;", $tmp_title2);
    }


    if (isset($_FILES['postImage'])) {
        $image = sanitize($_FILES['postImage']['name']);
        $tmp_image = $_FILES['postImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../img/blog-Post/$image");
    }

    if (!empty($message)) {
        $message = sanitize_body($message);
        $message = str_replace("'", "&#39;", $message);
    }

    if (!empty($postId)) {
        $post_id = $postId;
    }

    if (!$errors) {
        $sql = "UPDATE blog_posts SET post_title = '$title', post_image = '$image', post_content = '$message' WHERE post_id = $post_id";
        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    return $errors;
}

function AddCategory($post) {
    extract($post);
    $errors = [];

    if (!empty($catTitle)) {
        $tmp_title = sanitize($catTitle);
        if (!check_duplicate("blog_categories", "category_title", $tmp_title)) {
            $title = $tmp_title;
            //$title = str_replace("'", "</b>", $title);
        } else {
            $errors[] = "This category already exists" . "<br>";
        }
    } else {
        $errors[] = "Category Title is empty" . "<br>";
    }

    if (!$errors) {
        $sql = "INSERT INTO blog_categories (category_title, date_added) VALUES ('$title', now())";

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

function updateAdmin($post, $id) {
    extract($post);
    $errors = [];

    if (!empty($name)) {
        $name = sanitize($name);
    } else {
        $errors[] = "Name is empty" . "<br>";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Email is empty" . "<br>";
    }


    if (!empty($password)) {
        $tmp_password = sanitize($password);
        $password = encrypt($tmp_password);
    } else {
        $errors[] = "Password is empty" . "<br>";
    }

    if (!$errors) {
        $sql = "UPDATE admins SET admin_name = '$name', admin_email = '$email', admin_password = '$password' WHERE admin_id = $id";
        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    return $errors;
}

function addAdmin($post) {
    extract($post);
    $errors = [];


    if (!empty($name)) {
        $name = sanitize($name);
    }else {
        $errors[] = "Admin name is empty!"  . "<br>";
    }


    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!"  . "<br>";
        }
    } else {
        $errors[] = "Admin email address is empty!"  . "<br>";
    }


    //Checking for password...
    if (!empty($password1)) {
        $tmp_password1 = sanitize($password1);
    }else {
        $errors[] = "Enter password!"  . "<br>";
    }

    //Checking for password...
    if (!empty($password2)) {
        $tmp_password2 = sanitize($password2);
    } else {
        $errors[] = "Confirm Password!"  . "<br>";
    }

    if ($password1 === $password2) {
        $password = encrypt($password1);
    } else {
        $errors[] = "Passwords do not match!"  . "<br>";
    }

    if (!$errors) {
        $sql = "INSERT INTO admins (admin_name, admin_email, admin_password) VALUES ('$name', '$mail', '$password')";

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


function adminReply($post)
{
    extract($post);
    $errors = [];

    if (!empty($replyAuthor)) {
        $replyAuthor = sanitize($replyAuthor);
    } else {
        $errors[] = "Name is empty";
    }

    if (!empty($message)) {
        $message = sanitize($message);
    } else {
        $errors[] = "Message is empty";
    }


    if (!empty($comment_id)) {
        $commentId = sanitize($comment_id);
    }


    if (!$errors) {
        $sql = "INSERT INTO blog_replies (comment_id, reply_content, reply_author, role, reply_date) VALUES ('$commentId', '$message', '$replyAuthor', 'admin', now())";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again";
        }
    } else {
        return $errors;
    }
}
