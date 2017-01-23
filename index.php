<?php 
	header('Content-Type: text/html; charset=utf-8', true); 

	$fs = scandir('.');
	$files = array();
	if(count($fs)){
		foreach($fs as $f => $file){
			if($file === '.' || $file === '..' || $file === 'index.php'){
				continue;
			}
			$fileExploded = explode(".", $file);
			$files[] = array(
				"name" => $fileExploded[0],
				"url" => $file,
			);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Ссылки</title>
	<style>
.rounded {
counter-reset: li; 
list-style: none; 
font: 14px "Trebuchet MS", "Lucida Sans";
padding: 0;
text-shadow: 0 1px 0 rgba(255,255,255,.5);
}
.rounded a {
position: relative;
display: block;
padding: .4em .4em .4em 5em;
margin: .5em 0;
background: #DAD2CA;
color: #444;
text-decoration: none;
border-radius: .3em;
transition: .3s ease-out;
}
.rounded a:hover {
background: #E9E4E0;
}
.rounded a:hover:before {
transform: rotate(360deg);
}
.rounded a:before {
content: counter(li);
counter-increment: li;
position: absolute;
left: -.3em;
top: 50%;
margin-top: -1.3em;
background: #8FD4C1;
height: 2em;
width: 4em;
line-height: 2em;
border: .3em solid white;
text-align: center;
font-weight: bold;
border-radius: 2em;
transition: all .3s ease-out;
}		
	</style>
</head>
<body>
<?php if(count($files)){ ?>
<ol class="rounded">
<?php foreach($files as $f => $file){ ?>
	<li class="linkCls">
		<a href="<?= $file['url']; ?>" target="_blank"><?= $file['name']; ?></a>
	</li>
<?php } ?>
</ol>
<?php } ?>
</body>
</html>