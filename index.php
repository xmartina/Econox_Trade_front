<?php
$page_name = 'Home';
include_once(__DIR__ . '/functions/home_function.php');
include_once(__DIR__ . '/partials/header.php');
?>

    <!-- hero start -->
    <section class="hero bg_img"
             data-background="<?= $site_url ?>assets/images/frontend/banner/5fce371bad7db1607350043.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero__content">
                        <h2 class="hero__title"><span class="text-white font-weight-normal">Invest for Future in Stable Platform</span>
                            <b class="base--color">and Make Fast Money</b></h2>
                        <p class="text-white f-size-18 mt-3">Invest in an Industry Leader, Professional, and Reliable
                            Company. We provide you with the most necessary features that will make your experience
                            better. Not only we guarantee the fastest and the most exciting returns on your investments,
                            but we also guarantee the security of your investment.</p>
                        <a href="<?= $signup_url ?>" class="cmn-btn text-uppercase font-weight-600 mt-4">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="rounded bg-dark p-3 shadow-sm" style="height: 450px;">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                                {
                                    "colorTheme": "dark",
                                    "dateRange": "12M",
                                    "exchange": "US",
                                    "showChart": true,
                                    "locale": "en",
                                    "width": "100%",
                                    "height": "100%",
                                    "largeChartUrl": "",
                                    "isTransparent": false,
                                    "showSymbolLogo": false,
                                    "showFloatingTooltip": false,
                                    "plotLineColorGrowing": "rgba(66, 66, 66, 1)",
                                    "plotLineColorFalling": "rgba(66, 66, 66, 1)",
                                    "gridLineColor": "rgba(240, 243, 250, 0)",
                                    "scaleFontColor": "rgba(209, 212, 220, 1)",
                                    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                    "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->
    <section class="about-section bg_img"
             data-background="<?= $site_url ?>assets/images/frontend/about/60b60b6574cd91622543205.jpg">
        <div class="row p-0 h-100 m-0">
            <div class="col-lg-6 p-0 m-0" style="max-height: 650px; overflow: hidden;">
                <div class="bg-dark h-100 d-flex flex-column justify-content-center p-3">
                    <!-- First Row of Images -->
                    <div class="row mb-3">
                        <div class="col-6">
                            <img src="<?= $site_url ?>assets/images/home/cert_rectangle_2013.jpeg" alt="Certificate 2013" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                            <img src="<?= $site_url ?>assets/images/home/cert_rectangle_2015.jpeg" alt="Certificate 2015" class="img-fluid rounded">
                        </div>
                    </div>

                    <!-- Second Row of Images -->
                    <div class="row mb-3">
                        <div class="col-6">
                            <img src="<?= $site_url ?>assets/images/home/cert_01.jpeg" alt="Certificate 01" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                            <img src="<?= $site_url ?>assets/images/home/trusted_rectangle_2023.jpeg" alt="Trusted 2023" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <img src="<?= $site_url ?>assets/images/home/badge_us_sign.jpeg" alt="Certificate 01" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                            <img src="<?= $site_url ?>assets/images/home/ceo_signing.jpeg" alt="Trusted 2023" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
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
                                <a href="<?= $about_url ?>" class="cmn-btn mt-4">More Info</a>
                            </div>
                        </div>
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
                        <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b
                                    class="base--color">Plans</b></h2>
                        <p>To make a solid investment, you have to know where you are investing. Find a plan which is
                            best for you.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row mb-none-30 justify-content-center">
                <?php
                include_once (__DIR__ . '/partials/plan_template.php');
                ?>
            </div>
        </div>
    </section>


    <section class="pt-120 pb-120 overlay--radial bg_img"
             data-background="assets/images/frontend/why_choose/5fce3cf364ca21607351539.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Why Choose</span> <b
                                    class="base--color"><?= $site_name ?></b></h2>
                        <p>Our goal is to provide our investors with a reliable source of high income, while minimizing
                            any possible risks and offering a high-quality service.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row justify-content-center mb-none-30">
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-copy"></i></div>
                            <h4 class="choose-card__title base--color">Legal Company</h4>
                        </div>
                        <p>Our company conducts absolutely legal activities in the legal field. We are certified to
                            operate investment business, we are legal and safe.</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-lock"></i></div>
                            <h4 class="choose-card__title base--color">High reliability</h4>
                        </div>
                        <p>We are trusted by a huge number of people. We are working hard constantly to improve the
                            level of our security system and minimize possible risks.</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-user-lock"></i></div>
                            <h4 class="choose-card__title base--color">Anonymity</h4>
                        </div>
                        <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money –
                            this is one of the most convenient ways of cooperation.</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-shipping-fast"></i></div>
                            <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
                        </div>
                        <p>Our all retreats are treated spontaneously once requested. There are high maximum limits. The
                            minimum withdrawal amount is only $10 .</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-users"></i></div>
                            <h4 class="choose-card__title base--color">Referral Program</h4>
                        </div>
                        <p>We are offering a certain level of referral income through our referral program. you can
                            increase your income by simply refer a few people.</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-headset"></i></div>
                            <h4 class="choose-card__title base--color">24/7 Support</h4>
                        </div>
                        <p>We provide 24/7 customer support through e-mail and telegram. Our support representatives are
                            periodically available to elucidate any difficulty.</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-server"></i></div>
                            <h4 class="choose-card__title base--color">Dedicated Server</h4>
                        </div>
                        <p>We are using a dedicated server for the website which allows us exclusive use of the
                            resources of the entire server.</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="lab la-expeditedssl"></i></div>
                            <h4 class="choose-card__title base--color">SSL Secured</h4>
                        </div>
                        <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine and
                            legitimate.</p>
                    </div><!-- choose-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                <i class="las la-shield-alt"></i></div>
                            <h4 class="choose-card__title base--color">DDOS Protection</h4>
                        </div>
                        <p>We are using one of the most experienced, professional, and trusted DDoS Protection and
                            mitigation provider.</p>
                    </div><!-- choose-card end -->
                </div>
            </div>
        </div>
    </section>
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title"><span class="font-weight-normal">Profit</span> <b class="base--color">Calculator</b>
                        </h2>
                        <p>You must know the calculation before investing in any plan, so you never make mistakes. Check
                            the calculation and you will get as our calculator says.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="profit-calculator-wrapper">
                        <form class="profit-calculator">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Choose Plan</label>
                                    <select class="base--bg" id="changePlan">
                                        <option value="5">Plan 1</option>
                                        <option value="4">Plan 2</option>
                                        <option value="3">Plan 3</option>
                                        <option value="2">Plan 4</option>
                                        <option value="1">Plan 5</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label>Invest Amount</label>
                                    <input type="text" name="#0" id="#0" placeholder="0.00"
                                           class="form-control base--bg invest-input"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                                </div>
                                <div class="col-lg-12">
                                    <label>Profit Amount</label>
                                    <input type="text" class="form-control base--bg profit-input" disabled>
                                    <code class="period"></code>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-120 pb-120 bg_img" data-background="assets/images/frontend/how_work/5fce39883b22c1607350664.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">How</span> <b
                                    class="base--color"><?= $site_name ?></b>
                            <span class="font-weight-normal">Works</span></h2>
                        <p>Get involved in our tremendous platform and Invest. We will utilize your money and give you
                            profit in your wallet automatically.</p>
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
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="p-4">
                        <img class="rounded shadow-sm" src="<?=$site_url?>assets/images/front_added/affirmation_cert.png" alt="<?=$site_name?>">
                    </div>
                </div>
                <div class="col-lg-6">
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
                                <div class="card-body">You can see this anytime on
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
    </section>                    <!-- testimonial section start -->
    <section class="pt-120 pb-120 bg_img overlay--radial"
             data-background="assets/images/frontend/testimonial/5fce3baa1513c1607351210.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">What Users Say</span> <b
                                    class="base--color">About Us</b></h2>
                        <p>We are doing really good at this market and here are the words we loved to get from a few of
                            our users.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider">
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p><?= $site_name ?> is the best among all, I has found the legit
                                        investment platform, 100% successful withdrawal 100% fastest payment 24/7 live
                                        support, this is really good.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f3d3402911712387027.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Nicholas smith</h6>
                                        <span class="designation">User From USA</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Compania este întotdeauna consecventă cu retragerile, iar plățile lor sunt
                                        automate, nu trebuie să vă faceți griji</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f41b257181712387099.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Antonella Vella</h6>
                                        <span class="designation">User From Romania</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>The company managements are working so hard to make sure that everything is
                                        working properly and smoothly, this is very good.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f4847b5771712387204.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Raymond Davis</h6>
                                        <span class="designation">User From USA</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>This is the true definition of accountability and trust this reliable investment
                                        company is really paying</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f4eecea891712387310.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Elizabeth Evie</h6>
                                        <span class="designation">User From USA</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Il ritiro dell'azienda funziona con successo, davvero questo è il migliore tra
                                        tutti, posso valutare l'azienda al 100% buona.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f54a2b43f1712387402.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Antonio Michele siciliano</h6>
                                        <span class="designation">User From Italy</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Strumento super ingegnoso per fare soldi in modo semplice ed efficace. Molto
                                        semplice. da utilizzare e applicabili in ogni paese perché sono legittimi e
                                        affidabili al 100%.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f584539c71712387460.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Marco Manni</h6>
                                        <span class="designation">User From Italy</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Avendo instaurato un rapporto di fiducia con questa piattaforma, continuerò a
                                        essere qui e aumenterò sempre il mio investimento</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f5da34a141712387546.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Franca Farina</h6>
                                        <span class="designation">User From Italy</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Sono così impressionato dalla sincerità di questa azienda, una buona
                                        reputazione</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f611276961712387601.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Anna Maria</h6>
                                        <span class="designation">User From Italy</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>I have only had very good experiences with businessinsiderfinance.com, The
                                        concept and implementation is simple but effective mega successful. The nice
                                        thing is that these earnings are always recurring. A nice thing to secure
                                        yourself financially or to fulfill wishes. There is also no company behind that
                                        collects the funds. Here you can become financially independent .</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f6e66ceab1712387814.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">David Johnson</h6>
                                        <span class="designation">User From Australia</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Lavoro per l'azienda da molto tempo e ho molte esperienze positive in azienda, ma
                                        la cosa più sorprendente è che pagano più velocemente del portafoglio bitcoin.
                                        Ricevo sempre i miei soldi con successo.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f72d87bd41712387885.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Federico Fabretti</h6>
                                        <span class="designation">User From Italy</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>All the information about the company is legit and I has verified everything, we
                                        keep moving forward in <?= $site_name ?></p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f76f471de1712387951.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">David Brown</h6>
                                        <span class="designation">User From Australia</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>This is the best crypto investment company across the world</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f7cfb766c1712388047.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Nicolas Panarella</h6>
                                        <span class="designation">User From USA</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Il sito funziona senza problemi, i pagamenti vengono effettuati ogni giorno. Ho
                                        investito più di ventimila dollari in questo sito altamente redditizio e sto
                                        ottenendo un buon interesse da parte loro. Raccomando il loro sito web
                                        <?= $site_name ?> è il migliore che abbia mai visto.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f8016ce761712388097.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Maurizio Ebano</h6>
                                        <span class="designation">User From Italy</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Non ho mai avuto problemi con il prelievo di fondi o con il raggiungimento del
                                        supporto quando necessario. Questa è una grande opportunità di investimento.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f8455f7031712388165.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Renato Vivian</h6>
                                        <span class="designation">User From Italy</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>I have been working on the <?= $site_name ?> platform for over 6 years.
                                        I am very grateful to all the management that on the Internet I can find a
                                        really reliable place to get passive income. I invested both large and small
                                        sums, withdrawing funds goes smoothly. I highly recommend this.</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img src="assets/images/frontend/testimonial/6610f8815e84b1712388225.jpg"
                                             alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Peter Taylor</h6>
                                        <span class="designation">User from Australia</span>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- testimonial section end -->
    <section class="pt-120 pb-120 bg_img" data-background="assets/images/frontend/team/5fce3b119747a1607351057.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Our Expert</span> <b
                                    class="base--color">Team Members</b></h2>
                        <p>We have a great team including developers, designers, and Traders. The Team always working
                            hard to give you the maximum profit.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row justify-content-center mb-none-30">
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/6610ee9ace61a1712385690.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Mario Giulianati</h4>
                            <span class="designation">CEO</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/6610ef0cc64211712385804.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Alessandro Bello</h4>
                            <span class="designation">CTO</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/5fce3b441d86e1607351108.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Lew Son</h4>
                            <span class="designation">Marketing Head</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/6610ef338f3211712385843.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Francesco Chico</h4>
                            <span class="designation">Designer</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/5fce3b5f679ad1607351135.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Sam Joe</h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/5fce3b6d71cdc1607351149.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Alex Joe</h4>
                            <span class="designation">UX Expert</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/5fce3b7c48fb41607351164.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Juna Sun</h4>
                            <span class="designation">SEO Expert</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/frontend/team/6610eeda993ae1712385754.jpg" alt="image">
                        </div>
                        <div class="team-card__content">
                            <h4 class="name mb-1">Giorgio Marin</h4>
                            <span class="designation">Manager</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
            </div>
        </div>
    </section>
    <section class="pt-120 pb-120 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Our Top</span> <b
                                    class="base--color">Investors</b></h2>
                        <p>Here are the investor leaders who have made the maximum investment with our system.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img class="rounded shadow-sm" style="height: 550px;" src="<?=$site_url?>assets/images/front_added/cac.png" alt="<?=$site_name?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-center mb-none-30">
                        <div class="col-xl-6 col-lg-6 col-sm-6 mb-30">
                            <div class="investor-card border-radius--5">
                                <div class="investor-card__thumb bg-light rounded-circle bg_img background-position-y-top"
                                     data-background="<?= $site_url ?>assets/images/home/investor_avatar.png"></div>
                                <div class="investor-card__content">
                                    <h6 class="name">Giuseppe82</h6>
                                    <span class="amount f-size-14">Investment - $4253844.00</span>
                                </div>
                            </div><!-- investor-card end -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 mb-30">
                            <div class="investor-card border-radius--5">
                                <div class="investor-card__thumb bg-light rounded-circle bg_img background-position-y-top"
                                     data-background="<?= $site_url ?>assets/images/home/investor_avatar.png"></div>
                                <div class="investor-card__content">
                                    <h6 class="name">Francesco55</h6>
                                    <span class="amount f-size-14">Investment - $924290.00</span>
                                </div>
                            </div><!-- investor-card end -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 mb-30">
                            <div class="investor-card border-radius--5">
                                <div class="investor-card__thumb bg-light rounded-circle bg_img background-position-y-top"
                                     data-background="<?= $site_url ?>assets/images/home/investor_avatar.png"></div>
                                <div class="investor-card__content">
                                    <h6 class="name">Albertone99</h6>
                                    <span class="amount f-size-14">Investment - $874740.00</span>
                                </div>
                            </div><!-- investor-card end -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 mb-30">
                            <div class="investor-card border-radius--5">
                                <div class="investor-card__thumb bg-light rounded-circle bg_img background-position-y-top"
                                     data-background="<?= $site_url ?>assets/images/home/investor_avatar.png"></div>
                                <div class="investor-card__content">
                                    <h6 class="name">Almir54</h6>
                                    <span class="amount f-size-14">Investment - $773378.00</span>
                                </div>
                            </div><!-- investor-card end -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 mb-30">
                            <div class="investor-card border-radius--5">
                                <div class="investor-card__thumb bg-light rounded-circle bg_img background-position-y-top"
                                     data-background="<?= $site_url ?>assets/images/home/investor_avatar.png"></div>
                                <div class="investor-card__content">
                                    <h6 class="name">Robby74</h6>
                                    <span class="amount f-size-14">Investment - $754000.00</span>
                                </div>
                            </div><!-- investor-card end -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 mb-30">
                            <div class="investor-card border-radius--5">
                                <div class="investor-card__thumb bg-light rounded-circle bg_img background-position-y-top"
                                     data-background="<?= $site_url ?>assets/images/home/investor_avatar.png"></div>
                                <div class="investor-card__content">
                                    <h6 class="name">Malpeli746</h6>
                                    <span class="amount f-size-14">Investment - $643900.00</span>
                                </div>
                            </div><!-- investor-card end -->
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
                        <a href="<?= $signup_url ?>" class="cmn-btn mt-4">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Payment We</span> <b
                                    class="base--color">Accept</b></h2>
                        <p>We accept all major cryptocurrencies and fiat payment methods to make your investment process
                            easier with our platform.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-slider">
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1bd8678601601117144.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1d2a742211601117482.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1d4bc69e71601117515.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1d41257181601117505.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1d1d3ec731601117469.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1bc61518b1601117126.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f7096563dfb71601214038.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1d5951a111601117529.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1b9e4bb961601117086.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1d3672dd61601117494.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f7096a31ed9a1601214115.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1babbdbb31601117099.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1b2b20c6f1601116971.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f19432bedf1601116483.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1b6c02ecd1601117036.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1b94e9b2b1601117076.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1b5fe18ee1601117023.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1b4c774af1601117004.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1bec255c61601117164.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f709684736321601214084.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f6f1bb765ab11601117111.jpg" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/5f9a8b62bb4dd1603963746.png" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                        <div class="single-slide">
                            <div class="brand-item">
                                <img src="assets/images/gateway/66120d7116a0c1712459121.png" alt="image">
                            </div><!-- brand-item end -->
                        </div>
                    </div><!-- payment-slider end -->
                </div>
            </div>
        </div>
    </section>
    <section class="pt-120 pb-120 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Our Latest News</span></h2>
                        <p>you will get each update about our system and the world market in this area. Keep checking
                            our Latest News to be in touch.</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row mb-none-30">
            </div>
        </div>
    </section>
    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="subscribe-wrapper bg_img"
                         data-background="assets/images/frontend/subscribe/5fce3af5a116f1607351029.jpg">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <h2 class="title">Subscribe Our Newsletter</h2>
                            </div>
                            <div class="col-lg-7 mt-lg-0 mt-4">
                                <form class="subscribe-form" method="post">
                                    <input type="hidden" name="_token" value="mkiKUwVovjTapx3EFa3bN64QqnM0ESfvr5E9GpIY">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                    <button type="submit" class="subscribe-btn"><i class="las la-envelope"></i></button>
                                </form>
                            </div>
                        </div>
                    </div><!-- subscribe-wrapper end -->
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <strong class="modal-title text-white" id="ModalLabel">
                        At first sign in your account </strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-footer">
                    <a href="<?= $login_url ?>" type="button" class="btn btn-outline-warning custom-success w-100">At
                        first sign in your account</a>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(__DIR__ . '/partials/footer.php');
?>