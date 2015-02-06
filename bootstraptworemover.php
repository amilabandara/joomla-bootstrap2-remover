<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Joomla System plugin
 *
 * @package     Joomla.Plugin
 * @subpackage  System.bootstraptworemover
 */
class plgSystemBootstraptworemover extends JPlugin
{
	/**
	 * Method to catch the onAfterInitialise event.
	 *
	 * @return  boolean
	 *
	 * @since   1.5
	 *
	 * @throws  InvalidArgumentException
	 */
    

	public function onBeforeCompileHead()
    {
        // Application Object
        $app = JFactory::getApplication();

        // Frontend
        if( $app instanceof JApplicationSite )
        {
            $doc = JFactory::getDocument();
			unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']);
			unset($doc->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
			unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']);
			unset($doc->_styleSheets[JURI::root(true).'/media/jui/css/bootstrap.min.css']);
			unset($doc->_styleSheets[JURI::root(true).'/media/jui/css/bootstrap-responsive.min.css']);
			unset($doc->_styleSheets[JURI::root(true).'/media/jui/css/bootstrap-extended.css']);
            
        }
    }  
}