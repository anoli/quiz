<?php
/**
 * @author Daniel Rosa <daniel.rosa@tecnico.ulisboa.pt>
 * @version 1.0
 * @package phpMVC
 */

include_once('Html.php');

/**
 * Base class for all controllers
 */
abstract class Controller {

    /**
     * Master view
     * @var View
     */
    private $masterView;

    /**
     * View
     * @var View
     */
    private $view;

    /**
     * Smarty template engine
     * @var Smarty
     */
    private $smarty;

    /**
     * Variables to assign in view
     * @var array
     */
    protected $viewBag;

    public function __construct() {
        $this->viewBag = array();
        $this->smarty = SmartyHelper::getSmarty();
    }

    /**
     * Initialize the controller
     * @param View $masterView The master view
     */
    public function init(View $masterView) {
        $this->masterView = $masterView;
    }

    /**
     * @return string The controller name
     */
    public function getName() {
        $class_name = get_class($this);
        return str_replace('Controller', '', $class_name);
    }

    /**
     * Assign view bag variables to view
     */
    private function assign() {
        $reserved = array('view', 'html');
        $this->smarty->assign('view', $this->view);
        $this->smarty->assign('html', new Html($this));

        foreach ($this->viewBag as $name => $value) {
            if (!in_array($name, $reserved)) {
                $this->smarty->assign($name, $value);
            }
        }
    }

    /**
     * Render master view
     * @param string $view The view name
     */
    public function view($name) {
        $this->view = new View($name, $this);
        $this->assign();
        return $this->masterView->render();
    }

}

?>
