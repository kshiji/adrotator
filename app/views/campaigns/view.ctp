<div class="grid_12">
<h2><?php  __('Campaign');?> &raquo; <?php echo $campaign['Campaign']['id']; ?></h2>
    
    <table>
        <tr>
            <td>Sponsor</td>
            <td>
                <?php echo $this->Html->link($campaign['Sponsor']['company_name'], array('controller' => 'sponsors', 'action' => 'view', $campaign['Sponsor']['id'])); ?>
            </td>
        </tr>	
        <tr>
            <td>Caption</td>
            <td><?php echo $campaign['Campaign']['caption']; ?></td>
		</tr>	
		<tr>
		    <td>Image</td>
		    <td>
			<?php 
		    $thumbURL = $this->Image->getThumbnail('Campaign',$campaign['Campaign']['image'], "icon");
		    $largeURL = $this->Image->getImage('Campaign',$campaign['Campaign']['image']);
		    echo $this->Html->link( 
		        $this->Html->image($largeURL), 
		        $largeURL,
		        array("class"=>'colorbox', "escape"=>false, "title"=>$campaign["Campaign"]["caption"])
		      ); 
		    ?>
		    </td>
		</tr>
		<tr>
		    <td>Link:</td>
		    <td>
		        <?php echo $this->Html->link($campaign['Campaign']['link'], $campaign['Campaign']['link']); ?>
            </td>
        </tr>
	</table>
</div>

