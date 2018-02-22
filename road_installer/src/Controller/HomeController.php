<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
      $form = $this->createFormBuilder()
                   ->add('centralServerIp', TextType::class)
                   ->add('securityServerIp', TextType::class)
                   ->add('configurationProxyIp', TextType::class)
                   ->add('certificationAutorityIp', TextType::class)
                   ->add('C\'est parti !', SubmitType::class)
                   ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
          return $this->render('home.html.twig', array("test" => "je suis un test", "log" => "je suis process output", 'form' => $form->createView(), 'data' => $form->getData()));
        return $this->render('home.html.twig', array("test" => "je suis un test", "log" => "je suis process output", 'form' => $form->createView()));
    }
}
