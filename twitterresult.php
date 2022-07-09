<?php
error_reporting(0);
$servicesstring="";
$mainservices=$_POST["services"];
if(empty($mainservices)){
$mainservices=[];
}
$typedservicesstring=filter_var($_POST["servicesstring"], FILTER_SANITIZE_STRING);
$typedservicesarray=explode(",",$typedservicesstring);
$services=array_filter(array_merge($mainservices,$typedservicesarray));
$serviceslength=count($services);
$services=array_filter($services);
$mergeservices="";
for($x=0;$x<$serviceslength;){
$mergeservices.="OR%20".$services[$x]."%20";
$x++;
}








$citystring=filter_var($_POST["city"], FILTER_SANITIZE_STRING);
$cityarray=explode(",",$citystring);
$citylength=count($cityarray);
$mergecity="";
for($x=0;$x<$citylength;$x++){
    $mergecity.="%20".$cityarray[$x]."%20";
    }

  

$url="https://twitter.com/search?q=verified".$mergecity."%28".$mergeservices."%29+-%22not+verified%22+-%22unverified%22+-%22needed%22+-%22required%22&f=live";
echo '<script type="text/javascript">window.location.replace("'.$url.'");</script>'
?>


