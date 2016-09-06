<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/directory/common.php');
	if (!isset($_GET['lang'])) {
		$_GET['lang'] = 'en';	
		}
?> 

<head>
<title> <?php echo $lang['PAGE_TITLE'];  ?> </title>
<meta name="description" content=" <?php echo $lang['PAGE_DESCRIPTION'];  ?> ">
<meta name="description" content=" <?php echo $_GET['lang'];  ?> ">
	
</head>

  <body>
    <h1> <?php echo $lang['HOME_H1'];  ?> </h1>
	<h2> <?php echo $lang['HOME_H2'];  ?> </h2>
	<h3> <?php echo $lang['HOME_H3'];  ?> </h3>
	<h4> <?php echo $lang['HOME_H4'];  ?> </h4>	
	<p> <?php echo $lang['HOME_PARAGRAPH_1'];  ?> </p>
	<p> <?php echo $lang['HOME_PARAGRAPH_2'];  ?> </p>
	<p> <?php echo $lang['HOME_PARAGRAPH_3'];  ?> </p>
	<p> <?php echo $lang['HOME_PARAGRAPH_4'];  ?> </p>
	<p> <?php echo $lang['HOME_PARAGRAPH_5'];  ?> </p>
  </body>
  

</html> 