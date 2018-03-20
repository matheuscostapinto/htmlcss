<?php
	session_start();
	
	$_SESSION['autentica'] = false;
	
	header('location:form.html');