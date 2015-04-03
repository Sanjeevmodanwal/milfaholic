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
                                        <div class="col-sm-2"> <h3>Gender : </h3></div>
                                      <div class="col-sm-10">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_gender]" id="inlineCheckbox1" value="Women" <?php if($seekingedit['User']['seeking_gender'] == 'Women'){?> checked="checked" <?php }?>> Women
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_gender]" id="inlineCheckbox2" value="Men" <?php if($seekingedit['User']['seeking_gender'] == 'Men'){?> checked="checked" <?php }?>> Men
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_gender]" id="inlineCheckbox3" value="Couples" <?php if($seekingedit['User']['seeking_gender'] == 'Couples'){?> checked="checked" <?php }?>> Couples
                                          </label>                                          
                                      </div>
                                        </li> 
                                      <li>
                                        <div class="col-sm-2"> <h3>Hair : </h3></div>
                                      <div class="col-sm-10">
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_hair]" id="inlineRadio1" value="Blonde" <?php if($seekingedit['User']['seeking_hair'] == 'Blonde'){?> checked="checked" <?php }?>> Blonde
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_hair]" id="inlineRadio2" value="Brunette" <?php if($seekingedit['User']['seeking_hair'] == 'Brunette'){?> checked="checked" <?php }?>> Brunette
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_hair]" id="inlineRadio3" value="Gray" <?php if($seekingedit['User']['seeking_hair'] == 'Gray'){?> checked="checked" <?php }?>> Gray
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_hair]" id="inlineRadio4" value="Black" <?php if($seekingedit['User']['seeking_hair'] == 'Black'){?> checked="checked" <?php }?>> Black
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_hair]" id="inlineRadio5" value="Redhead" <?php if($seekingedit['User']['seeking_hair'] == 'Redhead'){?> checked="checked" <?php }?>> Redhead
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_hair]" id="inlineRadio6" value="Other" <?php if($seekingedit['User']['seeking_hair'] == 'Other'){?> checked="checked" <?php }?>> Other
                                      </label>
                                      </div>                                           
                                        </li>
                                       <li>
                                           <div class="col-sm-2"> <h3>Eyes : </h3></div>                                        
                                      <div class="col-sm-10">
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_eyes]" id="inlineRadio1" value="Black" <?php if($seekingedit['User']['seeking_eyes'] == 'Black'){?> checked="checked" <?php }?>> Black
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_eyes]" id="inlineRadio2" value="Green" <?php if($seekingedit['User']['seeking_eyes'] == 'Green'){?> checked="checked" <?php }?>> Green
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_eyes]" id="inlineRadio3" value="Blue" <?php if($seekingedit['User']['seeking_eyes'] == 'Blue'){?> checked="checked" <?php }?>> Blue
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_eyes]" id="inlineRadio4" value="Hazel" <?php if($seekingedit['User']['seeking_eyes'] == 'Hazel'){?> checked="checked" <?php }?>> Hazel
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_eyes]" id="inlineRadio5" value="Brown" <?php if($seekingedit['User']['seeking_eyes'] == 'Brown'){?> checked="checked" <?php }?>> Brown
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][seeking_eyes]" id="inlineRadio6" value="Gray" <?php if($seekingedit['User']['seeking_eyes'] == 'Gray'){?> checked="checked" <?php }?>> Gray
                                      </label>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Marital Status : </h3></div>
                                      <div class="col-sm-10">
                                              <?php echo $this->Form->select('seeking_marital_status',array('Attached'=>'Attached','Divorced'=>'Divorced',
                                                        'Married'=>'Married','Separated'=>'Separated',
                                                        'Single'=>'Single')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Race : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_race',array('Does Not Matter'=>'Does Not Matter','American Indian'=>'American Indian',
                                                        'Asian'=>'Asian','Black / African American'=>'Black / African American',
                                                        'Caucasian / White'=>'Caucasian / White','East Indian'=>'East Indian',
                                                        'Hispanic'=>'Hispanic','Other'=>'Other')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Religion : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_religion',array('Does Not Matter'=>'Does Not Matter','Protestant'=>'Protestant',
                                                        'Muslim'=>'Muslim','None'=>'None')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Education : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_education',array('Does Not Matter'=>'Does Not Matter','High School'=>'High School',
                                                        'Intermediate'=>'Intermediate','Master Degree'=>'Master Degree','Advanced Degree'=>'Advanced Degree')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                                                                
                                        <li>
                                        <div class="col-sm-2"> <h3>Income : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_annual_income',array('Does Not Matter'=>'Does Not Matter','< $15,000'=>'< $15,000',
                                                        '$15,000 - $25,000'=>'$15,000 - $25,000','$25,000 - $35,000'=>'$25,000 - $35,000',
                                                        '$35,000 - $50,000'=>'$35,000 - $50,000','$50,000 - $100,000'=>'$50,000 - $100,000',
                                                        '$100,000+'=>'$100,000+')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>  
                                        <li>
                                        <div class="col-sm-2"> <h3>Height : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_height',array('Does Not Matter'=>'Does Not Matter','Tall'=>'Tall',
                                                        'Average'=>'Average','Short'=>'Short')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li> 
                                        <li>
                                        <div class="col-sm-2"> <h3>Weight : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_Weight',array('Does Not Matter'=>'Does Not Matter','Heavy'=>'Heavy',
                                                        'Average'=>'Average','Light'=>'Light')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>                                        
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Body Type : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_body_type',array('Does Not Matter'=>'Does Not Matter','Light'=>'Light',
                                                        'Average'=>'Average','Medium'=>'Medium',
                                                        'Slim'=>'Slim','large'=>'large')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Smoking : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_smoking',array('Does Not Matter'=>'Does Not Matter','I am non-smoker'=>'I am non-smoker',
                                                        'I am light smoker'=>'I am light smoker','I am heavy smoker'=>'I am heavy smoker')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Drinking : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_drinking',array('Does Not Matter'=>'Does Not Matter','I do not drink at all'=>'I do not drink at all',
                                                        'I am heavy drinker'=>'I am heavy drinker')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>I Want To Meet For : </h3></div>
                                      <div class="col-sm-10">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_for]" id="inlineCheckbox1" value="Women" <?php if($seekingedit['User']['seeking_for'] == 'Women'){?> checked="checked" <?php }?>> Friends
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_for]" id="inlineCheckbox2" value="Men" <?php if($seekingedit['User']['seeking_for'] == 'Men'){?> checked="checked" <?php }?>> Swingers
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_for]" id="inlineCheckbox3" value="Orgasms" <?php if($seekingedit['User']['seeking_for'] == 'Orgasms'){?> checked="checked" <?php }?>> Orgasms
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_for]" id="inlineCheckbox3" value="Sex" <?php if($seekingedit['User']['seeking_for'] == 'Sex'){?> checked="checked" <?php }?>> Sex
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][seeking_for]" id="inlineCheckbox3" value="Fetish" <?php if($seekingedit['User']['seeking_for'] == 'Fetish'){?> checked="checked" <?php }?>> Fetish
                                          </label>
                                      </div>
                                        </li>                                        
                                        <li>
                                        <div class="col-sm-2"> <h3>Their Age : </h3></div>
                                      <div class="col-sm-10">                                         
                                          <?php echo '<select name="data[User][seeking_age_min]">' . PHP_EOL;
                                            for ($d=18; $d<=60; $d++) {
                                                echo '  <option value="' . $d . '">' . $d . '</option>' . PHP_EOL;
                                            }
                                            echo '</select>' . PHP_EOL;
                                          ?>to
                                          <?php echo '<select name="data[User][seeking_age_max]">' . PHP_EOL;
                                            for ($d=18; $d<=60; $d++) {
                                                echo '  <option value="' . $d . '">' . $d . '</option>' . PHP_EOL;
                                            }
                                            echo '</select>' . PHP_EOL;
                                          ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Their Distance From Me : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('seeking_drinking',array('Does Not Matter'=>'Does Not Matter','Within 5 miles'=>'Within 5 miles',
                                                        'Within 10 miles'=>'Within 10 miles','Within 25 miles'=>'Within 25 miles',
                                                        'Within 50 miles'=>'Within 50 miles','Within 100 miles'=>'Within 100 miles',
                                                        'Within 300 miles'=>'Within 300 miles','Within 500 miles'=>'Within 500 miles',
                                                        'Within 1000 miles'=>'Within 1000 miles','Within my city / town'=>'Within my city / town',
                                                        'Within my state'=>'Within my state','Within my country'=>'Within my country')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
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
    width: 25%;
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