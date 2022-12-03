<?php
session_start();
?>
<?php
if (isset($_SESSION['email']))
{
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="sidebar.css">
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://kit.fontawesome.com/7ade572a84.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script>
	function includeHTML() {
	var z, i, elmnt, file, xhttp;
	/*loop through a collection of all HTML elements:*/
	z = document.getElementsByTagName("*");
	for (i = 0; i < z.length; i++) {
	elmnt = z[i];
	/*search for elements with a certain atrribute:*/
	file = elmnt.getAttribute("w3-include-html");
	if (file) {
	/*make an HTTP request using the attribute value as the file name:*/
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4) {
	if (this.status == 200) {elmnt.innerHTML = this.responseText;}
	if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
	/*remove the attribute, and call this function once more:*/
	elmnt.removeAttribute("w3-include-html");
	includeHTML();
	}
	}      
	xhttp.open("GET", file, true);
	xhttp.send();
	/*exit the function:*/
	return;
	}
	}
	};
	</script>
		
	<title>sidebar</title>
  </head>
  <body>
	<br><br><br>
	<div class="space">
	<!-- <div class="wrapper mt-5 sticky-top " id="leftcol"> -->
	<nav id="sidebar" class="text-light shadow p-3 mb-5 bg-dark rounded ">
	<div class="sidebar-header">
	<h4 style="	font-family: 'Cinzel', serif;">Faculties</h4>
	</div>
	<ul class="list-unstyled components def ghi accordion" id="abc" >
	<li>
	<a href="#engmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray"  data-target="#engmenu" aria-controls="collapseOne" id="showeng">Engineering</a>
	<ul class="collapse list-unstyled bg-light text-dark accordion"  id="engmenu" data-parent='#abc'>
	<li>
	<a href="#btech" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none ">B.TECH</a>
	<ul class="collapse list-unstyled w3-black text-light accordion" id="btech" data-parent="#engmenu">
	<li>
	<a href="#mechmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">mechnical</a> 
	<ul class="collapse list-unstyled bg-light text-dark accordion" id="mechmenu" data-parent="#btech">
	<li><a href="faculties/engineering/semester1/mechanical/E1MEC.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="technical.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester3/mechanical/E3MEC.html" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester4/mechanical/E4MEC.html" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester5/mechanical/E5MEC.html" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>  
	</ul>
	<a href="#elemenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">electrical</a> 
	<ul class="collapse list-unstyled bg-light text-dark " id="elemenu" data-parent="#btech">
	<li><a href="faculties/engineering/semester1/electrical/E1ELE.html" target="framename"  class="w3-hover-dark-gray text-decoration-none" >1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester3/electrical/E3ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester4/electrical/E4ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester5/electrical/E5ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester7/electrical/E7ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#civmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">Civil</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="civmenu" data-parent="#btech">
	<li><a href="faculties/engineering/semester1/civil/E1CIV.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester3/civil/E3CIV.html" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester4/civil/E4CIV.html" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester5/civil/E5CIV.html" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#lethermenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">footwear</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="lethermenu" data-parent="#btech">
	<li><a href="faculties/engineering/semester1/footwear/E1FOT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester3/footwear/E3ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester4/footwear/E4FOT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="faculties/engineering/semester5/footwear/E5FOT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>
	</ul>
	</ul>
	<a href="#mtech" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none ">M.TECH</a>
	<ul class="collapse list-unstyled w3-black text-light accordion" id="mtech" data-parent="#engmenu">
	<li>
	<a href="#mechmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">mechnical</a> 
	<ul class="collapse list-unstyled bg-light text-dark accordion" id="mechmenu" data-parent="#mtech">
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>  
	</ul>
	<a href="#elemenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">electrical</a> 
	<ul class="collapse list-unstyled bg-light text-dark " id="elemenu" data-parent="#mtech">
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#civmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">Civil</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="civmenu" data-parent="#mtech">
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#lethermenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray">footwear</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="lethermenu" data-parent="#mtech">
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">7<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">8<sup>th</sup> Semester</a></li>
	</ul>
	</ul>
	</li>
	</ul> 
	</li>	
	<li>
	<a href="#techmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray" data-target='#techmenu' id="showtech">Technical</a>
	<ul class="collapse list-unstyled bg-light text-dark accordion" id="techmenu" data-parent='#abc'>
	<li>
	<a href="#vitmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">VIT</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="vitmenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1VIT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2VIT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="faculties/technical/semester3/VIT/T3VIT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="faculties/technical/semester4/VIT/T4VIT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="faculties/technical/semester5/VIT/T5VIT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="faculties/technical/semester6/VIT/T6VIT.html" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#mechmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">Mechnical</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="mechmenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#elemenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">Electrical</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="elemenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="faculties/technical/semester3/electrical/T3ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="faculties/technical/semester4/electrical/T4ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="faculties/technical/semester5/electrical/T5ELE.html" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#automenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">Automobile</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="automenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#electronicsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">Electronics</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="electronicsmenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="faculties/technical/semester4/electronics/T4ETS.html" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="faculties/technical/semester5/electronics/T5ETS.html" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#civmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">Civil</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="civmenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul> 
	<a href="#vautomenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">Voc.auto</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="vautomenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul>
	<a href="#lethermenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none">Leather</a>
	<ul class="collapse list-unstyled bg-dark text-light" id="lethermenu" data-parent="#techmenu">
	<li><a href="faculties/technical/semester1/VIT/T1COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="faculties/technical/semester2/VIT/T2COM.html" target="framename" class="w3-hover-dark-gray text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">5<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="w3-hover-dark-gray text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul>       
	</li>	
	</ul> 
	</li>		
	<li>
	<a href="#scimenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray" data-target='#scimenu'>Science</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="scimenu" data-parent='#abc'>
	<li><a href="#" target="framename" class="text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">2<sup>nd</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">3<sup>rd</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">5<sup>th</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">6<sup>th</sup> Semester</a></li>	
	</ul> 
	</li>	
	<li>
	<a href="#edumenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray" data-target='#edumenu'>Education</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="edumenu" data-parent='#abc'>
	<li><a href="#" target="framename" class="text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">5<sup>th</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul> 
	</li>	
	<li>
	<a href="#commenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray" data-target='#commenu'>Commerce</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="commenu" data-parent='#abc'>
	<li><a href="#" target="framename" class="text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">5<sup>th</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul> 
	</li>
	<li>
	<a href="#socmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray" data-target='#socmenu'>Social Science</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="socmenu" data-parent='#abc'>
	<li><a href="#" target="framename" class="text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">5<sup>th</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul> 
	</li>
	<li>
	<a href="#artmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray" data-target='#artmenu'>Arts</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="artmenu" data-parent='#abc'>
	<li><a href="#" target="framename" class="text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">5<sup>th</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul> 
	</li>
	<li>
	<a href="#ayumenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-decoration-none w3-hover-dark-gray" data-target='#ayumenu'>Ayush</a>
	<ul class="collapse list-unstyled bg-light text-dark" id="ayumenu" data-parent='#abc'>
	<li><a href="#" target="framename" class="text-decoration-none">1<sup>st</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">2<sup>nd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">3<sup>rd</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">4<sup>th</sup> Semester</a></li>
	<li><a href="#" target="framename" class="text-decoration-none">5<sup>th</sup> Semester</a></li>	
	<li><a href="#" target="framename" class="text-decoration-none">6<sup>th</sup> Semester</a></li>
	</ul> 
	</li>				
	</ul>
	</nav>
	<div class="content my-0 mx-0">
	<div id="sidebarCollapse">
	<i class="fa fa-chevron-circle-right"></i> 
	</div>
	
	</div>
	<div id="folders" class="my-0 py-0">
		<iframe  name="framename" frameborder="0" src='iframe.html' width="100%" ></iframe>
	</div>
	
</div>
	 <div w3-include-html="navbar.html"></div>
	<div w3-include-html="footer.html"></div>

   <script>
	includeHTML();
  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="sidebar.js"></script>
	<script src="navbar.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
    
  </body>
</html>
<?php
  }
  else
  {
    // echo "<script>alert('Please Login First!!!')</script>";
    include('upload_error.html');
  }
?>