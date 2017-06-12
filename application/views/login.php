<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php echo form_open('login', 'class="myclass"');
                    ?>
                    <div class="form-group">
                        <?php
                            echo form_label('Username', 'username');
                            echo form_input('Username', '', 'class="form-control" id="username" placeholder="Username"');
                         ?>
                    </div>
                    <div class="form-group">
                        <?php
                            echo form_label('Password', 'password');
                            echo form_password('Password', '', 'class="form-control" id="password" placeholder="Key"');
                        ?>
                    </div>
                    <?php echo form_submit('Login', 'Login', 'class="btn btn-primary"')?>
                    <a href="<?php echo site_url('login')?>" class="btn btn-link">Sign up</a>
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong><?php echo validation_errors(); ?></strong>
                     <?php endif ?>
                        </div>
                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
