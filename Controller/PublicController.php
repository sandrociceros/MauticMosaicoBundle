<?php

namespace MauticPlugin\MauticMosaicoBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;
use Mautic\CoreBundle\Controller\FormController;

class PublicController extends FormController
{
    public function builderAction($objectId)
    {
        $model = $this->getModel('email');
        return $this->render('MauticMosaicoBundle:Default:index.html.php');
    }
}
