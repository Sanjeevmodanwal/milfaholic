<div class="navbar navbar-default" role="navigation">
    <?php echo $this->element('/admin/header'); ?>
</div>

<div class="sidebar-nav">
    <?php echo $this->element('/admin/sidebar'); ?>
</div>


<div class="content">
    <div class="header">

        <h1 class="page-title">View Admin</h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'admin_index')); ?>">Admins Management</a> </li>
            <li class="active">View Admin</li>
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
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label><h4>Plan ID:</h4></label><br>
                    <?php echo h($user['User']['plan_id']); ?>
                </div>
                <div class="form-group">
                    <label><h4>Role:</h4></label><br>
                    <?php echo h($user['User']['role']); ?>
                </div>
                <div class="form-group">
                    <label><h4>Username:</h4></label><br>
                    <?php echo h($user['User']['username']); ?>
                </div>
                <div class="form-group">
                    <label><h4>Email:</h4></label><br>
                    <?php echo h($user['User']['email']); ?>
                </div>
                <div class="form-group">
                    <label><h4>Gender:</h4></label><br>
                    <?php echo h($user['User']['gender']); ?>
                </div>
                <div class="form-group">
                    <label><h4>image:</h4></label><br>
                    <?php echo h($user['User']['image']); ?>
                </div>
                <div class="form-group">
                    <label><h4>city:</h4></label><br>
                    <?php echo h($user['User']['city']); ?>
                </div>
                <div class="form-group">
                    <label><h4>country:</h4></label><br>
                    <?php echo h($user['User']['country']); ?>
                </div> <div class="form-group">
                    <label><h4>contact_no:</h4></label><br>
                    <?php echo h($user['User']['contact_no']); ?>
                </div>
                <div class="form-group">
                    <label><h4>gender:</h4></label><br>
                    <?php echo h($user['User']['gender']); ?>
                </div> <div class="form-group">
                    <label><h4>race:</h4></label><br>
                    <?php echo h($user['User']['race']); ?>
                </div> <div class="form-group">
                    <label><h4>height:</h4></label><br>
                    <?php echo h($user['User']['height']); ?>
                </div>
                <div class="form-group">
                    <label><h4>weight:</h4></label><br>
                    <?php echo h($user['User']['weight']); ?>
                </div> <div class="form-group">
                    <label><h4>body_type:</h4></label><br>
                    <?php echo h($user['User']['body_type']); ?>
                </div> <div class="form-group">
                    <label><h4>hair_color:</h4></label><br>
                    <?php echo h($user['User']['hair_color']); ?>
                </div>
                <div class="form-group">
                    <label><h4>eye_color:</h4></label><br>
                    <?php echo h($user['User']['eye_color']); ?>
                </div>
                <div class="form-group">
                    <label><h4>age:</h4></label><br>
                    <?php echo h($user['User']['age']); ?>
                </div>
                <div class="form-group">
                    <label><h4>marital_status:</h4></label><br>
                    <?php echo h($user['User']['marital_status']); ?>
                </div>
                <div class="form-group">
                    <label><h4>smoking:</h4></label><br>
                    <?php echo h($user['User']['smoking']); ?>
                </div>
                <div class="form-group">
                    <label><h4>drinking:</h4></label><br>
                    <?php echo h($user['User']['drinking']); ?>
                </div>
                <div class="form-group">
                    <label><h4>speaks:</h4></label><br>
                    <?php echo h($user['User']['speaks']); ?>
                </div>		
                <div class="form-group">
                    <label><h4>religion:</h4></label><br>
                    <?php echo h($user['User']['religion']); ?>
                </div>
                <div class="form-group">
                    <label><h4>education:</h4></label><br>
                    <?php echo h($user['User']['education']); ?>
                </div>
                <div class="form-group">
                    <label><h4>drinking:</h4></label><br>
                    <?php echo h($user['User']['drinking']); ?> 
                </div>
                <div class="form-group">
                    <label><h4>annual_income:</h4></label><br>
                    <?php echo h($user['User']['annual_income']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_gender:</h4></label><br>
                    <?php echo h($user['User']['seeking_gender']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_for:</h4></label><br>
                    <?php echo h($user['User']['seeking_for']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_distance:</h4></label><br>
                    <?php echo h($user['User']['seeking_distance']); ?>
                </div>  
                <div class="form-group">
                    <label><h4>seeking_age:</h4></label><br>
                    <?php echo h($user['User']['seeking_age']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_body_type:</h4></label><br>
                    <?php echo h($user['User']['seeking_body_type']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_height:</h4></label><br>
                    <?php echo h($user['User']['seeking_height']); ?>
                </div>
                <div class="form-group">
                    <label><h4>Seeking Weight:</h4></label><br>
                    <?php echo h($user['User']['seeking_Weight']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_smoking:</h4></label><br>
                    <?php echo h($user['User']['seeking_smoking']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_drinking:</h4></label><br>
                    <?php echo h($user['User']['seeking_drinking']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_religion:</h4></label><br>
                    <?php echo h($user['User']['seeking_religion']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_education:</h4></label><br>
                    <?php echo h($user['User']['seeking_education']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_annual_income:</h4></label><br>
                    <?php echo h($user['User']['seeking_annual_income']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_age_min:</h4></label><br>
                    <?php echo h($user['User']['seeking_age_min']); ?>
                </div>
                <div class="form-group">
                    <label><h4>seeking_age_max:</h4></label><br>
                    <?php echo h($user['User']['seeking_age_max']); ?>
                </div>
                <div class="form-group">
                    <label><h4>Status:</h4></label><br>
                    <?php
                    if ($user['User']['status'] == 1) {
                        echo 'Active';
                    } else {
                        echo "Deactive";
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label><h4>IP:</h4></label><br>
                    <?php echo h($user['User']['ip']); ?>
                </div>
                <div class="form-group">
                    <label><h4>current_location:</h4></label><br>
                    <?php echo h($user['User']['current_location']); ?>
                </div>
            </div>
        </div>
    </div>