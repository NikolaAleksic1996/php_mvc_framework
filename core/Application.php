<?php

namespace app\core;

class Application
{
    public Router $router;
    public Request $request;

    /**
     *
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    /**
     * @return void
     */
    public function run()
    {
        $this->router->resolve();
    }
}