
<?php echo $this->element('header'); ?>
<div class="con_box">
    <div class="container">
        <?php
        $x = $this->Session->flash();
        if ($x) {
            echo $x;
        }
        ?>
        <div class="col-sm-8">
            <div class="con_box_left">
                <div class="row">
                    <div class="bs-example">
                        <div class="modal fade" id="myModel">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title"><img alt="" src="<?php echo $this->webroot;?>front/images/logo1.png"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form_new">
                                            <p>
                                                <span class="col-sm-4"><label>I am:</label></span>
                                                <span class="col-sm-8">
                                                    <select name="data[User][seeking_gender]" id="Inputgender">
                                                        <option value="Man Seeking Woman">Man Seeking Woman</option>
                                                        <option value="Woman Seeking Man">Woman Seeking Man</option>
                                                    </select>
                                                </span>
                                            </p>
                                            <p>
                                                <span class="col-sm-4"><label>Username:</label></span>
                                                <span class="col-sm-8"><input name="data[User][username]" id="Inputusername" type="text" value="" min="4" max="15" maxlength="15"></span>
                                            </p>
                                            <p>
                                                <span class="col-sm-4"><label>Password:</label></span>
                                                <span class="col-sm-8"><input name="data[User][password]" id="Inputpassword" type="password" value="" min="4" max="15" maxlength="15"></span>
                                            </p>
                                            <p>
                                                <span class="col-sm-4"><label>Email Address:</label></span>
                                                <span class="col-sm-8"><input name="data[User][email]" type="text" id="Inputemail" placeholder="Must Be Valid" value="" min="4" max="155" maxlength="155"></span>
                                            </p>
                                            <p>
                                                <span class="col-sm-4"><label>Mobile Phone #:</label></span>
                                                <span class="col-sm-8"><input name="data[User][contact_no]" type="text" id="Inputphoneno" placeholder="Optional" value=""></span>
                                            </p>
                                            <p>
                                                <span class="col-sm-4"><label>City/Postcode:</label></span>
                                                <span class="col-sm-8"><input name="data[User][city]" type="text" id="Inputcity" value=""></span>
                                            </p>
                                            <p>
                                                By clicking 'Create Free Account' I am 18 yrs +, agree to the <a target="_blank" href="#">terms</a> &amp; agree to the use &amp; nature of
                                                <a title="Online Cuties" id="octermsdtup-link" href="#">online cuties</a>, who may contact members for entertainment purposes, updates and offers. 
                                            </p>
                                            <input type="hidden" name="data[User][role]" value="User" id="userRole">
                                            <input type="hidden" name="data[User][status]" value="1" id="userStatus">

                                            <button type="submit" name="submit" class="popup_submit contactsubmit"><h2>Create Free Account »</h2></button>                                

                                        </div>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                </div>

                <?php foreach ($alluser as $allusers) { ?>
                    <div class="col-sm-2 col-xs-6"> 
                        
                        <?php if ($allusers['User']['image'] != "") { ?>
                                <?php  
                                    $g= unserialize($allusers['User']['image']);
                                       foreach($g as $gal) { ?>
                        <a href="#myModal" class="dsd" data-target="#myModal<?php echo $allusers['User']['id']; ?>" data-toggle="modal"><?php echo $this->Html->image('../files/user/' . $gal); ?></a>                                       
                              <?php  break;
                                    }
                                   ?>
                                       <?php } else {
                            ?> <a href="#myModal" class="dsd" data-target="#myModal<?php echo $allusers['User']['id']; ?>" data-toggle="modal"><img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt=""></a>
                                <?php } ?>   
           </div>
<?php } ?> 
            </div>
        </div>
        <div class="col-sm-4">
            <div class="con_box_right">
                <h1> NOW on Your Phone! </h1>
                <span>Private and Free to Sign Up</span>
                <div class="phone_add">
                    <img src="<?php echo $this->webroot; ?>front/images/mobile_add.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('footer'); ?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#flash').fadeOut(8000);
        $('.dsd').on("click", function() {
            $('#myModel').modal('show');
        });
        $('.contactsubmit').on("click", function(event) {
            var g = $('#Inputgender').val();
            var v = $('#Inputusername').val();
            var p = $('#Inputpassword').val();
            var e = $('#Inputemail').val();
            var c = $('#Inputphoneno').val();
            var po = $('#Inputcity').val();
            var r = $('#userRole').val();
            var s = $('#userStatus').val();
            
            if (v == "" || p == "" || e == "" || c == "" || po == "") {
                alert("Please complete all fields properly");
                return false;
            }
           if (v.length < 4) {
                alert("The length of the name must be between 4 and 15");
                return false;
            }            
            if (p.length < 4) {
                alert("The length of the password field must be between 4 and 15");
                return false;
            }
            var res=e.split('@');
            var first=res[1];
            if(first=="gmail.com"){               
            }else {
                alert("please prefare gmail it for faster");
                return false;
            }
            
             var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
            if(c.match(phoneno)){  
                    
               } else {  
                 alert("Please enter a valid mobile number");  
                return false;  
               }
            $.post("<?php echo $this->Html->url('/users/register');?>",{
                "data[User][seeking_gender]":g,
                "data[User][username]":v,
                "data[User][password]":p,
                "data[User][email]":e,
                "data[User][contact_no]":c,
                "data[User][city]":po,
                "data[User][userRole]":r,
                "data[User][userStatus]":s
            },function(d){
               console.log(d);
               if(d.r==1){
                   window.location.href="<?php echo $this->Html->url('/Users/login');?>";
               }
               if(d.error=="username"){
                   alert('Username already exist!!!');
               }
               if(d.error=="email"){
                   alert("that email already has an active account, would you like to go to the login page?");
               }
            });
        });
    });
</script>
<style>
    .popup_submit.contactsubmit{
        background-attachment: scroll;
        background-clip: border-box;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        background-origin: padding-box;
        background-position: 0 0;
        background-repeat: repeat;
        background-size: auto auto;
        border: 0;
        padding: 0;
        margin: 0;
        width: 100%;
        float: left;
    }


</style>