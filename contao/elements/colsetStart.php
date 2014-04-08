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
 * Class colsetStart
 * @package Netzmacht\ColumnSet
 */
class colsetStart extends \Netzmacht\ColumnSet\colsetStart
{

	/**
	 * extends subcolumns compile method for generating dynamically column set
	 */
	public function generate()
	{
        
        if (TL_MODE == 'BE') {
            
            $this->Template = new \BackendTemplate('be_subcolumns_start');
            $this->Template->rowCount = $this->sc_type;
            $this->Template->hint = sprintf($GLOBALS['TL_LANG']['MSC']['contentAfter'], $GLOBALS['TL_LANG']['MSC']['sc_first']);
            return $this->Template->parse();
            
        }
        
        return parent::generate();
        
	}
}