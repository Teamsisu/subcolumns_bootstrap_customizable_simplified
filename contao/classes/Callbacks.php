<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Teamsisu\ColumnSet;

class Callbacks extends \Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function cutButton($arrRow, $href, $label, $title, $icon, $attributes, $strTable, $arrRootIds, $arrChildRecordIds, $blnCircularReference, $strPrevious, $strNext, $return)
    {

        if ($arrRow['type'] == 'colsetPart' || $arrRow['type'] == 'colsetEnd' || $arrRow['type'] == 'colsetStart') {
            $return = '';
        } else {
            return $return;
        }
    }

    public function deleteButton($arrRow, $href, $label, $title, $icon, $attributes, $strTable, $arrRootIds, $arrChildRecordIds, $blnCircularReference, $strPrevious, $strNext, $return)
    {

        if ($arrRow['type'] == 'colsetPart' || $arrRow['type'] == 'colsetEnd') {
            $return = '';
        } else {
            return $return;
        }
    }

    public function toggleButton($arrRow, $href, $label, $title, $icon, $attributes, $strTable, $arrRootIds, $arrChildRecordIds, $blnCircularReference, $strPrevious, $strNext, $return)
    {

        if ($arrRow['type'] == 'colsetPart' || $arrRow['type'] == 'colsetEnd') {
            $return = '';
        } else {
            return $return;
        }
    }

    public function showButton($arrRow, $href, $label, $title, $icon, $attributes, $strTable, $arrRootIds, $arrChildRecordIds, $blnCircularReference, $strPrevious, $strNext, $return)
    {
        return '';
    }
    
    public function copyButton($arrRow, $href, $label, $title, $icon, $attributes, $strTable, $arrRootIds, $arrChildRecordIds, $blnCircularReference, $strPrevious, $strNext, $return)
    {
        if ($arrRow['type'] == 'colsetPart' || $arrRow['type'] == 'colsetEnd' || $arrRow['type'] == 'colsetStart') {
            $return = '';
        } else {
            return $return;
        }
    }

    public function createButton($arrRow, $href, $label, $title, $icon, $attributes, $strTable, $arrRootIds, $arrChildRecordIds, $blnCircularReference, $strPrevious, $strNext, $return)
    {

        if ($arrRow['type'] == 'colsetPart' || $arrRow['type'] == 'colsetEnd') {
            $return = '';
        } else {
            return $return;
        }
    }

    public function createChildRecord($arrRow)
    {

        $GLOBALS['content_classes']['count'] ++;
        $GLOBALS['content_classes']['current'] = $GLOBALS['content_classes']['classes'][$GLOBALS['content_classes']['count']];

        $tlContent = new \tl_content();
        return $tlContent->addCteType($arrRow);
    }

    public function getElementClasses($dca)
    {

        $db = \Database::getInstance();

        $entries = $db->prepare("SELECT type FROM tl_content WHERE pid = ? ORDER BY sorting ASC")->execute($dca->id)->fetchAllAssoc();

        foreach ($entries AS $item) {
            $GLOBALS['content_classes']['classes'][] = 'ele_' . $item['type'];
        }
        $GLOBALS['content_classes']['count'] = 0;
        $GLOBALS['content_classes']['current'] = $GLOBALS['content_classes']['classes'][0];
    }

}
