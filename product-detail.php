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
                <div class="col-xxl-7 col-lg-6 text-lg-start text-center">
                    <h3 class="text-gradient fw-bold fs-1 mb-3">Elastic Adhesive Bandage</h3>
                    <p class=" lh-base">Good aesthetic appeal due to woven fast edges. High elasticity and high porosity. More porosity makes air and vapour permeable and allows breathing of skin. Very good quality concentrated adhesive, sticks properly and gives long-lasting adhesive action. Adhesive protected by special release film to enhance smooth unrolling, easy application, and long storage life. Easy to remove, because of thin-non-adhesive edges and leaves no residue after removing. An ideal bandage where support, immobilization & pressure is required.</p>
                    <div class="text-lg-start text-center mt-5">
                        <a href="#" class="btn text-uppercase mb-md-0 mb-4">Get a Quote</a>
                        <a role="button" class="btn text-uppercase" data-bs-toggle="modal" data-bs-target="#enquiry">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-products py-5 bg-body event-section">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 position-relative z-0 text-center">
                    <div class="title back-text text-uppercase">Related products</div>
                    <div class="title text-gradient text-uppercase mb-5">Related products</div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center gy-5 mb-5   ">
                <div class="col-xl-4 col-lg-6    ">
                    <a href="#">
                        <figure class="mb-0 p-3 text-center product-image-bg rounded-3">
                            <img src="images/prod1.png" alt="Medical Disposables" class="img-fluid" />
                        </figure>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6    ">
                    <h4 class="text-gradient fw-bold">HOSPITAL DRESSING</h4>
                    <h4 class="text-white fw-semibold">
                        <a href="#" class="text-dark">Cotton Crepe Bandage</a>
                    </h4>
                    <p class="text-dark">Cotton crepe bandages are manufactured using superior quality cotton, which allows normal skin breathing and does not hamper joint & muscular flexibility. The elasticity is restored by washing in warm water which makes our product highly durable</p>
                </div>
            </div>

            <div class="row align-items-center justify-content-center gy-5 mb-5   ">
                <div class="col-xl-4 col-lg-6   ">
                    <a href="#">
                        <figure class="mb-0 p-3 text-center product-image-bg rounded-3">
                            <img src="images/prod2.png" alt="Medical Disposables" class="img-fluid" />
                        </figure>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6   ">
                    <h4 class="text-gradient fw-bold">HOSPITAL DRESSING</h4>
                    <h4 class="text-dark fw-semibold">
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
                <div class="col-xl-4 col-lg-6    ">
                    <h4 class="text-gradient fw-bold">HOSPITAL DRESSING</h4>
                    <h4 class="text-dark fw-semibold">
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
            </div>
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
    thumbnail.forEach( e => {
        e.onclick = ()=> {
            mainProduct.src = e.src;
            $('#productImg').attr("href",e.src);
        }
    });
</script>