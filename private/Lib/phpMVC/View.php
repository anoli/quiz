<?php
/**
 * @author Daniel Rosa <daniel.rosa@tecnico.ulisboa.pt>
 * @version 1.0
 * @package phpMVC
 */

define('MVC_VIEW_EXTENSION', '.tpl');

/**
 * View
 */
class View {

    /**
     * View name
     * @var string
     */
    private $name;

    /**
     * Controller calling the view
     * @var Controller
     */
    private $controller;

    /**
     * Smarty template engine
     * @var Smarty
     */
    private $smarty;

    /**
     * @param string $name The name of the view
     * @param Controller $controller The controller calling the view
     */
    public function __construct($name, Controller $controller = null) {
        $this->name = $name;
        $this->controller = $controller;
        $this->smarty = SmartyHelper::getSmarty();
    }

    public function Render() {
        $controllerPath = ($this->controller != null) ? $this->controller->getName() . DIRECTORY_SEPARATOR : '';
        $viewPath = $controllerPath . $this->name . MVC_VIEW_EXTENSION;
        return $this->smarty->display($viewPath);
    }

}

?>
