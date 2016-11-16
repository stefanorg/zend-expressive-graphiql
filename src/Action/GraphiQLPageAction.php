<?php

namespace GraphiQLExtension\Action;

use GraphiQLExtension\Options\GraphiqlOptions;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;

class GraphiQLPageAction
{
    /**
     * @var GraphiqlOptions
     */
    private $options;

    private $template;

    public function __construct(GraphiqlOptions $options, Template\TemplateRendererInterface $template)
    {
        $this->options = $options;
        $this->template = $template;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {

        $data = [
            "graphQLUrl" => $this->options->getGraphqlServerUrl(),
            "tokenHeader" => $this->options->getTokenHeader()
        ];
        return new HtmlResponse($this->template->render($this->options->getTemplateName(), $data));
    }
}
