<div class="navbar navbar-default" role="navigation">
    <?php echo $this->element('/admin/header'); ?>
</div>

<div class="sidebar-nav">
    <?php echo $this->element('/admin/sidebar'); ?>
</div>


<div class="content">
    <div class="header">

        <h1 class="page-title">Edit Admin</h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo $this->Html->url('/admin/Users/'); ?>">Admins Management</a> </li>
            <li class="active">Edit Admin</li>
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
            <?php echo $this->Form->create('User',array('id'=>'tab','type'=>'file','enctype'=>'multipart/form-data')); ?>
            <div class="col-md-4">
                    <div class="form-group"> 
                        <label>Role</label><br>
                      <?php echo $this->Form->select('role',array(
                                      'Administrator'=>'Administrator',
                                      'Admin'=>'Admin'),
                            array('empty'=>'Choose a Role','class'=>'form-control','required')); ?>                        
                    </div>
                    <div class="form-group">                        
                        <?php echo $this->Form->input('username',array('class'=>'form-control'));?>                        
                    </div>
                    <div class="form-group">                        
                        <?php echo $this->Form->input('email',array('class'=>'form-control'));?>                        
                    </div>
                    <div class="form-group">                        
                        <?php echo $this->Form->input('password',array('class'=>'form-control'));?>                        
                    </div>
                    <div class="form-group">                        
                        <?php echo $this->Form->input('image.',array('type'=>'file','multiple'=>'multiple','label'=>FALSE,'div'=>FALSE,));?>                        
                    </div>
                    <div class="form-group">
                        <label>Gender</label><br>
                        <input type="radio" value="Male" <?php if ($this->request->data['User']['gender'] == 'Male') { ?> checked='checked' <?php } ?> name="data[User][gender]"><label>Male</label>
                        <input type="radio" value="Female" <?php if ($this->request->data['User']['gender'] == 'Female') { ?> checked='checked' <?php } ?> name="data[User][gender]"><label>Female</label> 
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('address',array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('phone_no',array('class'=>'form-control'));?>      
                    </div> 
                    <div class="form-group">
                      <label>Status</label><br>
                      <?php echo $this->Form->select('status',array('1'=>'Active','0'=>'Deactive'),
                       array('label'=>"",'class'=>'form-control','empty'=>'Choose a Name')); ?>
                    </div>
                    
                    <input type="hidden" name="data[User][status]" value="1">

                <div class="btn-toolbar list-toolbar">
                    <button class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Update</button>
                    <a href="<?php echo $this->Html->url('/admin/Users/'); ?>" data-toggle="modal" class="btn btn-danger">Cancel</a>
                </div>
            </div>
             <?php echo $this->Form->end();?>
        </div>
    </div>
</div>