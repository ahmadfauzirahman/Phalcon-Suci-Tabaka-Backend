<?php
/**
 * Created by PhpStorm.
 * User: ahmadfauzirahman
 * Date: 02/10/18
 * Time: 9:17
 */
?>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper  pa-0">
    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">TABAKA SISTEM PEMADAM</h3>
                                    <?php $this->flashSession->output() ?>
                                </div>
                                <div class="form-wrap">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label class="control-label mb-10"
                                                   for="exampleInputEmail_2">Username</label>
                                            <input type="text" name="namaUser" class="form-control"
                                                   id="exampleInputEmail_2" placeholder="Username Anda">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                            <a class="capitalize-font txt-orange block mb-10 pull-right font-12"
                                               href="forgot-password.html">forgot password ?</a>
                                            <div class="clearfix"></div>
                                            <input type="password" class="form-control"
                                                   id="exampleInputpwd_2" name="passwordUser" placeholder="Enter pwd">
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-orange btn-rounded">MASUK</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
