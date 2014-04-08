<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   netzmacht-columnset
 * @author    David Molineus <http://www.netzmacht.de>
 * @license   GNU/LGPL
 * @copyright Copyright 2012 David Molineus netzmacht creative
 *
 **/

namespace Teamsisu\ColumnSet;


/**
 * Class colsetPart
 * @package Netzmacht\ColumnSet
 */
class colsetPart extends \Netzmacht\ColumnSet\colsetPart
{

	/**
	 * extends subcolumns compile method for generating dynamically column set
	 */
	public function generate()
	{
        
        if (TL_MODE == 'BE') {
            
            switch($this->sc_sortid)
            {
                case 1:
                    $colID = $GLOBALS['TL_LANG']['MSC']['sc_second'];
                    break;
                case 2:
                    $colID = $GLOBALS['TL_LANG']['MSC']['sc_third'];
                    break;
                case 3:
                    $colID = $GLOBALS['TL_LANG']['MSC']['sc_fourth'];
                    break;
                case 4:
                    $colID = $GLOBALS['TL_LANG']['MSC']['sc_fifth'];
                    break;
            }
            
            $this->Template = new \BackendTemplate('be_subcolumns');
            $this->Template->hint = sprintf($GLOBALS['TL_LANG']['MSC']['contentAfter'], $colID);

            return $this->Template->parse();
            
        }
        
        return parent::generate();
       
	}
}