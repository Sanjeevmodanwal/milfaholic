<?php ?>

<div class="container">
        	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            
          <a href="<?php echo $this->Html->url('/Users/profile'); ?>" class="navbar-brand">
            <?php echo $this->Html->image('../files/staticpage/' . $profileLogo['Staticpage']['image'], array('width' => '251', 'height' => '73', 'alt' => '')); ?>
          </a>
           
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">                 
            <li><a href="<?php echo $this->Html->url('/Users/profile'); ?>">Home</a></li>
            <li><a href="<?php echo $this->Html->url('/Users/search'); ?>">Search</a></li>
            <li><a href="<?php echo $this->Html->url('/Users/messages'); ?>">Messages <span class="badge">9</span></a></li>
             <?php if(empty($loggeduser)){?>
             <li><a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'login'));?>">Member Login</a></li>
             <?php }else{ ?>
             <li><a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'logout'));?>">Member Logout</a></li>
             <?php } ?>
            <li><span><a href="<?php echo $this->Html->url('/Users/vip'); ?>">Upgarde to VIP</a></span></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        </div>
<div class="nav_bott">
        	<div class="container">Your currently membership is "BASIC". <span>UPGARDE TO VIP NOW </span> to Unlock Advanced Features. </div>
        </div>
