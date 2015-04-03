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
                                <?php echo $this->Form->create('Useralbumimage',array('type'=>'file','enctype'=>'multipart/form-data')); ?>
                                <p> A photo has proven to be one of the single most important piece of information you can put in your profile. 
                                    Most people are visually oriented. No matter if you meet someone in person or on our site, the initial attraction 
                                    will most likely be visual. We highly recommend you include a photo in your profile. Profiles with photos are viewed 
                                    up to 10 times more than those without a photo.</p>
                                
                            	<div class="pro_info">
                                	<ul>
                                    	<li>
                                            <h3>Photo Manager: <?php echo $this->Form->input('file.',array('type'=>'file','multiple'=>'multiple','label'=>FALSE,'div'=>FALSE,'class'=>'profile_photo'));?></h3>
                                            <p>(Note: Select the unlimited photo)</p>
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
.profile_photo {
    margin-bottom: 5px;
    margin-left: 10px;
    margin-right: 0;
    margin-top: 0;
}
.pro_info button {
    border: 1px solid #901216;
    background-color: rgb(144, 18, 22);    
    color: rgb(255, 255, 255);
    float: left;
    margin-left: 40%;
    padding: 1%;
    width: 22%;
}
#UserUploadPhotoForm > p {
    float: left;
    text-align: justify;
    width: 100%;
}
</style>