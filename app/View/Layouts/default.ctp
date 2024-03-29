<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array(
                '/front/css/bootstrap.min',
                '/front/css/style',
                '/front/fonts/stylesheet',
                '/front/font-awesome/css/font-awesome')
             );
             echo $this->Html->script(array(
                 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
                 'jquery-ui-1.10.3.min',
                 'bootstrap.min'
             ));
                
             
             
            

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>   
        
</head>
<body role="document">
    
	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
    
</body>
</html>
