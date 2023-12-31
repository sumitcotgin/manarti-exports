<?php include('include/head.php') ?>

<section class="py-5 bg-body event-section">
    <div class="container">
        <div class="row row-gap-4">
            <div class="col-12 position-relative z-0">
                <div class="title back-text text-uppercase " style="left:30px;">Events & Exhibitions</div>
                <h1 class="title text-gradient text-uppercase mb-5 ">Events & Exhibitions</h1>
            </div>
            <?php for($i=0; $i<8; $i++) { ?>
            <div class="col-lg-3 col-md-6">
                <div class="position-relative">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <figure class="mb-0 text-center">
                                <img src="images/event3.jpg" alt="Event 3" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="flip-box-back p-3 text-center">
                            <h5 class="text-white">Nepal Medical Show 2023 Kathmandu Nepal</h5>
                            <p class="text-white"><strong>2,3,4 March 2023</strong></p>
                            <p class="text-white">Stall No. A5 / Hall 1</p>
                            <div><a href="images/event3.jpg" class="d-inline-block btn2 fw-bold border" data-fancybox="event">View</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include('include/footer.php') ?>