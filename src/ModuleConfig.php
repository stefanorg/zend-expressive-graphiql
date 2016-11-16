<?php
/**
 * Created by PhpStorm.
 * User: stefano
 * Date: 16/11/16
 * Time: 7.51
 */

namespace GraphiQLExtension;


use GraphiQLExtension\Action\GraphiQLPageAction;
use GraphiQLExtension\Action\GraphiQLPageFactory;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\Expressive\Twig\TwigRendererFactory;

class ModuleConfig
{
    public function __invoke()
    {
        return [

            'graphiql' => [
                'token_header' => 'GRAPHQL_TOKEN',
                'graphql_server_url' => '/graphql',
                'template_name' => 'graphql::graphiql'
            ],

            'dependencies' => [
                'factories' => [
                    TemplateRendererInterface::class => TwigRendererFactory::class,
                    GraphiQLPageAction::class => GraphiQLPageFactory::class
                ],
            ],

            'routes' => [
                [
                    'name' => 'graphiql',
                    'path' => '/graphiql',
                    'middleware' => GraphiQLPageAction::class,
                    'allowed_methods' => ['GET'],
                ]
            ],

            'templates' => [
                'extension' => 'html.twig',
                'paths'     => [
                    'graphql'    => [__DIR__ . '/../templates/graphql']
                ],
            ]
        ];
    }
}