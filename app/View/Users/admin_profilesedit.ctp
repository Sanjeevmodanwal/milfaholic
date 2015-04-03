
<div class="navbar navbar-default" role="navigation">
    <?php echo $this->element('/admin/header'); ?>
</div>

<div class="sidebar-nav">
    <?php echo $this->element('/admin/sidebar'); ?>
</div>


<div class="content">
    <div class="header">

        <h1 class="page-title">Admin Profiles Edit</h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'admin_index')); ?>">Admins Management</a> </li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'admin_profiles')); ?>">Admin Profiles</a> </li>
            <li class="active">Admin Profiles Edit</li>
        </ul>

    </div>
    <div class="main-content">  
        <p>
            <?php $x=$this->Session->flash(); ?>
                    <?php if($x){ ?>
                    <div class="alert success">
                        <span class="icon"></span>
                    <strong></strong><?php echo $x; ?>
                    </div>
                    <?php } ?>
        </p>
        <div class="row">
            <div class="col-md-4">
                <?php echo $this->Form->create('User',array('id'=>'tab')); ?>
                    <div class="form-group">                        
                        <?php echo $this->Form->input('username',array('class'=>'form-control'));?>                        
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('email',array('class'=>'form-control'));?>      
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('phone_no',array('class'=>'form-control'));?>      
                    </div>
                    <div class="form-group">
                        <label>Gender</label><br>
                        <?php 
                            $gender = h($user_edit['User']['gender']);
                            if($gender == 'Male'){
                            ?>
                            <input type='radio' name='data[User][gender]' value="Male" checked/>&nbsp;<?php echo __("Male");?>
                            <input type='radio' name="data[User][gender]" value="Female"/>&nbsp;<?php echo __("Female");?>
                            <?php } else if($gender == 'Female'){?>
                            <input type='radio' name='data[User][gender]' value="Male"/>&nbsp;<?php echo __("Male");?>
                            <input type='radio' name="data[User][gender]" value="Female" checked/>&nbsp;<?php echo __("Female");?>
                            <?php }?>
                         </div>

                    <div class="form-group">
                        <?php echo $this->Form->input('address',array('class'=>'form-control'));?>
                    </div>
                    <input type="hidden" name="data[User][role]" value="Admin">

                <div class="btn-toolbar list-toolbar">
                    <button class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Update</button>
                    <a href="#myModal" data-toggle="modal" class="btn btn-danger">Cancel</a>
                </div>
                    </form>
            </div>
        </div>
    </div>
