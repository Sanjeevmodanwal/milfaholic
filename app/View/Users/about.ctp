<?php echo $this->element('/header1'); ?>

<div class="container_outer">    
        <div class="profile_out">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"></div>
                    
                    <div class="col-sm-9">
                        <div class="sidebar_right">
                          
                          <div class="profile_new">
                              <h1 style="margin-bottom: 15px !important;">My Profile > Mini Profile</h1>
                            
                            <div class="col-sm-12">
                                <?php echo $this->Form->create('User'); ?>
                            	<div class="pro_info">
                                	<ul>
                                    	<li>
                                            <h3>Profile Title: <?php echo $this->Form->input('profile_title',array('label'=>FALSE,'div'=>FALSE,'class'=>'title_profile'));?></h3>
                                            <p>(your headline)</p>
                                        </li>
                                        <li>
                                            <h3>About You: <?php echo $this->Form->input('about_you', array('label'=>FALSE,'div'=>FALSE,'type' => 'textarea','class'=>'textarea_you','rows'=>'5','cols'=>'40'));?></h3>
                                            <p>(Min Character Count is 30, Max is 500)</p>
                                        </li>
                                        <li>
                                           <h3>You Want: <?php echo $this->Form->input('you_want', array('label'=>FALSE,'div'=>FALSE,'type' => 'textarea','class'=>'textarea_you','rows'=>'5','cols'=>'40'));?></h3>
                                            <p>(Min Character Count is 30, Max is 500)</p>
                                        </li>
                                        <li>                                           
                                            <p><button type="submit" name="submit">Continue</button></p>
                                        </li>
                                    </ul>
                                </div>
                                <?php echo $this->Form->end(); ?>
                            
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
  </div>
<?php echo $this->element('/footer'); ?>
<style>
.profile_new a{
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: rgb(144, 18, 22);
    border: 1px solid #A50F12;
    color: rgb(255, 255, 255);
    font-size: 13px;
    margin-left: 10px;
    padding: 1px 15px;
    text-decoration: none;
}
.title_profile {
    margin-bottom: 5px;
    margin-left: 10px;
    margin-right: 0;
    margin-top: 0;
}.textarea_you {
    margin-bottom: 5px;
    margin-left: 10px;
}
.pro_info button {
    border: 1px solid #901216;
    background-color: rgb(144, 18, 22);    
    color: rgb(255, 255, 255);
    float: left;
    margin-left: 33%;
    padding: 1%;
    width: 22%;
}
</style>