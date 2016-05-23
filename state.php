<?php
$stateAbbrev = “WI”;
print “State abbreviation is “ . $stateAbbrev . “<br>\n”;
$stateFull = convertState($stateAbbrev);
if ($stateFull) {
print “Full name is “ . $stateFull . “<br>\n”;
} else {
print “Full name not found for {$stateAbbrev}<br>\n”;
}
?>