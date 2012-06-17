<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * apptestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class apptestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // manwin_page_default_index
        if (preg_match('#^/(?P<_locale>[^/]+?)/about$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\PageBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'manwin_page_default_index'));
        }

        // add_comment
        if ($pathinfo === '/customer/comment/add') {
            return array (  '_controller' => 'Manwin\\Bundle\\CommentBundle\\Controller\\DefaultController::indexAction',  '_route' => 'add_comment',);
        }

        // show_comment
        if (0 === strpos($pathinfo, '/customer/comment') && preg_match('#^/customer/comment/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\CommentBundle\\Controller\\DefaultController::showAction',)), array('_route' => 'show_comment'));
        }

        // manwin_cache_default_index
        if ($pathinfo === '/cache/expiration') {
            return array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::indexAction',  '_route' => 'manwin_cache_default_index',);
        }

        // manwin_cache_default_shared
        if ($pathinfo === '/cache/shared') {
            return array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::sharedAction',  '_route' => 'manwin_cache_default_shared',);
        }

        // customer
        if (rtrim($pathinfo, '/') === '/customer') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'customer');
            }
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customer',);
        }

        // customer_show
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::showAction',)), array('_route' => 'customer_show'));
        }

        // customer_new
        if ($pathinfo === '/customer/new') {
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::newAction',  '_route' => 'customer_new',);
        }

        // customer_create
        if ($pathinfo === '/customer/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_create;
            }
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::createAction',  '_route' => 'customer_create',);
        }
        not_customer_create:

        // customer_edit
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::editAction',)), array('_route' => 'customer_edit'));
        }

        // customer_update
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::updateAction',)), array('_route' => 'customer_update'));
        }
        not_customer_update:

        // customer_delete
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::deleteAction',)), array('_route' => 'customer_delete'));
        }
        not_customer_delete:

        // manwin_customer_default_index
        if (0 === strpos($pathinfo, '/hash') && preg_match('#^/hash/(?P<password>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'manwin_customer_default_index'));
        }

        // registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\DefaultController::registerAction',  '_route' => 'registration',);
        }

        // manwin_customer_security_index
        if ($pathinfo === '/customer/account') {
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::indexAction',  '_route' => 'manwin_customer_security_index',);
        }

        // customer_login
        if ($pathinfo === '/customer/login') {
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::loginAction',  '_route' => 'customer_login',);
        }

        // customer_auth
        if ($pathinfo === '/customer/auth') {
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::authenticateAction',  '_route' => 'customer_auth',);
        }

        // customer_logout
        if ($pathinfo === '/customer/logout') {
            return array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'customer_logout',);
        }

        // manwin_training_converter_celsius
        if (0 === strpos($pathinfo, '/celsius') && preg_match('#^/celsius/(?P<celsius>\\-?\\d+)/fahrenheit\\.(?P<_format>xml|json)$#xs', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_manwin_training_converter_celsius;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\ConverterController::celsiusAction',)), array('_route' => 'manwin_training_converter_celsius'));
        }
        not_manwin_training_converter_celsius:

        // greet
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'greet'));
        }

        // manwin_training_default_selectcolor
        if (0 === strpos($pathinfo, '/color') && preg_match('#^/color/(?P<color>red|green|blue)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\DefaultController::selectColorAction',)), array('_route' => 'manwin_training_default_selectcolor'));
        }

        // show_color
        if ($pathinfo === '/color') {
            return array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\DefaultController::colorAction',  '_route' => 'show_color',);
        }

        // _internal
        if (preg_match('#^/_internal/(?P<controller>[^/]+?)/(?P<path>.+)\\.(?P<_format>[^.]+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',)), array('_route' => '_internal'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
