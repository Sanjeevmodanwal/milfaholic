<?php 
//debug($this->passedArgs); exit;
$revData = $this->request->data['User'] ? $this->request->data['User'] : array();
?>

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
                    
                    <div class="search_woman">
                            	<h4>Search for Women</h4>
                                <?php echo $this->Form->create('User',array('url'=>'/Users/search')); ?>
                                <ul>
                                	<li>
                                    	<p>Between the ages of:</p>
                                        <span>
                                            <select name="data[User][seeking_age_min]">   
                                                <option value="18"<?php if ($_GET['seeking_age_min'] == 18) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 18){echo 'selected="selected"';} ?>>18</option>
                                                <option value="19"<?php if ($_GET['seeking_age_min'] == 19) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 19){echo 'selected="selected"';} ?>>19</option>
                                                <option value="20"<?php if ($_GET['seeking_age_min'] == 20) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 20){echo 'selected="selected"';} ?>>20</option>
                                                <option value="21"<?php if ($_GET['seeking_age_min'] == 21) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 21){echo 'selected="selected"';} ?>>21</option>
                                                <option value="22"<?php if ($_GET['seeking_age_min'] == 22) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 22){echo 'selected="selected"';} ?>>22</option>
                                                <option value="23"<?php if ($_GET['seeking_age_min'] == 23) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 23){echo 'selected="selected"';} ?>>23</option>
                                                <option value="24"<?php if ($_GET['seeking_age_min'] == 24) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 24){echo 'selected="selected"';} ?>>24</option>
                                                <option value="25"<?php if ($_GET['seeking_age_min'] == 25) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 25){echo 'selected="selected"';} ?>>25</option>
                                                <option value="26"<?php if ($_GET['seeking_age_min'] == 26) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 26){echo 'selected="selected"';} ?>>26</option>
                                                <option value="27"<?php if ($_GET['seeking_age_min'] == 27) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 27){echo 'selected="selected"';} ?>>27</option>
                                                <option value="28"<?php if ($_GET['seeking_age_min'] == 28) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 28){echo 'selected="selected"';} ?>>28</option>
                                                <option value="29"<?php if ($_GET['seeking_age_min'] == 29) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 29){echo 'selected="selected"';} ?>>29</option>
                                                <option value="30"<?php if ($_GET['seeking_age_min'] == 30) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 30){echo 'selected="selected"';} ?>>30</option>
                                                <option value="31"<?php if ($_GET['seeking_age_min'] == 31) { ?> selected="selected" <?php } if($revData['seeking_age_min'] == 31){echo 'selected="selected"';} ?>>31</option>
                                            </select>
                                        </span>
                                        <span>
                                            OR
                                        </span>
                                        <span>
                                            <select name="data[User][seeking_age_max]">
                                                <option value="18"<?php if ($_GET['seeking_age_max'] == 18) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 18){echo 'selected="selected"';} ?>>18</option>
                                                <option value="19"<?php if ($_GET['seeking_age_max'] == 19) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 19){echo 'selected="selected"';} ?>>19</option>
                                                <option value="20"<?php if ($_GET['seeking_age_max'] == 20) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 20){echo 'selected="selected"';} ?>>20</option>
                                                <option value="21"<?php if ($_GET['seeking_age_max'] == 21) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 21){echo 'selected="selected"';} ?>>21</option>
                                                <option value="22"<?php if ($_GET['seeking_age_max'] == 22) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 22){echo 'selected="selected"';} ?>>22</option>
                                                <option value="23"<?php if ($_GET['seeking_age_max'] == 23) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 23){echo 'selected="selected"';} ?>>23</option>
                                                <option value="24"<?php if ($_GET['seeking_age_max'] == 24) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 24){echo 'selected="selected"';} ?>>24</option>
                                                <option value="25"<?php if ($_GET['seeking_age_max'] == 25) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 25){echo 'selected="selected"';} ?>>25</option>
                                                <option value="26"<?php if ($_GET['seeking_age_max'] == 26) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 26){echo 'selected="selected"';} ?>>26</option>
                                                <option value="27"<?php if ($_GET['seeking_age_max'] == 27) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 27){echo 'selected="selected"';} ?>>27</option>
                                                <option value="28"<?php if ($_GET['seeking_age_max'] == 28) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 28){echo 'selected="selected"';} ?>>28</option>
                                                <option value="29"<?php if ($_GET['seeking_age_max'] == 29) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 29){echo 'selected="selected"';} ?>>29</option>
                                                <option value="30"<?php if ($_GET['seeking_age_max'] == 30) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 30){echo 'selected="selected"';} ?>>30</option>
                                                <option value="31"<?php if ($_GET['seeking_age_max'] == 31) { ?> selected="selected" <?php } if($revData['seeking_age_max'] == 31){echo 'selected="selected"';} ?>>31</option>
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
                    
                    
                    
                    <div class="col-sm-3">
                        <div class="sidebar_left">
                            <div class="profile">
                                <?php if ($myprofiles['User']['image'] != "") { ?>
                                <?php 
                                    $g= unserialize($myprofiles['User']['image']);
                                       foreach($g as $gal) {
                                        echo $this->Html->image('../files/user/'.$gal
                                       ,array('alt'=>'','width' => '217', 'height' => '250',));
                                break;
                                    }
                                   ?> 
                            	<?php } else { ?>
                                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQopgCIrVIo6CRpz1KlB928tsY4LxNT9OobLpVG1DjUyiivSg7sUA" width="217" height="250" alt="">
                                <?php } ?>
                                <h4><?php echo $myprofiles['User']['username'];?></h4>
                                <p>Lorem Ipsum dummy text</p>
                                <p>Profile Completion: 0% <span>Complete my profile</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="sidebar_right">
                            <h1>Women Near Me</h1>
                           <div class="all_type">
                               
                           		<div class="row">
                                        <?php if ($users_search) { ?>
                <?php if (isset($users_search)) {
                    foreach ($users_search as $allDatas) { ?>
                                  <div class="col-sm-3 col-xs-6">
                                    	<div class="all_img_box">
                                           <a href="<?php echo $this->Html->url('/Users/myprofile/'.$allDatas['User']['id']); ?>">
                <?php echo $this->Html->image('../files/user/' . $allDatas['User']['image'], array('width' => '135', 'height' => '172', 'alt' => '')); ?>
                                            <span><?php echo $allDatas['User']['username'];?></span>
                                            <p><?php echo $allDatas['User']['current_location'];?> </p>
                                            </a>
                                        </div>
                                    </div>
                            <div class="pagination_bb">                   
                            <?php }
                            if($access){
                                echo $this->Paginator->numbers(array('url'=>'access:post'));
                            }else{
                                echo $this->Paginator->numbers();
                            }
                             } } else { { ?>
                             <div style="font-size: 18px;"><?php echo __('There are No Data Found');?></div> 
                         <?php } } ?>
                           </div>
                                    
                                   
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
.pagination_bb {
    float: left;
    margin-top: 10px;
    width: 100%;
}
</style>