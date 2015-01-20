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
    public function onAfterInitialise()
    {
		return true;
    }
	
	/**
	 * Method to catch the onAfterRoute event.
	 *
	 * @since   3.0
	 */
    public function onAfterRoute()
    {
		return;
    }
    
	/**
	 * Method to catch the onAfterDispatch event.
	 *
	 * @return	boolean		True on success, false otherwise
	 *
	 * @since   2.5
	 */
    public function onAfterDispatch()
    {
		return true;
    }

	/**
	 * Method to catch the onAfterRender event.
	 *
	 * @since  2.5
	 */
    public function onAfterRender()
    {

    }	
    
	/**
	 * Method to catch the onUserLoginFailure event.
	 *
	 * @param	?	$response
	 */
    public function onUserLoginFailure($response)
	{
		return;
    }
    
	/**
	 * This method should handle any logout logic and report back to the subject
	 *
	 * @param   array  $user		Holds the user data.
	 * @param   array  $options		Array holding options (client, ...).
	 *
	 * @return  boolean		Always returns true
	 *
	 * @since   1.6
	 */
	public function onUserLogout($user, $options = array())
	{
		return true;
	}  

	public function onBeforeCompileHead()
    {
        // Application Object
        $app = JFactory::getApplication();

        // Frontend
        if( $app instanceof JApplicationSite )
        {
            $doc            = JFactory::getDocument();
            // Remove default bootstrap
            unset($doc->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
        }
    }  
}