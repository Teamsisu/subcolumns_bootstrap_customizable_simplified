<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


MrTool\MultipleCallbacks\Callback::add('tl_content', 'cut', array('Teamsisu\\ColumnSet\\Callbacks', 'cutButton'));
MrTool\MultipleCallbacks\Callback::add('tl_content', 'toggle', array('Teamsisu\\ColumnSet\\Callbacks', 'toggleButton'));
MrTool\MultipleCallbacks\Callback::add('tl_content', 'delete', array('Teamsisu\\ColumnSet\\Callbacks', 'deleteButton'));
MrTool\MultipleCallbacks\Callback::add('tl_content', 'show', array('Teamsisu\\ColumnSet\\Callbacks', 'showButton'));
MrTool\MultipleCallbacks\Callback::add('tl_content', 'copy', array('Teamsisu\\ColumnSet\\Callbacks', 'copyButton'));


$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('Teamsisu\\ColumnSet\\Callbacks', 'getElementClasses');
$GLOBALS['TL_DCA']['tl_content']['list']['sorting']['child_record_callback'] = array('Teamsisu\\ColumnSet\\Callbacks', 'createChildRecord');
$GLOBALS['TL_DCA']['tl_content']['list']['sorting']['child_record_class'] = &$GLOBALS['content_classes']['current'];