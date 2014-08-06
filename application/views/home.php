<?php $this->load->view("partial/header"); ?>
<div class="span8">
    <h3 class="fg-white"><?php echo $this->lang->line('common_welcome_message'); ?></h3>
    <div id="home_module_list">
        <?php
        foreach ($allowed_modules->result() as $module) {
            ?>
            <div class="tile bg-gray selected">
                <a href="<?php echo site_url("$module->module_id"); ?>">
                    <div class="tile-content image padding5">
                        <img src="<?php echo base_url() . 'images/menubar/' . $module->module_id . '.png'; ?>" border="0" alt="Menubar Image" />
                    </div>
                    <div class="brand bg-dark">
                        <span class="label fg-white bold"><?php echo $this->lang->line("module_" . $module->module_id) ?></span>
                        <span class="text fg-grayLight"><?php echo $this->lang->line('module_' . $module->module_id . '_desc'); ?></span>
                    </div>
                </a>
            </div>

            <?php
        }
        ?>
    </div>
</div>
<?php $this->load->view("partial/footer"); ?>