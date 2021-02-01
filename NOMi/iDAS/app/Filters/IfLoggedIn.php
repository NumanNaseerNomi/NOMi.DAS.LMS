<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class IfLoggedIn implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		$session = session();
		if ($session->has('iDASUser'))
		{
			return true;
		}
		else
		{
			$session->setFlashData('danger', 'You are not Logged In..!');
			return redirect()->to('login');
		}
	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{}
}