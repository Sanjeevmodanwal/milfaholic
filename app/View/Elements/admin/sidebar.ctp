
<?php echo $this->Html->script(array('/admin/lib/bootstrap/js/bootstrap.min'));?>

    <ul>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Users/');?>" class="nav-header"><i class="fa fa-fw fa-user"></i>
               <?php echo __('Users Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Staticpages/');?>" class="nav-header"><i class="fa fa-fw fa-dollar"></i>
               <?php echo __('Staticpages Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Categories/');?>" class="nav-header"><i class="fa fa-fw fa-user"></i>
               <?php echo __('Categories Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Favorites/');?>" class="nav-header"><i class="fa fa-fw fa-dollar"></i>
               <?php echo __('Favorites Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Friendlists/');?>" class="nav-header"><i class="fa fa-fw fa-dollar"></i>
               <?php echo __('Friendlists Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Plans/');?>" class="nav-header"><i class="fa fa-fw fa-dollar"></i>
               <?php echo __('Plans Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Videos/');?>" class="nav-header"><i class="fa fa-fw fa-dollar"></i>
               <?php echo __('Videos Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Videofiles/');?>" class="nav-header"><i class="fa fa-fw fa-dollar"></i>
               <?php echo __('Videofiles Management');?>
            </a>
        </li>        
         <li data-popover="true" rel="popover" data-placement="right">
             <a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse">
                 <i class="fa fa-fw fa-shopping-cart"></i>Shops Management<i class="fa fa-collapse"></i>
             </a>
         </li>
        <li>
            <ul class="premium-menu nav nav-list collapse">                
            <li><a href="<?php echo $this->Html->url('/admin/Shops/');?>">
                    <span class="fa fa-fw fa-shopping-cart"></span><?php echo __('Shops');?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/Shopfiles/');?>">
                    <span class="fa fa fa-fw fa-photo"></span><?php echo __('Shopfiles');?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/Shopvideos/');?>">
                    <span class="fa fa-fw fa-video-camera"></span><?php echo __('Shopvideos');?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/Shoptimes/');?>">
                    <span class="fa fa-fw fa-times-circle-o"></span><?php echo __('Shoptimes');?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/Shopcities/');?>">
                    <span class="fa fa-fw fa-road"></span><?php echo __('Shopcity');?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/Shopaddresses/');?>">
                    <span class="fa fa-fw fa-adjust"></span><?php echo __('Shopaddress');?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/Shopprices/');?>">
                   <span class="fa fa-fw fa-mobile"></span><?php echo __('Shop Prices');?>
               </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/ShopContacts/');?>">
                   <span class="fa fa-fw fa-mobile"></span><?php echo __('Shop Contact Owner');?>
               </a>
            </li>            
           </ul>
       </li>
<!--        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Payments/');?>" class="nav-header"><i class="fa fa-fw fa-dollar"></i>
               <?php echo __('Payments Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Contacts/');?>" class="nav-header"><i class="fa fa-fw fa-mobile"></i>
               <?php echo __('Contacts Management');?>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Staticpages/');?>" class="nav-header"><i class="fa fa-fw fa-pagelines"></i>
               <?php echo __('Staticpages Management');?>
            </a>
        </li>
         <li class="active">
            <a href="<?php echo $this->Html->url('/admin/Newsubscribes/');?>" class="nav-header"><i class="fa fa-fw fa-navicon"></i>
               <?php echo __('Newsubscribes Management');?>
            </a>
        </li>-->
     </ul>
