<div class="grid_10">
    <h2>Sponsors</h2>  
</div>
<div class="grid_2">
    <div class="actions" style="margin-top:10px;">
        <?php echo $this->Html->link("New Sponsor", "/sponsors/add"); ?>
    </div>
</div>
<div class="clear"></div>

<div class="grid_12">
    
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('contact_name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sponsors as $sponsor):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sponsor['Sponsor']['id']; ?>&nbsp;</td>
		<td><?php echo $sponsor['Sponsor']['company_name']; ?>&nbsp;</td>
		<td><?php echo $sponsor['Sponsor']['contact_name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sponsor['Sponsor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sponsor['Sponsor']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sponsor['Sponsor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sponsor['Sponsor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="clear"></div>

