<?php
$tags = $page->tags()->split(); 
foreach($tags as $tag){
	echo $tag.', ';
}
?>