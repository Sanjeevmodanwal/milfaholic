<?php ?>

<div class="main_con">  
    <header>
        <div class="top_sec">
            <div class="container">
                <div class="col-sm-4">
                    <div class="logo">
                        <a href="<?php echo $this->Html->url('/'); ?>">
                            <?php echo $this->Html->image('../files/staticpage/' . $bannerLogo['Staticpage']['image'], array('width' => '251', 'height' => '73', 'alt' => '')); ?>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-2">
                    <?php if(empty($loggeduser)){?>
                    <a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'login'));?>" class="login_btn btn-sm">members login</a>
                    <?php }else{ ?>
                    <a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'logout'));?>" class="login_btn btn-sm">members Logout</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
</div>

<style>
     .login_btn{padding-left: 30px !important;} 
</style>
<!--<script type="text/javascript">
    $(document).ready(function(){
        $('#mymodal').on("click",function(){           
           $('.loginModal').modal('show'); 
        });
    });
</script>    -->