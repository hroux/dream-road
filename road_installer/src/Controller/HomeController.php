<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
	set_time_limit (-1);
        $process = new Process('echo "x-road-password" | sudo -u x-road-user /etc/x-road-repo/X-Road/src/prepare_buildhost.sh');
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        return $this->render('home.html.twig', array("test" => "je suis un test", "log" => $process->getOutput()));
    }
}
