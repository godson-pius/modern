<?php
require_once 'admin/inc/functions/config.php';

$schoool_news = fetchAllDesc("news");
?>

<?php $page_title = "News || Modern Nur/Pri Sch.";
require_once 'inc/header.php'; ?>

<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Our news</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title mb-5">Our news</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="blog-one blog-page">
    <div class="container">
        <div class="row">


            <?php
            if (!empty($schoool_news)) {
                foreach ($schoool_news as $news) {
                    extract($news); ?>
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <div class="shadow" style="width: 100%; height: 307px; background-color: red; background-image: url(assets/images/news/<?= $image_url; ?>); background-position: center; background-size: cover;"></div>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On <?= date("M", strtotime($date_posted)) . " " . date("d", strtotime($date_posted)); ?>" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="<?= $title; ?>" href="#"><i class="fa fa-news"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h4 class="text-dark font-weight-bold"><?= substr($title, "0", "25"); ?></h4><!-- /.blog-one__title -->
                                <p class="blog-one__text"><?= substr($body, "0", "200"); ?>...</p><!-- /.blog-one__text -->
                                <a href="news-details?news_id=<?= $id; ?>" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->


                    </div><!-- /.col-lg-4 -->

            <?php }
            } ?>
        </div><!-- /.row -->

        <!-- Pagination -->


    </div><!-- /.container -->
</section><!-- /.blog-one blog-page -->

<?php require_once 'inc/footer.php'; ?>