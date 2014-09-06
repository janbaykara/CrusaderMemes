<?
$url = $_GET['u'];

//gets the data from a URL  
function get_tiny_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
}

//test it out!
$new_url = get_tiny_url($url);

//log the meme
$file = 'memelog.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $new_url."\n";
// Write the contents back to the file
file_put_contents($file, $current);

//returns http://tinyurl.com/65gqpp
echo $new_url;
?>