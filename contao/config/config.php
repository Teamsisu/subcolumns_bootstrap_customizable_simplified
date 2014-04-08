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


/**
 * replace content elements
 */
$GLOBALS['TL_CTE']['subcolumn']['colsetStart'] = 'Teamsisu\\ColumnSet\\colsetStart';
$GLOBALS['TL_CTE']['subcolumn']['colsetPart'] = 'Teamsisu\\ColumnSet\\colsetPart';
$GLOBALS['TL_CTE']['subcolumn']['colsetEnd'] = 'Teamsisu\\ColumnSet\\colsetEnd';

if(TL_MODE == 'BE'){
    $GLOBALS['TL_CSS']['simpliSubcolumns'] = 'system/modules/subcolumns_bootstrap_customizable_simplified/assets/custom_be.css';
}