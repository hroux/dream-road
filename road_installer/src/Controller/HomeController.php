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
        $process = new Process('echo "x-road-password" | sudo -u x-road-user /etc/x-road-repo/X-Road/src/prepare_buildhost.sh');
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($process, 'json');
        return new JsonResponse(array('error' => 0));
        //return $this->render('home.html.twig', array("test" => "je suis un test", "log" => $process->getOutput()));
    }
}
