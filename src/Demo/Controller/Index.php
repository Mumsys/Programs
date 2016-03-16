<?php

/*{{{*/
/**
 * ----------------------------------------------------------------------------
 * Mumsys_Program_Demo_Index_Controller
 * for MUMSYS (Multi User Management System)
 * ----------------------------------------------------------------------------
 * @author Florian Blasel <flobee.code@gmail.com>
 * @copyright Copyright (c) 2016 by Florian Blasel for FloWorks Company
 * @license LGPL Version 3 http://www.gnu.org/licenses/lgpl-3.0.txt
 * ----------------------------------------------------------------------------
 * @category    Mumsys_Program
 * @package     Demo
 * @subpackage  Index_Controller
 * @version     1.0.0
 * Created: 2016-03-16
 * @filesource
 */
/*}}}*/


/**
 * Demo index controller
 *
 * @category    Mumsys_Program
 * @package     Demo
 * @subpackage  Index_Controller
 */
class Mumsys_Program_Demo_Index_Controller
    extends Mumsys_Mvc_Program_Controller_Abstract
{

    protected $_oDB;
    /**
     *
     * @var Mumsys_Mvc_Templates_Html_Extended
     */
    protected $_display;

    /**
     * Optional constructor. If needed call the parent constructor which can
     * make the view available.
     */
    public function __construct( Mumsys_Context $context, Mumsys_Config_Program $programConfig )
    {
        parent::__construct($context, $programConfig );

        $this->_oDB = $context->getDatabase();
        // Parameters for an extended Html Output
        $this->_display = $this->_getDisplay($paramsForViewAndTemplatesConroller, 'Html', 'Extended');

        /* Parameters for an limited Html Output e.g: A blank page including
         * html head and basic css and javascripts which maybe needed. This View
         * is useful for special/custom rendering/output. */
        //$this->_display = $this->_getDisplay($paramsForViewAndTemplatesConroller, 'Html', 'Default');

        /* Demo of how to use simple text output. This can be used to output
         * simple ascii text to the browser or e.g. to the shell. This construct
         * can be usefult to start your own implementation for shell-output e.g:
         * With colers, linebreaks after 72 chars or dynamic wropping and so on.
         * Type: Text or Default are currently the same. See display factory */
        //$this->_display = $this->_getDisplay($paramsForViewAndTemplatesConroller, 'Default', 'Default');
        //$this->_display = $this->_getDisplay($paramsForViewAndTemplatesConroller, 'Text', 'Default');
    }


    public function IndexAction()
    {
        $cfg = & $this->_configs;
        $this->_display->getProgramNavi($cfg['program'], $cfg['controller']);
        $this->_display->title('ADMINISTRATION', 'MUMSYS Administration');
        $this->_display->show();
    }

}