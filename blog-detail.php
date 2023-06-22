<?php include('include/head.php') ?>

<main>
    <section class="py-5 bg-purple event-section overflow-visible blog-section">
        <div class="container">
            <h1 class="blog-title text-gradient mb-4    blogBounce">LATEST BLOGS</h1>
            <div class="row row-gap-4 mb-lg-0 mb-5">
                <div class="col-lg-8">
                    <div class="main-blog pb-5">
                        <img src="images/blog-img.jpg" alt="Manarti blog    blogBounce" class="img-fluid w-100 mb-3" />
                        
                        <h2 class="text-uppercase fw-bold text-white    blogBounce">Manarti blog</h2>

                        <p class="text-white">Manarti Exports is a specialized medical disposables, systems, devices and hospital equipment provider offering a wide range of products. Our products are manufactured at state-of-the art production facilities in India, with capacity to produce large quantities. We are ISO 9001:2008 and ISO 13485:2003 certified and our products are CE Marked. Our Medical Devices and Catheters are FDA Approved.</p>
                        
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus metus sed sollicitudin malesuada. Donec lectus tellus, laoreet aliquet tellus quis, fringilla aliquam sapien. Donec et efficitur magna, quis faucibus mauris. Praesent ligula velit, pellentesque eu turpis id, molestie suscipit sem. Proin nec arcu libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris aliquet cursus euismod.</p>
                        
                        <p class="text-white">Cras posuere commodo lectus quis euismod. Suspendisse dignissim consectetur mi, id congue nisi rhoncus quis. Nullam varius, purus sed fermentum posuere, arcu turpis pellentesque orci, sed cursus augue ex sit amet mi. Ut tempor ex ligula, a pretium odio iaculis egestas. Proin a molestie sem. Vestibulum sit amet pulvinar nisl.</p>
                        
                        <img src="images/blog-detail-img.jpg" alt="Manarti blog" class="img-fluid w-100 mb-3" />
                        
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus metus sed sollicitudin malesuada. Donec lectus tellus, laoreet aliquet tellus quis, fringilla aliquam sapien. Donec et efficitur magna, quis faucibus mauris. Praesent ligula velit, pellentesque eu turpis id, molestie suscipit sem. Proin nec arcu libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris aliquet cursus euismod.</p>

                        <p class="text-white">Cras posuere commodo lectus quis euismod. Suspendisse dignissim consectetur mi, id congue nisi rhoncus quis. Nullam varius, purus sed fermentum posuere, arcu turpis pellentesque orci, sed cursus augue ex sit amet mi. Ut tempor ex ligula, a pretium odio iaculis egestas. Proin a molestie sem. Vestibulum sit amet pulvinar nisl.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <h3 class="text-gradient fw-bold mb-3">Recent Blogs</h3>
                        <?php for($i=0; $i<4; $i++) { ?>
                        <div class="mb-3">
                            <a href="#" class="d-flex gap-2 align-items-center text-start">
                                <img src="images/sm-blog.jpg" alt="" class="img-fluid ratio-1x1 rounded-1" />
                                <span class="text-white fw-bold">Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor</span>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('include/footer.php') ?>