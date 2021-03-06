<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {
        return $this->render('deb.html.twig');
    }

    /**
     * @Route("/exec_batch", name="exec_batch")
     */
    public function indexAction()
    {
	     set_time_limit (3000000);
        $process = new Process('sudo -u x-road-user ansible-playbook -i /etc/x-road-repo/ansible/hosts/lxd_MyHost.txt road_init.yml');
        $process->run();
        /*if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }*/
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($process, 'json');
        return new JsonResponse(array('error' => 0));
        //return $this->render('home.html.twig', array("test" => "je suis un test", "log" => $process->getOutput()));
      }

      /**
       * @Route("/form", name="form")
       */
    public function formAction(Request $request)
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
