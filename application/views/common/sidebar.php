    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li><a href="<?php echo base_url();?>" <?php echo ($page_type=="dashboard")?'class="active"':'';?>>Dashboard</a></li>
                <li><a href="<?php echo base_url().'team_settings';?>" <?php echo ($page_type=="dashboard")?'class="active"':'';?>>Team Settings</a></li>
                <li><a href="<?php echo base_url().'leave_types';?>" <?php echo ($page_type=="leave_types")?'class="active"':'';?>>Leave Types</a></li>
            </ul>
        </div>
    </div>
</nav>