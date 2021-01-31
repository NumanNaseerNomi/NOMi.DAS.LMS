<?php

use Config\Services;

function isLoggedIn()
{
	$session = session();
	if ($session->has('iDarEArqamUser'))
	{
		return true;
	}
	else
	{
		return false;
	}
}