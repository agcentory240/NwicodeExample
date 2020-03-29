<?php
class NwicodeExample_Model_NwicodeExample extends Core_Model_Default {

    public function __construct($params = array()) {
        parent::__construct($params);
        $this->_db_table = 'NwicodeExample_Model_Db_Table_NwicodeExample';
        return $this;
    }

}
