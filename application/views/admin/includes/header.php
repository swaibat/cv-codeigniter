<header class="app-header hidden-print"><a class="app-header__logo" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Ovoo" height="30" style="margin-top:-15px;"></a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- visit website -->
            <li><a class="app-nav__item" href="<?php echo base_url(); ?>" target="_blank"><?php echo trans('visit_website'); ?></a></li>
            <!-- language switch -->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" style="text-transform: capitalize;"><?php echo $this->language_model->language_by_id($this->session->userdata('active_language_id')); ?></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <?php
                        $languages = $this->language_model->get_languages();
                        foreach ($languages as $language) : ?>
                        <li><a class="dropdown-item" href="<?php echo base_url('language/switch/').$language->short_form; ?>"><?php echo $language->name; ?></a></li>
                    <?php endforeach; ?>                    
                </ul>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><img src="<?php echo $this->common_model->get_img('user', $this->session->userdata('user_id')) . '?' . time(); ?>" class="img-circle" alt="photo" height="20"></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>admin/manage_profile"><i class="fa fa-user fa-lg"></i> <?php echo trans('profile'); ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>admin/manage_profile"><i class="fa fa-lock fa-lg" aria-hidden="true"></i><?php echo trans('change_password'); ?> </a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out fa-lg"></i> <?php echo trans('logout'); ?></a></li>
                </ul>
            </li>
        </ul>
    </header>
