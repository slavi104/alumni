<?php
$page_head_tags = "";
function add_to_head($tag=""){
	/*global $page_head_tags;
	
	if(!stristr($page_head_tags, $tag)){
		$page_head_tags .= $tag."\n";
	}*/
	echo $tag;
}
?>