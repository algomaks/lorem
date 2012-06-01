<?php
class AppModel extends Model
{
	var $validate = array();

    function __construct($id = false, $table = null, $ds = null) {
        parent::__construct($id, $table, $ds);

        $this->_validationRules();
    }

    function _validationRules() {
        //implemented on child classes
    }
}
?>