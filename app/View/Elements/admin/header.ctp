

<div class="navbar-header">          
          <a class="" href="index.html">
              <span class="navbar-brand" style="padding-top: 6px;">
                  <a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'admin_index'));?>">
                 <?php echo $this->Html->image('../files/staticpage/'.$bannerLogo['Staticpage']['image'],array('width'=>'191','height'=>'60','alt'=>''));?>
                      </a>
              </span>
          </a>
        </div>

        <div class="navbar-collapse collapse" style="height: 1px;">
            <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <?php if($loggeduser){ ?>
                <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'admin_profiles')); ?>" class="dropdown-toggle">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>                        
                        <?php echo $loggeduser['User']['username'];?>
                    &nbsp;Profile                        
                </a>
                <?php } ?>
            </li>
            <li class="dropdown hidden-xs">
                  <?php if($loggeduser){ ?>
                <a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'admin_logout'));?>" class="dropdown-toggle">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>Logout
                </a>
                  <?php } ?>
            </li>
          </ul>

        </div>
      <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>
    <style>.navbar-collapse.collapse{height: 70px !important;}</style>