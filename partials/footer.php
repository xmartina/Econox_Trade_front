<!-- footer section start -->
<footer class="footer bg_img" data-background="<?=$site_url?>assets/images/frontend/footer/5fce39681ce6b1607350632.jpg">
    <div class="footer__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <a href="<?=$site_url?>"><img src="<?=$site_logo?>" alt="image"></a>
                    <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                        <li><a href="<?=$terms_url?>">Terms &amp; Condition</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-left text-center">
                    <p><p>© 2024 <a href="<?=$site_url?>" class="base--color"><?=$site_name?></a>. All rights reserved</p></p>
                </div>
                <div class="col-md-6">
                    <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                        <li><a href="https://facebook.com/"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class="lab la-twitter"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="lab la-pinterest-p"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="lab la-linkedin-in"></i></a></li>
			<li><a href="https://t.me/EconoXtradeGroup"><i class="lab la-telegram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->
</div> <!-- page-wrapper end -->

<!-- jQuery library -->
<script src="<?=$site_url?>assets/templates/bit_gold/js/vendor/jquery-3.5.1.min.js"></script>
<!-- bootstrap js -->
<script src="<?=$site_url?>assets/templates/bit_gold/js/vendor/bootstrap.bundle.min.js"></script>

<!-- slick slider js -->
<script src="<?=$site_url?>assets/templates/bit_gold/js/vendor/slick.min.js"></script>
<script src="<?=$site_url?>assets/templates/bit_gold/js/vendor/wow.min.js"></script>
<!-- dashboard custom js -->
<script src="<?=$site_url?>assets/templates/bit_gold/js/app.js"></script>


<link rel="stylesheet" href="<?=$site_url?>assets/templates/bit_gold/css/iziToast.min.css">
<script src="<?=$site_url?>assets/templates/bit_gold/js/iziToast.min.js"></script>


<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
<?php include_once (__DIR__.'/../include/support_plugin.php'); ?>
<script>
    (function ($) {
        "use strict";
        $(document).on('click','.investButton',function () {
            var data = $(this).data('resource');
            var symbol = "$";
            var currency = "USD";

            $('#mySelect').empty();

            if (data.fixed_amount == '0') {
                $('.investAmountRenge').text(`invest: ${symbol}${data.minimum} - ${symbol}${data.maximum}`);
                $('.fixedAmount').val('');
                $('#fixedAmount').attr('readonly', false);

            } else {
                $('.investAmountRenge').text(`invest: ${symbol}${data.fixed_amount}`);
                $('.fixedAmount').val(data.fixed_amount);
                $('#fixedAmount').attr('readonly', true);
            }

            if (data.interest_status == '1') {
                $('.interestDetails').html(`<strong> Interest: ${data.interest} % </strong>`);
            } else {
                $('.interestDetails').html(`<strong> Interest: ${data.interest} ${currency}  </strong>`);
            }
            if (data.lifetime_status == '0') {
                $('.interestValidaty').html(`<strong>  per ${data.times} hours ,  ${data.repeat_time} times</strong>`);
            } else {
                $('.interestValidaty').html(`<strong>  per ${data.times} hours,  life time </strong>`);
            }

            $('.planName').text(data.name);
            $('.plan_id').val(data.id);
        });



    })(jQuery);

</script>
<script>
    (function ($) {
        "use strict";
        $(document).ready(function () {
            $("#changePlan").on('change', function () {
                var planId = $("#changePlan option:selected").val();
                var investAmount = $('.invest-input').val();
                var profitInput = $('.profit-input').val('');

                $('.period').text('');

                if (investAmount != '' && planId != null) {
                    ajaxPlanCalc(planId, investAmount)
                }
            });

            $(".invest-input").on('change', function () {
                var planId = $("#changePlan option:selected").val();
                var investAmount = $(this).val();
                var profitInput = $('.profit-input').val('');
                $('.period').text('');
                if (investAmount != '' && planId != null) {
                    ajaxPlanCalc(planId, investAmount)
                }
            });
        });
        function ajaxPlanCalc(planId, investAmount) {
            $.ajax({
                url: "https://businessinsiderfinance.com/planCalculator",
                type: "post",
                data: {
                    planId,
                    investAmount
                },
                success: function (response) {
                    var alertStatus = "";
                    if (response.errors) {
                        iziToast.error({message: response.errors, position: "topRight"});
                    }else{
                        var msg = `${response.description}`
                        $('.profit-input').val(msg);
                        if(response.netProfit){
                            $('.period').text('Net Profit '+response.netProfit);
                        }
                    }
                }
            });
        }
    })(jQuery);

</script>
<script type="text/javascript">

    (function ($) {
        "use strict";
        $('.subscribe-form').on('submit',function(e){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            e.preventDefault();
            var email = $('input[name=email]').val();
            $.post('subscribe.html',{email:email}, function(response){
                if(response.errors){
                    for (var i = 0; i < response.errors.length; i++) {
                        iziToast.error({message: response.errors[i], position: "topRight"});
                    }
                }else{
                    iziToast.success({message: response.success, position: "topRight"});
                }
            });
        });

    })(jQuery);
</script>

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "https://businessinsiderfinance.com/change/" + $(this).val();
        });

        $('.policy').on('click',function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('cookie/accept.json', function(response){
                iziToast.success({message: response, position: "topRight"});
                $('.cookie__wrapper').addClass('d-none');
            });
        });
    })();
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        new Yandex.Translate.Widget({
            containerId: 'ytWidget',
            pageLang: 'en',
            widgetTheme: 'dark',
            autoMode: true
        });
    });
</script>

</body>
</html> 