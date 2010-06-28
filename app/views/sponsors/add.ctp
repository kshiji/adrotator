<div class="grid_12">
    <h2>Sponsors</h2>
<?php echo $this->Form->create('Sponsor');?>
	<fieldset>
 		<legend><?php __('Add Sponsor'); ?></legend>
	<?php
		echo $this->Form->input('company_name');
		echo $this->Form->input('contact_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

