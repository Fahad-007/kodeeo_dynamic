<?php 
	

	$querySlider = "select * from slider_section";
	$resultSlider = mysqli_query($connection, $querySlider);
	$dataSlider['section'] = $resultSlider;

	$queryAbout = "select * from about_section";
	$resultAbout = mysqli_query($connection, $queryAbout);
	$dataAbout['section'] = $resultAbout;

	$queryServ = "select * from services_section";
	$resultServ = mysqli_query($connection, $queryServ);
	$dataServ['section'] = $resultServ;

	$queryWork = "select * from portfolio_filter";
	$resultWork = mysqli_query($connection, $queryWork);
	$dataWork['section'] = $resultWork;

    $queryPort = "select * from portfolio_item";
    $resultPort = mysqli_query($connection, $queryPort);
    $dataPort['section'] = $resultPort;


    $queryComment = "select * from client_comment_section";
    $resultComment = mysqli_query($connection, $queryComment);
    $dataComment['section'] = $resultComment;

    $queryTeam = "select * from team_members";
    $resultTeam = mysqli_query($connection, $queryTeam);
    $dataTeam['section'] = $resultTeam;
	
 ?>