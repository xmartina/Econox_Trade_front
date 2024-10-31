<?php
$page_name = 'Contact Us';
include_once(__DIR__ . '/../../functions/home_function.php');
include_once(__DIR__ . '/../../partials/header.php');
include_once(__DIR__ . '/../../partials/breadcrumb.php');
?>

<!-- contact section start -->
<section class="pt-120 pb-120">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-6 contact-thumb bg_img"
                     data-background="<?= $site_url ?>assets/images/frontend/contact/5fce3861b2a1c1607350369.jpg"></div>
                <div class="col-lg-6 contact-form-wrapper">
                    <h2 class="font-weight-bold mb-2">Contact With Us</h2>
                    <p class="font-weight-bold">If you have any questions or queries that are not answered on our
                        website, please feel free to contact us. We will try to respond to you as soon as possible.
                        Thank you so much.</p>
                    <form action="#" method="post" class="contact-form mt-4">
                        <input type="hidden" name="_token" value="mkiKUwVovjTapx3EFa3bN64QqnM0ESfvr5E9GpIY">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="name" placeholder="Full Name" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <input name="subject" placeholder="Subject" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="cmn-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- contact-wrapper end -->
    </div>
    <div class="container pt-120">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row mb-none-30">
                    <div class="col-md-4 col-sm-6 mb-30">
                        <div class="contact-item">
                            <i class="las la-phone"></i>                  <h5 class="mt-2">Phone Number</h5>
                            <div class="mt-4">
                                <p><a href="javascript:void(0)"><?= $site_phone ?></a></p>
                            </div>
                        </div><!-- contact-item end -->
                    </div>
                    <div class="col-md-4 col-sm-6 mb-30">
                        <div class="contact-item">
                            <i class="las la-envelope-open"></i>                  <h5 class="mt-2">Email Address</h5>
                            <div class="mt-4">
                                <p><a href="javascript:void(0)"><?= $site_email ?></a></p>
                            </div>
                        </div><!-- contact-item end -->
                    </div>
                    <div class="col-md-4 col-sm-6 mb-30">
                        <div class="contact-item">
                            <i class="las la-map-marker"></i>                  <h5 class="mt-2">Office Address</h5>
                            <div class="mt-4">
                                <p><a href="javascript:void(0)"><?= $site_address ?></a></p>
                            </div>
                        </div><!-- contact-item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->

<?php
include_once(__DIR__ . '/../../partials/footer.php');
?>
