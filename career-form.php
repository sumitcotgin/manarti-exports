<?php include('include/head.php'); ?>

<main>
    <section class="py-5 bg-body career-section event-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <h1 class="title text-gradient text-uppercase mb-5 pb-lg-4 text-center">Career</h1>
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
                            <label for="profile" class="form-label">Profile</label>
                            <input type="text" class="form-control" id="profile" />
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="phone" maxlength="10" />
                        </div>
                        <div class="col-md-6">
                            <label for="attach" class="form-label">Attach your resume</label>
                            <label for="attach" class="form-label file-type d-block">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5563 6.35101L6.87963 10.1319C6.26653 10.5717 5.46841 10.8058 4.64854 10.7863C3.82866 10.7668 3.04899 10.4952 2.469 10.0271C1.88901 9.55896 1.55253 8.92965 1.52839 8.26789C1.50426 7.60613 1.79429 6.96193 2.33916 6.46706L8.39312 1.58061C8.75456 1.30349 9.23405 1.14898 9.73256 1.14898C10.2311 1.14898 10.7106 1.30349 11.072 1.58061C11.4242 1.86866 11.6216 2.25706 11.6216 2.66174C11.6216 3.06642 11.4242 3.45482 11.072 3.74287L5.85046 7.95132C5.79878 7.99624 5.73665 8.0325 5.66761 8.05804C5.59857 8.08358 5.52398 8.09789 5.44808 8.10016C5.37219 8.10243 5.29649 8.09261 5.2253 8.07126C5.15411 8.04992 5.08882 8.01746 5.03317 7.97575C4.97752 7.93404 4.93259 7.88389 4.90095 7.82817C4.86932 7.77244 4.85158 7.71223 4.84877 7.65098C4.84596 7.58972 4.85813 7.52862 4.88457 7.47116C4.91102 7.4137 4.95123 7.361 5.0029 7.31608L8.88501 4.18876C9.02751 4.07374 9.10756 3.91774 9.10756 3.75508C9.10756 3.59242 9.02751 3.43643 8.88501 3.32141C8.74251 3.20639 8.54924 3.14178 8.34772 3.14178C8.1462 3.14178 7.95293 3.20639 7.81043 3.32141L3.92832 6.46095C3.73407 6.61653 3.57989 6.8016 3.47468 7.0055C3.36947 7.2094 3.3153 7.42809 3.3153 7.64897C3.3153 7.86985 3.36947 8.08854 3.47468 8.29244C3.57989 8.49634 3.73407 8.68141 3.92832 8.83699C4.32514 9.14208 4.85217 9.31225 5.40019 9.31225C5.94822 9.31225 6.47525 9.14208 6.87207 8.83699L12.086 4.62243C12.6876 4.10138 13.015 3.41222 12.9995 2.70014C12.9839 1.98806 12.6265 1.30865 12.0026 0.805055C11.3787 0.301458 10.5369 0.0129921 9.65472 0.000428225C8.7725 -0.0121356 7.91868 0.252184 7.27314 0.737702L1.21918 5.62415C0.402798 6.35396 -0.0332165 7.30988 0.00197604 8.29275C0.0371686 9.27561 0.540854 10.2096 1.40809 10.9001C2.27532 11.5907 3.43922 11.9845 4.65729 11.9996C5.87535 12.0146 7.05363 11.6497 7.94664 10.9809L12.6309 7.20614C12.7015 7.14919 12.7574 7.08158 12.7956 7.00717C12.8338 6.93276 12.8535 6.853 12.8535 6.77246C12.8535 6.69192 12.8338 6.61217 12.7956 6.53776C12.7574 6.46335 12.7015 6.39574 12.6309 6.33879C12.5603 6.28184 12.4766 6.23667 12.3844 6.20584C12.2922 6.17502 12.1934 6.15916 12.0936 6.15916C11.9938 6.15916 11.895 6.17502 11.8028 6.20584C11.7106 6.23667 11.6269 6.28184 11.5563 6.33879V6.35101Z" fill="var(--black)"/>
                                </svg>
                                Attach your resume
                            </label>
                            <input type="file" class="form-control visually-hidden" id="attach" />
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Work Expectations</label>
                            <textarea class="form-control" id="message" rows="8"></textarea>
                        </div>
                        <div class="col-12">
                            <a type="submit" class="btn">SEND DETAILS</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('include/footer.php'); ?>
<script>
    $("#attach").change(function() {
        filename = this.files[0].name;
    });
</script>