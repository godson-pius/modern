<?php
require_once 'admin/inc/functions/config.php';
if (isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];

    $result = where("news", "id", $news_id);
    if (!empty($result)) {
        foreach ($result as $news) {
            extract($news);
        }
    }
}

?>

<?php $page_title = "News-Details || Modern Nur/Pri Sch.";
require_once 'inc/header.php'; ?>

<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">News Details</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title mb-5">News Details</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-one__single">
                    <div class="blog-one__image">
                        <div class="shadow" style="width: 100%; height: 427px; background-color: red; background-image: url(assets/images/news/<?= $image_url; ?>); background-position: center; background-size: cover;"></div>
                    </div><!-- /.blog-one__image -->
                    <div class="blog-one__content text-center">
                        <div class="blog-one__meta">
                            <a data-toggle="tooltip" data-placement="top" title="Posted On <?= date("M", strtotime($date_posted)) . " " . date("d", strtotime($date_posted)); ?>" href="#"><i class="fa fa-calendar-alt"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="<?= $title; ?>" href="#"><i class="fa fa-news"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                        </div><!-- /.blog-one__meta -->
                        <h2 class="blog-one__title"><?= $title; ?>

                        </h2><!-- /.blog-one__title -->
                        <p class="blog-one__text"><?= $body; ?>
                        </p><!-- /.blog-one__text -->
                    </div><!-- /.blog-one__content -->
                </div><!-- /.blog-one__single -->

                <div class="blog-details__author">
                    <div class="blog-details__author-image">
                        <a data-toggle="tooltip" data-placement="top" title="Advert" href="#">Advert</a>
                        <div class="shadow" style="width: 170px; height: 160px; background-color: red; background-image: url(assets/images/main/img5.jpeg); background-position: center; background-size: cover;"></div>
                    </div><!-- /.blog-details__image -->
                </div><!-- /.blog-details__author -->
            </div><!-- /.col-lg-8 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-details -->
<?php require_once 'inc/footer.php'; ?>