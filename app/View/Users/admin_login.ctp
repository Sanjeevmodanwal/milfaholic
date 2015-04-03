<?php ?>
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a class="" href="<?php echo $this->Html->url('/')?>">
              <span class="navbar-brand" style="height: 75px;">
                  <span class="fa fa-paper-plane"></span>
                 <?php echo $this->Html->image('../files/staticpage/'.$bannerLogo['Staticpage']['image'],array('width'=>'191','height'=>'60','alt'=>''));?>                  
              </span>
          </a>
        </div>
      </div>

   <div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">Sign In</p>
        <?php echo $this->Form->create('User'); ?>
        <div class="panel-body">
                <div>
                    <?php $x = $this->Session->flash(); ?>
                    <?php if ($x) { ?>
                    <div class="alert success">
                        <span class="icon"></span>
                        <strong></strong><?php echo $x; ?>
                    </div>
                <?php } ?>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="data[User][username]" class="form-control span12">
                </div>
                <div class="form-group">
                <label>Password</label>
                    <input type="password" name="data[User][password]" class="form-control span12">
                </div>
            <button class="btn btn-primary pull-right" name="submit">Sign In</button>
                <label class="remember-me"><input type="checkbox">Remember me</label>
                <div class="clearfix"></div>            
        </div>
        <?php echo $this->Form->end();?>
    </div>
    <p><a href="<?php echo $this->html->url(array('controller'=>'users','action'=>'forgetpwd'));?>">Forgot your password?</a></p>
</div>
<style type="text/css">
            .pull-right{
                width: 30%;
            }
             body{
             background-color: hsl(0, 0%, 13%) !important;   
            }
            .navbar-header{height:94px;}         
        </style>

