<?php

namespace CBoulanger\Controller\Admin;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;

class TestController extends FrameworkBundleAdminController
{
    public function indexAction(Request $request)
    {
        return $this->render('@Modules/cboulanger_demo/views/Admin/Test/index.html.twig', [
             'name' => $request->get('name'),
             'layoutTitle' => 'Controller using the modern architecture',
             'help_link' => false,
        ]);
    }
}
