<h1>The OpenPhoto Team</h1>
<div id="supporters">
<h2>The (current) core team</h2>
<ul class="media-grid">
  <?php
  $core_team = array(
// "$name" => array("$avi" => array("$topic" => "$twitter")),
  "Brian Levine" => array("16cbb4d910211e50d5f2b86b365b0f7e" => array("Openphoto-ruby" => "beanserver")),
  "Gareth Greenaway" => array("069ca6b19a82a692a13ac20ddf7a51d5" => array("Amazon EC2 AMIs" => "garethgreenaway")),
  "Hub Figuière" => array("df9b23c550b548fb8b5779e897d3d39e" => array("Frontend" => "hfiguiere")),
  "Jaisen Mathai" => array("e4d1f099d40e3b453be3355349b90457" => array("Frontend" => "jmathai")),
  "James Walker" => array("b29b5419f81fa03145cafc684bb20c76" =>array("Openphoto-python" =>  "walkah")),
  "Patrick Boos" => array("e2f115ff65f184658ec426c5c6b793db" =>array("Mobile-android" =>  "pboos")),
  "Patrick Santana" => array("c3bc919ff2d34d720f06d219f8ad00a4" =>array("Mobile-ios" =>  "patricksantana")),
  "Randy Hoyt" => array("cd492b1bafd247ec1d52defb632cbd22" => array("Openphoto-wordpress" => "randyhoyt")),
  "Randy Jensen" => array("9b2e3dabf361eeaf308ce6cca61cf44c" =>array("Openphoto-wordpress" =>  "randyjensen")),
  "Samat Jain" => array("52fbbabfa1a925d17caaeeed641a989b" =>array("Export-flickr" =>  "samatjain")),
  "Sujin Headrick" => array("bcb8a7abe83d70134ff9fcc756a9a4da" =>array("Community Manager" =>  "sushimustwrite")),
  "Tobias Beisel" => array("118c98d0ced3cae2fa1aacab97c3c453" =>array("Mobile-ios" =>  "tobiasbeisel")));

array_walk($core_team, 'display_core_team');
function display_core_team($value, $name) {

	foreach ($value as $avi => $value2){
		foreach ($value2 as $topic => $twitter){
		}
	}
echo '<li class="span4"><img src="https://secure.gravatar.com/avatar/'. $avi .'?size=150"><div>'. $name .'</div><div class="footnote"><a href="https://twitter.com/'. $twitter .'" class="plain" target="_blank" rel="external">@'. $twitter .'</a></div><div class="footnote">'. $topic .'</div></li>';
echo "\n";
}
?>
</ul>
<hr>
<h2>Contributors</h2>
<ul class="media-grid">
<?php
$contributors = array(
"Ali Sabet" => array("f5e79e18f282e5b0dc9144b9e7c72299" => "sabet"),
"John Fabrizio" => array("eae2c6bacf740b6c29972b75ca4a0613" => "john_fabrizio"),
"Michael Fitzpatrick-Ruth" => array("8b404f4357fc92788c5172f69a2d4e99" => "alpha1beta"),
"Preet Jassi" => array("03c8b79234edddcb5dff723ee163e490" => "erudianart"));

array_walk($contributors, 'display_contributors');
function display_contributors($value, $name) {
	foreach ($value as $avi => $twitter){
	}
echo '<li class="span4"><img src="https://secure.gravatar.com/avatar/'. $avi .'?size=150"><div>'. $name .'</div><div class="footnote"><a href="https://twitter.com/'. $twitter .'" class="plain" target="_blank" rel="external">@'. $twitter .'</a></div></li>';
echo "\n";
}
?>
  </ul> <hr>
  <h2>Kickstarter pledgers</h2>
  <ul class="media-grid">
  <?php
