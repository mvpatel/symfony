<?php

namespace tr\rsywxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReadingController extends Controller
{

    public function SummaryAction()
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository('trrsywxBundle:BookReview')->getReadingSummary();

        $book = $em->getRepository('trrsywxBundle:BookReview')->getBookByReviewId($res['last']['id']);

        return $this->render('trrsywxBundle:Reading:Summary.html.twig', array('res' => $res, 'date' => date('Y年m月d日'), 'book' => $book));
    }

    public function listAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $rpp = $this->container->getParameter('readings_per_page');
        $repo = $em->getRepository('trrsywxBundle:BookHeadline');

        list($res, $totalcount) = $repo->getResultAndCount($page, $rpp);

        $paginator = new \tr\rsywxBundle\Utility\Paginator($page, $totalcount, $rpp);
        $pagelist = $paginator->getPagesList();

        return $this->render('trrsywxBundle:Readings:ReadingList.html.twig', array('page' => $page, 'res' => $res, 'paginator' => $pagelist, 'cur' => $page, 'total' => $paginator->getTotalPages()));
    }

    public function reviewListAction($hid)
    {
        $repo = $this->getDoctrine()->getManager()->getRepository('trrsywxBundle:BookReview');
        $res = $repo->getReviewsById($hid);

        return $this->render('trrsywxBundle:Readings:ReviewList.html.twig', array('res' => $res));
    }

}
