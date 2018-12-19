<div class="navbar-default sidebar" role="navigation">
	<div class="logo">
		<img src="<?php echo base_url(); ?>public/images/logo.png"/>
	</div>
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a <?php if($file == 'affiliatepartner/index'){ ?> class="active"<?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/affiliatepartner">Dashboard</a>
            </li>

            <li <?php if($file == 'affiliatepartner/attachment-zip'){ echo "class='active'";} ?>>
              <a  href="<?php echo base_url(); ?>panels/supermacdaddy/affiliatepartner/attachment_zip">
                Attachments / Zip
              </a>
            </li>
             <li <?php if($file == 'affiliatepartner/distributionZone'){ echo "class='active'";} ?>>
              <a  href="<?php echo base_url(); ?>panels/supermacdaddy/affiliatepartner/distributionZone">
               Distribution Zone
              </a>
            </li>
            <li>
                <a <?php if($file == 'affiliatepartner/visibility'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/affiliatepartner/visibility">Visibility</a> 
            </li>

            <li>
                <a <?php if($file == 'affiliatepartner/history'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/affiliatepartner/history">History</a>
            </li>
           
            
            
        </ul>
    </div>
</div>
            <!-- /.navbar-static-side -->
 </nav>