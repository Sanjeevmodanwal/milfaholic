<div class="navbar navbar-default" role="navigation">
    <?php echo $this->element('/admin/header'); ?>
</div>

<div class="sidebar-nav">
    <?php echo $this->element('/admin/sidebar'); ?>
</div>

<div class="content">
    <div class="header">

        <h1 class="page-title">Admins</h1>
        <ul class="breadcrumb">
            <li class="active">Admins</li>
        </ul>

    </div>

    <div class="main-content">
        <p>
            <?php $x = $this->Session->flash(); ?>
            <?php if ($x) { ?>
            <div class="alert success">
                <span class="icon"></span>
                <strong></strong><?php echo $x; ?>
            </div>
        <?php } ?>
        </p>
        <div class="btn-toolbar list-toolbar">
            <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'admin_add')); ?>"><span class="btn btn-primary"><i class="fa fa-plus"></i>New Add</span></a>
            <?php echo $this->Form->create("User", array("action" => "admin_index")); ?>
            <div class="search_username">
                <button type="submit" class="search_button1" style="float: right;"><i class="fa fa-search"></i></button>
                <input type="text" name="keyword" value="<?php if (@$keyword) {
                echo $keyword;
            } ?>" placeholder="Search Your Username" class="form-control" style="width: 17%;float: right;"/>
            </div>
            </form>
            <div class="btn-group">
            </div>
        </div>
      <?php echo $this->Form->create('User', array("action" => "deleteall", 'id' => 'mbc')); ?>
        <table class="table">
            <thead>
                <tr>
                    <th class="admin_check_b"><input type="checkbox" id="selectall" onClick="selectallCHBox();" /></th>                    
                    <th><?php echo $this->Paginator->sort('Image'); ?></th>
                    <th><?php echo $this->Paginator->sort('Username'); ?></th>
                    <th><?php echo $this->Paginator->sort('Email'); ?></th>
                    <th><?php echo $this->Paginator->sort('Gender'); ?></th>
                    <th><?php echo $this->Paginator->sort('contact_no'); ?></th>
                    <th><?php echo $this->Paginator->sort('Status'); ?></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($users) {
                    if (isset($users)) {
                        foreach ($users as $user) {
                            ?>
                            <tr>
                                <td><?php echo $this->Form->checkbox("use" + $user['User']['id'], array('value' => $user['User']['id'], 'class' => 'chechid')); ?></td>
                                
                                <td><?php if ($user['User']['image'] != "") { ?>
                                <?php  
                                    $g= unserialize($user['User']['image']);
                                       foreach($g as $gal) {
                                        echo $this->Html->image('../files/user/'.$gal
                                       ,array('alt'=>'','width' => '100', 'height' => '70',));
                                break;
                                    }
                                   ?>
                                       <?php } else {
                            ?><img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width:100px;height: 70px;">
                                <?php } ?>                                  
                                    
                                </td>
                                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['contact_no']); ?>&nbsp;</td>
                                <td><?php if ($user['User']['status'] == '0') { ?>
                                    <?php echo $this->Form->postLink('Deactive', array('action' => 'activate', $user['User']['id']), array('escape' => false, 'class' => 'archive_12'));
                                    ?></span><?php } else { ?>
                                        <?php echo $this->Form->postLink('Active', array('action' => 'block', $user['User']['id']), array('escape' => false, 'class' => 'archive_12'));
                                        ?></span> <?php } ?>&nbsp;
                                </td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'view1')); ?>
                                  
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'edit1')); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'delete1'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                                    <?php
                                    if ($user['User']['status'] == 0) {
                                        echo $this->Form->postLink(('Activate'), array('Controller' => 'Users', 'action' => 'admin_activate', $user['User']['id']), array('escape' => false, 'class' => 'active1', 'title' => 'Active'));
                                    } else {
                                        echo $this->Form->postLink(('Block'), array('controller' => 'Users', 'action' => 'admin_deactivate', $user['User']['id']), array('escape' => false, 'class' => 'deactive1', 'title' => 'Block'));
                                    }
                                    ?>
                                    
                                </td>
                            </tr>
                 <?php } } } else { { ?> 
                <p class="not_found">NOT FOUND</p>
                 <?php } } ?>
            </tbody>
        </table>
            <?php echo $this->Form->end(); ?>
        <button class="delete_all" style="margin-left: 0.2%;float: left;margin-top: 2%; margin-right: 1%;" name="delete" value="Activate" onclick=" <?php if (@$url[2] == 'user') { ?>$('#mbc').attr({'action': './useractivateall'});<?php } else { ?>$('#mbc').attr({'action': 'Users/activateall'});<?php } ?>$('#mbc').submit();"><?php echo __("Activate All") ?></button>
        <button class="delete_all" style="margin-left: 0.2%;float: left;margin-top: 2%; margin-right: 1%;" name="delete" value="Deactivate" onclick=" <?php if (@$url[2] == 'user') { ?>$('#mbc').attr({'action': './userinactivateall'});<?php } else { ?>$('#mbc').attr({'action': 'Users/inactivateall'});<?php } ?>$('#mbc').submit();"><?php echo __("Deactivate All") ?></button>
        <button onclick="$('#mbc').submit();" value="Delete" class="delete_all" style="margin-left: 0.2%;float: left;margin-top: 2%;"><?php echo __("DeleteAll");?></button>
       
        <ul class="paginator_Admin">
            <div class="first_button1"><?php echo $this->Paginator->prev('Previous ', null, null, array('class' => 'disabled')); ?></div>
                                       <?php echo $this->Paginator->numbers(); ?>
            <div class="first_button1"><?php echo $this->Paginator->next(' Next ', null, null, array('class' => 'disabled')); ?></div>
        </ul>
    </div>

</div>
<style type="text/css">
    .search_username{margin-top: -3%;}
</style>