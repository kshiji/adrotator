<?php 

class ImageHelper extends AppHelper 
{
    public function getThumbnail($model, $fileName, $size = "small") {
        return sprintf("/uploads/%s/image/thumb/%s/%s", strtolower($model), $size, $fileName);
    }
    
    public function getImage($model, $fileName) {
        return sprintf("/uploads/%s/image/%s", strtolower($model), $fileName);
    }
    
}
