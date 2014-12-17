<?php

namespace tr\rsywxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LakersController extends Controller {

    public function indexAction($year) {
        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository("trrsywxBundle:Lakers")->getGames($year);
        $win = $em->getRepository("trrsywxBundle:Lakers")->getWinLose($year, 'W');
        $win = $win['g'];
        $lose = $em->getRepository("trrsywxBundle:Lakers")->getWinLose($year, 'L');
        $lose = $lose['g'];
        if(($win+$lose)==0)
            $p=0;
        else
            $p = number_format($win / ($win + $lose) * 100, 1);
        
        $years = $em->getRepository("trrsywxBundle:Lakers")->getYears();



        return $this->render('trrsywxBundle:Lakers:index.html.twig', array('year' => $year, 'games' => $games, 'win' => $win, 'lose' => $lose, 'p' => $p, 'years' => $years));
    }

    

}
