<?php
class Webkul_Quicklogin_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/quicklogin?id=15 
    	 *  or
    	 * http://site.com/quicklogin/id/15 	
    	 */
    	/* 
		$quicklogin_id = $this->getRequest()->getParam('id');

  		if($quicklogin_id != null && $quicklogin_id != '')	{
			$quicklogin = Mage::getModel('quicklogin/quicklogin')->load($quicklogin_id)->getData();
		} else {
			$quicklogin = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($quicklogin == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$quickloginTable = $resource->getTableName('quicklogin');
			
			$select = $read->select()
			   ->from($quickloginTable,array('quicklogin_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$quicklogin = $read->fetchRow($select);
		}
		Mage::register('quicklogin', $quicklogin);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}