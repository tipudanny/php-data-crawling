# php-data-crawling
How to crawling data using PHP

include simple_html_dom.php file to your file.
simple_html_dom.php file contains all of the php crawling methods.

#Write your code to find data

Write you code into wev-scrip.php file for get data from other website.

I am fatching Data from W3 Schools Website.

#First Include the simple_html_dom.php file-


include ('simple_html_dom.php');
using file_get_html() function for get all data from your url.


then you can filter and find your information which you need

<? php
  include ('simple_html_dom.php');
	$html = file_get_html('https://www.w3schools.com/');
	$title = $html->find('title',0)->plaintext;
	echo $title;
	echo "<hr>";
?>
#where i am usning some loop for fetching an array of Data.
<?php 
	
include ('simple_html_dom.php');
$html = file_get_html('https://www.w3schools.com/');
$title = $html->find('title',0)->plaintext;
echo $title;
echo "<hr>";

$list = $html -> find('div[class="w3-col l4 m12"]',0);
$list_array = $list -> find('a');

$len = sizeof($list_array);

// using foreach loop
echo "Using foreach loop";
foreach ($list_array as $item) {
	echo $item->plaintext;
	echo "<br>";
}

?>
