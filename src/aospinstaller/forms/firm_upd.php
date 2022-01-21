<?php
namespace aospinstaller\forms;
use windows;
use bundle\windows;

use std, gui, framework, aospinstaller;


class firm_upd extends AbstractForm
{

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {
     WindowsScriptHost :: cmd("flash.bat");
    }



}
