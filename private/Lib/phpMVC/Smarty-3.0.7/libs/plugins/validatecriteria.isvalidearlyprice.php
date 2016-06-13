<?php

function smarty_validate_criteria_isValidEarlyPrice($value, $empty, &$params, &$formvars) {
	if($formvars['early'] == 'no') {
		return true;
	} else {
		return smarty_validate_criteria_isNumber($value, $empty, $params, $formvars);
	}
}

?>
