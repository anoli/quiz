<?php

/**
 * @author Daniel Rosa <daniel.rosa@tecnico.ulisboa.pt>
 * @version 1.0
 * @package phpMVC
 */
define('MVC_CONTROLLER_EXTENSION', '.php');
define('MVC_CONTROLLER_CLASSNAME', 'Controller');

include_once('View.php');
include_once('SmartyHelper.php');
include_once('MVCException.php');

/**
 * Router
 */
class Router {

    /**
     * Path to folder containing the controllers
     * @var string
     */
    private $controllersDir;
    
    /**
     * Master view
     * @var View
     */
    private $masterView;
    
    /**
     * @param string $controllersDir Path to directory containing the controllers
     * @param string $masterView The master view name
     * @throws MVCException
     */
    public function __construct($controllersDir = null, $masterView = null) {
        $this->controllersDir = $controllersDir;
        $this->masterView = new View($masterView);
    }

    /**
     * Set the path to directory containing the controllers
     * @param string $controllersDir
     */
    public function setControllersDir($controllersDir) {
        $this->controllersDir = $controllersDir;
    }
    
    /**
     * Set the master view name
     * @param string $masterView
     */
    public function setMasterView($masterView) {
        $this->masterView = new View($masterView);
    }
    
    /**
     * Route controller and action
     * @param string $controllerName The controller name
     * @param type $actionName The action name
     * @param type $masterView The master view name
     * @throws MVCException
     */
    public function route($controllerName, $actionName, $masterView = null) {
        $controllerName .= 'Controller';
        $path = $this->controllersDir . DIRECTORY_SEPARATOR . $controllerName . MVC_CONTROLLER_EXTENSION;

        if (($path = $this->fileExists($path)) !== false) {
            include_once($path);
        }
        if (!class_exists($controllerName)) {
            throw new MVCException('Controller not found.');
        }
        if ($masterView !== null) {
            $this->masterView = new View($masterView);
        }

        $controller = new $controllerName();
        if (!in_array(MVC_CONTROLLER_CLASSNAME, class_parents($controller))) {
            throw new MVCException($controllerName . ' class must extend ' . MVC_CONTROLLER_CLASSNAME . ' class.');
        }
        $controller->init($this->masterView);

        return $this->invoke($controller, $actionName);
    }

    /**
     * Invoke controller's action
     * @param Controller $controller The controller
     * @param string $action The action name
     * @throws MVCException
     */
    private function invoke(Controller $controller, $action) {
        if (!method_exists($controller, $action)) {
            throw new MVCException('Action not found.');
        }
        if (!is_callable(array($controller, $action))) {
            throw new MVCException("Action method must be public.");
        }

        return $controller->$action();
    }

    /**
     * Checks whether a file or directory exists (case-insensitive) 
     * @param string $filename The file name
     * @return mixed Returns the file name if the file or directory specified by filename exists; FALSE otherwise.
     */
    private function fileExists($filename) {
        if (file_exists($filename)) {
            return $filename;
        }

        $lowerfile = strtolower($filename);
        foreach (glob(dirname($filename) . '/*') as $file) {
            if (strtolower($file) == $lowerfile) {
                return $file;
            }
        }

        return false;
    }

}

?>
