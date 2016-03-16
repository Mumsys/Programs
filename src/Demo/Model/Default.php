<?php

/*{{{*/
/**
 * Mumsys_Program_Demo_Default_Model
 * for MUMSYS (Multi User Management System)
 * ----------------------------------------------------------------------------
 * @author Florian Blasel <flobee.code@gmail.com>
 * @copyright Copyright (c) 2016 by Florian Blasel for FloWorks Company
 * @license LGPL Version 3 http://www.gnu.org/licenses/lgpl-3.0.txt
 * ----------------------------------------------------------------------------
 * @category    Mumsys_Program
 * @package     Demo
 * @subpackage  Default_Model
 * @version     1.0.0
 * Created: 2016-03-16
 * @filesource
 */
/*}}}*/


/**
 * Default model for the demo program.
 * Get and set demos
 *
 * @category    Mumsys_Program
 * @package     Demo
 * @subpackage  Default_Model
 */
class Mumsys_Program_Demo_Default_Model
    extends Mumsys_Mvc_Program_Model_Abstract
{
    /**
     * List of Demos
     * @var array
     */
    private $_demos;

    /**
     * Return the list of demos.
     *
     * @return array List of demo IDs
     */
    public function getDemos($xy)
    {
        return array(1,2,3,4,5);
    }
    /**
     * Sets/ replaces the list of demos.
     *
     * @param array $demos List of demo IDs
     */
    public function setDemos(array $demos)
    {
        $this->_demos = $demos;
    }

}