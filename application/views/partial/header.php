<!DOCTYPE html >
<html lang="en">
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


        <base href="<?php echo base_url(); ?>" />
        <title><?php echo $this->config->item('company') . ' -- ' . $this->lang->line('common_powered_by') . ' OS Point Of Sale' ?></title>
        <link rel="stylesheet" rev="stylesheet" href="<?php echo base_url(); ?>css/ospos.css" />
        <link rel="stylesheet" rev="stylesheet" href="<?php echo base_url(); ?>css/ospos_print.css"  media="print"/>
        <script>BASE_URL = '<?php echo site_url(); ?>';</script>
        <script src="<?php echo base_url(); ?>js/jquery-migrate-1.2.1.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.color.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.metadata.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <!--<script src="<?php echo base_url(); ?>js/jquery.form.js" type="text/javascript" language="javascript" charset="UTF-8"></script>-->
        <script src="<?php echo base_url(); ?>js/jquery.form.new.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.tablesorter.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.ajax_queue.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.bgiframe.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.autocomplete.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.validate.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.jkey-1.1.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/thickbox.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/common.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/manage_tables.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/swfobject.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/date.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/datepicker.js" type="text/javascript" language="javascript" charset="UTF-8"></script>

        <style type="text/css">
            html {
                overflow: auto;
            }
            body {
                //background: #777;
                background-image: url(' <?php echo base_url();?>images/bg.jpg');
            }
        </style>
        <script type="text/javascript">

// Current Server Time script (SSI or PHP)- By JavaScriptKit.com (http://www.javascriptkit.com)
// For this and over 400+ free scripts, visit JavaScript Kit- http://www.javascriptkit.com/
// This notice must stay intact for use.

//Depending on whether your page supports SSI (.shtml) or PHP (.php), UNCOMMENT the line below your page supports and COMMENT the one it does not:
//Default is that SSI method is uncommented, and PHP is commented:

//var currenttime = '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' //SSI method of getting server date
            var currenttime = '<? print date("F d, Y H:i:s", time())?>' //PHP method of getting server date

///////////Stop editting here/////////////////////////////////

                var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
                var serverdate = new Date(currenttime)

                function padlength(what){
var output=(what.toString().length==1)? "0"+what : what
return output
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1)
var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear()
var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
document.getElementById("servertime").innerHTML=datestring+" "+timestring
}

window.onload=function(){
setInterval("displaytime()", 1000)
}

        </script>
                <style type="text/css">
            .dct {
                margin-left: auto ;
                margin-right: auto ;
            }
            
        </style>

    </head>
    <body class="metro">
        <div class="navigation-bar dark ">
            <div class="navbar-content">

                <a class="element" href="<?=base_url();?>"><span class="icon-grid-view"></span> osPOS <sup><?php echo $this->config->item('application_version'); ?></sup></a>
                <span class="element-divider"></span>

                <div class="no-tablet-portrait">
                    <span class="element-divider"></span>
                    <div class="element"><div id="servertime"></div></div>
                    <span class="element-divider"></span>
                    <div class="element"><?php echo $this->config->item('company'); ?></div>
                    
                    <a class="element place-right" href="<?php echo base_url(); ?>home/logout"><span class="icon-locked-2"></span></a>
                    <span class="element-divider place-right"></span>
                    <button class="element image-button image-left place-right">
                        <?php echo $this->lang->line('common_welcome') . " $user_info->first_name $user_info->last_name! "; ?>

                    </button>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="row">
                <div class="span3">
                               <nav class="sidebar">
<ul>
<li class="title">Main Menu</li>


                            <?php
                            foreach ($allowed_modules->result() as $module) {
                                ?>
                                <li>
                                    <a  href="<?php echo site_url("$module->module_id"); ?>">
                                        <img src="<?php echo base_url() . 'images/menubar/' . $module->module_id . '.png'; ?>" width="16px" height="16px" border="0" alt="Menubar Image" />&nbsp;
                                        <?php echo $this->lang->line("module_" . $module->module_id) ?></a>
                                    <!--<div class="menu_item">
                                        <a href="">
                                            </a><br />
                                        <a href="<?php echo site_url("$module->module_id"); ?>"><?php echo $this->lang->line("module_" . $module->module_id) ?></a>
                                    </div>-->
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>