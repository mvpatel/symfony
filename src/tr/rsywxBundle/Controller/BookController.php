<?php

namespace tr\rsywxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{
    public function detailAction($id)
    {
        $logger = $this->createLogger();

        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('trrsywxBundle:BookBook')->findOneById($id);
        if (is_null($book)) // Book not found
        {
            return $this->render('trrsywxBundle:Books:BookNotFound.html.twig', array('id' => $id));
        }

        $douban = $em->getRepository('trrsywxBundle:BookBook')->getDouban($book->getIsbn());
        if ($douban['summary'] == '（豆瓣找不到）')
        {
            $logger->addError('豆瓣找不到ISBN ' . $book->getIsbn() . '的书：' . $book->getTitle());
        }
        else
        {
            $logger->addInfo('豆瓣找到ISBN ' . $book->getIsbn() . '的书：' . $book->getTitle());
        }
        $lvt = $em->getRepository('trrsywxBundle:BookBook')->getLastVisit($book->getId());

        $session = $this->getRequest()->getSession();
        $count = $session->get('addvc', 1);
        $session->remove('addvc');
        $vc = $em->getRepository('trrsywxBundle:BookBook')->getVisitCount($book->getId(), $count);


        return $this->render('trrsywxBundle:Books:Detail.html.twig', array('book' => $book, 'douban' => $douban, 'vc' => $vc, 'lvt' => $lvt));
    }

    private function createLogger()
    {
        $logger = new \Monolog\Logger('my_logger');
        $logger->pushHandler(new \Monolog\Handler\StreamHandler('douban.log', \Monolog\Logger::DEBUG));
        $logger->pushHandler(new \Symfony\Bridge\Monolog\Handler\FirePHPHandler);

        return $logger;
    }

    public function tagsbyidAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository('trrsywxBundle:BookBook')->getTagsByBookId($id);


        return $this->render('trrsywxBundle:Books:Tags.html.twig', array('tags' => $tags));
    }

    public function listAction($page, $key)
    {
        $em = $this->getDoctrine()->getManager();
        $rpp = $this->container->getParameter('books_per_page');

        $repo = $em->getRepository('trrsywxBundle:BookBook');

        list($res, $totalcount) = $repo->getResultAndCount($page, $rpp, $key);

        $paginator = new \tr\rsywxBundle\Utility\Paginator($page, $totalcount, $rpp);
        $pagelist = $paginator->getPagesList();

        return $this->render('trrsywxBundle:Books:List.html.twig', array('res' => $res, 'paginator' => $pagelist, 'cur' => $page, 'total' => $paginator->getTotalPages(), 'key'=>$key));
    }

    public function searchAction(Request $req)
    {
        $q = $req->request->all();

        $page = 1;
        $key = $q['key'];

        $em = $this->getDoctrine()->getManager();
        $rpp = $this->container->getParameter('books_per_page');

        $repo = $em->getRepository('trrsywxBundle:BookBook');

        list($res, $totalcount) = $repo->getResultAndCount($page, $rpp, $key);

        $paginator = new \tr\rsywxBundle\Utility\Paginator($page, $totalcount, $rpp);
        $pagelist = $paginator->getPagesList();

        return $this->render('trrsywxBundle:Books:List.html.twig', array('res' => $res, 'paginator' => $pagelist, 'cur' => $page, 'total' => $paginator->getTotalPages(), 'key' => $key));
    }

    public function gotopageAction(Request $req)
    {
        $q = $req->request->all();
        $page = $q['page'];
        $cur = $q['current'];

        if (is_numeric($page))
        {
            $uri = $this->get('router')->generate('book_list', array('page' => $page));
            return $this->redirect($uri);
        }
        else
        {
            $uri = $this->get('router')->generate('book_list', array('page' => $cur));
            return $this->redirect($uri);
        }
    }

    public function tagsAddAction(Request $req)
    {
        $q = $req->request->all();
        $tags = $q['newtags'];
        $id = $q['id'];

        $this->processTagAdd($tags, $id);
        $url = $this->get('router')->generate('book_detail', array('id' => $id));

        //Add session to notify controller that we are refreshing and visit count should remain
        $session = $this->getRequest()->getSession();
        $session->set('addvc', '0');

        return $this->redirect($url);
    }

    private function processTagAdd($tags, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $existing = $this->convertTagsToArray($em->getRepository('trrsywxBundle:BookBook')->getTagsByBookId($id));

        $book = $em->getRepository('trrsywxBundle:BookBook')->findOneBy(array('id' => $id));

        $tags = trim($tags);
        $tagslist = explode(' ', $tags);
        foreach ($tagslist as $tag)
        {
            if (!in_array($tag, $existing)) //This is a new tag
            {
                $booktaglist = new \tr\rsywxBundle\Entity\BookTaglist();
                $booktaglist->setBookid($book);
                $booktaglist->setTag($tag);

                $em->persist($booktaglist);
            }
            $em->flush();
        }
    }

    private function convertTagsToArray($existing)
    {
        $ret = array();
        foreach ($existing as $value)
        {
            $ret[] = $value->getTag();
        }
        return $ret;
    }
    

}
