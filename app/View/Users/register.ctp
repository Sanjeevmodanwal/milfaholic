<div class="navbar navbar-default" role="navigation">
    <?php echo $this->element('/header'); ?>
</div>
<div class="content">
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
                <?php echo $this->Form->create('User',array('id'=>'tab','type'=>'file')); ?>
                    <div class="form-group">
                        <label>Role</label>
                        <?php echo $this->Form->select('role',array('Administrator'=>'Administrator','Admin'=>'Admin'),
                     array('empty'=>'Choose a Role','class'=>'form-control','required')); ?>
                    </div>                
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="data[User][username]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="data[User][email]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="data[User][password]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="data[User][image]" required>
                    </div>
                    <div class="form-group">
                        <label>Gender</label><br>
                        <input type="radio" value="Male" name="data[User][gender]"><label>Male</label>
                        <input type="radio" value="Female" name="data[User][gender]"><label>Female</label> 
                    </div>
                    
                    <div class="form-group">
                        <label>Phone No.</label>
                        <input type='tel' pattern="[0-9]{10,10}" name="data[User][contact_no]" title="10 characters maximum" autocomplete="off"  maxlength="10" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Current Location</label>
                        <input type="text" name="data[User][current_location]" class="form-control span12" required>                        
                    </div>                    
                    
                    <input type="hidden" name="data[User][status]" value="1">

                <div class="btn-toolbar list-toolbar">
                    <button class="btn btn-primary" name="submit"><i class="fa fa-save"></i> Save</button>
                    <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'admin_index')); ?>" data-toggle="modal" class="btn btn-danger">Cancel</a>
                </div>
                    </form>
            </div>
        </div>
    </div>
    </div>
<?php echo $this->element('footer'); ?>