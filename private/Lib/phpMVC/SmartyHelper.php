<?php
/**
 * @author Daniel Rosa <daniel.rosa@tecnico.ulisboa.pt>
 * @version 1.0
 * @package phpMVC
 */

include_once('Smarty-3.0.7/libs/Smarty.class.php');

/**
 * Helper class for Smarty
 */
class SmartyHelper {

    /**
     * @var Smarty The smarty instance
     */
    private static $smarty;

    /**
     * Hide constructor
     */
    private function __construct() {
    }

    /**
     * @return Smarty The smarty instance
     */
    public static function getSmarty() {
        if (!isset(self::$smarty)) {
            self::$smarty = new Smarty();
        }

        return self::$smarty;
    }

    /**
     * Disable clone.
     * @throws MVCException
     */
    public function __clone() {
        throw new MVCException('SmartyHelper cannot be cloned!');
    }

}

?>
