<?php

namespace MauticPlugin\MauticMosaicoBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;

class PublicController extends CommonController
{
    public function builderAction()
    {
        return $this->render('MauticMosaicoBundle:Default:index.html.php');
    }
}
