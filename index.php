<?php include('include/head.php'); ?>

<main>
    <!-- hero section -->
    <div class="section position-relative">
        <div class="hero-carousel">
            <section class="hero-section position-relative">
                <img src="images/hero-banner.jpg" alt="Banner 1" class="position-absolute z-0 w-100 h-100 pe-none object-fit-cover" />
                <div class="hero-heading">
                    <h1 class="main-title mb-4">Revolutionizing Medical QUALITY PRODUCTS - Experience the <span class="text-gradient">MANARTI EXPORTS</span></h1>
                    <a href="product-listing.php" class="btn">EXPLORE PRODUCTS</a>
                </div>
            </section>
            <section class="hero-section position-relative">
                <img src="images/hero-banner-2.jpg" alt="Banner 2" class="position-absolute z-0 w-100 h-100 pe-none object-fit-cover" />
                <div class="hero-heading">
                    <h1 class="main-title mb-4">Revolutionizing Medical QUALITY PRODUCTS - Experience the <span class="text-gradient">MANARTI EXPORTS</span></h1>
                    <a href="product-listing.php" class="btn">EXPLORE PRODUCTS</a>
                </div>
            </section>
            <section class="hero-section position-relative">
                <img src="images/hero-banner-3.jpg" alt="Banner 3" class="position-absolute z-0 w-100 h-100 pe-none object-fit-cover" />
                <div class="hero-heading">
                    <h1 class="main-title mb-4">Revolutionizing Medical QUALITY PRODUCTS - Experience the <span class="text-gradient">MANARTI EXPORTS</span></h1>
                    <a href="product-listing.php" class="btn">EXPLORE PRODUCTS</a>
                </div>
            </section>
        </div>
        <div class="scroll-text">
            <span style="color:#485E9A;">Scroll Down</span>
            <svg width="24" height="34" viewBox="0 0 24 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 12C2 9.34783 3.05357 6.8043 4.92893 4.92893C6.8043 3.05357 9.34783 2 12 2C14.6522 2 17.1957 3.05357 19.0711 4.92893C20.9464 6.8043 22 9.34783 22 12V22C22 24.6522 20.9464 27.1957 19.0711 29.0711C17.1957 30.9464 14.6522 32 12 32C9.34783 32 6.8043 30.9464 4.92893 29.0711C3.05357 27.1957 2 24.6522 2 22V12Z" stroke="#485E9A" stroke-width="2.5" stroke-linejoin="round" />
                <path id="wheel" d="M12 8.66669V15.3334" stroke="#485E9A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </div>
    <!-- hero section end -->

    <!-- about section -->
    <div class="section">
        <section id="about" class="d-flex align-items-center py-5 bg-body overflow-hidden position-relative z-0 w-100 ">
            <div class="circle position-absolute right"></div>
            <div class="container custom-container ">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-9 mx-auto">
                        <p class="about-text mb-0 wow fadeInUpBig">Manarti Exports is a specialized medical disposables, systems, devices and hospital equipment provider offering a wide range of products. Our products are manufactured at state-of-the art production facilities in India, with capacity to produce large quantities. We are ISO 9001:2008 and ISO 13485:2003 certified and our products are CE Marked. Our Medical Devices and Catheters are FDA Approved.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- about section end -->

    <!-- product section -->
    <div class="section">
        <section class="py-5 bg-body position-relative overflow-visible z-0 w-100">
            <div class="circle right position-absolute"></div>
            <div class="container">
                <div class="text_scroll_container1 position-relative text-center">
                    <h2 class="d-inline-block title normal-text text-gradient product-icon below  text_scroll1 wow fadeInRightBig">PRODUCTS</h2>
                    <div class="back-text title text_scroll1 wow fadeInLeftBig">PRODUCTS</div>
                </div>
                <div class="circle position-absolute"></div>

                <div class="row align-items-center justify-content-center pt-5 row-gap-5 product-list">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <div class="col-xl-5 col-lg-6 wow fadeInLeftBig">
                        <a href="product-detail.php">
                            <figure class="text-center product-image-bg rounded-3 overflow-hidden">
                                <img src="images/product.png" alt="Medical Disposables" class="img-fluid" />
                            </figure>
                        </a>
                        <h4 class="mb-0 fw-bold">
                            <a href="product-detail.php" class="text-gradient">Medical Disposables</a>
                        </h4>
                        <p class="mb-0 fs-5 fw-semibold">Medrop Disposable Under pads, 60x60 cm, 10 Pcs/Pack (Pack of 3) 30 Pcs</p>
                    </div>
                    <?php } ?>
                </div>

                <!-- <div class="row align-items-center gy-5 mb-5 pt-11 product-list   horizontalContainer1">
                    <div class="col-xl-5 col-lg-6    horizontal-scroll1">
                        <a href="product-detail.php">
                            <figure class="mb-0 text-center product-image-bg rounded-3">
                                <img src="images/product.png" alt="Medical Disposables" class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6    horizontal-scroll1">
                        <h4 class="mb-0 fw-bold">
                            <a href="product-detail.php" class="text-gradient">Medical Disposables</a>
                        </h4>
                        <p class="mb-0  fw-semibold">Medrop Disposable Under pads, 60x60 cm, 10 Pcs/Pack (Pack of 3) 30 Pcs</p>
                    </div>
                </div>

                <div class="row align-items-center justify-content-end gy-5 mb-5 product-list reverse   horizontalContainer2">
                    <div class="col-xl-4 col-lg-6   horizontal-scroll2">
                        <h4 class="mb-0 fw-bold">
                            <a href="product-detail.php" class="text-gradient">Medical Disposables</a>
                        </h4>
                        <p class="mb-0  fw-semibold">Medrop Disposable Under pads, 60x60 cm, 10 Pcs/Pack (Pack of 3) 30 Pcs</p>
                    </div>
                    <div class="col-xl-5 col-lg-6   horizontal-scroll2">
                        <a href="product-detail.php">
                            <figure class="mb-0 text-center product-image-bg rounded-3">
                                <img src="images/product.png" alt="Medical Disposables" class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="row align-items-center gy-5 mb-5 product-list   horizontalContainer3">
                    <div class="col-xl-5 col-lg-6    horizontal-scroll3">
                        <a href="product-detail.php">
                            <figure class="mb-0 text-center product-image-bg rounded-3">
                                <img src="images/product.png" alt="Medical Disposables" class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6    horizontal-scroll3">
                        <h4 class="mb-0 fw-bold">
                            <a href="product-detail.php" class="text-gradient">Medical Disposables</a>
                        </h4>
                        <p class="mb-0  fw-semibold">Medrop Disposable Under pads, 60x60 cm, 10 Pcs/Pack (Pack of 3) 30 Pcs</p>
                    </div>
                </div>

                <div class="row align-items-center justify-content-end gy-5 mb-5 product-list reverse   horizontalContainer4">
                    <div class="col-xl-4 col-lg-6   horizontal-scroll4">
                        <h4 class="mb-0 fw-bold">
                            <a href="product-detail.php" class="text-gradient">Medical Disposables</a>
                        </h4>
                        <p class="mb-0  fw-semibold">Medrop Disposable Under pads, 60x60 cm, 10 Pcs/Pack (Pack of 3) 30 Pcs</p>
                    </div>
                    <div class="col-xl-5 col-lg-6   horizontal-scroll4">
                        <a href="product-detail.php">
                            <figure class="mb-0 text-center product-image-bg rounded-3">
                                <img src="images/product.png" alt="Medical Disposables" class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="row align-items-center gy-5 mb-5 product-list   horizontalContainer5">
                    <div class="col-xl-5 col-lg-6    horizontal-scroll5">
                        <a href="product-detail.php">
                            <figure class="mb-0 text-center product-image-bg rounded-3">
                                <img src="images/product.png" alt="Medical Disposables" class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6    horizontal-scroll5">
                        <h4 class="mb-0 fw-bold">
                            <a href="product-detail.php" class="text-gradient">Medical Disposables</a>
                        </h4>
                        <p class="mb-0  fw-semibold">Medrop Disposable Under pads, 60x60 cm, 10 Pcs/Pack (Pack of 3) 30 Pcs</p>
                    </div>
                </div> -->

            </div>
            <div class="circle bottom-0 position-absolute"></div>
        </section>
    </div>
    <!-- product section end -->

    <!-- quality policy section -->
    <div class="section">
        <section class="pb-5 pt-11 bg-body w-100 quality-section">
            <div class="circle position-absolute"></div>
            <div class="container custom-container">
                <div class="row gy-5 ">
                    <div class="col-lg-3">
                        <figure class="mb-5 wow slideInLeft   certificateContainer">
                            <a href="documents/certificate-1.pdf" target="_blank">
                                <img src="images/certificate1.png" alt="Certificate 1" class="img-fluid   certificate1" />
                            </a>
                        </figure>
                        <figure class="mb-0 wow slideInLeft text-lg-end   certificateContainer" data-wow-delay='100ms'>
                            <a href="documents/certificate-3.pdf" target="_blank">
                                <img src="images/certificate3.png" alt="Certificate 3" class="img-fluid   certificate3" />
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="title position-relative mb-5   qualityPolicy">
                            <span class="back-text  qualityScroll wow slideInRight" data-wow-delay="200ms">QUALITY</span>
                            <span class="d-block text-gradient text-lg-end text-center wow slideInRight    qualityScroll">QUALITY</span>
                            <span class="back-text policyScroll wow slideInLeft" data-wow-delay="200ms">POLICY</span>
                            <span class="d-block text-gradient text-lg-start text-center wow slideInLeft    policyScroll">POLICY</span>
                        </h2>
                        <div class="position-relative z-0">
                            <div class="ellipse"></div>
                            <p class="about-text mb-0 px-lg-5 wow fadeInUpBig">We at Manarti are committed to supply products with zero defect to the customer. Our experienced and dedicated team is involved during the process of product and vendors selections and approval of the products is done based on its quality check for its performance and efficacy. The products are approved based on the various quality check parameters and visual inspections of the products before they are supplied.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <figure class="mb-5 wow slideInRight text-lg-end   certificateContainer">
                            <a href="documents/certificate-2.pdf" target="_blank">
                                <img src="images/certificate2.png" alt="Certificate 2" class="img-fluid   certificate2" />
                            </a>
                        </figure>
                        <figure class="mb-0 wow slideInRight  certificateContainer" data-wow-delay='100ms'>
                            <a href="documents/certificate-4.pdf" target="_blank">
                                <img src="images/certificate4.png" alt="Certificate 4" class="img-fluid   certificate4" />
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="circle right position-absolute"></div>
        </section>
    </div>
    <!-- quality policy section end -->

    <!-- map section -->
    <div class="section">
        <section class="py-5 bg-body w-100 overflow-hidden">
            <div class="container custom-container">
                <div class="row">                    
                    <div class="col-12 text-center position-relative z-0 text-center ">
                        <div class="title back-text text-uppercase wow fadeInLeftBig">Global Presence</div>
                        <h2 class="title text-gradient d-inline-block text-uppercase wow fadeInRightBig">Global Presence</h2>
                    </div>
                    <div class="col-12 text-center">
                        <div class="float-end text-start">
                            <p class="fw-bold wow fadeInRightBig">
                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7122 18H5.28776L0 9L5.28776 0H15.7122L21 9L15.7122 18Z" fill="#D63129" />
                                </svg>
                                Major Exports
                            </p>
                            <p class="fw-bold wow fadeInRightBig" data-wow-delay="200ms">
                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7122 18H5.28776L0 9L5.28776 0H15.7122L21 9L15.7122 18Z" fill="#049848" />
                                </svg>
                                New Ports
                            </p>
                        </div>
                        <svg width="100%"  class="map-svg" viewBox="0 0 1364 720" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g filter="url(#filter0_dddd_237_212)">
                                <path d="M679.115 363.948H672.995L669.935 358.703L672.995 353.457H679.115L682.087 358.703L679.115 363.948Z" fill="#B7C1D6" />
                                <path d="M667.662 370.594H661.629L658.569 365.261L661.629 360.016H667.662L670.722 365.261L667.662 370.594Z" fill="#B7C1D6" />
                                <path d="M679.115 377.151H672.995L669.935 371.905L672.995 366.572H679.115L682.087 371.905L679.115 377.151Z" fill="#B7C1D6" />
                                <path d="M690.481 370.594H684.448L681.388 365.261L684.448 360.016H690.481L693.541 365.261L690.481 370.594Z" fill="#B7C1D6" />
                                <path d="M690.481 357.391H684.448L681.388 352.146L684.448 346.812H690.481L693.541 352.146L690.481 357.391Z" fill="#B7C1D6" />
                                <path d="M679.115 350.835H672.995L669.935 345.502L672.995 340.256H679.115L682.087 345.502L679.115 350.835Z" fill="#B7C1D6" />
                                <path d="M667.662 357.391H661.629L658.569 352.146L661.629 346.812H667.662L670.722 352.146L667.662 357.391Z" fill="#B7C1D6" />
                                <path d="M656.296 377.151H650.176L647.116 371.905L650.176 366.572H656.296L659.269 371.905L656.296 377.151Z" fill="#B7C1D6" />
                                <path d="M667.662 383.708H661.629L658.569 378.463L661.629 373.217H667.662L670.722 378.463L667.662 383.708Z" fill="#B7C1D6" />
                                <path d="M679.115 390.352H672.995L669.935 385.019L672.995 379.773H679.115L682.087 385.019L679.115 390.352Z" fill="#B7C1D6" />
                                <path d="M690.481 383.708H684.448L681.388 378.463L684.448 373.217H690.481L693.541 378.463L690.481 383.708Z" fill="#B7C1D6" />
                                <path d="M701.934 377.151H695.814L692.754 371.905L695.814 366.572H701.934L704.994 371.905L701.934 377.151Z" fill="#B7C1D6" />
                                <path d="M701.934 363.948H695.814L692.754 358.703L695.814 353.457H701.934L704.994 358.703L701.934 363.948Z" fill="#B7C1D6" />
                                <path d="M701.934 350.835H695.814L692.754 345.502L695.814 340.256H701.934L704.994 345.502L701.934 350.835Z" fill="#B7C1D6" />
                                <path d="M690.481 344.191H684.448L681.388 338.945L684.448 333.699H690.481L693.541 338.945L690.481 344.191Z" fill="#B7C1D6" />
                                <path d="M679.115 337.634H672.995L669.935 332.388L672.995 327.055H679.115L682.087 332.388L679.115 337.634Z" fill="#B7C1D6" />
                                <path d="M667.662 344.191H661.629L658.569 338.945L661.629 333.699H667.662L670.722 338.945L667.662 344.191Z" fill="#B7C1D6" />
                                <path d="M656.296 350.835H650.176L647.116 345.502L650.176 340.256H656.296L659.269 345.502L656.296 350.835Z" fill="#B7C1D6" />
                                <path d="M656.296 363.948H650.176L647.116 358.703L650.176 353.457H656.296L659.269 358.703L656.296 363.948Z" fill="#B7C1D6" />
                                <path d="M644.843 383.708H638.81L635.75 378.463L638.81 373.217H644.843L647.903 378.463L644.843 383.708Z" fill="#B7C1D6" />
                                <path d="M656.296 390.352H650.176L647.116 385.019L650.176 379.773H656.296L659.269 385.019L656.296 390.352Z" fill="#B7C1D6" />
                                <path d="M667.662 396.909H661.629L658.569 391.664L661.629 386.418H667.662L670.722 391.664L667.662 396.909Z" fill="#B7C1D6" />
                                <path d="M679.115 403.466H672.995L669.935 398.22L672.995 392.975H679.115L682.087 398.22L679.115 403.466Z" fill="#B7C1D6" />
                                <path d="M690.481 396.909H684.448L681.388 391.664L684.448 386.418H690.481L693.541 391.664L690.481 396.909Z" fill="#B7C1D6" />
                                <path d="M701.934 390.352H695.814L692.754 385.019L695.814 379.773H701.934L704.994 385.019L701.934 390.352Z" fill="#B7C1D6" />
                                <path d="M713.299 383.708H707.267L704.207 378.463L707.267 373.217H713.299L716.359 378.463L713.299 383.708Z" fill="#B7C1D6" />
                                <path d="M713.299 370.594H707.267L704.207 365.261L707.267 360.016H713.299L716.359 365.261L713.299 370.594Z" fill="#B7C1D6" />
                                <path d="M713.299 357.391H707.267L704.207 352.146L707.267 346.812H713.299L716.359 352.146L713.299 357.391Z" fill="#D63129" />
                                <path d="M713.299 344.191H707.267L704.207 338.945L707.267 333.699H713.299L716.359 338.945L713.299 344.191Z" fill="#B7C1D6" />
                                <path d="M701.934 337.634H695.814L692.754 332.388L695.814 327.055H701.934L704.994 332.388L701.934 337.634Z" fill="#B7C1D6" />
                                <path d="M690.481 331.075H684.448L681.388 325.742L684.448 320.496H690.481L693.541 325.742L690.481 331.075Z" fill="#B7C1D6" />
                                <path d="M679.115 324.431H672.995L669.935 319.185L672.995 313.939H679.115L682.087 319.185L679.115 324.431Z" fill="#B7C1D6" />
                                <path d="M667.662 331.075H661.629L658.569 325.742L661.629 320.496H667.662L670.722 325.742L667.662 331.075Z" fill="#B7C1D6" />
                                <path d="M656.296 337.634H650.176L647.116 332.388L650.176 327.055H656.296L659.269 332.388L656.296 337.634Z" fill="#B7C1D6" />
                                <path d="M644.843 344.191H638.81L635.75 338.945L638.81 333.699H644.843L647.903 338.945L644.843 344.191Z" fill="#B7C1D6" />
                                <path d="M644.843 357.391H638.81L635.75 352.146L638.81 346.812H644.843L647.903 352.146L644.843 357.391Z" fill="#B7C1D6" />
                                <path d="M644.843 370.594H638.81L635.75 365.261L638.81 360.016H644.843L647.903 365.261L644.843 370.594Z" fill="#B7C1D6" />
                                <path d="M633.477 390.352H627.357L624.297 385.019L627.357 379.773H633.477L636.45 385.019L633.477 390.352Z" fill="#B7C1D6" />
                                <path d="M644.843 396.909H638.81L635.75 391.664L638.81 386.418H644.843L647.903 391.664L644.843 396.909Z" fill="#B7C1D6" />
                                <path d="M656.296 403.466H650.176L647.116 398.22L650.176 392.975H656.296L659.269 398.22L656.296 403.466Z" fill="#B7C1D6" />
                                <path d="M667.662 410.112H661.629L658.569 404.866L661.629 399.533H667.662L670.722 404.866L667.662 410.112Z" fill="#049848" />
                                <path d="M679.115 416.669H672.995L669.935 411.423L672.995 406.178H679.115L682.087 411.423L679.115 416.669Z" fill="#B7C1D6" />
                                <path d="M690.481 410.112H684.448L681.388 404.866L684.448 399.533H690.481L693.541 404.866L690.481 410.112Z" fill="#B7C1D6" />
                                <path d="M701.934 403.466H695.814L692.754 398.22L695.814 392.975H701.934L704.994 398.22L701.934 403.466Z" fill="#B7C1D6" />
                                <path d="M713.299 396.909H707.267L704.207 391.664L707.267 386.418H713.299L716.359 391.664L713.299 396.909Z" fill="#049848" />
                                <path d="M724.753 390.352H718.633L715.573 385.019L718.633 379.773H724.753L727.813 385.019L724.753 390.352Z" fill="#B7C1D6" />
                                <path d="M724.753 377.151H718.633L715.573 371.905L718.633 366.572H724.753L727.813 371.905L724.753 377.151Z" fill="#B7C1D6" />
                                <path d="M724.753 363.948H718.633L715.573 358.703L718.633 353.457H724.753L727.813 358.703L724.753 363.948Z" fill="#B7C1D6" />
                                <path d="M724.753 350.835H718.633L715.573 345.502L718.633 340.256H724.753L727.813 345.502L724.753 350.835Z" fill="#B7C1D6" />
                                <path d="M724.753 337.634H718.633L715.573 332.388L718.633 327.055H724.753L727.813 332.388L724.753 337.634Z" fill="#B7C1D6" />
                                <path d="M713.299 331.075H707.267L704.207 325.742L707.267 320.496H713.299L716.359 325.742L713.299 331.075Z" fill="#B7C1D6" />
                                <path d="M701.934 324.431H695.814L692.841 319.185L695.814 313.939H701.934L704.906 319.185L701.934 324.431Z" fill="#B7C1D6" />
                                <path d="M690.481 317.787H684.448L681.475 312.629L684.448 307.383H690.481L693.453 312.629L690.481 317.787Z" fill="#B7C1D6" />
                                <path d="M679.115 311.23H672.995L669.935 305.984L672.995 300.738H679.115L682.087 305.984L679.115 311.23Z" fill="#B7C1D6" />
                                <path d="M667.662 317.874H661.629L658.569 312.628L661.629 307.295H667.662L670.722 312.628L667.662 317.874Z" fill="#B7C1D6" />
                                <path d="M656.296 324.431H650.176L647.116 319.185L650.176 313.939H656.296L659.269 319.185L656.296 324.431Z" fill="#B7C1D6" />
                                <path d="M644.843 331.075H638.81L635.75 325.742L638.81 320.496H644.843L647.903 325.742L644.843 331.075Z" fill="#B7C1D6" />
                                <path d="M633.477 337.634H627.357L624.297 332.388L627.357 327.055H633.477L636.45 332.388L633.477 337.634Z" fill="#B7C1D6" />
                                <path d="M633.477 350.835H627.357L624.297 345.502L627.357 340.256H633.477L636.45 345.502L633.477 350.835Z" fill="#B7C1D6" />
                                <path d="M633.477 363.948H627.357L624.297 358.703L627.357 353.457H633.477L636.45 358.703L633.477 363.948Z" fill="#B7C1D6" />
                                <path d="M633.477 377.151H627.357L624.297 371.905L627.357 366.572H633.477L636.45 371.905L633.477 377.151Z" fill="#B7C1D6" />
                                <path d="M622.024 396.909H615.904L612.931 391.664L615.904 386.418H622.024L625.084 391.664L622.024 396.909Z" fill="#B7C1D6" />
                                <path d="M633.477 403.466H627.357L624.297 398.22L627.357 392.975H633.477L636.45 398.22L633.477 403.466Z" fill="#B7C1D6" />
                                <path d="M644.843 410.112H638.81L635.75 404.866L638.81 399.533H644.843L647.903 404.866L644.843 410.112Z" fill="#B7C1D6" />
                                <path d="M656.296 416.669H650.176L647.116 411.423L650.176 406.178H656.296L659.269 411.423L656.296 416.669Z" fill="#D63129" />
                                <path d="M667.662 423.313H661.629L658.569 417.98L661.629 412.734H667.662L670.722 417.98L667.662 423.313Z" fill="#B7C1D6" />
                                <path d="M679.115 429.87H672.995L669.935 424.624L672.995 419.291H679.115L682.087 424.624L679.115 429.87Z" fill="#B7C1D6" />
                                <path d="M690.481 423.313H684.448L681.388 417.98L684.448 412.734H690.481L693.541 417.98L690.481 423.313Z" fill="#B7C1D6" />
                                <path d="M701.934 416.669H695.814L692.754 411.423L695.814 406.178H701.934L704.994 411.423L701.934 416.669Z" fill="#B7C1D6" />
                                <path d="M713.299 410.112H707.267L704.207 404.866L707.267 399.533H713.299L716.359 404.866L713.299 410.112Z" fill="#B7C1D6" />
                                <path d="M724.753 403.466H718.633L715.573 398.22L718.633 392.975H724.753L727.813 398.22L724.753 403.466Z" fill="#B7C1D6" />
                                <path d="M736.118 396.909H730.086L727.026 391.664L730.086 386.418H736.118L739.178 391.664L736.118 396.909Z" fill="#B7C1D6" />
                                <path d="M736.118 383.708H730.086L727.026 378.463L730.086 373.217H736.118L739.178 378.463L736.118 383.708Z" fill="#B7C1D6" />
                                <path d="M736.118 370.594H730.086L727.026 365.261L730.086 360.016H736.118L739.178 365.261L736.118 370.594Z" fill="#B7C1D6" />
                                <path d="M736.118 357.391H730.086L727.026 352.146L730.086 346.812H736.118L739.178 352.146L736.118 357.391Z" fill="#B7C1D6" />
                                <path d="M736.118 344.191H730.086L727.026 338.945L730.086 333.699H736.118L739.178 338.945L736.118 344.191Z" fill="#B7C1D6" />
                                <path d="M736.118 331.075H730.086L727.026 325.742L730.086 320.496H736.118L739.178 325.742L736.118 331.075Z" fill="#B7C1D6" />
                                <path d="M724.403 323.994H718.895L716.185 319.186L718.895 314.377H724.403L727.201 319.186L724.403 323.994Z" fill="#B7C1D6" />
                                <path d="M688.295 300.912H686.634L685.759 299.426L686.634 297.939H688.295L689.169 299.426L688.295 300.912Z" fill="#B7C1D6" />
                                <path d="M677.891 296.104H674.131L672.295 292.869L674.131 289.547H677.891L679.814 292.869L677.891 296.104Z" fill="#B7C1D6" />
                                <path d="M667.574 304.497H661.717L658.744 299.426L661.717 294.355H667.574L670.459 299.426L667.574 304.497Z" fill="#B7C1D6" />
                                <path d="M656.296 311.23H650.176L647.116 305.984L650.176 300.738H656.296L659.269 305.984L656.296 311.23Z" fill="#B7C1D6" />
                                <path d="M644.843 317.874H638.81L635.75 312.628L638.81 307.295H644.843L647.903 312.628L644.843 317.874Z" fill="#B7C1D6" />
                                <path d="M633.477 324.431H627.357L624.297 319.185L627.357 313.939H633.477L636.45 319.185L633.477 324.431Z" fill="#B7C1D6" />
                                <path d="M622.024 331.075H615.904L612.931 325.742L615.904 320.496H622.024L625.084 325.742L622.024 331.075Z" fill="#B7C1D6" />
                                <path d="M622.024 344.191H615.904L612.931 338.945L615.904 333.699H622.024L625.084 338.945L622.024 344.191Z" fill="#B7C1D6" />
                                <path d="M622.024 357.391H615.904L612.931 352.146L615.904 346.812H622.024L625.084 352.146L622.024 357.391Z" fill="#B7C1D6" />
                                <path d="M622.024 370.594H615.904L612.931 365.261L615.904 360.016H622.024L625.084 365.261L622.024 370.594Z" fill="#B7C1D6" />
                                <path d="M622.024 383.708H615.904L612.931 378.463L615.904 373.217H622.024L625.084 378.463L622.024 383.708Z" fill="#B7C1D6" />
                                <path d="M610.658 403.466H604.538L601.478 398.22L604.538 392.975H610.658L613.631 398.22L610.658 403.466Z" fill="#B7C1D6" />
                                <path d="M622.024 410.112H615.904L612.931 404.866L615.904 399.533H622.024L625.084 404.866L622.024 410.112Z" fill="#B7C1D6" />
                                <path d="M633.477 416.669H627.357L624.297 411.423L627.357 406.178H633.477L636.45 411.423L633.477 416.669Z" fill="#B7C1D6" />
                                <path d="M644.843 423.313H638.81L635.75 417.98L638.81 412.734H644.843L647.903 417.98L644.843 423.313Z" fill="#B7C1D6" />
                                <path d="M656.296 429.87H650.176L647.116 424.624L650.176 419.291H656.296L659.269 424.624L656.296 429.87Z" fill="#B7C1D6" />
                                <path d="M667.662 436.427H661.629L658.569 431.181L661.629 425.936H667.662L670.722 431.181L667.662 436.427Z" fill="#B7C1D6" />
                                <path d="M677.454 440.187H674.656L673.257 437.739L674.656 435.291H677.454L678.853 437.739L677.454 440.187Z" fill="#B7C1D6" />
                                <path d="M690.481 436.427H684.448L681.388 431.181L684.448 425.936H690.481L693.541 431.181L690.481 436.427Z" fill="#B7C1D6" />
                                <path d="M701.934 429.87H695.814L692.754 424.624L695.814 419.291H701.934L704.994 424.624L701.934 429.87Z" fill="#B7C1D6" />
                                <path d="M713.299 423.313H707.267L704.207 417.98L707.267 412.734H713.299L716.359 417.98L713.299 423.313Z" fill="#B7C1D6" />
                                <path d="M724.753 416.669H718.633L715.573 411.423L718.633 406.178H724.753L727.813 411.423L724.753 416.669Z" fill="#B7C1D6" />
                                <path d="M736.118 410.112H730.086L727.026 404.866L730.086 399.533H736.118L739.178 404.866L736.118 410.112Z" fill="#B7C1D6" />
                                <path d="M747.571 403.466H741.451L738.391 398.22L741.451 392.975H747.571L750.631 398.22L747.571 403.466Z" fill="#B7C1D6" />
                                <path d="M747.571 390.352H741.451L738.391 385.019L741.451 379.773H747.571L750.631 385.019L747.571 390.352Z" fill="#B7C1D6" />
                                <path d="M747.571 377.151H741.451L738.391 371.905L741.451 366.572H747.571L750.631 371.905L747.571 377.151Z" fill="#B7C1D6" />
                                <path d="M747.571 363.948H741.451L738.391 358.703L741.451 353.457H747.571L750.631 358.703L747.571 363.948Z" fill="#B7C1D6" />
                                <path d="M747.571 350.835H741.451L738.391 345.502L741.451 340.256H747.571L750.631 345.502L747.571 350.835Z" fill="#B7C1D6" />
                                <path d="M747.571 337.634H741.451L738.391 332.388L741.451 327.055H747.571L750.631 332.388L747.571 337.634Z" fill="#B7C1D6" />
                                <path d="M747.397 324.17H741.626L738.741 319.186L741.626 314.115H747.397L750.282 319.186L747.397 324.17Z" fill="#B7C1D6" />
                                <path d="M734.457 314.988H731.747L730.348 312.628L731.747 310.18H734.457L735.856 312.628L734.457 314.988Z" fill="#B7C1D6" />
                                <path d="M699.661 294.268H698.087L697.213 292.869L698.087 291.383H699.661L700.447 292.869L699.661 294.268Z" fill="#B7C1D6" />
                                <path d="M677.716 282.553H674.394L672.733 279.668L674.394 276.783H677.716L679.377 279.668L677.716 282.553Z" fill="#B7C1D6" />
                                <path d="M644.318 303.711H639.335L636.887 299.427L639.335 295.143H644.318L646.766 299.427L644.318 303.711Z" fill="#B7C1D6" />
                                <path d="M633.39 311.23H627.357L624.385 305.984L627.357 300.826H633.39L636.45 305.984L633.39 311.23Z" fill="#B7C1D6" />
                                <path d="M622.024 317.874H615.904L612.931 312.628L615.904 307.295H622.024L625.084 312.628L622.024 317.874Z" fill="#B7C1D6" />
                                <path d="M609.434 322.334H605.762L603.926 319.186L605.762 316.039H609.434L611.183 319.186L609.434 322.334Z" fill="#B7C1D6" />
                                <path d="M610.571 337.458H604.626L601.653 332.387L604.626 327.229H610.571L613.456 332.387L610.571 337.458Z" fill="#B7C1D6" />
                                <path d="M610.658 350.835H604.538L601.478 345.502L604.538 340.256H610.658L613.631 345.502L610.658 350.835Z" fill="#B7C1D6" />
                                <path d="M610.658 363.948H604.538L601.478 358.703L604.538 353.457H610.658L613.631 358.703L610.658 363.948Z" fill="#B7C1D6" />
                                <path d="M610.658 377.151H604.538L601.478 371.905L604.538 366.572H610.658L613.631 371.905L610.658 377.151Z" fill="#B7C1D6" />
                                <path d="M610.658 390.352H604.538L601.478 385.019L604.538 379.773H610.658L613.631 385.019L610.658 390.352Z" fill="#B7C1D6" />
                                <path d="M599.205 410.112H593.085L590.113 404.866L593.085 399.533H599.205L602.265 404.866L599.205 410.112Z" fill="#B7C1D6" />
                                <path d="M610.658 416.669H604.538L601.478 411.423L604.538 406.178H610.658L613.631 411.423L610.658 416.669Z" fill="#B7C1D6" />
                                <path d="M622.024 423.313H615.904L612.931 417.98L615.904 412.734H622.024L625.084 417.98L622.024 423.313Z" fill="#B7C1D6" />
                                <path d="M633.477 429.87H627.357L624.297 424.624L627.357 419.291H633.477L636.45 424.624L633.477 429.87Z" fill="#B7C1D6" />
                                <path d="M644.493 435.816H639.073L636.45 431.183L639.073 426.549H644.493L647.203 431.183L644.493 435.816Z" fill="#B7C1D6" />
                                <path d="M654.11 439.312H652.362L651.487 437.738L652.362 436.252H654.11L654.985 437.738L654.11 439.312Z" fill="#B7C1D6" />
                                <path d="M677.191 452.864H674.918L673.782 450.941L674.918 449.018H677.191L678.328 450.941L677.191 452.864Z" fill="#B7C1D6" />
                                <path d="M690.481 449.63H684.448L681.388 444.384L684.448 439.051H690.481L693.541 444.384L690.481 449.63Z" fill="#B7C1D6" />
                                <path d="M701.934 443.071H695.814L692.754 437.738L695.814 432.492H701.934L704.994 437.738L701.934 443.071Z" fill="#B7C1D6" />
                                <path d="M713.299 436.427H707.267L704.207 431.181L707.267 425.936H713.299L716.359 431.181L713.299 436.427Z" fill="#B7C1D6" />
                                <path d="M724.753 429.87H718.633L715.573 424.624L718.633 419.291H724.753L727.813 424.624L724.753 429.87Z" fill="#B7C1D6" />
                                <path d="M736.118 423.313H730.086L727.026 417.98L730.086 412.734H736.118L739.178 417.98L736.118 423.313Z" fill="#B7C1D6" />
                                <path d="M747.571 416.669H741.451L738.391 411.423L741.451 406.178H747.571L750.631 411.423L747.571 416.669Z" fill="#B7C1D6" />
                                <path d="M758.937 410.112H752.905L749.845 404.866L752.905 399.533H758.937L761.997 404.866L758.937 410.112Z" fill="#B7C1D6" />
                                <path d="M758.937 396.909H752.905L749.845 391.664L752.905 386.418H758.937L761.997 391.664L758.937 396.909Z" fill="#B7C1D6" />
                                <path d="M758.937 383.708H752.905L749.845 378.463L752.905 373.217H758.937L761.997 378.463L758.937 383.708Z" fill="#B7C1D6" />
                                <path d="M758.937 370.594H752.905L749.845 365.261L752.905 360.016H758.937L761.997 365.261L758.937 370.594Z" fill="#B7C1D6" />
                                <path d="M758.937 357.391H752.905L749.845 352.146L752.905 346.812H758.937L761.997 352.146L758.937 357.391Z" fill="#B7C1D6" />
                                <path d="M758.937 344.191H752.905L749.845 338.945L752.905 333.699H758.937L761.997 338.945L758.937 344.191Z" fill="#B7C1D6" />
                                <path d="M758.937 331.075H752.905L749.845 325.742L752.905 320.496H758.937L761.997 325.742L758.937 331.075Z" fill="#B7C1D6" />
                                <path d="M734.982 302.75H731.222L729.299 299.428L731.222 296.105H734.982L736.905 299.428L734.982 302.75Z" fill="#B7C1D6" />
                                <path d="M723.529 296.104H719.857L717.933 292.869L719.857 289.547H723.529L725.452 292.869L723.529 296.104Z" fill="#B7C1D6" />
                                <path d="M699.835 281.243H697.912L697.038 279.669L697.912 278.008H699.835L700.71 279.669L699.835 281.243Z" fill="#B7C1D6" />
                                <path d="M688.295 274.597H686.546L685.672 273.023L686.546 271.537H688.295L689.257 273.023L688.295 274.597Z" fill="#B7C1D6" />
                                <path d="M678.241 270.226H673.869L671.683 266.466L673.869 262.707H678.241L680.426 266.466L678.241 270.226Z" fill="#B7C1D6" />
                                <path d="M644.668 291.209H638.985L636.1 286.226L638.985 281.33H644.668L647.553 286.226L644.668 291.209Z" fill="#B7C1D6" />
                                <path d="M632.69 296.804H628.057L625.783 292.869L628.057 288.848H632.69L635.051 292.869L632.69 296.804Z" fill="#B7C1D6" />
                                <path d="M619.576 300.475H618.352L617.827 299.426L618.352 298.377H619.576L620.188 299.426L619.576 300.475Z" fill="#B7C1D6" />
                                <path d="M597.894 341.918H594.484L592.735 338.945L594.484 335.973H597.894L599.555 338.945L597.894 341.918Z" fill="#B7C1D6" />
                                <path d="M599.205 357.391H593.085L590.113 352.146L593.085 346.812H599.205L602.265 352.146L599.205 357.391Z" fill="#D63129" />
                                <path d="M599.205 370.594H593.085L590.113 365.261L593.085 360.016H599.205L602.265 365.261L599.205 370.594Z" fill="#B7C1D6" />
                                <path d="M599.205 383.708H593.085L590.113 378.463L593.085 373.217H599.205L602.265 378.463L599.205 383.708Z" fill="#B7C1D6" />
                                <path d="M599.205 396.909H593.085L590.113 391.664L593.085 386.418H599.205L602.265 391.664L599.205 396.909Z" fill="#B7C1D6" />
                                <path d="M585.391 412.471H584.167L583.555 411.422L584.167 410.373H585.391L585.916 411.422L585.391 412.471Z" fill="#B7C1D6" />
                                <path d="M599.205 423.226H593.173L590.2 417.981L593.173 412.822H599.205L602.178 417.981L599.205 423.226Z" fill="#B7C1D6" />
                                <path d="M610.658 429.87H604.538L601.478 424.624L604.538 419.291H610.658L613.631 424.624L610.658 429.87Z" fill="#B7C1D6" />
                                <path d="M622.024 436.427H615.904L612.931 431.181L615.904 425.936H622.024L625.084 431.181L622.024 436.427Z" fill="#B7C1D6" />
                                <path d="M632.515 441.41H628.319L626.133 437.738L628.319 434.066H632.515L634.614 437.738L632.515 441.41Z" fill="#B7C1D6" />
                                <path d="M678.59 468.514H673.519L670.984 464.143L673.519 459.771H678.59L681.126 464.143L678.59 468.514Z" fill="#B7C1D6" />
                                <path d="M690.481 462.831H684.448L681.388 457.498L684.448 452.252H690.481L693.541 457.498L690.481 462.831Z" fill="#B7C1D6" />
                                <path d="M701.934 456.187H695.814L692.754 450.941L695.814 445.695H701.934L704.994 450.941L701.934 456.187Z" fill="#B7C1D6" />
                                <path d="M713.299 449.63H707.267L704.207 444.384L707.267 439.051H713.299L716.359 444.384L713.299 449.63Z" fill="#B7C1D6" />
                                <path d="M724.753 443.071H718.633L715.573 437.738L718.633 432.492H724.753L727.813 437.738L724.753 443.071Z" fill="#B7C1D6" />
                                <path d="M736.118 436.427H730.086L727.026 431.181L730.086 425.936H736.118L739.178 431.181L736.118 436.427Z" fill="#B7C1D6" />
                                <path d="M747.571 429.87H741.451L738.391 424.624L741.451 419.291H747.571L750.631 424.624L747.571 429.87Z" fill="#B7C1D6" />
                                <path d="M758.937 423.313H752.905L749.845 417.98L752.905 412.734H758.937L761.997 417.98L758.937 423.313Z" fill="#B7C1D6" />
                                <path d="M770.39 416.669H764.27L761.21 411.423L764.27 406.178H770.39L773.45 411.423L770.39 416.669Z" fill="#B7C1D6" />
                                <path d="M770.39 403.466H764.27L761.21 398.22L764.27 392.975H770.39L773.45 398.22L770.39 403.466Z" fill="#049848" />
                                <path d="M770.39 390.352H764.27L761.21 385.019L764.27 379.773H770.39L773.45 385.019L770.39 390.352Z" fill="#B7C1D6" />
                                <path d="M770.39 377.151H764.27L761.21 371.905L764.27 366.572H770.39L773.45 371.905L770.39 377.151Z" fill="#B7C1D6" />
                                <path d="M770.39 363.948H764.27L761.21 358.703L764.27 353.457H770.39L773.45 358.703L770.39 363.948Z" fill="#B7C1D6" />
                                <path d="M770.39 350.835H764.27L761.21 345.502L764.27 340.256H770.39L773.45 345.502L770.39 350.835Z" fill="#B7C1D6" />
                                <path d="M770.39 337.634H764.27L761.21 332.388L764.27 327.055H770.39L773.45 332.388L770.39 337.634Z" fill="#B7C1D6" />
                                <path d="M769.429 322.858H765.232L763.046 319.186L765.232 315.514H769.429L771.614 319.186L769.429 322.858Z" fill="#B7C1D6" />
                                <path d="M767.855 306.858H766.806L766.369 305.984L766.806 305.109H767.855L768.292 305.984L767.855 306.858Z" fill="#B7C1D6" />
                                <path d="M757.538 302.137H754.303L752.73 299.427L754.303 296.629H757.538L759.112 299.427L757.538 302.137Z" fill="#B7C1D6" />
                                <path d="M747.397 297.853H741.626L738.741 292.87L741.626 287.799H747.397L750.282 292.87L747.397 297.853Z" fill="#B7C1D6" />
                                <path d="M734.195 288.148H732.009L730.873 286.224L732.009 284.301H734.195L735.331 286.224L734.195 288.148Z" fill="#B7C1D6" />
                                <path d="M724.665 284.739H718.72L715.835 279.668L718.72 274.51H724.665L727.55 279.668L724.665 284.739Z" fill="#B7C1D6" />
                                <path d="M712.075 276.17H708.491L706.655 273.023L708.491 269.963H712.075L713.824 273.023L712.075 276.17Z" fill="#B7C1D6" />
                                <path d="M700.36 269.003H697.387L695.901 266.467L697.387 263.932H700.36L701.759 266.467L700.36 269.003Z" fill="#B7C1D6" />
                                <path d="M690.481 265.155H684.448L681.388 259.909L684.448 254.576H690.481L693.541 259.909L690.481 265.155Z" fill="#B7C1D6" />
                                <path d="M679.115 258.598H672.995L669.935 253.265L672.995 248.02H679.115L682.087 253.265L679.115 258.598Z" fill="#B7C1D6" />
                                <path d="M667.137 264.193H662.154L659.706 259.909L662.154 255.625H667.137L669.585 259.909L667.137 264.193Z" fill="#B7C1D6" />
                                <path d="M655.509 270.4H650.963L648.69 266.466L650.963 262.531H655.509L657.695 266.466L655.509 270.4Z" fill="#B7C1D6" />
                                <path d="M644.843 278.356H638.81L635.75 273.023L638.81 267.777H644.843L647.903 273.023L644.843 278.356Z" fill="#B7C1D6" />
                                <path d="M633.477 284.913H627.357L624.297 279.668L627.357 274.422H633.477L636.45 279.668L633.477 284.913Z" fill="#B7C1D6" />
                                <path d="M622.024 291.47H615.904L612.931 286.224L615.904 280.979H622.024L625.084 286.224L622.024 291.47Z" fill="#B7C1D6" />
                                <path d="M586.003 360.889H583.468L582.244 358.703L583.468 356.518H586.003L587.315 358.703L586.003 360.889Z" fill="#B7C1D6" />
                                <path d="M587.49 376.713H581.982L579.184 371.904L581.982 367.096H587.49L590.287 371.904L587.49 376.713Z" fill="#B7C1D6" />
                                <path d="M587.49 389.829H581.982L579.184 385.02L581.982 380.299H587.49L590.287 385.02L587.49 389.829Z" fill="#B7C1D6" />
                                <path d="M587.49 403.029H581.982L579.184 398.221L581.982 393.412H587.49L590.287 398.221L587.49 403.029Z" fill="#B7C1D6" />
                                <path d="M596.67 432.055H595.708L595.183 431.181L595.708 430.307H596.67L597.194 431.181L596.67 432.055Z" fill="#B7C1D6" />
                                <path d="M608.647 439.574H606.549L605.5 437.738L606.549 435.902H608.647L609.697 437.738L608.647 439.574Z" fill="#B7C1D6" />
                                <path d="M690.481 475.945H684.448L681.388 470.699L684.448 465.453H690.481L693.541 470.699L690.481 475.945Z" fill="#B7C1D6" />
                                <path d="M701.934 469.387H695.814L692.754 464.142L695.814 458.809H701.934L704.994 464.142L701.934 469.387Z" fill="#B7C1D6" />
                                <path d="M713.299 462.831H707.267L704.207 457.498L707.267 452.252H713.299L716.359 457.498L713.299 462.831Z" fill="#B7C1D6" />
                                <path d="M724.753 456.187H718.633L715.573 450.941L718.633 445.695H724.753L727.813 450.941L724.753 456.187Z" fill="#B7C1D6" />
                                <path d="M736.118 449.63H730.086L727.026 444.384L730.086 439.051H736.118L739.178 444.384L736.118 449.63Z" fill="#B7C1D6" />
                                <path d="M747.571 443.071H741.451L738.391 437.738L741.451 432.492H747.571L750.631 437.738L747.571 443.071Z" fill="#049848" />
                                <path d="M758.937 436.427H752.905L749.845 431.181L752.905 425.936H758.937L761.997 431.181L758.937 436.427Z" fill="#B7C1D6" />
                                <path d="M770.39 429.87H764.27L761.21 424.624L764.27 419.291H770.39L773.45 424.624L770.39 429.87Z" fill="#B7C1D6" />
                                <path d="M781.756 423.313H775.723L772.663 417.98L775.723 412.734H781.756L784.816 417.98L781.756 423.313Z" fill="#B7C1D6" />
                                <path d="M781.756 410.112H775.723L772.663 404.866L775.723 399.533H781.756L784.816 404.866L781.756 410.112Z" fill="#B7C1D6" />
                                <path d="M781.756 396.909H775.723L772.663 391.664L775.723 386.418H781.756L784.816 391.664L781.756 396.909Z" fill="#B7C1D6" />
                                <path d="M781.756 383.708H775.723L772.663 378.463L775.723 373.217H781.756L784.816 378.463L781.756 383.708Z" fill="#B7C1D6" />
                                <path d="M781.756 370.418H775.723L772.751 365.26L775.723 360.102H781.756L784.729 365.26L781.756 370.418Z" fill="#B7C1D6" />
                                <path d="M779.745 353.808H777.734L776.773 352.147L777.734 350.398H779.745L780.707 352.147L779.745 353.808Z" fill="#B7C1D6" />
                                <path d="M781.756 344.191H775.723L772.663 338.945L775.723 333.699H781.756L784.816 338.945L781.756 344.191Z" fill="#B7C1D6" />
                                <path d="M781.756 331.075H775.723L772.663 325.742L775.723 320.496H781.756L784.816 325.742L781.756 331.075Z" fill="#B7C1D6" />
                                <path d="M781.756 317.874H775.723L772.663 312.628L775.723 307.295H781.756L784.816 312.628L781.756 317.874Z" fill="#B7C1D6" />
                                <path d="M781.756 304.673H775.723L772.663 299.427L775.723 294.182H781.756L784.816 299.427L781.756 304.673Z" fill="#B7C1D6" />
                                <path d="M770.303 298.029H764.358L761.385 292.871L764.358 287.625H770.303L773.275 292.871L770.303 298.029Z" fill="#B7C1D6" />
                                <path d="M758.937 291.47H752.905L749.845 286.224L752.905 280.979H758.937L761.997 286.224L758.937 291.47Z" fill="#B7C1D6" />
                                <path d="M747.571 284.913H741.451L738.391 279.668L741.451 274.422H747.571L750.631 279.668L747.571 284.913Z" fill="#B7C1D6" />
                                <path d="M736.031 278.182H730.173L727.201 273.024L730.173 267.953H736.031L739.003 273.024L736.031 278.182Z" fill="#B7C1D6" />
                                <path d="M724.753 271.712H718.633L715.573 266.466L718.633 261.221H724.753L727.813 266.466L724.753 271.712Z" fill="#B7C1D6" />
                                <path d="M713.299 265.155H707.267L704.207 259.909L707.267 254.576H713.299L716.359 259.909L713.299 265.155Z" fill="#B7C1D6" />
                                <path d="M701.759 258.335H695.901L693.016 253.264L695.901 248.193H701.759L704.731 253.264L701.759 258.335Z" fill="#B7C1D6" />
                                <path d="M690.481 251.952H684.448L681.388 246.707L684.448 241.461H690.481L693.541 246.707L690.481 251.952Z" fill="#B7C1D6" />
                                <path d="M679.115 245.395H672.995L669.935 240.15L672.995 234.816H679.115L682.087 240.15L679.115 245.395Z" fill="#049848" />
                                <path d="M667.662 251.952H661.629L658.569 246.707L661.629 241.461H667.662L670.722 246.707L667.662 251.952Z" fill="#049848" />
                                <path d="M656.296 258.598H650.176L647.116 253.265L650.176 248.02H656.296L659.269 253.265L656.296 258.598Z" fill="#B7C1D6" />
                                <path d="M644.581 264.718H638.985L636.187 259.91L638.985 255.014H644.581L647.378 259.91L644.581 264.718Z" fill="#B7C1D6" />
                                <path d="M633.477 271.712H627.357L624.297 266.466L627.357 261.221H633.477L636.45 266.466L633.477 271.712Z" fill="#B7C1D6" />
                                <path d="M622.024 278.356H615.904L612.931 273.023L615.904 267.777H622.024L625.084 273.023L622.024 278.356Z" fill="#B7C1D6" />
                                <path d="M690.218 488.709H684.71L681.913 483.9L684.71 479.092H690.218L693.016 483.9L690.218 488.709Z" fill="#B7C1D6" />
                                <path d="M701.934 482.589H695.814L692.754 477.255L695.814 472.01H701.934L704.994 477.255L701.934 482.589Z" fill="#B7C1D6" />
                                <path d="M713.299 475.945H707.267L704.207 470.699L707.267 465.453H713.299L716.359 470.699L713.299 475.945Z" fill="#B7C1D6" />
                                <path d="M724.753 469.387H718.633L715.573 464.142L718.633 458.809H724.753L727.813 464.142L724.753 469.387Z" fill="#B7C1D6" />
                                <path d="M736.118 462.831H730.086L727.026 457.498L730.086 452.252H736.118L739.178 457.498L736.118 462.831Z" fill="#B7C1D6" />
                                <path d="M747.571 456.187H741.451L738.391 450.941L741.451 445.695H747.571L750.631 450.941L747.571 456.187Z" fill="#B7C1D6" />
                                <path d="M758.937 449.63H752.905L749.845 444.384L752.905 439.051H758.937L761.997 444.384L758.937 449.63Z" fill="#B7C1D6" />
                                <path d="M770.39 443.071H764.27L761.21 437.738L764.27 432.492H770.39L773.45 437.738L770.39 443.071Z" fill="#B7C1D6" />
                                <path d="M781.756 436.427H775.723L772.663 431.181L775.723 425.936H781.756L784.816 431.181L781.756 436.427Z" fill="#B7C1D6" />
                                <path d="M793.209 429.87H787.089L784.029 424.624L787.089 419.291H793.209L796.269 424.624L793.209 429.87Z" fill="#B7C1D6" />
                                <path d="M793.209 416.669H787.089L784.029 411.423L787.089 406.178H793.209L796.269 411.423L793.209 416.669Z" fill="#B7C1D6" />
                                <path d="M793.209 403.466H787.089L784.029 398.22L787.089 392.975H793.209L796.269 398.22L793.209 403.466Z" fill="#B7C1D6" />
                                <path d="M792.247 388.69H788.051L785.953 385.018L788.051 381.434H792.247L794.346 385.018L792.247 388.69Z" fill="#B7C1D6" />
                                <path d="M790.761 372.866H789.537L789.013 371.905L789.537 370.855H790.761L791.286 371.905L790.761 372.866Z" fill="#B7C1D6" />
                                <path d="M793.209 363.948H787.089L784.117 358.703L787.089 353.457H793.209L796.182 358.703L793.209 363.948Z" fill="#B7C1D6" />
                                <path d="M793.209 350.835H787.089L784.029 345.502L787.089 340.256H793.209L796.269 345.502L793.209 350.835Z" fill="#B7C1D6" />
                                <path d="M793.209 337.634H787.089L784.029 332.388L787.089 327.055H793.209L796.269 332.388L793.209 337.634Z" fill="#B7C1D6" />
                                <path d="M793.209 324.431H787.089L784.029 319.185L787.089 313.939H793.209L796.269 319.185L793.209 324.431Z" fill="#B7C1D6" />
                                <path d="M793.209 311.23H787.089L784.029 305.984L787.089 300.738H793.209L796.269 305.984L793.209 311.23Z" fill="#B7C1D6" />
                                <path d="M793.209 298.116H787.089L784.029 292.87L787.089 287.537H793.209L796.269 292.87L793.209 298.116Z" fill="#B7C1D6" />
                                <path d="M781.756 291.47H775.723L772.663 286.224L775.723 280.979H781.756L784.816 286.224L781.756 291.47Z" fill="#B7C1D6" />
                                <path d="M770.39 284.913H764.27L761.21 279.668L764.27 274.422H770.39L773.45 279.668L770.39 284.913Z" fill="#B7C1D6" />
                                <path d="M758.937 278.356H752.905L749.845 273.023L752.905 267.777H758.937L761.997 273.023L758.937 278.356Z" fill="#B7C1D6" />
                                <path d="M747.571 271.712H741.451L738.391 266.466L741.451 261.221H747.571L750.631 266.466L747.571 271.712Z" fill="#B7C1D6" />
                                <path d="M736.118 265.155H730.086L727.026 259.909L730.086 254.576H736.118L739.178 259.909L736.118 265.155Z" fill="#B7C1D6" />
                                <path d="M724.753 258.598H718.633L715.573 253.265L718.633 248.02H724.753L727.813 253.265L724.753 258.598Z" fill="#B7C1D6" />
                                <path d="M713.299 251.952H707.267L704.207 246.707L707.267 241.461H713.299L716.359 246.707L713.299 251.952Z" fill="#B7C1D6" />
                                <path d="M701.934 245.395H695.814L692.754 240.15L695.814 234.816H701.934L704.994 240.15L701.934 245.395Z" fill="#B7C1D6" />
                                <path d="M690.481 238.839H684.448L681.388 233.505L684.448 228.26H690.481L693.541 233.505L690.481 238.839Z" fill="#B7C1D6" />
                                <path d="M679.115 232.195H672.995L669.935 226.949L672.995 221.703H679.115L682.087 226.949L679.115 232.195Z" fill="#049848" />
                                <path d="M667.662 238.839H661.629L658.569 233.505L661.629 228.26H667.662L670.722 233.505L667.662 238.839Z" fill="#B7C1D6" />
                                <path d="M656.296 245.395H650.176L647.116 240.15L650.176 234.816H656.296L659.269 240.15L656.296 245.395Z" fill="#049848" />
                                <path d="M644.755 251.778H638.898L635.925 246.708L638.898 241.637H644.755L647.641 246.708L644.755 251.778Z" fill="#B7C1D6" />
                                <path d="M619.838 261.307H618.177L617.303 259.908L618.177 258.422H619.838L620.625 259.908L619.838 261.307Z" fill="#B7C1D6" />
                                <path d="M562.485 385.981H561.436L560.911 385.019L561.436 384.145H562.485L563.01 385.019L562.485 385.981Z" fill="#B7C1D6" />
                                <path d="M689.431 500.512H685.497L683.486 497.015L685.497 493.605H689.431L691.442 497.015L689.431 500.512Z" fill="#B7C1D6" />
                                <path d="M701.934 495.704H695.814L692.754 490.459L695.814 485.213H701.934L704.994 490.459L701.934 495.704Z" fill="#B7C1D6" />
                                <path d="M713.299 489.147H707.267L704.207 483.902L707.267 478.568H713.299L716.359 483.902L713.299 489.147Z" fill="#B7C1D6" />
                                <path d="M724.753 482.589H718.633L715.573 477.255L718.633 472.01H724.753L727.813 477.255L724.753 482.589Z" fill="#B7C1D6" />
                                <path d="M736.118 475.945H730.086L727.026 470.699L730.086 465.453H736.118L739.178 470.699L736.118 475.945Z" fill="#D63129" />
                                <path d="M747.571 469.387H741.451L738.391 464.142L741.451 458.809H747.571L750.631 464.142L747.571 469.387Z" fill="#B7C1D6" />
                                <path d="M758.937 462.831H752.905L749.845 457.498L752.905 452.252H758.937L761.997 457.498L758.937 462.831Z" fill="#B7C1D6" />
                                <path d="M770.39 456.187H764.27L761.21 450.941L764.27 445.695H770.39L773.45 450.941L770.39 456.187Z" fill="#B7C1D6" />
                                <path d="M781.756 449.63H775.723L772.663 444.384L775.723 439.051H781.756L784.816 444.384L781.756 449.63Z" fill="#B7C1D6" />
                                <path d="M793.209 443.071H787.089L784.029 437.738L787.089 432.492H793.209L796.269 437.738L793.209 443.071Z" fill="#B7C1D6" />
                                <path d="M804.575 436.427H798.542L795.482 431.181L798.542 425.936H804.575L807.635 431.181L804.575 436.427Z" fill="#B7C1D6" />
                                <path d="M804.575 423.313H798.542L795.482 417.98L798.542 412.734H804.575L807.635 417.98L804.575 423.313Z" fill="#B7C1D6" />
                                <path d="M804.575 410.023H798.542L795.57 404.865L798.542 399.619H804.575L807.547 404.865L804.575 410.023Z" fill="#B7C1D6" />
                                <path d="M802.564 393.413H800.553L799.504 391.664L800.553 389.828H802.564L803.613 391.664L802.564 393.413Z" fill="#B7C1D6" />
                                <path d="M804.313 383.183H798.892L796.182 378.461L798.892 373.74H804.313L807.023 378.461L804.313 383.183Z" fill="#B7C1D6" />
                                <path d="M804.575 370.594H798.542L795.482 365.261L798.542 360.016H804.575L807.635 365.261L804.575 370.594Z" fill="#B7C1D6" />
                                <path d="M804.575 357.391H798.542L795.482 352.146L798.542 346.812H804.575L807.635 352.146L804.575 357.391Z" fill="#B7C1D6" />
                                <path d="M804.575 344.191H798.542L795.482 338.945L798.542 333.699H804.575L807.635 338.945L804.575 344.191Z" fill="#B7C1D6" />
                                <path d="M804.575 331.075H798.542L795.482 325.742L798.542 320.496H804.575L807.635 325.742L804.575 331.075Z" fill="#B7C1D6" />
                                <path d="M804.575 317.874H798.542L795.482 312.628L798.542 307.295H804.575L807.635 312.628L804.575 317.874Z" fill="#B7C1D6" />
                                <path d="M804.575 304.673H798.542L795.482 299.427L798.542 294.182H804.575L807.635 299.427L804.575 304.673Z" fill="#B7C1D6" />
                                <path d="M804.575 291.47H798.542L795.482 286.224L798.542 280.979H804.575L807.635 286.224L804.575 291.47Z" fill="#B7C1D6" />
                                <path d="M793.209 284.913H787.089L784.029 279.668L787.089 274.422H793.209L796.269 279.668L793.209 284.913Z" fill="#B7C1D6" />
                                <path d="M781.756 278.356H775.723L772.663 273.023L775.723 267.777H781.756L784.816 273.023L781.756 278.356Z" fill="#B7C1D6" />
                                <path d="M770.39 271.712H764.27L761.21 266.466L764.27 261.221H770.39L773.45 266.466L770.39 271.712Z" fill="#B7C1D6" />
                                <path d="M758.937 265.155H752.905L749.845 259.909L752.905 254.576H758.937L761.997 259.909L758.937 265.155Z" fill="#B7C1D6" />
                                <path d="M747.571 258.598H741.451L738.391 253.265L741.451 248.02H747.571L750.631 253.265L747.571 258.598Z" fill="#B7C1D6" />
                                <path d="M736.118 251.952H730.086L727.026 246.707L730.086 241.461H736.118L739.178 246.707L736.118 251.952Z" fill="#B7C1D6" />
                                <path d="M724.753 245.395H718.633L715.573 240.15L718.633 234.816H724.753L727.813 240.15L724.753 245.395Z" fill="#049848" />
                                <path d="M713.299 238.839H707.267L704.207 233.505L707.267 228.26H713.299L716.359 233.505L713.299 238.839Z" fill="#B7C1D6" />
                                <path d="M701.934 232.195H695.814L692.754 226.949L695.814 221.703H701.934L704.994 226.949L701.934 232.195Z" fill="#049848" />
                                <path d="M690.481 225.637H684.448L681.388 220.392L684.448 215.059H690.481L693.541 220.392L690.481 225.637Z" fill="#B7C1D6" />
                                <path d="M679.115 219.081H672.995L669.935 213.748L672.995 208.502H679.115L682.087 213.748L679.115 219.081Z" fill="#B7C1D6" />
                                <path d="M667.662 225.637H661.629L658.569 220.392L661.629 215.059H667.662L670.722 220.392L667.662 225.637Z" fill="#B7C1D6" />
                                <path d="M656.296 232.195H650.176L647.116 226.949L650.176 221.703H656.296L659.269 226.949L656.296 232.195Z" fill="#B7C1D6" />
                                <path d="M644.843 238.752H638.81L635.75 233.506L638.81 228.348H644.843L647.815 233.506L644.843 238.752Z" fill="#B7C1D6" />
                                <path d="M633.04 244.696H627.794L625.171 240.15L627.794 235.604H633.04L635.663 240.15L633.04 244.696Z" fill="#B7C1D6" />
                                <path d="M701.934 508.905H695.814L692.754 503.66L695.814 498.414H701.934L704.994 503.66L701.934 508.905Z" fill="#B7C1D6" />
                                <path d="M713.299 502.348H707.267L704.207 497.015L707.267 491.77H713.299L716.359 497.015L713.299 502.348Z" fill="#B7C1D6" />
                                <path d="M724.753 495.704H718.633L715.573 490.459L718.633 485.213H724.753L727.813 490.459L724.753 495.704Z" fill="#B7C1D6" />
                                <path d="M736.118 489.147H730.086L727.026 483.902L730.086 478.568H736.118L739.178 483.902L736.118 489.147Z" fill="#B7C1D6" />
                                <path d="M747.571 482.589H741.451L738.391 477.255L741.451 472.01H747.571L750.631 477.255L747.571 482.589Z" fill="#B7C1D6" />
                                <path d="M758.937 475.945H752.905L749.845 470.699L752.905 465.453H758.937L761.997 470.699L758.937 475.945Z" fill="#B7C1D6" />
                                <path d="M770.39 469.387H764.27L761.21 464.142L764.27 458.809H770.39L773.45 464.142L770.39 469.387Z" fill="#B7C1D6" />
                                <path d="M781.756 462.831H775.723L772.663 457.498L775.723 452.252H781.756L784.816 457.498L781.756 462.831Z" fill="#B7C1D6" />
                                <path d="M793.209 456.187H787.089L784.029 450.941L787.089 445.695H793.209L796.269 450.941L793.209 456.187Z" fill="#B7C1D6" />
                                <path d="M804.575 449.63H798.542L795.482 444.384L798.542 439.051H804.575L807.635 444.384L804.575 449.63Z" fill="#B7C1D6" />
                                <path d="M816.028 443.071H809.908L806.848 437.738L809.908 432.492H816.028L819.088 437.738L816.028 443.071Z" fill="#B7C1D6" />
                                <path d="M816.028 429.87H809.908L806.848 424.624L809.908 419.291H816.028L819.088 424.624L816.028 429.87Z" fill="#B7C1D6" />
                                <path d="M816.028 416.669H809.908L806.935 411.423L809.908 406.178H816.028L819.001 411.423L816.028 416.669Z" fill="#B7C1D6" />
                                <path d="M815.766 403.116H810.17L807.285 398.22L810.17 393.324H815.766L818.651 398.22L815.766 403.116Z" fill="#B7C1D6" />
                                <path d="M816.028 390.352H809.908L806.848 385.019L809.908 379.773H816.028L819.088 385.019L816.028 390.352Z" fill="#B7C1D6" />
                                <path d="M816.028 377.151H809.908L806.848 371.905L809.908 366.572H816.028L819.088 371.905L816.028 377.151Z" fill="#B7C1D6" />
                                <path d="M816.028 363.948H809.908L806.848 358.703L809.908 353.457H816.028L819.088 358.703L816.028 363.948Z" fill="#B7C1D6" />
                                <path d="M816.028 350.835H809.908L806.848 345.502L809.908 340.256H816.028L819.088 345.502L816.028 350.835Z" fill="#B7C1D6" />
                                <path d="M816.028 337.634H809.908L806.848 332.388L809.908 327.055H816.028L819.088 332.388L816.028 337.634Z" fill="#B7C1D6" />
                                <path d="M816.028 324.431H809.908L806.848 319.185L809.908 313.939H816.028L819.088 319.185L816.028 324.431Z" fill="#B7C1D6" />
                                <path d="M816.028 311.23H809.908L806.848 305.984L809.908 300.738H816.028L819.088 305.984L816.028 311.23Z" fill="#B7C1D6" />
                                <path d="M816.028 298.116H809.908L806.848 292.87L809.908 287.537H816.028L819.088 292.87L816.028 298.116Z" fill="#D63129" />
                                <path d="M816.028 284.913H809.908L806.848 279.668L809.908 274.422H816.028L819.088 279.668L816.028 284.913Z" fill="#B7C1D6" />
                                <path d="M804.575 278.356H798.542L795.482 273.023L798.542 267.777H804.575L807.635 273.023L804.575 278.356Z" fill="#B7C1D6" />
                                <path d="M793.209 271.712H787.089L784.029 266.466L787.089 261.221H793.209L796.269 266.466L793.209 271.712Z" fill="#B7C1D6" />
                                <path d="M781.756 265.155H775.723L772.663 259.909L775.723 254.576H781.756L784.816 259.909L781.756 265.155Z" fill="#B7C1D6" />
                                <path d="M770.39 258.598H764.27L761.21 253.265L764.27 248.02H770.39L773.45 253.265L770.39 258.598Z" fill="#B7C1D6" />
                                <path d="M758.937 251.952H752.905L749.845 246.707L752.905 241.461H758.937L761.997 246.707L758.937 251.952Z" fill="#B7C1D6" />
                                <path d="M747.571 245.395H741.451L738.391 240.15L741.451 234.816H747.571L750.631 240.15L747.571 245.395Z" fill="#B7C1D6" />
                                <path d="M736.118 238.839H730.086L727.026 233.505L730.086 228.26H736.118L739.178 233.505L736.118 238.839Z" fill="#B7C1D6" />
                                <path d="M724.753 232.195H718.633L715.573 226.949L718.633 221.703H724.753L727.813 226.949L724.753 232.195Z" fill="#B7C1D6" />
                                <path d="M713.299 225.637H707.267L704.207 220.392L707.267 215.059H713.299L716.359 220.392L713.299 225.637Z" fill="#B7C1D6" />
                                <path d="M701.934 219.081H695.814L692.754 213.748L695.814 208.502H701.934L704.994 213.748L701.934 219.081Z" fill="#B7C1D6" />
                                <path d="M690.481 212.435H684.448L681.388 207.189L684.448 201.943H690.481L693.541 207.189L690.481 212.435Z" fill="#B7C1D6" />
                                <path d="M678.853 205.441H673.257L670.372 200.632L673.257 195.736H678.853L681.65 200.632L678.853 205.441Z" fill="#B7C1D6" />
                                <path d="M666.263 210.075H663.028L661.367 207.19L663.028 204.305H666.263L667.924 207.19L666.263 210.075Z" fill="#B7C1D6" />
                                <path d="M653.673 214.62H652.711L652.274 213.746L652.711 212.959H653.673L654.198 213.746L653.673 214.62Z" fill="#B7C1D6" />
                                <path d="M644.843 225.549H638.81L635.75 220.39L638.81 215.145H644.843L647.815 220.39L644.843 225.549Z" fill="#B7C1D6" />
                                <path d="M631.029 227.998H629.805L629.106 226.949L629.805 225.812H631.029L631.641 226.949L631.029 227.998Z" fill="#B7C1D6" />
                                <path d="M689.257 526.566H685.672L683.836 523.419L685.672 520.271H689.257L691.093 523.419L689.257 526.566Z" fill="#B7C1D6" />
                                <path d="M701.934 522.108H695.814L692.754 516.862L695.814 511.529H701.934L704.994 516.862L701.934 522.108Z" fill="#B7C1D6" />
                                <path d="M713.299 515.462H707.267L704.207 510.216L707.267 504.971H713.299L716.359 510.216L713.299 515.462Z" fill="#B7C1D6" />
                                <path d="M724.753 508.905H718.633L715.573 503.66L718.633 498.414H724.753L727.813 503.66L724.753 508.905Z" fill="#B7C1D6" />
                                <path d="M736.118 502.348H730.086L727.026 497.015L730.086 491.77H736.118L739.178 497.015L736.118 502.348Z" fill="#B7C1D6" />
                                <path d="M747.571 495.704H741.451L738.391 490.459L741.451 485.213H747.571L750.631 490.459L747.571 495.704Z" fill="#B7C1D6" />
                                <path d="M758.937 489.147H752.905L749.845 483.902L752.905 478.568H758.937L761.997 483.902L758.937 489.147Z" fill="#B7C1D6" />
                                <path d="M770.39 482.589H764.27L761.21 477.255L764.27 472.01H770.39L773.45 477.255L770.39 482.589Z" fill="#D63129" />
                                <path d="M781.756 475.945H775.723L772.663 470.699L775.723 465.453H781.756L784.816 470.699L781.756 475.945Z" fill="#B7C1D6" />
                                <path d="M793.209 469.387H787.089L784.029 464.142L787.089 458.809H793.209L796.269 464.142L793.209 469.387Z" fill="#B7C1D6" />
                                <path d="M804.4 462.481H798.717L795.919 457.498L798.717 452.602H804.4L807.285 457.498L804.4 462.481Z" fill="#B7C1D6" />
                                <path d="M814.629 453.914H811.307L809.558 450.941L811.307 447.969H814.629L816.378 450.941L814.629 453.914Z" fill="#B7C1D6" />
                                <path d="M827.044 435.727H821.798L819.175 431.181L821.798 426.635H827.044L829.667 431.181L827.044 435.727Z" fill="#B7C1D6" />
                                <path d="M827.394 423.313H821.361L818.301 417.98L821.361 412.734H827.394L830.454 417.98L827.394 423.313Z" fill="#B7C1D6" />
                                <path d="M825.733 407.138H823.022L821.711 404.864L823.022 402.504H825.733L827.044 404.864L825.733 407.138Z" fill="#B7C1D6" />
                                <path d="M827.394 396.909H821.361L818.389 391.664L821.361 386.418H827.394L830.454 391.664L827.394 396.909Z" fill="#B7C1D6" />
                                <path d="M827.394 383.708H821.361L818.301 378.463L821.361 373.217H827.394L830.454 378.463L827.394 383.708Z" fill="#B7C1D6" />
                                <path d="M827.394 370.594H821.361L818.301 365.261L821.361 360.016H827.394L830.454 365.261L827.394 370.594Z" fill="#B7C1D6" />
                                <path d="M827.394 357.391H821.361L818.301 352.146L821.361 346.812H827.394L830.454 352.146L827.394 357.391Z" fill="#B7C1D6" />
                                <path d="M827.394 344.191H821.361L818.301 338.945L821.361 333.699H827.394L830.454 338.945L827.394 344.191Z" fill="#B7C1D6" />
                                <path d="M827.394 331.075H821.361L818.301 325.742L821.361 320.496H827.394L830.454 325.742L827.394 331.075Z" fill="#B7C1D6" />
                                <path d="M827.394 317.874H821.361L818.301 312.628L821.361 307.295H827.394L830.454 312.628L827.394 317.874Z" fill="#B7C1D6" />
                                <path d="M827.394 304.673H821.361L818.301 299.427L821.361 294.182H827.394L830.454 299.427L827.394 304.673Z" fill="#B7C1D6" />
                                <path d="M827.394 291.47H821.361L818.301 286.224L821.361 280.979H827.394L830.454 286.224L827.394 291.47Z" fill="#B7C1D6" />
                                <path d="M827.394 278.356H821.361L818.301 273.023L821.361 267.777H827.394L830.454 273.023L827.394 278.356Z" fill="#B7C1D6" />
                                <path d="M816.028 271.712H809.908L806.848 266.466L809.908 261.221H816.028L819.088 266.466L816.028 271.712Z" fill="#B7C1D6" />
                                <path d="M804.575 265.155H798.542L795.482 259.909L798.542 254.576H804.575L807.635 259.909L804.575 265.155Z" fill="#B7C1D6" />
                                <path d="M793.209 258.598H787.089L784.029 253.265L787.089 248.02H793.209L796.269 253.265L793.209 258.598Z" fill="#B7C1D6" />
                                <path d="M781.756 251.952H775.723L772.663 246.707L775.723 241.461H781.756L784.816 246.707L781.756 251.952Z" fill="#B7C1D6" />
                                <path d="M770.39 245.395H764.27L761.21 240.15L764.27 234.816H770.39L773.45 240.15L770.39 245.395Z" fill="#B7C1D6" />
                                <path d="M758.937 238.839H752.905L749.845 233.505L752.905 228.26H758.937L761.997 233.505L758.937 238.839Z" fill="#B7C1D6" />
                                <path d="M747.571 232.195H741.451L738.391 226.949L741.451 221.703H747.571L750.631 226.949L747.571 232.195Z" fill="#B7C1D6" />
                                <path d="M736.118 225.637H730.086L727.026 220.392L730.086 215.059H736.118L739.178 220.392L736.118 225.637Z" fill="#B7C1D6" />
                                <path d="M724.753 219.081H718.633L715.573 213.748L718.633 208.502H724.753L727.813 213.748L724.753 219.081Z" fill="#B7C1D6" />
                                <path d="M713.299 212.435H707.267L704.207 207.189L707.267 201.943H713.299L716.359 207.189L713.299 212.435Z" fill="#B7C1D6" />
                                <path d="M700.885 204.131H696.863L694.765 200.633L696.863 197.049H700.885L702.983 200.633L700.885 204.131Z" fill="#B7C1D6" />
                                <path d="M688.994 196.698H685.847L684.273 193.988L685.847 191.277H688.994L690.568 193.988L688.994 196.698Z" fill="#B7C1D6" />
                                <path d="M677.978 190.667H674.131L672.208 187.432L674.131 184.109H677.978L679.814 187.432L677.978 190.667Z" fill="#B7C1D6" />
                                <path d="M644.843 212.435H638.81L635.75 207.189L638.81 201.943H644.843L647.903 207.189L644.843 212.435Z" fill="#B7C1D6" />
                                <path d="M633.477 219.081H627.357L624.297 213.748L627.357 208.502H633.477L636.45 213.748L633.477 219.081Z" fill="#B7C1D6" />
                                <path d="M690.218 541.343H684.71L682 536.622L684.71 531.9H690.218L692.929 536.622L690.218 541.343Z" fill="#B7C1D6" />
                                <path d="M701.934 535.309H695.814L692.754 529.976L695.814 524.73H701.934L704.994 529.976L701.934 535.309Z" fill="#B7C1D6" />
                                <path d="M713.299 528.665H707.267L704.207 523.42L707.267 518.174H713.299L716.359 523.42L713.299 528.665Z" fill="#B7C1D6" />
                                <path d="M724.753 522.108H718.633L715.573 516.862L718.633 511.529H724.753L727.813 516.862L724.753 522.108Z" fill="#B7C1D6" />
                                <path d="M736.118 515.462H730.086L727.026 510.216L730.086 504.971H736.118L739.178 510.216L736.118 515.462Z" fill="#B7C1D6" />
                                <path d="M747.571 508.905H741.451L738.391 503.66L741.451 498.414H747.571L750.631 503.66L747.571 508.905Z" fill="#B7C1D6" />
                                <path d="M758.937 502.348H752.905L749.845 497.015L752.905 491.77H758.937L761.997 497.015L758.937 502.348Z" fill="#B7C1D6" />
                                <path d="M770.39 495.704H764.27L761.21 490.459L764.27 485.213H770.39L773.45 490.459L770.39 495.704Z" fill="#B7C1D6" />
                                <path d="M781.756 489.147H775.723L772.663 483.902L775.723 478.568H781.756L784.816 483.902L781.756 489.147Z" fill="#B7C1D6" />
                                <path d="M793.122 482.502H787.177L784.204 477.256L787.177 472.098H793.122L796.182 477.256L793.122 482.502Z" fill="#B7C1D6" />
                                <path d="M837.273 413.958H834.301L832.902 411.422L834.301 408.887H837.273L838.759 411.422L837.273 413.958Z" fill="#B7C1D6" />
                                <path d="M838.847 390.352H832.727L829.754 385.019L832.727 379.773H838.847L841.907 385.019L838.847 390.352Z" fill="#B7C1D6" />
                                <path d="M838.847 377.151H832.727L829.754 371.905L832.727 366.572H838.847L841.907 371.905L838.847 377.151Z" fill="#B7C1D6" />
                                <path d="M838.847 363.948H832.727L829.754 358.703L832.727 353.457H838.847L841.907 358.703L838.847 363.948Z" fill="#B7C1D6" />
                                <path d="M838.847 350.747H832.727L829.754 345.502L832.727 340.256H838.847L841.819 345.502L838.847 350.747Z" fill="#B7C1D6" />
                                <path d="M836.661 333.786H835L834.126 332.387L835 330.9H836.661L837.448 332.387L836.661 333.786Z" fill="#B7C1D6" />
                                <path d="M838.847 324.431H832.727L829.754 319.185L832.727 313.939H838.847L841.907 319.185L838.847 324.431Z" fill="#B7C1D6" />
                                <path d="M838.847 311.23H832.727L829.754 305.984L832.727 300.738H838.847L841.907 305.984L838.847 311.23Z" fill="#B7C1D6" />
                                <path d="M838.847 298.116H832.727L829.754 292.87L832.727 287.537H838.847L841.907 292.87L838.847 298.116Z" fill="#B7C1D6" />
                                <path d="M838.847 284.913H832.727L829.754 279.668L832.727 274.422H838.847L841.907 279.668L838.847 284.913Z" fill="#B7C1D6" />
                                <path d="M838.847 271.712H832.727L829.754 266.466L832.727 261.221H838.847L841.907 266.466L838.847 271.712Z" fill="#B7C1D6" />
                                <path d="M827.394 265.155H821.361L818.301 259.909L821.361 254.576H827.394L830.454 259.909L827.394 265.155Z" fill="#B7C1D6" />
                                <path d="M816.028 258.598H809.908L806.848 253.265L809.908 248.02H816.028L819.088 253.265L816.028 258.598Z" fill="#B7C1D6" />
                                <path d="M804.575 251.952H798.542L795.482 246.707L798.542 241.461H804.575L807.635 246.707L804.575 251.952Z" fill="#B7C1D6" />
                                <path d="M793.209 245.395H787.089L784.029 240.15L787.089 234.816H793.209L796.269 240.15L793.209 245.395Z" fill="#B7C1D6" />
                                <path d="M781.756 238.839H775.723L772.663 233.505L775.723 228.26H781.756L784.816 233.505L781.756 238.839Z" fill="#B7C1D6" />
                                <path d="M770.39 232.195H764.27L761.21 226.949L764.27 221.703H770.39L773.45 226.949L770.39 232.195Z" fill="#B7C1D6" />
                                <path d="M758.937 225.637H752.905L749.845 220.392L752.905 215.059H758.937L761.997 220.392L758.937 225.637Z" fill="#B7C1D6" />
                                <path d="M747.571 219.081H741.451L738.391 213.748L741.451 208.502H747.571L750.631 213.748L747.571 219.081Z" fill="#B7C1D6" />
                                <path d="M736.118 212.435H730.086L727.026 207.189L730.086 201.943H736.118L739.178 207.189L736.118 212.435Z" fill="#B7C1D6" />
                                <path d="M724.753 205.878H718.633L715.573 200.632L718.633 195.299H724.753L727.813 200.632L724.753 205.878Z" fill="#B7C1D6" />
                                <path d="M701.934 192.677H695.814L692.841 187.431L695.814 182.186H701.934L704.906 187.431L701.934 192.677Z" fill="#B7C1D6" />
                                <path d="M690.481 186.031H684.448L681.475 180.785L684.448 175.627H690.481L693.453 180.785L690.481 186.031Z" fill="#B7C1D6" />
                                <path d="M679.115 179.476H672.995L669.935 174.23L672.995 168.984H679.115L682.087 174.23L679.115 179.476Z" fill="#B7C1D6" />
                                <path d="M665.738 182.711H663.553L662.503 180.787L663.553 178.951H665.738L666.787 180.787L665.738 182.711Z" fill="#B7C1D6" />
                                <path d="M643.619 197.222H639.947L638.111 193.987L639.947 190.84H643.619L645.455 193.987L643.619 197.222Z" fill="#B7C1D6" />
                                <path d="M632.078 203.518H628.756L627.007 200.633L628.756 197.66H632.078L633.739 200.633L632.078 203.518Z" fill="#B7C1D6" />
                                <path d="M621.587 211.648H616.429L613.893 207.189L616.429 202.73H621.587L624.122 207.189L621.587 211.648Z" fill="#B7C1D6" />
                                <path d="M608.822 215.932H606.374L605.15 213.747L606.374 211.648H608.822L610.046 213.747L608.822 215.932Z" fill="#B7C1D6" />
                                <path d="M701.934 548.423H695.814L692.754 543.177L695.814 537.932H701.934L704.994 543.177L701.934 548.423Z" fill="#B7C1D6" />
                                <path d="M713.299 541.866H707.267L704.207 536.62L707.267 531.287H713.299L716.359 536.62L713.299 541.866Z" fill="#B7C1D6" />
                                <path d="M724.753 535.309H718.633L715.573 529.976L718.633 524.73H724.753L727.813 529.976L724.753 535.309Z" fill="#B7C1D6" />
                                <path d="M736.118 528.665H730.086L727.026 523.42L730.086 518.174H736.118L739.178 523.42L736.118 528.665Z" fill="#B7C1D6" />
                                <path d="M747.571 522.108H741.451L738.391 516.862L741.451 511.529H747.571L750.631 516.862L747.571 522.108Z" fill="#B7C1D6" />
                                <path d="M758.937 515.462H752.905L749.845 510.216L752.905 504.971H758.937L761.997 510.216L758.937 515.462Z" fill="#B7C1D6" />
                                <path d="M770.39 508.905H764.27L761.21 503.66L764.27 498.414H770.39L773.45 503.66L770.39 508.905Z" fill="#B7C1D6" />
                                <path d="M781.756 502.348H775.723L772.663 497.015L775.723 491.77H781.756L784.816 497.015L781.756 502.348Z" fill="#B7C1D6" />
                                <path d="M793.122 495.703H787.177L784.117 490.457L787.177 485.299H793.122L796.182 490.457L793.122 495.703Z" fill="#B7C1D6" />
                                <path d="M850.125 383.621H844.267L841.295 378.463L844.267 373.305H850.125L853.098 378.463L850.125 383.621Z" fill="#B7C1D6" />
                                <path d="M850.213 370.594H844.18L841.12 365.261L844.18 360.016H850.213L853.273 365.261L850.213 370.594Z" fill="#B7C1D6" />
                                <path d="M850.125 357.217H844.267L841.295 352.147L844.267 346.988H850.125L853.098 352.147L850.125 357.217Z" fill="#B7C1D6" />
                                <path d="M849.688 343.228H844.705L842.257 338.944L844.705 334.66H849.688L852.136 338.944L849.688 343.228Z" fill="#B7C1D6" />
                                <path d="M850.213 331.075H844.18L841.12 325.742L844.18 320.496H850.213L853.273 325.742L850.213 331.075Z" fill="#B7C1D6" />
                                <path d="M850.213 317.874H844.18L841.12 312.628L844.18 307.295H850.213L853.273 312.628L850.213 317.874Z" fill="#B7C1D6" />
                                <path d="M850.213 304.673H844.18L841.12 299.427L844.18 294.182H850.213L853.273 299.427L850.213 304.673Z" fill="#B7C1D6" />
                                <path d="M850.213 291.47H844.18L841.12 286.224L844.18 280.979H850.213L853.273 286.224L850.213 291.47Z" fill="#B7C1D6" />
                                <path d="M850.213 278.356H844.18L841.12 273.023L844.18 267.777H850.213L853.273 273.023L850.213 278.356Z" fill="#B7C1D6" />
                                <path d="M850.213 265.155H844.18L841.12 259.909L844.18 254.576H850.213L853.273 259.909L850.213 265.155Z" fill="#B7C1D6" />
                                <path d="M838.847 258.598H832.727L829.754 253.265L832.727 248.02H838.847L841.907 253.265L838.847 258.598Z" fill="#B7C1D6" />
                                <path d="M827.394 251.952H821.361L818.301 246.707L821.361 241.461H827.394L830.454 246.707L827.394 251.952Z" fill="#B7C1D6" />
                                <path d="M816.028 245.395H809.908L806.848 240.15L809.908 234.816H816.028L819.088 240.15L816.028 245.395Z" fill="#B7C1D6" />
                                <path d="M804.575 238.839H798.542L795.482 233.505L798.542 228.26H804.575L807.635 233.505L804.575 238.839Z" fill="#B7C1D6" />
                                <path d="M793.209 232.195H787.089L784.029 226.949L787.089 221.703H793.209L796.269 226.949L793.209 232.195Z" fill="#B7C1D6" />
                                <path d="M781.756 225.637H775.723L772.663 220.392L775.723 215.059H781.756L784.816 220.392L781.756 225.637Z" fill="#B7C1D6" />
                                <path d="M770.39 219.081H764.27L761.21 213.748L764.27 208.502H770.39L773.45 213.748L770.39 219.081Z" fill="#B7C1D6" />
                                <path d="M758.937 212.435H752.905L749.845 207.189L752.905 201.943H758.937L761.997 207.189L758.937 212.435Z" fill="#B7C1D6" />
                                <path d="M747.571 205.878H741.451L738.391 200.632L741.451 195.299H747.571L750.631 200.632L747.571 205.878Z" fill="#B7C1D6" />
                                <path d="M736.118 199.234H730.086L727.026 193.988L730.086 188.742H736.118L739.178 193.988L736.118 199.234Z" fill="#B7C1D6" />
                                <path d="M724.578 192.414H718.807L715.922 187.431L718.807 182.447H724.578L727.463 187.431L724.578 192.414Z" fill="#B7C1D6" />
                                <path d="M710.851 181.835H709.715L709.103 180.786L709.715 179.824H710.851L711.463 180.786L710.851 181.835Z" fill="#B7C1D6" />
                                <path d="M701.934 179.476H695.814L692.754 174.23L695.814 168.984H701.934L704.994 174.23L701.934 179.476Z" fill="#B7C1D6" />
                                <path d="M690.481 172.917H684.448L681.388 167.671L684.448 162.338H690.481L693.541 167.671L690.481 172.917Z" fill="#B7C1D6" />
                                <path d="M679.115 166.36H672.995L669.935 161.027L672.995 155.781H679.115L682.087 161.027L679.115 166.36Z" fill="#B7C1D6" />
                                <path d="M667.225 172.131H662.066L659.443 167.672L662.066 163.213H667.225L669.76 167.672L667.225 172.131Z" fill="#B7C1D6" />
                                <path d="M633.39 192.59H627.357L624.385 187.431L627.357 182.186H633.39L636.45 187.431L633.39 192.59Z" fill="#B7C1D6" />
                                <path d="M506.006 472.622H503.733L502.684 470.699L503.733 468.775H506.006L507.143 470.699L506.006 472.622Z" fill="#B7C1D6" />
                                <path d="M701.846 561.537H695.901L692.929 556.379L695.901 551.221H701.846L704.819 556.379L701.846 561.537Z" fill="#B7C1D6" />
                                <path d="M713.299 555.067H707.267L704.207 549.734L707.267 544.488H713.299L716.359 549.734L713.299 555.067Z" fill="#B7C1D6" />
                                <path d="M724.753 548.423H718.633L715.573 543.177L718.633 537.932H724.753L727.813 543.177L724.753 548.423Z" fill="#B7C1D6" />
                                <path d="M736.118 541.866H730.086L727.026 536.62L730.086 531.287H736.118L739.178 536.62L736.118 541.866Z" fill="#B7C1D6" />
                                <path d="M747.571 535.309H741.451L738.391 529.976L741.451 524.73H747.571L750.631 529.976L747.571 535.309Z" fill="#B7C1D6" />
                                <path d="M758.937 528.665H752.905L749.845 523.42L752.905 518.174H758.937L761.997 523.42L758.937 528.665Z" fill="#B7C1D6" />
                                <path d="M770.39 522.108H764.27L761.21 516.862L764.27 511.529H770.39L773.45 516.862L770.39 522.108Z" fill="#B7C1D6" />
                                <path d="M781.756 515.462H775.723L772.663 510.216L775.723 504.971H781.756L784.816 510.216L781.756 515.462Z" fill="#B7C1D6" />
                                <path d="M793.209 508.905H787.089L784.029 503.66L787.089 498.414H793.209L796.269 503.66L793.209 508.905Z" fill="#B7C1D6" />
                                <path d="M861.403 376.625H855.895L853.098 371.904L855.895 367.096H861.403L864.114 371.904L861.403 376.625Z" fill="#B7C1D6" />
                                <path d="M861.316 363.425H855.895L853.185 358.704L855.895 353.982H861.316L864.026 358.704L861.316 363.425Z" fill="#B7C1D6" />
                                <path d="M861.054 349.785H856.158L853.71 345.501L856.158 341.305H861.054L863.502 345.501L861.054 349.785Z" fill="#B7C1D6" />
                                <path d="M861.666 337.634H855.546L852.573 332.388L855.546 327.055H861.666L864.726 332.388L861.666 337.634Z" fill="#B7C1D6" />
                                <path d="M861.666 324.431H855.546L852.573 319.185L855.546 313.939H861.666L864.726 319.185L861.666 324.431Z" fill="#B7C1D6" />
                                <path d="M861.666 311.23H855.546L852.573 305.984L855.546 300.738H861.666L864.726 305.984L861.666 311.23Z" fill="#B7C1D6" />
                                <path d="M861.666 298.116H855.546L852.573 292.87L855.546 287.537H861.666L864.726 292.87L861.666 298.116Z" fill="#B7C1D6" />
                                <path d="M861.666 284.913H855.546L852.573 279.668L855.546 274.422H861.666L864.726 279.668L861.666 284.913Z" fill="#B7C1D6" />
                                <path d="M861.666 271.712H855.546L852.573 266.466L855.546 261.221H861.666L864.726 266.466L861.666 271.712Z" fill="#B7C1D6" />
                                <path d="M861.666 258.598H855.546L852.573 253.265L855.546 248.02H861.666L864.726 253.265L861.666 258.598Z" fill="#B7C1D6" />
                                <path d="M850.213 251.952H844.18L841.12 246.707L844.18 241.461H850.213L853.273 246.707L850.213 251.952Z" fill="#B7C1D6" />
                                <path d="M838.847 245.395H832.727L829.754 240.15L832.727 234.816H838.847L841.907 240.15L838.847 245.395Z" fill="#B7C1D6" />
                                <path d="M827.394 238.839H821.361L818.301 233.505L821.361 228.26H827.394L830.454 233.505L827.394 238.839Z" fill="#049848" />
                                <path d="M816.028 232.195H809.908L806.848 226.949L809.908 221.703H816.028L819.088 226.949L816.028 232.195Z" fill="#B7C1D6" />
                                <path d="M804.575 225.637H798.542L795.482 220.392L798.542 215.059H804.575L807.635 220.392L804.575 225.637Z" fill="#B7C1D6" />
                                <path d="M793.209 219.081H787.089L784.029 213.748L787.089 208.502H793.209L796.269 213.748L793.209 219.081Z" fill="#B7C1D6" />
                                <path d="M781.756 212.435H775.723L772.663 207.189L775.723 201.943H781.756L784.816 207.189L781.756 212.435Z" fill="#B7C1D6" />
                                <path d="M770.39 205.878H764.27L761.21 200.632L764.27 195.299H770.39L773.45 200.632L770.39 205.878Z" fill="#B7C1D6" />
                                <path d="M758.937 199.234H752.905L749.845 193.988L752.905 188.742H758.937L761.997 193.988L758.937 199.234Z" fill="#B7C1D6" />
                                <path d="M747.571 192.677H741.451L738.391 187.431L741.451 182.186H747.571L750.631 187.431L747.571 192.677Z" fill="#B7C1D6" />
                                <path d="M736.118 186.12H730.086L727.026 180.787L730.086 175.541H736.118L739.178 180.787L736.118 186.12Z" fill="#B7C1D6" />
                                <path d="M701.934 166.36H695.814L692.754 161.027L695.814 155.781H701.934L704.994 161.027L701.934 166.36Z" fill="#B7C1D6" />
                                <path d="M690.481 159.716H684.448L681.388 154.47L684.448 149.225H690.481L693.541 154.47L690.481 159.716Z" fill="#B7C1D6" />
                                <path d="M678.241 151.76H673.782L671.596 147.913L673.782 144.066H678.241L680.514 147.913L678.241 151.76Z" fill="#B7C1D6" />
                                <path d="M665.214 155.52H664.077L663.465 154.471L664.077 153.422H665.214L665.826 154.471L665.214 155.52Z" fill="#B7C1D6" />
                                <path d="M631.029 175.278H629.805L629.193 174.229L629.805 173.18H631.029L631.554 174.229L631.029 175.278Z" fill="#B7C1D6" />
                                <path d="M485.111 475.945H478.991L475.931 470.699L478.991 465.453H485.111L488.171 470.699L485.111 475.945Z" fill="#B7C1D6" />
                                <path d="M496.477 482.589H490.444L487.384 477.255L490.444 472.01H496.477L499.537 477.255L496.477 482.589Z" fill="#B7C1D6" />
                                <path d="M507.93 489.147H501.81L498.837 483.902L501.81 478.568H507.93L510.99 483.902L507.93 489.147Z" fill="#B7C1D6" />
                                <path d="M701.234 573.69H696.426L694.065 569.494L696.426 565.385H701.234L703.682 569.494L701.234 573.69Z" fill="#B7C1D6" />
                                <path d="M713.299 568.183H707.267L704.207 562.937L707.267 557.691H713.299L716.359 562.937L713.299 568.183Z" fill="#B7C1D6" />
                                <path d="M724.753 561.626H718.633L715.573 556.38L718.633 551.047H724.753L727.813 556.38L724.753 561.626Z" fill="#B7C1D6" />
                                <path d="M736.118 555.067H730.086L727.026 549.734L730.086 544.488H736.118L739.178 549.734L736.118 555.067Z" fill="#B7C1D6" />
                                <path d="M747.571 548.423H741.451L738.391 543.177L741.451 537.932H747.571L750.631 543.177L747.571 548.423Z" fill="#B7C1D6" />
                                <path d="M758.937 541.866H752.905L749.845 536.62L752.905 531.287H758.937L761.997 536.62L758.937 541.866Z" fill="#B7C1D6" />
                                <path d="M770.39 535.309H764.27L761.21 529.976L764.27 524.73H770.39L773.45 529.976L770.39 535.309Z" fill="#B7C1D6" />
                                <path d="M781.756 528.665H775.723L772.663 523.42L775.723 518.174H781.756L784.816 523.42L781.756 528.665Z" fill="#B7C1D6" />
                                <path d="M793.209 522.019H787.177L784.117 516.861L787.177 511.615H793.209L796.182 516.861L793.209 522.019Z" fill="#B7C1D6" />
                                <path d="M870.933 353.632H869.185L868.223 352.146L869.185 350.572H870.933L871.807 352.146L870.933 353.632Z" fill="#B7C1D6" />
                                <path d="M873.031 344.191H866.999L863.939 338.945L866.999 333.699H873.031L876.091 338.945L873.031 344.191Z" fill="#B7C1D6" />
                                <path d="M873.031 331.075H866.999L863.939 325.742L866.999 320.496H873.031L876.091 325.742L873.031 331.075Z" fill="#B7C1D6" />
                                <path d="M873.031 317.874H866.999L863.939 312.628L866.999 307.295H873.031L876.091 312.628L873.031 317.874Z" fill="#B7C1D6" />
                                <path d="M873.031 304.673H866.999L863.939 299.427L866.999 294.182H873.031L876.091 299.427L873.031 304.673Z" fill="#B7C1D6" />
                                <path d="M873.031 291.47H866.999L863.939 286.224L866.999 280.979H873.031L876.091 286.224L873.031 291.47Z" fill="#B7C1D6" />
                                <path d="M873.031 278.356H866.999L863.939 273.023L866.999 267.777H873.031L876.091 273.023L873.031 278.356Z" fill="#B7C1D6" />
                                <path d="M873.031 265.155H866.999L863.939 259.909L866.999 254.576H873.031L876.091 259.909L873.031 265.155Z" fill="#B7C1D6" />
                                <path d="M873.031 251.952H866.999L863.939 246.707L866.999 241.461H873.031L876.091 246.707L873.031 251.952Z" fill="#B7C1D6" />
                                <path d="M861.666 245.395H855.546L852.573 240.15L855.546 234.816H861.666L864.726 240.15L861.666 245.395Z" fill="#B7C1D6" />
                                <path d="M850.213 238.839H844.18L841.12 233.505L844.18 228.26H850.213L853.273 233.505L850.213 238.839Z" fill="#B7C1D6" />
                                <path d="M838.847 232.195H832.727L829.754 226.949L832.727 221.703H838.847L841.907 226.949L838.847 232.195Z" fill="#B7C1D6" />
                                <path d="M827.394 225.637H821.361L818.301 220.392L821.361 215.059H827.394L830.454 220.392L827.394 225.637Z" fill="#B7C1D6" />
                                <path d="M816.028 219.081H809.908L806.848 213.748L809.908 208.502H816.028L819.088 213.748L816.028 219.081Z" fill="#B7C1D6" />
                                <path d="M804.575 212.435H798.542L795.482 207.189L798.542 201.943H804.575L807.635 207.189L804.575 212.435Z" fill="#B7C1D6" />
                                <path d="M793.209 205.878H787.089L784.029 200.632L787.089 195.299H793.209L796.269 200.632L793.209 205.878Z" fill="#B7C1D6" />
                                <path d="M781.756 199.234H775.723L772.663 193.988L775.723 188.742H781.756L784.816 193.988L781.756 199.234Z" fill="#B7C1D6" />
                                <path d="M770.39 192.677H764.27L761.21 187.431L764.27 182.186H770.39L773.45 187.431L770.39 192.677Z" fill="#B7C1D6" />
                                <path d="M758.937 186.12H752.905L749.845 180.787L752.905 175.541H758.937L761.997 180.787L758.937 186.12Z" fill="#B7C1D6" />
                                <path d="M747.484 179.387H741.539L738.479 174.229L741.539 169.07H747.484L750.457 174.229L747.484 179.387Z" fill="#B7C1D6" />
                                <path d="M736.118 172.83H730.086L727.113 167.671L730.086 162.426H736.118L739.091 167.671L736.118 172.83Z" fill="#B7C1D6" />
                                <path d="M724.753 166.36H718.633L715.573 161.027L718.633 155.781H724.753L727.813 161.027L724.753 166.36Z" fill="#B7C1D6" />
                                <path d="M711.988 157.443H708.578L706.83 154.471L708.578 151.498H711.988L713.737 154.471L711.988 157.443Z" fill="#B7C1D6" />
                                <path d="M701.934 153.159H695.814L692.754 147.913L695.814 142.58H701.934L704.994 147.913L701.934 153.159Z" fill="#B7C1D6" />
                                <path d="M690.306 146.339H684.535L681.65 141.269L684.535 136.285H690.306L693.191 141.269L690.306 146.339Z" fill="#B7C1D6" />
                                <path d="M473.658 482.589H467.625L464.565 477.255L467.625 472.01H473.658L476.718 477.255L473.658 482.589Z" fill="#B7C1D6" />
                                <path d="M485.111 489.147H478.991L475.931 483.902L478.991 478.568H485.111L488.171 483.902L485.111 489.147Z" fill="#B7C1D6" />
                                <path d="M496.477 495.704H490.444L487.384 490.459L490.444 485.213H496.477L499.537 490.459L496.477 495.704Z" fill="#B7C1D6" />
                                <path d="M507.667 501.999H502.072L499.187 497.015L502.072 492.119H507.667L510.553 497.015L507.667 501.999Z" fill="#B7C1D6" />
                                <path d="M699.923 584.619H697.737L696.688 582.695L697.737 580.859H699.923L701.059 582.695L699.923 584.619Z" fill="#B7C1D6" />
                                <path d="M713.299 581.384H707.267L704.207 576.138L707.267 570.805H713.299L716.359 576.138L713.299 581.384Z" fill="#B7C1D6" />
                                <path d="M724.753 574.827H718.633L715.573 569.494L718.633 564.248H724.753L727.813 569.494L724.753 574.827Z" fill="#B7C1D6" />
                                <path d="M736.118 568.183H730.086L727.026 562.937L730.086 557.691H736.118L739.178 562.937L736.118 568.183Z" fill="#B7C1D6" />
                                <path d="M747.571 561.626H741.451L738.391 556.38L741.451 551.047H747.571L750.631 556.38L747.571 561.626Z" fill="#B7C1D6" />
                                <path d="M758.937 555.067H752.905L749.845 549.734L752.905 544.488H758.937L761.997 549.734L758.937 555.067Z" fill="#B7C1D6" />
                                <path d="M770.39 548.423H764.27L761.21 543.177L764.27 537.932H770.39L773.45 543.177L770.39 548.423Z" fill="#B7C1D6" />
                                <path d="M781.231 540.817H776.335L773.887 536.62L776.335 532.336H781.231L783.592 536.62L781.231 540.817Z" fill="#B7C1D6" />
                                <path d="M791.023 531.463H789.275L788.401 529.976L789.275 528.49H791.023L791.898 529.976L791.023 531.463Z" fill="#B7C1D6" />
                                <path d="M826.957 514.675H821.798L819.175 510.217L821.798 505.758H826.957L829.579 510.217L826.957 514.675Z" fill="#B7C1D6" />
                                <path d="M884.485 350.747H878.452L875.392 345.502L878.452 340.256H884.485L887.545 345.502L884.485 350.747Z" fill="#B7C1D6" />
                                <path d="M884.485 337.634H878.365L875.392 332.388L878.365 327.055H884.485L887.545 332.388L884.485 337.634Z" fill="#B7C1D6" />
                                <path d="M884.485 324.431H878.365L875.392 319.185L878.365 313.939H884.485L887.545 319.185L884.485 324.431Z" fill="#B7C1D6" />
                                <path d="M884.485 311.23H878.365L875.392 305.984L878.365 300.738H884.485L887.545 305.984L884.485 311.23Z" fill="#B7C1D6" />
                                <path d="M884.485 298.116H878.365L875.392 292.87L878.365 287.537H884.485L887.545 292.87L884.485 298.116Z" fill="#B7C1D6" />
                                <path d="M884.485 284.913H878.365L875.392 279.668L878.365 274.422H884.485L887.545 279.668L884.485 284.913Z" fill="#B7C1D6" />
                                <path d="M884.485 271.712H878.365L875.392 266.466L878.365 261.221H884.485L887.545 266.466L884.485 271.712Z" fill="#B7C1D6" />
                                <path d="M884.485 258.598H878.365L875.392 253.265L878.365 248.02H884.485L887.545 253.265L884.485 258.598Z" fill="#B7C1D6" />
                                <path d="M884.485 245.395H878.365L875.392 240.15L878.365 234.816H884.485L887.545 240.15L884.485 245.395Z" fill="#B7C1D6" />
                                <path d="M873.031 238.839H866.999L863.939 233.505L866.999 228.26H873.031L876.091 233.505L873.031 238.839Z" fill="#B7C1D6" />
                                <path d="M861.666 232.195H855.546L852.573 226.949L855.546 221.703H861.666L864.726 226.949L861.666 232.195Z" fill="#B7C1D6" />
                                <path d="M850.213 225.637H844.18L841.12 220.392L844.18 215.059H850.213L853.273 220.392L850.213 225.637Z" fill="#D63129" />
                                <path d="M838.847 219.081H832.727L829.754 213.748L832.727 208.502H838.847L841.907 213.748L838.847 219.081Z" fill="#B7C1D6" />
                                <path d="M827.394 212.435H821.361L818.301 207.189L821.361 201.943H827.394L830.454 207.189L827.394 212.435Z" fill="#B7C1D6" />
                                <path d="M816.028 205.878H809.908L806.848 200.632L809.908 195.299H816.028L819.088 200.632L816.028 205.878Z" fill="#B7C1D6" />
                                <path d="M804.575 199.234H798.542L795.482 193.988L798.542 188.742H804.575L807.635 193.988L804.575 199.234Z" fill="#D63129" />
                                <path d="M793.209 192.677H787.089L784.029 187.431L787.089 182.186H793.209L796.269 187.431L793.209 192.677Z" fill="#B7C1D6" />
                                <path d="M781.756 186.12H775.723L772.663 180.787L775.723 175.541H781.756L784.816 180.787L781.756 186.12Z" fill="#B7C1D6" />
                                <path d="M770.39 179.476H764.27L761.21 174.23L764.27 168.984H770.39L773.45 174.23L770.39 179.476Z" fill="#B7C1D6" />
                                <path d="M758.937 172.917H752.905L749.845 167.671L752.905 162.338H758.937L761.997 167.671L758.937 172.917Z" fill="#B7C1D6" />
                                <path d="M747.571 166.36H741.451L738.391 161.027L741.451 155.781H747.571L750.631 161.027L747.571 166.36Z" fill="#B7C1D6" />
                                <path d="M736.118 159.716H730.086L727.026 154.47L730.086 149.225H736.118L739.178 154.47L736.118 159.716Z" fill="#B7C1D6" />
                                <path d="M723.179 150.536H720.119L718.633 147.913L720.119 145.203H723.179L724.753 147.913L723.179 150.536Z" fill="#B7C1D6" />
                                <path d="M713.299 146.602H707.267L704.207 141.269L707.267 136.023H713.299L716.359 141.269L713.299 146.602Z" fill="#049848" />
                                <path d="M701.934 139.956H695.814L692.754 134.711L695.814 129.465H701.934L704.994 134.711L701.934 139.956Z" fill="#B7C1D6" />
                                <path d="M473.133 468.425H468.15L465.702 464.141L468.15 459.857H473.133L475.581 464.141L473.133 468.425Z" fill="#B7C1D6" />
                                <path d="M462.292 489.147H456.172L453.112 483.902L456.172 478.568H462.292L465.352 483.902L462.292 489.147Z" fill="#B7C1D6" />
                                <path d="M473.658 495.704H467.625L464.565 490.459L467.625 485.213H473.658L476.718 490.459L473.658 495.704Z" fill="#B7C1D6" />
                                <path d="M485.111 502.348H478.991L475.931 497.015L478.991 491.77H485.111L488.171 497.015L485.111 502.348Z" fill="#B7C1D6" />
                                <path d="M496.477 508.905H490.444L487.384 503.66L490.444 498.414H496.477L499.537 503.66L496.477 508.905Z" fill="#B7C1D6" />
                                <path d="M713.299 594.587H707.267L704.207 589.254L707.267 584.008H713.299L716.359 589.254L713.299 594.587Z" fill="#B7C1D6" />
                                <path d="M724.753 587.941H718.633L715.573 582.695L718.633 577.449H724.753L727.813 582.695L724.753 587.941Z" fill="#B7C1D6" />
                                <path d="M736.118 581.384H730.086L727.026 576.138L730.086 570.805H736.118L739.178 576.138L736.118 581.384Z" fill="#B7C1D6" />
                                <path d="M747.571 574.827H741.451L738.391 569.494L741.451 564.248H747.571L750.631 569.494L747.571 574.827Z" fill="#B7C1D6" />
                                <path d="M758.937 568.183H752.905L749.845 562.937L752.905 557.691H758.937L761.997 562.937L758.937 568.183Z" fill="#B7C1D6" />
                                <path d="M770.39 561.626H764.27L761.21 556.38L764.27 551.047H770.39L773.45 556.38L770.39 561.626Z" fill="#B7C1D6" />
                                <path d="M779.221 550.608H778.259L777.822 549.734L778.259 548.947H779.221L779.658 549.734L779.221 550.608Z" fill="#B7C1D6" />
                                <path d="M816.028 535.309H809.908L806.848 529.976L809.908 524.73H816.028L819.088 529.976L816.028 535.309Z" fill="#B7C1D6" />
                                <path d="M827.394 528.665H821.361L818.301 523.42L821.361 518.174H827.394L830.454 523.42L827.394 528.665Z" fill="#B7C1D6" />
                                <path d="M894.801 355.555H890.867L888.856 352.146L890.867 348.648H894.801L896.812 352.146L894.801 355.555Z" fill="#B7C1D6" />
                                <path d="M895.938 344.191H889.818L886.758 338.945L889.818 333.699H895.938L898.91 338.945L895.938 344.191Z" fill="#B7C1D6" />
                                <path d="M895.938 331.075H889.818L886.758 325.742L889.818 320.496H895.938L898.91 325.742L895.938 331.075Z" fill="#B7C1D6" />
                                <path d="M895.938 317.874H889.818L886.758 312.628L889.818 307.295H895.938L898.91 312.628L895.938 317.874Z" fill="#B7C1D6" />
                                <path d="M895.938 304.673H889.818L886.758 299.427L889.818 294.182H895.938L898.91 299.427L895.938 304.673Z" fill="#B7C1D6" />
                                <path d="M895.938 291.47H889.818L886.758 286.224L889.818 280.979H895.938L898.91 286.224L895.938 291.47Z" fill="#B7C1D6" />
                                <path d="M895.938 278.356H889.818L886.758 273.023L889.818 267.777H895.938L898.91 273.023L895.938 278.356Z" fill="#B7C1D6" />
                                <path d="M895.938 265.155H889.818L886.758 259.909L889.818 254.576H895.938L898.91 259.909L895.938 265.155Z" fill="#B7C1D6" />
                                <path d="M895.938 251.952H889.818L886.758 246.707L889.818 241.461H895.938L898.91 246.707L895.938 251.952Z" fill="#B7C1D6" />
                                <path d="M895.938 238.839H889.818L886.758 233.505L889.818 228.26H895.938L898.91 233.505L895.938 238.839Z" fill="#B7C1D6" />
                                <path d="M884.485 232.195H878.365L875.392 226.949L878.365 221.703H884.485L887.545 226.949L884.485 232.195Z" fill="#B7C1D6" />
                                <path d="M873.031 225.637H866.999L863.939 220.392L866.999 215.059H873.031L876.091 220.392L873.031 225.637Z" fill="#B7C1D6" />
                                <path d="M861.666 219.081H855.546L852.573 213.748L855.546 208.502H861.666L864.726 213.748L861.666 219.081Z" fill="#B7C1D6" />
                                <path d="M850.213 212.435H844.18L841.12 207.189L844.18 201.943H850.213L853.273 207.189L850.213 212.435Z" fill="#B7C1D6" />
                                <path d="M838.847 205.878H832.727L829.754 200.632L832.727 195.299H838.847L841.907 200.632L838.847 205.878Z" fill="#B7C1D6" />
                                <path d="M827.394 199.234H821.361L818.301 193.988L821.361 188.742H827.394L830.454 193.988L827.394 199.234Z" fill="#B7C1D6" />
                                <path d="M816.028 192.677H809.908L806.848 187.431L809.908 182.186H816.028L819.088 187.431L816.028 192.677Z" fill="#B7C1D6" />
                                <path d="M804.575 186.12H798.542L795.482 180.787L798.542 175.541H804.575L807.635 180.787L804.575 186.12Z" fill="#B7C1D6" />
                                <path d="M793.209 179.476H787.089L784.029 174.23L787.089 168.984H793.209L796.269 174.23L793.209 179.476Z" fill="#B7C1D6" />
                                <path d="M781.756 172.917H775.723L772.663 167.671L775.723 162.338H781.756L784.816 167.671L781.756 172.917Z" fill="#B7C1D6" />
                                <path d="M770.39 166.36H764.27L761.21 161.027L764.27 155.781H770.39L773.45 161.027L770.39 166.36Z" fill="#B7C1D6" />
                                <path d="M758.937 159.716H752.905L749.845 154.47L752.905 149.225H758.937L761.997 154.47L758.937 159.716Z" fill="#B7C1D6" />
                                <path d="M747.571 153.159H741.451L738.391 147.913L741.451 142.58H747.571L750.631 147.913L747.571 153.159Z" fill="#B7C1D6" />
                                <path d="M736.118 146.602H730.086L727.026 141.269L730.086 136.023H736.118L739.178 141.269L736.118 146.602Z" fill="#B7C1D6" />
                                <path d="M724.665 139.956H718.72L715.66 134.711L718.72 129.465H724.665L727.725 134.711L724.665 139.956Z" fill="#B7C1D6" />
                                <path d="M713.299 133.399H707.267L704.207 128.153L707.267 122.82H713.299L716.359 128.153L713.299 133.399Z" fill="#B7C1D6" />
                                <path d="M701.234 125.532H696.513L694.24 121.51L696.513 117.488H701.234L703.507 121.51L701.234 125.532Z" fill="#B7C1D6" />
                                <path d="M461.068 460.732H457.396L455.56 457.497L457.396 454.35H461.068L462.904 457.497L461.068 460.732Z" fill="#B7C1D6" />
                                <path d="M462.292 475.945H456.172L453.112 470.699L456.172 465.453H462.292L465.352 470.699L462.292 475.945Z" fill="#B7C1D6" />
                                <path d="M450.839 495.704H444.806L441.746 490.459L444.806 485.213H450.839L453.899 490.459L450.839 495.704Z" fill="#B7C1D6" />
                                <path d="M462.292 502.348H456.172L453.112 497.015L456.172 491.77H462.292L465.352 497.015L462.292 502.348Z" fill="#B7C1D6" />
                                <path d="M473.658 508.905H467.625L464.565 503.66L467.625 498.414H473.658L476.718 503.66L473.658 508.905Z" fill="#B7C1D6" />
                                <path d="M485.111 515.462H478.991L475.931 510.216L478.991 504.971H485.111L488.171 510.216L485.111 515.462Z" fill="#B7C1D6" />
                                <path d="M495.952 521.146H490.969L488.433 516.862L490.969 512.49H495.952L498.487 516.862L495.952 521.146Z" fill="#B7C1D6" />
                                <path d="M712.95 607.001H707.617L704.994 602.454L707.617 597.908H712.95L715.573 602.454L712.95 607.001Z" fill="#D63129" />
                                <path d="M724.753 601.142H718.633L715.573 595.896L718.633 590.65H724.753L727.813 595.896L724.753 601.142Z" fill="#B7C1D6" />
                                <path d="M736.118 594.587H730.086L727.026 589.254L730.086 584.008H736.118L739.178 589.254L736.118 594.587Z" fill="#B7C1D6" />
                                <path d="M747.571 587.941H741.451L738.391 582.695L741.451 577.449H747.571L750.631 582.695L747.571 587.941Z" fill="#B7C1D6" />
                                <path d="M758.937 581.384H752.905L749.845 576.138L752.905 570.805H758.937L761.997 576.138L758.937 581.384Z" fill="#B7C1D6" />
                                <path d="M767.855 570.455H766.806L766.194 569.493L766.806 568.531H767.855L768.467 569.493L767.855 570.455Z" fill="#B7C1D6" />
                                <path d="M802.739 551.745H800.378L799.242 549.734L800.378 547.811H802.739L803.875 549.734L802.739 551.745Z" fill="#B7C1D6" />
                                <path d="M816.028 548.423H809.908L806.848 543.177L809.908 537.932H816.028L819.088 543.177L816.028 548.423Z" fill="#B7C1D6" />
                                <path d="M827.219 541.516H821.536L818.738 536.62L821.536 531.637H827.219L830.104 536.62L827.219 541.516Z" fill="#B7C1D6" />
                                <path d="M907.129 363.688H901.358L898.473 358.704L901.358 353.721H907.129L910.014 358.704L907.129 363.688Z" fill="#B7C1D6" />
                                <path d="M907.303 350.835H901.183L898.211 345.502L901.183 340.256H907.303L910.363 345.502L907.303 350.835Z" fill="#B7C1D6" />
                                <path d="M907.303 337.634H901.183L898.211 332.388L901.183 327.055H907.303L910.363 332.388L907.303 337.634Z" fill="#B7C1D6" />
                                <path d="M907.303 324.431H901.183L898.211 319.185L901.183 313.939H907.303L910.363 319.185L907.303 324.431Z" fill="#B7C1D6" />
                                <path d="M907.303 311.23H901.183L898.211 305.984L901.183 300.738H907.303L910.363 305.984L907.303 311.23Z" fill="#B7C1D6" />
                                <path d="M907.303 298.116H901.183L898.211 292.87L901.183 287.537H907.303L910.363 292.87L907.303 298.116Z" fill="#B7C1D6" />
                                <path d="M907.303 284.913H901.183L898.211 279.668L901.183 274.422H907.303L910.363 279.668L907.303 284.913Z" fill="#B7C1D6" />
                                <path d="M907.303 271.712H901.183L898.211 266.466L901.183 261.221H907.303L910.363 266.466L907.303 271.712Z" fill="#B7C1D6" />
                                <path d="M907.303 258.598H901.183L898.211 253.265L901.183 248.02H907.303L910.363 253.265L907.303 258.598Z" fill="#B7C1D6" />
                                <path d="M907.303 245.395H901.183L898.211 240.15L901.183 234.816H907.303L910.363 240.15L907.303 245.395Z" fill="#B7C1D6" />
                                <path d="M907.303 232.195H901.183L898.211 226.949L901.183 221.703H907.303L910.363 226.949L907.303 232.195Z" fill="#B7C1D6" />
                                <path d="M895.938 225.637H889.818L886.758 220.392L889.818 215.059H895.938L898.91 220.392L895.938 225.637Z" fill="#B7C1D6" />
                                <path d="M884.485 219.081H878.365L875.392 213.748L878.365 208.502H884.485L887.545 213.748L884.485 219.081Z" fill="#B7C1D6" />
                                <path d="M873.031 212.435H866.999L863.939 207.189L866.999 201.943H873.031L876.091 207.189L873.031 212.435Z" fill="#B7C1D6" />
                                <path d="M861.666 205.878H855.546L852.573 200.632L855.546 195.299H861.666L864.726 200.632L861.666 205.878Z" fill="#B7C1D6" />
                                <path d="M850.213 199.234H844.18L841.12 193.988L844.18 188.742H850.213L853.273 193.988L850.213 199.234Z" fill="#B7C1D6" />
                                <path d="M838.847 192.677H832.727L829.754 187.431L832.727 182.186H838.847L841.907 187.431L838.847 192.677Z" fill="#B7C1D6" />
                                <path d="M827.394 186.12H821.361L818.301 180.787L821.361 175.541H827.394L830.454 180.787L827.394 186.12Z" fill="#B7C1D6" />
                                <path d="M816.028 179.476H809.908L806.848 174.23L809.908 168.984H816.028L819.088 174.23L816.028 179.476Z" fill="#B7C1D6" />
                                <path d="M804.575 172.917H798.542L795.482 167.671L798.542 162.338H804.575L807.635 167.671L804.575 172.917Z" fill="#B7C1D6" />
                                <path d="M793.209 166.36H787.089L784.029 161.027L787.089 155.781H793.209L796.269 161.027L793.209 166.36Z" fill="#B7C1D6" />
                                <path d="M781.756 159.716H775.723L772.663 154.47L775.723 149.225H781.756L784.816 154.47L781.756 159.716Z" fill="#B7C1D6" />
                                <path d="M769.691 152.023H764.97L762.522 147.913L764.97 143.717H769.691L772.139 147.913L769.691 152.023Z" fill="#B7C1D6" />
                                <path d="M758.937 146.602H752.905L749.845 141.269L752.905 136.023H758.937L761.997 141.269L758.937 146.602Z" fill="#B7C1D6" />
                                <path d="M747.571 139.956H741.451L738.391 134.711L741.451 129.465H747.571L750.631 134.711L747.571 139.956Z" fill="#B7C1D6" />
                                <path d="M736.118 133.399H730.086L727.026 128.153L730.086 122.82H736.118L739.178 128.153L736.118 133.399Z" fill="#B7C1D6" />
                                <path d="M724.753 126.843H718.633L715.573 121.509L718.633 116.264H724.753L727.813 121.509L724.753 126.843Z" fill="#B7C1D6" />
                                <path d="M712.95 119.586H707.617L704.906 114.952L707.617 110.318H712.95L715.66 114.952L712.95 119.586Z" fill="#B7C1D6" />
                                <path d="M598.768 145.727H593.61L591.074 141.268L593.61 136.896H598.768L601.303 141.268L598.768 145.727Z" fill="#B7C1D6" />
                                <path d="M587.49 152.635H581.982L579.271 147.914L581.982 143.105H587.49L590.287 147.914L587.49 152.635Z" fill="#B7C1D6" />
                                <path d="M450.751 245.221H444.894L441.921 240.15L444.894 234.992H450.751L453.724 240.15L450.751 245.221Z" fill="#B7C1D6" />
                                <path d="M449.79 441.149H445.855L443.845 437.74L445.855 434.33H449.79L451.801 437.74L449.79 441.149Z" fill="#B7C1D6" />
                                <path d="M450.751 456.011H444.894L441.921 450.94L444.894 445.869H450.751L453.724 450.94L450.751 456.011Z" fill="#B7C1D6" />
                                <path d="M450.839 469.387H444.806L441.746 464.142L444.806 458.809H450.839L453.899 464.142L450.839 469.387Z" fill="#B7C1D6" />
                                <path d="M450.839 482.589H444.806L441.746 477.255L444.806 472.01H450.839L453.899 477.255L450.839 482.589Z" fill="#B7C1D6" />
                                <path d="M439.473 502.348H433.353L430.293 497.015L433.353 491.77H439.473L442.533 497.015L439.473 502.348Z" fill="#B7C1D6" />
                                <path d="M450.839 508.905H444.806L441.746 503.66L444.806 498.414H450.839L453.899 503.66L450.839 508.905Z" fill="#B7C1D6" />
                                <path d="M462.292 515.462H456.172L453.112 510.216L456.172 504.971H462.292L465.352 510.216L462.292 515.462Z" fill="#B7C1D6" />
                                <path d="M473.658 522.108H467.625L464.565 516.862L467.625 511.529H473.658L476.718 516.862L473.658 522.108Z" fill="#B7C1D6" />
                                <path d="M485.111 528.665H478.991L475.931 523.42L478.991 518.174H485.111L488.171 523.42L485.111 528.665Z" fill="#B7C1D6" />
                                <path d="M494.203 531.2H492.805L492.105 529.976L492.805 528.84H494.203L494.815 529.976L494.203 531.2Z" fill="#B7C1D6" />
                                <path d="M723.354 611.896H720.031L718.37 609.011L720.031 606.213H723.354L725.015 609.011L723.354 611.896Z" fill="#B7C1D6" />
                                <path d="M735.506 606.564H730.698L728.337 602.455L730.698 598.346H735.506L737.867 602.455L735.506 606.564Z" fill="#B7C1D6" />
                                <path d="M747.484 600.967H741.539L738.566 595.897L741.539 590.738H747.484L750.457 595.897L747.484 600.967Z" fill="#B7C1D6" />
                                <path d="M756.489 590.215H755.353L754.828 589.253L755.353 588.379H756.489L757.014 589.253L756.489 590.215Z" fill="#B7C1D6" />
                                <path d="M802.651 564.861H800.466L799.329 562.937L800.466 561.014H802.651L803.788 562.937L802.651 564.861Z" fill="#B7C1D6" />
                                <path d="M816.028 561.626H809.908L806.848 556.38L809.908 551.047H816.028L819.088 556.38L816.028 561.626Z" fill="#B7C1D6" />
                                <path d="M826.257 553.057H822.498L820.574 549.735L822.498 546.5H826.257L828.181 549.735L826.257 553.057Z" fill="#B7C1D6" />
                                <path d="M916.571 393.237H914.735L913.773 391.663L914.735 390.002H916.571L917.533 391.663L916.571 393.237Z" fill="#B7C1D6" />
                                <path d="M918.582 383.445H912.811L909.926 378.462L912.811 373.479H918.582L921.467 378.462L918.582 383.445Z" fill="#B7C1D6" />
                                <path d="M918.757 370.594H912.637L909.577 365.261L912.637 360.016H918.757L921.729 365.261L918.757 370.594Z" fill="#B7C1D6" />
                                <path d="M918.757 357.391H912.637L909.577 352.146L912.637 346.812H918.757L921.729 352.146L918.757 357.391Z" fill="#B7C1D6" />
                                <path d="M918.757 344.191H912.637L909.577 338.945L912.637 333.699H918.757L921.729 338.945L918.757 344.191Z" fill="#B7C1D6" />
                                <path d="M918.757 331.075H912.637L909.577 325.742L912.637 320.496H918.757L921.729 325.742L918.757 331.075Z" fill="#B7C1D6" />
                                <path d="M918.757 317.874H912.637L909.577 312.628L912.637 307.295H918.757L921.729 312.628L918.757 317.874Z" fill="#B7C1D6" />
                                <path d="M918.757 304.673H912.637L909.577 299.427L912.637 294.182H918.757L921.729 299.427L918.757 304.673Z" fill="#B7C1D6" />
                                <path d="M918.757 291.47H912.637L909.577 286.224L912.637 280.979H918.757L921.729 286.224L918.757 291.47Z" fill="#B7C1D6" />
                                <path d="M918.757 278.356H912.637L909.577 273.023L912.637 267.777H918.757L921.729 273.023L918.757 278.356Z" fill="#B7C1D6" />
                                <path d="M918.757 265.155H912.637L909.577 259.909L912.637 254.576H918.757L921.729 259.909L918.757 265.155Z" fill="#B7C1D6" />
                                <path d="M918.757 251.952H912.637L909.577 246.707L912.637 241.461H918.757L921.729 246.707L918.757 251.952Z" fill="#B7C1D6" />
                                <path d="M918.757 238.839H912.637L909.577 233.505L912.637 228.26H918.757L921.729 233.505L918.757 238.839Z" fill="#B7C1D6" />
                                <path d="M918.757 225.637H912.637L909.577 220.392L912.637 215.059H918.757L921.729 220.392L918.757 225.637Z" fill="#B7C1D6" />
                                <path d="M907.303 219.081H901.183L898.211 213.748L901.183 208.502H907.303L910.363 213.748L907.303 219.081Z" fill="#B7C1D6" />
                                <path d="M895.938 212.435H889.818L886.758 207.189L889.818 201.943H895.938L898.91 207.189L895.938 212.435Z" fill="#B7C1D6" />
                                <path d="M884.485 205.878H878.365L875.392 200.632L878.365 195.299H884.485L887.545 200.632L884.485 205.878Z" fill="#B7C1D6" />
                                <path d="M873.031 199.234H866.999L863.939 193.988L866.999 188.742H873.031L876.091 193.988L873.031 199.234Z" fill="#B7C1D6" />
                                <path d="M861.666 192.677H855.546L852.573 187.431L855.546 182.186H861.666L864.726 187.431L861.666 192.677Z" fill="#B7C1D6" />
                                <path d="M850.213 186.12H844.18L841.12 180.787L844.18 175.541H850.213L853.273 180.787L850.213 186.12Z" fill="#B7C1D6" />
                                <path d="M838.847 179.476H832.727L829.754 174.23L832.727 168.984H838.847L841.907 174.23L838.847 179.476Z" fill="#B7C1D6" />
                                <path d="M827.394 172.917H821.361L818.301 167.671L821.361 162.338H827.394L830.454 167.671L827.394 172.917Z" fill="#B7C1D6" />
                                <path d="M816.028 166.36H809.908L806.848 161.027L809.908 155.781H816.028L819.088 161.027L816.028 166.36Z" fill="#B7C1D6" />
                                <path d="M804.575 159.716H798.542L795.482 154.47L798.542 149.225H804.575L807.635 154.47L804.575 159.716Z" fill="#B7C1D6" />
                                <path d="M793.209 153.159H787.089L784.029 147.913L787.089 142.58H793.209L796.269 147.913L793.209 153.159Z" fill="#B7C1D6" />
                                <path d="M781.581 146.252H775.898L773.101 141.269L775.898 136.373H781.581L784.466 141.269L781.581 146.252Z" fill="#B7C1D6" />
                                <path d="M758.937 133.4H752.905L749.845 128.154L752.905 122.908H758.937L761.997 128.154L758.937 133.4Z" fill="#B7C1D6" />
                                <path d="M747.571 126.843H741.451L738.391 121.509L741.451 116.264H747.571L750.631 121.509L747.571 126.843Z" fill="#B7C1D6" />
                                <path d="M736.118 120.198H730.086L727.026 114.953L730.086 109.707H736.118L739.178 114.953L736.118 120.198Z" fill="#B7C1D6" />
                                <path d="M724.315 112.942H719.07L716.447 108.395L719.07 103.762H724.315L726.938 108.395L724.315 112.942Z" fill="#B7C1D6" />
                                <path d="M587.402 139.257H582.157L579.534 134.71L582.157 130.164H587.402L590.025 134.71L587.402 139.257Z" fill="#B7C1D6" />
                                <path d="M576.299 146.515H570.354L567.381 141.27L570.354 136.111H576.299L579.359 141.27L576.299 146.515Z" fill="#B7C1D6" />
                                <path d="M439.123 225.025H433.703L430.993 220.391L433.703 215.67H439.123L441.834 220.391L439.123 225.025Z" fill="#B7C1D6" />
                                <path d="M438.599 237.352H434.227L432.042 233.506L434.227 229.746H438.599L440.785 233.506L438.599 237.352Z" fill="#B7C1D6" />
                                <path d="M438.074 433.978H434.752L433.178 431.181L434.752 428.383H438.074L439.648 431.181L438.074 433.978Z" fill="#B7C1D6" />
                                <path d="M439.473 449.63H433.353L430.293 444.384L433.353 439.051H439.473L442.533 444.384L439.473 449.63Z" fill="#B7C1D6" />
                                <path d="M439.473 462.831H433.353L430.293 457.498L433.353 452.252H439.473L442.533 457.498L439.473 462.831Z" fill="#B7C1D6" />
                                <path d="M439.473 475.945H433.353L430.293 470.699L433.353 465.453H439.473L442.533 470.699L439.473 475.945Z" fill="#B7C1D6" />
                                <path d="M439.473 489.147H433.353L430.293 483.902L433.353 478.568H439.473L442.533 483.902L439.473 489.147Z" fill="#B7C1D6" />
                                <path d="M428.02 508.905H421.987L418.927 503.66L421.987 498.414H428.02L431.08 503.66L428.02 508.905Z" fill="#B7C1D6" />
                                <path d="M439.473 515.462H433.353L430.293 510.216L433.353 504.971H439.473L442.533 510.216L439.473 515.462Z" fill="#B7C1D6" />
                                <path d="M450.839 522.108H444.806L441.746 516.862L444.806 511.529H450.839L453.899 516.862L450.839 522.108Z" fill="#B7C1D6" />
                                <path d="M462.292 528.665H456.172L453.112 523.42L456.172 518.174H462.292L465.352 523.42L462.292 528.665Z" fill="#B7C1D6" />
                                <path d="M473.658 535.309H467.625L464.565 529.976L467.625 524.73H473.658L476.718 529.976L473.658 535.309Z" fill="#B7C1D6" />
                                <path d="M485.111 541.866H478.991L475.931 536.62L478.991 531.287H485.111L488.171 536.62L485.111 541.866Z" fill="#B7C1D6" />
                                <path d="M814.367 571.854H811.657L810.258 569.494L811.657 567.221H814.367L815.678 569.494L814.367 571.854Z" fill="#B7C1D6" />
                                <path d="M928.374 413.608H925.838L924.527 411.422L925.838 409.236H928.374L929.598 411.422L928.374 413.608Z" fill="#B7C1D6" />
                                <path d="M930.122 403.466H924.09L921.03 398.22L924.09 392.975H930.122L933.182 398.22L930.122 403.466Z" fill="#B7C1D6" />
                                <path d="M930.122 390.352H924.002L921.03 385.019L924.002 379.773H930.122L933.182 385.019L930.122 390.352Z" fill="#B7C1D6" />
                                <path d="M930.122 377.151H924.002L921.03 371.905L924.002 366.572H930.122L933.182 371.905L930.122 377.151Z" fill="#B7C1D6" />
                                <path d="M930.093 363.693H923.973L921 358.447L923.973 353.201H930.093L933.153 358.447L930.093 363.693Z" fill="#D63129" />
                                <path d="M930.093 350.579H923.973L921 345.246L923.973 340H930.093L933.153 345.246L930.093 350.579Z" fill="#D63129" />
                                <path d="M930.122 337.634H924.002L921.03 332.388L924.002 327.055H930.122L933.182 332.388L930.122 337.634Z" fill="#B7C1D6" />
                                <path d="M930.122 324.431H924.002L921.03 319.185L924.002 313.939H930.122L933.182 319.185L930.122 324.431Z" fill="#B7C1D6" />
                                <path d="M930.122 311.23H924.002L921.03 305.984L924.002 300.738H930.122L933.182 305.984L930.122 311.23Z" fill="#B7C1D6" />
                                <path d="M930.122 298.116H924.002L921.03 292.87L924.002 287.537H930.122L933.182 292.87L930.122 298.116Z" fill="#B7C1D6" />
                                <path d="M930.122 284.913H924.002L921.03 279.668L924.002 274.422H930.122L933.182 279.668L930.122 284.913Z" fill="#B7C1D6" />
                                <path d="M930.122 271.712H924.002L921.03 266.466L924.002 261.221H930.122L933.182 266.466L930.122 271.712Z" fill="#B7C1D6" />
                                <path d="M930.122 258.598H924.002L921.03 253.265L924.002 248.02H930.122L933.182 253.265L930.122 258.598Z" fill="#B7C1D6" />
                                <path d="M930.122 245.395H924.002L921.03 240.15L924.002 234.816H930.122L933.182 240.15L930.122 245.395Z" fill="#B7C1D6" />
                                <path d="M930.122 232.195H924.002L921.03 226.949L924.002 221.703H930.122L933.182 226.949L930.122 232.195Z" fill="#B7C1D6" />
                                <path d="M930.122 219.081H924.002L921.03 213.748L924.002 208.502H930.122L933.182 213.748L930.122 219.081Z" fill="#B7C1D6" />
                                <path d="M918.757 212.435H912.637L909.577 207.189L912.637 201.943H918.757L921.729 207.189L918.757 212.435Z" fill="#B7C1D6" />
                                <path d="M907.303 205.878H901.183L898.211 200.632L901.183 195.299H907.303L910.363 200.632L907.303 205.878Z" fill="#B7C1D6" />
                                <path d="M895.938 199.234H889.818L886.758 193.988L889.818 188.742H895.938L898.91 193.988L895.938 199.234Z" fill="#B7C1D6" />
                                <path d="M884.485 192.677H878.365L875.392 187.431L878.365 182.186H884.485L887.545 187.431L884.485 192.677Z" fill="#B7C1D6" />
                                <path d="M873.031 186.12H866.999L863.939 180.787L866.999 175.541H873.031L876.091 180.787L873.031 186.12Z" fill="#B7C1D6" />
                                <path d="M861.666 179.476H855.546L852.573 174.23L855.546 168.984H861.666L864.726 174.23L861.666 179.476Z" fill="#B7C1D6" />
                                <path d="M850.213 172.917H844.18L841.12 167.671L844.18 162.338H850.213L853.273 167.671L850.213 172.917Z" fill="#B7C1D6" />
                                <path d="M838.847 166.36H832.727L829.754 161.027L832.727 155.781H838.847L841.907 161.027L838.847 166.36Z" fill="#B7C1D6" />
                                <path d="M827.394 159.716H821.361L818.301 154.47L821.361 149.225H827.394L830.454 154.47L827.394 159.716Z" fill="#B7C1D6" />
                                <path d="M816.028 153.159H809.908L806.848 147.913L809.908 142.58H816.028L819.088 147.913L816.028 153.159Z" fill="#B7C1D6" />
                                <path d="M804.575 146.602H798.542L795.482 141.269L798.542 136.023H804.575L807.635 141.269L804.575 146.602Z" fill="#B7C1D6" />
                                <path d="M793.122 139.869H787.177L784.204 134.711L787.177 129.553H793.122L796.094 134.711L793.122 139.869Z" fill="#B7C1D6" />
                                <path d="M781.581 133.049H775.898L773.013 128.153L775.898 123.17H781.581L784.466 128.153L781.581 133.049Z" fill="#B7C1D6" />
                                <path d="M770.215 126.58H764.445L761.56 121.509L764.445 116.525H770.215L773.101 121.509L770.215 126.58Z" fill="#B7C1D6" />
                                <path d="M758.325 119.149H753.517L751.069 114.952L753.517 110.668H758.325L760.773 114.952L758.325 119.149Z" fill="#B7C1D6" />
                                <path d="M746.959 112.592H742.063L739.615 108.395L742.063 104.111H746.959L749.407 108.395L746.959 112.592Z" fill="#B7C1D6" />
                                <path d="M734.894 104.898H731.31L729.474 101.751L731.31 98.6035H734.894L736.73 101.751L734.894 104.898Z" fill="#B7C1D6" />
                                <path d="M574.813 130.69H571.84L570.441 128.155L571.84 125.619H574.813L576.299 128.155L574.813 130.69Z" fill="#B7C1D6" />
                                <path d="M494.815 176.503H492.193L490.881 174.23L492.193 171.957H494.815L496.127 174.23L494.815 176.503Z" fill="#B7C1D6" />
                                <path d="M438.424 210.775H434.402L432.304 207.19L434.402 203.605H438.424L440.522 207.19L438.424 210.775Z" fill="#B7C1D6" />
                                <path d="M428.02 219.081H421.987L418.927 213.748L421.987 208.502H428.02L431.08 213.748L428.02 219.081Z" fill="#B7C1D6" />
                                <path d="M426.709 229.922H423.299L421.638 226.949L423.299 223.977H426.709L428.37 226.949L426.709 229.922Z" fill="#B7C1D6" />
                                <path d="M426.097 426.461H423.911L422.862 424.625L423.911 422.701H426.097L427.146 424.625L426.097 426.461Z" fill="#B7C1D6" />
                                <path d="M428.02 443.071H421.987L418.927 437.738L421.987 432.492H428.02L431.08 437.738L428.02 443.071Z" fill="#B7C1D6" />
                                <path d="M428.02 456.187H421.987L418.927 450.941L421.987 445.695H428.02L431.08 450.941L428.02 456.187Z" fill="#B7C1D6" />
                                <path d="M428.02 469.387H421.987L418.927 464.142L421.987 458.809H428.02L431.08 464.142L428.02 469.387Z" fill="#B7C1D6" />
                                <path d="M428.02 482.589H421.987L418.927 477.255L421.987 472.01H428.02L431.08 477.255L428.02 482.589Z" fill="#B7C1D6" />
                                <path d="M428.02 495.704H421.987L418.927 490.459L421.987 485.213H428.02L431.08 490.459L428.02 495.704Z" fill="#B7C1D6" />
                                <path d="M416.654 515.462H410.534L407.474 510.216L410.534 504.971H416.654L419.714 510.216L416.654 515.462Z" fill="#B7C1D6" />
                                <path d="M428.02 522.108H421.987L418.927 516.862L421.987 511.529H428.02L431.08 516.862L428.02 522.108Z" fill="#B7C1D6" />
                                <path d="M439.473 528.665H433.353L430.293 523.42L433.353 518.174H439.473L442.533 523.42L439.473 528.665Z" fill="#B7C1D6" />
                                <path d="M450.839 535.309H444.806L441.746 529.976L444.806 524.73H450.839L453.899 529.976L450.839 535.309Z" fill="#B7C1D6" />
                                <path d="M462.292 541.866H456.172L453.112 536.62L456.172 531.287H462.292L465.352 536.62L462.292 541.866Z" fill="#B7C1D6" />
                                <path d="M473.658 548.423H467.625L464.565 543.177L467.625 537.932H473.658L476.718 543.177L473.658 548.423Z" fill="#B7C1D6" />
                                <path d="M485.111 555.067H478.991L475.931 549.734L478.991 544.488H485.111L488.171 549.734L485.111 555.067Z" fill="#B7C1D6" />
                                <path d="M940.701 421.827H936.242L934.057 417.98L936.242 414.133H940.701L942.974 417.98L940.701 421.827Z" fill="#B7C1D6" />
                                <path d="M941.575 410.112H935.455L932.395 404.866L935.455 399.533H941.575L944.548 404.866L941.575 410.112Z" fill="#B7C1D6" />
                                <path d="M941.575 396.909H935.455L932.395 391.664L935.455 386.418H941.575L944.548 391.664L941.575 396.909Z" fill="#B7C1D6" />
                                <path d="M941.575 383.708H935.455L932.395 378.463L935.455 373.217H941.575L944.548 378.463L941.575 383.708Z" fill="#B7C1D6" />
                                <path d="M941.546 370.339H935.426L932.366 365.005L935.426 359.76H941.546L944.518 365.005L941.546 370.339Z" fill="#D63129" />
                                <path d="M941.575 357.391H935.455L932.395 352.146L935.455 346.812H941.575L944.548 352.146L941.575 357.391Z" fill="#049848" />
                                <path d="M941.575 344.191H935.455L932.395 338.945L935.455 333.699H941.575L944.548 338.945L941.575 344.191Z" fill="#049848" />
                                <path d="M941.575 331.075H935.455L932.395 325.742L935.455 320.496H941.575L944.548 325.742L941.575 331.075Z" fill="#B7C1D6" />
                                <path d="M941.575 317.874H935.455L932.395 312.628L935.455 307.295H941.575L944.548 312.628L941.575 317.874Z" fill="#B7C1D6" />
                                <path d="M941.575 304.673H935.455L932.395 299.427L935.455 294.182H941.575L944.548 299.427L941.575 304.673Z" fill="#B7C1D6" />
                                <path d="M941.575 291.47H935.455L932.395 286.224L935.455 280.979H941.575L944.548 286.224L941.575 291.47Z" fill="#B7C1D6" />
                                <path d="M941.575 278.356H935.455L932.395 273.023L935.455 267.777H941.575L944.548 273.023L941.575 278.356Z" fill="#B7C1D6" />
                                <path d="M941.575 265.155H935.455L932.395 259.909L935.455 254.576H941.575L944.548 259.909L941.575 265.155Z" fill="#B7C1D6" />
                                <path d="M941.575 251.952H935.455L932.395 246.707L935.455 241.461H941.575L944.548 246.707L941.575 251.952Z" fill="#B7C1D6" />
                                <path d="M941.575 238.839H935.455L932.395 233.505L935.455 228.26H941.575L944.548 233.505L941.575 238.839Z" fill="#B7C1D6" />
                                <path d="M941.575 225.637H935.455L932.395 220.392L935.455 215.059H941.575L944.548 220.392L941.575 225.637Z" fill="#B7C1D6" />
                                <path d="M941.575 212.435H935.455L932.395 207.189L935.455 201.943H941.575L944.548 207.189L941.575 212.435Z" fill="#B7C1D6" />
                                <path d="M930.122 205.878H924.002L921.03 200.632L924.002 195.299H930.122L933.182 200.632L930.122 205.878Z" fill="#B7C1D6" />
                                <path d="M918.757 199.234H912.637L909.577 193.988L912.637 188.742H918.757L921.729 193.988L918.757 199.234Z" fill="#B7C1D6" />
                                <path d="M907.303 192.677H901.183L898.211 187.431L901.183 182.186H907.303L910.363 187.431L907.303 192.677Z" fill="#B7C1D6" />
                                <path d="M895.938 186.12H889.818L886.758 180.787L889.818 175.541H895.938L898.91 180.787L895.938 186.12Z" fill="#B7C1D6" />
                                <path d="M884.485 179.476H878.365L875.392 174.23L878.365 168.984H884.485L887.545 174.23L884.485 179.476Z" fill="#B7C1D6" />
                                <path d="M873.031 172.917H866.999L863.939 167.671L866.999 162.338H873.031L876.091 167.671L873.031 172.917Z" fill="#B7C1D6" />
                                <path d="M861.666 166.36H855.546L852.573 161.027L855.546 155.781H861.666L864.726 161.027L861.666 166.36Z" fill="#B7C1D6" />
                                <path d="M850.213 159.716H844.18L841.12 154.47L844.18 149.225H850.213L853.273 154.47L850.213 159.716Z" fill="#B7C1D6" />
                                <path d="M838.847 153.159H832.727L829.754 147.913L832.727 142.58H838.847L841.907 147.913L838.847 153.159Z" fill="#B7C1D6" />
                                <path d="M827.394 146.602H821.361L818.301 141.269L821.361 136.023H827.394L830.454 141.269L827.394 146.602Z" fill="#B7C1D6" />
                                <path d="M816.028 139.956H809.908L806.848 134.711L809.908 129.465H816.028L819.088 134.711L816.028 139.956Z" fill="#B7C1D6" />
                                <path d="M803.526 131.476H799.591L797.668 128.154L799.591 124.744H803.526L805.449 128.154L803.526 131.476Z" fill="#B7C1D6" />
                                <path d="M792.772 126.056H787.526L784.991 121.51L787.526 117.051H792.772L795.395 121.51L792.772 126.056Z" fill="#B7C1D6" />
                                <path d="M701.934 74.1238H695.814L692.841 68.7906L695.814 63.5449H701.934L704.906 68.7906L701.934 74.1238Z" fill="#B7C1D6" />
                                <path d="M689.344 65.4678H685.585L683.661 62.2329L685.585 58.998H689.344L691.267 62.2329L689.344 65.4678Z" fill="#B7C1D6" />
                                <path d="M677.366 57.9486H674.743L673.432 55.6755L674.743 53.4023H677.366L678.678 55.6755L677.366 57.9486Z" fill="#B7C1D6" />
                                <path d="M505.569 155.695H504.17L503.558 154.471L504.17 153.334H505.569L506.269 154.471L505.569 155.695Z" fill="#B7C1D6" />
                                <path d="M496.477 166.36H490.444L487.384 161.027L490.444 155.781H496.477L499.537 161.027L496.477 166.36Z" fill="#B7C1D6" />
                                <path d="M484.761 172.306H479.341L476.63 167.672L479.341 162.951H484.761L487.471 167.672L484.761 172.306Z" fill="#B7C1D6" />
                                <path d="M428.02 205.878H421.987L418.927 200.632L421.987 195.299H428.02L431.08 200.632L428.02 205.878Z" fill="#B7C1D6" />
                                <path d="M416.654 212.435H410.534L407.474 207.189L410.534 201.943H416.654L419.714 207.189L416.654 212.435Z" fill="#B7C1D6" />
                                <path d="M416.654 225.637H410.534L407.474 220.392L410.534 215.059H416.654L419.714 220.392L416.654 225.637Z" fill="#B7C1D6" />
                                <path d="M416.567 238.752H410.622L407.562 233.506L410.622 228.348H416.567L419.627 233.506L416.567 238.752Z" fill="#B7C1D6" />
                                <path d="M416.217 251.255H410.971L408.349 246.708L410.971 242.162H416.217L418.753 246.708L416.217 251.255Z" fill="#B7C1D6" />
                                <path d="M416.479 422.963H410.709L407.824 417.98L410.709 412.996H416.479L419.365 417.98L416.479 422.963Z" fill="#B7C1D6" />
                                <path d="M416.654 436.427H410.534L407.474 431.181L410.534 425.936H416.654L419.714 431.181L416.654 436.427Z" fill="#B7C1D6" />
                                <path d="M416.654 449.63H410.534L407.474 444.384L410.534 439.051H416.654L419.714 444.384L416.654 449.63Z" fill="#B7C1D6" />
                                <path d="M416.654 462.831H410.534L407.474 457.498L410.534 452.252H416.654L419.714 457.498L416.654 462.831Z" fill="#B7C1D6" />
                                <path d="M416.654 475.945H410.534L407.474 470.699L410.534 465.453H416.654L419.714 470.699L416.654 475.945Z" fill="#D63129" />
                                <path d="M416.654 489.147H410.534L407.474 483.902L410.534 478.568H416.654L419.714 483.902L416.654 489.147Z" fill="#B7C1D6" />
                                <path d="M416.654 502.348H410.534L407.474 497.015L410.534 491.77H416.654L419.714 497.015L416.654 502.348Z" fill="#B7C1D6" />
                                <path d="M405.201 522.108H399.169L396.109 516.862L399.169 511.529H405.201L408.261 516.862L405.201 522.108Z" fill="#B7C1D6" />
                                <path d="M416.654 528.665H410.534L407.474 523.42L410.534 518.174H416.654L419.714 523.42L416.654 528.665Z" fill="#B7C1D6" />
                                <path d="M428.02 535.309H421.987L418.927 529.976L421.987 524.73H428.02L431.08 529.976L428.02 535.309Z" fill="#B7C1D6" />
                                <path d="M439.473 541.866H433.353L430.293 536.62L433.353 531.287H439.473L442.533 536.62L439.473 541.866Z" fill="#B7C1D6" />
                                <path d="M450.839 548.423H444.806L441.746 543.177L444.806 537.932H450.839L453.899 543.177L450.839 548.423Z" fill="#B7C1D6" />
                                <path d="M462.292 555.067H456.172L453.112 549.734L456.172 544.488H462.292L465.352 549.734L462.292 555.067Z" fill="#B7C1D6" />
                                <path d="M473.658 561.624H467.625L464.565 556.379L467.625 551.133H473.658L476.718 556.379L473.658 561.624Z" fill="#B7C1D6" />
                                <path d="M952.067 428.297H947.783L945.597 424.625L947.783 420.865H952.067L954.253 424.625L952.067 428.297Z" fill="#B7C1D6" />
                                <path d="M952.504 389.566H947.258L944.723 385.019L947.258 380.561H952.504L955.127 385.019L952.504 389.566Z" fill="#B7C1D6" />
                                <path d="M952.941 377.151H946.821L943.849 371.905L946.821 366.572H952.941L956.001 371.905L952.941 377.151Z" fill="#B7C1D6" />
                                <path d="M952.911 363.693H946.791L943.819 358.447L946.791 353.201H952.911L955.971 358.447L952.911 363.693Z" fill="#D63129" />
                                <path d="M952.911 350.579H946.791L943.819 345.246L946.791 340H952.911L955.971 345.246L952.911 350.579Z" fill="#D63129" />
                                <path d="M952.941 337.634H946.821L943.849 332.388L946.821 327.055H952.941L956.001 332.388L952.941 337.634Z" fill="#B7C1D6" />
                                <path d="M952.941 324.431H946.821L943.849 319.185L946.821 313.939H952.941L956.001 319.185L952.941 324.431Z" fill="#B7C1D6" />
                                <path d="M952.941 311.23H946.821L943.849 305.984L946.821 300.738H952.941L956.001 305.984L952.941 311.23Z" fill="#B7C1D6" />
                                <path d="M952.941 298.116H946.821L943.849 292.87L946.821 287.537H952.941L956.001 292.87L952.941 298.116Z" fill="#B7C1D6" />
                                <path d="M952.941 284.913H946.821L943.849 279.668L946.821 274.422H952.941L956.001 279.668L952.941 284.913Z" fill="#B7C1D6" />
                                <path d="M952.941 271.712H946.821L943.849 266.466L946.821 261.221H952.941L956.001 266.466L952.941 271.712Z" fill="#B7C1D6" />
                                <path d="M952.941 258.598H946.821L943.849 253.265L946.821 248.02H952.941L956.001 253.265L952.941 258.598Z" fill="#B7C1D6" />
                                <path d="M952.941 245.395H946.821L943.849 240.15L946.821 234.816H952.941L956.001 240.15L952.941 245.395Z" fill="#B7C1D6" />
                                <path d="M952.941 232.195H946.821L943.849 226.949L946.821 221.703H952.941L956.001 226.949L952.941 232.195Z" fill="#D63129" />
                                <path d="M952.941 219.081H946.821L943.849 213.748L946.821 208.502H952.941L956.001 213.748L952.941 219.081Z" fill="#B7C1D6" />
                                <path d="M952.941 205.878H946.821L943.849 200.632L946.821 195.299H952.941L956.001 200.632L952.941 205.878Z" fill="#B7C1D6" />
                                <path d="M941.575 199.234H935.455L932.395 193.988L935.455 188.742H941.575L944.548 193.988L941.575 199.234Z" fill="#B7C1D6" />
                                <path d="M930.122 192.677H924.002L921.03 187.431L924.002 182.186H930.122L933.182 187.431L930.122 192.677Z" fill="#D63129" />
                                <path d="M918.757 186.12H912.637L909.577 180.787L912.637 175.541H918.757L921.729 180.787L918.757 186.12Z" fill="#B7C1D6" />
                                <path d="M907.303 179.476H901.183L898.211 174.23L901.183 168.984H907.303L910.363 174.23L907.303 179.476Z" fill="#B7C1D6" />
                                <path d="M895.938 172.917H889.818L886.758 167.671L889.818 162.338H895.938L898.91 167.671L895.938 172.917Z" fill="#B7C1D6" />
                                <path d="M884.485 166.36H878.365L875.392 161.027L878.365 155.781H884.485L887.545 161.027L884.485 166.36Z" fill="#B7C1D6" />
                                <path d="M873.031 159.716H866.999L863.939 154.47L866.999 149.225H873.031L876.091 154.47L873.031 159.716Z" fill="#B7C1D6" />
                                <path d="M861.666 153.159H855.546L852.573 147.913L855.546 142.58H861.666L864.726 147.913L861.666 153.159Z" fill="#B7C1D6" />
                                <path d="M850.213 146.602H844.18L841.12 141.269L844.18 136.023H850.213L853.273 141.269L850.213 146.602Z" fill="#B7C1D6" />
                                <path d="M838.847 139.956H832.727L829.754 134.711L832.727 129.465H838.847L841.907 134.711L838.847 139.956Z" fill="#B7C1D6" />
                                <path d="M827.394 133.399H821.361L818.301 128.153L821.361 122.82H827.394L830.454 128.153L827.394 133.399Z" fill="#B7C1D6" />
                                <path d="M815.066 125.093H810.957L808.859 121.509L810.957 118.012H815.066L817.077 121.509L815.066 125.093Z" fill="#B7C1D6" />
                                <path d="M722.305 69.839H721.081L720.469 68.7898L721.081 67.8281H722.305L722.917 68.7898L722.305 69.839Z" fill="#B7C1D6" />
                                <path d="M711.463 64.3313H709.015L707.791 62.233L709.015 60.1348H711.463L712.775 62.233L711.463 64.3313Z" fill="#B7C1D6" />
                                <path d="M701.934 60.9226H695.814L692.754 55.6769L695.814 50.3438H701.934L704.994 55.6769L701.934 60.9226Z" fill="#B7C1D6" />
                                <path d="M690.481 54.364H684.448L681.388 49.0309L684.448 43.7852H690.481L693.541 49.0309L690.481 54.364Z" fill="#B7C1D6" />
                                <path d="M679.115 47.7199H672.995L669.935 42.4742L672.995 37.2285H679.115L682.087 42.4742L679.115 47.7199Z" fill="#B7C1D6" />
                                <path d="M574.463 103.675H572.277L571.141 101.752L572.277 99.8281H574.463L575.512 101.752L574.463 103.675Z" fill="#B7C1D6" />
                                <path d="M563.797 111.542H560.125L558.201 108.395L560.125 105.16H563.797L565.633 108.395L563.797 111.542Z" fill="#B7C1D6" />
                                <path d="M553.567 120.198H547.535L544.475 114.953L547.535 109.707H553.567L556.54 114.953L553.567 120.198Z" fill="#B7C1D6" />
                                <path d="M542.114 126.843H536.082L533.022 121.509L536.082 116.264H542.114L545.174 121.509L542.114 126.843Z" fill="#B7C1D6" />
                                <path d="M530.749 133.4H524.629L521.656 128.154L524.629 122.908H530.749L533.721 128.154L530.749 133.4Z" fill="#B7C1D6" />
                                <path d="M519.121 139.608H513.525L510.64 134.712L513.525 129.816H519.121L521.918 134.712L519.121 139.608Z" fill="#B7C1D6" />
                                <path d="M507.58 145.989H502.159L499.449 141.268L502.159 136.547H507.58L510.378 141.268L507.58 145.989Z" fill="#B7C1D6" />
                                <path d="M496.477 153.159H490.444L487.384 147.913L490.444 142.58H496.477L499.537 147.913L496.477 153.159Z" fill="#B7C1D6" />
                                <path d="M485.111 159.716H478.991L475.931 154.47L478.991 149.225H485.111L488.171 154.47L485.111 159.716Z" fill="#B7C1D6" />
                                <path d="M472.958 165.05H468.325L466.051 161.028L468.325 157.094H472.958L475.231 161.028L472.958 165.05Z" fill="#B7C1D6" />
                                <path d="M427.933 192.501H422.075L419.102 187.43L422.075 182.359H427.933L430.905 187.43L427.933 192.501Z" fill="#B7C1D6" />
                                <path d="M416.654 199.234H410.534L407.474 193.988L410.534 188.742H416.654L419.714 193.988L416.654 199.234Z" fill="#B7C1D6" />
                                <path d="M405.201 205.878H399.169L396.109 200.632L399.169 195.299H405.201L408.261 200.632L405.201 205.878Z" fill="#B7C1D6" />
                                <path d="M405.201 219.081H399.169L396.109 213.748L399.169 208.502H405.201L408.261 213.748L405.201 219.081Z" fill="#B7C1D6" />
                                <path d="M405.201 232.195H399.169L396.109 226.949L399.169 221.703H405.201L408.261 226.949L405.201 232.195Z" fill="#B7C1D6" />
                                <path d="M405.201 245.395H399.169L396.109 240.15L399.169 234.816H405.201L408.261 240.15L405.201 245.395Z" fill="#B7C1D6" />
                                <path d="M404.152 256.673H400.218L398.294 253.264L400.218 249.941H404.152L406.075 253.264L404.152 256.673Z" fill="#B7C1D6" />
                                <path d="M404.677 415.794H399.693L397.158 411.422L399.693 407.051H404.677L407.212 411.422L404.677 415.794Z" fill="#B7C1D6" />
                                <path d="M405.201 429.87H399.169L396.109 424.624L399.169 419.291H405.201L408.261 424.624L405.201 429.87Z" fill="#B7C1D6" />
                                <path d="M405.201 443.071H399.169L396.109 437.738L399.169 432.492H405.201L408.261 437.738L405.201 443.071Z" fill="#B7C1D6" />
                                <path d="M405.201 456.187H399.169L396.109 450.941L399.169 445.695H405.201L408.261 450.941L405.201 456.187Z" fill="#B7C1D6" />
                                <path d="M405.201 469.387H399.169L396.109 464.142L399.169 458.809H405.201L408.261 464.142L405.201 469.387Z" fill="#B7C1D6" />
                                <path d="M405.201 482.589H399.169L396.109 477.255L399.169 472.01H405.201L408.261 477.255L405.201 482.589Z" fill="#B7C1D6" />
                                <path d="M405.201 495.704H399.169L396.109 490.459L399.169 485.213H405.201L408.261 490.459L405.201 495.704Z" fill="#B7C1D6" />
                                <path d="M405.201 508.905H399.169L396.109 503.66L399.169 498.414H405.201L408.261 503.66L405.201 508.905Z" fill="#B7C1D6" />
                                <path d="M393.835 528.665H387.715L384.655 523.42L387.715 518.174H393.835L396.895 523.42L393.835 528.665Z" fill="#B7C1D6" />
                                <path d="M405.201 535.309H399.169L396.109 529.976L399.169 524.73H405.201L408.261 529.976L405.201 535.309Z" fill="#B7C1D6" />
                                <path d="M416.654 541.866H410.534L407.474 536.62L410.534 531.287H416.654L419.714 536.62L416.654 541.866Z" fill="#B7C1D6" />
                                <path d="M428.02 548.423H421.987L418.927 543.177L421.987 537.932H428.02L431.08 543.177L428.02 548.423Z" fill="#B7C1D6" />
                                <path d="M439.473 555.067H433.353L430.293 549.734L433.353 544.488H439.473L442.533 549.734L439.473 555.067Z" fill="#B7C1D6" />
                                <path d="M450.839 561.626H444.806L441.746 556.38L444.806 551.047H450.839L453.899 556.38L450.839 561.626Z" fill="#B7C1D6" />
                                <path d="M462.292 568.183H456.172L453.112 562.937L456.172 557.691H462.292L465.352 562.937L462.292 568.183Z" fill="#B7C1D6" />
                                <path d="M962.383 380.299H960.285L959.236 378.463L960.285 376.627H962.383L963.433 378.463L962.383 380.299Z" fill="#B7C1D6" />
                                <path d="M964.394 370.594H958.274L955.214 365.261L958.274 360.016H964.394L967.367 365.261L964.394 370.594Z" fill="#B7C1D6" />
                                <path d="M964.394 357.391H958.274L955.214 352.146L958.274 346.812H964.394L967.367 352.146L964.394 357.391Z" fill="#B7C1D6" />
                                <path d="M964.394 344.191H958.274L955.214 338.945L958.274 333.699H964.394L967.367 338.945L964.394 344.191Z" fill="#B7C1D6" />
                                <path d="M964.394 331.075H958.274L955.214 325.742L958.274 320.496H964.394L967.367 325.742L964.394 331.075Z" fill="#B7C1D6" />
                                <path d="M964.394 317.874H958.274L955.214 312.628L958.274 307.295H964.394L967.367 312.628L964.394 317.874Z" fill="#B7C1D6" />
                                <path d="M964.394 304.673H958.274L955.214 299.427L958.274 294.182H964.394L967.367 299.427L964.394 304.673Z" fill="#B7C1D6" />
                                <path d="M964.394 291.47H958.274L955.214 286.224L958.274 280.979H964.394L967.367 286.224L964.394 291.47Z" fill="#B7C1D6" />
                                <path d="M964.394 278.356H958.274L955.214 273.023L958.274 267.777H964.394L967.367 273.023L964.394 278.356Z" fill="#B7C1D6" />
                                <path d="M964.394 265.155H958.274L955.214 259.909L958.274 254.576H964.394L967.367 259.909L964.394 265.155Z" fill="#B7C1D6" />
                                <path d="M964.394 251.952H958.274L955.214 246.707L958.274 241.461H964.394L967.367 246.707L964.394 251.952Z" fill="#B7C1D6" />
                                <path d="M964.394 238.839H958.274L955.214 233.505L958.274 228.26H964.394L967.367 233.505L964.394 238.839Z" fill="#B7C1D6" />
                                <path d="M964.394 225.637H958.274L955.214 220.392L958.274 215.059H964.394L967.367 220.392L964.394 225.637Z" fill="#B7C1D6" />
                                <path d="M964.394 212.435H958.274L955.214 207.189L958.274 201.943H964.394L967.367 207.189L964.394 212.435Z" fill="#B7C1D6" />
                                <path d="M964.394 199.234H958.274L955.214 193.988L958.274 188.742H964.394L967.367 193.988L964.394 199.234Z" fill="#B7C1D6" />
                                <path d="M952.941 192.677H946.821L943.849 187.431L946.821 182.186H952.941L956.001 187.431L952.941 192.677Z" fill="#B7C1D6" />
                                <path d="M941.575 186.12H935.455L932.395 180.787L935.455 175.541H941.575L944.548 180.787L941.575 186.12Z" fill="#B7C1D6" />
                                <path d="M930.122 179.476H924.002L921.03 174.23L924.002 168.984H930.122L933.182 174.23L930.122 179.476Z" fill="#B7C1D6" />
                                <path d="M918.757 172.917H912.637L909.577 167.671L912.637 162.338H918.757L921.729 167.671L918.757 172.917Z" fill="#B7C1D6" />
                                <path d="M907.303 166.36H901.183L898.211 161.027L901.183 155.781H907.303L910.363 161.027L907.303 166.36Z" fill="#B7C1D6" />
                                <path d="M895.938 159.716H889.818L886.758 154.47L889.818 149.225H895.938L898.91 154.47L895.938 159.716Z" fill="#B7C1D6" />
                                <path d="M884.485 153.159H878.365L875.392 147.913L878.365 142.58H884.485L887.545 147.913L884.485 153.159Z" fill="#B7C1D6" />
                                <path d="M873.031 146.602H866.999L863.939 141.269L866.999 136.023H873.031L876.091 141.269L873.031 146.602Z" fill="#B7C1D6" />
                                <path d="M861.666 139.956H855.546L852.573 134.711L855.546 129.465H861.666L864.726 134.711L861.666 139.956Z" fill="#B7C1D6" />
                                <path d="M850.213 133.399H844.18L841.12 128.153L844.18 122.82H850.213L853.273 128.153L850.213 133.399Z" fill="#B7C1D6" />
                                <path d="M838.847 126.843H832.727L829.754 121.509L832.727 116.264H838.847L841.907 121.509L838.847 126.843Z" fill="#B7C1D6" />
                                <path d="M825.295 116.613H823.459L822.498 114.952L823.459 113.291H825.295L826.257 114.952L825.295 116.613Z" fill="#B7C1D6" />
                                <path d="M722.829 57.5988H720.556L719.507 55.6754L720.556 53.752H722.829L723.878 55.6754L722.829 57.5988Z" fill="#B7C1D6" />
                                <path d="M712.338 52.6169H708.229L706.218 49.0323L708.229 45.5352H712.338L714.349 49.0323L712.338 52.6169Z" fill="#B7C1D6" />
                                <path d="M700.36 45.0973H697.3L695.814 42.4744L697.3 39.8516H700.36L701.934 42.4744L700.36 45.0973Z" fill="#B7C1D6" />
                                <path d="M688.12 36.967H686.809L686.197 35.9178L686.809 34.7812H688.12L688.732 35.9178L688.12 36.967Z" fill="#B7C1D6" />
                                <path d="M576.299 93.7077H570.441L567.469 88.6368L570.441 83.4785H576.299L579.184 88.6368L576.299 93.7077Z" fill="#B7C1D6" />
                                <path d="M563.971 98.6916H559.95L557.939 95.1944L559.95 91.6973H563.971L565.982 95.1944L563.971 98.6916Z" fill="#B7C1D6" />
                                <path d="M552.868 105.861H548.147L545.786 101.752L548.147 97.6426H552.868L555.316 101.752L552.868 105.861Z" fill="#B7C1D6" />
                                <path d="M542.114 113.641H536.082L533.022 108.396L536.082 103.062H542.114L545.174 108.396L542.114 113.641Z" fill="#B7C1D6" />
                                <path d="M530.749 120.198H524.629L521.656 114.953L524.629 109.707H530.749L533.809 114.953L530.749 120.198Z" fill="#B7C1D6" />
                                <path d="M519.295 126.843H513.263L510.203 121.509L513.263 116.264H519.295L522.355 121.509L519.295 126.843Z" fill="#B7C1D6" />
                                <path d="M507.93 133.399H501.81L498.837 128.153L501.81 122.82H507.93L510.99 128.153L507.93 133.399Z" fill="#B7C1D6" />
                                <path d="M496.477 139.956H490.444L487.384 134.711L490.444 129.465H496.477L499.537 134.711L496.477 139.956Z" fill="#B7C1D6" />
                                <path d="M485.111 146.602H478.991L475.931 141.269L478.991 136.023H485.111L488.171 141.269L485.111 146.602Z" fill="#B7C1D6" />
                                <path d="M473.133 152.197H468.15L465.702 147.913L468.15 143.629H473.133L475.581 147.913L473.133 152.197Z" fill="#B7C1D6" />
                                <path d="M425.485 175.104H424.523L423.998 174.23L424.523 173.355H425.485L426.009 174.23L425.485 175.104Z" fill="#B7C1D6" />
                                <path d="M416.217 185.333H410.971L408.349 180.787L410.971 176.328H416.217L418.753 180.787L416.217 185.333Z" fill="#B7C1D6" />
                                <path d="M405.201 192.677H399.169L396.109 187.431L399.169 182.186H405.201L408.261 187.431L405.201 192.677Z" fill="#B7C1D6" />
                                <path d="M393.835 199.234H387.715L384.655 193.988L387.715 188.742H393.835L396.895 193.988L393.835 199.234Z" fill="#B7C1D6" />
                                <path d="M393.835 212.435H387.715L384.655 207.189L387.715 201.943H393.835L396.895 207.189L393.835 212.435Z" fill="#B7C1D6" />
                                <path d="M393.835 225.637H387.715L384.655 220.392L387.715 215.059H393.835L396.895 220.392L393.835 225.637Z" fill="#B7C1D6" />
                                <path d="M393.835 238.839H387.715L384.655 233.505L387.715 228.26H393.835L396.895 233.505L393.835 238.839Z" fill="#B7C1D6" />
                                <path d="M393.835 251.952H387.715L384.655 246.707L387.715 241.461H393.835L396.895 246.707L393.835 251.952Z" fill="#B7C1D6" />
                                <path d="M392.174 262.356H389.377L387.89 259.908L389.377 257.373H392.174L393.661 259.908L392.174 262.356Z" fill="#B7C1D6" />
                                <path d="M391.387 274.073H390.163L389.551 273.024L390.163 272.062H391.387L391.999 273.024L391.387 274.073Z" fill="#B7C1D6" />
                                <path d="M392.524 381.522H389.027L387.278 378.462L389.027 375.402H392.524L394.273 378.462L392.524 381.522Z" fill="#B7C1D6" />
                                <path d="M391.65 406.264H389.901L389.114 404.865L389.901 403.379H391.65L392.437 404.865L391.65 406.264Z" fill="#B7C1D6" />
                                <path d="M393.835 423.313H387.715L384.655 417.98L387.715 412.734H393.835L396.895 417.98L393.835 423.313Z" fill="#B7C1D6" />
                                <path d="M393.835 436.427H387.715L384.655 431.181L387.715 425.936H393.835L396.895 431.181L393.835 436.427Z" fill="#B7C1D6" />
                                <path d="M393.835 449.63H387.715L384.655 444.384L387.715 439.051H393.835L396.895 444.384L393.835 449.63Z" fill="#B7C1D6" />
                                <path d="M393.835 462.831H387.715L384.655 457.498L387.715 452.252H393.835L396.895 457.498L393.835 462.831Z" fill="#B7C1D6" />
                                <path d="M393.835 475.945H387.715L384.655 470.699L387.715 465.453H393.835L396.895 470.699L393.835 475.945Z" fill="#B7C1D6" />
                                <path d="M393.835 489.147H387.715L384.655 483.902L387.715 478.568H393.835L396.895 483.902L393.835 489.147Z" fill="#B7C1D6" />
                                <path d="M393.835 502.348H387.715L384.655 497.015L387.715 491.77H393.835L396.895 497.015L393.835 502.348Z" fill="#B7C1D6" />
                                <path d="M393.835 515.462H387.715L384.655 510.216L387.715 504.971H393.835L396.895 510.216L393.835 515.462Z" fill="#B7C1D6" />
                                <path d="M382.382 535.309H376.35L373.29 529.976L376.35 524.73H382.382L385.442 529.976L382.382 535.309Z" fill="#B7C1D6" />
                                <path d="M393.835 541.866H387.715L384.655 536.62L387.715 531.287H393.835L396.895 536.62L393.835 541.866Z" fill="#B7C1D6" />
                                <path d="M405.201 548.423H399.169L396.109 543.177L399.169 537.932H405.201L408.261 543.177L405.201 548.423Z" fill="#B7C1D6" />
                                <path d="M416.654 555.067H410.534L407.474 549.734L410.534 544.488H416.654L419.714 549.734L416.654 555.067Z" fill="#B7C1D6" />
                                <path d="M428.02 561.626H421.987L418.927 556.38L421.987 551.047H428.02L431.08 556.38L428.02 561.626Z" fill="#B7C1D6" />
                                <path d="M439.473 568.183H433.353L430.293 562.937L433.353 557.691H439.473L442.533 562.937L439.473 568.183Z" fill="#B7C1D6" />
                                <path d="M450.839 574.827H444.806L441.746 569.494L444.806 564.248H450.839L453.899 569.494L450.839 574.827Z" fill="#B7C1D6" />
                                <path d="M462.292 581.384H456.172L453.112 576.138L456.172 570.805H462.292L465.352 576.138L462.292 581.384Z" fill="#B7C1D6" />
                                <path d="M975.76 363.948H969.727L966.667 358.703L969.727 353.457H975.76L978.82 358.703L975.76 363.948Z" fill="#B7C1D6" />
                                <path d="M975.76 350.835H969.727L966.667 345.502L969.727 340.256H975.76L978.82 345.502L975.76 350.835Z" fill="#B7C1D6" />
                                <path d="M975.76 337.634H969.727L966.667 332.388L969.727 327.055H975.76L978.82 332.388L975.76 337.634Z" fill="#B7C1D6" />
                                <path d="M975.76 324.431H969.727L966.667 319.185L969.727 313.939H975.76L978.82 319.185L975.76 324.431Z" fill="#B7C1D6" />
                                <path d="M975.76 311.23H969.727L966.667 305.984L969.727 300.738H975.76L978.82 305.984L975.76 311.23Z" fill="#B7C1D6" />
                                <path d="M975.76 298.116H969.727L966.667 292.87L969.727 287.537H975.76L978.82 292.87L975.76 298.116Z" fill="#B7C1D6" />
                                <path d="M975.76 284.913H969.727L966.667 279.668L969.727 274.422H975.76L978.82 279.668L975.76 284.913Z" fill="#B7C1D6" />
                                <path d="M975.76 271.712H969.727L966.667 266.466L969.727 261.221H975.76L978.82 266.466L975.76 271.712Z" fill="#B7C1D6" />
                                <path d="M975.76 258.598H969.727L966.667 253.265L969.727 248.02H975.76L978.82 253.265L975.76 258.598Z" fill="#B7C1D6" />
                                <path d="M975.76 245.395H969.727L966.667 240.15L969.727 234.816H975.76L978.82 240.15L975.76 245.395Z" fill="#B7C1D6" />
                                <path d="M975.76 232.195H969.727L966.667 226.949L969.727 221.703H975.76L978.82 226.949L975.76 232.195Z" fill="#B7C1D6" />
                                <path d="M975.76 219.081H969.727L966.667 213.748L969.727 208.502H975.76L978.82 213.748L975.76 219.081Z" fill="#B7C1D6" />
                                <path d="M975.76 205.878H969.727L966.667 200.632L969.727 195.299H975.76L978.82 200.632L975.76 205.878Z" fill="#B7C1D6" />
                                <path d="M975.76 192.677H969.727L966.667 187.431L969.727 182.186H975.76L978.82 187.431L975.76 192.677Z" fill="#B7C1D6" />
                                <path d="M964.394 186.12H958.274L955.214 180.787L958.274 175.541H964.394L967.367 180.787L964.394 186.12Z" fill="#B7C1D6" />
                                <path d="M952.941 179.476H946.821L943.849 174.23L946.821 168.984H952.941L956.001 174.23L952.941 179.476Z" fill="#B7C1D6" />
                                <path d="M941.575 172.917H935.455L932.395 167.671L935.455 162.338H941.575L944.548 167.671L941.575 172.917Z" fill="#B7C1D6" />
                                <path d="M930.122 166.36H924.002L921.03 161.027L924.002 155.781H930.122L933.182 161.027L930.122 166.36Z" fill="#B7C1D6" />
                                <path d="M918.757 159.716H912.637L909.577 154.47L912.637 149.225H918.757L921.729 154.47L918.757 159.716Z" fill="#B7C1D6" />
                                <path d="M907.303 153.159H901.183L898.211 147.913L901.183 142.58H907.303L910.363 147.913L907.303 153.159Z" fill="#B7C1D6" />
                                <path d="M895.938 146.602H889.818L886.758 141.269L889.818 136.023H895.938L898.91 141.269L895.938 146.602Z" fill="#B7C1D6" />
                                <path d="M884.485 139.956H878.365L875.392 134.711L878.365 129.465H884.485L887.545 134.711L884.485 139.956Z" fill="#B7C1D6" />
                                <path d="M873.031 133.399H866.999L863.939 128.153L866.999 122.82H873.031L876.091 128.153L873.031 133.399Z" fill="#B7C1D6" />
                                <path d="M861.666 126.843H855.546L852.573 121.509L855.546 116.264H861.666L864.726 121.509L861.666 126.843Z" fill="#B7C1D6" />
                                <path d="M850.213 120.198H844.18L841.12 114.953L844.18 109.707H850.213L853.273 114.953L850.213 120.198Z" fill="#B7C1D6" />
                                <path d="M836.574 109.794H835L834.213 108.395L835 106.996H836.574L837.448 108.395L836.574 109.794Z" fill="#B7C1D6" />
                                <path d="M826.957 106.296H821.798L819.175 101.75L821.798 97.291H826.957L829.579 101.75L826.957 106.296Z" fill="#B7C1D6" />
                                <path d="M813.93 96.7681H812.006L811.132 95.1943L812.006 93.5332H813.93L814.804 95.1943L813.93 96.7681Z" fill="#B7C1D6" />
                                <path d="M724.228 46.8464H719.157L716.622 42.4749L719.157 38.1035H724.228L726.763 42.4749L724.228 46.8464Z" fill="#B7C1D6" />
                                <path d="M712.862 40.3767H707.704L705.081 35.9178L707.704 31.459H712.862L715.398 35.9178L712.862 40.3767Z" fill="#B7C1D6" />
                                <path d="M585.391 69.9274H584.08L583.468 68.7909L584.08 67.6543H585.391L586.091 68.7909L585.391 69.9274Z" fill="#B7C1D6" />
                                <path d="M576.386 80.5935H570.354L567.294 75.4352L570.354 70.1895H576.386L579.359 75.4352L576.386 80.5935Z" fill="#B7C1D6" />
                                <path d="M565.021 87.2375H558.901L555.841 81.9918L558.901 76.7461H565.021L567.993 81.9918L565.021 87.2375Z" fill="#B7C1D6" />
                                <path d="M553.567 93.8816H547.447L544.475 88.6359L547.447 83.3027H553.567L556.627 88.6359L553.567 93.8816Z" fill="#B7C1D6" />
                                <path d="M542.114 100.439H536.082L533.022 95.193L536.082 89.9473H542.114L545.174 95.193L542.114 100.439Z" fill="#B7C1D6" />
                                <path d="M530.749 107.083H524.629L521.656 101.75L524.629 96.5039H530.749L533.809 101.75L530.749 107.083Z" fill="#B7C1D6" />
                                <path d="M519.295 113.641H513.263L510.203 108.396L513.263 103.062H519.295L522.355 108.396L519.295 113.641Z" fill="#B7C1D6" />
                                <path d="M507.93 120.198H501.81L498.837 114.953L501.81 109.707H507.93L510.99 114.953L507.93 120.198Z" fill="#B7C1D6" />
                                <path d="M496.477 126.843H490.444L487.384 121.509L490.444 116.264H496.477L499.537 121.509L496.477 126.843Z" fill="#B7C1D6" />
                                <path d="M485.111 133.399H478.991L475.931 128.153L478.991 122.82H485.111L488.171 128.153L485.111 133.399Z" fill="#B7C1D6" />
                                <path d="M473.658 139.956H467.625L464.565 134.711L467.625 129.465H473.658L476.718 134.711L473.658 139.956Z" fill="#B7C1D6" />
                                <path d="M404.851 178.776H399.518L396.895 174.23L399.518 169.684H404.851L407.474 174.23L404.851 178.776Z" fill="#B7C1D6" />
                                <path d="M393.835 186.12H387.715L384.655 180.787L387.715 175.541H393.835L396.895 180.787L393.835 186.12Z" fill="#B7C1D6" />
                                <path d="M382.382 192.677H376.35L373.29 187.431L376.35 182.186H382.382L385.442 187.431L382.382 192.677Z" fill="#B7C1D6" />
                                <path d="M382.382 205.878H376.35L373.29 200.632L376.35 195.299H382.382L385.442 200.632L382.382 205.878Z" fill="#B7C1D6" />
                                <path d="M382.382 219.081H376.35L373.29 213.748L376.35 208.502H382.382L385.442 213.748L382.382 219.081Z" fill="#B7C1D6" />
                                <path d="M382.382 232.195H376.35L373.29 226.949L376.35 221.703H382.382L385.442 226.949L382.382 232.195Z" fill="#B7C1D6" />
                                <path d="M382.382 245.395H376.35L373.29 240.15L376.35 234.816H382.382L385.442 240.15L382.382 245.395Z" fill="#B7C1D6" />
                                <path d="M382.382 258.598H376.35L373.29 253.265L376.35 248.02H382.382L385.442 253.265L382.382 258.598Z" fill="#B7C1D6" />
                                <path d="M382.382 271.712H376.35L373.29 266.466L376.35 261.221H382.382L385.442 266.466L382.382 271.712Z" fill="#B7C1D6" />
                                <path d="M380.284 360.276H378.448L377.574 358.703L378.448 357.129H380.284L381.158 358.703L380.284 360.276Z" fill="#B7C1D6" />
                                <path d="M382.033 376.538H376.699L373.989 371.905L376.699 367.184H382.033L384.743 371.905L382.033 376.538Z" fill="#B7C1D6" />
                                <path d="M382.382 416.669H376.35L373.29 411.423L376.35 406.178H382.382L385.442 411.423L382.382 416.669Z" fill="#B7C1D6" />
                                <path d="M382.382 429.87H376.35L373.29 424.624L376.35 419.291H382.382L385.442 424.624L382.382 429.87Z" fill="#B7C1D6" />
                                <path d="M382.382 443.071H376.35L373.29 437.738L376.35 432.492H382.382L385.442 437.738L382.382 443.071Z" fill="#B7C1D6" />
                                <path d="M382.382 456.187H376.35L373.29 450.941L376.35 445.695H382.382L385.442 450.941L382.382 456.187Z" fill="#B7C1D6" />
                                <path d="M382.382 469.387H376.35L373.29 464.142L376.35 458.809H382.382L385.442 464.142L382.382 469.387Z" fill="#B7C1D6" />
                                <path d="M382.382 482.589H376.35L373.29 477.255L376.35 472.01H382.382L385.442 477.255L382.382 482.589Z" fill="#B7C1D6" />
                                <path d="M382.382 495.704H376.35L373.29 490.459L376.35 485.213H382.382L385.442 490.459L382.382 495.704Z" fill="#B7C1D6" />
                                <path d="M382.382 508.905H376.35L373.29 503.66L376.35 498.414H382.382L385.442 503.66L382.382 508.905Z" fill="#B7C1D6" />
                                <path d="M382.382 522.108H376.35L373.29 516.862L376.35 511.529H382.382L385.442 516.862L382.382 522.108Z" fill="#B7C1D6" />
                                <path d="M382.033 547.723H376.699L374.077 543.177L376.699 538.631H382.033L384.655 543.177L382.033 547.723Z" fill="#B7C1D6" />
                                <path d="M393.835 555.067H387.715L384.655 549.734L387.715 544.488H393.835L396.895 549.734L393.835 555.067Z" fill="#B7C1D6" />
                                <path d="M405.201 561.626H399.169L396.109 556.38L399.169 551.047H405.201L408.261 556.38L405.201 561.626Z" fill="#B7C1D6" />
                                <path d="M416.654 568.183H410.534L407.474 562.937L410.534 557.691H416.654L419.714 562.937L416.654 568.183Z" fill="#B7C1D6" />
                                <path d="M428.02 574.827H421.987L418.927 569.494L421.987 564.248H428.02L431.08 569.494L428.02 574.827Z" fill="#B7C1D6" />
                                <path d="M439.473 581.384H433.353L430.293 576.138L433.353 570.805H439.473L442.533 576.138L439.473 581.384Z" fill="#B7C1D6" />
                                <path d="M450.839 587.941H444.806L441.746 582.695L444.806 577.449H450.839L453.899 582.695L450.839 587.941Z" fill="#B7C1D6" />
                                <path d="M460.543 591.525H457.921L456.609 589.252L457.921 586.979H460.543L461.855 589.252L460.543 591.525Z" fill="#B7C1D6" />
                                <path d="M985.989 368.583H982.23L980.394 365.26L982.23 362.025H985.989L987.913 365.26L985.989 368.583Z" fill="#B7C1D6" />
                                <path d="M987.213 357.391H981.093L978.033 352.146L981.093 346.812H987.213L990.186 352.146L987.213 357.391Z" fill="#B7C1D6" />
                                <path d="M987.213 344.191H981.093L978.033 338.945L981.093 333.699H987.213L990.186 338.945L987.213 344.191Z" fill="#B7C1D6" />
                                <path d="M987.213 331.075H981.093L978.033 325.742L981.093 320.496H987.213L990.186 325.742L987.213 331.075Z" fill="#B7C1D6" />
                                <path d="M987.213 317.874H981.093L978.033 312.628L981.093 307.295H987.213L990.186 312.628L987.213 317.874Z" fill="#B7C1D6" />
                                <path d="M987.213 304.673H981.093L978.033 299.427L981.093 294.182H987.213L990.186 299.427L987.213 304.673Z" fill="#B7C1D6" />
                                <path d="M987.213 291.47H981.093L978.033 286.224L981.093 280.979H987.213L990.186 286.224L987.213 291.47Z" fill="#B7C1D6" />
                                <path d="M987.213 278.356H981.093L978.033 273.023L981.093 267.777H987.213L990.186 273.023L987.213 278.356Z" fill="#B7C1D6" />
                                <path d="M987.213 265.155H981.093L978.033 259.909L981.093 254.576H987.213L990.186 259.909L987.213 265.155Z" fill="#B7C1D6" />
                                <path d="M987.213 251.952H981.093L978.033 246.707L981.093 241.461H987.213L990.186 246.707L987.213 251.952Z" fill="#B7C1D6" />
                                <path d="M987.213 238.839H981.093L978.033 233.505L981.093 228.26H987.213L990.186 233.505L987.213 238.839Z" fill="#B7C1D6" />
                                <path d="M987.213 225.637H981.093L978.033 220.392L981.093 215.059H987.213L990.186 220.392L987.213 225.637Z" fill="#B7C1D6" />
                                <path d="M987.213 212.435H981.093L978.033 207.189L981.093 201.943H987.213L990.186 207.189L987.213 212.435Z" fill="#B7C1D6" />
                                <path d="M987.213 199.234H981.093L978.033 193.988L981.093 188.742H987.213L990.186 193.988L987.213 199.234Z" fill="#B7C1D6" />
                                <path d="M987.213 186.12H981.093L978.033 180.787L981.093 175.541H987.213L990.186 180.787L987.213 186.12Z" fill="#B7C1D6" />
                                <path d="M975.76 179.476H969.727L966.667 174.23L969.727 168.984H975.76L978.82 174.23L975.76 179.476Z" fill="#B7C1D6" />
                                <path d="M964.394 172.917H958.274L955.214 167.671L958.274 162.338H964.394L967.367 167.671L964.394 172.917Z" fill="#B7C1D6" />
                                <path d="M952.941 166.36H946.821L943.849 161.027L946.821 155.781H952.941L956.001 161.027L952.941 166.36Z" fill="#B7C1D6" />
                                <path d="M941.575 159.716H935.455L932.395 154.47L935.455 149.225H941.575L944.548 154.47L941.575 159.716Z" fill="#B7C1D6" />
                                <path d="M930.122 153.159H924.002L921.03 147.913L924.002 142.58H930.122L933.182 147.913L930.122 153.159Z" fill="#B7C1D6" />
                                <path d="M918.757 146.602H912.637L909.577 141.269L912.637 136.023H918.757L921.729 141.269L918.757 146.602Z" fill="#B7C1D6" />
                                <path d="M907.303 139.956H901.183L898.211 134.711L901.183 129.465H907.303L910.363 134.711L907.303 139.956Z" fill="#B7C1D6" />
                                <path d="M895.938 133.399H889.818L886.758 128.153L889.818 122.82H895.938L898.91 128.153L895.938 133.399Z" fill="#B7C1D6" />
                                <path d="M884.485 126.843H878.365L875.392 121.509L878.365 116.264H884.485L887.545 121.509L884.485 126.843Z" fill="#B7C1D6" />
                                <path d="M873.031 120.198H866.999L863.939 114.953L866.999 109.707H873.031L876.091 114.953L873.031 120.198Z" fill="#B7C1D6" />
                                <path d="M860.005 110.756H857.207L855.808 108.395L857.207 105.947H860.005L861.403 108.395L860.005 110.756Z" fill="#B7C1D6" />
                                <path d="M826.432 92.0455H822.41L820.312 88.6358L822.41 85.1387H826.432L828.443 88.6358L826.432 92.0455Z" fill="#B7C1D6" />
                                <path d="M745.211 43.698H743.812L743.113 42.474L743.812 41.25H745.211L745.91 42.474L745.211 43.698Z" fill="#B7C1D6" />
                                <path d="M735.769 40.5502H730.435L727.725 35.9165L730.435 31.1953H735.769L738.479 35.9165L735.769 40.5502Z" fill="#B7C1D6" />
                                <path d="M722.392 30.4968H720.993L720.294 29.2728L720.993 28.0488H722.392L723.091 29.2728L722.392 30.4968Z" fill="#B7C1D6" />
                                <path d="M585.654 57.249H583.818L582.943 55.6753L583.818 54.1016H585.654L586.615 55.6753L585.654 57.249Z" fill="#B7C1D6" />
                                <path d="M576.386 67.4797H570.266L567.294 62.234L570.266 56.9883H576.386L579.446 62.234L576.386 67.4797Z" fill="#B7C1D6" />
                                <path d="M565.021 74.1238H558.901L555.841 68.7906L558.901 63.5449H565.021L567.993 68.7906L565.021 74.1238Z" fill="#B7C1D6" />
                                <path d="M553.567 80.6809H547.447L544.475 75.4352L547.447 70.1895H553.567L556.627 75.4352L553.567 80.6809Z" fill="#B7C1D6" />
                                <path d="M542.114 87.2375H536.082L533.022 81.9918L536.082 76.7461H542.114L545.174 81.9918L542.114 87.2375Z" fill="#B7C1D6" />
                                <path d="M530.749 93.8816H524.629L521.656 88.6359L524.629 83.3027H530.749L533.809 88.6359L530.749 93.8816Z" fill="#B7C1D6" />
                                <path d="M519.295 100.439H513.263L510.203 95.193L513.263 89.9473H519.295L522.355 95.193L519.295 100.439Z" fill="#B7C1D6" />
                                <path d="M507.93 107.083H501.81L498.837 101.75L501.81 96.5039H507.93L510.99 101.75L507.93 107.083Z" fill="#B7C1D6" />
                                <path d="M496.477 113.641H490.444L487.384 108.396L490.444 103.062H496.477L499.537 108.396L496.477 113.641Z" fill="#B7C1D6" />
                                <path d="M485.111 120.198H478.991L475.931 114.953L478.991 109.707H485.111L488.171 114.953L485.111 120.198Z" fill="#B7C1D6" />
                                <path d="M472.521 124.833H468.762L466.838 121.51L468.762 118.275H472.521L474.445 121.51L472.521 124.833Z" fill="#B7C1D6" />
                                <path d="M425.747 149.137H424.261L423.561 147.913L424.261 146.689H425.747L426.446 147.913L425.747 149.137Z" fill="#B7C1D6" />
                                <path d="M416.654 159.716H410.534L407.474 154.47L410.534 149.225H416.654L419.714 154.47L416.654 159.716Z" fill="#B7C1D6" />
                                <path d="M403.365 163.038H401.005L399.868 161.027L401.005 159.104H403.365L404.502 161.027L403.365 163.038Z" fill="#B7C1D6" />
                                <path d="M393.835 172.917H387.715L384.655 167.671L387.715 162.338H393.835L396.895 167.671L393.835 172.917Z" fill="#B7C1D6" />
                                <path d="M382.382 179.476H376.35L373.29 174.23L376.35 168.984H382.382L385.442 174.23L382.382 179.476Z" fill="#B7C1D6" />
                                <path d="M370.055 197.66H365.858L363.673 193.988L365.858 190.316H370.055L372.241 193.988L370.055 197.66Z" fill="#B7C1D6" />
                                <path d="M370.842 212.174H365.071L362.186 207.19L365.071 202.207H370.842L373.727 207.19L370.842 212.174Z" fill="#B7C1D6" />
                                <path d="M371.017 225.637H364.897L361.837 220.392L364.897 215.059H371.017L374.077 220.392L371.017 225.637Z" fill="#B7C1D6" />
                                <path d="M371.017 238.839H364.897L361.837 233.505L364.897 228.26H371.017L374.077 233.505L371.017 238.839Z" fill="#B7C1D6" />
                                <path d="M371.017 251.952H364.897L361.837 246.707L364.897 241.461H371.017L374.077 246.707L371.017 251.952Z" fill="#B7C1D6" />
                                <path d="M371.017 265.155H364.897L361.837 259.909L364.897 254.576H371.017L374.077 259.909L371.017 265.155Z" fill="#B7C1D6" />
                                <path d="M371.017 278.356H364.897L361.837 273.023L364.897 267.777H371.017L374.077 273.023L371.017 278.356Z" fill="#B7C1D6" />
                                <path d="M370.929 291.383H364.984L362.011 286.225L364.984 281.154H370.929L373.814 286.225L370.929 291.383Z" fill="#B7C1D6" />
                                <path d="M368.481 300.301H367.432L366.907 299.427L367.432 298.553H368.481L369.006 299.427L368.481 300.301Z" fill="#B7C1D6" />
                                <path d="M369.093 354.069H366.82L365.683 352.146L366.82 350.135H369.093L370.23 352.146L369.093 354.069Z" fill="#B7C1D6" />
                                <path d="M368.743 366.746H367.082L366.295 365.26L367.082 363.861H368.743L369.618 365.26L368.743 366.746Z" fill="#B7C1D6" />
                                <path d="M369.618 381.434H366.295L364.547 378.461L366.295 375.576H369.618L371.366 378.461L369.618 381.434Z" fill="#B7C1D6" />
                                <path d="M370.842 409.849H365.071L362.186 404.866L365.071 399.795H370.842L373.727 404.866L370.842 409.849Z" fill="#B7C1D6" />
                                <path d="M371.017 423.313H364.897L361.837 417.98L364.897 412.734H371.017L374.077 417.98L371.017 423.313Z" fill="#B7C1D6" />
                                <path d="M371.017 436.427H364.897L361.837 431.181L364.897 425.936H371.017L374.077 431.181L371.017 436.427Z" fill="#B7C1D6" />
                                <path d="M371.017 449.63H364.897L361.837 444.384L364.897 439.051H371.017L374.077 444.384L371.017 449.63Z" fill="#B7C1D6" />
                                <path d="M371.017 462.831H364.897L361.837 457.498L364.897 452.252H371.017L374.077 457.498L371.017 462.831Z" fill="#B7C1D6" />
                                <path d="M371.017 475.945H364.897L361.837 470.699L364.897 465.453H371.017L374.077 470.699L371.017 475.945Z" fill="#B7C1D6" />
                                <path d="M371.017 489.147H364.897L361.837 483.902L364.897 478.568H371.017L374.077 483.902L371.017 489.147Z" fill="#B7C1D6" />
                                <path d="M371.017 502.348H364.897L361.837 497.015L364.897 491.77H371.017L374.077 497.015L371.017 502.348Z" fill="#B7C1D6" />
                                <path d="M371.017 515.462H364.897L361.837 510.216L364.897 504.971H371.017L374.077 510.216L371.017 515.462Z" fill="#D63129" />
                                <path d="M371.017 528.665H364.897L361.837 523.42L364.897 518.174H371.017L374.077 523.42L371.017 528.665Z" fill="#B7C1D6" />
                                <path d="M381.858 560.664H376.874L374.426 556.38L376.874 552.096H381.858L384.306 556.38L381.858 560.664Z" fill="#B7C1D6" />
                                <path d="M393.835 568.183H387.715L384.655 562.937L387.715 557.691H393.835L396.895 562.937L393.835 568.183Z" fill="#B7C1D6" />
                                <path d="M405.201 574.827H399.169L396.109 569.494L399.169 564.248H405.201L408.261 569.494L405.201 574.827Z" fill="#B7C1D6" />
                                <path d="M416.654 581.384H410.534L407.474 576.138L410.534 570.805H416.654L419.714 576.138L416.654 581.384Z" fill="#B7C1D6" />
                                <path d="M428.02 587.941H421.987L418.927 582.695L421.987 577.449H428.02L431.08 582.695L428.02 587.941Z" fill="#B7C1D6" />
                                <path d="M439.473 594.587H433.353L430.293 589.254L433.353 584.008H439.473L442.533 589.254L439.473 594.587Z" fill="#B7C1D6" />
                                <path d="M450.839 601.054H444.806L441.834 595.896L444.806 590.65H450.839L453.811 595.896L450.839 601.054Z" fill="#B7C1D6" />
                                <path d="M998.054 389.479H992.983L990.448 385.02L992.983 380.648H998.054L1000.59 385.02L998.054 389.479Z" fill="#B7C1D6" />
                                <path d="M998.579 377.151H992.546L989.486 371.905L992.546 366.572H998.579L1001.64 371.905L998.579 377.151Z" fill="#B7C1D6" />
                                <path d="M998.579 363.948H992.546L989.486 358.703L992.546 353.457H998.579L1001.64 358.703L998.579 363.948Z" fill="#B7C1D6" />
                                <path d="M998.579 350.835H992.546L989.486 345.502L992.546 340.256H998.579L1001.64 345.502L998.579 350.835Z" fill="#B7C1D6" />
                                <path d="M998.579 337.634H992.546L989.486 332.388L992.546 327.055H998.579L1001.64 332.388L998.579 337.634Z" fill="#B7C1D6" />
                                <path d="M998.579 324.431H992.546L989.486 319.185L992.546 313.939H998.579L1001.64 319.185L998.579 324.431Z" fill="#B7C1D6" />
                                <path d="M998.579 311.23H992.546L989.486 305.984L992.546 300.738H998.579L1001.64 305.984L998.579 311.23Z" fill="#B7C1D6" />
                                <path d="M998.579 298.116H992.546L989.486 292.87L992.546 287.537H998.579L1001.64 292.87L998.579 298.116Z" fill="#B7C1D6" />
                                <path d="M998.579 284.913H992.546L989.486 279.668L992.546 274.422H998.579L1001.64 279.668L998.579 284.913Z" fill="#B7C1D6" />
                                <path d="M998.579 271.712H992.546L989.486 266.466L992.546 261.221H998.579L1001.64 266.466L998.579 271.712Z" fill="#B7C1D6" />
                                <path d="M998.579 258.598H992.546L989.486 253.265L992.546 248.02H998.579L1001.64 253.265L998.579 258.598Z" fill="#B7C1D6" />
                                <path d="M998.579 245.395H992.546L989.486 240.15L992.546 234.816H998.579L1001.64 240.15L998.579 245.395Z" fill="#B7C1D6" />
                                <path d="M998.579 232.195H992.546L989.486 226.949L992.546 221.703H998.579L1001.64 226.949L998.579 232.195Z" fill="#B7C1D6" />
                                <path d="M998.579 219.081H992.546L989.486 213.748L992.546 208.502H998.579L1001.64 213.748L998.579 219.081Z" fill="#B7C1D6" />
                                <path d="M998.579 205.878H992.546L989.486 200.632L992.546 195.299H998.579L1001.64 200.632L998.579 205.878Z" fill="#B7C1D6" />
                                <path d="M998.579 192.677H992.546L989.486 187.431L992.546 182.186H998.579L1001.64 187.431L998.579 192.677Z" fill="#B7C1D6" />
                                <path d="M998.579 179.476H992.546L989.486 174.23L992.546 168.984H998.579L1001.64 174.23L998.579 179.476Z" fill="#B7C1D6" />
                                <path d="M987.213 172.917H981.093L978.033 167.671L981.093 162.338H987.213L990.186 167.671L987.213 172.917Z" fill="#B7C1D6" />
                                <path d="M975.76 166.36H969.727L966.667 161.027L969.727 155.781H975.76L978.82 161.027L975.76 166.36Z" fill="#B7C1D6" />
                                <path d="M964.394 159.716H958.274L955.214 154.47L958.274 149.225H964.394L967.367 154.47L964.394 159.716Z" fill="#B7C1D6" />
                                <path d="M952.941 153.159H946.821L943.849 147.913L946.821 142.58H952.941L956.001 147.913L952.941 153.159Z" fill="#B7C1D6" />
                                <path d="M941.575 146.602H935.455L932.395 141.269L935.455 136.023H941.575L944.548 141.269L941.575 146.602Z" fill="#B7C1D6" />
                                <path d="M930.122 139.956H924.002L921.03 134.711L924.002 129.465H930.122L933.182 134.711L930.122 139.956Z" fill="#B7C1D6" />
                                <path d="M918.757 133.399H912.637L909.577 128.153L912.637 122.82H918.757L921.729 128.153L918.757 133.399Z" fill="#B7C1D6" />
                                <path d="M907.303 126.843H901.183L898.211 121.509L901.183 116.264H907.303L910.363 121.509L907.303 126.843Z" fill="#B7C1D6" />
                                <path d="M895.763 119.936H889.993L887.107 114.952L889.993 109.969H895.763L898.561 114.952L895.763 119.936Z" fill="#B7C1D6" />
                                <path d="M884.397 113.466H878.539L875.567 108.395L878.539 103.324H884.397L887.282 108.395L884.397 113.466Z" fill="#B7C1D6" />
                                <path d="M872.769 106.559H867.261L864.551 101.75L867.261 97.0293H872.769L875.567 101.75L872.769 106.559Z" fill="#B7C1D6" />
                                <path d="M838.41 86.4509H833.251L830.629 81.9921L833.251 77.5332H838.41L840.945 81.9921L838.41 86.4509Z" fill="#B7C1D6" />
                                <path d="M824.858 76.3091H823.897L823.372 75.4348L823.897 74.5605H824.858L825.383 75.4348L824.858 76.3091Z" fill="#B7C1D6" />
                                <path d="M599.03 40.9H593.26L590.375 35.9166L593.26 30.8457H599.03L602.003 35.9166L599.03 40.9Z" fill="#B7C1D6" />
                                <path d="M587.577 47.4571H581.894L579.009 42.4737L581.894 37.4902H587.577L590.462 42.4737L587.577 47.4571Z" fill="#B7C1D6" />
                                <path d="M576.386 54.364H570.266L567.294 49.0309L570.266 43.7852H576.386L579.446 49.0309L576.386 54.364Z" fill="#B7C1D6" />
                                <path d="M565.021 60.9226H558.901L555.841 55.6769L558.901 50.3438H565.021L567.993 55.6769L565.021 60.9226Z" fill="#B7C1D6" />
                                <path d="M553.567 67.4797H547.447L544.475 62.234L547.447 56.9883H553.567L556.627 62.234L553.567 67.4797Z" fill="#B7C1D6" />
                                <path d="M542.114 74.1238H536.082L533.022 68.7906L536.082 63.5449H542.114L545.174 68.7906L542.114 74.1238Z" fill="#B7C1D6" />
                                <path d="M530.749 80.6809H524.629L521.656 75.4352L524.629 70.1895H530.749L533.809 75.4352L530.749 80.6809Z" fill="#B7C1D6" />
                                <path d="M519.295 87.2375H513.263L510.203 81.9918L513.263 76.7461H519.295L522.355 81.9918L519.295 87.2375Z" fill="#B7C1D6" />
                                <path d="M507.93 93.8816H501.81L498.837 88.6359L501.81 83.3027H507.93L510.99 88.6359L507.93 93.8816Z" fill="#B7C1D6" />
                                <path d="M496.477 100.439H490.444L487.384 95.193L490.444 89.9473H496.477L499.537 95.193L496.477 100.439Z" fill="#B7C1D6" />
                                <path d="M485.111 107.083H478.991L475.931 101.75L478.991 96.5039H485.111L488.171 101.75L485.111 107.083Z" fill="#B7C1D6" />
                                <path d="M473.395 113.116H467.887L465.177 108.395L467.887 103.586H473.395L476.106 108.395L473.395 113.116Z" fill="#B7C1D6" />
                                <path d="M438.162 131.039H434.665L433.003 128.154L434.665 125.182H438.162L439.823 128.154L438.162 131.039Z" fill="#B7C1D6" />
                                <path d="M428.02 139.956H421.987L418.927 134.711L421.987 129.465H428.02L431.08 134.711L428.02 139.956Z" fill="#B7C1D6" />
                                <path d="M416.654 146.602H410.534L407.474 141.269L410.534 136.023H416.654L419.714 141.269L416.654 146.602Z" fill="#B7C1D6" />
                                <path d="M405.201 153.159H399.169L396.109 147.914L399.169 142.668H405.201L408.261 147.914L405.201 153.159Z" fill="#B7C1D6" />
                                <path d="M382.382 166.273H376.35L373.377 161.027L376.35 155.869H382.382L385.355 161.027L382.382 166.273Z" fill="#B7C1D6" />
                                <path d="M358.514 204.042H354.58L352.569 200.632L354.58 197.135H358.514L360.525 200.632L358.514 204.042Z" fill="#B7C1D6" />
                                <path d="M359.476 218.818H353.618L350.733 213.747L353.618 208.764H359.476L362.361 213.747L359.476 218.818Z" fill="#B7C1D6" />
                                <path d="M359.563 232.195H353.531L350.471 226.949L353.531 221.703H359.563L362.623 226.949L359.563 232.195Z" fill="#B7C1D6" />
                                <path d="M359.563 245.395H353.531L350.471 240.15L353.531 234.816H359.563L362.623 240.15L359.563 245.395Z" fill="#B7C1D6" />
                                <path d="M359.563 258.598H353.531L350.471 253.265L353.531 248.02H359.563L362.623 253.265L359.563 258.598Z" fill="#049848" />
                                <path d="M359.563 271.712H353.531L350.471 266.466L353.531 261.221H359.563L362.623 266.466L359.563 271.712Z" fill="#B7C1D6" />
                                <path d="M359.563 284.913H353.531L350.471 279.668L353.531 274.422H359.563L362.623 279.668L359.563 284.913Z" fill="#B7C1D6" />
                                <path d="M359.563 298.116H353.531L350.471 292.87L353.531 287.537H359.563L362.623 292.87L359.563 298.116Z" fill="#B7C1D6" />
                                <path d="M359.039 310.267H354.055L351.607 305.983L354.055 301.699H359.039L361.487 305.983L359.039 310.267Z" fill="#B7C1D6" />
                                <path d="M357.815 360.889H355.279L354.055 358.703L355.279 356.518H357.815L359.039 358.703L357.815 360.889Z" fill="#B7C1D6" />
                                <path d="M357.64 373.742H355.454L354.405 371.906L355.454 369.982H357.64L358.689 371.906L357.64 373.742Z" fill="#B7C1D6" />
                                <path d="M358.951 415.62H354.143L351.695 411.423L354.143 407.227H358.951L361.399 411.423L358.951 415.62Z" fill="#B7C1D6" />
                                <path d="M359.563 429.87H353.531L350.471 424.624L353.531 419.291H359.563L362.623 424.624L359.563 429.87Z" fill="#B7C1D6" />
                                <path d="M359.563 443.071H353.531L350.471 437.738L353.531 432.492H359.563L362.623 437.738L359.563 443.071Z" fill="#B7C1D6" />
                                <path d="M359.563 456.187H353.531L350.471 450.941L353.531 445.695H359.563L362.623 450.941L359.563 456.187Z" fill="#B7C1D6" />
                                <path d="M359.563 469.387H353.531L350.471 464.142L353.531 458.809H359.563L362.623 464.142L359.563 469.387Z" fill="#B7C1D6" />
                                <path d="M359.563 482.589H353.531L350.471 477.255L353.531 472.01H359.563L362.623 477.255L359.563 482.589Z" fill="#B7C1D6" />
                                <path d="M359.563 495.704H353.531L350.471 490.459L353.531 485.213H359.563L362.623 490.459L359.563 495.704Z" fill="#B7C1D6" />
                                <path d="M359.563 508.818H353.531L350.558 503.66L353.531 498.414H359.563L362.536 503.66L359.563 508.818Z" fill="#B7C1D6" />
                                <path d="M358.339 519.922H354.755L352.919 516.862L354.755 513.715H358.339L360.088 516.862L358.339 519.922Z" fill="#B7C1D6" />
                                <path d="M381.595 573.427H377.049L374.863 569.493L377.049 565.559H381.595L383.869 569.493L381.595 573.427Z" fill="#B7C1D6" />
                                <path d="M393.835 581.384H387.715L384.655 576.138L387.715 570.805H393.835L396.895 576.138L393.835 581.384Z" fill="#B7C1D6" />
                                <path d="M405.201 587.941H399.169L396.109 582.695L399.169 577.449H405.201L408.261 582.695L405.201 587.941Z" fill="#B7C1D6" />
                                <path d="M416.654 594.587H410.534L407.474 589.254L410.534 584.008H416.654L419.714 589.254L416.654 594.587Z" fill="#B7C1D6" />
                                <path d="M428.02 601.142H421.987L418.927 595.896L421.987 590.65H428.02L431.08 595.896L428.02 601.142Z" fill="#D63129" />
                                <path d="M439.473 607.7H433.353L430.381 602.455L433.353 597.209H439.473L442.446 602.455L439.473 607.7Z" fill="#B7C1D6" />
                                <path d="M1009.16 448.144H1004.79L1002.6 444.384L1004.79 440.625H1009.16L1011.34 444.384L1009.16 448.144Z" fill="#B7C1D6" />
                                <path d="M1008.81 434.33H1005.14L1003.3 431.183L1005.14 428.035H1008.81L1010.56 431.183L1008.81 434.33Z" fill="#B7C1D6" />
                                <path d="M1009.51 396.035H1004.44L1001.9 391.664L1004.44 387.205H1009.51L1012.04 391.664L1009.51 396.035Z" fill="#B7C1D6" />
                                <path d="M1010.03 383.708H1003.91L1000.85 378.463L1003.91 373.217H1010.03L1013 378.463L1010.03 383.708Z" fill="#B7C1D6" />
                                <path d="M1010.03 370.594H1003.91L1000.85 365.261L1003.91 360.016H1010.03L1013 365.261L1010.03 370.594Z" fill="#B7C1D6" />
                                <path d="M1010.03 357.391H1003.91L1000.85 352.146L1003.91 346.812H1010.03L1013 352.146L1010.03 357.391Z" fill="#B7C1D6" />
                                <path d="M1010.03 344.191H1003.91L1000.85 338.945L1003.91 333.699H1010.03L1013 338.945L1010.03 344.191Z" fill="#B7C1D6" />
                                <path d="M1010.03 331.075H1003.91L1000.85 325.742L1003.91 320.496H1010.03L1013 325.742L1010.03 331.075Z" fill="#B7C1D6" />
                                <path d="M1010.03 317.874H1003.91L1000.85 312.628L1003.91 307.295H1010.03L1013 312.628L1010.03 317.874Z" fill="#B7C1D6" />
                                <path d="M1010.03 304.673H1003.91L1000.85 299.427L1003.91 294.182H1010.03L1013 299.427L1010.03 304.673Z" fill="#B7C1D6" />
                                <path d="M1010.03 291.47H1003.91L1000.85 286.224L1003.91 280.979H1010.03L1013 286.224L1010.03 291.47Z" fill="#B7C1D6" />
                                <path d="M1010.03 278.356H1003.91L1000.85 273.023L1003.91 267.777H1010.03L1013 273.023L1010.03 278.356Z" fill="#B7C1D6" />
                                <path d="M1010.03 265.155H1003.91L1000.85 259.909L1003.91 254.576H1010.03L1013 259.909L1010.03 265.155Z" fill="#B7C1D6" />
                                <path d="M1010.03 251.952H1003.91L1000.85 246.707L1003.91 241.461H1010.03L1013 246.707L1010.03 251.952Z" fill="#B7C1D6" />
                                <path d="M1010.03 238.839H1003.91L1000.85 233.505L1003.91 228.26H1010.03L1013 233.505L1010.03 238.839Z" fill="#B7C1D6" />
                                <path d="M1010.03 225.637H1003.91L1000.85 220.392L1003.91 215.059H1010.03L1013 220.392L1010.03 225.637Z" fill="#B7C1D6" />
                                <path d="M1010.03 212.435H1003.91L1000.85 207.189L1003.91 201.943H1010.03L1013 207.189L1010.03 212.435Z" fill="#B7C1D6" />
                                <path d="M1010.03 199.234H1003.91L1000.85 193.988L1003.91 188.742H1010.03L1013 193.988L1010.03 199.234Z" fill="#B7C1D6" />
                                <path d="M1010.03 186.12H1003.91L1000.85 180.787L1003.91 175.541H1010.03L1013 180.787L1010.03 186.12Z" fill="#B7C1D6" />
                                <path d="M1010.03 172.917H1003.91L1000.85 167.671L1003.91 162.338H1010.03L1013 167.671L1010.03 172.917Z" fill="#B7C1D6" />
                                <path d="M998.579 166.36H992.546L989.486 161.027L992.546 155.781H998.579L1001.64 161.027L998.579 166.36Z" fill="#B7C1D6" />
                                <path d="M987.213 159.716H981.093L978.033 154.47L981.093 149.225H987.213L990.186 154.47L987.213 159.716Z" fill="#B7C1D6" />
                                <path d="M975.76 153.159H969.727L966.667 147.913L969.727 142.58H975.76L978.82 147.913L975.76 153.159Z" fill="#B7C1D6" />
                                <path d="M964.394 146.602H958.274L955.214 141.269L958.274 136.023H964.394L967.367 141.269L964.394 146.602Z" fill="#B7C1D6" />
                                <path d="M952.941 139.956H946.821L943.849 134.711L946.821 129.465H952.941L956.001 134.711L952.941 139.956Z" fill="#B7C1D6" />
                                <path d="M941.575 133.399H935.455L932.395 128.153L935.455 122.82H941.575L944.548 128.153L941.575 133.399Z" fill="#B7C1D6" />
                                <path d="M930.122 126.843H924.002L921.03 121.509L924.002 116.264H930.122L933.182 121.509L930.122 126.843Z" fill="#B7C1D6" />
                                <path d="M918.757 120.198H912.637L909.577 114.953L912.637 109.707H918.757L921.729 114.953L918.757 120.198Z" fill="#B7C1D6" />
                                <path d="M907.303 113.641H901.183L898.211 108.396L901.183 103.062H907.303L910.363 108.396L907.303 113.641Z" fill="#B7C1D6" />
                                <path d="M894.539 104.636H891.217L889.555 101.751L891.217 98.9531H894.539L896.113 101.751L894.539 104.636Z" fill="#B7C1D6" />
                                <path d="M882.211 96.4182H880.725L880.026 95.1942L880.725 93.8828H882.211L882.911 95.1942L882.211 96.4182Z" fill="#B7C1D6" />
                                <path d="M849.338 79.0202H845.142L843.043 75.4357L845.142 71.7637H849.338L851.349 75.4357L849.338 79.0202Z" fill="#B7C1D6" />
                                <path d="M586.79 32.8571H582.769L580.67 29.2725L582.769 25.7754H586.79L588.801 29.2725L586.79 32.8571Z" fill="#B7C1D6" />
                                <path d="M576.386 41.1628H570.266L567.294 35.9171L570.266 30.584H576.386L579.446 35.9171L576.386 41.1628Z" fill="#B7C1D6" />
                                <path d="M565.021 47.7199H558.901L555.841 42.4742L558.901 37.2285H565.021L567.993 42.4742L565.021 47.7199Z" fill="#B7C1D6" />
                                <path d="M553.567 54.364H547.447L544.475 49.0309L547.447 43.7852H553.567L556.627 49.0309L553.567 54.364Z" fill="#B7C1D6" />
                                <path d="M542.114 60.9226H536.082L533.022 55.6769L536.082 50.3438H542.114L545.174 55.6769L542.114 60.9226Z" fill="#D63129" />
                                <path d="M530.749 67.4797H524.629L521.656 62.234L524.629 56.9883H530.749L533.809 62.234L530.749 67.4797Z" fill="#B7C1D6" />
                                <path d="M519.295 74.1238H513.263L510.203 68.7906L513.263 63.5449H519.295L522.355 68.7906L519.295 74.1238Z" fill="#B7C1D6" />
                                <path d="M507.93 80.6809H501.81L498.837 75.4352L501.81 70.1895H507.93L510.99 75.4352L507.93 80.6809Z" fill="#B7C1D6" />
                                <path d="M496.477 87.2375H490.444L487.384 81.9918L490.444 76.7461H496.477L499.537 81.9918L496.477 87.2375Z" fill="#B7C1D6" />
                                <path d="M485.111 93.8816H478.991L475.931 88.6359L478.991 83.3027H485.111L488.171 88.6359L485.111 93.8816Z" fill="#B7C1D6" />
                                <path d="M473.658 100.351H467.625L464.653 95.193L467.625 89.9473H473.658L476.63 95.193L473.658 100.351Z" fill="#B7C1D6" />
                                <path d="M459.931 102.886H458.533L457.921 101.75L458.533 100.613H459.931L460.543 101.75L459.931 102.886Z" fill="#B7C1D6" />
                                <path d="M426.883 124.745H423.124L421.288 121.51L423.124 118.275H426.883L428.719 121.51L426.883 124.745Z" fill="#B7C1D6" />
                                <path d="M416.654 133.399H410.534L407.474 128.153L410.534 122.82H416.654L419.714 128.153L416.654 133.399Z" fill="#B7C1D6" />
                                <path d="M405.201 139.956H399.169L396.109 134.711L399.169 129.465H405.201L408.261 134.711L405.201 139.956Z" fill="#B7C1D6" />
                                <path d="M393.748 146.515H387.715L384.743 141.27L387.715 136.111H393.748L396.808 141.27L393.748 146.515Z" fill="#B7C1D6" />
                                <path d="M380.022 149.05H378.71L378.011 147.913L378.71 146.689H380.022L380.721 147.913L380.022 149.05Z" fill="#B7C1D6" />
                                <path d="M369.355 156.917H366.558L365.159 154.469L366.558 152.021H369.355L370.754 154.469L369.355 156.917Z" fill="#B7C1D6" />
                                <path d="M346.012 195.561H344.176L343.302 193.988L344.176 192.414H346.012L346.974 193.988L346.012 195.561Z" fill="#B7C1D6" />
                                <path d="M348.198 212.435H342.078L339.018 207.189L342.078 201.943H348.198L351.17 207.189L348.198 212.435Z" fill="#B7C1D6" />
                                <path d="M348.198 225.637H342.078L339.018 220.392L342.078 215.059H348.198L351.17 220.392L348.198 225.637Z" fill="#B7C1D6" />
                                <path d="M348.198 238.839H342.078L339.018 233.505L342.078 228.26H348.198L351.17 233.505L348.198 238.839Z" fill="#B7C1D6" />
                                <path d="M348.198 251.952H342.078L339.018 246.707L342.078 241.461H348.198L351.17 246.707L348.198 251.952Z" fill="#B7C1D6" />
                                <path d="M348.198 265.155H342.078L339.018 259.909L342.078 254.576H348.198L351.17 259.909L348.198 265.155Z" fill="#B7C1D6" />
                                <path d="M348.198 278.356H342.078L339.018 273.023L342.078 267.777H348.198L351.17 273.023L348.198 278.356Z" fill="#B7C1D6" />
                                <path d="M348.198 291.47H342.078L339.018 286.224L342.078 280.979H348.198L351.17 286.224L348.198 291.47Z" fill="#B7C1D6" />
                                <path d="M348.198 304.673H342.078L339.018 299.427L342.078 294.182H348.198L351.17 299.427L348.198 304.673Z" fill="#B7C1D6" />
                                <path d="M348.11 317.7H342.165L339.193 312.629L342.165 307.471H348.11L351.083 312.629L348.11 317.7Z" fill="#B7C1D6" />
                                <path d="M346.099 327.492H344.176L343.127 325.743L344.176 324.082H346.099L347.061 325.743L346.099 327.492Z" fill="#B7C1D6" />
                                <path d="M347.673 343.404H342.602L339.979 338.945L342.602 334.486H347.673L350.209 338.945L347.673 343.404Z" fill="#B7C1D6" />
                                <path d="M345.925 366.659H344.351L343.477 365.26L344.351 363.861H345.925L346.711 365.26L345.925 366.659Z" fill="#B7C1D6" />
                                <path d="M348.023 423.05H342.253L339.367 417.98L342.253 412.996H348.023L350.908 417.98L348.023 423.05Z" fill="#B7C1D6" />
                                <path d="M346.012 432.668H344.263L343.389 431.182L344.263 429.695H346.012L346.886 431.182L346.012 432.668Z" fill="#B7C1D6" />
                                <path d="M346.974 447.531H343.302L341.466 444.383L343.302 441.148H346.974L348.81 444.383L346.974 447.531Z" fill="#B7C1D6" />
                                <path d="M348.198 462.831H342.078L339.018 457.498L342.078 452.252H348.198L351.17 457.498L348.198 462.831Z" fill="#B7C1D6" />
                                <path d="M348.11 475.945H342.078L339.105 470.699L342.078 465.453H348.11L351.17 470.699L348.11 475.945Z" fill="#B7C1D6" />
                                <path d="M346.362 485.912H343.914L342.777 483.901L343.914 481.803H346.362L347.498 483.901L346.362 485.912Z" fill="#B7C1D6" />
                                <path d="M347.761 501.649H342.427L339.805 497.015L342.427 492.469H347.761L350.471 497.015L347.761 501.649Z" fill="#B7C1D6" />
                                <path d="M381.071 585.668H377.661L375.913 582.695L377.661 579.723H381.071L382.819 582.695L381.071 585.668Z" fill="#B7C1D6" />
                                <path d="M393.835 594.587H387.715L384.655 589.254L387.715 584.008H393.835L396.895 589.254L393.835 594.587Z" fill="#B7C1D6" />
                                <path d="M405.201 601.142H399.169L396.109 595.896L399.169 590.65H405.201L408.261 595.896L405.201 601.142Z" fill="#B7C1D6" />
                                <path d="M416.654 607.7H410.534L407.474 602.455L410.534 597.209H416.654L419.714 602.455L416.654 607.7Z" fill="#B7C1D6" />
                                <path d="M428.02 614.344H421.987L418.927 609.011L421.987 603.766H428.02L431.08 609.011L428.02 614.344Z" fill="#B7C1D6" />
                                <path d="M437.987 618.366H434.839L433.266 615.656L434.839 612.945H437.987L439.561 615.656L437.987 618.366Z" fill="#B7C1D6" />
                                <path d="M1020.35 467.551H1016.41L1014.4 464.142L1016.41 460.645H1020.35L1022.36 464.142L1020.35 467.551Z" fill="#B7C1D6" />
                                <path d="M1021.22 455.924H1015.54L1012.65 450.94L1015.54 445.957H1021.22L1024.11 450.94L1021.22 455.924Z" fill="#B7C1D6" />
                                <path d="M1019.3 439.399H1017.46L1016.5 437.738L1017.46 436.164H1019.3L1020.26 437.738L1019.3 439.399Z" fill="#B7C1D6" />
                                <path d="M1021.31 429.607H1015.45L1012.57 424.624L1015.45 419.553H1021.31L1024.2 424.624L1021.31 429.607Z" fill="#B7C1D6" />
                                <path d="M1019.3 412.997H1017.46L1016.5 411.423L1017.46 409.85H1019.3L1020.17 411.423L1019.3 412.997Z" fill="#B7C1D6" />
                                <path d="M1021.22 403.205H1015.45L1012.65 398.222L1015.45 393.238H1021.22L1024.11 398.222L1021.22 403.205Z" fill="#B7C1D6" />
                                <path d="M1021.4 390.352H1015.37L1012.31 385.019L1015.37 379.773H1021.4L1024.46 385.019L1021.4 390.352Z" fill="#B7C1D6" />
                                <path d="M1021.4 377.151H1015.37L1012.31 371.905L1015.37 366.572H1021.4L1024.46 371.905L1021.4 377.151Z" fill="#B7C1D6" />
                                <path d="M1021.4 363.948H1015.37L1012.31 358.703L1015.37 353.457H1021.4L1024.46 358.703L1021.4 363.948Z" fill="#B7C1D6" />
                                <path d="M1021.4 350.835H1015.37L1012.31 345.502L1015.37 340.256H1021.4L1024.46 345.502L1021.4 350.835Z" fill="#B7C1D6" />
                                <path d="M1021.4 337.634H1015.37L1012.31 332.388L1015.37 327.055H1021.4L1024.46 332.388L1021.4 337.634Z" fill="#B7C1D6" />
                                <path d="M1021.4 324.431H1015.37L1012.31 319.185L1015.37 313.939H1021.4L1024.46 319.185L1021.4 324.431Z" fill="#B7C1D6" />
                                <path d="M1021.4 311.23H1015.37L1012.31 305.984L1015.37 300.738H1021.4L1024.46 305.984L1021.4 311.23Z" fill="#B7C1D6" />
                                <path d="M1021.4 298.116H1015.37L1012.31 292.87L1015.37 287.537H1021.4L1024.46 292.87L1021.4 298.116Z" fill="#B7C1D6" />
                                <path d="M1021.4 284.913H1015.37L1012.31 279.668L1015.37 274.422H1021.4L1024.46 279.668L1021.4 284.913Z" fill="#B7C1D6" />
                                <path d="M1021.4 271.712H1015.37L1012.31 266.466L1015.37 261.221H1021.4L1024.46 266.466L1021.4 271.712Z" fill="#B7C1D6" />
                                <path d="M1021.4 258.598H1015.37L1012.31 253.265L1015.37 248.02H1021.4L1024.46 253.265L1021.4 258.598Z" fill="#B7C1D6" />
                                <path d="M1021.4 245.395H1015.37L1012.31 240.15L1015.37 234.816H1021.4L1024.46 240.15L1021.4 245.395Z" fill="#B7C1D6" />
                                <path d="M1021.4 232.195H1015.37L1012.31 226.949L1015.37 221.703H1021.4L1024.46 226.949L1021.4 232.195Z" fill="#B7C1D6" />
                                <path d="M1021.4 219.081H1015.37L1012.31 213.748L1015.37 208.502H1021.4L1024.46 213.748L1021.4 219.081Z" fill="#B7C1D6" />
                                <path d="M1021.4 205.878H1015.37L1012.31 200.632L1015.37 195.299H1021.4L1024.46 200.632L1021.4 205.878Z" fill="#B7C1D6" />
                                <path d="M1021.4 192.677H1015.37L1012.31 187.431L1015.37 182.186H1021.4L1024.46 187.431L1021.4 192.677Z" fill="#B7C1D6" />
                                <path d="M1021.4 179.476H1015.37L1012.31 174.23L1015.37 168.984H1021.4L1024.46 174.23L1021.4 179.476Z" fill="#B7C1D6" />
                                <path d="M1021.4 166.36H1015.37L1012.31 161.027L1015.37 155.781H1021.4L1024.46 161.027L1021.4 166.36Z" fill="#B7C1D6" />
                                <path d="M1010.03 159.716H1003.91L1000.85 154.47L1003.91 149.225H1010.03L1013 154.47L1010.03 159.716Z" fill="#B7C1D6" />
                                <path d="M998.579 153.159H992.546L989.486 147.913L992.546 142.58H998.579L1001.64 147.913L998.579 153.159Z" fill="#B7C1D6" />
                                <path d="M987.213 146.602H981.093L978.033 141.269L981.093 136.023H987.213L990.186 141.269L987.213 146.602Z" fill="#B7C1D6" />
                                <path d="M975.76 139.956H969.727L966.667 134.711L969.727 129.465H975.76L978.82 134.711L975.76 139.956Z" fill="#B7C1D6" />
                                <path d="M964.394 133.399H958.274L955.214 128.153L958.274 122.82H964.394L967.367 128.153L964.394 133.399Z" fill="#B7C1D6" />
                                <path d="M952.941 126.843H946.821L943.849 121.509L946.821 116.264H952.941L956.001 121.509L952.941 126.843Z" fill="#B7C1D6" />
                                <path d="M941.575 120.198H935.455L932.395 114.953L935.455 109.707H941.575L944.548 114.953L941.575 120.198Z" fill="#B7C1D6" />
                                <path d="M930.122 113.641H924.002L921.03 108.396L924.002 103.062H930.122L933.182 108.396L930.122 113.641Z" fill="#B7C1D6" />
                                <path d="M918.582 106.909H912.724L909.751 101.751L912.724 96.6797H918.582L921.554 101.751L918.582 106.909Z" fill="#D63129" />
                                <path d="M905.73 97.6421H902.845L901.358 95.1941L902.845 92.7461H905.73L907.129 95.1941L905.73 97.6421Z" fill="#B7C1D6" />
                                <path d="M861.316 73.4241H855.983L853.273 68.7904L855.983 64.2441H861.316L863.939 68.7904L861.316 73.4241Z" fill="#B7C1D6" />
                                <path d="M586.79 19.7429H582.681L580.583 16.1583L582.681 12.4863H586.79L588.889 16.1583L586.79 19.7429Z" fill="#B7C1D6" />
                                <path d="M576.124 27.5234H570.616L567.818 22.7148L570.616 17.9062H576.124L578.834 22.7148L576.124 27.5234Z" fill="#B7C1D6" />
                                <path d="M563.272 31.6333H560.562L559.25 29.2727L560.562 26.9121H563.272L564.671 29.2727L563.272 31.6333Z" fill="#B7C1D6" />
                                <path d="M553.567 41.1628H547.447L544.475 35.9171L547.447 30.584H553.567L556.627 35.9171L553.567 41.1628Z" fill="#B7C1D6" />
                                <path d="M542.114 47.7199H536.082L533.022 42.4742L536.082 37.2285H542.114L545.174 42.4742L542.114 47.7199Z" fill="#B7C1D6" />
                                <path d="M530.749 54.364H524.629L521.656 49.0309L524.629 43.7852H530.749L533.809 49.0309L530.749 54.364Z" fill="#B7C1D6" />
                                <path d="M519.295 60.9226H513.263L510.203 55.6769L513.263 50.3438H519.295L522.355 55.6769L519.295 60.9226Z" fill="#B7C1D6" />
                                <path d="M507.93 67.4797H501.81L498.837 62.234L501.81 56.9883H507.93L510.99 62.234L507.93 67.4797Z" fill="#B7C1D6" />
                                <path d="M496.477 74.1238H490.444L487.384 68.7906L490.444 63.5449H496.477L499.537 68.7906L496.477 74.1238Z" fill="#B7C1D6" />
                                <path d="M485.111 80.6809H478.991L475.931 75.4352L478.991 70.1895H485.111L488.171 75.4352L485.111 80.6809Z" fill="#B7C1D6" />
                                <path d="M473.658 87.2375H467.625L464.565 81.9918L467.625 76.7461H473.658L476.718 81.9918L473.658 87.2375Z" fill="#B7C1D6" />
                                <path d="M460.369 90.5593H458.095L456.959 88.6359L458.095 86.625H460.369L461.505 88.6359L460.369 90.5593Z" fill="#B7C1D6" />
                                <path d="M416.654 120.198H410.534L407.474 114.953L410.534 109.707H416.654L419.714 114.953L416.654 120.198Z" fill="#B7C1D6" />
                                <path d="M405.026 126.492H399.343L396.458 121.509L399.343 116.525H405.026L407.911 121.509L405.026 126.492Z" fill="#B7C1D6" />
                                <path d="M358.864 151.934H354.23L351.87 147.912L354.23 143.891H358.864L361.225 147.912L358.864 151.934Z" fill="#B7C1D6" />
                                <path d="M334.996 163.301H332.461L331.149 161.028L332.461 158.842H334.996L336.307 161.028L334.996 163.301Z" fill="#B7C1D6" />
                                <path d="M334.646 189.004H332.81L331.849 187.431L332.81 185.77H334.646L335.608 187.431L334.646 189.004Z" fill="#B7C1D6" />
                                <path d="M336.745 205.878H330.712L327.652 200.632L330.712 195.299H336.745L339.805 200.632L336.745 205.878Z" fill="#B7C1D6" />
                                <path d="M336.745 219.081H330.712L327.652 213.748L330.712 208.502H336.745L339.805 213.748L336.745 219.081Z" fill="#B7C1D6" />
                                <path d="M336.745 232.195H330.712L327.652 226.949L330.712 221.703H336.745L339.805 226.949L336.745 232.195Z" fill="#B7C1D6" />
                                <path d="M336.745 245.395H330.712L327.652 240.15L330.712 234.816H336.745L339.805 240.15L336.745 245.395Z" fill="#B7C1D6" />
                                <path d="M336.745 258.598H330.712L327.652 253.265L330.712 248.02H336.745L339.805 253.265L336.745 258.598Z" fill="#B7C1D6" />
                                <path d="M336.745 271.712H330.712L327.652 266.466L330.712 261.221H336.745L339.805 266.466L336.745 271.712Z" fill="#049848" />
                                <path d="M336.745 284.913H330.712L327.652 279.668L330.712 274.422H336.745L339.805 279.668L336.745 284.913Z" fill="#B7C1D6" />
                                <path d="M336.745 298.116H330.712L327.652 292.87L330.712 287.537H336.745L339.805 292.87L336.745 298.116Z" fill="#B7C1D6" />
                                <path d="M336.745 311.23H330.712L327.652 305.984L330.712 300.738H336.745L339.805 305.984L336.745 311.23Z" fill="#B7C1D6" />
                                <path d="M336.745 324.431H330.712L327.652 319.185L330.712 313.939H336.745L339.805 319.185L336.745 324.431Z" fill="#B7C1D6" />
                                <path d="M334.821 334.311H332.548L331.411 332.388L332.548 330.377H334.821L336.045 332.388L334.821 334.311Z" fill="#B7C1D6" />
                                <path d="M336.395 363.336H331.062L328.439 358.703L331.062 354.156H336.395L339.018 358.703L336.395 363.336Z" fill="#B7C1D6" />
                                <path d="M334.384 399.444H332.985L332.286 398.22L332.985 396.996H334.384L335.083 398.22L334.384 399.444Z" fill="#B7C1D6" />
                                <path d="M334.646 412.997H332.81L331.849 411.423L332.81 409.762H334.646L335.608 411.423L334.646 412.997Z" fill="#B7C1D6" />
                                <path d="M334.996 426.723H332.461L331.237 424.625L332.461 422.439H334.996L336.22 424.625L334.996 426.723Z" fill="#B7C1D6" />
                                <path d="M382.033 600.531H376.612L373.902 595.897L376.612 591.176H382.033L384.743 595.897L382.033 600.531Z" fill="#B7C1D6" />
                                <path d="M393.835 607.7H387.715L384.655 602.455L387.715 597.209H393.835L396.895 602.455L393.835 607.7Z" fill="#B7C1D6" />
                                <path d="M405.201 614.344H399.169L396.109 609.011L399.169 603.766H405.201L408.261 609.011L405.201 614.344Z" fill="#B7C1D6" />
                                <path d="M416.654 620.902H410.534L407.474 615.656L410.534 610.41H416.654L419.714 615.656L416.654 620.902Z" fill="#B7C1D6" />
                                <path d="M428.02 627.458H421.987L418.927 622.213L421.987 616.967H428.02L431.08 622.213L428.02 627.458Z" fill="#B7C1D6" />
                                <path d="M1032.68 475.682H1026.91L1024.02 470.698L1026.91 465.715H1032.68L1035.47 470.698L1032.68 475.682Z" fill="#B7C1D6" />
                                <path d="M1032.59 462.394H1026.99L1024.2 457.498L1026.99 452.689H1032.59L1035.39 457.498L1032.59 462.394Z" fill="#B7C1D6" />
                                <path d="M1031.1 446.57H1028.48L1027.17 444.384L1028.48 442.111H1031.1L1032.41 444.384L1031.1 446.57Z" fill="#B7C1D6" />
                                <path d="M1031.28 433.804H1028.3L1026.82 431.181L1028.3 428.559H1031.28L1032.76 431.181L1031.28 433.804Z" fill="#B7C1D6" />
                                <path d="M1032.85 410.112H1026.73L1023.67 404.866L1026.73 399.533H1032.85L1035.91 404.866L1032.85 410.112Z" fill="#B7C1D6" />
                                <path d="M1032.85 396.909H1026.73L1023.67 391.664L1026.73 386.418H1032.85L1035.91 391.664L1032.85 396.909Z" fill="#B7C1D6" />
                                <path d="M1032.85 383.708H1026.73L1023.67 378.463L1026.73 373.217H1032.85L1035.91 378.463L1032.85 383.708Z" fill="#B7C1D6" />
                                <path d="M1032.85 370.594H1026.73L1023.67 365.261L1026.73 360.016H1032.85L1035.91 365.261L1032.85 370.594Z" fill="#B7C1D6" />
                                <path d="M1032.85 357.391H1026.73L1023.67 352.146L1026.73 346.812H1032.85L1035.91 352.146L1032.85 357.391Z" fill="#B7C1D6" />
                                <path d="M1032.85 344.191H1026.73L1023.67 338.945L1026.73 333.699H1032.85L1035.91 338.945L1032.85 344.191Z" fill="#B7C1D6" />
                                <path d="M1032.85 331.075H1026.73L1023.67 325.742L1026.73 320.496H1032.85L1035.91 325.742L1032.85 331.075Z" fill="#B7C1D6" />
                                <path d="M1032.85 317.874H1026.73L1023.67 312.628L1026.73 307.295H1032.85L1035.91 312.628L1032.85 317.874Z" fill="#B7C1D6" />
                                <path d="M1032.85 304.673H1026.73L1023.67 299.427L1026.73 294.182H1032.85L1035.91 299.427L1032.85 304.673Z" fill="#B7C1D6" />
                                <path d="M1032.85 291.47H1026.73L1023.67 286.224L1026.73 280.979H1032.85L1035.91 286.224L1032.85 291.47Z" fill="#B7C1D6" />
                                <path d="M1032.85 278.356H1026.73L1023.67 273.023L1026.73 267.777H1032.85L1035.91 273.023L1032.85 278.356Z" fill="#B7C1D6" />
                                <path d="M1032.85 265.155H1026.73L1023.67 259.909L1026.73 254.576H1032.85L1035.91 259.909L1032.85 265.155Z" fill="#B7C1D6" />
                                <path d="M1032.85 251.952H1026.73L1023.67 246.707L1026.73 241.461H1032.85L1035.91 246.707L1032.85 251.952Z" fill="#B7C1D6" />
                                <path d="M1032.85 238.839H1026.73L1023.67 233.505L1026.73 228.26H1032.85L1035.91 233.505L1032.85 238.839Z" fill="#B7C1D6" />
                                <path d="M1032.85 225.637H1026.73L1023.67 220.392L1026.73 215.059H1032.85L1035.91 220.392L1032.85 225.637Z" fill="#B7C1D6" />
                                <path d="M1032.85 212.435H1026.73L1023.67 207.189L1026.73 201.943H1032.85L1035.91 207.189L1032.85 212.435Z" fill="#B7C1D6" />
                                <path d="M1032.85 199.234H1026.73L1023.67 193.988L1026.73 188.742H1032.85L1035.91 193.988L1032.85 199.234Z" fill="#B7C1D6" />
                                <path d="M1032.85 186.12H1026.73L1023.67 180.787L1026.73 175.541H1032.85L1035.91 180.787L1032.85 186.12Z" fill="#B7C1D6" />
                                <path d="M1032.85 172.917H1026.73L1023.67 167.671L1026.73 162.338H1032.85L1035.91 167.671L1032.85 172.917Z" fill="#B7C1D6" />
                                <path d="M1032.85 159.716H1026.73L1023.67 154.47L1026.73 149.225H1032.85L1035.91 154.47L1032.85 159.716Z" fill="#B7C1D6" />
                                <path d="M1021.4 153.159H1015.37L1012.31 147.913L1015.37 142.58H1021.4L1024.46 147.913L1021.4 153.159Z" fill="#D63129" />
                                <path d="M1010.03 146.602H1003.91L1000.85 141.269L1003.91 136.023H1010.03L1013 141.269L1010.03 146.602Z" fill="#B7C1D6" />
                                <path d="M998.579 139.956H992.546L989.486 134.711L992.546 129.465H998.579L1001.64 134.711L998.579 139.956Z" fill="#B7C1D6" />
                                <path d="M987.213 133.399H981.093L978.033 128.153L981.093 122.82H987.213L990.186 128.153L987.213 133.399Z" fill="#B7C1D6" />
                                <path d="M975.76 126.843H969.727L966.667 121.509L969.727 116.264H975.76L978.82 121.509L975.76 126.843Z" fill="#B7C1D6" />
                                <path d="M964.394 120.198H958.274L955.214 114.953L958.274 109.707H964.394L967.367 114.953L964.394 120.198Z" fill="#B7C1D6" />
                                <path d="M952.941 113.641H946.821L943.849 108.396L946.821 103.062H952.941L956.001 108.396L952.941 113.641Z" fill="#B7C1D6" />
                                <path d="M941.575 107.083H935.455L932.395 101.75L935.455 96.5039H941.575L944.548 101.75L941.575 107.083Z" fill="#B7C1D6" />
                                <path d="M930.122 100.439H924.002L921.03 95.193L924.002 89.9473H930.122L933.182 95.193L930.122 100.439Z" fill="#B7C1D6" />
                                <path d="M917.882 92.3953H913.511L911.325 88.6359L913.511 84.7891H917.882L920.068 88.6359L917.882 92.3953Z" fill="#B7C1D6" />
                                <path d="M836.923 44.3976H834.65L833.601 42.4742L834.65 40.5508H836.923L838.06 42.4742L836.923 44.3976Z" fill="#B7C1D6" />
                                <path d="M564.846 21.2291H558.988L556.015 16.1583L558.988 11H564.846L567.818 16.1583L564.846 21.2291Z" fill="#B7C1D6" />
                                <path d="M553.393 27.6993H547.622L544.737 22.7158L547.622 17.7324H553.393L556.278 22.7158L553.393 27.6993Z" fill="#B7C1D6" />
                                <path d="M542.114 34.6062H536.082L533.022 29.2731L536.082 24.0273H542.114L545.174 29.2731L542.114 34.6062Z" fill="#B7C1D6" />
                                <path d="M530.749 41.1628H524.629L521.656 35.9171L524.629 30.584H530.749L533.809 35.9171L530.749 41.1628Z" fill="#B7C1D6" />
                                <path d="M519.295 47.7199H513.263L510.203 42.4742L513.263 37.2285H519.295L522.355 42.4742L519.295 47.7199Z" fill="#B7C1D6" />
                                <path d="M507.93 54.364H501.81L498.837 49.0309L501.81 43.7852H507.93L510.99 49.0309L507.93 54.364Z" fill="#B7C1D6" />
                                <path d="M496.477 60.9226H490.444L487.384 55.6769L490.444 50.3438H496.477L499.537 55.6769L496.477 60.9226Z" fill="#B7C1D6" />
                                <path d="M485.111 67.4797H478.991L475.931 62.234L478.991 56.9883H485.111L488.171 62.234L485.111 67.4797Z" fill="#B7C1D6" />
                                <path d="M473.658 74.1238H467.625L464.565 68.7906L467.625 63.5449H473.658L476.718 68.7906L473.658 74.1238Z" fill="#B7C1D6" />
                                <path d="M462.205 80.5065H456.259L453.374 75.4356L456.259 70.2773H462.205L465.09 75.4356L462.205 80.5065Z" fill="#B7C1D6" />
                                <path d="M415.343 104.811H411.846L410.01 101.751L411.846 98.6914H415.343L417.179 101.751L415.343 104.811Z" fill="#B7C1D6" />
                                <path d="M405.201 113.641H399.169L396.109 108.396L399.169 103.062H405.201L408.261 108.396L405.201 113.641Z" fill="#B7C1D6" />
                                <path d="M393.049 118.886H388.502L386.229 114.952L388.502 111.018H393.049L395.322 114.952L393.049 118.886Z" fill="#B7C1D6" />
                                <path d="M371.017 133.399H364.897L361.837 128.153L364.897 122.82H371.017L374.077 128.153L371.017 133.399Z" fill="#B7C1D6" />
                                <path d="M359.476 139.695H353.618L350.733 134.712L353.618 129.729H359.476L362.361 134.712L359.476 139.695Z" fill="#B7C1D6" />
                                <path d="M348.198 146.602H342.078L339.018 141.269L342.078 136.023H348.198L351.17 141.269L348.198 146.602Z" fill="#B7C1D6" />
                                <path d="M336.745 153.159H330.712L327.652 147.913L330.712 142.58H336.745L339.805 147.913L336.745 153.159Z" fill="#B7C1D6" />
                                <path d="M325.379 159.716H319.259L316.199 154.47L319.259 149.225H325.379L328.351 154.47L325.379 159.716Z" fill="#B7C1D6" />
                                <path d="M325.204 172.743H319.346L316.461 167.672L319.346 162.602H325.204L328.177 167.672L325.204 172.743Z" fill="#B7C1D6" />
                                <path d="M325.029 185.507H319.609L316.898 180.786L319.609 176.152H325.029L327.652 180.786L325.029 185.507Z" fill="#B7C1D6" />
                                <path d="M325.379 199.234H319.259L316.199 193.988L319.259 188.742H325.379L328.351 193.988L325.379 199.234Z" fill="#B7C1D6" />
                                <path d="M325.379 212.435H319.259L316.199 207.189L319.259 201.943H325.379L328.351 207.189L325.379 212.435Z" fill="#B7C1D6" />
                                <path d="M325.379 225.637H319.259L316.199 220.392L319.259 215.059H325.379L328.351 220.392L325.379 225.637Z" fill="#B7C1D6" />
                                <path d="M325.379 238.839H319.259L316.199 233.505L319.259 228.26H325.379L328.351 233.505L325.379 238.839Z" fill="#049848" />
                                <path d="M325.379 251.952H319.259L316.199 246.707L319.259 241.461H325.379L328.351 246.707L325.379 251.952Z" fill="#B7C1D6" />
                                <path d="M325.379 265.155H319.259L316.199 259.909L319.259 254.576H325.379L328.351 259.909L325.379 265.155Z" fill="#B7C1D6" />
                                <path d="M325.379 278.356H319.259L316.199 273.023L319.259 267.777H325.379L328.351 273.023L325.379 278.356Z" fill="#B7C1D6" />
                                <path d="M325.379 291.47H319.259L316.199 286.224L319.259 280.979H325.379L328.351 286.224L325.379 291.47Z" fill="#B7C1D6" />
                                <path d="M325.379 304.673H319.259L316.199 299.427L319.259 294.182H325.379L328.351 299.427L325.379 304.673Z" fill="#B7C1D6" />
                                <path d="M325.379 317.874H319.259L316.199 312.628L319.259 307.295H325.379L328.351 312.628L325.379 317.874Z" fill="#B7C1D6" />
                                <path d="M325.204 330.814H319.346L316.461 325.743L319.346 320.672H325.204L328.177 325.743L325.204 330.814Z" fill="#B7C1D6" />
                                <path d="M325.379 396.909H319.259L316.199 391.664L319.259 386.418H325.379L328.351 391.664L325.379 396.909Z" fill="#B7C1D6" />
                                <path d="M325.379 410.112H319.259L316.199 404.866L319.259 399.533H325.379L328.351 404.866L325.379 410.112Z" fill="#B7C1D6" />
                                <path d="M322.756 418.854H321.794L321.357 417.98L321.794 417.193H322.756L323.281 417.98L322.756 418.854Z" fill="#B7C1D6" />
                                <path d="M382.382 614.344H376.35L373.29 609.011L376.35 603.766H382.382L385.442 609.011L382.382 614.344Z" fill="#B7C1D6" />
                                <path d="M393.835 620.902H387.715L384.655 615.656L387.715 610.41H393.835L396.895 615.656L393.835 620.902Z" fill="#B7C1D6" />
                                <path d="M405.201 627.458H399.169L396.109 622.213L399.169 616.967H405.201L408.261 622.213L405.201 627.458Z" fill="#B7C1D6" />
                                <path d="M416.654 634.015H410.534L407.562 628.857L410.534 623.611H416.654L419.627 628.857L416.654 634.015Z" fill="#B7C1D6" />
                                <path d="M1042.73 479.879H1039.67L1038.18 477.256L1039.67 474.721H1042.73L1044.22 477.256L1042.73 479.879Z" fill="#B7C1D6" />
                                <path d="M1044.04 416.232H1038.36L1035.56 411.423L1038.36 406.527H1044.04L1046.84 411.423L1044.04 416.232Z" fill="#B7C1D6" />
                                <path d="M1044.22 403.466H1038.18L1035.12 398.22L1038.18 392.975H1044.22L1047.28 398.22L1044.22 403.466Z" fill="#B7C1D6" />
                                <path d="M1044.22 390.352H1038.18L1035.12 385.019L1038.18 379.773H1044.22L1047.28 385.019L1044.22 390.352Z" fill="#B7C1D6" />
                                <path d="M1042.38 373.916H1040.02L1038.88 371.905L1040.02 369.895H1042.38L1043.52 371.905L1042.38 373.916Z" fill="#B7C1D6" />
                                <path d="M1044.22 363.948H1038.18L1035.12 358.703L1038.18 353.457H1044.22L1047.28 358.703L1044.22 363.948Z" fill="#B7C1D6" />
                                <path d="M1044.22 350.835H1038.18L1035.12 345.502L1038.18 340.256H1044.22L1047.28 345.502L1044.22 350.835Z" fill="#B7C1D6" />
                                <path d="M1044.22 337.634H1038.18L1035.12 332.388L1038.18 327.055H1044.22L1047.28 332.388L1044.22 337.634Z" fill="#B7C1D6" />
                                <path d="M1044.22 324.431H1038.18L1035.12 319.185L1038.18 313.939H1044.22L1047.28 319.185L1044.22 324.431Z" fill="#B7C1D6" />
                                <path d="M1044.22 311.23H1038.18L1035.12 305.984L1038.18 300.738H1044.22L1047.28 305.984L1044.22 311.23Z" fill="#B7C1D6" />
                                <path d="M1044.22 298.116H1038.18L1035.12 292.87L1038.18 287.537H1044.22L1047.28 292.87L1044.22 298.116Z" fill="#B7C1D6" />
                                <path d="M1044.22 284.913H1038.18L1035.12 279.668L1038.18 274.422H1044.22L1047.28 279.668L1044.22 284.913Z" fill="#B7C1D6" />
                                <path d="M1044.22 271.712H1038.18L1035.12 266.466L1038.18 261.221H1044.22L1047.28 266.466L1044.22 271.712Z" fill="#B7C1D6" />
                                <path d="M1044.22 258.598H1038.18L1035.12 253.265L1038.18 248.02H1044.22L1047.28 253.265L1044.22 258.598Z" fill="#B7C1D6" />
                                <path d="M1044.22 245.395H1038.18L1035.12 240.15L1038.18 234.816H1044.22L1047.28 240.15L1044.22 245.395Z" fill="#B7C1D6" />
                                <path d="M1044.22 232.195H1038.18L1035.12 226.949L1038.18 221.703H1044.22L1047.28 226.949L1044.22 232.195Z" fill="#B7C1D6" />
                                <path d="M1044.22 219.081H1038.18L1035.12 213.748L1038.18 208.502H1044.22L1047.28 213.748L1044.22 219.081Z" fill="#B7C1D6" />
                                <path d="M1044.22 205.878H1038.18L1035.12 200.632L1038.18 195.299H1044.22L1047.28 200.632L1044.22 205.878Z" fill="#B7C1D6" />
                                <path d="M1044.22 192.677H1038.18L1035.12 187.431L1038.18 182.186H1044.22L1047.28 187.431L1044.22 192.677Z" fill="#B7C1D6" />
                                <path d="M1044.22 179.476H1038.18L1035.12 174.23L1038.18 168.984H1044.22L1047.28 174.23L1044.22 179.476Z" fill="#B7C1D6" />
                                <path d="M1044.22 166.36H1038.18L1035.12 161.027L1038.18 155.781H1044.22L1047.28 161.027L1044.22 166.36Z" fill="#B7C1D6" />
                                <path d="M1044.22 153.159H1038.18L1035.12 147.913L1038.18 142.58H1044.22L1047.28 147.913L1044.22 153.159Z" fill="#B7C1D6" />
                                <path d="M1032.85 146.602H1026.73L1023.67 141.269L1026.73 136.023H1032.85L1035.91 141.269L1032.85 146.602Z" fill="#B7C1D6" />
                                <path d="M1021.4 139.956H1015.37L1012.31 134.711L1015.37 129.465H1021.4L1024.46 134.711L1021.4 139.956Z" fill="#B7C1D6" />
                                <path d="M1010.03 133.399H1003.91L1000.85 128.153L1003.91 122.82H1010.03L1013 128.153L1010.03 133.399Z" fill="#B7C1D6" />
                                <path d="M998.579 126.843H992.546L989.486 121.509L992.546 116.264H998.579L1001.64 121.509L998.579 126.843Z" fill="#B7C1D6" />
                                <path d="M987.213 120.198H981.093L978.033 114.953L981.093 109.707H987.213L990.186 114.953L987.213 120.198Z" fill="#B7C1D6" />
                                <path d="M975.76 113.641H969.727L966.667 108.396L969.727 103.062H975.76L978.82 108.396L975.76 113.641Z" fill="#B7C1D6" />
                                <path d="M964.394 107.083H958.274L955.214 101.75L958.274 96.5039H964.394L967.367 101.75L964.394 107.083Z" fill="#B7C1D6" />
                                <path d="M952.941 100.439H946.821L943.849 95.193L946.821 89.9473H952.941L956.001 95.193L952.941 100.439Z" fill="#B7C1D6" />
                                <path d="M941.575 93.8816H935.455L932.395 88.6359L935.455 83.3027H941.575L944.548 88.6359L941.575 93.8816Z" fill="#B7C1D6" />
                                <path d="M930.035 87.151H924.09L921.205 81.9927L924.09 76.9219H930.035L933.007 81.9927L930.035 87.151Z" fill="#B7C1D6" />
                                <path d="M542.114 21.2291H536.169L533.197 16.1583L536.169 11H542.114L544.999 16.1583L542.114 21.2291Z" fill="#B7C1D6" />
                                <path d="M530.749 27.9621H524.629L521.656 22.7164L524.629 17.4707H530.749L533.809 22.7164L530.749 27.9621Z" fill="#B7C1D6" />
                                <path d="M519.295 34.6062H513.263L510.203 29.2731L513.263 24.0273H519.295L522.355 29.2731L519.295 34.6062Z" fill="#B7C1D6" />
                                <path d="M507.93 41.1628H501.81L498.837 35.9171L501.81 30.584H507.93L510.99 35.9171L507.93 41.1628Z" fill="#B7C1D6" />
                                <path d="M496.477 47.7199H490.444L487.384 42.4742L490.444 37.2285H496.477L499.537 42.4742L496.477 47.7199Z" fill="#B7C1D6" />
                                <path d="M485.111 54.364H478.991L475.931 49.0309L478.991 43.7852H485.111L488.171 49.0309L485.111 54.364Z" fill="#B7C1D6" />
                                <path d="M473.658 60.9226H467.625L464.565 55.6769L467.625 50.3438H473.658L476.718 55.6769L473.658 60.9226Z" fill="#B7C1D6" />
                                <path d="M462.292 67.4797H456.172L453.112 62.234L456.172 56.9883H462.292L465.352 62.234L462.292 67.4797Z" fill="#B7C1D6" />
                                <path d="M450.839 74.1238H444.806L441.746 68.7906L444.806 63.5449H450.839L453.899 68.7906L450.839 74.1238Z" fill="#B7C1D6" />
                                <path d="M437.55 77.4455H435.277L434.14 75.4347L435.277 73.4238H437.55L438.686 75.4347L437.55 77.4455Z" fill="#B7C1D6" />
                                <path d="M402.753 96.1554H401.617L401.005 95.1937L401.617 94.1445H402.753L403.365 95.1937L402.753 96.1554Z" fill="#B7C1D6" />
                                <path d="M393.835 107.083H387.715L384.655 101.75L387.715 96.5039H393.835L396.895 101.75L393.835 107.083Z" fill="#B7C1D6" />
                                <path d="M382.382 113.641H376.35L373.29 108.396L376.35 103.062H382.382L385.442 108.396L382.382 113.641Z" fill="#B7C1D6" />
                                <path d="M370.317 119.062H365.596L363.148 114.953L365.596 110.844H370.317L372.765 114.953L370.317 119.062Z" fill="#D63129" />
                                <path d="M358.252 124.57H354.755L353.006 121.51L354.755 118.537H358.252L360.088 121.51L358.252 124.57Z" fill="#B7C1D6" />
                                <path d="M348.198 133.399H342.078L339.018 128.153L342.078 122.82H348.198L351.17 128.153L348.198 133.399Z" fill="#B7C1D6" />
                                <path d="M336.745 139.956H330.712L327.652 134.711L330.712 129.465H336.745L339.805 134.711L336.745 139.956Z" fill="#B7C1D6" />
                                <path d="M325.379 146.602H319.259L316.199 141.269L319.259 136.023H325.379L328.351 141.269L325.379 146.602Z" fill="#B7C1D6" />
                                <path d="M313.926 153.159H307.893L304.833 147.913L307.893 142.58H313.926L316.986 147.913L313.926 153.159Z" fill="#B7C1D6" />
                                <path d="M313.926 166.36H307.893L304.833 161.027L307.893 155.781H313.926L316.986 161.027L313.926 166.36Z" fill="#B7C1D6" />
                                <path d="M313.926 179.476H307.893L304.833 174.23L307.893 168.984H313.926L316.986 174.23L313.926 179.476Z" fill="#B7C1D6" />
                                <path d="M313.926 192.677H307.893L304.833 187.431L307.893 182.186H313.926L316.986 187.431L313.926 192.677Z" fill="#B7C1D6" />
                                <path d="M313.926 205.878H307.893L304.833 200.632L307.893 195.299H313.926L316.986 200.632L313.926 205.878Z" fill="#B7C1D6" />
                                <path d="M313.926 219.081H307.893L304.833 213.748L307.893 208.502H313.926L316.986 213.748L313.926 219.081Z" fill="#B7C1D6" />
                                <path d="M313.926 232.195H307.893L304.833 226.949L307.893 221.703H313.926L316.986 226.949L313.926 232.195Z" fill="#B7C1D6" />
                                <path d="M313.926 245.395H307.893L304.833 240.15L307.893 234.816H313.926L316.986 240.15L313.926 245.395Z" fill="#B7C1D6" />
                                <path d="M313.926 258.598H307.893L304.833 253.265L307.893 248.02H313.926L316.986 253.265L313.926 258.598Z" fill="#B7C1D6" />
                                <path d="M313.926 271.712H307.893L304.833 266.466L307.893 261.221H313.926L316.986 266.466L313.926 271.712Z" fill="#B7C1D6" />
                                <path d="M313.926 284.913H307.893L304.833 279.668L307.893 274.422H313.926L316.986 279.668L313.926 284.913Z" fill="#B7C1D6" />
                                <path d="M313.926 298.116H307.893L304.833 292.87L307.893 287.537H313.926L316.986 292.87L313.926 298.116Z" fill="#049848" />
                                <path d="M313.926 311.23H307.893L304.833 305.984L307.893 300.738H313.926L316.986 305.984L313.926 311.23Z" fill="#B7C1D6" />
                                <path d="M313.926 324.431H307.893L304.833 319.185L307.893 313.939H313.926L316.986 319.185L313.926 324.431Z" fill="#B7C1D6" />
                                <path d="M312.964 335.884H308.855L306.757 332.387L308.855 328.803H312.964L314.975 332.387L312.964 335.884Z" fill="#B7C1D6" />
                                <path d="M313.926 377.151H307.893L304.833 371.905L307.893 366.572H313.926L316.986 371.905L313.926 377.151Z" fill="#B7C1D6" />
                                <path d="M313.663 389.829H308.155L305.358 385.02L308.155 380.299H313.663L316.374 385.02L313.663 389.829Z" fill="#B7C1D6" />
                                <path d="M313.926 403.466H307.893L304.833 398.22L307.893 392.975H313.926L316.986 398.22L313.926 403.466Z" fill="#B7C1D6" />
                                <path d="M382.295 627.284H376.437L373.552 622.213L376.437 617.143H382.295L385.18 622.213L382.295 627.284Z" fill="#B7C1D6" />
                                <path d="M393.835 634.102H387.715L384.655 628.857L387.715 623.523H393.835L396.895 628.857L393.835 634.102Z" fill="#B7C1D6" />
                                <path d="M405.201 640.661H399.169L396.109 635.416L399.169 630.17H405.201L408.261 635.416L405.201 640.661Z" fill="#B7C1D6" />
                                <path d="M414.469 643.459H412.72L411.846 641.973L412.72 640.486H414.469L415.343 641.973L414.469 643.459Z" fill="#B7C1D6" />
                                <path d="M1055.49 488.972H1049.72L1046.75 483.901L1049.72 478.83H1055.49L1058.47 483.901L1055.49 488.972Z" fill="#B7C1D6" />
                                <path d="M1054.71 461.169H1050.51L1048.41 457.497L1050.51 453.912H1054.71L1056.81 457.497L1054.71 461.169Z" fill="#B7C1D6" />
                                <path d="M1053.22 406.002H1051.91L1051.3 404.865L1051.91 403.729H1053.22L1053.92 404.865L1053.22 406.002Z" fill="#B7C1D6" />
                                <path d="M1053.66 393.5H1051.56L1050.42 391.664L1051.56 389.74H1053.66L1054.8 391.664L1053.66 393.5Z" fill="#B7C1D6" />
                                <path d="M1054.88 382.396H1050.34L1048.06 378.462L1050.34 374.527H1054.88L1057.16 378.462L1054.88 382.396Z" fill="#B7C1D6" />
                                <path d="M1055.49 370.332H1049.72L1046.84 365.261L1049.72 360.277H1055.49L1058.38 365.261L1055.49 370.332Z" fill="#B7C1D6" />
                                <path d="M1055.67 357.391H1049.55L1046.49 352.146L1049.55 346.812H1055.67L1058.73 352.146L1055.67 357.391Z" fill="#B7C1D6" />
                                <path d="M1055.67 344.191H1049.55L1046.49 338.945L1049.55 333.699H1055.67L1058.73 338.945L1055.67 344.191Z" fill="#B7C1D6" />
                                <path d="M1055.67 331.075H1049.55L1046.49 325.742L1049.55 320.496H1055.67L1058.73 325.742L1055.67 331.075Z" fill="#B7C1D6" />
                                <path d="M1055.67 317.874H1049.55L1046.49 312.628L1049.55 307.295H1055.67L1058.73 312.628L1055.67 317.874Z" fill="#B7C1D6" />
                                <path d="M1055.67 304.673H1049.55L1046.49 299.427L1049.55 294.182H1055.67L1058.73 299.427L1055.67 304.673Z" fill="#B7C1D6" />
                                <path d="M1055.67 291.47H1049.55L1046.49 286.224L1049.55 280.979H1055.67L1058.73 286.224L1055.67 291.47Z" fill="#B7C1D6" />
                                <path d="M1055.67 278.356H1049.55L1046.49 273.023L1049.55 267.777H1055.67L1058.73 273.023L1055.67 278.356Z" fill="#B7C1D6" />
                                <path d="M1055.67 265.155H1049.55L1046.49 259.909L1049.55 254.576H1055.67L1058.73 259.909L1055.67 265.155Z" fill="#B7C1D6" />
                                <path d="M1055.67 251.952H1049.55L1046.49 246.707L1049.55 241.461H1055.67L1058.73 246.707L1055.67 251.952Z" fill="#B7C1D6" />
                                <path d="M1055.67 238.839H1049.55L1046.49 233.505L1049.55 228.26H1055.67L1058.73 233.505L1055.67 238.839Z" fill="#B7C1D6" />
                                <path d="M1055.67 225.637H1049.55L1046.49 220.392L1049.55 215.059H1055.67L1058.73 220.392L1055.67 225.637Z" fill="#B7C1D6" />
                                <path d="M1055.67 212.435H1049.55L1046.49 207.189L1049.55 201.943H1055.67L1058.73 207.189L1055.67 212.435Z" fill="#B7C1D6" />
                                <path d="M1055.67 199.234H1049.55L1046.49 193.988L1049.55 188.742H1055.67L1058.73 193.988L1055.67 199.234Z" fill="#B7C1D6" />
                                <path d="M1055.67 186.12H1049.55L1046.49 180.787L1049.55 175.541H1055.67L1058.73 180.787L1055.67 186.12Z" fill="#B7C1D6" />
                                <path d="M1055.67 172.917H1049.55L1046.49 167.671L1049.55 162.338H1055.67L1058.73 167.671L1055.67 172.917Z" fill="#B7C1D6" />
                                <path d="M1055.67 159.716H1049.55L1046.49 154.47L1049.55 149.225H1055.67L1058.73 154.47L1055.67 159.716Z" fill="#B7C1D6" />
                                <path d="M1055.67 146.602H1049.55L1046.49 141.269L1049.55 136.023H1055.67L1058.73 141.269L1055.67 146.602Z" fill="#B7C1D6" />
                                <path d="M1044.22 139.956H1038.18L1035.12 134.711L1038.18 129.465H1044.22L1047.28 134.711L1044.22 139.956Z" fill="#B7C1D6" />
                                <path d="M1032.85 133.399H1026.73L1023.67 128.153L1026.73 122.82H1032.85L1035.91 128.153L1032.85 133.399Z" fill="#B7C1D6" />
                                <path d="M1021.4 126.843H1015.37L1012.31 121.509L1015.37 116.264H1021.4L1024.46 121.509L1021.4 126.843Z" fill="#B7C1D6" />
                                <path d="M1010.03 120.198H1003.91L1000.85 114.953L1003.91 109.707H1010.03L1013 114.953L1010.03 120.198Z" fill="#B7C1D6" />
                                <path d="M998.579 113.641H992.546L989.486 108.396L992.546 103.062H998.579L1001.64 108.396L998.579 113.641Z" fill="#B7C1D6" />
                                <path d="M987.213 107.083H981.093L978.033 101.75L981.093 96.5039H987.213L990.186 101.75L987.213 107.083Z" fill="#B7C1D6" />
                                <path d="M975.76 100.439H969.727L966.667 95.193L969.727 89.9473H975.76L978.82 95.193L975.76 100.439Z" fill="#B7C1D6" />
                                <path d="M964.394 93.8816H958.274L955.214 88.6359L958.274 83.3027H964.394L967.367 88.6359L964.394 93.8816Z" fill="#B7C1D6" />
                                <path d="M952.941 87.2375H946.821L943.849 81.9918L946.821 76.7461H952.941L956.001 81.9918L952.941 87.2375Z" fill="#B7C1D6" />
                                <path d="M940.089 78.1447H936.854L935.281 75.4344L936.854 72.6367H940.089L941.663 75.4344L940.089 78.1447Z" fill="#B7C1D6" />
                                <path d="M518.771 20.3556H513.875L511.427 16.159L513.875 11.875H518.771L521.219 16.159L518.771 20.3556Z" fill="#B7C1D6" />
                                <path d="M507.318 26.9127H502.509L500.061 22.7161L502.509 18.5195H507.318L509.678 22.7161L507.318 26.9127Z" fill="#B7C1D6" />
                                <path d="M495.777 33.3809H491.143L488.783 29.2717L491.143 25.25H495.777L498.138 29.2717L495.777 33.3809Z" fill="#B7C1D6" />
                                <path d="M485.111 41.1628H478.991L475.931 35.9171L478.991 30.584H485.111L488.171 35.9171L485.111 41.1628Z" fill="#B7C1D6" />
                                <path d="M473.658 47.7199H467.625L464.565 42.4742L467.625 37.2285H473.658L476.718 42.4742L473.658 47.7199Z" fill="#B7C1D6" />
                                <path d="M462.292 54.364H456.172L453.112 49.0309L456.172 43.7852H462.292L465.352 49.0309L462.292 54.364Z" fill="#B7C1D6" />
                                <path d="M450.839 60.9226H444.806L441.746 55.6769L444.806 50.3438H450.839L453.899 55.6769L450.839 60.9226Z" fill="#B7C1D6" />
                                <path d="M437.812 64.6816H435.014L433.615 62.2336L435.014 59.873H437.812L439.211 62.2336L437.812 64.6816Z" fill="#B7C1D6" />
                                <path d="M427.845 73.774H422.162L419.277 68.7905L422.162 63.8945H427.845L430.73 68.7905L427.845 73.774Z" fill="#B7C1D6" />
                                <path d="M382.295 100.265H376.437L373.552 95.1939L376.437 90.123H382.295L385.18 95.1939L382.295 100.265Z" fill="#B7C1D6" />
                                <path d="M371.017 107.083H364.897L361.837 101.75L364.897 96.5039H371.017L374.077 101.75L371.017 107.083Z" fill="#B7C1D6" />
                                <path d="M359.563 113.641H353.531L350.471 108.396L353.531 103.062H359.563L362.623 108.396L359.563 113.641Z" fill="#B7C1D6" />
                                <path d="M348.198 120.198H342.078L339.105 114.953L342.078 109.707H348.198L351.17 114.953L348.198 120.198Z" fill="#B7C1D6" />
                                <path d="M336.482 126.231H330.974L328.264 121.51L330.974 116.789H336.482L339.193 121.51L336.482 126.231Z" fill="#B7C1D6" />
                                <path d="M325.379 133.399H319.259L316.199 128.153L319.259 122.82H325.379L328.351 128.153L325.379 133.399Z" fill="#B7C1D6" />
                                <path d="M313.926 139.956H307.893L304.833 134.711L307.893 129.465H313.926L316.986 134.711L313.926 139.956Z" fill="#B7C1D6" />
                                <path d="M302.56 146.602H296.44L293.38 141.269L296.44 136.023H302.56L305.533 141.269L302.56 146.602Z" fill="#B7C1D6" />
                                <path d="M302.56 159.716H296.44L293.38 154.47L296.44 149.225H302.56L305.533 154.47L302.56 159.716Z" fill="#B7C1D6" />
                                <path d="M302.56 172.917H296.44L293.38 167.671L296.44 162.338H302.56L305.533 167.671L302.56 172.917Z" fill="#B7C1D6" />
                                <path d="M302.56 186.12H296.44L293.38 180.787L296.44 175.541H302.56L305.533 180.787L302.56 186.12Z" fill="#B7C1D6" />
                                <path d="M302.56 199.234H296.44L293.38 193.988L296.44 188.742H302.56L305.533 193.988L302.56 199.234Z" fill="#B7C1D6" />
                                <path d="M302.56 212.435H296.44L293.38 207.189L296.44 201.943H302.56L305.533 207.189L302.56 212.435Z" fill="#B7C1D6" />
                                <path d="M302.56 225.637H296.44L293.38 220.392L296.44 215.059H302.56L305.533 220.392L302.56 225.637Z" fill="#B7C1D6" />
                                <path d="M302.56 238.839H296.44L293.38 233.505L296.44 228.26H302.56L305.533 233.505L302.56 238.839Z" fill="#B7C1D6" />
                                <path d="M302.56 251.952H296.44L293.38 246.707L296.44 241.461H302.56L305.533 246.707L302.56 251.952Z" fill="#B7C1D6" />
                                <path d="M302.56 265.155H296.44L293.38 259.909L296.44 254.576H302.56L305.533 259.909L302.56 265.155Z" fill="#B7C1D6" />
                                <path d="M302.56 278.356H296.44L293.38 273.023L296.44 267.777H302.56L305.533 273.023L302.56 278.356Z" fill="#B7C1D6" />
                                <path d="M302.56 291.47H296.44L293.38 286.224L296.44 280.979H302.56L305.533 286.224L302.56 291.47Z" fill="#B7C1D6" />
                                <path d="M302.56 304.673H296.44L293.38 299.427L296.44 294.182H302.56L305.533 299.427L302.56 304.673Z" fill="#B7C1D6" />
                                <path d="M302.56 317.874H296.44L293.38 312.628L296.44 307.295H302.56L305.533 312.628L302.56 317.874Z" fill="#B7C1D6" />
                                <path d="M302.385 330.814H296.527L293.642 325.743L296.527 320.672H302.385L305.358 325.743L302.385 330.814Z" fill="#B7C1D6" />
                                <path d="M300.287 366.659H298.713L297.926 365.261L298.713 363.949H300.287L301.074 365.261L300.287 366.659Z" fill="#B7C1D6" />
                                <path d="M302.473 383.708H296.44L293.467 378.463L296.44 373.217H302.473L305.533 378.463L302.473 383.708Z" fill="#B7C1D6" />
                                <path d="M302.473 396.909H296.44L293.38 391.664L296.44 386.418H302.473L305.533 391.664L302.473 396.909Z" fill="#B7C1D6" />
                                <path d="M382.12 640.223H376.612L373.814 635.414L376.612 630.605H382.12L384.83 635.414L382.12 640.223Z" fill="#B7C1D6" />
                                <path d="M393.835 647.305H387.715L384.655 641.972L387.715 636.727H393.835L396.895 641.972L393.835 647.305Z" fill="#B7C1D6" />
                                <path d="M405.201 653.862H399.169L396.109 648.616L399.169 643.283H405.201L408.261 648.616L405.201 653.862Z" fill="#B7C1D6" />
                                <path d="M1066.86 587.591H1061.18L1058.38 582.695L1061.18 577.887H1066.86L1069.66 582.695L1066.86 587.591Z" fill="#B7C1D6" />
                                <path d="M1067.04 574.74H1061L1058.03 569.494L1061 564.336H1067.04L1070.01 569.494L1067.04 574.74Z" fill="#B7C1D6" />
                                <path d="M1065.46 558.827H1062.58L1061.18 556.379L1062.58 553.844H1065.46L1066.86 556.379L1065.46 558.827Z" fill="#B7C1D6" />
                                <path d="M1066.51 494.829H1061.53L1058.99 490.458L1061.53 486.174H1066.51L1069.05 490.458L1066.51 494.829Z" fill="#B7C1D6" />
                                <path d="M1067.04 469.387H1061L1057.94 464.142L1061 458.809H1067.04L1070.1 464.142L1067.04 469.387Z" fill="#B7C1D6" />
                                <path d="M1067.04 456.187H1061L1057.94 450.941L1061 445.695H1067.04L1070.1 450.941L1067.04 456.187Z" fill="#B7C1D6" />
                                <path d="M1064.76 438.964H1063.28L1062.58 437.74L1063.28 436.516H1064.76L1065.46 437.74L1064.76 438.964Z" fill="#B7C1D6" />
                                <path d="M1067.04 363.948H1061L1057.94 358.703L1061 353.457H1067.04L1070.1 358.703L1067.04 363.948Z" fill="#B7C1D6" />
                                <path d="M1067.04 350.835H1061L1057.94 345.502L1061 340.256H1067.04L1070.1 345.502L1067.04 350.835Z" fill="#B7C1D6" />
                                <path d="M1067.04 337.634H1061L1057.94 332.388L1061 327.055H1067.04L1070.1 332.388L1067.04 337.634Z" fill="#B7C1D6" />
                                <path d="M1067.04 324.431H1061L1057.94 319.185L1061 313.939H1067.04L1070.1 319.185L1067.04 324.431Z" fill="#B7C1D6" />
                                <path d="M1067.04 311.23H1061L1057.94 305.984L1061 300.738H1067.04L1070.1 305.984L1067.04 311.23Z" fill="#B7C1D6" />
                                <path d="M1067.04 298.116H1061L1057.94 292.87L1061 287.537H1067.04L1070.1 292.87L1067.04 298.116Z" fill="#B7C1D6" />
                                <path d="M1067.04 284.913H1061L1057.94 279.668L1061 274.422H1067.04L1070.1 279.668L1067.04 284.913Z" fill="#B7C1D6" />
                                <path d="M1067.04 271.712H1061L1057.94 266.466L1061 261.221H1067.04L1070.1 266.466L1067.04 271.712Z" fill="#B7C1D6" />
                                <path d="M1067.04 258.598H1061L1057.94 253.265L1061 248.02H1067.04L1070.1 253.265L1067.04 258.598Z" fill="#B7C1D6" />
                                <path d="M1067.04 245.395H1061L1057.94 240.15L1061 234.816H1067.04L1070.1 240.15L1067.04 245.395Z" fill="#B7C1D6" />
                                <path d="M1067.04 232.195H1061L1057.94 226.949L1061 221.703H1067.04L1070.1 226.949L1067.04 232.195Z" fill="#B7C1D6" />
                                <path d="M1067.04 219.081H1061L1057.94 213.748L1061 208.502H1067.04L1070.1 213.748L1067.04 219.081Z" fill="#B7C1D6" />
                                <path d="M1067.04 205.878H1061L1057.94 200.632L1061 195.299H1067.04L1070.1 200.632L1067.04 205.878Z" fill="#B7C1D6" />
                                <path d="M1067.04 192.677H1061L1057.94 187.431L1061 182.186H1067.04L1070.1 187.431L1067.04 192.677Z" fill="#D63129" />
                                <path d="M1067.04 179.476H1061L1057.94 174.23L1061 168.984H1067.04L1070.1 174.23L1067.04 179.476Z" fill="#B7C1D6" />
                                <path d="M1067.04 166.36H1061L1057.94 161.027L1061 155.781H1067.04L1070.1 161.027L1067.04 166.36Z" fill="#B7C1D6" />
                                <path d="M1067.04 153.159H1061L1057.94 147.913L1061 142.58H1067.04L1070.1 147.913L1067.04 153.159Z" fill="#B7C1D6" />
                                <path d="M1067.04 139.956H1061L1057.94 134.711L1061 129.465H1067.04L1070.1 134.711L1067.04 139.956Z" fill="#B7C1D6" />
                                <path d="M1055.67 133.399H1049.55L1046.49 128.153L1049.55 122.82H1055.67L1058.73 128.153L1055.67 133.399Z" fill="#B7C1D6" />
                                <path d="M1044.22 126.843H1038.18L1035.12 121.509L1038.18 116.264H1044.22L1047.28 121.509L1044.22 126.843Z" fill="#B7C1D6" />
                                <path d="M1032.85 120.198H1026.73L1023.67 114.953L1026.73 109.707H1032.85L1035.91 114.953L1032.85 120.198Z" fill="#B7C1D6" />
                                <path d="M1021.4 113.641H1015.37L1012.31 108.396L1015.37 103.062H1021.4L1024.46 108.396L1021.4 113.641Z" fill="#B7C1D6" />
                                <path d="M1010.03 107.083H1003.91L1000.85 101.75L1003.91 96.5039H1010.03L1013 101.75L1010.03 107.083Z" fill="#B7C1D6" />
                                <path d="M998.579 100.439H992.546L989.486 95.193L992.546 89.9473H998.579L1001.64 95.193L998.579 100.439Z" fill="#B7C1D6" />
                                <path d="M987.213 93.8816H981.093L978.033 88.6359L981.093 83.3027H987.213L990.186 88.6359L987.213 93.8816Z" fill="#B7C1D6" />
                                <path d="M975.76 87.2375H969.727L966.667 81.9918L969.727 76.7461H975.76L978.82 81.9918L975.76 87.2375Z" fill="#B7C1D6" />
                                <path d="M964.307 80.5935H958.274L955.302 75.4352L958.274 70.1895H964.307L967.367 75.4352L964.307 80.5935Z" fill="#B7C1D6" />
                                <path d="M950.755 70.2773H949.007L948.22 68.791L949.007 67.3047H950.755L951.63 68.791L950.755 70.2773Z" fill="#B7C1D6" />
                                <path d="M472.871 33.12H468.499L466.314 29.2731L468.499 25.5137H472.871L475.057 29.2731L472.871 33.12Z" fill="#B7C1D6" />
                                <path d="M462.117 40.9005H456.347L453.462 35.917L456.347 30.9336H462.117L465.002 35.917L462.117 40.9005Z" fill="#B7C1D6" />
                                <path d="M450.839 47.7199H444.806L441.746 42.4742L444.806 37.2285H450.839L453.899 42.4742L450.839 47.7199Z" fill="#B7C1D6" />
                                <path d="M437.375 50.7789H435.451L434.49 49.0303L435.451 47.3691H437.375L438.337 49.0303L437.375 50.7789Z" fill="#B7C1D6" />
                                <path d="M427.146 59.4349H422.862L420.676 55.6754L422.862 51.916H427.146L429.331 55.6754L427.146 59.4349Z" fill="#B7C1D6" />
                                <path d="M393.136 79.457H388.415L386.054 75.4353L388.415 71.3262H393.136L395.409 75.4353L393.136 79.457Z" fill="#B7C1D6" />
                                <path d="M382.033 86.5379H376.699L374.077 81.9916L376.699 77.4453H382.033L384.655 81.9916L382.033 86.5379Z" fill="#B7C1D6" />
                                <path d="M369.793 91.8716H366.033L364.197 88.6367L366.033 85.3145H369.793L371.716 88.6367L369.793 91.8716Z" fill="#B7C1D6" />
                                <path d="M359.476 100.265H353.618L350.646 95.1939L353.618 90.123H359.476L362.449 95.1939L359.476 100.265Z" fill="#B7C1D6" />
                                <path d="M336.657 113.466H330.799L327.827 108.395L330.799 103.324H336.657L339.542 108.395L336.657 113.466Z" fill="#B7C1D6" />
                                <path d="M311.827 123.083H309.991L309.117 121.51L309.991 120.023H311.827L312.702 121.51L311.827 123.083Z" fill="#B7C1D6" />
                                <path d="M302.56 133.399H296.44L293.38 128.153L296.44 122.82H302.56L305.533 128.153L302.56 133.399Z" fill="#B7C1D6" />
                                <path d="M291.107 139.956H284.987L282.014 134.711L284.987 129.465H291.107L294.167 134.711L291.107 139.956Z" fill="#B7C1D6" />
                                <path d="M291.107 153.159H284.987L282.014 147.913L284.987 142.58H291.107L294.167 147.913L291.107 153.159Z" fill="#B7C1D6" />
                                <path d="M291.107 166.36H284.987L282.014 161.027L284.987 155.781H291.107L294.167 161.027L291.107 166.36Z" fill="#B7C1D6" />
                                <path d="M291.107 179.476H284.987L282.014 174.23L284.987 168.984H291.107L294.167 174.23L291.107 179.476Z" fill="#B7C1D6" />
                                <path d="M291.107 192.677H284.987L282.014 187.431L284.987 182.186H291.107L294.167 187.431L291.107 192.677Z" fill="#B7C1D6" />
                                <path d="M291.107 205.878H284.987L282.014 200.632L284.987 195.299H291.107L294.167 200.632L291.107 205.878Z" fill="#B7C1D6" />
                                <path d="M291.107 219.081H284.987L282.014 213.748L284.987 208.502H291.107L294.167 213.748L291.107 219.081Z" fill="#049848" />
                                <path d="M291.107 232.195H284.987L282.014 226.949L284.987 221.703H291.107L294.167 226.949L291.107 232.195Z" fill="#B7C1D6" />
                                <path d="M291.107 245.395H284.987L282.014 240.15L284.987 234.816H291.107L294.167 240.15L291.107 245.395Z" fill="#B7C1D6" />
                                <path d="M291.107 258.598H284.987L282.014 253.265L284.987 248.02H291.107L294.167 253.265L291.107 258.598Z" fill="#049848" />
                                <path d="M291.107 271.712H284.987L282.014 266.466L284.987 261.221H291.107L294.167 266.466L291.107 271.712Z" fill="#B7C1D6" />
                                <path d="M291.107 284.913H284.987L282.014 279.668L284.987 274.422H291.107L294.167 279.668L291.107 284.913Z" fill="#B7C1D6" />
                                <path d="M291.107 298.116H284.987L282.014 292.87L284.987 287.537H291.107L294.167 292.87L291.107 298.116Z" fill="#B7C1D6" />
                                <path d="M291.107 311.23H284.987L282.014 305.984L284.987 300.738H291.107L294.167 305.984L291.107 311.23Z" fill="#B7C1D6" />
                                <path d="M291.107 324.431H284.987L282.014 319.185L284.987 313.939H291.107L294.167 319.185L291.107 324.431Z" fill="#B7C1D6" />
                                <path d="M290.32 336.321H285.774L283.501 332.387L285.774 328.365H290.32L292.593 332.387L290.32 336.321Z" fill="#B7C1D6" />
                                <path d="M288.834 373.217H287.347L286.561 371.905L287.347 370.594H288.834L289.533 371.905L288.834 373.217Z" fill="#B7C1D6" />
                                <path d="M291.107 390.265H285.074L282.014 385.02L285.074 379.861H291.107L294.079 385.02L291.107 390.265Z" fill="#B7C1D6" />
                                <path d="M382.382 653.862H376.35L373.29 648.616L376.35 643.283H382.382L385.442 648.616L382.382 653.862Z" fill="#B7C1D6" />
                                <path d="M393.835 660.419H387.715L384.655 655.173L387.715 649.928H393.835L396.895 655.173L393.835 660.419Z" fill="#D63129" />
                                <path d="M405.201 666.976H399.169L396.109 661.73L399.169 656.484H405.201L408.261 661.73L405.201 666.976Z" fill="#B7C1D6" />
                                <path d="M1065.55 598.521H1062.49L1060.92 595.898L1062.49 593.188H1065.55L1067.12 595.898L1065.55 598.521Z" fill="#B7C1D6" />
                                <path d="M1078.49 594.587H1072.37L1069.31 589.254L1072.37 584.008H1078.49L1081.55 589.254L1078.49 594.587Z" fill="#B7C1D6" />
                                <path d="M1078.49 581.384H1072.37L1069.31 576.138L1072.37 570.805H1078.49L1081.55 576.138L1078.49 581.384Z" fill="#B7C1D6" />
                                <path d="M1078.49 568.183H1072.37L1069.31 562.937L1072.37 557.691H1078.49L1081.55 562.937L1078.49 568.183Z" fill="#B7C1D6" />
                                <path d="M1077.61 553.581H1073.24L1071.06 549.734L1073.24 545.975H1077.61L1079.8 549.734L1077.61 553.581Z" fill="#B7C1D6" />
                                <path d="M1078.31 475.682H1072.54L1069.66 470.698L1072.54 465.715H1078.31L1081.2 470.698L1078.31 475.682Z" fill="#B7C1D6" />
                                <path d="M1078.49 462.831H1072.37L1069.31 457.498L1072.37 452.252H1078.49L1081.55 457.498L1078.49 462.831Z" fill="#B7C1D6" />
                                <path d="M1078.49 449.63H1072.37L1069.31 444.384L1072.37 439.051H1078.49L1081.55 444.384L1078.49 449.63Z" fill="#D63129" />
                                <path d="M1077.96 435.553H1072.89L1070.45 431.182L1072.89 426.811H1077.96L1080.41 431.182L1077.96 435.553Z" fill="#B7C1D6" />
                                <path d="M1078.23 356.868H1072.63L1069.92 352.146L1072.63 347.338H1078.23L1080.94 352.146L1078.23 356.868Z" fill="#B7C1D6" />
                                <path d="M1078.49 344.191H1072.37L1069.31 338.945L1072.37 333.699H1078.49L1081.55 338.945L1078.49 344.191Z" fill="#B7C1D6" />
                                <path d="M1078.49 331.075H1072.37L1069.31 325.742L1072.37 320.496H1078.49L1081.55 325.742L1078.49 331.075Z" fill="#B7C1D6" />
                                <path d="M1078.49 317.874H1072.37L1069.31 312.628L1072.37 307.295H1078.49L1081.55 312.628L1078.49 317.874Z" fill="#B7C1D6" />
                                <path d="M1078.49 304.673H1072.37L1069.31 299.427L1072.37 294.182H1078.49L1081.55 299.427L1078.49 304.673Z" fill="#B7C1D6" />
                                <path d="M1077.09 289.111H1073.77L1072.11 286.225L1073.77 283.428H1077.09L1078.75 286.225L1077.09 289.111Z" fill="#B7C1D6" />
                                <path d="M1078.49 278.356H1072.37L1069.31 273.023L1072.37 267.777H1078.49L1081.55 273.023L1078.49 278.356Z" fill="#B7C1D6" />
                                <path d="M1078.49 265.155H1072.37L1069.31 259.909L1072.37 254.576H1078.49L1081.55 259.909L1078.49 265.155Z" fill="#B7C1D6" />
                                <path d="M1078.49 251.952H1072.37L1069.31 246.707L1072.37 241.461H1078.49L1081.55 246.707L1078.49 251.952Z" fill="#B7C1D6" />
                                <path d="M1078.49 238.839H1072.37L1069.31 233.505L1072.37 228.26H1078.49L1081.55 233.505L1078.49 238.839Z" fill="#B7C1D6" />
                                <path d="M1078.49 225.637H1072.37L1069.31 220.392L1072.37 215.059H1078.49L1081.55 220.392L1078.49 225.637Z" fill="#B7C1D6" />
                                <path d="M1078.49 212.435H1072.37L1069.31 207.189L1072.37 201.943H1078.49L1081.55 207.189L1078.49 212.435Z" fill="#B7C1D6" />
                                <path d="M1078.49 199.234H1072.37L1069.31 193.988L1072.37 188.742H1078.49L1081.55 193.988L1078.49 199.234Z" fill="#B7C1D6" />
                                <path d="M1078.49 186.12H1072.37L1069.31 180.787L1072.37 175.541H1078.49L1081.55 180.787L1078.49 186.12Z" fill="#B7C1D6" />
                                <path d="M1078.49 172.917H1072.37L1069.31 167.671L1072.37 162.338H1078.49L1081.55 167.671L1078.49 172.917Z" fill="#B7C1D6" />
                                <path d="M1078.49 159.716H1072.37L1069.31 154.47L1072.37 149.225H1078.49L1081.55 154.47L1078.49 159.716Z" fill="#B7C1D6" />
                                <path d="M1078.49 146.602H1072.37L1069.31 141.269L1072.37 136.023H1078.49L1081.55 141.269L1078.49 146.602Z" fill="#B7C1D6" />
                                <path d="M1078.49 133.399H1072.37L1069.31 128.153L1072.37 122.82H1078.49L1081.55 128.153L1078.49 133.399Z" fill="#B7C1D6" />
                                <path d="M1067.04 126.843H1061L1057.94 121.509L1061 116.264H1067.04L1070.1 121.509L1067.04 126.843Z" fill="#B7C1D6" />
                                <path d="M1055.67 120.198H1049.55L1046.49 114.953L1049.55 109.707H1055.67L1058.73 114.953L1055.67 120.198Z" fill="#B7C1D6" />
                                <path d="M1044.22 113.641H1038.18L1035.12 108.396L1038.18 103.062H1044.22L1047.28 108.396L1044.22 113.641Z" fill="#B7C1D6" />
                                <path d="M1032.85 107.083H1026.73L1023.67 101.75L1026.73 96.5039H1032.85L1035.91 101.75L1032.85 107.083Z" fill="#B7C1D6" />
                                <path d="M1021.4 100.439H1015.37L1012.31 95.193L1015.37 89.9473H1021.4L1024.46 95.193L1021.4 100.439Z" fill="#B7C1D6" />
                                <path d="M1009.94 93.7946H1004L1001.03 88.6363L1004 83.3906H1009.94L1012.92 88.6363L1009.94 93.7946Z" fill="#B7C1D6" />
                                <path d="M998.579 87.238H992.546L989.574 81.9923L992.546 76.834H998.579L1001.55 81.9923L998.579 87.238Z" fill="#B7C1D6" />
                                <path d="M987.213 80.6809H981.093L978.033 75.4352L981.093 70.1895H987.213L990.186 75.4352L987.213 80.6809Z" fill="#B7C1D6" />
                                <path d="M975.76 74.1238H969.727L966.667 68.7906L969.727 63.5449H975.76L978.82 68.7906L975.76 74.1238Z" fill="#B7C1D6" />
                                <path d="M940.701 52.8773H936.242L934.057 49.0305L936.242 45.1836H940.701L942.974 49.0305L940.701 52.8773Z" fill="#B7C1D6" />
                                <path d="M928.549 44.9214H925.663L924.177 42.4734L925.663 40.0254H928.549L929.947 42.4734L928.549 44.9214Z" fill="#B7C1D6" />
                                <path d="M449.965 32.9441H445.768L443.582 29.2721L445.768 25.6875H449.965L452.063 29.2721L449.965 32.9441Z" fill="#B7C1D6" />
                                <path d="M438.074 38.803H434.752L433.091 35.9179L434.752 32.9453H438.074L439.823 35.9179L438.074 38.803Z" fill="#B7C1D6" />
                                <path d="M427.67 47.1073H422.337L419.627 42.4736L422.337 37.8398H427.67L430.381 42.4736L427.67 47.1073Z" fill="#B7C1D6" />
                                <path d="M415.43 52.1781H411.758L410.01 49.0307L411.758 45.9707H415.43L417.179 49.0307L415.43 52.1781Z" fill="#B7C1D6" />
                                <path d="M405.114 60.6598H399.256L396.371 55.6763L399.256 50.6055H405.114L407.999 55.6763L405.114 60.6598Z" fill="#B7C1D6" />
                                <path d="M393.835 67.4797H387.715L384.655 62.234L387.715 56.9883H393.835L396.895 62.234L393.835 67.4797Z" fill="#B7C1D6" />
                                <path d="M382.382 74.1238H376.35L373.29 68.7906L376.35 63.5449H382.382L385.442 68.7906L382.382 74.1238Z" fill="#B7C1D6" />
                                <path d="M369.268 77.6195H366.645L365.421 75.4338L366.645 73.248H369.268L370.492 75.4338L369.268 77.6195Z" fill="#B7C1D6" />
                                <path d="M357.99 84.5279H355.017L353.618 81.9925L355.017 79.457H357.99L359.476 81.9925L357.99 84.5279Z" fill="#B7C1D6" />
                                <path d="M323.718 104.286H320.833L319.434 101.751L320.833 99.3027H323.718L325.204 101.751L323.718 104.286Z" fill="#B7C1D6" />
                                <path d="M312.702 111.542H309.03L307.194 108.395L309.03 105.16H312.702L314.538 108.395L312.702 111.542Z" fill="#B7C1D6" />
                                <path d="M301.336 118.187H297.577L295.741 114.952L297.577 111.717H301.336L303.259 114.952L301.336 118.187Z" fill="#B7C1D6" />
                                <path d="M288.921 122.996H287.173L286.386 121.51L287.173 120.023H288.921L289.795 121.51L288.921 122.996Z" fill="#B7C1D6" />
                                <path d="M279.741 133.399H273.621L270.561 128.153L273.621 122.82H279.741L282.714 128.153L279.741 133.399Z" fill="#B7C1D6" />
                                <path d="M279.741 146.602H273.621L270.561 141.269L273.621 136.023H279.741L282.714 141.269L279.741 146.602Z" fill="#B7C1D6" />
                                <path d="M279.741 159.716H273.621L270.561 154.47L273.621 149.225H279.741L282.714 154.47L279.741 159.716Z" fill="#D63129" />
                                <path d="M279.741 172.917H273.621L270.561 167.671L273.621 162.338H279.741L282.714 167.671L279.741 172.917Z" fill="#B7C1D6" />
                                <path d="M279.741 186.12H273.621L270.561 180.787L273.621 175.541H279.741L282.714 180.787L279.741 186.12Z" fill="#B7C1D6" />
                                <path d="M279.741 199.234H273.621L270.561 193.988L273.621 188.742H279.741L282.714 193.988L279.741 199.234Z" fill="#B7C1D6" />
                                <path d="M279.741 212.435H273.621L270.561 207.189L273.621 201.943H279.741L282.714 207.189L279.741 212.435Z" fill="#B7C1D6" />
                                <path d="M279.741 225.637H273.621L270.561 220.392L273.621 215.059H279.741L282.714 220.392L279.741 225.637Z" fill="#B7C1D6" />
                                <path d="M279.741 238.839H273.621L270.561 233.505L273.621 228.26H279.741L282.714 233.505L279.741 238.839Z" fill="#B7C1D6" />
                                <path d="M279.741 251.952H273.621L270.561 246.707L273.621 241.461H279.741L282.714 246.707L279.741 251.952Z" fill="#B7C1D6" />
                                <path d="M279.741 265.155H273.621L270.561 259.909L273.621 254.576H279.741L282.714 259.909L279.741 265.155Z" fill="#B7C1D6" />
                                <path d="M279.741 278.356H273.621L270.561 273.023L273.621 267.777H279.741L282.714 273.023L279.741 278.356Z" fill="#B7C1D6" />
                                <path d="M279.741 291.47H273.621L270.561 286.224L273.621 280.979H279.741L282.714 286.224L279.741 291.47Z" fill="#B7C1D6" />
                                <path d="M279.741 304.673H273.621L270.561 299.427L273.621 294.182H279.741L282.714 299.427L279.741 304.673Z" fill="#B7C1D6" />
                                <path d="M279.741 317.874H273.621L270.561 312.628L273.621 307.295H279.741L282.714 312.628L279.741 317.874Z" fill="#B7C1D6" />
                                <path d="M279.741 331.075H273.621L270.561 325.742L273.621 320.496H279.741L282.714 325.742L279.741 331.075Z" fill="#B7C1D6" />
                                <path d="M279.741 344.191H273.621L270.561 338.945L273.621 333.699H279.741L282.714 338.945L279.741 344.191Z" fill="#B7C1D6" />
                                <path d="M279.741 357.391H273.621L270.561 352.146L273.621 346.812H279.741L282.714 352.146L279.741 357.391Z" fill="#B7C1D6" />
                                <path d="M279.741 370.594H273.621L270.561 365.261L273.621 360.016H279.741L282.714 365.261L279.741 370.594Z" fill="#B7C1D6" />
                                <path d="M279.741 383.708H273.621L270.561 378.463L273.621 373.217H279.741L282.714 378.463L279.741 383.708Z" fill="#B7C1D6" />
                                <path d="M277.293 392.8H275.982L275.37 391.664L275.982 390.527H277.293L277.993 391.664L277.293 392.8Z" fill="#B7C1D6" />
                                <path d="M382.382 666.976H376.35L373.29 661.73L376.35 656.484H382.382L385.442 661.73L382.382 666.976Z" fill="#B7C1D6" />
                                <path d="M393.835 673.622H387.715L384.655 668.376L387.715 663.043H393.835L396.895 668.376L393.835 673.622Z" fill="#B7C1D6" />
                                <path d="M405.201 680.09H399.169L396.196 674.932L399.169 669.773H405.201L408.174 674.932L405.201 680.09Z" fill="#B7C1D6" />
                                <path d="M1065.02 610.759H1063.01L1062.05 609.011L1063.01 607.35H1065.02L1065.99 609.011L1065.02 610.759Z" fill="#B7C1D6" />
                                <path d="M1078.49 607.7H1072.37L1069.31 602.455L1072.37 597.209H1078.49L1081.55 602.455L1078.49 607.7Z" fill="#B7C1D6" />
                                <path d="M1089.85 601.142H1083.82L1080.76 595.896L1083.82 590.65H1089.85L1092.91 595.896L1089.85 601.142Z" fill="#B7C1D6" />
                                <path d="M1089.85 587.941H1083.82L1080.76 582.695L1083.82 577.449H1089.85L1092.91 582.695L1089.85 587.941Z" fill="#B7C1D6" />
                                <path d="M1089.85 574.827H1083.82L1080.76 569.494L1083.82 564.248H1089.85L1092.91 569.494L1089.85 574.827Z" fill="#B7C1D6" />
                                <path d="M1089.85 561.626H1083.82L1080.76 556.38L1083.82 551.047H1089.85L1092.91 556.38L1089.85 561.626Z" fill="#B7C1D6" />
                                <path d="M1089.77 548.249H1083.91L1081.02 543.178L1083.91 538.107H1089.77L1092.65 543.178L1089.77 548.249Z" fill="#B7C1D6" />
                                <path d="M1087.41 530.938H1086.27L1085.75 529.976L1086.27 529.102H1087.41L1087.93 529.976L1087.41 530.938Z" fill="#B7C1D6" />
                                <path d="M1088.72 467.378H1084.96L1083.12 464.143L1084.96 460.908H1088.72L1090.55 464.143L1088.72 467.378Z" fill="#B7C1D6" />
                                <path d="M1087.84 452.602H1085.83L1084.87 450.94L1085.83 449.279H1087.84L1088.81 450.94L1087.84 452.602Z" fill="#B7C1D6" />
                                <path d="M1088.72 440.974H1084.96L1083.12 437.739L1084.96 434.504H1088.72L1090.55 437.739L1088.72 440.974Z" fill="#B7C1D6" />
                                <path d="M1088.37 361.326H1085.31L1083.82 358.703L1085.31 356.08H1088.37L1089.85 358.703L1088.37 361.326Z" fill="#B7C1D6" />
                                <path d="M1087.76 347.163H1085.92L1084.96 345.501L1085.92 343.928H1087.76L1088.72 345.501L1087.76 347.163Z" fill="#B7C1D6" />
                                <path d="M1089.59 337.108H1084.08L1081.29 332.387L1084.08 327.578H1089.59L1092.39 332.387L1089.59 337.108Z" fill="#B7C1D6" />
                                <path d="M1089.77 324.257H1083.91L1080.94 319.186L1083.91 314.115H1089.77L1092.74 319.186L1089.77 324.257Z" fill="#B7C1D6" />
                                <path d="M1087.32 306.858H1086.36L1085.83 305.984L1086.36 305.109H1087.32L1087.84 305.984L1087.32 306.858Z" fill="#B7C1D6" />
                                <path d="M1088.11 294.968H1085.57L1084.35 292.869L1085.57 290.684H1088.11L1089.33 292.869L1088.11 294.968Z" fill="#B7C1D6" />
                                <path d="M1089.5 284.303H1084.17L1081.55 279.669L1084.17 275.035H1089.5L1092.13 279.669L1089.5 284.303Z" fill="#B7C1D6" />
                                <path d="M1089.85 271.712H1083.82L1080.76 266.466L1083.82 261.221H1089.85L1092.91 266.466L1089.85 271.712Z" fill="#B7C1D6" />
                                <path d="M1089.85 258.598H1083.82L1080.76 253.265L1083.82 248.02H1089.85L1092.91 253.265L1089.85 258.598Z" fill="#B7C1D6" />
                                <path d="M1089.85 245.395H1083.82L1080.76 240.15L1083.82 234.816H1089.85L1092.91 240.15L1089.85 245.395Z" fill="#B7C1D6" />
                                <path d="M1089.85 232.195H1083.82L1080.76 226.949L1083.82 221.703H1089.85L1092.91 226.949L1089.85 232.195Z" fill="#B7C1D6" />
                                <path d="M1089.85 219.081H1083.82L1080.76 213.748L1083.82 208.502H1089.85L1092.91 213.748L1089.85 219.081Z" fill="#B7C1D6" />
                                <path d="M1089.85 205.878H1083.82L1080.76 200.632L1083.82 195.299H1089.85L1092.91 200.632L1089.85 205.878Z" fill="#B7C1D6" />
                                <path d="M1089.85 192.677H1083.82L1080.76 187.431L1083.82 182.186H1089.85L1092.91 187.431L1089.85 192.677Z" fill="#B7C1D6" />
                                <path d="M1089.85 179.476H1083.82L1080.76 174.23L1083.82 168.984H1089.85L1092.91 174.23L1089.85 179.476Z" fill="#B7C1D6" />
                                <path d="M1089.85 166.36H1083.82L1080.76 161.027L1083.82 155.781H1089.85L1092.91 161.027L1089.85 166.36Z" fill="#B7C1D6" />
                                <path d="M1089.85 153.159H1083.82L1080.76 147.913L1083.82 142.58H1089.85L1092.91 147.913L1089.85 153.159Z" fill="#B7C1D6" />
                                <path d="M1089.85 139.956H1083.82L1080.76 134.711L1083.82 129.465H1089.85L1092.91 134.711L1089.85 139.956Z" fill="#B7C1D6" />
                                <path d="M1089.85 126.843H1083.82L1080.76 121.509L1083.82 116.264H1089.85L1092.91 121.509L1089.85 126.843Z" fill="#B7C1D6" />
                                <path d="M1078.49 120.198H1072.37L1069.31 114.953L1072.37 109.707H1078.49L1081.55 114.953L1078.49 120.198Z" fill="#B7C1D6" />
                                <path d="M1067.04 113.641H1061L1057.94 108.396L1061 103.062H1067.04L1070.1 108.396L1067.04 113.641Z" fill="#B7C1D6" />
                                <path d="M1055.67 107.083H1049.55L1046.49 101.75L1049.55 96.5039H1055.67L1058.73 101.75L1055.67 107.083Z" fill="#B7C1D6" />
                                <path d="M1044.22 100.439H1038.18L1035.12 95.193L1038.18 89.9473H1044.22L1047.19 95.193L1044.22 100.439Z" fill="#B7C1D6" />
                                <path d="M1031.1 90.9091H1028.39L1027.08 88.636L1028.39 86.2754H1031.1L1032.5 88.636L1031.1 90.9091Z" fill="#B7C1D6" />
                                <path d="M1008.37 77.7949H1005.57L1004.17 75.4343L1005.57 72.9863H1008.37L1009.77 75.4343L1008.37 77.7949Z" fill="#B7C1D6" />
                                <path d="M998.579 74.0368H992.546L989.486 68.7911L992.546 63.6328H998.579L1001.55 68.7911L998.579 74.0368Z" fill="#B7C1D6" />
                                <path d="M951.367 44.9214H948.482L947.083 42.4734L948.482 40.0254H951.367L952.766 42.4734L951.367 44.9214Z" fill="#B7C1D6" />
                                <path d="M438.511 26.387H434.315L432.129 22.715L434.315 19.043H438.511L440.697 22.715L438.511 26.387Z" fill="#B7C1D6" />
                                <path d="M428.02 34.6062H421.987L418.927 29.2731L421.987 24.0273H428.02L431.08 29.2731L428.02 34.6062Z" fill="#B7C1D6" />
                                <path d="M416.654 41.1628H410.534L407.474 35.9171L410.534 30.584H416.654L419.714 35.9171L416.654 41.1628Z" fill="#D63129" />
                                <path d="M405.201 47.7199H399.169L396.109 42.4742L399.169 37.2285H405.201L408.261 42.4742L405.201 47.7199Z" fill="#B7C1D6" />
                                <path d="M393.835 54.364H387.715L384.655 49.0309L387.715 43.7852H393.835L396.895 49.0309L393.835 54.364Z" fill="#B7C1D6" />
                                <path d="M382.382 60.9226H376.35L373.29 55.6769L376.35 50.3438H382.382L385.442 55.6769L382.382 60.9226Z" fill="#B7C1D6" />
                                <path d="M370.579 66.7801H365.334L362.711 62.2338L365.334 57.6875H370.579L373.202 62.2338L370.579 66.7801Z" fill="#B7C1D6" />
                                <path d="M358.951 73.0743H354.143L351.695 68.7903L354.143 64.5938H358.951L361.399 68.7903L358.951 73.0743Z" fill="#B7C1D6" />
                                <path d="M345.925 76.7459H344.351L343.564 75.4345L344.351 74.123H345.925L346.624 75.4345L345.925 76.7459Z" fill="#B7C1D6" />
                                <path d="M325.379 93.8816H319.259L316.199 88.6359L319.259 83.3027H325.379L328.351 88.6359L325.379 93.8816Z" fill="#B7C1D6" />
                                <path d="M311.915 96.855H309.904L308.942 95.1939L309.904 93.4453H311.915L312.877 95.1939L311.915 96.855Z" fill="#B7C1D6" />
                                <path d="M302.56 107.083H296.44L293.38 101.75L296.44 96.5039H302.56L305.533 101.75L302.56 107.083Z" fill="#B7C1D6" />
                                <path d="M291.107 113.641H284.987L282.014 108.396L284.987 103.062H291.107L294.167 108.396L291.107 113.641Z" fill="#B7C1D6" />
                                <path d="M279.304 119.411H274.058L271.435 114.953L274.058 110.406H279.304L281.839 114.953L279.304 119.411Z" fill="#B7C1D6" />
                                <path d="M268.026 126.318H262.518L259.72 121.51L262.518 116.701H268.026L270.823 121.51L268.026 126.318Z" fill="#B7C1D6" />
                                <path d="M268.288 139.956H262.168L259.195 134.711L262.168 129.465H268.288L271.348 134.711L268.288 139.956Z" fill="#B7C1D6" />
                                <path d="M268.288 153.159H262.168L259.195 147.913L262.168 142.58H268.288L271.348 147.913L268.288 153.159Z" fill="#B7C1D6" />
                                <path d="M268.288 166.36H262.168L259.195 161.027L262.168 155.781H268.288L271.348 161.027L268.288 166.36Z" fill="#B7C1D6" />
                                <path d="M268.288 179.476H262.168L259.195 174.23L262.168 168.984H268.288L271.348 174.23L268.288 179.476Z" fill="#B7C1D6" />
                                <path d="M268.288 192.677H262.168L259.195 187.431L262.168 182.186H268.288L271.348 187.431L268.288 192.677Z" fill="#B7C1D6" />
                                <path d="M268.288 205.878H262.168L259.195 200.632L262.168 195.299H268.288L271.348 200.632L268.288 205.878Z" fill="#B7C1D6" />
                                <path d="M268.288 219.081H262.168L259.195 213.748L262.168 208.502H268.288L271.348 213.748L268.288 219.081Z" fill="#B7C1D6" />
                                <path d="M268.288 232.195H262.168L259.195 226.949L262.168 221.703H268.288L271.348 226.949L268.288 232.195Z" fill="#B7C1D6" />
                                <path d="M268.288 245.395H262.168L259.195 240.15L262.168 234.816H268.288L271.348 240.15L268.288 245.395Z" fill="#B7C1D6" />
                                <path d="M268.288 258.598H262.168L259.195 253.265L262.168 248.02H268.288L271.348 253.265L268.288 258.598Z" fill="#049848" />
                                <path d="M268.288 271.712H262.168L259.195 266.466L262.168 261.221H268.288L271.348 266.466L268.288 271.712Z" fill="#D63129" />
                                <path d="M268.288 284.913H262.168L259.195 279.668L262.168 274.422H268.288L271.348 279.668L268.288 284.913Z" fill="#B7C1D6" />
                                <path d="M268.288 298.116H262.168L259.195 292.87L262.168 287.537H268.288L271.348 292.87L268.288 298.116Z" fill="#049848" />
                                <path d="M268.288 311.23H262.168L259.195 305.984L262.168 300.738H268.288L271.348 305.984L268.288 311.23Z" fill="#B7C1D6" />
                                <path d="M268.288 324.431H262.168L259.195 319.185L262.168 313.939H268.288L271.348 319.185L268.288 324.431Z" fill="#049848" />
                                <path d="M268.288 337.634H262.168L259.195 332.388L262.168 327.055H268.288L271.348 332.388L268.288 337.634Z" fill="#B7C1D6" />
                                <path d="M268.288 350.835H262.168L259.195 345.502L262.168 340.256H268.288L271.348 345.502L268.288 350.835Z" fill="#B7C1D6" />
                                <path d="M268.288 363.948H262.168L259.195 358.703L262.168 353.457H268.288L271.348 358.703L268.288 363.948Z" fill="#B7C1D6" />
                                <path d="M268.288 377.151H262.168L259.195 371.905L262.168 366.572H268.288L271.348 371.905L268.288 377.151Z" fill="#B7C1D6" />
                                <path d="M266.714 387.556H263.829L262.343 385.02L263.829 382.572H266.714L268.113 385.02L266.714 387.556Z" fill="#B7C1D6" />
                                <path d="M382.033 679.479H376.699L374.077 674.933L376.699 670.387H382.033L384.655 674.933L382.033 679.479Z" fill="#B7C1D6" />
                                <path d="M393.835 686.823H387.715L384.655 681.49L387.715 676.244H393.835L396.895 681.49L393.835 686.823Z" fill="#B7C1D6" />
                                <path d="M403.103 689.621H401.267L400.393 688.134L401.267 686.561H403.103L403.977 688.134L403.103 689.621Z" fill="#B7C1D6" />
                                <path d="M1099.73 605.078H1096.76L1095.19 602.455L1096.76 599.832H1099.73L1101.31 602.455L1099.73 605.078Z" fill="#B7C1D6" />
                                <path d="M1101.31 594.587H1095.19L1092.13 589.254L1095.19 584.008H1101.31L1104.37 589.254L1101.31 594.587Z" fill="#B7C1D6" />
                                <path d="M1101.31 581.384H1095.19L1092.13 576.138L1095.19 570.805H1101.31L1104.37 576.138L1101.31 581.384Z" fill="#B7C1D6" />
                                <path d="M1101.31 568.183H1095.19L1092.13 562.937L1095.19 557.691H1101.31L1104.37 562.937L1101.31 568.183Z" fill="#B7C1D6" />
                                <path d="M1101.31 555.067H1095.19L1092.13 549.734L1095.19 544.488H1101.31L1104.37 549.734L1101.31 555.067Z" fill="#B7C1D6" />
                                <path d="M1101.31 541.866H1095.19L1092.13 536.62L1095.19 531.287H1101.31L1104.37 536.62L1101.31 541.866Z" fill="#B7C1D6" />
                                <path d="M1099.47 472.885H1097.02L1095.8 470.699L1097.02 468.514H1099.47L1100.7 470.699L1099.47 472.885Z" fill="#B7C1D6" />
                                <path d="M1101.05 462.481H1095.45L1092.56 457.498L1095.45 452.602H1101.05L1103.93 457.498L1101.05 462.481Z" fill="#B7C1D6" />
                                <path d="M1101.31 383.708H1095.19L1092.13 378.463L1095.19 373.217H1101.31L1104.37 378.463L1101.31 383.708Z" fill="#B7C1D6" />
                                <path d="M1100.35 289.897H1096.15L1094.05 286.225L1096.15 282.641H1100.35L1102.44 286.225L1100.35 289.897Z" fill="#B7C1D6" />
                                <path d="M1101.31 278.356H1095.19L1092.13 273.023L1095.19 267.777H1101.31L1104.37 273.023L1101.31 278.356Z" fill="#B7C1D6" />
                                <path d="M1101.31 265.155H1095.19L1092.13 259.909L1095.19 254.576H1101.31L1104.37 259.909L1101.31 265.155Z" fill="#B7C1D6" />
                                <path d="M1101.31 251.952H1095.19L1092.13 246.707L1095.19 241.461H1101.31L1104.37 246.707L1101.31 251.952Z" fill="#B7C1D6" />
                                <path d="M1101.31 238.839H1095.19L1092.13 233.505L1095.19 228.26H1101.31L1104.37 233.505L1101.31 238.839Z" fill="#B7C1D6" />
                                <path d="M1101.31 225.637H1095.19L1092.13 220.392L1095.19 215.059H1101.31L1104.37 220.392L1101.31 225.637Z" fill="#B7C1D6" />
                                <path d="M1101.31 212.435H1095.19L1092.13 207.189L1095.19 201.943H1101.31L1104.37 207.189L1101.31 212.435Z" fill="#B7C1D6" />
                                <path d="M1101.31 199.234H1095.19L1092.13 193.988L1095.19 188.742H1101.31L1104.37 193.988L1101.31 199.234Z" fill="#B7C1D6" />
                                <path d="M1101.31 186.12H1095.19L1092.13 180.787L1095.19 175.541H1101.31L1104.37 180.787L1101.31 186.12Z" fill="#B7C1D6" />
                                <path d="M1101.31 172.917H1095.19L1092.13 167.671L1095.19 162.338H1101.31L1104.37 167.671L1101.31 172.917Z" fill="#B7C1D6" />
                                <path d="M1101.31 159.716H1095.19L1092.13 154.47L1095.19 149.225H1101.31L1104.37 154.47L1101.31 159.716Z" fill="#B7C1D6" />
                                <path d="M1101.31 146.602H1095.19L1092.13 141.269L1095.19 136.023H1101.31L1104.37 141.269L1101.31 146.602Z" fill="#B7C1D6" />
                                <path d="M1101.31 133.399H1095.19L1092.13 128.153L1095.19 122.82H1101.31L1104.37 128.153L1101.31 133.399Z" fill="#B7C1D6" />
                                <path d="M1101.31 120.198H1095.19L1092.13 114.953L1095.19 109.707H1101.31L1104.37 114.953L1101.31 120.198Z" fill="#B7C1D6" />
                                <path d="M1089.85 113.641H1083.82L1080.76 108.396L1083.82 103.062H1089.85L1092.91 108.396L1089.85 113.641Z" fill="#B7C1D6" />
                                <path d="M1078.49 107.083H1072.37L1069.31 101.75L1072.37 96.5039H1078.49L1081.55 101.75L1078.49 107.083Z" fill="#B7C1D6" />
                                <path d="M1065.72 98.0789H1062.31L1060.65 95.1937L1062.31 92.3086H1065.72L1067.39 95.1937L1065.72 98.0789Z" fill="#B7C1D6" />
                                <path d="M415.955 26.8238H411.234L408.786 22.7146L411.234 18.6055H415.955L418.403 22.7146L415.955 26.8238Z" fill="#B7C1D6" />
                                <path d="M405.201 34.6062H399.169L396.109 29.2731L399.169 24.0273H405.201L408.261 29.2731L405.201 34.6062Z" fill="#B7C1D6" />
                                <path d="M393.835 41.1628H387.715L384.655 35.9171L387.715 30.584H393.835L396.895 35.9171L393.835 41.1628Z" fill="#B7C1D6" />
                                <path d="M382.382 47.7199H376.35L373.29 42.4742L376.35 37.2285H382.382L385.442 42.4742L382.382 47.7199Z" fill="#B7C1D6" />
                                <path d="M369.793 52.1781H366.121L364.372 49.0307L366.121 45.9707H369.793L371.541 49.0307L369.793 52.1781Z" fill="#B7C1D6" />
                                <path d="M358.951 59.8717H354.143L351.695 55.6751L354.143 51.4785H358.951L361.399 55.6751L358.951 59.8717Z" fill="#B7C1D6" />
                                <path d="M334.559 70.2758H332.898L332.111 68.7895L332.898 67.3906H334.559L335.346 68.7895L334.559 70.2758Z" fill="#B7C1D6" />
                                <path d="M324.854 79.8068H319.783L317.161 75.4354L319.783 70.9766H324.854L327.39 75.4354L324.854 79.8068Z" fill="#B7C1D6" />
                                <path d="M312.177 84.1781H309.642L308.33 81.9924L309.642 79.8066H312.177L313.489 81.9924L312.177 84.1781Z" fill="#B7C1D6" />
                                <path d="M302.035 93.095H296.877L294.342 88.6361L296.877 84.0898H302.035L304.658 88.6361L302.035 93.095Z" fill="#B7C1D6" />
                                <path d="M291.107 100.439H285.074L282.014 95.193L285.074 89.9473H291.107L294.079 95.193L291.107 100.439Z" fill="#B7C1D6" />
                                <path d="M279.741 107.083H273.621L270.561 101.75L273.621 96.5039H279.741L282.714 101.75L279.741 107.083Z" fill="#B7C1D6" />
                                <path d="M267.938 113.029H262.518L259.895 108.395L262.518 103.674H267.938L270.649 108.395L267.938 113.029Z" fill="#B7C1D6" />
                                <path d="M254.562 116.177H253.163L252.463 114.953L253.163 113.729H254.562L255.261 114.953L254.562 116.177Z" fill="#B7C1D6" />
                                <path d="M256.922 133.399H250.802L247.742 128.153L250.802 122.82H256.922L259.895 128.153L256.922 133.399Z" fill="#B7C1D6" />
                                <path d="M256.922 146.602H250.802L247.742 141.269L250.802 136.023H256.922L259.895 141.269L256.922 146.602Z" fill="#B7C1D6" />
                                <path d="M256.922 159.716H250.802L247.742 154.47L250.802 149.225H256.922L259.895 154.47L256.922 159.716Z" fill="#B7C1D6" />
                                <path d="M256.922 172.917H250.802L247.742 167.671L250.802 162.338H256.922L259.895 167.671L256.922 172.917Z" fill="#D63129" />
                                <path d="M256.922 186.12H250.802L247.742 180.787L250.802 175.541H256.922L259.895 180.787L256.922 186.12Z" fill="#B7C1D6" />
                                <path d="M256.922 199.234H250.802L247.742 193.988L250.802 188.742H256.922L259.895 193.988L256.922 199.234Z" fill="#B7C1D6" />
                                <path d="M256.922 212.435H250.802L247.742 207.189L250.802 201.943H256.922L259.895 207.189L256.922 212.435Z" fill="#B7C1D6" />
                                <path d="M256.922 225.637H250.802L247.742 220.392L250.802 215.059H256.922L259.895 220.392L256.922 225.637Z" fill="#B7C1D6" />
                                <path d="M256.922 238.839H250.802L247.742 233.505L250.802 228.26H256.922L259.895 233.505L256.922 238.839Z" fill="#B7C1D6" />
                                <path d="M256.922 251.952H250.802L247.742 246.707L250.802 241.461H256.922L259.895 246.707L256.922 251.952Z" fill="#B7C1D6" />
                                <path d="M256.922 265.155H250.802L247.742 259.909L250.802 254.576H256.922L259.895 259.909L256.922 265.155Z" fill="#049848" />
                                <path d="M256.922 278.356H250.802L247.742 273.023L250.802 267.777H256.922L259.895 273.023L256.922 278.356Z" fill="#B7C1D6" />
                                <path d="M256.922 291.47H250.802L247.742 286.224L250.802 280.979H256.922L259.895 286.224L256.922 291.47Z" fill="#B7C1D6" />
                                <path d="M256.922 304.673H250.802L247.742 299.427L250.802 294.182H256.922L259.895 299.427L256.922 304.673Z" fill="#B7C1D6" />
                                <path d="M256.922 317.874H250.802L247.742 312.628L250.802 307.295H256.922L259.895 312.628L256.922 317.874Z" fill="#B7C1D6" />
                                <path d="M256.922 331.075H250.802L247.742 325.742L250.802 320.496H256.922L259.895 325.742L256.922 331.075Z" fill="#B7C1D6" />
                                <path d="M256.922 344.191H250.802L247.742 338.945L250.802 333.699H256.922L259.895 338.945L256.922 344.191Z" fill="#B7C1D6" />
                                <path d="M256.922 357.391H250.802L247.742 352.146L250.802 346.812H256.922L259.895 352.146L256.922 357.391Z" fill="#B7C1D6" />
                                <path d="M256.835 370.506H250.802L247.83 365.26L250.802 360.102H256.835L259.807 365.26L256.835 370.506Z" fill="#B7C1D6" />
                                <path d="M255.086 380.647H252.638L251.327 378.462L252.638 376.363H255.086L256.31 378.462L255.086 380.647Z" fill="#B7C1D6" />
                                <path d="M380.983 691.018H377.661L376 688.133L377.661 685.248H380.983L382.645 688.133L380.983 691.018Z" fill="#B7C1D6" />
                                <path d="M393.835 699.937H387.715L384.655 694.691L387.715 689.445H393.835L396.895 694.691L393.835 699.937Z" fill="#B7C1D6" />
                                <path d="M405.026 706.144H399.343L396.546 701.248L399.343 696.352H405.026L407.824 701.248L405.026 706.144Z" fill="#B7C1D6" />
                                <path d="M414.906 710.167H412.283L410.884 707.894L412.283 705.533H414.906L416.305 707.894L414.906 710.167Z" fill="#B7C1D6" />
                                <path d="M1111.97 599.918H1107.34L1104.98 595.897L1107.34 591.875H1111.97L1114.33 595.897L1111.97 599.918Z" fill="#B7C1D6" />
                                <path d="M1112.67 587.941H1106.64L1103.58 582.695L1106.64 577.449H1112.67L1115.73 582.695L1112.67 587.941Z" fill="#B7C1D6" />
                                <path d="M1112.67 574.827H1106.64L1103.58 569.494L1106.64 564.248H1112.67L1115.73 569.494L1112.67 574.827Z" fill="#B7C1D6" />
                                <path d="M1112.67 561.626H1106.64L1103.58 556.38L1106.64 551.047H1112.67L1115.73 556.38L1112.67 561.626Z" fill="#B7C1D6" />
                                <path d="M1112.67 548.423H1106.64L1103.58 543.177L1106.64 537.932H1112.67L1115.73 543.177L1112.67 548.423Z" fill="#B7C1D6" />
                                <path d="M1112.67 535.309H1106.64L1103.58 529.976L1106.64 524.73H1112.67L1115.73 529.976L1112.67 535.309Z" fill="#B7C1D6" />
                                <path d="M1111.89 520.709H1107.43L1105.15 516.862L1107.43 512.928H1111.89L1114.16 516.862L1111.89 520.709Z" fill="#B7C1D6" />
                                <path d="M1110.84 413.434H1108.48L1107.34 411.423L1108.48 409.412H1110.84L1111.97 411.423L1110.84 413.434Z" fill="#B7C1D6" />
                                <path d="M1110.57 399.883H1108.74L1107.78 398.222L1108.74 396.561H1110.57L1111.54 398.222L1110.57 399.883Z" fill="#B7C1D6" />
                                <path d="M1112.59 297.853H1106.82L1103.84 292.87L1106.82 287.799H1112.59L1115.47 292.87L1112.59 297.853Z" fill="#B7C1D6" />
                                <path d="M1111.89 283.516H1107.43L1105.15 279.669L1107.43 275.734H1111.89L1114.16 279.669L1111.89 283.516Z" fill="#B7C1D6" />
                                <path d="M1112.67 271.712H1106.64L1103.58 266.466L1106.64 261.221H1112.67L1115.73 266.466L1112.67 271.712Z" fill="#B7C1D6" />
                                <path d="M1112.67 258.598H1106.64L1103.58 253.265L1106.64 248.02H1112.67L1115.73 253.265L1112.67 258.598Z" fill="#B7C1D6" />
                                <path d="M1112.67 245.395H1106.64L1103.58 240.15L1106.64 234.816H1112.67L1115.73 240.15L1112.67 245.395Z" fill="#B7C1D6" />
                                <path d="M1112.67 232.195H1106.64L1103.58 226.949L1106.64 221.703H1112.67L1115.73 226.949L1112.67 232.195Z" fill="#B7C1D6" />
                                <path d="M1112.67 219.081H1106.64L1103.58 213.748L1106.64 208.502H1112.67L1115.73 213.748L1112.67 219.081Z" fill="#B7C1D6" />
                                <path d="M1112.67 205.878H1106.64L1103.58 200.632L1106.64 195.299H1112.67L1115.73 200.632L1112.67 205.878Z" fill="#B7C1D6" />
                                <path d="M1112.67 192.677H1106.64L1103.58 187.431L1106.64 182.186H1112.67L1115.73 187.431L1112.67 192.677Z" fill="#B7C1D6" />
                                <path d="M1112.67 179.476H1106.64L1103.58 174.23L1106.64 168.984H1112.67L1115.73 174.23L1112.67 179.476Z" fill="#B7C1D6" />
                                <path d="M1112.67 166.36H1106.64L1103.58 161.027L1106.64 155.781H1112.67L1115.73 161.027L1112.67 166.36Z" fill="#B7C1D6" />
                                <path d="M1112.67 153.159H1106.64L1103.58 147.913L1106.64 142.58H1112.67L1115.73 147.913L1112.67 153.159Z" fill="#B7C1D6" />
                                <path d="M1112.67 139.956H1106.64L1103.58 134.711L1106.64 129.465H1112.67L1115.73 134.711L1112.67 139.956Z" fill="#B7C1D6" />
                                <path d="M1112.67 126.843H1106.64L1103.58 121.509L1106.64 116.264H1112.67L1115.73 121.509L1112.67 126.843Z" fill="#B7C1D6" />
                                <path d="M1112.67 113.641H1106.64L1103.58 108.396L1106.64 103.062H1112.67L1115.73 108.396L1112.67 113.641Z" fill="#B7C1D6" />
                                <path d="M1101.31 107.083H1095.19L1092.13 101.75L1095.19 96.5039H1101.31L1104.37 101.75L1101.31 107.083Z" fill="#B7C1D6" />
                                <path d="M1088.54 98.0789H1085.13L1083.47 95.1937L1085.13 92.3086H1088.54L1090.2 95.1937L1088.54 98.0789Z" fill="#B7C1D6" />
                                <path d="M392.611 25.8632H388.939L387.103 22.7158L388.939 19.5684H392.611L394.447 22.7158L392.611 25.8632Z" fill="#B7C1D6" />
                                <path d="M382.382 34.6062H376.35L373.29 29.2731L376.35 24.0273H382.382L385.442 29.2731L382.382 34.6062Z" fill="#B7C1D6" />
                                <path d="M370.142 39.6766H365.771L363.498 35.9172L365.771 32.0703H370.142L372.328 35.9172L370.142 39.6766Z" fill="#B7C1D6" />
                                <path d="M359.563 47.7199H353.531L350.471 42.4742L353.531 37.2285H359.563L362.623 42.4742L359.563 47.7199Z" fill="#B7C1D6" />
                                <path d="M311.827 70.5386H309.904L308.942 68.7901L309.904 67.1289H311.827L312.789 68.7901L311.827 70.5386Z" fill="#B7C1D6" />
                                <path d="M302.385 80.418H296.615L293.73 75.4346L296.615 70.4512H302.385L305.183 75.4346L302.385 80.418Z" fill="#B7C1D6" />
                                <path d="M290.233 85.6643H285.949L283.85 81.9923L285.949 78.3203H290.233L292.331 81.9923L290.233 85.6643Z" fill="#B7C1D6" />
                                <path d="M279.654 93.8816H273.621L270.561 88.6359L273.621 83.3027H279.654L282.714 88.6359L279.654 93.8816Z" fill="#B7C1D6" />
                                <path d="M268.288 100.439H262.168L259.195 95.193L262.168 89.9473H268.288L271.348 95.193L268.288 100.439Z" fill="#B7C1D6" />
                                <path d="M254.562 103.062H253.075L252.289 101.751L253.075 100.439H254.562L255.349 101.751L254.562 103.062Z" fill="#B7C1D6" />
                                <path d="M245.469 126.843H239.349L236.377 121.509L239.349 116.264H245.469L248.529 121.509L245.469 126.843Z" fill="#B7C1D6" />
                                <path d="M245.469 139.956H239.349L236.377 134.711L239.349 129.465H245.469L248.529 134.711L245.469 139.956Z" fill="#B7C1D6" />
                                <path d="M245.469 153.159H239.349L236.377 147.913L239.349 142.58H245.469L248.529 147.913L245.469 153.159Z" fill="#B7C1D6" />
                                <path d="M245.469 166.36H239.349L236.377 161.027L239.349 155.781H245.469L248.529 161.027L245.469 166.36Z" fill="#B7C1D6" />
                                <path d="M245.469 179.476H239.349L236.377 174.23L239.349 168.984H245.469L248.529 174.23L245.469 179.476Z" fill="#B7C1D6" />
                                <path d="M245.469 192.677H239.349L236.377 187.431L239.349 182.186H245.469L248.529 187.431L245.469 192.677Z" fill="#B7C1D6" />
                                <path d="M245.469 205.878H239.349L236.377 200.632L239.349 195.299H245.469L248.529 200.632L245.469 205.878Z" fill="#B7C1D6" />
                                <path d="M245.469 219.081H239.349L236.377 213.748L239.349 208.502H245.469L248.529 213.748L245.469 219.081Z" fill="#B7C1D6" />
                                <path d="M245.469 232.195H239.349L236.377 226.949L239.349 221.703H245.469L248.529 226.949L245.469 232.195Z" fill="#B7C1D6" />
                                <path d="M245.469 245.395H239.349L236.377 240.15L239.349 234.816H245.469L248.529 240.15L245.469 245.395Z" fill="#B7C1D6" />
                                <path d="M245.469 258.598H239.349L236.377 253.265L239.349 248.02H245.469L248.529 253.265L245.469 258.598Z" fill="#B7C1D6" />
                                <path d="M245.469 271.712H239.349L236.377 266.466L239.349 261.221H245.469L248.529 266.466L245.469 271.712Z" fill="#B7C1D6" />
                                <path d="M245.469 284.913H239.349L236.377 279.668L239.349 274.422H245.469L248.529 279.668L245.469 284.913Z" fill="#B7C1D6" />
                                <path d="M245.469 298.116H239.349L236.377 292.87L239.349 287.537H245.469L248.529 292.87L245.469 298.116Z" fill="#B7C1D6" />
                                <path d="M245.469 311.23H239.349L236.377 305.984L239.349 300.738H245.469L248.529 305.984L245.469 311.23Z" fill="#B7C1D6" />
                                <path d="M245.469 324.431H239.349L236.377 319.185L239.349 313.939H245.469L248.529 319.185L245.469 324.431Z" fill="#B7C1D6" />
                                <path d="M245.469 337.634H239.349L236.377 332.388L239.349 327.055H245.469L248.529 332.388L245.469 337.634Z" fill="#B7C1D6" />
                                <path d="M245.294 350.485H239.611L236.726 345.501L239.611 340.605H245.294L248.092 345.501L245.294 350.485Z" fill="#B7C1D6" />
                                <path d="M1124.13 594.587H1118.01L1114.95 589.254L1118.01 584.008H1124.13L1127.19 589.254L1124.13 594.587Z" fill="#B7C1D6" />
                                <path d="M1124.13 581.384H1118.01L1114.95 576.138L1118.01 570.805H1124.13L1127.19 576.138L1124.13 581.384Z" fill="#B7C1D6" />
                                <path d="M1124.13 568.183H1118.01L1114.95 562.937L1118.01 557.691H1124.13L1127.19 562.937L1124.13 568.183Z" fill="#B7C1D6" />
                                <path d="M1124.13 555.067H1118.01L1114.95 549.734L1118.01 544.488H1124.13L1127.19 549.734L1124.13 555.067Z" fill="#B7C1D6" />
                                <path d="M1124.13 541.866H1118.01L1114.95 536.62L1118.01 531.287H1124.13L1127.19 536.62L1124.13 541.866Z" fill="#B7C1D6" />
                                <path d="M1124.13 528.665H1118.01L1114.95 523.42L1118.01 518.174H1124.13L1127.19 523.42L1124.13 528.665Z" fill="#B7C1D6" />
                                <path d="M1121.94 511.79H1120.19L1119.23 510.216L1120.19 508.643H1121.94L1122.9 510.216L1121.94 511.79Z" fill="#B7C1D6" />
                                <path d="M1124.04 409.936H1118.09L1115.21 404.865L1118.09 399.707H1124.04L1126.92 404.865L1124.04 409.936Z" fill="#B7C1D6" />
                                <path d="M1123.34 316.563H1118.79L1116.52 312.629L1118.79 308.607H1123.34L1125.61 312.629L1123.34 316.563Z" fill="#B7C1D6" />
                                <path d="M1121.5 300.214H1120.63L1120.1 299.427L1120.63 298.641H1121.5L1122.03 299.427L1121.5 300.214Z" fill="#B7C1D6" />
                                <path d="M1123.95 264.893H1118.18L1115.3 259.909L1118.18 254.926H1123.95L1126.84 259.909L1123.95 264.893Z" fill="#B7C1D6" />
                                <path d="M1124.13 251.952H1118.01L1114.95 246.707L1118.01 241.461H1124.13L1127.19 246.707L1124.13 251.952Z" fill="#B7C1D6" />
                                <path d="M1124.13 238.839H1118.01L1114.95 233.505L1118.01 228.26H1124.13L1127.19 233.505L1124.13 238.839Z" fill="#B7C1D6" />
                                <path d="M1124.13 225.637H1118.01L1114.95 220.392L1118.01 215.059H1124.13L1127.19 220.392L1124.13 225.637Z" fill="#B7C1D6" />
                                <path d="M1124.04 212.348H1118.09L1115.12 207.19L1118.09 202.031H1124.04L1127.01 207.19L1124.04 212.348Z" fill="#B7C1D6" />
                                <path d="M1123.08 197.485H1119.06L1117.04 193.988L1119.06 190.578H1123.08L1125.09 193.988L1123.08 197.485Z" fill="#B7C1D6" />
                                <path d="M1124.13 186.12H1118.01L1114.95 180.787L1118.01 175.541H1124.13L1127.19 180.787L1124.13 186.12Z" fill="#B7C1D6" />
                                <path d="M1124.13 172.917H1118.01L1114.95 167.671L1118.01 162.338H1124.13L1127.19 167.671L1124.13 172.917Z" fill="#B7C1D6" />
                                <path d="M1124.13 159.716H1118.01L1114.95 154.47L1118.01 149.225H1124.13L1127.19 154.47L1124.13 159.716Z" fill="#B7C1D6" />
                                <path d="M1124.13 146.602H1118.01L1114.95 141.269L1118.01 136.023H1124.13L1127.19 141.269L1124.13 146.602Z" fill="#B7C1D6" />
                                <path d="M1124.13 133.399H1118.01L1114.95 128.153L1118.01 122.82H1124.13L1127.19 128.153L1124.13 133.399Z" fill="#B7C1D6" />
                                <path d="M1124.13 120.198H1118.01L1114.95 114.953L1118.01 109.707H1124.13L1127.19 114.953L1124.13 120.198Z" fill="#B7C1D6" />
                                <path d="M1124.13 107.083H1118.01L1114.95 101.75L1118.01 96.5039H1124.13L1127.19 101.75L1124.13 107.083Z" fill="#B7C1D6" />
                                <path d="M1112.67 100.439H1106.64L1103.58 95.193L1106.64 89.9473H1112.67L1115.73 95.193L1112.67 100.439Z" fill="#B7C1D6" />
                                <path d="M1099.73 91.172H1096.76L1095.27 88.6365L1096.76 86.0137H1099.73L1101.22 88.6365L1099.73 91.172Z" fill="#B7C1D6" />
                                <path d="M368.481 23.5904H367.432L366.907 22.7161L367.432 21.8418H368.481L369.006 22.7161L368.481 23.5904Z" fill="#B7C1D6" />
                                <path d="M357.028 30.2344H356.066L355.542 29.2727L356.066 28.3984H357.028L357.553 29.2727L357.028 30.2344Z" fill="#B7C1D6" />
                                <path d="M300.637 64.2444H298.363L297.139 62.2335L298.363 60.2227H300.637L301.773 62.2335L300.637 64.2444Z" fill="#B7C1D6" />
                                <path d="M288.834 70.1018H287.347L286.561 68.7904L287.347 67.5664H288.834L289.533 68.7904L288.834 70.1018Z" fill="#B7C1D6" />
                                <path d="M277.993 77.7084H275.37L273.971 75.4353L275.37 73.1621H277.993L279.304 75.4353L277.993 77.7084Z" fill="#B7C1D6" />
                                <path d="M268.201 87.0636H262.343L259.458 81.9927L262.343 76.9219H268.201L271.086 81.9927L268.201 87.0636Z" fill="#B7C1D6" />
                                <path d="M256.922 93.8816H250.802L247.742 88.6359L250.802 83.3027H256.922L259.895 88.6359L256.922 93.8816Z" fill="#B7C1D6" />
                                <path d="M245.469 100.439H239.349L236.377 95.193L239.349 89.9473H245.469L248.529 95.193L245.469 100.439Z" fill="#B7C1D6" />
                                <path d="M232.792 118.013H229.295L227.459 114.953L229.295 111.893H232.792L234.541 114.953L232.792 118.013Z" fill="#B7C1D6" />
                                <path d="M234.103 133.399H227.983L224.923 128.153L227.983 122.82H234.103L237.076 128.153L234.103 133.399Z" fill="#B7C1D6" />
                                <path d="M234.103 146.602H227.983L224.923 141.269L227.983 136.023H234.103L237.076 141.269L234.103 146.602Z" fill="#B7C1D6" />
                                <path d="M234.103 159.716H227.983L224.923 154.47L227.983 149.225H234.103L237.076 154.47L234.103 159.716Z" fill="#B7C1D6" />
                                <path d="M234.103 172.917H227.983L224.923 167.671L227.983 162.338H234.103L237.076 167.671L234.103 172.917Z" fill="#B7C1D6" />
                                <path d="M234.103 186.12H227.983L224.923 180.787L227.983 175.541H234.103L237.076 180.787L234.103 186.12Z" fill="#B7C1D6" />
                                <path d="M234.103 199.234H227.983L224.923 193.988L227.983 188.742H234.103L237.076 193.988L234.103 199.234Z" fill="#B7C1D6" />
                                <path d="M234.103 212.435H227.983L224.923 207.189L227.983 201.943H234.103L237.076 207.189L234.103 212.435Z" fill="#B7C1D6" />
                                <path d="M234.103 225.637H227.983L224.923 220.392L227.983 215.059H234.103L237.076 220.392L234.103 225.637Z" fill="#B7C1D6" />
                                <path d="M234.103 238.839H227.983L224.923 233.505L227.983 228.26H234.103L237.076 233.505L234.103 238.839Z" fill="#B7C1D6" />
                                <path d="M234.103 251.952H227.983L224.923 246.707L227.983 241.461H234.103L237.076 246.707L234.103 251.952Z" fill="#B7C1D6" />
                                <path d="M234.103 265.155H227.983L224.923 259.909L227.983 254.576H234.103L237.076 259.909L234.103 265.155Z" fill="#B7C1D6" />
                                <path d="M234.103 278.356H227.983L224.923 273.023L227.983 267.777H234.103L237.076 273.023L234.103 278.356Z" fill="#B7C1D6" />
                                <path d="M234.103 291.47H227.983L224.923 286.224L227.983 280.979H234.103L237.076 286.224L234.103 291.47Z" fill="#049848" />
                                <path d="M234.103 304.673H227.983L224.923 299.427L227.983 294.182H234.103L237.076 299.427L234.103 304.673Z" fill="#B7C1D6" />
                                <path d="M234.103 317.874H227.983L224.923 312.628L227.983 307.295H234.103L237.076 312.628L234.103 317.874Z" fill="#B7C1D6" />
                                <path d="M234.016 330.901H228.071L225.098 325.742L228.071 320.584H234.016L236.989 325.742L234.016 330.901Z" fill="#B7C1D6" />
                                <path d="M233.666 343.491H228.421L225.798 338.945L228.421 334.398H233.666L236.202 338.945L233.666 343.491Z" fill="#B7C1D6" />
                                <path d="M233.229 355.994H228.77L226.497 352.147L228.77 348.213H233.229L235.502 352.147L233.229 355.994Z" fill="#B7C1D6" />
                                <path d="M1133.66 611.109H1131.3L1130.16 609.011L1131.3 607H1133.66L1134.79 609.011L1133.66 611.109Z" fill="#B7C1D6" />
                                <path d="M1135.49 601.142H1129.46L1126.4 595.896L1129.46 590.65H1135.49L1138.55 595.896L1135.49 601.142Z" fill="#B7C1D6" />
                                <path d="M1135.49 587.941H1129.46L1126.4 582.695L1129.46 577.449H1135.49L1138.55 582.695L1135.49 587.941Z" fill="#B7C1D6" />
                                <path d="M1135.49 574.827H1129.46L1126.4 569.494L1129.46 564.248H1135.49L1138.55 569.494L1135.49 574.827Z" fill="#B7C1D6" />
                                <path d="M1135.49 561.626H1129.46L1126.4 556.38L1129.46 551.047H1135.49L1138.55 556.38L1135.49 561.626Z" fill="#B7C1D6" />
                                <path d="M1135.49 548.423H1129.46L1126.4 543.177L1129.46 537.932H1135.49L1138.55 543.177L1135.49 548.423Z" fill="#B7C1D6" />
                                <path d="M1135.49 535.309H1129.46L1126.4 529.976L1129.46 524.73H1135.49L1138.55 529.976L1135.49 535.309Z" fill="#B7C1D6" />
                                <path d="M1135.49 522.108H1129.46L1126.4 516.862L1129.46 511.529H1135.49L1138.55 516.862L1135.49 522.108Z" fill="#B7C1D6" />
                                <path d="M1133.92 506.109H1131.03L1129.63 503.661L1131.03 501.213H1133.92L1135.32 503.661L1133.92 506.109Z" fill="#B7C1D6" />
                                <path d="M1134.18 467.028H1130.77L1129.11 464.142L1130.77 461.17H1134.18L1135.84 464.142L1134.18 467.028Z" fill="#B7C1D6" />
                                <path d="M1135.4 455.924H1129.55L1126.66 450.94L1129.55 445.957H1135.4L1138.29 450.94L1135.4 455.924Z" fill="#B7C1D6" />
                                <path d="M1135.32 310.88H1129.63L1126.84 305.984L1129.63 301.088H1135.32L1138.11 305.984L1135.32 310.88Z" fill="#B7C1D6" />
                                <path d="M1133.04 254.314H1131.91L1131.3 253.264L1131.91 252.303H1133.04L1133.66 253.264L1133.04 254.314Z" fill="#B7C1D6" />
                                <path d="M1135.49 245.308H1129.46L1126.49 240.15L1129.46 234.904H1135.49L1138.55 240.15L1135.49 245.308Z" fill="#B7C1D6" />
                                <path d="M1135.49 232.195H1129.46L1126.4 226.949L1129.46 221.703H1135.49L1138.55 226.949L1135.49 232.195Z" fill="#B7C1D6" />
                                <path d="M1135.49 218.992H1129.46L1126.49 213.746L1129.46 208.588H1135.49L1138.46 213.746L1135.49 218.992Z" fill="#B7C1D6" />
                                <path d="M1133.74 202.818H1131.21L1129.9 200.633L1131.21 198.359H1133.74L1135.05 200.633L1133.74 202.818Z" fill="#B7C1D6" />
                                <path d="M1135.4 179.3H1129.55L1126.57 174.229L1129.55 169.158H1135.4L1138.38 174.229L1135.4 179.3Z" fill="#B7C1D6" />
                                <path d="M1135.49 166.36H1129.46L1126.4 161.027L1129.46 155.781H1135.49L1138.55 161.027L1135.49 166.36Z" fill="#B7C1D6" />
                                <path d="M1135.49 153.159H1129.46L1126.4 147.913L1129.46 142.58H1135.49L1138.55 147.913L1135.49 153.159Z" fill="#B7C1D6" />
                                <path d="M1135.49 139.956H1129.46L1126.4 134.711L1129.46 129.465H1135.49L1138.55 134.711L1135.49 139.956Z" fill="#B7C1D6" />
                                <path d="M1135.49 126.843H1129.46L1126.4 121.509L1129.46 116.264H1135.49L1138.55 121.509L1135.49 126.843Z" fill="#B7C1D6" />
                                <path d="M1135.49 113.641H1129.46L1126.4 108.396L1129.46 103.062H1135.49L1138.55 108.396L1135.49 113.641Z" fill="#B7C1D6" />
                                <path d="M1100.96 80.0677H1095.54L1092.83 75.434L1095.54 70.7129H1100.96L1103.67 75.434L1100.96 80.0677Z" fill="#B7C1D6" />
                                <path d="M1089.24 72.9874H1084.43L1081.99 68.7908L1084.43 64.6816H1089.24L1091.69 68.7908L1089.24 72.9874Z" fill="#B7C1D6" />
                                <path d="M254.911 77.2711H252.726L251.677 75.4351L252.726 73.5117H254.911L256.048 75.4351L254.911 77.2711Z" fill="#B7C1D6" />
                                <path d="M243.983 84.6149H240.923L239.349 81.992L240.923 79.3691H243.983L245.469 81.992L243.983 84.6149Z" fill="#B7C1D6" />
                                <path d="M222.65 126.843H216.53L213.558 121.509L216.53 116.264H222.65L225.71 121.509L222.65 126.843Z" fill="#B7C1D6" />
                                <path d="M222.65 139.956H216.53L213.558 134.711L216.53 129.465H222.65L225.71 134.711L222.65 139.956Z" fill="#B7C1D6" />
                                <path d="M222.65 153.159H216.53L213.558 147.913L216.53 142.58H222.65L225.71 147.913L222.65 153.159Z" fill="#B7C1D6" />
                                <path d="M222.65 166.36H216.53L213.558 161.027L216.53 155.781H222.65L225.71 161.027L222.65 166.36Z" fill="#B7C1D6" />
                                <path d="M222.65 179.476H216.53L213.558 174.23L216.53 168.984H222.65L225.71 174.23L222.65 179.476Z" fill="#B7C1D6" />
                                <path d="M222.65 192.677H216.53L213.558 187.431L216.53 182.186H222.65L225.71 187.431L222.65 192.677Z" fill="#B7C1D6" />
                                <path d="M222.65 205.878H216.53L213.558 200.632L216.53 195.299H222.65L225.71 200.632L222.65 205.878Z" fill="#B7C1D6" />
                                <path d="M222.65 219.081H216.53L213.558 213.748L216.53 208.502H222.65L225.71 213.748L222.65 219.081Z" fill="#B7C1D6" />
                                <path d="M222.65 232.195H216.53L213.558 226.949L216.53 221.703H222.65L225.71 226.949L222.65 232.195Z" fill="#B7C1D6" />
                                <path d="M222.65 245.395H216.53L213.558 240.15L216.53 234.816H222.65L225.71 240.15L222.65 245.395Z" fill="#B7C1D6" />
                                <path d="M222.65 258.598H216.53L213.558 253.265L216.53 248.02H222.65L225.71 253.265L222.65 258.598Z" fill="#B7C1D6" />
                                <path d="M222.65 271.712H216.53L213.558 266.466L216.53 261.221H222.65L225.71 266.466L222.65 271.712Z" fill="#B7C1D6" />
                                <path d="M222.65 284.913H216.53L213.558 279.668L216.53 274.422H222.65L225.71 279.668L222.65 284.913Z" fill="#B7C1D6" />
                                <path d="M222.65 298.116H216.53L213.558 292.87L216.53 287.537H222.65L225.71 292.87L222.65 298.116Z" fill="#B7C1D6" />
                                <path d="M222.65 311.23H216.53L213.558 305.984L216.53 300.738H222.65L225.71 305.984L222.65 311.23Z" fill="#B7C1D6" />
                                <path d="M222.65 324.431H216.53L213.558 319.185L216.53 313.939H222.65L225.71 319.185L222.65 324.431Z" fill="#B7C1D6" />
                                <path d="M222.475 337.284H216.793L213.907 332.388L216.793 327.404H222.475L225.273 332.388L222.475 337.284Z" fill="#B7C1D6" />
                                <path d="M1144.76 617.142H1143.01L1142.22 615.656L1143.01 614.17H1144.76L1145.55 615.656L1144.76 617.142Z" fill="#B7C1D6" />
                                <path d="M1146.95 607.7H1140.83L1137.77 602.455L1140.83 597.209H1146.95L1150.01 602.455L1146.95 607.7Z" fill="#B7C1D6" />
                                <path d="M1146.95 594.587H1140.83L1137.77 589.254L1140.83 584.008H1146.95L1150.01 589.254L1146.95 594.587Z" fill="#B7C1D6" />
                                <path d="M1146.95 581.384H1140.83L1137.77 576.138L1140.83 570.805H1146.95L1150.01 576.138L1146.95 581.384Z" fill="#B7C1D6" />
                                <path d="M1146.95 568.183H1140.83L1137.77 562.937L1140.83 557.691H1146.95L1150.01 562.937L1146.95 568.183Z" fill="#B7C1D6" />
                                <path d="M1146.95 555.067H1140.83L1137.77 549.734L1140.83 544.488H1146.95L1150.01 549.734L1146.95 555.067Z" fill="#B7C1D6" />
                                <path d="M1146.95 541.866H1140.83L1137.77 536.62L1140.83 531.287H1146.95L1150.01 536.62L1146.95 541.866Z" fill="#B7C1D6" />
                                <path d="M1146.95 528.665H1140.83L1137.77 523.42L1140.83 518.174H1146.95L1150.01 523.42L1146.95 528.665Z" fill="#B7C1D6" />
                                <path d="M1146.95 515.462H1140.83L1137.77 510.216L1140.83 504.971H1146.95L1150.01 510.216L1146.95 515.462Z" fill="#B7C1D6" />
                                <path d="M1146.95 304.673H1140.83L1137.77 299.427L1140.83 294.182H1146.95L1150.01 299.427L1146.95 304.673Z" fill="#B7C1D6" />
                                <path d="M1145.46 262.619H1142.31L1140.74 259.909L1142.31 257.111H1145.46L1147.03 259.909L1145.46 262.619Z" fill="#B7C1D6" />
                                <path d="M1144.85 235.166H1142.92L1141.96 233.505L1142.92 231.844H1144.85L1145.81 233.505L1144.85 235.166Z" fill="#B7C1D6" />
                                <path d="M1145.81 223.714H1141.96L1139.95 220.392L1141.96 216.982H1145.81L1147.82 220.392L1145.81 223.714Z" fill="#B7C1D6" />
                                <path d="M1146.16 211.211H1141.61L1139.25 207.19L1141.61 203.168H1146.16L1148.52 207.19L1146.16 211.211Z" fill="#B7C1D6" />
                                <path d="M1146.95 172.917H1140.83L1137.77 167.671L1140.83 162.338H1146.95L1150.01 167.671L1146.95 172.917Z" fill="#B7C1D6" />
                                <path d="M1146.95 159.716H1140.83L1137.77 154.47L1140.83 149.225H1146.95L1150.01 154.47L1146.95 159.716Z" fill="#B7C1D6" />
                                <path d="M1146.95 146.602H1140.83L1137.77 141.269L1140.83 136.023H1146.95L1150.01 141.269L1146.95 146.602Z" fill="#B7C1D6" />
                                <path d="M1146.95 133.399H1140.83L1137.77 128.153L1140.83 122.82H1146.95L1150.01 128.153L1146.95 133.399Z" fill="#B7C1D6" />
                                <path d="M1146.95 120.198H1140.83L1137.77 114.953L1140.83 109.707H1146.95L1150.01 114.953L1146.95 120.198Z" fill="#B7C1D6" />
                                <path d="M1144.67 103.15H1143.1L1142.31 101.751L1143.1 100.439H1144.67L1145.46 101.751L1144.67 103.15Z" fill="#B7C1D6" />
                                <path d="M210.148 118.362H206.214L204.29 114.953L206.214 111.543H210.148L212.159 114.953L210.148 118.362Z" fill="#B7C1D6" />
                                <path d="M211.197 133.399H205.165L202.105 128.153L205.165 122.82H211.197L214.257 128.153L211.197 133.399Z" fill="#B7C1D6" />
                                <path d="M211.197 146.602H205.165L202.105 141.269L205.165 136.023H211.197L214.257 141.269L211.197 146.602Z" fill="#B7C1D6" />
                                <path d="M211.197 159.716H205.165L202.105 154.47L205.165 149.225H211.197L214.257 154.47L211.197 159.716Z" fill="#B7C1D6" />
                                <path d="M211.197 172.917H205.165L202.105 167.671L205.165 162.338H211.197L214.257 167.671L211.197 172.917Z" fill="#B7C1D6" />
                                <path d="M211.197 186.12H205.165L202.105 180.787L205.165 175.541H211.197L214.257 180.787L211.197 186.12Z" fill="#B7C1D6" />
                                <path d="M211.197 199.234H205.165L202.105 193.988L205.165 188.742H211.197L214.257 193.988L211.197 199.234Z" fill="#B7C1D6" />
                                <path d="M211.197 212.435H205.165L202.105 207.189L205.165 201.943H211.197L214.257 207.189L211.197 212.435Z" fill="#B7C1D6" />
                                <path d="M211.197 225.637H205.165L202.105 220.392L205.165 215.059H211.197L214.257 220.392L211.197 225.637Z" fill="#B7C1D6" />
                                <path d="M211.197 238.839H205.165L202.105 233.505L205.165 228.26H211.197L214.257 233.505L211.197 238.839Z" fill="#B7C1D6" />
                                <path d="M211.197 251.952H205.165L202.105 246.707L205.165 241.461H211.197L214.257 246.707L211.197 251.952Z" fill="#B7C1D6" />
                                <path d="M211.197 265.155H205.165L202.105 259.909L205.165 254.576H211.197L214.257 259.909L211.197 265.155Z" fill="#B7C1D6" />
                                <path d="M211.197 278.356H205.165L202.105 273.023L205.165 267.777H211.197L214.257 273.023L211.197 278.356Z" fill="#B7C1D6" />
                                <path d="M211.197 291.47H205.165L202.105 286.224L205.165 280.979H211.197L214.257 286.224L211.197 291.47Z" fill="#B7C1D6" />
                                <path d="M211.197 304.673H205.165L202.105 299.427L205.165 294.182H211.197L214.257 299.427L211.197 304.673Z" fill="#B7C1D6" />
                                <path d="M209.099 314.202H207.263L206.301 312.628L207.263 310.967H209.099L210.061 312.628L209.099 314.202Z" fill="#B7C1D6" />
                                <path d="M1157.17 638.736H1153.41L1151.49 635.414L1153.41 632.092H1157.17L1159.1 635.414L1157.17 638.736Z" fill="#B7C1D6" />
                                <path d="M1158.31 627.458H1152.28L1149.22 622.213L1152.28 616.967H1158.31L1161.37 622.213L1158.31 627.458Z" fill="#B7C1D6" />
                                <path d="M1158.31 614.344H1152.28L1149.22 609.011L1152.28 603.766H1158.31L1161.37 609.011L1158.31 614.344Z" fill="#B7C1D6" />
                                <path d="M1158.31 601.142H1152.28L1149.22 595.896L1152.28 590.65H1158.31L1161.37 595.896L1158.31 601.142Z" fill="#B7C1D6" />
                                <path d="M1158.31 587.941H1152.28L1149.22 582.695L1152.28 577.449H1158.31L1161.37 582.695L1158.31 587.941Z" fill="#B7C1D6" />
                                <path d="M1158.31 574.827H1152.28L1149.22 569.494L1152.28 564.248H1158.31L1161.37 569.494L1158.31 574.827Z" fill="#D63129" />
                                <path d="M1158.31 561.626H1152.28L1149.22 556.38L1152.28 551.047H1158.31L1161.37 556.38L1158.31 561.626Z" fill="#B7C1D6" />
                                <path d="M1158.31 548.423H1152.28L1149.22 543.177L1152.28 537.932H1158.31L1161.37 543.177L1158.31 548.423Z" fill="#B7C1D6" />
                                <path d="M1158.31 535.309H1152.28L1149.22 529.976L1152.28 524.73H1158.31L1161.37 529.976L1158.31 535.309Z" fill="#B7C1D6" />
                                <path d="M1156.04 478.569H1154.55L1153.85 477.257L1154.55 476.033H1156.04L1156.74 477.257L1156.04 478.569Z" fill="#B7C1D6" />
                                <path d="M1158.31 469.387H1152.28L1149.22 464.142L1152.28 458.809H1158.31L1161.37 464.142L1158.31 469.387Z" fill="#B7C1D6" />
                                <path d="M1157.96 297.503H1152.63L1149.92 292.87L1152.63 288.148H1157.96L1160.67 292.87L1157.96 297.503Z" fill="#B7C1D6" />
                                <path d="M1157.09 282.727H1153.5L1151.75 279.667L1153.5 276.607H1157.09L1158.84 279.667L1157.09 282.727Z" fill="#B7C1D6" />
                                <path d="M1156.39 268.303H1154.29L1153.24 266.467L1154.29 264.631H1156.39L1157.44 266.467L1156.39 268.303Z" fill="#B7C1D6" />
                                <path d="M1158.05 258.073H1152.54L1149.83 253.264L1152.54 248.543H1158.05L1160.76 253.264L1158.05 258.073Z" fill="#B7C1D6" />
                                <path d="M1156.56 229.135H1154.03L1152.8 226.949L1154.03 224.764H1156.56L1157.79 226.949L1156.56 229.135Z" fill="#B7C1D6" />
                                <path d="M1158.22 179.3H1152.37L1149.39 174.229L1152.37 169.158H1158.22L1161.2 174.229L1158.22 179.3Z" fill="#B7C1D6" />
                                <path d="M1158.31 166.36H1152.28L1149.22 161.027L1152.28 155.781H1158.31L1161.37 161.027L1158.31 166.36Z" fill="#B7C1D6" />
                                <path d="M1158.31 153.159H1152.28L1149.22 147.913L1152.28 142.58H1158.31L1161.37 147.913L1158.31 153.159Z" fill="#B7C1D6" />
                                <path d="M1158.31 139.956H1152.28L1149.22 134.711L1152.28 129.465H1158.31L1161.37 134.711L1158.31 139.956Z" fill="#D63129" />
                                <path d="M1158.31 126.843H1152.28L1149.22 121.509L1152.28 116.264H1158.31L1161.37 121.509L1158.31 126.843Z" fill="#B7C1D6" />
                                <path d="M1158.31 113.641H1152.28L1149.22 108.396L1152.28 103.062H1158.31L1161.37 108.396L1158.31 113.641Z" fill="#B7C1D6" />
                                <path d="M199.831 126.843H193.711L190.739 121.509L193.711 116.264H199.831L202.891 121.509L199.831 126.843Z" fill="#B7C1D6" />
                                <path d="M199.831 139.956H193.711L190.739 134.711L193.711 129.465H199.831L202.891 134.711L199.831 139.956Z" fill="#B7C1D6" />
                                <path d="M199.831 153.159H193.711L190.739 147.913L193.711 142.58H199.831L202.891 147.913L199.831 153.159Z" fill="#B7C1D6" />
                                <path d="M199.831 166.36H193.711L190.739 161.027L193.711 155.781H199.831L202.891 161.027L199.831 166.36Z" fill="#B7C1D6" />
                                <path d="M199.831 179.476H193.711L190.739 174.23L193.711 168.984H199.831L202.891 174.23L199.831 179.476Z" fill="#B7C1D6" />
                                <path d="M199.831 192.677H193.711L190.739 187.431L193.711 182.186H199.831L202.891 187.431L199.831 192.677Z" fill="#B7C1D6" />
                                <path d="M199.657 205.617H193.886L191.001 200.633L193.886 195.562H199.657L202.542 200.633L199.657 205.617Z" fill="#B7C1D6" />
                                <path d="M199.045 217.594H194.586L192.313 213.747L194.586 209.9H199.045L201.23 213.747L199.045 217.594Z" fill="#B7C1D6" />
                                <path d="M197.908 228.872H195.722L194.586 226.949L195.722 225.025H197.908L198.957 226.949L197.908 228.872Z" fill="#B7C1D6" />
                                <path d="M197.471 241.287H196.159L195.46 240.15L196.159 239.014H197.471L198.083 240.15L197.471 241.287Z" fill="#B7C1D6" />
                                <path d="M197.733 255.013H195.81L194.761 253.265L195.81 251.604H197.733L198.782 253.265L197.733 255.013Z" fill="#B7C1D6" />
                                <path d="M197.908 268.39H195.722L194.586 266.466L195.722 264.543H197.908L198.957 266.466L197.908 268.39Z" fill="#B7C1D6" />
                                <path d="M198.957 283.514H194.586L192.4 279.667L194.586 275.82H198.957L201.23 279.667L198.957 283.514Z" fill="#B7C1D6" />
                                <path d="M197.908 294.705H195.722L194.586 292.869L195.722 290.945H197.908L198.957 292.869L197.908 294.705Z" fill="#B7C1D6" />
                                <path d="M1169.76 647.218H1163.64L1160.67 641.972L1163.64 636.727H1169.76L1172.74 641.972L1169.76 647.218Z" fill="#B7C1D6" />
                                <path d="M1168.19 631.393H1165.22L1163.73 628.857L1165.22 626.234H1168.19L1169.68 628.857L1168.19 631.393Z" fill="#B7C1D6" />
                                <path d="M1169.76 620.902H1163.64L1160.67 615.656L1163.64 610.41H1169.76L1172.82 615.656L1169.76 620.902Z" fill="#B7C1D6" />
                                <path d="M1169.76 607.7H1163.64L1160.67 602.455L1163.64 597.209H1169.76L1172.82 602.455L1169.76 607.7Z" fill="#B7C1D6" />
                                <path d="M1169.76 594.587H1163.64L1160.67 589.254L1163.64 584.008H1169.76L1172.82 589.254L1169.76 594.587Z" fill="#B7C1D6" />
                                <path d="M1169.76 581.384H1163.64L1160.67 576.138L1163.64 570.805H1169.76L1172.82 576.138L1169.76 581.384Z" fill="#B7C1D6" />
                                <path d="M1169.76 568.183H1163.64L1160.67 562.937L1163.64 557.691H1169.76L1172.82 562.937L1169.76 568.183Z" fill="#B7C1D6" />
                                <path d="M1169.76 555.067H1163.64L1160.67 549.734L1163.64 544.488H1169.76L1172.82 549.734L1169.76 555.067Z" fill="#B7C1D6" />
                                <path d="M1169.76 541.866H1163.64L1160.67 536.62L1163.64 531.287H1169.76L1172.82 536.62L1169.76 541.866Z" fill="#B7C1D6" />
                                <path d="M1167.93 525.517H1165.48L1164.34 523.419L1165.48 521.32H1167.93L1169.15 523.419L1167.93 525.517Z" fill="#B7C1D6" />
                                <path d="M1169.68 488.971H1163.73L1160.85 483.9L1163.73 478.742H1169.68L1172.65 483.9L1169.68 488.971Z" fill="#B7C1D6" />
                                <path d="M1169.76 475.945H1163.64L1160.67 470.699L1163.64 465.453H1169.76L1172.82 470.699L1169.76 475.945Z" fill="#B7C1D6" />
                                <path d="M1167.4 458.809H1166L1165.22 457.497L1166 456.273H1167.4L1168.19 457.497L1167.4 458.809Z" fill="#B7C1D6" />
                                <path d="M1168.63 184.197H1164.78L1162.86 180.787L1164.78 177.465H1168.63L1170.55 180.787L1168.63 184.197Z" fill="#B7C1D6" />
                                <path d="M1169.76 172.917H1163.64L1160.67 167.671L1163.64 162.338H1169.76L1172.82 167.671L1169.76 172.917Z" fill="#D63129" />
                                <path d="M1169.76 159.716H1163.64L1160.67 154.47L1163.64 149.225H1169.76L1172.82 154.47L1169.76 159.716Z" fill="#B7C1D6" />
                                <path d="M1169.76 146.602H1163.64L1160.67 141.269L1163.64 136.023H1169.76L1172.82 141.269L1169.76 146.602Z" fill="#B7C1D6" />
                                <path d="M1169.76 133.399H1163.64L1160.67 128.153L1163.64 122.82H1169.76L1172.82 128.153L1169.76 133.399Z" fill="#B7C1D6" />
                                <path d="M1169.68 120.111H1163.73L1160.76 114.953L1163.73 109.795H1169.68L1172.65 114.953L1169.68 120.111Z" fill="#B7C1D6" />
                                <path d="M187.591 118.712H183.22L181.034 114.953L183.22 111.193H187.591L189.777 114.953L187.591 118.712Z" fill="#B7C1D6" />
                                <path d="M188.378 133.399H182.346L179.286 128.153L182.346 122.82H188.378L191.438 128.153L188.378 133.399Z" fill="#B7C1D6" />
                                <path d="M188.378 146.602H182.346L179.286 141.269L182.346 136.023H188.378L191.438 141.269L188.378 146.602Z" fill="#B7C1D6" />
                                <path d="M188.378 159.716H182.346L179.286 154.47L182.346 149.225H188.378L191.438 154.47L188.378 159.716Z" fill="#B7C1D6" />
                                <path d="M188.378 172.917H182.346L179.286 167.671L182.346 162.338H188.378L191.438 167.671L188.378 172.917Z" fill="#B7C1D6" />
                                <path d="M188.378 186.12H182.346L179.286 180.787L182.346 175.541H188.378L191.438 180.787L188.378 186.12Z" fill="#B7C1D6" />
                                <path d="M187.766 198.097H182.958L180.597 193.988L182.958 189.879H187.766L190.127 193.988L187.766 198.097Z" fill="#B7C1D6" />
                                <path d="M1178.86 636.639H1177.46L1176.76 635.415L1177.46 634.191H1178.86L1179.56 635.415L1178.86 636.639Z" fill="#B7C1D6" />
                                <path d="M1181.04 627.195H1175.27L1172.39 622.212L1175.27 617.229H1181.04L1183.84 622.212L1181.04 627.195Z" fill="#B7C1D6" />
                                <path d="M1181.13 614.344H1175.1L1172.04 609.011L1175.1 603.766H1181.13L1184.19 609.011L1181.13 614.344Z" fill="#B7C1D6" />
                                <path d="M1181.13 601.142H1175.1L1172.04 595.896L1175.1 590.65H1181.13L1184.19 595.896L1181.13 601.142Z" fill="#B7C1D6" />
                                <path d="M1181.13 587.941H1175.1L1172.04 582.695L1175.1 577.449H1181.13L1184.19 582.695L1181.13 587.941Z" fill="#B7C1D6" />
                                <path d="M1181.13 574.827H1175.1L1172.04 569.494L1175.1 564.248H1181.13L1184.19 569.494L1181.13 574.827Z" fill="#B7C1D6" />
                                <path d="M1181.13 561.626H1175.1L1172.04 556.38L1175.1 551.047H1181.13L1184.19 556.38L1181.13 561.626Z" fill="#B7C1D6" />
                                <path d="M1181.13 548.423H1175.1L1172.04 543.177L1175.1 537.932H1181.13L1184.19 543.177L1181.13 548.423Z" fill="#B7C1D6" />
                                <path d="M1181.13 535.309H1175.1L1172.04 529.976L1175.1 524.73H1181.13L1184.19 529.976L1181.13 535.309Z" fill="#B7C1D6" />
                                <path d="M1180.87 521.495H1175.45L1172.65 516.862L1175.45 512.141H1180.87L1183.58 516.862L1180.87 521.495Z" fill="#B7C1D6" />
                                <path d="M1179.12 505.322H1177.11L1176.15 503.661L1177.11 501.912H1179.12L1180.08 503.661L1179.12 505.322Z" fill="#B7C1D6" />
                                <path d="M1180.95 495.355H1175.36L1172.47 490.459L1175.36 485.65H1180.95L1183.75 490.459L1180.95 495.355Z" fill="#B7C1D6" />
                                <path d="M1181.13 482.589H1175.1L1172.04 477.255L1175.1 472.01H1181.13L1184.19 477.255L1181.13 482.589Z" fill="#B7C1D6" />
                                <path d="M1181.13 166.273H1175.1L1172.04 161.027L1175.1 155.781H1181.13L1184.19 161.027L1181.13 166.273Z" fill="#B7C1D6" />
                                <path d="M1181.13 153.159H1175.1L1172.04 147.913L1175.1 142.58H1181.13L1184.19 147.913L1181.13 153.159Z" fill="#B7C1D6" />
                                <path d="M1181.13 139.956H1175.1L1172.04 134.711L1175.1 129.465H1181.13L1184.19 134.711L1181.13 139.956Z" fill="#B7C1D6" />
                                <path d="M1181.13 126.843H1175.1L1172.04 121.509L1175.1 116.264H1181.13L1184.19 121.509L1181.13 126.843Z" fill="#B7C1D6" />
                                <path d="M174.565 109.357H173.428L172.816 108.395L173.428 107.346H174.565L175.089 108.395L174.565 109.357Z" fill="#B7C1D6" />
                                <path d="M177.013 126.843H170.893L167.92 121.509L170.893 116.264H177.013L180.073 121.509L177.013 126.843Z" fill="#B7C1D6" />
                                <path d="M177.013 139.956H170.893L167.92 134.711L170.893 129.465H177.013L180.073 134.711L177.013 139.956Z" fill="#B7C1D6" />
                                <path d="M177.013 153.159H170.893L167.92 147.913L170.893 142.58H177.013L180.073 147.913L177.013 153.159Z" fill="#B7C1D6" />
                                <path d="M177.013 166.36H170.893L167.92 161.027L170.893 155.781H177.013L180.073 161.027L177.013 166.36Z" fill="#D63129" />
                                <path d="M177.013 179.476H170.893L167.92 174.23L170.893 168.984H177.013L180.073 174.23L177.013 179.476Z" fill="#B7C1D6" />
                                <path d="M176.138 191.191H171.767L169.581 187.431L171.767 183.672H176.138L178.324 187.431L176.138 191.191Z" fill="#B7C1D6" />
                                <path d="M1191.36 618.803H1187.69L1185.85 615.655L1187.69 612.508H1191.36L1193.19 615.655L1191.36 618.803Z" fill="#B7C1D6" />
                                <path d="M1192.58 607.7H1186.46L1183.49 602.455L1186.46 597.209H1192.58L1195.64 602.455L1192.58 607.7Z" fill="#B7C1D6" />
                                <path d="M1192.58 594.587H1186.46L1183.49 589.254L1186.46 584.008H1192.58L1195.64 589.254L1192.58 594.587Z" fill="#B7C1D6" />
                                <path d="M1192.58 581.384H1186.46L1183.49 576.138L1186.46 570.805H1192.58L1195.64 576.138L1192.58 581.384Z" fill="#B7C1D6" />
                                <path d="M1192.58 568.183H1186.46L1183.49 562.937L1186.46 557.691H1192.58L1195.64 562.937L1192.58 568.183Z" fill="#B7C1D6" />
                                <path d="M1192.58 555.067H1186.46L1183.49 549.734L1186.46 544.488H1192.58L1195.64 549.734L1192.58 555.067Z" fill="#B7C1D6" />
                                <path d="M1192.15 541.166H1186.9L1184.28 536.62L1186.9 531.986H1192.15L1194.77 536.62L1192.15 541.166Z" fill="#B7C1D6" />
                                <path d="M1192.5 488.971H1186.55L1183.58 483.9L1186.55 478.742H1192.5L1195.47 483.9L1192.5 488.971Z" fill="#B7C1D6" />
                                <path d="M1190.13 221.353H1189L1188.39 220.391L1189 219.342H1190.13L1190.66 220.391L1190.13 221.353Z" fill="#B7C1D6" />
                                <path d="M1192.32 212.085H1186.73L1183.84 207.189L1186.73 202.293H1192.32L1195.21 207.189L1192.32 212.085Z" fill="#B7C1D6" />
                                <path d="M1192.58 199.234H1186.46L1183.49 193.988L1186.46 188.742H1192.58L1195.64 193.988L1192.58 199.234Z" fill="#B7C1D6" />
                                <path d="M1192.5 185.944H1186.55L1183.67 180.786L1186.55 175.715H1192.5L1195.47 180.786L1192.5 185.944Z" fill="#B7C1D6" />
                                <path d="M1191.01 170.208H1188.04L1186.64 167.672L1188.04 165.137H1191.01L1192.5 167.672L1191.01 170.208Z" fill="#B7C1D6" />
                                <path d="M1192.58 159.716H1186.46L1183.49 154.47L1186.46 149.225H1192.58L1195.64 154.47L1192.58 159.716Z" fill="#B7C1D6" />
                                <path d="M1192.58 146.602H1186.46L1183.49 141.269L1186.46 136.023H1192.58L1195.64 141.269L1192.58 146.602Z" fill="#B7C1D6" />
                                <path d="M1192.58 133.399H1186.46L1183.49 128.153L1186.46 122.82H1192.58L1195.64 128.153L1192.58 133.399Z" fill="#B7C1D6" />
                                <path d="M1192.5 120.023H1186.64L1183.67 114.952L1186.64 109.881H1192.5L1195.38 114.952L1192.5 120.023Z" fill="#B7C1D6" />
                                <path d="M165.559 120.198H159.527L156.467 114.953L159.527 109.707H165.559L168.619 114.953L165.559 120.198Z" fill="#B7C1D6" />
                                <path d="M165.559 133.399H159.527L156.467 128.153L159.527 122.82H165.559L168.619 128.153L165.559 133.399Z" fill="#B7C1D6" />
                                <path d="M165.559 146.602H159.527L156.467 141.269L159.527 136.023H165.559L168.619 141.269L165.559 146.602Z" fill="#B7C1D6" />
                                <path d="M165.559 159.716H159.527L156.467 154.47L159.527 149.225H165.559L168.619 154.47L165.559 159.716Z" fill="#B7C1D6" />
                                <path d="M165.559 172.917H159.527L156.467 167.671L159.527 162.338H165.559L168.619 167.671L165.559 172.917Z" fill="#B7C1D6" />
                                <path d="M163.374 182.185H161.8L161.013 180.786L161.8 179.475H163.374L164.161 180.786L163.374 182.185Z" fill="#B7C1D6" />
                                <path d="M1203.25 599.918H1198.62L1196.34 595.897L1198.62 591.875H1203.25L1205.61 595.897L1203.25 599.918Z" fill="#B7C1D6" />
                                <path d="M1203.95 587.941H1197.92L1194.86 582.695L1197.92 577.449H1203.95L1207.01 582.695L1203.95 587.941Z" fill="#D63129" />
                                <path d="M1203.95 574.652H1198L1194.94 569.494L1198 564.336H1203.95L1206.92 569.494L1203.95 574.652Z" fill="#B7C1D6" />
                                <path d="M1202.99 559.79H1198.97L1196.95 556.38L1198.97 552.883H1202.99L1205 556.38L1202.99 559.79Z" fill="#B7C1D6" />
                                <path d="M1202.11 492.469H1199.75L1198.62 490.458L1199.75 488.447H1202.11L1203.25 490.458L1202.11 492.469Z" fill="#B7C1D6" />
                                <path d="M1203.86 205.617H1198.09L1195.21 200.633L1198.09 195.562H1203.86L1206.75 200.633L1203.86 205.617Z" fill="#B7C1D6" />
                                <path d="M1203.95 192.59H1198L1195.03 187.432L1198 182.273H1203.95L1206.92 187.432L1203.95 192.59Z" fill="#B7C1D6" />
                                <path d="M1203.95 179.474H1197.92L1194.94 174.229L1197.92 169.07H1203.95L1206.92 174.229L1203.95 179.474Z" fill="#B7C1D6" />
                                <path d="M1203.95 166.36H1197.92L1194.86 161.027L1197.92 155.781H1203.95L1207.01 161.027L1203.95 166.36Z" fill="#B7C1D6" />
                                <path d="M1203.95 153.159H1197.92L1194.86 147.913L1197.92 142.58H1203.95L1207.01 147.913L1203.95 153.159Z" fill="#B7C1D6" />
                                <path d="M1203.95 139.956H1197.92L1194.86 134.711L1197.92 129.465H1203.95L1207.01 134.711L1203.95 139.956Z" fill="#B7C1D6" />
                                <path d="M1203.95 126.843H1197.92L1194.86 121.509L1197.92 116.264H1203.95L1207.01 121.509L1203.95 126.843Z" fill="#B7C1D6" />
                                <path d="M1202.29 110.669H1199.58L1198.27 108.396L1199.58 106.035H1202.29L1203.6 108.396L1202.29 110.669Z" fill="#B7C1D6" />
                                <path d="M152.707 111.106H149.56L147.986 108.395L149.56 105.598H152.707L154.369 108.395L152.707 111.106Z" fill="#B7C1D6" />
                                <path d="M154.194 126.843H148.074L145.014 121.509L148.074 116.264H154.194L157.254 121.509L154.194 126.843Z" fill="#B7C1D6" />
                                <path d="M154.194 139.956H148.074L145.014 134.711L148.074 129.465H154.194L157.254 134.711L154.194 139.956Z" fill="#B7C1D6" />
                                <path d="M154.194 153.159H148.074L145.014 147.913L148.074 142.58H154.194L157.254 147.913L154.194 153.159Z" fill="#B7C1D6" />
                                <path d="M154.194 166.36H148.074L145.014 161.027L148.074 155.781H154.194L157.254 161.027L154.194 166.36Z" fill="#B7C1D6" />
                                <path d="M154.194 179.476H148.074L145.014 174.23L148.074 168.984H154.194L157.254 174.23L154.194 179.476Z" fill="#B7C1D6" />
                                <path d="M1213.48 551.745H1211.21L1210.16 549.734L1211.21 547.811H1213.48L1214.61 549.734L1213.48 551.745Z" fill="#B7C1D6" />
                                <path d="M1213.13 537.931H1211.55L1210.77 536.62L1211.55 535.221H1213.13L1213.92 536.62L1213.13 537.931Z" fill="#B7C1D6" />
                                <path d="M1215.4 172.917H1209.37L1206.31 167.671L1209.37 162.426H1215.4L1218.46 167.671L1215.4 172.917Z" fill="#B7C1D6" />
                                <path d="M1215.4 159.716H1209.28L1206.31 154.47L1209.28 149.225H1215.4L1218.46 154.47L1215.4 159.716Z" fill="#B7C1D6" />
                                <path d="M1215.4 146.602H1209.28L1206.31 141.269L1209.28 136.023H1215.4L1218.46 141.269L1215.4 146.602Z" fill="#B7C1D6" />
                                <path d="M1215.4 133.399H1209.28L1206.31 128.153L1209.28 122.82H1215.4L1218.46 128.153L1215.4 133.399Z" fill="#B7C1D6" />
                                <path d="M1215.4 120.198H1209.37L1206.31 114.953L1209.37 109.707H1215.4L1218.46 114.953L1215.4 120.198Z" fill="#B7C1D6" />
                                <path d="M140.467 102.975H139.069L138.282 101.751L139.069 100.527H140.467L141.167 101.751L140.467 102.975Z" fill="#B7C1D6" />
                                <path d="M142.741 120.198H136.708L133.648 114.953L136.708 109.707H142.741L145.801 114.953L142.741 120.198Z" fill="#B7C1D6" />
                                <path d="M142.741 133.399H136.708L133.648 128.153L136.708 122.82H142.741L145.801 128.153L142.741 133.399Z" fill="#B7C1D6" />
                                <path d="M142.741 146.602H136.708L133.648 141.269L136.708 136.023H142.741L145.801 141.269L142.741 146.602Z" fill="#B7C1D6" />
                                <path d="M142.741 159.716H136.708L133.648 154.47L136.708 149.225H142.741L145.801 154.47L142.741 159.716Z" fill="#B7C1D6" />
                                <path d="M142.741 172.917H136.708L133.648 167.671L136.708 162.338H142.741L145.801 167.671L142.741 172.917Z" fill="#B7C1D6" />
                                <path d="M142.741 186.12H136.708L133.648 180.787L136.708 175.541H142.741L145.801 180.787L142.741 186.12Z" fill="#B7C1D6" />
                                <path d="M142.741 199.234H136.708L133.648 193.988L136.708 188.742H142.741L145.801 193.988L142.741 199.234Z" fill="#B7C1D6" />
                                <path d="M1224.67 175.802H1222.92L1222.05 174.228L1222.92 172.742H1224.67L1225.54 174.228L1224.67 175.802Z" fill="#B7C1D6" />
                                <path d="M1226.85 166.36H1220.73L1217.67 161.027L1220.73 155.781H1226.85L1229.83 161.027L1226.85 166.36Z" fill="#B7C1D6" />
                                <path d="M1226.85 153.159H1220.73L1217.67 147.913L1220.73 142.58H1226.85L1229.83 147.913L1226.85 153.159Z" fill="#B7C1D6" />
                                <path d="M1226.85 139.956H1220.73L1217.67 134.711L1220.73 129.465H1226.85L1229.83 134.711L1226.85 139.956Z" fill="#B7C1D6" />
                                <path d="M1226.85 126.843H1220.73L1217.67 121.509L1220.73 116.264H1226.85L1229.83 121.509L1226.85 126.843Z" fill="#B7C1D6" />
                                <path d="M130.938 112.855H125.692L123.157 108.396L125.692 103.85H130.938L133.473 108.396L130.938 112.855Z" fill="#B7C1D6" />
                                <path d="M131.375 126.843H125.255L122.195 121.509L125.255 116.264H131.375L134.435 121.509L131.375 126.843Z" fill="#B7C1D6" />
                                <path d="M131.375 139.956H125.255L122.195 134.711L125.255 129.465H131.375L134.435 134.711L131.375 139.956Z" fill="#B7C1D6" />
                                <path d="M131.375 153.159H125.255L122.195 147.913L125.255 142.58H131.375L134.435 147.913L131.375 153.159Z" fill="#B7C1D6" />
                                <path d="M131.375 166.36H125.255L122.195 161.027L125.255 155.781H131.375L134.435 161.027L131.375 166.36Z" fill="#B7C1D6" />
                                <path d="M131.375 179.476H125.255L122.195 174.23L125.255 168.984H131.375L134.435 174.23L131.375 179.476Z" fill="#B7C1D6" />
                                <path d="M131.287 192.59H125.342L122.282 187.431L125.342 182.186H131.287L134.347 187.431L131.287 192.59Z" fill="#B7C1D6" />
                                <path d="M131.113 205.441H125.517L122.719 200.632L125.517 195.736H131.113L133.91 200.632L131.113 205.441Z" fill="#B7C1D6" />
                                <path d="M1235.69 669.338H1234.64L1234.11 668.376L1234.64 667.414H1235.69L1236.3 668.376L1235.69 669.338Z" fill="#B7C1D6" />
                                <path d="M1238.22 159.716H1232.1L1229.13 154.47L1232.1 149.225H1238.22L1241.28 154.47L1238.22 159.716Z" fill="#B7C1D6" />
                                <path d="M1238.22 146.602H1232.1L1229.13 141.269L1232.1 136.023H1238.22L1241.28 141.269L1238.22 146.602Z" fill="#B7C1D6" />
                                <path d="M1238.22 133.399H1232.1L1229.13 128.153L1232.1 122.82H1238.22L1241.28 128.153L1238.22 133.399Z" fill="#D63129" />
                                <path d="M1235.86 116.177H1234.46L1233.76 114.953L1234.46 113.729H1235.86L1236.56 114.953L1235.86 116.177Z" fill="#B7C1D6" />
                                <path d="M119.922 120.198H113.889L110.829 114.953L113.889 109.707H119.922L122.982 114.953L119.922 120.198Z" fill="#B7C1D6" />
                                <path d="M119.572 132.789H114.239L111.529 128.155L114.239 123.521H119.572L122.282 128.155L119.572 132.789Z" fill="#B7C1D6" />
                                <path d="M119.922 146.602H113.889L110.829 141.269L113.889 136.023H119.922L122.982 141.269L119.922 146.602Z" fill="#B7C1D6" />
                                <path d="M119.922 159.716H113.889L110.829 154.47L113.889 149.225H119.922L122.982 154.47L119.922 159.716Z" fill="#B7C1D6" />
                                <path d="M119.922 172.917H113.889L110.829 167.671L113.889 162.338H119.922L122.982 167.671L119.922 172.917Z" fill="#B7C1D6" />
                                <path d="M119.922 186.12H113.889L110.829 180.787L113.889 175.541H119.922L122.982 180.787L119.922 186.12Z" fill="#B7C1D6" />
                                <path d="M119.922 199.234H113.889L110.829 193.988L113.889 188.742H119.922L122.982 193.988L119.922 199.234Z" fill="#B7C1D6" />
                                <path d="M1249.5 666.802H1243.64L1240.76 661.731L1243.64 656.66H1249.5L1252.47 661.731L1249.5 666.802Z" fill="#B7C1D6" />
                                <path d="M1247.58 650.277H1245.56L1244.6 648.616L1245.56 646.867H1247.58L1248.62 648.616L1247.58 650.277Z" fill="#B7C1D6" />
                                <path d="M1247.49 162.514H1245.74L1244.87 161.027L1245.74 159.541H1247.49L1248.27 161.027L1247.49 162.514Z" fill="#B7C1D6" />
                                <path d="M1248.45 151.06H1244.78L1242.85 147.913L1244.78 144.678H1248.45L1250.29 147.913L1248.45 151.06Z" fill="#B7C1D6" />
                                <path d="M1249.67 139.956H1243.55L1240.49 134.711L1243.55 129.465H1249.67L1252.65 134.711L1249.67 139.956Z" fill="#B7C1D6" />
                                <path d="M1249.06 125.795H1244.08L1241.63 121.511L1244.08 117.227H1249.06L1251.51 121.511L1249.06 125.795Z" fill="#B7C1D6" />
                                <path d="M106.021 109.27H104.971L104.447 108.395L104.971 107.434H106.021L106.545 108.395L106.021 109.27Z" fill="#B7C1D6" />
                                <path d="M106.895 123.958H104.097L102.698 121.511L104.097 119.062H106.895L108.381 121.511L106.895 123.958Z" fill="#B7C1D6" />
                                <path d="M108.469 139.869H102.523L99.5508 134.711L102.523 129.553H108.469L111.529 134.711L108.469 139.869Z" fill="#B7C1D6" />
                                <path d="M107.857 152.023H103.135L100.687 147.913L103.135 143.717H107.857L110.305 147.913L107.857 152.023Z" fill="#B7C1D6" />
                                <path d="M108.556 166.36H102.436L99.376 161.027L102.436 155.781H108.556L111.616 161.027L108.556 166.36Z" fill="#B7C1D6" />
                                <path d="M108.556 179.476H102.436L99.376 174.23L102.436 168.984H108.556L111.616 174.23L108.556 179.476Z" fill="#B7C1D6" />
                                <path d="M108.556 192.677H102.436L99.376 187.431L102.436 182.186H108.556L111.616 187.431L108.556 192.677Z" fill="#B7C1D6" />
                                <path d="M108.556 205.878H102.436L99.4634 200.632L102.436 195.299H108.556L111.529 200.632L108.556 205.878Z" fill="#B7C1D6" />
                                <path d="M1259.82 658.32H1256.23L1254.39 655.173L1256.23 652.025H1259.82L1261.56 655.173L1259.82 658.32Z" fill="#B7C1D6" />
                                <path d="M1260.78 646.869H1255.18L1252.38 641.973L1255.18 637.164H1260.78L1263.57 641.973L1260.78 646.869Z" fill="#B7C1D6" />
                                <path d="M1260.08 144.94H1255.88L1253.78 141.268L1255.88 137.684H1260.08L1262.26 141.268L1260.08 144.94Z" fill="#B7C1D6" />
                                <path d="M1259.99 131.564H1256.06L1254.05 128.154L1256.06 124.744H1259.99L1261.91 128.154L1259.99 131.564Z" fill="#B7C1D6" />
                                <path d="M95.092 129.816H93.0811L92.1194 128.155L93.0811 126.406H95.092L96.0537 128.155L95.092 129.816Z" fill="#B7C1D6" />
                                <path d="M97.1028 146.602H91.0703L88.0103 141.269L91.0703 136.023H97.1028L100.163 141.269L97.1028 146.602Z" fill="#B7C1D6" />
                                <path d="M94.5674 155.344H93.6057L93.0812 154.47L93.6057 153.596H94.5674L95.092 154.47L94.5674 155.344Z" fill="#B7C1D6" />
                                <path d="M97.1028 172.917H91.0703L88.0103 167.671L91.0703 162.338H97.1028L100.163 167.671L97.1028 172.917Z" fill="#B7C1D6" />
                                <path d="M97.1028 186.12H91.0703L88.0103 180.787L91.0703 175.541H97.1028L100.163 180.787L97.1028 186.12Z" fill="#B7C1D6" />
                                <path d="M95.4417 196.348H92.7314L91.3326 193.988L92.7314 191.627H95.4417L96.8406 193.988L95.4417 196.348Z" fill="#B7C1D6" />
                                <path d="M95.7914 210.075H92.3817L90.7206 207.19L92.3817 204.305H95.7914L97.4526 207.19L95.7914 210.075Z" fill="#B7C1D6" />
                                <path d="M96.4909 224.588H91.6823L89.2343 220.392L91.6823 216.195H96.4909L98.9389 220.392L96.4909 224.588Z" fill="#B7C1D6" />
                                <path d="M1270.04 649.665H1268.82L1268.21 648.616L1268.82 647.566H1270.04L1270.66 648.616L1270.04 649.665Z" fill="#B7C1D6" />
                                <path d="M1271.27 638.649H1267.51L1265.67 635.415L1267.51 632.18H1271.27L1273.19 635.415L1271.27 638.649Z" fill="#B7C1D6" />
                                <path d="M1270.39 623.962H1268.38L1267.42 622.214L1268.38 620.553H1270.39L1271.36 622.214L1270.39 623.962Z" fill="#B7C1D6" />
                                <path d="M1271.09 150.797H1267.77L1266.02 147.912L1267.77 144.939H1271.09L1272.75 147.912L1271.09 150.797Z" fill="#B7C1D6" />
                                <path d="M1271.18 137.77H1267.68L1265.85 134.71L1267.68 131.65H1271.18L1272.93 134.71L1271.18 137.77Z" fill="#B7C1D6" />
                                <path d="M84.6006 138.033H80.7537L78.8303 134.711L80.7537 131.389H84.6006L86.524 134.711L84.6006 138.033Z" fill="#B7C1D6" />
                                <path d="M85.0377 165.224H80.3166L77.8686 161.027L80.3166 156.918H85.0377L87.4857 161.027L85.0377 165.224Z" fill="#B7C1D6" />
                                <path d="M85.7371 179.476H79.6171L76.5571 174.23L79.6171 168.984H85.7371L88.7971 174.23L85.7371 179.476Z" fill="#B7C1D6" />
                                <path d="M85.0377 191.541H80.3166L77.8686 187.431L80.3166 183.322H85.0377L87.4857 187.431L85.0377 191.541Z" fill="#B7C1D6" />
                                <path d="M83.3766 214.972H81.9777L81.2783 213.748L81.9777 212.611H83.3766L84.076 213.748L83.3766 214.972Z" fill="#B7C1D6" />
                                <path d="M84.5131 230.096H80.8411L79.0051 226.948L80.8411 223.801H84.5131L86.3491 226.948L84.5131 230.096Z" fill="#B7C1D6" />
                                <path d="M1283.33 633.229H1278.26L1275.73 628.857L1278.26 624.398H1283.33L1285.96 628.857L1283.33 633.229Z" fill="#B7C1D6" />
                                <path d="M1283.86 620.814H1277.83L1274.85 615.656L1277.83 610.41H1283.86L1286.83 615.656L1283.86 620.814Z" fill="#B7C1D6" />
                                <path d="M1281.41 603.505H1280.19L1279.66 602.455L1280.19 601.406H1281.41L1282.02 602.455L1281.41 603.505Z" fill="#B7C1D6" />
                                <path d="M71.9234 168.721H70.612L70 167.672L70.612 166.535H71.9234L72.5354 167.672L71.9234 168.721Z" fill="#EBECF7" />
                                <path d="M71.9234 221.44H70.612L70 220.39L70.612 219.254H71.9234L72.5354 220.39L71.9234 221.44Z" fill="#EBECF7" />
                                <path d="M71.836 234.554H70.6994L70.0874 233.505L70.6994 232.543H71.836L72.448 233.505L71.836 234.554Z" fill="#EBECF7" />
                                <path d="M1293.13 610.585H1291.38L1290.5 609.012L1291.38 607.525H1293.13L1294 609.012L1293.13 610.585Z" fill="#EBECF7" />
                                <g class="india" filter="url(#filter1_dddddddd_237_212)">
                                    <path class="india" d="M881.337 288.406C881.337 284.884 884.192 282.029 887.714 282.029H1026.4C1029.93 282.029 1032.78 284.884 1032.78 288.406V334.636C1032.78 338.158 1029.93 341.012 1026.4 341.012H950.392C948.551 341.012 946.799 341.809 945.588 343.196L939.13 350.596C938.495 351.324 937.363 351.324 936.728 350.596L930.27 343.196C929.059 341.809 927.307 341.012 925.466 341.012H887.714C884.192 341.012 881.337 338.158 881.337 334.636V288.406Z" fill="white" />
                                </g>
                                <path class="india" d="M946.579 303.205V318.783H943.454V303.205H946.579ZM956.518 306.241C957.991 306.241 959.181 306.709 960.088 307.647C960.996 308.569 961.45 309.863 961.45 311.53V318.783H958.325V311.954C958.325 310.972 958.08 310.221 957.589 309.7C957.098 309.164 956.428 308.896 955.58 308.896C954.717 308.896 954.033 309.164 953.527 309.7C953.036 310.221 952.79 310.972 952.79 311.954V318.783H949.666V306.419H952.79V307.959C953.207 307.423 953.735 307.007 954.375 306.709C955.03 306.397 955.744 306.241 956.518 306.241ZM963.618 312.556C963.618 311.307 963.863 310.198 964.354 309.231C964.86 308.264 965.544 307.52 966.407 306.999C967.27 306.479 968.23 306.218 969.286 306.218C970.09 306.218 970.856 306.397 971.585 306.754C972.314 307.096 972.894 307.557 973.326 308.138V302.268H976.495V318.783H973.326V316.953C972.939 317.563 972.396 318.054 971.697 318.426C970.997 318.798 970.187 318.984 969.264 318.984C968.223 318.984 967.27 318.716 966.407 318.181C965.544 317.645 964.86 316.894 964.354 315.927C963.863 314.945 963.618 313.821 963.618 312.556ZM973.348 312.601C973.348 311.842 973.199 311.195 972.902 310.659C972.604 310.109 972.203 309.692 971.697 309.41C971.191 309.112 970.648 308.963 970.067 308.963C969.487 308.963 968.952 309.105 968.461 309.387C967.97 309.67 967.568 310.087 967.255 310.637C966.958 311.173 966.809 311.813 966.809 312.556C966.809 313.3 966.958 313.955 967.255 314.52C967.568 315.071 967.97 315.495 968.461 315.793C968.966 316.09 969.502 316.239 970.067 316.239C970.648 316.239 971.191 316.098 971.697 315.815C972.203 315.517 972.604 315.101 972.902 314.565C973.199 314.015 973.348 313.36 973.348 312.601ZM981.131 304.946C980.581 304.946 980.119 304.775 979.748 304.433C979.39 304.076 979.212 303.637 979.212 303.116C979.212 302.595 979.39 302.164 979.748 301.822C980.119 301.464 980.581 301.286 981.131 301.286C981.682 301.286 982.136 301.464 982.493 301.822C982.865 302.164 983.051 302.595 983.051 303.116C983.051 303.637 982.865 304.076 982.493 304.433C982.136 304.775 981.682 304.946 981.131 304.946ZM982.671 306.419V318.783H979.547V306.419H982.671ZM984.955 312.556C984.955 311.307 985.2 310.198 985.691 309.231C986.197 308.264 986.874 307.52 987.722 306.999C988.585 306.479 989.545 306.218 990.601 306.218C991.524 306.218 992.327 306.404 993.012 306.776C993.711 307.148 994.269 307.617 994.685 308.182V306.419H997.832V318.783H994.685V316.975C994.284 317.556 993.726 318.039 993.012 318.426C992.312 318.798 991.501 318.984 990.579 318.984C989.537 318.984 988.585 318.716 987.722 318.181C986.874 317.645 986.197 316.894 985.691 315.927C985.2 314.945 984.955 313.821 984.955 312.556ZM994.685 312.601C994.685 311.842 994.537 311.195 994.239 310.659C993.941 310.109 993.54 309.692 993.034 309.41C992.528 309.112 991.985 308.963 991.405 308.963C990.824 308.963 990.289 309.105 989.798 309.387C989.307 309.67 988.905 310.087 988.593 310.637C988.295 311.173 988.146 311.813 988.146 312.556C988.146 313.3 988.295 313.955 988.593 314.52C988.905 315.071 989.307 315.495 989.798 315.793C990.304 316.09 990.839 316.239 991.405 316.239C991.985 316.239 992.528 316.098 993.034 315.815C993.54 315.517 993.941 315.101 994.239 314.565C994.537 314.015 994.685 313.36 994.685 312.601Z" fill="black" />
                                <path class="india" d="M911.626 323.72H933.944V301.403H911.626V323.72Z" fill="url(#pattern0)" />
                            </g>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_237_212" transform="scale(0.015625)" />
                                </pattern>
                                <image id="image0_237_212" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAOpklEQVR4nO2aXYxdV3XHf2vvc869dz49M/4ituN82s4HdUihoBI+ipL2IZUgqKJSK0ClvMELah94In1CQX0GiooUIiFUVSVBolRKpIbSpihpHlBDvnCwsbHHjsce2zN37p1779l7rT7sc+7cGY8dS8SZSvGS9j0f+9y91/rvtddaZ60jZsa7mdxWM7DVdAOArWZgq+kGAFvNwFbTDQC2moGtphsAbDUDW03vegCyjTeefPRTjM3somi08M5hCOIEJw5BEAcistZI14ggAohDxBBcuobUNzx1IIAZiIDBsBOG12ICDswEM8PM5tR0d4x6kyq3RdUZM/Wm2lAlA2ur6TJmy8BJEd4QZN57wYkgGui3z/NHX3ni6gBsCa0hhcF2g3uA+yzabWpxn6nuQ+NNpnGHachFIz4GVCOmCqaogRgoadFM/KL4/KRJ9lLm3X94538qzh/fOPUWACDVigsmssuMu03tvWb2PjTeg8W7PTruiWREnAWcBUTLqg0glpiWaAxojESNhGioQsQRzRFdMWdZc05s/D6Nzc8NolosB/8NfOSqAIjznxPnf4K4xaGK/k6CAuIw2GHG3RiHLdhhMz0sFu/wxOnMIjmBXAKFlBQSKSTgiYgFiAFlgGqJxpIYSkJZEmMgxkiIAR8iaqCWtg0+w+dNMjeJ5OOc7w7k3IWlBzZyeRkAg9WVJ7KxbW3xxbNI9pyI+6WIHEPccaBERve8IBgiDhMBYc7E7zZsDyb7UbsZtf0QDjmL9zjRMU+kIJK7QEMChSTBcwl4CzgCYhGpVVsVrYS0GLEyYBohpqPFiMZYnStqiqkhQZDYx8mAFh3GQ+BUZ/WyZboMgPbZE0zmOtn0Oz8Zw9gn1eeYy1RddlKcXxCTtohbciK9KNIEGkIsRNgt6HsE5hyKJ+LFyIjkEmm4QOFiWl0XyUgCi0WohGWYm7B0KgJmSQlFkoF1Lj3nPQ6IDpxZEtoJYoKhGKACqKIhECPoOmt7RQ1oM7Z6ktnxLsGPo66BusKZy/eby/fj/JARkWRhHYZ3Si5GLkomSu6UTIzMRTxGJoozxVlElErYWmAZcQYClbcBwAkOwcxhYmg1p9bd1SgqaRRXg1UdRSSBVnmotwTAXEaMEXqXyH0H5zLE5zif4XyGuAxxDlc3AecEr+DE8GII4CwxJ9WWcRUDBuBcZQfXGJIRk7GeIUnudzjW+lbhlYCoB6i0p56/fmaz8S83ggDikyHR5GqclhATks77JDAOyQQvPsUJlUaYk2QTzGHiwFfxgPi0Im4tfhiddTPmBFBsTXjWt40PX9ZXKwLCms68BQBUkzmRZNiQYfBiUgUlSIW2oFQqSh3kuEr10jZx4qqgaU0Id5n4m0m0XivENgRg4nBiONFqb1fg6sgOQK6sWVcDoOZqvdoJgsPVUeGwrTEkIlV/daxVF4Zn9b2NXMnotVSGDk0eIfSg34F+F+mvImGAhAgxQohIjBCSVxAzBI8VE9CaAvJkszbHeBMARp4SGdnHQzTXBHCA27gnNwi1rrmNz40sjwYk9LFBB0IvuVqXY65AsjFkehdSTEBzFpq7weVITMISDeldgtVlGHRgZQFZOon0LiDtN6ELxEmg+dYAuEqV1gFi1TtAfT2qmps1oTJ66zVoOIgplF2k7EDZSw8W49CaReYOwvQ+mDsAE7uhmITmDDR3QJ7VhgEiUFbHYBBT7GAxQuhD9zz0L0DvHLL4Ehx5ATv3+jVoQOcsLGdIYzvSmILKyCUNWAOmFnToauptUhk56iApBigHELpILBHnkcY4ctN+2H8rbLsDpvdAsQ/KWaw5t16L6qYg/RIZ9NI4IUAIUAYkVttA65gCyJqw7TaY/H1478Nwy1GY/LdrAOB9X0CaZ6D/a1g+leJvn0OjheVNnM+RvEB8jlgtuCEWECsRU4SY3GXWguYkMjaDzLwPpvfibrobbr2XMycy/unHC5w8b4yNNfmzT9/OfXdsNI+klx3VtN81svb6WBvny32iYBB6oAOIbWg00rbafvAaALj9j+HQISi6yPlXYfkktE/ByjxSttPLiPbBIuI8ZAVkOTS3wfgsTOyAyb0wOQfjO2Bqb7o3NjOc7NG/f4WfPPULDtw+yYE7JjlzdIU/f/hfefDBQ3zzm396GUu/E9XgaID+0jUA0J6HlWnk5jtgxyNIVgAK5QqUXaBEYh8hYlmGZA3wBdKaQloTSL65v/bV8bOf/Rfm5y/xg+89woEDa+p+4sQSDzzwXSYmGnzjGw+9vSBchTbxAlV01m9DfxmcA59B1kDyBmQTkBeQFZVlrxIhFqC/Cj1NYaA48Cn4cc4hWcbXvvbvXLjQ4dlnv8jCQocXXjhFt1tSFJ7Dh3fz3HNf5KGHvsfnP3+Yu+/euUUAjFIV2IgIaAlBk/qHSjjnkEpInEtNUqhT+zozI8syXn75LM88c5Qf//gvOXJkkeefP8W5c106nQF79kyyuhp48MHb+OhHb+GHP3zt/wkAbwPVL3jf+c7/8PDDd9JsFrz44lFefnmB+fk2AMvLfSYnG5w71+HgwR2cOdO+3mwN6bonRYvC0+8H3nyzzSc+cRsnTlzk7NkO8/PLPP30r/nlLxcwg06nrN9y8f5qwevbS9cVADPDuYz5+SW899x66wz9fqDXC/T7kRCMyckC54SpqQaNRsaxYxfZvXv8erK1jt6RnKBZytcNBpGyVFqtjOnpJp/61EFarZxduybYvXsCVeP48Ut8+csffCfYAq4zACKCWWTPnmkuXuxy5Mh5Dh7cyZ13zhGjsboa2LVrnD17pvjwh/fx9a//Jzt3jnPo0PbrydY6uu4aMBiUNJtN7rprB9/+9os89dRf0OkMmJ1tATA11eDee3fy9NNv8MQTv+CZZz6/6ThmhsNRuALvPZZBCAHNFI1Kr1ylN+hThgFlLAka0iv8SFZ3s8+B3oEtkHIIjz76Cd7//n/gq199msce+5Nh79JSn8ce+y++9a0XePzxT7N//7Z1/64zT1lWsRrgUvsiy6ttQgj0yx6DMKApLcbyMSabU7Rci2bRxDkhEOnYCmrx2gB4uz+aEhFCCMzNjfHTn/4VjzzyA372s5Pcd98uWkXOyeNdxosJXv353zKxd42H31w8ykLnLKeX5znTPs2FzgXml07x20snOLt0hvZqG9VIr+wxKEtafoKpbJpxN870+Cz3bL+HO7Yf4NB7DvIHN3+Qg9vvon165XL+Ngr8o+//yPbetpexmTEAvPc45/DOD8+dc2v3va8SIW6YFhueV8mT+r91XPzsU5c48qtz0Ohy4P4x7v9YgzcuvcHzr/8vv1p8jROXjnP84jFWBiusll1W+13KqIiBx5OTgUpVF1DMjF5pxBIYUL0iAw0Yn864f9/9fGDmQ+wtb+Yrf/03clUAvvR3X7LPfOwzfPCuD9HMGnTjKqtll27oYmI458AxFDwJ58h8TuELGlkDaWyeh1rsnOdiWOCCO87x9lFeXXiNV+Zf57UTx1honyNoJPcZ48UEk8UUuctT+kWNGJUQS0KIhJCOMQZCCERVYoxo1KpUVgWnmcd5Ryd26CwZUytNlr6/enUA5CGxPXfu5CP3fJwP7PsAB7cf4ubZW9g7tYfxxgRFnqeN46nSRQxz0zFEuoMui71znOme4cLqIgsrZzmy+Bq/XTrBby4dY6F7lnZ/mYEOaGYtJopJJooJGr4xzDeoVQlMIxVGNFYABGKIxBDWAIgVACGimgAwtbQ4WUajUdAsWvheTv/sgOPfPX11ACYeya07HbA6RGrCrult3D5zJzPjM0y3ppgdm2OsaBFRECNaZLF3nje7b7LUu8RSP7Vu6BI1knlHK28x1ZxmrDFBwzUQVydY0/yb2h5LYGhMK5wETsKGENAraIBhYEKW5TSaOY2iiax69Jxy7B/n1wGwiRcQphpNsqmUzg4WWOpd4ucnX1xfyq41oEoE5xk0M0+rGKNVjDHTnGFntgsvSQ3rdJqIpBXePEt9BbINVzVoIz0jj5jVbNr6v26yLa/oBtOKCJkUTDYabGsJziVhNhq7tSJJygbXb5BmKa9vqqlGj4DYFaoAm8iaEsOp1YUkM8RspIwmQyCq7rUxbASQKzi3q8cBIytuBlpNnFLP1B8urDWqyuw6G2gbxHWXC3qFOYdpeUeVfqtyjq5K0lYfBUhdH7NqeK3/vDasXGHOKwMwqu4bzoeqN4o8VcGk+l1bDlk/ca366+oAVSZPhknoNFU1l0bQoGgwtDTCQInBiNGwYJXxI9XGSQUccYBP86/Lcl8zABuB2KBaidkRQW2kY7PPXmqha2Hd2q1agzQaFsGCJsFKJQ5iErgfif1A6AdCmTyBxspAWooFtDLKeLBccC0jTqT7EuUaNWCUWRjZPBUK9YaykXub1F2Gd6RekZScTHZBsQFYHBG0r2jfiL2I9qvrsuortdKAiEZd0KjnVWNH1VRV+5oAnDXTSWACYQ5vaAHWGsAUZD7HhWupDg/AuoYVguSVwfIgLkUXw0z0uoz0htqArCkEAaz6hocINkhCWc8IvUjsK9Y3Yj+ipWHRSlM7hvGKGccwPWPGaTU7o9hpM86LcFGqop/IyHogTczGTdklgXut5N7Q199jJXxEG8zmY/k1ANAzwpuKroAfF3xDcQ0h5g6fG1q5P+dB60BI0sZWJH3wYJLCUQVKsBJsoCmbPqhWNhgWbRG1NzBeNXhJhNcReUVETtXCpSp1ElIsaZyNGrn1ytcDegiLwKvi+GfxAsgkkYeI9vBbAgB8wVZ5OHb1Qc2ZjoXgCsHlRiwUyTW5Qu/WSt0miArEJLjVwscUxqJgkZNivIbIywIvI/IKYkfFySIMc6jXhxxthCcRnrwWAB7H8bgo2wj8YQzcpascdk7vFZFZcTrhxE3jJBMntia+XATOIXJKkNMCpxE370ROiecNRI6IEJMtqKd653J/V6LLQuF3G73rP5W9AcBWM7DVdAOArWZgq+kGAFvNwFbTDQC2moGtphsAbDUDW03/By7DcMlZtgkMAAAAAElFTkSuQmCC" />
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- map section end -->

    <!-- testimonial section -->
    <div class="section">
        <section class="py-5 bg-body testimonial-section w-100">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12 text-center position-relative z-0 text-center testimonialContainer">
                        <div class="title back-text  wow slideInLeft">TESTIMONIALS</div>
                        <h2 class="title text-gradient mb-5 d-inline-block testimonialSlide wow slideInRight">TESTIMONIALS</h2>
                    </div>
                    <div class="col-12 d-lg-block d-none">
                        <div class="card-slider testimonial-slider ">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="card card1 wow slideInRight" data-wow-delay="500ms">
                                    <img src="images/testimonial.png" class="card-img-top img-fluid" alt="Agnes Remi" />
                                    <div class="card-body pe-0">
                                        <h5 class="card-title">Agnes Remi</h5>
                                        <div class="card-designation">Lorem Ipsum Dolor Sit Amet</div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut nisi venenatis, sollicitudin orci nec, maximus arcu. Nullam vulputate sodales consequat.Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 d-lg-block d-none">
                        <div class="card-slider2 testimonial-slider ">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="card card2 wow slideInLeft" data-wow-delay="500ms">
                                    <img src="images/testimonial.png" class="card-img-top img-fluid" alt="Martin Costa" />
                                    <div class="card-body pe-0">
                                        <h5 class="card-title">Martin Costa</h5>
                                        <div class="card-designation">Lorem Ipsum Dolor Sit Amet</div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut nisi venenatis, sollicitudin orci nec, maximus arcu. Nullam vulputate sodales consequat.Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="card-slider testimonial-slider testimonial-slider-mob d-lg-none">
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                        ?>
                            <div class="card p-3">
                                <img src="images/testimonial.png" class="card-img-top img-fluid" alt="Agnes Remi" />
                                <div class="card-body pe-0">
                                    <h5 class="card-title">Agnes Remi</h5>
                                    <div class="card-designation">Lorem Ipsum Dolor Sit Amet</div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut nisi venenatis, sollicitudin orci nec, maximus arcu. Nullam vulputate sodales consequat.Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- testimonial section end -->

    <!-- event section -->
    <div class="section">
        <section class="pt-5 bg-body position-relative overflow-hidden z-0 event-section w-100">
            <!-- <div class="circle position-absolute"></div> -->
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="position-relative z-0 mb-5 eventContainer">
                            <div class="title back-text   eventSlide wow slideInRight" data-wow-delay="200ms">EVENTS & EXHIBITIONS</div>
                            <h2 class="title text-gradient   eventSlide wow slideInLeft">EVENTS & EXHIBITIONS</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end d-lg-block d-none">
                        <a href="event-and-exhibition.php" class="btn">VIEW MORE</a>
                    </div>
                </div>
                <div class="row gy-3">
                    <div class="col-12 wow fadeInUp">
                        <div class="event-carousel">
                            <figure class="mb-0 text-center">
                                <img src="images/event3.jpg" alt="Event 3" class="img-fluid" />
                            </figure>
                            <figure class="mb-0 text-center">
                                <img src="images/event3.jpg" alt="Event 3" class="img-fluid" />
                            </figure>
                            <figure class="mb-0 text-center">
                                <img src="images/event3.jpg" alt="Event 3" class="img-fluid" />
                            </figure>
                            <figure class="mb-0 text-center">
                                <img src="images/event3.jpg" alt="Event 3" class="img-fluid" />
                            </figure>
                            <figure class="mb-0 text-center">
                                <img src="images/event3.jpg" alt="Event 3" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="d-lg-none my-4 text-center">
                            <a href="event-and-exhibition.php" class="btn">VIEW MORE</a>
                        </div>
                    </div>                    
                </div>
                <div class="circle right position-absolute"></div>
            </div>
        </section>
    </div>
    <!-- event section end -->
</main>

<?php include('include/footer.php'); ?>