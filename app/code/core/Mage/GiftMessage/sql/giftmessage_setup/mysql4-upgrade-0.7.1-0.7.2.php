<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_GiftMessage
 * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;
/* $installer Mage_Core_Model_Resource_Setup */

$installer->addAttribute('quote',              'gift_message_id', array('type' => 'int', 'visible' => false, 'required' => false));
$installer->addAttribute('quote_address',      'gift_message_id', array('type' => 'int', 'visible' => false, 'required' => false));
$installer->addAttribute('quote_item',         'gift_message_id', array('type' => 'int', 'visible' => false, 'required' => false));
$installer->addAttribute('quote_address_item', 'gift_message_id', array('type' => 'int', 'visible' => false, 'required' => false));
$installer->addAttribute('order',              'gift_message_id', array('type' => 'int', 'visible' => false, 'required' => false));
$installer->addAttribute('order_item',         'gift_message_id', array('type' => 'int', 'visible' => false, 'required' => false));
$installer->addAttribute('order_item',  	   'gift_message_available', array('type' => 'int', 'visible' => false, 'required' => false));