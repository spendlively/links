<?php
$data = array();
$outFileName = "system.php";
$files = scandir("pages/");

foreach($files as $f => $file){
	if($file === "." || $file === ".." || $file === "list.txt"){
		unset($files[$f]);
	}
}


$regulars = array(
    "xakep" => "@<div\s+class=\"block-article-content-wrapper\">\s*<header>\s*[^$]*?<h3\s+class=\"entry-title\"><a\s+href=\"([^\"]*)\"><span>([^<]*)<\/span><\/a><\/h3>@ui",
    "habr" => "@href=\"([^\"]*)\"\s*class\s*=\s*\"post__title_link\s*\">\s*([^<]*)@ui",
);
// echo "<pre>";
// print_r($files);
// echo "</pre>";
// die();

foreach($files as $file){
    $content = file_get_contents("pages/" . $file);
    // if(preg_match_all("@<h3\s+class=\"entry-title\"><a\s+href=\"([^\"]*)\"><span>([^<]*)<\/span><\/a><\/h3>@ui", $content, $matches)){
    if(preg_match_all($regulars['habr'], $content, $matches)){
// echo "<pre>";
// print_r($matches[2]);
// echo "</pre>";
// die();    	
        foreach($matches[0] as $m => $match){
            $data[] = array(trim($matches[1][$m]), trim($matches[2][$m]));
        }
    }
   // break;
}

echo "<pre>";
print_r(count($data));
print_r($data);
echo "</pre>";
// die();
//echo $content;


file_put_contents($outFileName, file_get_contents("phpHead"));

foreach($data as $d){
    $str = "<li class=\"linkCls\"><a href=\"{$d[0]}\" target=\"_blank\">$d[1]</a></li>";
    file_put_contents($outFileName, $str."\n", FILE_APPEND);
}

file_put_contents($outFileName, file_get_contents("phpTail"), FILE_APPEND);
