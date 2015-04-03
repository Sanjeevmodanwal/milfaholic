<?php echo $this->element('/header'); ?>
<div class="con_box">
    <div class="container">

        <div class="col-sm-6">
            <div class="con_box_right">
                <h1> NOW on Your Phone! </h1>
                <span>Private and Free to Sign Up</span>
                <?php echo $this->Form->create('User'); ?>
                <div class="member_form">
                    <h2>Member Login</h2>
                    <div>
                        <?php $x = $this->Session->flash(); ?>
                        <?php if ($x) { ?>
                            <div class="alert success">
                                <span class="icon"></span>
                                <strong></strong><?php echo $x; ?>
                            </div>
                        <?php } ?>
                    </div>
                    <p>
                    <div class="col-sm-4"><label>Username:</label></div>
                    <div class="col-sm-8"><input name="data[User][username]" type="text" required></div>
                    </p>
                    <p>
                    <div class="col-sm-4"><label>Password:</label></div>
                    <div class="col-sm-8"><input name="data[User][password]" type="password" required></div>
                    </p>
                    <a class="forget_login" href="<?php echo $this->html->url(array('controller' => 'users', 'action' => 'forgetpwd')); ?>">Forgot your login info?</a>
                    <button class="btn btn-primary liogin_one" name="submit">Login Now</button>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>    
        
        <div class="col-sm-6">
            <div class="con_box_left">
                <div class="row">
                    <h5>Not a Member Yet?</h5>
                    <p>Join For Free! The members available here are looking to hook up for fun and chat. There
                        are always new members online. <a class="join_new" href="<?php echo $this->Html->url("/");?>">Join For Free</a> to Hook up.</p>
                    <?php foreach($alluser as $allusers){?>
                    <div class="col-sm-2 col-xs-6">
                      <a href="<?php echo $this->Html->url("/");?>">
                           <?php if ($allusers['User']['image'] != "") { ?>
                                <?php  
                                    $g= unserialize($allusers['User']['image']);
                                       foreach($g as $gal) { ?>
                        <a href="<?php echo $this->Html->url("/");?>"><?php echo $this->Html->image('../files/user/' . $gal); ?></a>                                       
                              <?php  break;
                                    }
                                   ?>
                                       <?php } else {
                            ?> <a href="<?php echo $this->Html->url("/");?>"><img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt=""></a>
                                <?php } ?>                             
                      </a>
                       
                    </div>     
                    <?php } ?> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('/footer'); ?>

<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>

<!--<script type="text/javascript">
    $(document).ready(function() {
        $(".btn").click(function() {
            $("#myModal").modal('show');
        });
    });
</script>-->