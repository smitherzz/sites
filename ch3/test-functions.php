<?php
function p($content){
 return"<p>$content</p>";
}
$output=p("I want this to be my first paragraph");
$output.=p( "...and I want this in my second" );

echo $output;

