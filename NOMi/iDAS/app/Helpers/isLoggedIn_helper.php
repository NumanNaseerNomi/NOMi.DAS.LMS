<?php

use Config\Services;

function isLoggedIn()
{
	$session = session();
	if ($session->has('iDASUser') && $session->get('iDASUser')->isLoggedIn)
	{
		return true;
	}
	else
	{
		return false;
	}
}