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
                                        <div class="col-sm-2"> <h3>My Hair : </h3></div>
                                      <div class="col-sm-10">
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][hair_color]" id="inlineRadio1" value="Blonde"<?php if($physicalEdit['User']['hair_color'] == 'Blonde'){?> checked="checked" <?php }?>> Blonde
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][hair_color]" id="inlineRadio2" value="Brunette"<?php if($physicalEdit['User']['hair_color'] == 'Brunette'){?> checked="checked" <?php }?>> Brunette
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][hair_color]" id="inlineRadio3" value="Gray"<?php if($physicalEdit['User']['hair_color'] == 'Gray'){?> checked="checked" <?php }?>> Gray
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][hair_color]" id="inlineRadio4" value="Black"<?php if($physicalEdit['User']['hair_color'] == 'Black'){?> checked="checked" <?php }?>> Black
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][hair_color]" id="inlineRadio5" value="Redhead"<?php if($physicalEdit['User']['hair_color'] == 'Redhead'){?> checked="checked" <?php }?>> Redhead
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][hair_color]" id="inlineRadio6" value="Other" <?php if($physicalEdit['User']['hair_color'] == 'Other'){?> checked="checked" <?php }?>> Other
                                      </label>
                                      </div>                                           
                                        </li>
                                       <li>
                                           <div class="col-sm-2"> <h3>My Eyes : </h3></div>
                                        
                                      <div class="col-sm-10">
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][eye_color]" id="inlineRadio1" value="Black" <?php if($physicalEdit['User']['eye_color'] == 'Black'){?> checked="checked" <?php }?>> Black
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][eye_color]" id="inlineRadio2" value="Green" <?php if($physicalEdit['User']['eye_color'] == 'Green'){?> checked="checked" <?php }?>> Green
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][eye_color]" id="inlineRadio3" value="Blue" <?php if($physicalEdit['User']['eye_color'] == 'Blue'){?> checked="checked" <?php }?>> Blue
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][eye_color]" id="inlineRadio4" value="Hazel" <?php if($physicalEdit['User']['eye_color'] == 'Hazel'){?> checked="checked" <?php }?>> Hazel
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][eye_color]" id="inlineRadio5" value="Brown" <?php if($physicalEdit['User']['eye_color'] == 'Brown'){?> checked="checked" <?php }?>> Brown
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="data[User][eye_color]" id="inlineRadio6" value="Gray" <?php if($physicalEdit['User']['eye_color'] == 'Gray'){?> checked="checked" <?php }?>> Gray
                                      </label>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Marital Status : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('marital_status',array('Attached'=>'Attached','Divorced'=>'Divorced',
                                                        'Married'=>'Married','Separated'=>'Separated',
                                                        'Single'=>'Single')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Race : </h3></div>
                                      <div class="col-sm-10">
                                           <?php echo $this->Form->select('race',array('Does Not Matter'=>'Does Not Matter','American Indian'=>'American Indian',
                                                        'Asian'=>'Asian','Black / African American'=>'Black / African American',
                                                        'Caucasian / White'=>'Caucasian / White','East Indian'=>'East Indian',
                                                        'Hispanic'=>'Hispanic','Other'=>'Other')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Education : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('education',array('Does Not Matter'=>'Does Not Matter','High School'=>'High School',
                                                        'Intermediate'=>'Intermediate','Master Degree'=>'Master Degree','Advanced Degree'=>'Advanced Degree')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Religion : </h3></div>
                                      <div class="col-sm-10">
                                           <?php echo $this->Form->select('religion',array('Does Not Matter'=>'Does Not Matter','Protestant'=>'Protestant',
                                                        'Muslim'=>'Muslim','None'=>'None')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>                                        
                                        <li>
                                        <div class="col-sm-2"> <h3>Income : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('annual_income',array('Will Tell You Later'=>'Will Tell You Later','< $15,000'=>'< $15,000',
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
                                          <?php echo $this->Form->select('height',array('Will Tell You Later'=>'Will Tell You Later','< 5 ft. 0 in.'=>'< 5 ft. 0 in.',
                                                        '5 ft. 1 in.'=>'5 ft. 1 in.','5 ft. 3 in.'=>'5 ft. 3 in.','5 ft. 4 in.'=>'5 ft. 4 in.',
                                                        '5 ft. 5 in.'=>'5 ft. 5 in.','5 ft. 6 in.'=>'5 ft. 6 in.','5 ft. 7 in.'=>'5 ft. 7 in.',
                                                        '5 ft. 8 in.'=>'5 ft. 8 in.')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li> 
                                        <li>
                                        <div class="col-sm-2"> <h3>Weight : </h3></div>
                                      <div class="col-sm-10">
                                         <?php echo $this->Form->input('weight', array('label'=>FALSE,'div'=>FALSE,'type' => 'text','class'=>'textarea_you'));?> 
                                      (Example: Will Tell You Later, in pounds, in kilos)
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Body Type : </h3></div>
                                      <div class="col-sm-10">
                                           <?php echo $this->Form->select('body_type',array('Will Tell You Later'=>'Will Tell You Later','Light'=>'Light',
                                                        'Average'=>'Average','Medium'=>'Medium',
                                                        'Slim'=>'Slim','large'=>'large')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Birthday : </h3></div>
                                      <div class="col-sm-10">
                     <!--http://stackoverflow.com/questions/16785810/get-selected-month-value-in-dropdown-list-if-using-an-array-->
                     <!--http://stackoverflow.com/questions/10829424/displaying-the-list-of-months-using-mktime-for-the-year-2012-->
                                          <?php
                                            echo '<select name="data[User][age_month]">' . PHP_EOL;
                                            for ($m=1; $m<=12; $m++) {
                                                echo '  <option value="' . $m . '" "selected=selected">' . date('F', mktime(0,0,0,$m, 1, date('Y'))) . '</option>' . PHP_EOL;
                                             // echo '  <option value="' . $m . '" if($sel_mnth == $m) echo "selected=\'selected\'";>' . date('M', mktime(0,0,0,$m)) . '</option>' . PHP_EOL;
                                            }
                                            echo '</select>' . PHP_EOL; 
                                          ?>
                                          <?php echo '<select name="data[User][age_day]">' . PHP_EOL;
                                            for ($d=1; $d<=31; $d++) {
                                                echo '  <option value="' . $d . '" "selected=selected">' . $d . '</option>' . PHP_EOL;
                                            }
                                            echo '</select>' . PHP_EOL;
                                          ?>
                                          <?php $cutoff = 1970;
                                                $now = date('Y');
                                          echo '<select name="data[User][age_year]">' . PHP_EOL;
                                            for ($y=$now; $y>=$cutoff; $y--) {
                                                echo '  <option value="' . $y . '"  "selected=selected">' . $y . '</option>' . PHP_EOL;
                                            }
                                            echo '</select>' . PHP_EOL;
                                          ?>
                                         
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Do You Smoke? : </h3></div>
                                      <div class="col-sm-10">
                                           <?php echo $this->Form->select('smoking',array('Will Tell You Later'=>'Will Tell You Later','I am non-smoker'=>'I am non-smoker',
                                                        'I am light smoker'=>'I am light smoker','I am heavy smoker'=>'I am heavy smoker')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>Do You Drink? : </h3></div>
                                      <div class="col-sm-10">
                                          <?php echo $this->Form->select('drinking',array('Will Tell You Later'=>'Will Tell You Later','I do not drink at all'=>'I do not drink at all',
                                                        'I am heavy drinker'=>'I am heavy drinker')
                                                        ,array('empty' => '::: Please Select :::'))
                                                ?>
                                      </div>
                                        </li>
                                        <li>
                                        <div class="col-sm-2"> <h3>What Language(s) Do you Speak? : </h3></div>
                                      <div class="col-sm-10">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox1" value="English" <?php if($physicalEdit['User']['language'] == 'English'){?> checked="checked" <?php }?>> English
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox2" value="Spanish" <?php if($physicalEdit['User']['language'] == 'Spanish'){?> checked="checked" <?php }?>> Spanish
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox3" value="Korean" <?php if($physicalEdit['User']['language'] == 'Korean'){?> checked="checked" <?php }?>> Korean
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox4" value="Italian" <?php if($physicalEdit['User']['language'] == 'Italian'){?> checked="checked" <?php }?>> Italian
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox5" value="French" <?php if($physicalEdit['User']['language'] == 'French'){?> checked="checked" <?php }?>> French
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox6" value="Japanese" <?php if($physicalEdit['User']['language'] == 'Japanese'){?> checked="checked" <?php }?>> Japanese
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox7" value="German" <?php if($physicalEdit['User']['language'] == 'German'){?> checked="checked" <?php }?>> German
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox8" value="Swedish" <?php if($physicalEdit['User']['language'] == 'Swedish'){?> checked="checked" <?php }?>> Swedish
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="data[User][language]" id="inlineCheckbox9" value="Tagalog" <?php if($physicalEdit['User']['language'] == 'Tagalog'){?> checked="checked" <?php }?>> Tagalog
                                          </label>
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