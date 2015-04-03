<div class="navbar navbar-default" role="navigation">
    <?php echo $this->element('/admin/header'); ?>
</div>

<div class="sidebar-nav">
    <?php echo $this->element('/admin/sidebar'); ?>
</div>


<div class="content">
    <div class="header">

        <h1 class="page-title">Add Staticpage</h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'Staticpages', 'action' => 'admin_index')); ?>">Staticpages Management</a> </li>
            <li class="active">Add Staticpage</li>
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
                <?php echo $this->Form->create('Staticpage',array('id'=>'tab','type'=>'file')); ?>
                    <div class="form-group">
                        <label>Position</label>
                        <?php echo $this->Form->select('position',array('Customer Service'=>'Customer Service','Compliance Statement'=>'Compliance Statement',
                                                                        'Terms of Service'=>'Terms of Service','banner logo Profile'=>'banner logo Profile','banner logo'=>'banner logo',
                                                                        'privacy policy'=>'privacy policy','footer content'=>'footer content'),
                     array('empty'=>'Choose a Role','class'=>'form-control','required')); ?>
                    </div>                
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="data[Staticpage][title]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                         <input type="file" name="data[Staticpage][image]">
                    </div>                   
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="2" name="data[Staticpage][description]" class="form-control" id="edi" ></textarea>
                    </div>
                  
                    <input type="hidden" name="data[Staticpage][created]" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <input type="hidden" name="data[Staticpage][status]" value="1">

                <div class="btn-toolbar list-toolbar">
                    <button class="btn btn-primary" name="submit"><i class="fa fa-save"></i> Save</button>
                    <a href="<?php echo $this->Html->url(array('controller' => 'Staticpages', 'action' => 'admin_index')); ?>" data-toggle="modal" class="btn btn-danger">Cancel</a>
                </div>
                    </form>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.1.6/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
             selector: "#edi",
             plugins : ["colorpicker","media"]

    });
    </script>