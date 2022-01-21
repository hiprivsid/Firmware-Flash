<?php
namespace aospinstaller\forms;
use windows;
use bundle\windows;

use std, gui, framework, aospinstaller;


class MainForm extends AbstractForm
{

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->shutdown();

        
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('select_company');

    
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('select_company');

        
    }



}
