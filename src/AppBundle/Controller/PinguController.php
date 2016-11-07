<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class PinguController extends Controller
{
/**
 * @Route("/pingu/{name}")
 */
	public function showAction($name)
	{
echo $twig->render('homepage.twig', array(
		'pageTitle' => 'Welcome to Penguins R Us!',
		'products' => array(
				'Tuxedo',
				'Bow tie',
				'Black Boxers',
		),
));
	}
}