<?php
function fileupload($file,$ext,$size,$target){
    $error=[];
    $size=$size*1024*1024;//bytes
    if($file){
if($file['size']<=$size){//check the size
    $ext_arr=explode('.',$file['name']);
$myExt = end($ext_arr);
if(in_array($myExt,$ext)){
$name = time().".".$myExt;
if(move_uploaded_file($file['tmp_name'],$target."/".$name)){
    $error['success']['ar']="تم الرفع بنجاح و عقبال عندكم"; 
    $error['success']['eng']="The file has been uploaded";
    $error['name']=$name;
}else{
    $error['loc']['ar']="مجلد الرفع ليس متاح"; 
    $error['loc']['eng']="the upload directory no available";
}

}else{
    $error['ext']['ar']="غير مصرح برفع مثل هذه الملفات"; 
    $error['ext']['eng']="This file extension not available";
}





}else{
    $dSize=$file['size']/(1024*1024);
    $error['size']['eng']="Your file size is $dSize MB";
    $error['size']['ar']="عذرا مساحة الملف $dSize ميجا بايت";
}
    }


return $error;
}
?>