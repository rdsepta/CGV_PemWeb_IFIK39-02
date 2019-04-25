<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
    <style>
      body {
  background-color: #2F070C;
  background-image:url(../images/body-bg.gif);
  background-repeat:repeat;
  margin: 0;
  padding: 0;
  text-align: center;
  color: #000000;
  font-family: "Times New Roman", Times, serif;
  font-size: 16px;
}
.oneColFixCtr #container {
  width: 1000px;
  margin: 0 auto;
  text-align: left;
}

a:link {
  color:#030873;
  
}

a:visited {
  color:#030873
  
}

a:hover {
  color:#0D10FF;
  
}

a:active {
  color: #030873;
  text-decoration:underline;
}


hr {
    height: 1px;
    border: none;
    border-bottom: 1px solid #666;   
}

h1 {
  font-size:16px;
  font-weight:bold;
  color:#2F050C;
  border-bottom:solid 1px #666;
}

h2 {
  font-size:16px;
  font-weight:bold;
}

#TB_ajaxContent h2, .productX h2 {
    font-size: 13.5pt;
    font-family: "Times New Roman";
}

.sm {
  position: relative;
  bottom: 0.3em;
  font-size: 0.8em;
}



.clear {
  clear:both;
}

.floater {
  float:right;
  margin:15px;
}

#mainContent {
  width:800px;
  float:left;
  margin-top:40px;
  background-image: url(../images/cgv-page_header.png);
  background-repeat: no-repeat;
  background-position: top center;
  position:relative;
}

#menu {
  width:200px;
  float:left;
  margin-top:100px;
}

.wineclubmenu {
    text-align:right;
    padding-right:15px;
    color:#9A7C54;
    padding-bottom: 12px;
    border: 1px solid #9A7C54;
}

.wineclubmenu a:link {
    color:#9A7C54;
    text-decoration:none;
}

.wineclubmenu a:visited {
    color:#9A7C54;
    text-decoration:none;
}

.wineclubmenu a:hover {
    color:#E9EBB9;
    text-decoration:underline;
}

.wineclubmenu a:active {
    color:#E9EBB9;
    text-decoration:underline;
}


.submenu {
  text-align:right;
  padding-right:31px;
    color:#9A7C54;
    padding-bottom: 12px;
}

.submenu a:link {
  color:#9A7C54;
  text-decoration:none;
}

.submenu a:visited {
  color:#9A7C54;
  text-decoration:none;
}

.submenu a:hover {
  color:#E9EBB9;
  text-decoration:underline;
}

.submenu a:active {
  color:#E9EBB9;
  text-decoration:underline;
}

#pagebody {
  width:706px;
  margin-top:174px;
  margin-left:32px;
  padding:15px;
  background-color:#FFFFFF;
  background-image:url(../images/page-shadow.gif);
  background-repeat:repeat-x;
  position:relative;
}

#pagetitle {
  position:absolute;
  top:-40px;
  left:170px;
}

#legal {
  font-size:9px;
  color:#E3D4B1;
  padding-top:20px;
  padding-right:40px;
  text-align:right;
  clear:both;
}

/* Home page ----------------------------------------------- */

#mainContent.home {
  height:625px;
  background-image: url(../images/cgv-home.png);
  background-repeat: no-repeat;
  background-position: center;
  position:relative;
}

#homePhoto {
  width:660px;
  height:295px;
  position:absolute;
  top:124px;
  left:70px;
}

#mainContent.home #events {
  position:absolute;
  left:85px;
  top:410px;
  width:160px;
  margin-top:10px;
    font-size: smaller;
}

#mainContent.home #events .event {
  margin-bottom:5px;
}

#mainContent.home #events .event .date {
  color:#003760;
  font-weight:bold;
}

#mainContent.home #events .event .title {
  font-weight:bold;
    text-decoration: none;
    color: black;
}


#mainContent.home #textbody {
  position:absolute;
  left:245px;
  top:410px;
  width:460px;
  height:160px;
  overflow:visible;
  padding-left:15px;
  margin-top:10px;
  background-image:url(../images/burn-line.gif);
  background-repeat:no-repeat;
}
 
/* Wines ------------------------------------------------------- */

#wine_sub {
  border-top:solid 1px #9A7C54;
    margin-top: -10px;
}

.product {
  float:left;
  margin-top:15px;
  padding-bottom:15px;
  text-align:center;
  width:170px;
  padding-left:5px;
  /*border-bottom:solid 1px #666;*/
}

.product .img { 
    border: 1px solid #E0E0E0;
}

.product .desc {
}

.product .title {
  font-size:14px;
  font-weight:bold;
  color:#2F050C;
  margin-bottom:5px;
  height:40px;
  width:170px;
  display:table-cell;
  vertical-align:middle;
}

.product .text {
  margin-bottom:10px;
    
}

.product .price {
}

