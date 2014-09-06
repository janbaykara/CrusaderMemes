<?php
$request = $_GET['r'];

switch($request) {
	case "dTop": $request = "event_normal_extension_top.dds"; break;
	case "dPanel": $request = "event_normal_bg.dds"; break;
	case "defaultEvent": $request = "Courtiers_looking_scandalized.dds"; break;
	case "dOption": $request = "event_normal_option.dds"; break;
	case "dExtensionBottom": $request = "event_normal_extension.dds"; break;
	default: $request = $request;
}

$image = new Imagick("img/".$request);

header('Content-type: image/png');
$image->setImageFormat('png'); 
echo $image;
?>