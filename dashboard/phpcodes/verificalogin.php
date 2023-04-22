<?php
if(!$_SESSION['username']) {
	header('Location: login');
	exit();
}