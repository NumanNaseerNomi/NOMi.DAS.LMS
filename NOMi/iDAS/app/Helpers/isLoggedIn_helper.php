<?php

use Config\Services;

function isLoggedIn()
{
	$session = session();
	if ($session->has('iDASUser'))
	{
		return true;
	}
	else
	{
		return false;
	}
}