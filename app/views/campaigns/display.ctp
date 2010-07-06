<?php 


foreach($campaigns as $key => $data) {
    if($size = "image") {
        $campaigns[$key]["path"] = $this->Html->url($this->Image->getImage('Campaign', $data["image"]));
    } else {
        $campaigns[$key]["path"] = $this->Html->url($this->Image->getThumbnail('Campaign', $data["image"], $size));
    }
}
echo json_encode($campaigns);

