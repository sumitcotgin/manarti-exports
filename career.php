<?php include('include/head.php') ?>

<section class="py-5 bg-body event-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-gradient fw-bold">AVAILABLE JOBS</h2>
                <hr class="opacity-100" style="color:#BFBFBF" />
            </div>
            <div class="pt-3 mb-4">
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="mb-4 p-4 apply-jobs">
                        <div>
                            <h5 class="mb-0 fw-bold">Lorem Ipsum Dolor Sit Amet</h5>
                            <p class="mb-0">Posted: 1 day ago</p>
                        </div>
                        <a role="button" class="d-inline-block btn2 fw-bold linear-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">View</a>
                    </div>
                <?php } ?>
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
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-lg-5">
                <div class="mb-3 fw-bold fs-2">About the job</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor aliquam feugiat. Curabitur eu vulputate eros, quis tempor nisl. Donec ut congue sapien. Etiam neque ante, blandit in nisl sed, elementum venenatis sem. Morbi nec justo euismod, dapibus arcu quis, dapibus dolor. Sed egestas, eros ut rhoncus rutrum, libero purus egestas nibh, a rutrum metus dolor id sapien. Maecenas at erat sit amet nisl scelerisque gravida. Suspendisse vitae suscipit nisl.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor aliquam feugiat. Curabitur eu vulputate eros, quis tempor nisl. Donec ut congue sapien. Etiam neque ante, blandit in nisl sed, elementum venenatis sem. Morbi nec justo euismod, dapibus arcu quis, dapibus dolor. Sed egestas, eros ut rhoncus rutrum, libero purus egestas nibh, a rutrum metus dolor id sapien. Maecenas at erat sit amet nisl scelerisque gravida. Suspendisse vitae suscipit nisl.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor aliquam feugiat. Curabitur eu vulputate eros, quis tempor nisl. Donec ut congue sapien. Etiam neque ante, blandit in nisl sed, elementum venenatis sem. Morbi nec justo euismod, dapibus arcu quis, dapibus dolor. Sed egestas, eros ut rhoncus rutrum, libero purus egestas nibh, a rutrum metus dolor id sapien. Maecenas at erat sit amet nisl scelerisque gravida. Suspendisse vitae suscipit nisl.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor aliquam feugiat. Curabitur eu vulputate eros, quis tempor nisl. Donec ut congue sapien. Etiam neque ante, blandit in nisl sed, elementum venenatis sem. Morbi nec justo euismod, dapibus arcu quis, dapibus dolor. Sed egestas, eros ut rhoncus rutrum, libero purus egestas nibh, a rutrum metus dolor id sapien. Maecenas at erat sit amet nisl scelerisque gravida. Suspendisse vitae suscipit nisl.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor aliquam feugiat. Curabitur eu vulputate eros, quis tempor nisl. Donec ut congue sapien. Etiam neque ante, blandit in nisl sed, elementum venenatis sem. Morbi nec justo euismod, dapibus arcu quis, dapibus dolor. Sed egestas, eros ut rhoncus rutrum, libero purus egestas nibh, a rutrum metus dolor id sapien. Maecenas at erat sit amet nisl scelerisque gravida. Suspendisse vitae suscipit nisl.</p>
                <ul class="list-unstyled mb-4">
                    <?php for ($a = 0; $a < 4; $a++) { ?>
                        <li class="d-flex gap-2 mb-2 text-black">
                            <div class="check-icon">
                                <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.125 8.125L7.375 13.375L17.875 2.125" stroke="#00A18B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor aliquam feugiat. Curabitur eu vulputate eros, quis tempor nisl. Donec ut congue.</span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="modal-footer text-start border-0">
                <a href="career-form.php" class="d-inline-block btn2 fw-bold linear-gradient">Apply Now</a>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php') ?>