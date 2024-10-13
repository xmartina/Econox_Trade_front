<?php
$page_name = 'About Us';
include_once(__DIR__ . '/../../functions/home_function.php');
include_once(__DIR__ . '/../../partials/header.php');
include_once(__DIR__ . '/../../partials/breadcrumb.php');
?>

    <section class="pt-120 pb-120 bg_img"
             data-background="https://businessinsiderfinance.com/assets/images/frontend/how_work/5fce39883b22c1607350664.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">How</span> <b class="base--color"><?= $site_name ?></b> <span class="font-weight-normal">Works</span></h2>
                        <p>Get involved in our tremendous platform and Invest. We will utilize your money and give you profit in your wallet automatically.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row justify-content-center mb-none-30">
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon base--color">
                            <i class="las la-user"></i> <span class="step-number">1</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Create</h4>
                        </div>
                    </div><!-- work-card end -->
                </div>
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon base--color">
                            <i class="las la-cubes"></i> <span class="step-number">2</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Invest To Plan</h4>
                        </div>
                    </div><!-- work-card end -->
                </div>
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon base--color">
                            <i class="las la-wallet"></i> <span class="step-number">3</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Get Profit</h4>
                        </div>
                    </div><!-- work-card end -->
                </div>
            </div>
        </div>
    </section>
    <section class="about-section pt-120 pb-120 bg_img"
             data-background="<?=$site_url?>assets/images/frontend/about/60b60b6574cd91622543205.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="about-content">
                        <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b
                                    class="base--color">Us</b></h2>
                        <p>We are an international financial company engaged in investment activities, which are related
                            to trading on financial markets and cryptocurrency exchanges performed by qualified
                            professional traders.<br/>
                            <br/>
                            Our goal is to provide our investors with a reliable source of high income, while minimizing
                            any possible risks and offering a high-quality service, allowing us to automate and simplify
                            the relations between the investors and the trustees. We work towards increasing your profit
                            margin by profitable investment. We look forward to you being part of our community. </p>
                        <a href="<?=$about_url?>" class="cmn-btn mt-4">More Info</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Frequently Asked</span> <b
                                    class="base--color">Questions</b></h2>
                        <p>We answer some of your Frequently Asked Questions regarding our platform. If you have a query
                            that is not answered here, Please contact us.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion cmn-accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading0">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse0" aria-expanded="false"
                                            aria-controls="collapse0">
                                        <i class="las la-question-circle"></i>
                                        <span>When can I deposit/withdraw from my Investment account?</span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse0" class="collapse" aria-labelledby="heading0"
                                 data-parent="#accordionExample" style="">
                                <div class="card-body">
                                    Deposit and withdrawal are available for at any time. Be sure, that your funds are
                                    not used in any ongoing trade before the withdrawal. The available amount is shown
                                    in your dashboard on the main page of Investing platform.

                                    Deposit and withdrawal are available for at any time. Be sure, that your funds are
                                    not used in any ongoing trade before the withdrawal. The available amount is shown
                                    in your dashboard on the main page of Investing platform.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
                                            aria-controls="collapse1">
                                        <i class="las la-question-circle"></i>
                                        <span>How do I check my account balance?</span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                 data-parent="#accordionExample" style="">
                                <div class="card-body">
                                    You can see this anytime on your accounts dashboard. You can see this anytime on
                                    your accounts dashboard.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                        <i class="las la-question-circle"></i>
                                        <span>I forgot my password, what should I do?</span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                 data-parent="#accordionExample" style="">
                                <div class="card-body">
                                    Visit the password reset page, type in your email address and click the `Reset`
                                    button.

                                    Visit the password reset page, type in your email address and click the `Reset`
                                    button.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                        <i class="las la-question-circle"></i>
                                        <span>How will I know that the withdrawal has been successful?</span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                 data-parent="#accordionExample" style="">
                                <div class="card-body">
                                    You will get an automatic notification once we send the funds and you can always
                                    check your transactions or account balance. Your chosen payment system dictates how
                                    long it will take for the funds to reach you.

                                    You will get an automatic notification once we send the funds and you can always
                                    check your transactions or account balance. Your chosen payment system dictates how
                                    long it will take for the funds to reach you.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
                                        <i class="las la-question-circle"></i>
                                        <span>How much can I withdraw?</span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                 data-parent="#accordionExample" style="">
                                <div class="card-body">
                                    You can withdraw the full amount of your account balance minus the funds that are
                                    used currently for supporting opened positions.

                                    You can withdraw the full amount of your account balance minus the funds that are
                                    used currently for supporting opened positions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="cta-wrapper bg_img border-radius--10 text-center"
                         data-background="assets/images/frontend/cta/5fce38bab36371607350458.jpg">
                        <h2 class="title mb-3">Get Started Today With Us</h2>
                        <p>This is a Revolutionary Money Making Platform! Invest for Future in Stable Platform and Make
                            Fast Money. Not only we guarantee the fastest and the most exciting returns on your
                            investments, but we also guarantee the security of your investment.</p>
                        <a href="<?=$signup_url?>" class="cmn-btn mt-4">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once(__DIR__ . '/../../partials/footer.php');
?>