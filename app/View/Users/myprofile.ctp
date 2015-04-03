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
                 <?php //echo $this->Html->image('../files/user/' . $loggeduser['User']['image'], array('width' => '217', 'height' => '250', 'alt' => '')); ?>
                                <h4><?php echo $myprofiles['User']['username'];?></h4>
                                <p>Lorem Ipsum dummy text</p>
                                <p>Profile Completion: <?php echo $puser;?>% 
                                  <span>Complete my profile <a href="<?php echo $this->Html->url('/Users/editprofile/'.$myprofiles['User']['id']);?>">Edit Profile</a></span>                                    
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
                              <h1 style="margin-bottom: 15px !important;">Profile of <?php echo $profilewoman['User']['username'];?>
                                    <a href="#">Add To Friends</a>
                                </h1>
                            <p>""Available In Chandigarh,Active and visiting occasionally</p>
                            <div class="col-sm-4">
                            <div class="profile_new_img">
                        <?php echo $this->Html->image('../files/user/' .$profilewoman['User']['image'], array('alt' => '')); ?>
                            </div>
                            </div>
                            <div class="col-sm-8">
                            	<div class="pro_info">
                                	<ul>
                                    	<li>
                                        	<h3>Private Photo Albums</h3>
                                            <p>(no private photos)</p>
                                        </li>
                                        <li>
                                        	<h3>Member Videos</h3>
                                            <p>(no video profile)</p>
                                        </li>
                                        <li>
                                        	<h3>Private Video Albums</h3>
                                            <p>(no private videos)</p>
                                        </li>
                                    </ul>
                                </div>
                            
                            </div>
                          </div>
                          <div class="profile_new">
                          	<h2>Profile of <?php echo $profilewoman['User']['username'];?></h2>
                          </div>
                          
                          <div class="profile_new">
                          	<h2>I'm Looking For</h2>
                                <p class="lokk">I would enjoy having someone who is not afraid of exploring new adventures! It really doesn't matter what as 
                                    long as one enjoys learning, exploring, thinking outside the box mentality!
                                </p>
                          </div>
                          
                          <div class="profile_new">
                          	<div class="col-sm-6">
                            	<div class="pro_info2">
                                	<ul>
                                    	<li>
                                        	<h3>Physical Attributes</h3>
                                        </li>
                                        <li>
                                            <p><strong>Gender:</strong> <?php echo $profilewoman['User']['gender'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Race:</strong> <?php echo $profilewoman['User']['race'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Height:</strong> <?php echo $profilewoman['User']['height'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Weight:</strong> <?php echo $profilewoman['User']['weight'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Body Type:</strong> <?php echo $profilewoman['User']['body_type'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Hair Color:</strong> <?php echo $profilewoman['User']['hair_color'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Eye Color:</strong> <?php echo $profilewoman['User']['eye_color'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Age:</strong> 
                                                <?php
                                                      $year = $myprofiles["User"]["age_year"];
                                                      $moth = $myprofiles["User"]["age_month"];
                                                      $dy = $myprofiles["User"]["age_day"];
                                                    # object oriented
                                                    $from = new DateTime($year."-". $moth ."-". $dy);
                                                    $to   = new DateTime('today');
                                                    echo $from->diff($to)->y, "\n";
                                                    ?>
                                            </p>
                                        </li>
                                    </ul>
                                    
                                    <ul>
                                    	<li>
                                        	<h3>Personal Atributes</h3>
                                        </li>
                                        <li>
                                            <p><strong>Marital Status:</strong> <?php echo $profilewoman['User']['marital_status'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Smoking:</strong> <?php echo $profilewoman['User']['smoking'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Drinking:</strong> <?php echo $profilewoman['User']['drinking'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Speaks:</strong> <?php echo $profilewoman['User']['speaks'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Religion:</strong> <?php echo $profilewoman['User']['religion'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Education:</strong> <?php echo $profilewoman['User']['education'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Annual Income:</strong> <?php echo $profilewoman['User']['annual_income'];?></p>
                                        </li>
                                        
                                    </ul>
                                </div>

                            </div>
                            <div class="col-sm-6">
                            
                            	<div class="pro_info2">
                                	<ul>
                                    	<li>
                                        	<h3>Seeking</h3>
                                        </li>
                                        <li>
                                            <p><strong>Gender:</strong> <?php echo $profilewoman['User']['seeking_gender'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>For:</strong> <?php echo $profilewoman['User']['seeking_for'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Distance from me:</strong> <?php echo $profilewoman['User']['seeking_distance'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Age:</strong> <?php echo $profilewoman['User']['seeking_age'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Height:</strong> <?php echo $profilewoman['User']['seeking_height'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Weight:</strong> <?php echo $profilewoman['User']['seeking_Weight'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Body Type:</strong> <?php echo $profilewoman['User']['seeking_body_type'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Drinking:</strong> <?php echo $profilewoman['User']['seeking_drinking'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Religion:</strong> <?php echo $profilewoman['User']['seeking_religion'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Education:</strong> <?php echo $profilewoman['User']['seeking_education'];?></p>
                                        </li>
                                        <li>
                                            <p><strong>Annual Income:</strong> <?php echo $profilewoman['User']['seeking_annual_income'];?></p>
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
    .lokk{margin-top: 10px;}
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
</style>