<html>
	<head>
		<title>kunlauncher</title>
	</head>
	
	<body>
		<?php
		
		$version;
		if ($fh = fopen('version/latest/version.info', 'r')) 
		{
			$version = fgets($fh);
			
			$version = substr($version, strpos($version, '=') + 2, strlen($version));
		}		
		
		echo "<a href='version/latest/latest.noexe' target='_blank' download>download kunlauncher version " . $version . "</a>";
		
		?>
		
		<p>
		instructions:<br>
		1. download latest.noexe<br>
		2. rename to kunlauncher.exe<br>
		3. open the thing<br>
		</p>
		
		<p>
			<a href="./apps/">app list</a>
		</p>
	</body>
</html>