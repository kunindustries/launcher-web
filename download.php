<html>
	<head>
		<title>Download - KunLauncher</title>
	</head>
	
	<body>		
		<p>
		instructions:<br>

		<?php
		
		$version;
		if ($fh = fopen('version/latest/version.info', 'r')) 
		{
			$version = fgets($fh);
			
			$version = substr($version, strpos($version, '=') + 2, strlen($version));
		}		
		
		echo "1. <a href='version/latest/latest.noexe' target='_blank' download>download kunlauncher version " . $version . "</a><br>";
		
		?>
		
		2. rename to kunlauncher.exe <a href="about.html">(why?)</a><br>
		3. open the thing<br>
		</p>
		
		<p>
			<a href="./apps/">app list</a>
		</p>
	</body>
</html>