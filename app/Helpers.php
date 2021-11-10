<?php

function getProductSingleImage($product=null){
    if($product->pro_Img=='')
        return 'no-image.png';
    else
        return $productImages = explode('/**/',$product->pro_Img)[0];
}

function getProductImages($product=null){
    return array_filter(explode('/**/',$product->pro_Img));
}
?>
