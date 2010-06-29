<div class="grid_12">
<h2>Campaigns</h2>
<?php 
    echo $this->Form->create('Campaign', array('type'=>'file'));
    echo $this->Form->hidden("is_new_sponsor");

?>
	<fieldset>
 		<legend><?php __('New Ad Campaign'); ?></legend>
   		<div id="choose-sponsor">
        	<?php echo $this->Form->input('sponsor_id', array('div'=>false)); ?>
        	<br/>
            <button type="button" id="btn-new-sponsor" class="submit">Create A New Sponsor</button>
        </div>
        <div id="new-sponsor" style="display:none;">
            <?php
            	echo $this->Form->input("Sponsor.company_name",array("label"=>"New Sponsor","div"=>false));
            ?>
            <button type="button" id="btn-choose-sponsor">Choose An Existing Sponsor</button>
       </div>
	    <?php 
		echo $this->Form->input('image', array('type'=>'file'));
		echo $this->Form->input('link');
		echo $this->Form->input("caption");
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<script>

    $(document).ready(function() {
        
        if($("#CampaignIsNewSponsor").val() == "yes") 
        {
             $("#choose-sponsor").slideUp();
             $("#new-sponsor").slideDown();
             $("#CampaignIsNewSponsor").val("yes");
        }
    
        /** enter a new sponsor */
        $("#btn-new-sponsor").click(function() {
             $("#choose-sponsor").slideUp();
             $("#new-sponsor").slideDown();
             $("#CampaignIsNewSponsor").val("yes");
        });

        /** choose an existing sponsor */
        $("#btn-choose-sponsor").click(function() {
            $("#new-sponsor").slideUp();
            $("#choose-sponsor").slideDown();
            $("#CampaignIsNewSponsor").val("no");            
        });
    });
</script>
