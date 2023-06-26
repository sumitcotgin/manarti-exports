<?php include('include/head.php') ?>

<main>
    <section class="py-5 bg-body event-section overflow-visible blog-section position-relative z-0">
        <div class="container">
            <h1 class="blog-title text-gradient mb-4">LATEST BLOGS</h1>
            <div class="row row-gap-4 mb-lg-0 mb-5">
                <div class="col-lg-8">
                    <div class="main-blog pb-5">
                        <a href="blog-detail.php" class="d-block mb-3">
                            <img src="images/blog-img.jpg" alt="Manarti blog" class="img-fluid w-100" />
                        </a>
                        <h2 class="text-uppercase fw-bold">
                            <a href="blog-detail.php" class="text-dark">Manarti blog</a>
                        </h2>
                        <p class="text-dark mb-4">Manarti Exports is a specialized medical disposables, systems, devices and hospital equipment provider offering a wide range of products. Our products are manufactured at state-of-the art production facilities in India, with capacity to produce large quantities.</p>
                    </div>
                    <div class="row gy-5">
                        <?php for($a=0; $a<2; $a++) { ?>
                        <div class="col-md-6">
                            <div>
                                <a href="#">
                                    <figure class="position-relative img-hover">
                                        <img src="images/blog-list-1.jpg" alt="Blog 1" class="img-fluid rounded-0 w-100" />
                                    </figure>
                                </a>
                                <h3 class="text-uppercase fw-bold">
                                    <a href="#" class="text-dark">Manarti blog</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <a href="#">
                                    <figure class="position-relative img-hover">
                                        <img src="images/blog-list-2.jpg" alt="Blog 2" class="img-fluid rounded-0 w-100" />
                                    </figure>
                                </a>
                                <h3 class="text-uppercase fw-bold">
                                    <a href="#" class="text-dark">Manarti blog</a>
                                </h3>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-12">
                            <a href="#" class="btn">VIEW MORE BLOGS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <h3 class="text-gradient fw-bold mb-3">Recent Blogs</h3>
                        <?php for($i=0; $i<4; $i++) { ?>
                        <div class="mb-3">
                            <a href="#" class="d-flex gap-2 align-items-center text-start">
                                <img src="images/sm-blog.jpg" alt="" class="img-fluid ratio-1x1 rounded-1" />
                                <span class="text-dark fw-bold">Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor</span>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle right position-absolute"></div>
    </section>
</main>

<?php include('include/footer.php') ?>