<?php 
	
	include ('simple_html_dom.php');
	$html = file_get_html('https://www.w3schools.com/');
	$title = $html->find('title',0)->plaintext;
	echo $title;
	echo "<br>"."<hr>";

	$list = $html -> find('div[class="w3-col l4 m12"]',0);
	$list_array = $list -> find('a');

	$len = sizeof($list_array);
	
	// using foreach loop
	echo "Using foreach loop"."<br>"."<hr>";
	foreach ($list_array as $item) {
		echo $item->plaintext;
		echo "<br>";
	}

	// using for loop
	echo "<hr>"."Using for loop"."<br>"."<hr>";
	for ($i=0; $i < $len ; $i++) { 
		echo $list_array[$i]->plaintext;
		echo "<br>";
	}
 ?>