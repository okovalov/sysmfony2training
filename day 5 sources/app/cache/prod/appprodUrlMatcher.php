<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // manwin_cache_default_index
        if ($pathinfo === '/cache/expiration') {
            return array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::indexAction',  '_route' => 'manwin_cache_default_index',);
        }

        // manwin_cache_default_shared
        if ($pathinfo === '/cache/shared') {
            return array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::sharedAction',  '_route' => 'manwin_cache_default_shared',);
        }

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
