<?php echo $this->element('/header1'); ?>

<div class="container_outer">
        	<div class="container">
            	<div class="alert">
                <div class="col-sm-7">
                	<i class="fa fa-warning"></i>
                    Alert:MEMBERS CAN'T CONTACT YOU!
               	</div>
                <div class="col-sm-5">
                	<p>Your EMAIL Addressis Still Unconfirmed <br/>
                    	<a href="#">Click Here</a> to Confotm Your Email Now
                    </p>
                </div>
            </div>
        </div>
        
        <div class="profile_out">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sidebar_left">
                            <div class="profile">
                                <?php if ($profiles['User']['image'] != "") { ?>
                                <?php 
                                    $g= unserialize($profiles['User']['image']);
                                       foreach($g as $gal) {
                                        echo $this->Html->image('../files/user/'.$gal
                                       ,array('alt'=>'','width' => '217', 'height' => '250',));
                                break;
                                    }
                                   ?>
                 <!--echo $this->Html->image('../files/user/' . $profiles['User']['image'], array('width' => '217', 'height' => '250', 'alt' => ''));--> 
                            	<?php } else {
                            ?>
                                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQopgCIrVIo6CRpz1KlB928tsY4LxNT9OobLpVG1DjUyiivSg7sUA" width="217" height="250" alt="">
                                <?php } ?>
                                <h4><?php echo $profiles['User']['username'];?></h4>
                                <p>Lorem Ipsum dummy text</p>
                                <p>Profile Completion: <?php echo $puser;?>% 
                                    <span>Complete my profile <a href="<?php echo $this->Html->url('/Users/editprofile/'.$profiles['User']['id']);?>">Edit Profile</a></span></p>
                            </div>
                            
                            <div class="search_woman">
                            	<h4>Search for Women</h4>
                        <?php  echo $this->Form->create('User'); ?>
                                <ul>
                                	<li>
                                    	<p>Between the ages of:</p>
                                        <span>
                                            <select name="data[User][seeking_age_min]">
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </span>
                                        <span>
                                            OR
                                        </span>
                                        <span>
                                            <select name="data[User][seeking_age_max]">
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </span>
                                    </li>
                                    <li>
                                    	Photos only<input name="" type="checkbox" value="">
                                    </li>
                                    <li>Located in United Kingdom:</li>
                                    <li><button name="submit">Search</button></li>
                                </ul>
                                <?php echo $this->Form->end(); ?>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="sidebar_right">
                            <h1>Women Near Me</h1>
                           <div class="all_type">
                               
                           		<div class="row">
                                           <?php foreach($allData as $allDatas){ ?> 
                                  <div class="col-sm-3 col-xs-6">
                                    	<div class="all_img_box">
                                            <?php if ($allDatas['User']['image'] != "") { ?>
                                <?php  
                                    $g= unserialize($allDatas['User']['image']);
                                       foreach($g as $gal) { ?>
                        <a href="<?php echo $this->Html->url('/Users/myprofile/'.$allDatas['User']['id']); ?>"><?php echo $this->Html->image('../files/user/' . $gal,array('width' => '135', 'height' => '172', 'alt' => '')); ?></a>                                       
                              <?php  break;
                                    }
                                   ?>
                                       <?php } else {
                                           ?> <a href="<?php echo $this->Html->url('/Users/myprofile/'.$allDatas['User']['id']); ?>"><img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt="" width="135" height="172"></a>
                                <?php } ?>
                                            <span><?php echo $allDatas['User']['username'];?></span>
                                            <p><?php echo $allDatas['User']['current_location'];?> </p>
                                            
                                        </div>
                                    </div>
                               <?php } ?>                                   
                                   
                                    
                                </div>
                           </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
  </div>
<?php echo $this->element('/footer'); ?>
<style>
    .profile a {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: rgb(144, 18, 22);
    border: 1px solid #901216;
    color: rgb(255, 255, 255);
    margin-left: 18px;
    padding: 3px;
}
.search_woman li button{
    background-attachment: scroll;
    background-clip: border-box;
    background-color: rgb(164, 49, 51);
    background-image: none;
    background-origin: padding-box;
    background-position: 0 0;
    background-repeat: repeat;
    background-size: auto auto;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: rgb(255, 255, 255);
    float: left;
    margin-top: 12px;
    padding-bottom: 8px;
    padding-left: 38px;
    padding-right: 38px;
    padding-top: 8px;
    width: auto;
}    
.all_img_box{
    height: 250px;
}
</style>