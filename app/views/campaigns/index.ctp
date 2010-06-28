<div class="grid_10">
    <h2>Campaigns</h2>
</div>
<div class="grid_2">
    <div class="actions" style="margin-top:10px;">
        <?php echo $this->Html->link("New Campaign", "/campaigns/add"); ?>
    </div>
</div>

<div class="grid_12">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('link');?></th>
			<th><?php echo $this->Paginator->sort('Sponsor','Sponsor.company_name');?></th>			
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($campaigns as $campaign):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $campaign['Campaign']['id']; ?>&nbsp;</td>
		<td>
		<?php 
		    $thumbURL = $this->Image->getThumbnail('Campaign',$campaign['Campaign']['image'], "icon");
		    $largeURL = $this->Image->getImage('Campaign',$campaign['Campaign']['image']);
		    echo $this->Html->link( 
		        $this->Html->image($thumbURL), 
		        $largeURL,
		        array("class"=>'colorbox', "escape"=>false, "title"=>$campaign["Campaign"]["caption"])
		      ); 
		?>
		</td>
		<td><?php echo $this->Html->link($campaign['Campaign']['link'],$campaign['Campaign']['link'],array('target'=>'_blank')); ?>&nbsp;</td>		
		<td>
			<?php echo $this->Html->link($campaign['Sponsor']['company_name'], array('controller' => 'sponsors', 'action' => 'view', $campaign['Sponsor']['id'])); ?>
		</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $campaign['Campaign']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $campaign['Campaign']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $campaign['Campaign']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $campaign['Campaign']['id'])); ?>
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
<script>
    $(document).ready(function() {
        $("a.colorbox").colorbox();
    });
</script>


