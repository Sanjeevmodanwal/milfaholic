<?php echo $this->element('/header1'); ?>
<div class="container_outer">    
        <div class="profile_out">
            <div class="container">
                <div class="row">
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
                                       <?php } else {
                            ?>
                                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQopgCIrVIo6CRpz1KlB928tsY4LxNT9OobLpVG1DjUyiivSg7sUA" width="217" height="250" alt="">
                                <?php } ?>
                                <h4><?php echo $myprofiles['User']['username'];?></h4>
                                <p>Lorem Ipsum dummy text</p>
                                <p>Profile Completion: <?php echo $puser;?>% 
                                  <span>Complete my profile</span>                                    
                                </p>
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
                          
                          <div class="profile_new">
                              <h1 style="margin-bottom: 15px !important;">Profile of <?php echo $myprofiles['User']['username'];?>
                                    <!--<a href="#">Add To Friends</a>-->
                                </h1>
                              <p>"<?php echo $myprofiles['User']['profile_title'];?>" <br>Available In Chandigarh,Active and visiting occasionally</p>
                            <div class="col-sm-4">
                            <div class="profile_new_img">
                                <?php if ($myprofiles['User']['image'] != "") { ?>
                                <?php  
                                    $g= unserialize($myprofiles['User']['image']);
                                       foreach($g as $gal) {
                                        echo $this->Html->image('../files/user/'.$gal
                                       ,array('alt'=>'','id'=>'imgsd'));
                                break;
                                    }
                                   ?>
                                <?php } else {
                            ?>
                                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQopgCIrVIo6CRpz1KlB928tsY4LxNT9OobLpVG1DjUyiivSg7sUA" width="217" height="250" alt="">
                                <?php } ?>
                            </div>
                            </div>
                              <script>
                                function changeImage(a) {
                                    document.getElementById("imgsd").src=a.src;
                                    
                                }
                             </script>
                            <div class="col-sm-8">
                            	<div class="pro_info">
                                	<ul>
                                        <li>
                                        <h3>Member Photos 
                                          <a href="<?php echo $this->Html->url('/Users/upload_photo/'.$myprofiles['User']['id']);?>">Edit</a>
                                        </h3>
                                             <?php if($myprofiles['User']['image'] !== ""){?>
                                             <?php  
                                                    $g= unserialize($myprofiles['User']['image']);
                                                       foreach($g as $gal) {
                                                        echo $this->Html->image('../files/user/'.$gal
                                                       ,array('alt'=>'','onClick'=>'changeImage(this)','height'=>'120','width'=>'160'));
                                                    }
                                                   ?>
                                            <?php } else { ?>
                                               <p>(no photos)</p>
                                           <?php } ?>
                                        </li>
                                    	<li>
                                        <h3>Private Photo Albums 
                                            <a href="<?php echo $this->Html->url('/Useralbumimages/private_photo/'.$myprofiles['User']['id']);?>">Edit</a></h3>
                                            <?php //if(isset($myprofiles['Useralbumimage']['file'])){
                                            if($myprofiles['Useralbumimage'][0]['file'] != ""){?>
                                             <?php  
                                                    $gl= unserialize($myprofiles['Useralbumimage'][0]['file']);
                                                       foreach($gl as $gall) {
                                                        echo $this->Html->image('../files/useralbum/'.$gall
                                                       ,array('alt'=>'','height'=>'120','width'=>'160'));
                                                    }
                                                   ?>
                                            <?php }  else  { ?>
                                               <p>(no private photos)</p>
                                            <?php } ?>                                        
                                        </li>
                                        <li>
                                           <h3>Member Videos 
                                               <a href="<?php echo $this->Html->url('/Uservideos/video/'.$myprofiles['User']['id']);?>">Edit</a></h3>
                                            <?php
                                            if($myprofiles['Uservideo']['video']){?>
                                             <?php  
                                                    $vd= $myprofiles['Uservideo']['video'];
                                                       foreach($vd as $vdo) {
                                                        echo $this->Html->image('../files/video/'.$vdo
                                                       ,array('alt'=>'','height'=>'120','width'=>'160'));
                                                    }
                                                   ?>
                                            <?php } else { ?>
                                               <p>(no video profile)</p>
                                            <?php } ?>
                                            
                                        </li>
                                        <li>
                                        	<h3>Private Video Albums <a href="<?php echo $this->Html->url('/Users/physical/'.$myprofiles['User']['id']);?>">Edit</a></h3>
                                            <p>(no private videos)</p>
                                        </li>
                                    </ul>
                                </div>
                            
                            </div>
                          </div>
                          <div class="profile_new">
                          	<h2>About Me <a href="<?php echo $this->Html->url('/Users/about/'.$myprofiles['User']['id']);?>">Edit</a></h2>
                                <p class="lokk"><?php echo $myprofiles['User']['about_you'];?></p>
                          </div>
                          
                          <div class="profile_new">
                          	<h2>I'm Looking For <a href="<?php echo $this->Html->url('/Users/about/'.$myprofiles['User']['id']);?>">Edit</a></h2>
                                <p class="lokk"><?php echo $myprofiles['User']['you_want'];?></p>
                          </div>
                          
                          <div class="profile_new">
                          	<div class="col-sm-6">
                            	<div class="pro_info2">
                                	<ul>
                                    	<li>
                                            <h3>Physical Attributes <a href="<?php echo $this->Html->url('/Users/physical/'.$myprofiles['User']['id']);?>">Edit</a></h3>
                                        </li>
                                        <li>
                                            <p><strong>Gender:</strong> <?php echo $myprofiles['User']['gender'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Race:</strong> <?php echo $myprofiles['User']['race'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Height:</strong> <?php echo $myprofiles['User']['height'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Weight:</strong> <?php echo $myprofiles['User']['weight'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Body Type:</strong> <?php echo $myprofiles['User']['body_type'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Hair Color:</strong> <?php echo $myprofiles['User']['hair_color'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Eye Color:</strong> <?php echo $myprofiles['User']['eye_color'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Age:</strong> 
                                 <!--http://stackoverflow.com/questions/19521146/calculate-age-based-on-date-of-birth-->
                                       <!--https://eval.in/84187-->
                                                <?php
                                                      $year = $myprofiles["User"]["age_year"];
                                                      $month_age = $myprofiles["User"]["age_month"];
                                                      $dy = $myprofiles["User"]["age_day"];
                                                    # object oriented
                                                    $from = new DateTime($year."-". $month_age ."-". $dy);
                                                    $to   = new DateTime('today');
                                                    echo $from->diff($to)->y, "\n";
                                                    ?>
                                                
                                            </p>
                                        </li>
                                    </ul>
                                    
                                    <ul>
                                    	<li>
                                        	<h3>Personal Attributes <a href="<?php echo $this->Html->url('/Users/physical/'.$myprofiles['User']['id']);?>">Edit</a></h3>
                                        </li>
                                        <li>
                                            <p><strong>Marital Status:</strong> <?php echo $myprofiles['User']['marital_status'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Smoking:</strong> <?php echo $myprofiles['User']['smoking'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Drinking:</strong> <?php echo $myprofiles['User']['drinking'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Speaks:</strong> <?php echo $myprofiles['User']['language'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Religion:</strong> <?php echo $myprofiles['User']['religion'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Education:</strong> <?php echo $myprofiles['User']['education'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Annual Income:</strong> <?php echo $myprofiles['User']['annual_income'];?></p>
                                        </li>
                                        
                                    </ul>
                                </div>

                            </div>
                            <div class="col-sm-6">
                            
                            	<div class="pro_info2">
                                	<ul>
                                    	<li>
                                        	<h3>Seeking <a href="<?php echo $this->Html->url('/Users/seeking/'.$myprofiles['User']['id']);?>">Edit</a></h3>
                                        </li>
                                        <li>
                                            <p><strong>Gender:</strong> <?php echo $myprofiles['User']['seeking_gender'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>For:</strong> <?php echo $myprofiles['User']['seeking_for'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Distance from me:</strong> <?php echo $myprofiles['User']['seeking_distance'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Age:</strong> <?php echo $myprofiles['User']['seeking_age_min'];?> - <?php echo $myprofiles['User']['seeking_age_max'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Height:</strong> <?php echo $myprofiles['User']['seeking_height'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Weight:</strong> <?php echo $myprofiles['User']['seeking_Weight'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Body Type:</strong> <?php echo $myprofiles['User']['seeking_body_type'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Drinking:</strong> <?php echo $myprofiles['User']['seeking_drinking'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Religion:</strong> <?php echo $myprofiles['User']['seeking_religion'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Education:</strong> <?php echo $myprofiles['User']['seeking_education'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Annual Income:</strong> <?php echo $myprofiles['User']['seeking_annual_income'];?></p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                          </div>
                          
                          <div class="profile_new">
                          	<h1>Recent Gifts Received <a href="#">Send a Gift</a></h1>
                          </div> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
  </div>
<?php echo $this->element('/footer'); ?>
<style>
    .profile_new_img img{height: 320px;}
    .lokk{margin-top: 10px;}
    .pro_info2 a {
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
.pro_info img {
    padding: 5px;
}
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
</style>