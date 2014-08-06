<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="product" content="Open Source Point Of Sale">
        <meta name="description" content="Open Source Point Of Sale <?php echo $this->lang->line('login_login'); ?>">
        <meta name="author" content="Revamped by Damith Rushika Kothalawala">

        <link href="<?= base_url(); ?>css/metro-bootstrap.css" rel="stylesheet">
        <!--<link href="css/metro-bootstrap-responsive.css" rel="stylesheet">-->
        <link href="<?= base_url(); ?>css/iconFont.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>css/fdcas.custom.css" rel="stylesheet">
        <!-- Load JavaScript Libraries -->
        <script src="<?= base_url(); ?>js/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>js/jquery/jquery.widget.min.js"></script>

        <!-- Metro UI CSS JavaScript plugins-->
        <script src="<?= base_url(); ?>js/metro/load-metro.js"></script>

        <title>Open Source Point Of Sale <?php echo $this->lang->line('login_login'); ?></title>
        <!-- <script src="<?php echo base_url(); ?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>-->
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("#login_form input:first").focus();
            });
        </script>
        <style type="text/css">
            .dct {
                margin-left: auto ;
                margin-right: auto ;
            }
        </style>
    </head>
    <body class="metro">

        <h1 class="text-center">Open Source Point Of Sale <?php echo $this->config->item('application_version'); ?></h1>
        <div class="dct span8 padding20 border">
            <?php echo form_open('login') ?>
            <div >
                <div class="text-shadow">
                    <h2> 
                        <i class="icon-locked"> </i>
                        <?php echo $this->lang->line('login_login'); ?>
                    </h2>
                </div>
                <div id="login_form">
                    <div class="text-success">
                        <p>
                        <?php echo $this->lang->line('login_welcome_message'); ?>
                        </p>
                    </div>

                    <div class="form_field_label"><?php echo $this->lang->line('login_username'); ?>: </div>
                    <div class="input-control text" data-role="input-control">
                        
                            <?php
                            echo form_input(array(
                                'name' => 'username',
                                'size' => '20'));
                            ?>
                            <button class="btn-clear" tabindex="-1"></button>
                    </div>

                    <div class="form_field_label"><?php echo $this->lang->line('login_password'); ?>: </div>
                    <div class="input-control password" data-role="input-control">

                        <?php
                        echo form_password(array(
                            'name' => 'password',
                            'size' => '20'));
                        ?>
                        <button class="btn-reveal" tabindex="-1"></button>
                    </div>
                    <div class="text-warning"><?php echo validation_errors(); ?></div>
                    <div class="button">
                        <?php echo form_submit('loginButton', 'Go'); ?>
                    </div>

                </div>
            </div>
            <?php echo form_close(); ?>
        </div>

    </body>
</html>
