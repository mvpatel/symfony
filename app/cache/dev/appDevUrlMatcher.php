<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/agent')) {
            // agent
            if (rtrim($pathinfo, '/') === '/agent') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agent;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agent');
                }

                return array (  '_controller' => 'Acme\\AgentBundle\\Controller\\AgentController::indexAction',  '_route' => 'agent',);
            }
            not_agent:

            // agent_create
            if ($pathinfo === '/agent/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_agent_create;
                }

                return array (  '_controller' => 'Acme\\AgentBundle\\Controller\\AgentController::createAction',  '_route' => 'agent_create',);
            }
            not_agent_create:

            // agent_new
            if ($pathinfo === '/agent/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agent_new;
                }

                return array (  '_controller' => 'Acme\\AgentBundle\\Controller\\AgentController::newAction',  '_route' => 'agent_new',);
            }
            not_agent_new:

            // agent_show
            if (preg_match('#^/agent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agent_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agent_show')), array (  '_controller' => 'Acme\\AgentBundle\\Controller\\AgentController::showAction',));
            }
            not_agent_show:

            // agent_edit
            if (preg_match('#^/agent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agent_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agent_edit')), array (  '_controller' => 'Acme\\AgentBundle\\Controller\\AgentController::editAction',));
            }
            not_agent_edit:

            // agent_update
            if (preg_match('#^/agent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_agent_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agent_update')), array (  '_controller' => 'Acme\\AgentBundle\\Controller\\AgentController::updateAction',));
            }
            not_agent_update:

            // agent_delete
            if (preg_match('#^/agent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_agent_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agent_delete')), array (  '_controller' => 'Acme\\AgentBundle\\Controller\\AgentController::deleteAction',));
            }
            not_agent_delete:

        }

        // acme_agent_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_agent_default_index')), array (  '_controller' => 'Acme\\AgentBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/guest')) {
            // guest
            if (rtrim($pathinfo, '/') === '/guest') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'guest');
                }

                return array (  '_controller' => 'Acme\\ClientBundle\\Controller\\GuestController::indexAction',  '_route' => 'guest',);
            }

            // guest_show
            if (preg_match('#^/guest/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guest_show')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\GuestController::showAction',));
            }

            // guest_new
            if ($pathinfo === '/guest/new') {
                return array (  '_controller' => 'Acme\\ClientBundle\\Controller\\GuestController::newAction',  '_route' => 'guest_new',);
            }

            // guest_create
            if ($pathinfo === '/guest/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_guest_create;
                }

                return array (  '_controller' => 'Acme\\ClientBundle\\Controller\\GuestController::createAction',  '_route' => 'guest_create',);
            }
            not_guest_create:

            // guest_edit
            if (preg_match('#^/guest/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guest_edit')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\GuestController::editAction',));
            }

            // guest_update
            if (preg_match('#^/guest/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_guest_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guest_update')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\GuestController::updateAction',));
            }
            not_guest_update:

            // guest_delete
            if (preg_match('#^/guest/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_guest_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guest_delete')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\GuestController::deleteAction',));
            }
            not_guest_delete:

        }

        if (0 === strpos($pathinfo, '/client')) {
            // client
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client');
                }

                return array (  '_controller' => 'Acme\\ClientBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\ClientController::showAction',));
            }

            // client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'Acme\\ClientBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }

            // client_create
            if ($pathinfo === '/client/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_create;
                }

                return array (  '_controller' => 'Acme\\ClientBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
            }
            not_client_create:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\ClientController::editAction',));
            }

            // client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\ClientController::updateAction',));
            }
            not_client_update:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

            // acme_client_homepage
            if (preg_match('#^/client/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_client_homepage')), array (  '_controller' => 'Acme\\ClientBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'tr\\rsywxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'trrsywxBundle:Default:contact.html.twig',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/books')) {
            // book_list
            if (0 === strpos($pathinfo, '/books/list') && preg_match('#^/books/list(?:/(?P<page>[^/]++)(?:/(?P<key>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_list')), array (  'page' => 1,  'key' => NULL,  '_controller' => 'tr\\rsywxBundle\\Controller\\BookController::listAction',));
            }

            // goto_page
            if ($pathinfo === '/books/gotopage') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_goto_page;
                }

                return array (  '_controller' => 'tr\\rsywxBundle\\Controller\\BookController::gotopageAction',  '_route' => 'goto_page',);
            }
            not_goto_page:

            // books_search
            if ($pathinfo === '/books/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_books_search;
                }

                return array (  '_controller' => 'tr\\rsywxBundle\\Controller\\BookController::searchAction',  '_route' => 'books_search',);
            }
            not_books_search:

            // book_detail
            if (preg_match('#^/books/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_detail')), array (  '_controller' => 'tr\\rsywxBundle\\Controller\\BookController::detailAction',));
            }

            // tag_list
            if (0 === strpos($pathinfo, '/books/tag') && preg_match('#^/books/tag/(?P<page>[^/]++)/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_list')), array (  '_controller' => 'tr\\rsywxBundle\\Controller\\BookController::taglistAction',  'page' => 1,));
            }

            // tags_add
            if ($pathinfo === '/books/addtag') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tags_add;
                }

                return array (  '_controller' => 'tr\\rsywxBundle\\Controller\\BookController::tagsAddAction',  '_route' => 'tags_add',);
            }
            not_tags_add:

            // cover
            if (0 === strpos($pathinfo, '/books/cover') && preg_match('#^/books/cover/(?P<id>[^/_]++)_(?P<title>[^/_]++)_(?P<author>[^/_]++)_(?P<width>[^/\\.]++)\\.png$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cover')), array (  '_controller' => 'tr\\rsywxBundle\\Controller\\DefaultController::coverAction',  'width' => 300,));
            }

            // reading_list
            if (0 === strpos($pathinfo, '/books/readings') && preg_match('#^/books/readings(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reading_list')), array (  '_controller' => 'tr\\rsywxBundle\\Controller\\ReadingController::listAction',  'page' => 1,));
            }

        }

        // lakers
        if (0 === strpos($pathinfo, '/misc/lakers') && preg_match('#^/misc/lakers/(?P<year>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lakers')), array (  '_controller' => 'tr\\rsywxBundle\\Controller\\LakersController::indexAction',));
        }

        // acme_task_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_task_homepage')), array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::indexAction',));
        }

        // new_form
        if ($pathinfo === '/newform') {
            return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::newAction',  '_route' => 'new_form',);
        }

        // task_success
        if ($pathinfo === '/task_success') {
            return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::successAction',  '_route' => 'task_success',);
        }

        // app_default_index
        if (0 === strpos($pathinfo, '/app') && preg_match('#^/app/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_index')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Acme\\AccountBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Acme\\AccountBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Acme\\AccountBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Acme\\AccountBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // default_account
        if (0 === strpos($pathinfo, '/account') && preg_match('#^/account/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'default_account')), array (  '_controller' => 'Acme\\AccountBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/register')) {
            // account_register
            if ($pathinfo === '/registerform') {
                return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\AccountController::registerAction',  '_route' => 'account_register',);
            }

            // account_create
            if ($pathinfo === '/register/create') {
                return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\AccountController::createAction',  '_route' => 'account_create',);
            }

        }

        // account_made
        if ($pathinfo === '/made') {
            return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\AccountController::madeAction',  '_route' => 'account_made',);
        }

        // alluser
        if ($pathinfo === '/alluser') {
            return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\AccountController::alluserAction',  '_route' => 'alluser',);
        }

        // updateuser
        if (0 === strpos($pathinfo, '/updateuser') && preg_match('#^/updateuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateuser')), array (  '_controller' => 'Acme\\AccountBundle\\Controller\\AccountController::updateuserAction',));
        }

        // acme_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_user_homepage')), array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // acme_menu
        if ($pathinfo === '/menu') {
            return array (  '_controller' => 'AcmeUserBundle:Builder:menu',  '_route' => 'acme_menu',);
        }

        // local_rout
        if ($pathinfo === '/local') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\LocalController::localAction',  '_route' => 'local_rout',);
        }

        // welcome_rout
        if (0 === strpos($pathinfo, '/welcome') && preg_match('#^/welcome/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'welcome_rout')), array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::helloAction',  '_format' => 'html',));
        }

        // redirect
        if (0 === strpos($pathinfo, '/redirect') && preg_match('#^/redirect/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'redirect')), array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::redirectAction',));
        }

        // error
        if ($pathinfo === '/error') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::errorAction',  '_route' => 'error',);
        }

        // session
        if ($pathinfo === '/session') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::sessionAction',  '_route' => 'session',);
        }

        // getlast
        if ($pathinfo === '/lastone') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::getlastAction',  '_locale' => 'en',  '_route' => 'getlast',);
        }

        // fos_facebook_channel
        if ($pathinfo === '/channel.html') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_facebook_channel;
            }

            return array (  '_controller' => 'FOSFacebookBundle:Facebook:channel',  '_route' => 'fos_facebook_channel',);
        }
        not_fos_facebook_channel:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
