<?php

class Thebod_Admindev_Model_Observer {
    public function adminhtmlBlockHtmlBefore($event) {
        if(Mage::getStoreConfig('dev/debug/admin_templatehints')) {
            Mage::getConfig()->setNode('stores/admin/' . Mage_Core_Block_Template::XML_PATH_DEBUG_TEMPLATE_HINTS, 1);
        }

        if(Mage::getStoreConfig('dev/debug/admin_templatehints_blocks')) {
            Mage::getConfig()->setNode('stores/admin/' . Mage_Core_Block_Template::XML_PATH_DEBUG_TEMPLATE_HINTS_BLOCKS, 1);
        }
    }
}