$kickstart_pledgers = array(
"Aaron Forgue","84f11398a4dbe191e56744ab6b8090d9",
"Adam Boalt" => "1324acfad62cf8b2303dab57a791e443", 
"Adam Jensen" => "2156bbf49d6b1eb7b1e0811e05efbabf",
"Andrew Wilkie" => "d1db11528907fab6b15c60653f4d38c0",
"Arik Fraimovich" => "bd2d1d970d3d414e8d7ddef8175fabd2", 
"Bob Hannent" => "43d0d26c340648522280a0c7dcbbac8f", 
"Carl D. Patterson" => "1cf924c9e244e1a0edb509e2cf398a82", 
"Carl Oscar Aaro" => "03772def11b1545da296d31d5e3ccc65",
"Chet Williams" => "885b093b46391bd728cc7c916bcc20c2",  
"Chris Hobson" => "c5309463b1bbe48c40bde6e6905e896a",
"D. Archibald Smart" => "6449c0d7d0049d73e2afcdf053682d46", 
"David Roessli" => "76d707edaf55868f08e49ea72c8df90e", 
"Derek J. Allen" => "3f4d416005b7275e9d7879047e986ace", 
"Dmitri Popov" => "414614f7ac294749aea617c7331ae866",  
"Duncan Rawlinson" => "7fc4c6b4424b2b0c733da8a1107489ce", 
"Gavin Blowman" => "59e298aae2deb0778c9f3f1201a88fa2",
"Hywel Jenkins" => "bba09693c841860bf8bcecf904b7c120", 
"Ingmar Rötzler" => "8d029165a3681fa253854e0126b8a65a", 
"Jaisen Mathai" => "e4d1f099d40e3b453be3355349b90457", 
"Jon Atherton" => "3d427f43a9be04526c0608d400ffef8b", 
"Jonathan Fusellier" => "699878257035eac80ad9d2843fdb9b91", 
"Joseph Holguin" => "7e893092743bb56843a25f6b6d24f9d4", 
"Justin Singer" => "de184af474fd451afe8eececbaae5e9b",
"Keira Alexandra" => "5644de0b5b8102f7d9eaee6edb76df20", 
"Ken Nickerson" =>"98ae50c51aecb08b0e07942c802b8105",
"Manish Ranade" => "6bb932674a6d5beed4b621f449acfe8b", 
"Marc Menningmann" => "79bec8f910e5c5d86666b29b074e1595", 
"March" => "5e68dda2c0d5f95630d57dae184eee6e", 
"Marco Canini" => "9a6748faa12a5e91beb0d4635e638564", 
"Michael Young" =>"0754731b85c2d6a6bd5f94e0fb7cfc7b",  
"Mickael Ung" => "313025bfd4c25d81201721e3aecd908e", 
"Mike Schinkel" => "7fc81728286232dfa336c369dcf96992", 
"Mike Vargas" => "adda2cc47c8fc5aa857e0335ba5b8e1d", 
"Name" => "0c83f57c786a0b4a39efab23731c7ebc", 
"Olof" => "b416c956f8448d0646a0d1253390fd18", 
"Ozzie Sabina" => "edc891fe0790cef0716fbf8ab9bf60d1", 
"Patrick Santana" => "c3bc919ff2d34d720f06d219f8ad00a4", 
"Peter Sankauskas" => "82437d8be141d96116e840f6a47cbe63", 
"Richard Dallaway" => "ff619670d30ebdeefd49cf10af8e3292", 
"Rohit Dharne" => "3bb9bdd98b00a50067feb396a951df56", 
"Rupsha Chaudhuri" => "25b9e21c7812daecf1ce5be2c3807b64", 
"Sharon Middendorf" => "42aa99c1758a1202eb41f07af1c0e060", 
"Tue Bui" =>"af6a1e74496853eb0fee0d1f444b68c3",  
"Vanessa Krause" => "434335bd520693fa7c9ab7cc9830375f", 
"William Loftus" => "aea3d87e7dbc116a097466834721407e", 
"Xande Macedo" => "2acc745ba4c862b6b119b82c735f9ea3", 
"Yaniv Golan" => "c01b0f9f763060373e4d1a15b6ed2c5f", 
"aqnb" => "6a0872d33aa99e8604f94b9b76f99845"
); 
foreach ($kickstart_pledgers as $key_name => $avi_value){

echo '<li class="span4"><img src="https://secure.gravatar.com/avatar/'. $avi_value .'"><div>'.$key_name .'</div></li>';
echo "\n";
}
?>
</ul>


<hr>
<h2>More Kickstarter pledgers</h2>
<div class="row">
<?php
$more_kickstarters = array(
"Aaron Mcilvain",
"Adam Glickman",
"Alex Holt",
"Andre Oschadlin",
"Andrew Crookston",
"Andrew Marinkovich",
"Ankit Modi",
"Beau Smith",
"Brook Riggio of Deciel",
"Chase Rief",
"Cory Grunkemeyer",
"Daniel Bentes",
"David Deas",
"Ed Sweeney",
"Elysa Darling",
"Eric Wilcox",
"Ewan Leith",
"Fredrick DeQuan Lee",
"Fredrik Averpil",
"Hannes Hesse",
"Harold Liss",
"Håkan Lejonkula",
"Ian Huet",
"Ivan Manolov",
"Janne Helin",
"Jason Uechi",
"Jeff Hodgson",
"Johan Barenfeld",
"Josh Sosnin",
"Keith Achorn",
"Keith Weng",
"Ken Friis Larsen",
"Kennon Ballou",
"Leonard Richardson",
"Marco Frissen",
"Marco Paga",
"Matt Katz",
"Matthew Howell",
"Mete BALCI",
"Michael D. Ivey",
"Michael Martinides",
"Paul Stone",
"Peter Evans",
"Prassan",
"Raphael Kallensee",
"Raymond and Amy Whiten",
"Robert Gaal",
"Robert Levelind",
"Roger Butterworth",
"Rus Wetherill",
"Scott Emmons",
"Shannon Marie Brown",
"Shuttercal.com",
"Slavo Ingilizov",
"Stephen Garcia",
"Steven C. Nay",
"Tim Ferguson",
"Tim Scott",
"Tony Noecker",
"Tsvika Rabkin",
"Tymen Mullender",
"Vaclav Synacek",
"William Crawford",
"Yuya Saito",
"Zeroelink",
);
foreach($more_kickstarters as $mk){
echo '<div class="span4">'. $mk .'</div>';	
}
/*
*** NOT WORKING....almost..
array_walk($more_kickstarters, 'display_more_kickstarers');

function display_more_kickstarers($value){

$counter=0;
	if($counter % 3 == 0){
	echo '</div><div class="row">';
	//displays the end div and starts a new div every 4 rows, if it works right
	}
echo '<div class="span4">'. $value .'</div>';
echo "\n";
$counter++;
}
*/
?>
</div>
</div>