.product .discountprice {
    font-size: smaller;
}


.read_more {
  font-size:14px;
  font-weight:bold;
}

.currentLocation {
    color: #C0A785 !important;
}

.clubonly {
    font-weight: bold;
    font-style: italic;
    color: #56110F
}

#comment {
    width: 700px; 
    
}
    </style>
  </head>


<base href="http://www.cgv.com/" />
<link href="http://www.cgv.com/css/style.css" rel="stylesheet" type="text/css" />
<script src="http://www.cgv.com/js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.cgv.com/js/jquery.js"></script>
<script type="text/javascript" src="http://www.cgv.com/js/thickbox.js"></script>
<link rel="stylesheet" href="http://www.cgv.com/css/thickbox.css" type="text/css" media="screen" />

<body class="oneColFixCtr">

<div id="container">
  <div id="menu">
    <a href="http://localhost/cgv/aboutus" href="http://www.cgv.com/images/menu_aboutus-over.gif"><img src="http://www.cgv.com/images/menu_aboutus.gif" alt="About Us" name="menu_aboutus" width="180" height="30" border="0" id="menu_aboutus" /></a>
    
    <div class='submenu'><a href='http://localhost/cgv/aboutus/vineyards'>Vineyards</a><br /><a href='http://localhost/cgv/aboutus/whoweare'>Who We Are</a><br /></div>

    <a href="http://localhost/cgv/ourwines" href="http://www.cgv.com/images/menu_ourwines-over.gif"><img src="http://www.cgv.com/images/menu_ourwines.gif" alt="Our Wines" name="menu_ourwines" width="180" height="30" border="0" id="menu_ourwines" /></a>
    
     <div class='submenu'><a class="currentLocation" href="http://localhost/cgv/ourwines">Wines</a><br /></div>

    <a href="http://localhost/cgv/wineclub" href="http://www.cgv.com/images/menu_wineclub-over.gif"><img src="http://www.cgv.com/images/menu_wineclub.gif" alt="Wine Club" name="menu_wineclub" width="180" height="30" border="0" id="menu_wineclub" /></a>
      
    <div class='submenu'><a href='http://localhost/cgv/wineclub/join'>Join</a><br /><a href='http://localhost/cgv/wineclub/login'>Login</a><br /></div>    

    <a href="http://localhost/cgv/tastingroom" href="http://www.cgv.com/images/menu_tastingroom-over.gif"><img src="http://www.cgv.com/images/menu_tastingroom.gif" alt="Tasting Room" name="menu_tastingroom" width="180" height="30" border="0" id="menu_tastingroom" /></a>
    
    <div class='submenu'><a href='http://localhost/cgv/tastingroom/tours'>Tours</a><br /><a href='http://localhost/cgv/tastingroom/picnics'>Picnics</a><br /></div>
        
    <a href="http://localhost/cgv/directions" href="http://www.cgv.com/images/menu_directions-over.gif"><img src="http://www.cgv.com/images/menu_directions.gif" alt="Directions" name="menu_directions" width="180" height="30" border="0" id="menu_directions" /></a>
    
    
    <a href="http://localhost/cgv/events" href="http://www.cgv.com/images/menu_events-over.gif"><img src="http://www.cgv.com/images/menu_events.gif" alt="Events" name="menu_events" width="180" height="30" border="0" id="menu_events" /></a>

    <div class='submenu'><a href='http://localhost/cgv/events/yourevent'>Your Event</a><br /></div> 
        
    <a href="http://localhost/cgv/contact" href="http://www.cgv.com/images/menu_contactus-over.gif"><img src="http://www.cgv.com/images/menu_contactus.gif" alt="Contact Us" name="menu_contactus" width="180" height="30" border="0" id="menu_contactus" /></a>

    <div class='submenu'><a href='http://localhost/cgv/contact/employment'>Employment</a><br /></div>

    <a href="http://localhost/cgv/Cart" href="http://www.cgv.com/images/menu_shopping-over.gif"><img src="http://www.cgv.com/images/menu_shopping.gif" alt="Shopping Cart" name="menu_shopping" width="180" height="30" border="0" id="menu_shopping" /></a>

        
    
    <div style='text-align: right; padding-right: 32px; padding-top: 10px;'>
    <a target='_blank' href='http://www.facebook.com/CooperGarrod'>
    <img src='http://www.cgv.com/images/facebook.gif' >
    </a>
    <br />
    <a href="http://www.youtube.com/watch?v=8wQdVFEL6Xo" target="_blank">
    <img src="http://www.cgv.com/images/bestofthebay.jpg" width="120" height="59">
    </a>
    <br />
    
    <a href="http://www.vinestories.com/videos/Video_CooperGarrodEstateVineyards.php" target="_blank">
    <img src="http://www.cgv.com/images/VineStories.gif" >
    </a>
    
    </div>
    </div>