<?php

/*{{{*/
/**
 * Mumsys_Program_Demo_Model
 * for MUMSYS (Multi User Management System)
 * ----------------------------------------------------------------------------
 * @author Florian Blasel <flobee.code@gmail.com>
 * @copyright Copyright (c) 2016 by Florian Blasel for FloWorks Company
 * @license LGPL Version 3 http://www.gnu.org/licenses/lgpl-3.0.txt
 * ----------------------------------------------------------------------------
 * @category    Mumsys
 * @package     Mumsys_Library
 * @subpackage  Mumsys_Mvc
 * @version     1.0.0
 * Created: 2016-03-16
 * @filesource
 */
/*}}}*/

class Mumsys_Program_Demo_Model
    extends Mumsys_Program_Model_Abstract
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