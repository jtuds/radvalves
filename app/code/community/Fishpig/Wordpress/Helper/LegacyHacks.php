<?php
/**
 * @category    Fishpig
 * @package     Fishpig_Wordpress
 * @license     http://fishpig.co.uk/license.txt
 * @author      Ben Tideswell <help@fishpig.co.uk>
 */

/**
 * This code file is included when running a version of Magento that does not
 * have the new resource DB models
 *
 */
 
 // Include the helper class to control inclusion
class Fishpig_Wordpress_Helper_LegacyHacks extends Fishpig_Wordpress_Helper_Abstract {}

$resourceDbFile = implode(DS, array('app', 'code', 'core', 'Mage', 'Core', 'Model', 'Resource', 'Db', 'Abstract.php'));

if (!is_file($resourceDbFile) && !is_file('../' . $resourceDbFile)) {
	// Declare legacy hack classes
	abstract class Mage_Core_Model_Resource_Db_Abstract extends Mage_Core_Model_Mysql4_Abstract {}
	abstract class Mage_Core_Model_Resource_Db_Collection_Abstract extends Mage_Core_Model_Mysql4_Collection_Abstract {}
}

$topMenuFile = implode(DS, array('app', 'code', 'core', 'Mage', 'Page', 'Block', 'Html', 'Topmenu.php'));

if (!is_file($topMenuFile) && !is_file('../' . $topMenuFile)) {
	class Mage_Page_Block_Html_Topmenu extends Mage_Core_Block_Template {}	
}
