<div class="grid_8 prefix_2 suffix_2">
<?php

echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->inputs(array(
	'legend' => __('Login', true),
	'username',
	'password'
));
echo $this->Form->end('Login');
?>
</div>
