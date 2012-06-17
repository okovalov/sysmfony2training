<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'manwin_cache_default_index' => true,
       'manwin_cache_default_shared' => true,
       'manwin_customer_default_index' => true,
       'registration' => true,
       'manwin_customer_security_index' => true,
       'customer_login' => true,
       'customer_auth' => true,
       'customer_logout' => true,
       'manwin_training_converter_celsius' => true,
       'greet' => true,
       'manwin_training_default_selectcolor' => true,
       'show_color' => true,
       '_internal' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getmanwin_cache_default_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cache/expiration',  ),));
    }

    private function getmanwin_cache_default_sharedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::sharedAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cache/shared',  ),));
    }

    private function getmanwin_customer_default_indexRouteInfo()
    {
        return array(array (  0 => 'password',), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'password',  ),  1 =>   array (    0 => 'text',    1 => '/hash',  ),));
    }

    private function getregistrationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\DefaultController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register',  ),));
    }

    private function getmanwin_customer_security_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/account',  ),));
    }

    private function getcustomer_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/login',  ),));
    }

    private function getcustomer_authRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::authenticateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/auth',  ),));
    }

    private function getcustomer_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/logout',  ),));
    }

    private function getmanwin_training_converter_celsiusRouteInfo()
    {
        return array(array (  0 => 'celsius',  1 => '_format',), array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\ConverterController::celsiusAction',), array (  'celsius' => '\\-?\\d+',  '_format' => 'xml|json',  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'xml|json',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/fahrenheit',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\-?\\d+',    3 => 'celsius',  ),  3 =>   array (    0 => 'text',    1 => '/celsius',  ),));
    }

    private function getgreetRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getmanwin_training_default_selectcolorRouteInfo()
    {
        return array(array (  0 => 'color',), array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\DefaultController::selectColorAction',), array (  'color' => 'red|green|blue',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'red|green|blue',    3 => 'color',  ),  1 =>   array (    0 => 'text',    1 => '/color',  ),));
    }

    private function getshow_colorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\TrainingBundle\\Controller\\DefaultController::colorAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/color',  ),));
    }

    private function get_internalRouteInfo()
    {
        return array(array (  0 => 'controller',  1 => 'path',  2 => '_format',), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',), array (  'path' => '.+',  '_format' => '[^.]+',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^.]+',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '.+',    3 => 'path',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'controller',  ),  3 =>   array (    0 => 'text',    1 => '/_internal',  ),));
    }
}
