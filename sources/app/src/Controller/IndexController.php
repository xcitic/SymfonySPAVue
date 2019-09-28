<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class IndexController extends AbstractController
{
  /**
   * @Route("/{req}", name="index", requirements={"req"="^(?!api|_(profiler|wdt)).*"})
   */
    public function indexAction(): Response
    {
        return $this->render('base.html.twig', []);
    }
}
