<?php
$webroot = $this->request->getAttribute('webroot');
?>
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-pattern">

            <div class="card-body p-4">
                
                <div class="text-center w-75 m-auto">
                    <a href="index.html">
                        <span><img src="<?=$webroot?>assets/images/logo-dark.png" alt="" height="22"></span>
                    </a>
                    <p class="text-muted mb-4 mt-3">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                </div>

                <?= $this->Form->create(null, ['id' => 'formActions', 'url' => ['controller' => 'Users', 'action' => 'recovery']]) ?>

                    <div class="form-group mb-3">
                        <label for="emailaddress">Email address</label>
                        <?php echo $this->Form->control('email', ["class"=>"form-control", "placeholder" => "Enter your email"]);?>
                    </div>

                    <div class="form-group mb-0 text-center">
                        <?= $this->Form->button(__('Reset Password'), ["class" => "btn btn-primary btn-block"]) ?>
                    </div>

                <?= $this->Form->end() ?>

            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-white-50">Back to <a href="pages-login.html" class="text-white ml-1"><b>Log in</b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
</div>
<!-- end row -->