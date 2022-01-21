<?php
namespace aospinstaller\forms;
use windows;
use bundle\windows;

use std, gui, framework, aospinstaller;


class select_company extends AbstractForm
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
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('firm_upd');

    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('firm_upd');

        
    }





}
