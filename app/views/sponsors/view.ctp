<div class="grid_12">
    <h2>Sponsor &raquo; <?php echo $sponsor["Sponsor"]["company_name"]; ?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['company_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['contact_name']; ?>
			&nbsp;
		</dd>
	</dl>
	<hr/>
</div>
<div class="clear"></div>

<div class="related">
    <div class="grid_10">
    	<h3><?php __('Related Campaigns');?></h3>
	</div>
	<div class="grid_2">
	    <div class="actions">
            <?php echo $this->Html->link(__('New Campaign', true), array('controller' => 'campaigns', 'action' => 'add'));?> </li>
	    </div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_12">
		
	<?php if (!empty($sponsor['Campaign'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Link'); ?></th>
		<th><?php __('caption'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sponsor['Campaign'] as $campaign):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $campaign['id'];?></td>
					<td>
		<?php 
		    $thumbURL = $this->Image->getThumbnail('Campaign',$campaign['image'], "icon");
		    $largeURL = $this->Image->getImage('Campaign',$campaign['image']);
		    echo $this->Html->link( 
		        $this->Html->image($thumbURL), 
		        $largeURL,
		        array("class"=>'colorbox', "escape"=>false, "title"=>$campaign["caption"])
		      ); 
		?>
		</td>
			<td><?php echo $campaign['link'];?></td>
			<td><?php echo $campaign["caption"]; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'campaigns', 'action' => 'view', $campaign['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'campaigns', 'action' => 'edit', $campaign['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'campaigns', 'action' => 'delete', $campaign['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $campaign['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
    <?php endif; ?>
    </div>
    <div class="clear"></div>
</div>
<script>
    $(document).ready(function() {
        $("a.colorbox").colorbox();
    });
</script>
