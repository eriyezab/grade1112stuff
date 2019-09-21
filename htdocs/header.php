<?php
// start the session
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php if( isset($title) ) echo $title, ' | '; ?>Heat Check</title>
<style>


/*	.header
	{
		position: fixed;
	}*/
/*
	h1.header
	{
		left: 1000;
		top: 0;
		margin-top: 10px;
		margin-right: 10px;
		margin-left: 10px;
		margin-bottom: 10px;

	}*/

/*button.header
{
left: 10;
top: 0;
margin:0;
padding:0;
float:left;
}
*/
</style>
<script>

</script>
</head>
<body>

<button type="button" id="search">Search</button>
<h1 class="header" id="header">Heat Check</h1>
