<?php

namespace Middleware;

use Model\Config;

class JsonEncodeResponse extends \Slim\Middleware
{
    public function call()
    {
    	// add output to response object for encoding later
		$this->app->hook(
			'slim.before',
			function ()
			{
				$this->app->response->output = (object) array(
					'success' => FALSE
				);
			}
		);

		// encode output for response
		$this->app->hook(
			'slim.after.router',
			function () // use ($app)
			{
				$this->app->response->setBody(
					json_encode($this->app->response->output)
				);
			}
		);

        $this->next->call();
    }
}