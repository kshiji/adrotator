<div class="grid_12">
<h2>Campaigns</h2>
<?php echo $this->Form->create('Campaign', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Edit Ad Campaign'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sponsor_id');
		echo $this->Form->input('image',array('type'=>'file'));
		echo $this->Form->input('link');
		echo $this->Form->input('caption');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

