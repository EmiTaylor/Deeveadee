<div class="container" style="margin-top:100px;">
    <div class="row login-wrapper">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Login Form</strong>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          Enter username and password
                    </div>
                </div>
                    <?php echo form_open(); ?>
                    <?php $error = form_error("username", "<p class='text-danger'>",'</p>'); ?>
                    <div class="form-group <?php echo $error ? 'has-error' : ''?>">
                        <label for="Username">Username</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input class="col-md-12" type="username" id="username" value="<?php echo set_value('username'); ?>">
                        </div>
                        <?php echo $error; ?>
                    </div>
                    <?php $error = form_error("password", "<p class='text-danger'>",'</p>'); ?>
                    <div class="form-group <?php echo $error ? 'has-error' : ''?>">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock"></i>
                            </span>
                            <input class="col-md-12" type="password" id="password">
                        </div>
                        <?php echo $error; ?>
                    </div>
                    <?php echo form_submit('Login', 'Login', 'class="btn btn-primary"')?>
                    <a href="<?php echo site_url('login')?>" class="btn btn-link">Sign up</a>

                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
