<?php include('include/head.php'); ?>

<main>
    <section class="py-5 bg-body position-relative z-0 overflow-hidden">
        <div class="container position-relative z-1">
            <div class="row row-gap-4">
                <div class="col-xxl-5 col-lg-6">
                    <a href="images/prod2.png" class="fancybox" data-fancybox="event" id="productImg">
                        <figure class="text-center product-image-bg p-3 rounded-2">
                            <img src="images/prod2.png" alt="Product" class="main-product img-fluid" />
                        </figure>
                    </a>
                    <div class="d-flex justify-content-between product-thumbnail">
                        <a role="button">
                            <img src="images/prod1.png" alt="" class="img-thumbnail" />
                        </a>
                        <a role="button">
                            <img src="images/prod2.png" alt="" class="img-thumbnail" />
                        </a>
                        <a role="button">
                            <img src="images/prod3.png" alt="" class="img-thumbnail" />
                        </a>
                        <a role="button">
                            <img src="images/prod1.png" alt="" class="img-thumbnail" />
                        </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-6">
                    <h3 class="text-gradient fw-bold fs-1 mb-3">Elastic Adhesive Bandage</h3>
                    <p><strong>Product Code:</strong> MED 123</p>
                    <p><strong>Specifications:</strong> Sterile, individually packed in peelable blister pack</p>
                    <p><strong>Size/Strength:</strong> 6 mm-26 mm Two Way | Three Way, Balloon Cap: 5 cc, 30 cc & 50 cc</p>
                    <div class="mt-5">
                        <a href="https://api.whatsapp.com/send?phone=+919871909402&text=Glass" target="_blank" class="btn text-uppercase mb-md-0 mb-4">Get a Quote</a>
                        <a role="button" class="btn text-uppercase" data-bs-toggle="modal" data-bs-target="#enquiry">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="fw-bold nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                        </li> -->
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <p>Good aesthetic appeal due to woven fast edges. High elasticity and high porosity. More porosity makes air and vapour permeable and allows breathing of skin. Very good quality concentrated adhesive, sticks properly and gives long-lasting adhesive action. Adhesive protected by special release film to enhance smooth unrolling, easy application, and long storage life. Easy to remove, because of thin-non-adhesive edges and leaves no residue after removing. An ideal bandage where support, immobilization & pressure is required.</p>
                        </div>
                        <!-- <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-products py-5 bg-body event-section">
        <div class="container custom-container overflow-visible">
            <div class="row">
                <div class="col-12 position-relative z-0 text-center">
                    <div class="title back-text text-uppercase">Related products</div>
                    <div class="title text-gradient text-uppercase mb-5">Related products</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 position-relative">
                    <a role="button" class="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="1em" viewBox="0 0 320 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                        </svg>
                    </a>
                    <div class="related-products-carousel">
                        <?php for($i=0; $i<8; $i++) { ?>
                        <div class="mx-3">
                            <a href="product-detail.php">
                                <figure class="product-image-bg overflow-hidden rounded-3 text-center py-lg-5 p-3">
                                    <img src="images/prod1.png" alt="Elastic Adhesive Bandage" class="img-fluid mx-auto" />
                                </figure>
                            </a>
                            <div class="text-center">
                                <h4 class="text-gradient fw-bold">HOSPITAL DRESSING</h4>
                                <h4 class="fw-medium">
                                    <a href="product-detail.php" class="text-dark">Elastic Adhesive Bandage</a>
                                </h4>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <a role="button" class="next">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="1em" viewBox="0 0 320 512">
                            <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- <div class="row align-items-center justify-content-center gy-5 mb-5   ">
                <div class="col-xl-4 col-lg-6   ">
                    <a href="#">
                        <figure class="mb-0 p-3 text-center product-image-bg rounded-3">
                            <img src="images/prod2.png" alt="Medical Disposables" class="img-fluid" />
                        </figure>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6text-lg-start text-center   ">
                    <h4 class="text-gradient fw-bold">HOSPITAL DRESSING</h4>
                    <h4 class="text-dark fw-medium">
                        <a href="#" class="text-dark">Elastic Adhesive Bandage</a>
                    </h4>
                    <p class="text-dark">Good aesthetic appeal due to woven fast edges. High elasticity and high porosity. More porosity makes air and vapour permeable and allows breathing of skin. Very good quality concentrated adhesive, sticks properly and gives long-lasting adhesive action.</p>
                </div>
            </div>

            <div class="row align-items-center justify-content-center gy-5 mb-5   ">
                <div class="col-xl-4 col-lg-6    ">
                    <a href="#">
                        <figure class="mb-0 p-3 text-center product-image-bg rounded-3">
                            <img src="images/prod3.png" alt="Medical Disposables" class="img-fluid" />
                        </figure>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6text-lg-start text-center    ">
                    <h4 class="text-gradient fw-bold">HOSPITAL DRESSING</h4>
                    <h4 class="text-dark fw-medium">
                        <a href="#" class="text-dark">Medrop Absorbent cotton gauze B.P</a>
                    </h4>
                    <p class="text-dark">A wide range of gauze roll that are hygienically made so that they are safe to use in various medical applications. Made from finest quality 100% cotton, bleached to white, these gauze ro ll can be provided with X-Ray detectable thread or Without. Roll of 4 folded fabric of different lengths.</p>
                </div>
            </div>

            <div aria-label="...">
                <ul class="pagination justify-content-center gap-2">
                    <li class="page-item disabled">
                        <a class="page-link">&laquo;</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">&raquo;</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </section>
</main>

<!-- Modal -->
<div class="modal fade" id="enquiry" tabindex="-1" aria-labelledby="enquiryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-body">
            <div class="modal-header border-0">
                <div class="text-gradient fs-3 fw-bold">Enquire Now</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" />
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" />
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" maxlength="10" />
                    </div>
                    <div class="col-md-6">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state">
                            <option selected disabled>Select State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="6"></textarea>
                    </div>
                    <div class="col-12">
                        <a type="submit" class="btn">SEND</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>

<script>
    let thumbnail = document.querySelectorAll('.product-thumbnail img');
    let mainProduct = document.querySelector('.main-product');
    thumbnail.forEach(e => {
        e.onclick = () => {
            mainProduct.src = e.src;
            $('#productImg').attr("href", e.src);
        }
    });
</script>