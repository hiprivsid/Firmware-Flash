<?php
namespace aospinstaller\forms;
use windows;
use bundle\windows;

use std, gui, framework, aospinstaller;


class firm_upd_hd2 extends AbstractForm
{

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {
        WindowsScriptHost :: cmd("flash_hd2.bat");
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $e = null)
    {    
        
    }





}
