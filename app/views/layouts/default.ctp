<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		AdRotator
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
		    'reset',
		    'text',
		    '960',
		    'cake.generic',
		    "colorbox"
		    ));
		    
        echo $this->Html->script(array(
            "http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js",
            "jquery.colorbox-min" 
            ));		    

		echo $scripts_for_layout;
	?>
</head>
<body>
        
	<div id="container" class="container_12">

		<div id="header">
		    <div class="grid_11">
			<h1>Ad Rotator</h1>
			</div>
			<div id="identity" class="grid_1">
    			<?php echo $this->Html->link("Logout", "/users/logout"); ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>

		<div id="menu">
		    <ul>    
		        <li><?php echo $this->Html->link("Home", "/"); ?></li>
		        <li><?php echo $this->Html->link("Sponsors", "/sponsors"); ?></li>
		        <li><?php echo $this->Html->link("Campaigns", "/campaigns"); ?></li>
		        <li><?php echo $this->Html->link("Documentation", "/pages/documentation"); ?></li>
		    </ul>
		    <div class="clear"></div>
		</div>
		<div class="clear"></div>
		
		<div id="content">

			<?php 
			    echo $this->Session->flash(); 
			    echo $this->Session->flash('auth');
			 ?>

			<?php echo $content_for_layout; ?>
		    <div class="clear"></div>
		</div>
		<div id="footer">
		    <div class="grid_12">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
