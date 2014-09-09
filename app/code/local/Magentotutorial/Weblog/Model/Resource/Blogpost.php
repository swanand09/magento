<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 class Magentotutorial_Weblog_Model_Resource_Blogpost extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('weblog/blogpost', 'blogpost_id');
    }
 } 
?>
