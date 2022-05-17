<?
$feed = 'https://res.stj.jus.br/hrestp-c-portalp/RSS.xml'; 

ini_set('allow_url_fopen', true); 
$fp = fopen($feed, 'r'); 
$xml = ''; 
while (!feof($fp)) { 
    $xml .= fread($fp, 128); 
} 
fclose($fp); 

function untag($string, $tag) 
{ 
    $tmpval = array(); 
    $preg = "|<$tag>(.*?)</$tag>|s"; 
    preg_match_all($preg, $string, $tags); 
    foreach ($tags[1] as $tmpcont){ 
        $tmpval[] = $tmpcont; 
    } 
    return $tmpval; 
} 

$items = untag($xml, 'item'); 

$html = '<p>'; 
foreach ($items as $item) { 
    $title = untag($item, 'title'); 
    $link = untag($item, 'link'); 
    $html .= '<font face="Tahoma" size="2" color="#006699"><a href="' . $link[0] . '" target="_blank">' . $title[0] . "</a></font></b><br/><br>\n"; 
} 
$html .= '</p>'; 

echo $html; 
?>