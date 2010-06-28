<?php 
foreach($campaigns as $key => $data) {
    $campaigns[$key]["path"] = $this->Html->url($this->Image->getThumbnail('Campaign', $data["image"], $size));
}
echo json_encode($campaigns);

