<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Subcolumns_bootstrap_customizable_simplified
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Teamsisu',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Teamsisu\ColumnSet\colsetStart' => 'system/modules/subcolumns_bootstrap_customizable_simplified/elements/colsetStart.php',
	'Teamsisu\ColumnSet\colsetPart'  => 'system/modules/subcolumns_bootstrap_customizable_simplified/elements/colsetPart.php',
	'Teamsisu\ColumnSet\colsetEnd'  => 'system/modules/subcolumns_bootstrap_customizable_simplified/elements/colsetEnd.php',
    'Teamsisu\ColumnSet\Callbacks'   => 'system/modules/subcolumns_bootstrap_customizable_simplified/classes/Callbacks.php'
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_subcolumns_start'  => 'system/modules/subcolumns_bootstrap_customizable_simplified/templates',
	'be_subcolumns_end'  => 'system/modules/subcolumns_bootstrap_customizable_simplified/templates',
));