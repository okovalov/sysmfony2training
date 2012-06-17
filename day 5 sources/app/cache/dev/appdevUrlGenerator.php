<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'manwin_page_default_index' => true,
       'add_comment' => true,
       'show_comment' => true,
       'manwin_cache_default_index' => true,
       'manwin_cache_default_shared' => true,
       'customer' => true,
       'customer_show' => true,
       'customer_new' => true,
       'customer_create' => true,
       'customer_edit' => true,
       'customer_update' => true,
       'customer_delete' => true,
       'manwin_customer_customermanager_index' => true,
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

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getmanwin_page_default_indexRouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'Manwin\\Bundle\\PageBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/about',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => '_locale',  ),));
    }

    private function getadd_commentRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CommentBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/comment/add',  ),));
    }

    private function getshow_commentRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Manwin\\Bundle\\CommentBundle\\Controller\\DefaultController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer/comment',  ),));
    }

    private function getmanwin_cache_default_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cache/expiration',  ),));
    }

    private function getmanwin_cache_default_sharedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CacheBundle\\Controller\\DefaultController::sharedAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cache/shared',  ),));
    }

    private function getcustomerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/',  ),));
    }

    private function getcustomer_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getcustomer_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/new',  ),));
    }

    private function getcustomer_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/customer/create',  ),));
    }

    private function getcustomer_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getcustomer_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getcustomer_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getmanwin_customer_customermanager_indexRouteInfo()
    {
        return array(array (  0 => 'letter',), array (  'letter' => 'all',  '_controller' => 'Manwin\\Bundle\\CustomerBundle\\Controller\\CustomerManagerController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'text',    1 => '/customer/man',  ),));
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
