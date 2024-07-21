<?php
class App {
    protected $controller = 'OMDBController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Check for controller parameter in query string
        if (isset($url['controller']) && file_exists('app/controllers/' . $url['controller'] . '.php')) {
            $this->controller = $url['controller'];
        }
        require_once 'app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Check for action parameter in query string
        if (isset($url['action']) && method_exists($this->controller, $url['action'])) {
            $this->method = $url['action'];
        }

        // Extract remaining parameters
        unset($url['controller']);
        unset($url['action']);
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        // Parse query string into an array
        if (isset($_SERVER['QUERY_STRING'])) {
            parse_str($_SERVER['QUERY_STRING'], $query);
            return $query;
        }
    }
}
