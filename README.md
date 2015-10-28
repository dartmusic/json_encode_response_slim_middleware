# JSON encode response for the Slim Framework

This middleware will automatically encode all response data as JSON

## Installation and usage

1. Drop this in your Middleware folder
2. $app->response->output is created with a response "success" parameter defaults to false. Set $app->response->output->success = TRUE; in your controllers.
3. Add anything you want to return to $app->response->output in your controller.
4. $app->response->output is then json_encoded on response.
