<?php
$page_name = 'Our Plans';
include_once(__DIR__ . '/../../functions/home_function.php');
include_once(__DIR__ . '/../../partials/header.php');
include_once(__DIR__ . '/../../partials/breadcrumb.php');
?>

<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span class="font-weight-normal"></span> <b class="base--color"></b></h2>
                    <p></p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row mb-none-30 justify-content-center">
            <?php
                include_once (__DIR__ . '/../../partials/plan_template.php');
            ?>
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
                <a href="<?=$login_url?>" type="button"
                   class="cmn-btn btn-md btn-outline-warning w-100 text-center">At first sign in your account</a>
            </div>
        </div>
    </div>
</div>


<?php
include_once(__DIR__ . '/../../partials/footer.php');
?>
