<?php
/**
 * @author Daniel Rosa <daniel.rosa@tecnico.ulisboa.pt>
 * @version 1.0
 * @package phpMVC
 */

/**
 * Utility class
 */
class Html {

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
     * @param Controller $controller The called controller
     */
    public function __construct(Controller $controller) {
        $this->controller = $controller;
        $this->smarty = SmartyHelper::getSmarty();
    }

    /**
     * Render partial view
     * @param string $viewName The name of the view to render
     * @throws SmartyException
     * @throws MVCException
     */
    public function partial($viewName) {
        $view = $viewName . MVC_VIEW_EXTENSION;
        $paths = array($view, 'Shared' . DIRECTORY_SEPARATOR . $view, $this->controller->getName() . DIRECTORY_SEPARATOR . $view);

        foreach ($paths as $path) {
            try {
                return $this->smarty->display($path);
            } catch (SmartyException $e) {
                if (strpos($e->getMessage(), 'Unable to load template file') === false) {
                    throw $e;
                }
            }
        }

        throw new MVCException("$viewName not found!");
    }

}

?>
