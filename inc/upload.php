<?php 
$data = array(); 
$data['status'] = false;
$data['msg'] = 'File is empty!';
if(!empty($_FILES['file'])){ 
    $targetDir = "../upload/";
    $allowTypes = array('jpg', 'png'); 
    $fileName = basename($_FILES['file']['name']); 
    $targetFilePath = $targetDir.$fileName; 
    
    if (is_dir($targetDir) && is_writable($targetDir)) {
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){ 
            if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){ 
                $data['status'] = true;
                $data['msg'] = "Successfully uploaded!";
            }else{
                $data['msg'] = 'File moving to folder failed! ';
            } 
        } 
    } else {
        $data['msg'] = 'Upload directory is not writable, or does not exist.';
    }     
} 
echo json_encode($data); 
?>