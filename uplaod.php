<?php 
// uplaod.php

if(isset($_FILES['sample_image'])) 
{   

    $extention=  pathinfo($_FILES['sample_image']['name'], PATHINFO_EXTENSION);

    $new_name = time().'.'.$extention;
    move_uploaded_file($_FILES['sample_image']['tmp_name'],'images/'. $new_name );

    $data = array(
        'image_source' => 'images/'.$new_name
    );

    echo json_encode($data);

}
