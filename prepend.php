<?php
if (!isset($_SESSION)) {
session_start();
}
function convertState($state) {
$stateList = array(
“AL” => “Alabama”,
“AK” => “Alaska”,
“AZ” => “Arizona”,
“AR” => “Arkansas”,
“CA” => “California”,
“CO” => “Colorado”,
“CT” => “Connecticut”,
“DE” => “Delaware”,
“FL” => “Florida”,
“GA” => “Georgia”,
“HI” => “Hawaii”,
“ID” => “Idaho”,
“IL” => “Illinois”,
“IN” => “Indiana”,
“IA” => “Iowa”,
“KS” => “Kansas”,
“KY” => “Kentucky”,
“LA” => “Louisiana”,
“ME” => “Maine”,
“MD” => “Maryland”,
“MA” => “Massachusetts”,
“MI” => “Michigan”,
“MN” => “Minnesota”,
“MS” => “Mississippi”,
“MO” => “Missouri”,
“MT” => “Montana”,
“NE” => “Nebraska”,
“NV” => “Nevada”,
“NH” => “New Hampshire”,
“NJ” => “New Jersey”,
“NM” => “New Mexico”,
“NY” => “New York”,
“NC” => “North Carolina”,
“ND” => “North Dakota”,
“OH” => “Ohio”,
“OK” => “Oklahoma”,
“OR” => “Oregon”,
“PA” => “Pennsylvania”,
“RI” => “Rhode Island”,
“SC” => “South Carolina”,
“SD” => “South Dakota”,
“TN” => “Tennessee”,
“TX” => “Texas”,
“UT” => “Utah”,
“VT” => “Vermont”,
“VA” => “Virginia”,
“WA” => “Washington”,
“WV” => “West Virginia”,
“WI” => “Wisconsin”,
“WY” => “Wyoming”
);
if (array_key_exists($state,$stateList)) {
return $stateList[$state];
} else {
return false;
}
} //end function convertState
?>
