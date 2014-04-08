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
class colsetEnd extends \FelixPfeiffer\Subcolumns\colsetEnd
{

	/**
	 * extends subcolumns compile method for generating dynamically column set
	 */
	public function generate()
	{
        
        if (TL_MODE == 'BE') {
            
            $this->Template = new \BackendTemplate('be_subcolumns_end');
            $this->Template->hint = 'Spaltenset Ende';

            return $this->Template->parse();
            
        }
        
        return parent::generate();
       
	}
}