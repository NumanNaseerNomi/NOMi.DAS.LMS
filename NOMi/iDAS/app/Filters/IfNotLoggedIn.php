<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class IfNotLoggedIn implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		$session = session();
		if ($session->has('iDASUser') && $session->get('iDASUser')->isLoggedIn)
		{
			$session->setFlashData('info', 'You are already Logged In..!');
			return redirect()->to('/');
		}
		else
		{
			return true;
		}
	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{}
}
