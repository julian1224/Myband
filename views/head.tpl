<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>{$title}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/main.css">
</head>
  <span id="playing"> Now playing: {$mp3source} </span> <br>
	<img id="cover" src="images/pose.png" alt="damn"/>
	<audio preload autoplay loop>
	  <source src="media/{$mp3source}" type="audio/mpeg">
	    {$mp3source}
	</audio>
