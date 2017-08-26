<!-- This cloud was designed and developed By Abhiram sreekumar(Random sasi)-->


<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
	 
		echo '
	 
<!doctype html>


<html>

<head>
   

   
<link rel="shortcut icon" href="./.favicon.ico">
   
<title>System files</title>

  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../assets/js/ie/html5shiv.js"></script>
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/ie8.css" />
<link rel="stylesheet" href="./.style.css">
 

<script src="./.sorttable.js">
</script>

</head>


<body>

<body class="landing">
		<div id="page-wrapper">


			<!-- Header -->
				<header id="header" class="reveal">
					<h1>Sasi cloud!</h1>
					<nav id="nav">
						<ul>
                                                                                                                                  <li style="white-space: nowrap;"><a href="../home.php#upl" class="button">File upload</a></li>
						                  <li style="white-space: nowrap;"><a href="../home.php" class="button">Home</a></li>
                                                                                                                            	<li style="white-space: nowrap;"><a href="../logout.php" class="button">Log out</a></li>
							
</ul>							
</nav>						
</header>					
<div class="row">
<div class="12u">

<section class="box">
				
	
<h1>Uploaded files</h1>


<div class="table-wrapper">
	
<table class="sortable">
	   
<thead>
		
<tr>
			
<th>Filename</th>
			
<th>Type</th>
			
<th>Size</th>
			
<th>Date Modified</th>
		
</tr>
	    
</thead>
	    
<tbody>
</div>
</section>

<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/ie/respond.min.js"></script>
			<script src="assets/js/main.js"></script>

	
<ul class="dropotron level-0 right" style="user-select: none; position: absolute; z-index: 1000; left: 1006.02px; top: 47px; opacity: 1; display: none;">
									<li style="white-space: nowrap;"><a href="generic.html" style="display: block;">Generic</a></li>
									<li style="white-space: nowrap;"><a href="contact.html" style="display: block;">Contact</a></li>
									<li style="white-space: nowrap;"><a href="elements.html" style="display: block;">Elements</a></li>
									<li class="opener" style="user-select: none; cursor: pointer; white-space: nowrap;">
										<a href="#" style="display: block;">Submenu</a>
										<ul style="user-select: none; display: none; position: absolute; z-index: 1001;" class="dropotron level-1">
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option One</a></li>
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option Two</a></li>
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option Three</a></li>
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option Four</a></li>
										</ul>
									</li>
								</ul><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Layouts</a><a class="link depth-1" href="generic.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Generic</a><a class="link depth-1" href="contact.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Contact</a><a class="link depth-1" href="elements.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Elements</a><a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Submenu</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option One</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Two</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Three</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Four</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Sign Up</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div>
		


';
		
	 } 
	 else
	 {
	 	echo '<script>window.location.replace("../index.php");</script>';
		
	 }
?>



<?php
	
// Adds pretty filesizes
	
function pretty_filesize($file) {
		
$size=filesize($file);
		
if($size<1024){$size=$size." Bytes";}
		
elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
		
elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
		
else{$size=round($size/1073741824, 1)." GB";}
		
return $size;
	}

 	
// Checks to see if veiwing hidden files is enabled
	
if($_SERVER['QUERY_STRING']=="hidden")
	
{$hide="";
	 $ahref="./";
	 $atext="Hide";}
	
else
	
{$hide=".";
	 $ahref="./?hidden";
	 $atext="Show";}

	 
// Opens directory
	 $myDirectory=opendir(".");

	
// Gets each entry
	while($entryName=readdir($myDirectory)) {
	 
  $dirArray[]=$entryName;
	}

	
// Closes directory
	closedir($myDirectory);

	
// Counts elements in array
	$indexCount=count($dirArray);

	
// Sorts files
	sort($dirArray);

	
// Loops through the array of files
	
for($index=0; $index < $indexCount; $index++) {

	
// Decides if hidden files should be displayed, based on query above.
	  
  if(substr("$dirArray[$index]", 0, 1)!=$hide) {

	
// Resets Variables
		
$favicon="";
		
$class="file";

	
// Gets File Names
		
$name=$dirArray[$index];
		
$namehref=$dirArray[$index];

	
// Gets Date Modified
		
$modtime=date("M j Y g:i A", filemtime($dirArray[$index]));
		
$timekey=date("YmdHis", filemtime($dirArray[$index]));


	
// Separates directories, and performs operations on those directories
		
if(is_dir($dirArray[$index]))
		
{
				
$extn="&lt;Directory&gt;";
				
$size="&lt;Directory&gt;";
				
$sizekey="0";
				
$class="dir";

			
// Gets favicon.ico, and displays it, only if it exists.
				
if(file_exists("$namehref/favicon.ico"))
					
{
						
$favicon=" style='background-image:url($namehref/favicon.ico);'";
						$extn="&lt;Website&gt;";
					}

			// Cleans up . and .. directories
				if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;"; $favicon=" style='background-image:url($namehref/.favicon.ico);'";}
				if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
		}

	// File-only operations
		else{
			// Gets file extension
			$extn=pathinfo($dirArray[$index], PATHINFO_EXTENSION);

			// Prettifies file type
			switch ($extn){
				case "png": $extn="PNG Image"; break;
				case "jpg": $extn="JPEG Image"; break;
				case "jpeg": $extn="JPEG Image"; break;
				case "svg": $extn="SVG Image"; break;
				case "gif": $extn="GIF Image"; break;
				case "ico": $extn="Windows Icon"; break;

				case "txt": $extn="Text File"; break;
				case "log": $extn="Log File"; break;
				case "htm": $extn="HTML File"; break;
				case "html": $extn="HTML File"; break;
				case "xhtml": $extn="HTML File"; break;
				case "shtml": $extn="HTML File"; break;
				
case "php": $extn="PHP Script"; break;
				
case "js": $extn="Javascript File"; break;
				
case "css": $extn="Stylesheet"; break;

				
case "pdf": $extn="PDF Document"; break;
				
case "xls": $extn="Spreadsheet"; break;
				
case "xlsx": $extn="Spreadsheet"; break;
				
case "doc": $extn="Microsoft Word Document"; break;
				
case "docx": $extn="Microsoft Word Document"; break;

				
case "zip": $extn="ZIP Archive"; break;
				
case "htaccess": $extn="Apache Config File"; break;
				
case "exe": $extn="Windows Executable"; break;

				
default: if($extn!=""){$extn=strtoupper($extn)." File";} else{$extn="Unknown";} break;
			
}

			
// Gets and cleans up file size
				
$size=pretty_filesize($dirArray[$index]);
				
$sizekey=filesize($dirArray[$index]);
		
}

	
// Output
	 echo("
		
<tr class='$class'>
			
<td><a href='./$namehref'$favicon class='name'>$name</a></td>
			
<td><a href='./$namehref'>$extn</a></td>
			
<td sorttable_customkey='$sizekey'><a href='./$namehref'>$size</a></td>
			
<td sorttable_customkey='$timekey'><a href='./$namehref'>$modtime</a></td>
		</tr>");
	   }
	}
	?>

	    </tbody>
	</table>

	</div>
</body>
</html>

	   


		
	
	

		
	


