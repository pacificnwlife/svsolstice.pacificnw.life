<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>S/V Solstice 2019</title>

<!-- 1. Add latest jQuery and fancybox files -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


<style type="text/css">
body {
	background-color: #000;
}
body,td,th {
	color: #666;
	font-family: Verdana, Geneva, sans-serif;
}
a:link {
	text-decoration: none;
	color: #666;
}
a:visited {
	text-decoration: none;
	color: #666;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body>
<h2>S/V Solstice 2019</h2>
<h3>
  <?php


// Define a function to output files in a directory
function outputFiles($thumb_folder){
    // Check directory exists or not
    $thumb_folder = 'images/2019_thumb'; //path to thumbnails
	$link = 'images/2019_large'; //path to images

	if(file_exists($thumb_folder) && is_dir($thumb_folder)){
        // Scan the files in this directory
        $result = scandir($thumb_folder);
        
        // Filter out the current (.) and parent (..) directories
        $files = array_diff($result, array('.', '..'));
        
		$capfiles= array_diff($result, array('.', '..'));
		
        if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$thumb_folder/$file")){
                   
				   $capfile=str_replace('_',' ',$file);
				   $capfile=str_replace('-','.',$file);
				   $capfile=rtrim($capfile,'.jpg');
				    // Display filename
                    //echo $capfile . "<br>";
					
					
                     echo '<a href="'.$link.'/'.$file.'" data-fancybox="gallery" data-caption="'.$capfile.'"><img src="'.$thumb_folder.'/'.$file.'" alt="" hspace = "10" vspace="10" />';
                } else if(is_dir("$thumb_folder/$file")){
                    // Recursively call the function if directories found
                    outputFiles("$thumb_folder/$file");
                }
            }
        } else{
            echo "ERROR: No files found in the directory.";
        }
    } else {
        echo "ERROR: The directory does not exist.";
    }
}
 
// Call the function
outputFiles();
?>      
<br />
<br />
<br />
</h3>
  <a href="/index.html"><center>
  Back
</h3>
</body>

</html>