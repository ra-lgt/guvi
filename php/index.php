<?php
$name=$_GET['name'];
$email=$_GET['email'];
session_start();

require_once __DIR__ . '\assets\vendor\autoload.php';

$client =new MongoDB\Client("mongodb://localhost:27017");
$database = $client->selectDatabase("guvi");
$collection = $database->selectCollection("user_profiles");


$filter = ['email' => $email];

$options = [];
$documents = $collection->find($filter, $options);

foreach ($documents as $document) {
    $documentId = (string) $document->_id;
    
    
    
}

?>
<html>
    <head>
 <link rel="stylesheet" href="home.css">
      </head>
    
      <body>
      
<header>
  <nav class="text-center">
    <ul class="inline-block">
      <li class="pull-left active"><a href="#" data-direction="front"><?php echo $name?></a></li>
      <li class="pull-left"><a href="profile.html" data-direction="back">Profile</a></li> 
      <li class="pull-left"><a href="php/edit_profile.php?id='<?php echo $documentId ?>'&name=<?php echo $name ?>" data-direction="top">Edit</a></li>
      <div class="clearfix"></div>
    </ul>
  </nav>
</header>
<div id="wrap">
  <div class="cube">
    <section class="page active face front" id="home">
      <div class="act-table text-center">
        <div class="act-table-cell ver-middle">Home Page</div>
        <img src="Developers Gif.gif" height="400px" style="margin-top:170px;">
      </div>
    </section>
    <section class="page face back" id="portfolio">
      <div class="act-table text-center">
        <div class="act-table-cell ver-middle">Portfolio Page</div>
      </div>
    </section>
    
   
  </div>
</div>
    
       
      <style>
       body {
	font-family: "Open Sans", sans-serif;
	font-weight: 300;
}

ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

li {
	list-style: none;
}

.inline-block {
	display: inline-block;
}

.act-table {
	display: table;
}

.act-table-cell {
	display: table-cell;
}

a,
a:hover,
a:focus,
a:active {
	text-decoration: none;
	color: inherit;
}

.text-center {
	text-align: center;
}

.text-left {
	text-align: left;
}

.text-right {
	text-align: right;
}




header {
	position: fixed;
	top: 8px;
	left: 0;
	right: 0;
	z-index: 100;
	transition: 1s;
	-webkit-transition: 1s;
	-moz-transition: 1s;
}


header nav ul {
	background-color: rgba(255, 255, 255, 0.2);
	overflow: hidden;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
}

header nav ul li {
	color: #fff;
}

header nav ul li a {
	width: 100px;
	max-width: 150px;
	height: 32px;
	display: block;
	padding-top: 13px;
}



.page .act-table {
	width: 100%;
	height: 100%;
}

.page .act-table .act-table-cell {
	font-size: 100px;
	font-weight: 500;
	color: #fff;
}

.page.active {
	z-index: 50;
}

#wrap {
	position: fixed;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	transition: 0.8s;
	-webkit-transition: 0.8s;
	-moz-transition: 0.8s;
}

#wrap.active {
	top: 10%;
	bottom: 10%;
	right: 10%;
	left: 10%;
}

.front {
	background-color: rgb(99, 39, 120);
}
 </style>
        
</html>

