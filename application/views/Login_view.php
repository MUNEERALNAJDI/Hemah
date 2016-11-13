<html>
    <head>
        <link href="../res/css/style.css" rel="stylesheet">
    </head>
    <body dir="rtl" class="rtl" cz-shortcut-listen="true">
        <div class="login">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <img src="../res/img/masarimage.jpg" width="100%">
                </div>
                <div class="col-md-6 col-md-offset-3">

                    <div id="login-form" >
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('Login_controller/verify_login'); ?>
                        <div class="panel panel-default">

                            <div class="panel-heading text-center"><h3>مرحباً بك</h3></div>

                            <div class="panel-body">

                                <div class="form-group">

                                    <label class="control-label" for="email">البريد الإلكتروني</label>

                                    <input class="form-control" type="email" name="email" id="email" value="" placeholder="me@example.com" required="" autofocus="" data-parsley-trigger="change" data-parsley-error-message="مطلوب بريد إلكتروني صالح" data-parsley-id="6684">

                                    <span class="help-block">
                                        أكتب البريد الإلكتروني
                                    </span>

                                    <span class="parsley-help-block" id="parsley-id-6684"></span></div>

                                <div class="form-group">

                                    <label class="control-label" for="password">كلمة مرور</label>

                                    <input class="form-control" type="password" name="password" id="password" placeholder="●●●●●" required="" data-parsley-trigger="change" data-parsley-error-message="كلمة المرور يجب أن تكون 6 أحرف على الأقل." data-parsley-id="6834">

                                    <span class="help-block">
                                        اكتب كلمة مرور
                                    </span>

                                    <span class="parsley-help-block" id="parsley-id-6834"></span></div>

                                <div class="form-group">

                                    <label for="remember">

                                        <input type="checkbox" name="remember" id="remember" value="1" data-parsley-multiple="remember" data-parsley-id="4574">

                                        تذكرني

                                    </label>

                                    <span class="parsley-help-block" id="parsley-id-multiple-remember"></span></div>

                                <hr>

                                <div class="form-group">

                                    <button class="btn btn-primary btn-block" type="submit">دخول</button>


                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>



    </body></html>
