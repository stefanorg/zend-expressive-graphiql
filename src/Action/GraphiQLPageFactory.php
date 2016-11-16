<?php

namespace GraphiQLExtension\Action;

use GraphiQLExtension\Options\GraphiqlOptions;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class GraphiQLPageFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get("config");

        if (!isset($config['graphiql'])) {
            throw new \RuntimeException(
                "GraphiQLExtention: `graphiql` configuration parameter not found. You must set GraphiQLExtension configuration under `graphiql` key in your config files."
            );
        }

        $options = new GraphiqlOptions($config['graphiql']);
        $template = $container->get(TemplateRendererInterface::class);

        return new GraphiQLPageAction($options, $template);
    }
}
