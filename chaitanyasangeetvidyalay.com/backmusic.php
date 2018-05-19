<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
<link href="css/bgaudioplayer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bgaudioplayer.js"></script>
</head>
<body>

<audio id="mybgplayer">
<source src="dtph.mp3" type="audio/mpeg">
</audio>

<div id="mybgplayerui" class="bgplayerui" align=center>
<img class="play" src="img/play.gif" data-pausesrc="img/pause.gif" /> <img class="rewind" src="img/restart.gif" style="position:relative; left:-4px" /> <div class="volume"></div>
</div>

<script>
var playerinstance=bgaudioplayer({
	audioid: 'mybgplayer', // id of audio element
	audiointerface: 'mybgplayerui', // id of corresponding UI div
	autoplay: true, // auto play music?
	persistTimeLine: true, // Persist player's current timeline/ volume when moving from page to page?
	volume: 0.1, // Default volume (0.0 to 1.0)
	volumelevels: 15 // # of volume bars to show in UI
})
</script>

</body>
</html>
