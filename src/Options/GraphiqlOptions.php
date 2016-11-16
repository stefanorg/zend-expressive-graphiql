<?php
/**
 * Created by PhpStorm.
 * User: stefano
 * Date: 16/11/16
 * Time: 8.40
 */

namespace GraphiQLExtension\Options;


use Zend\Stdlib\AbstractOptions;

class GraphiqlOptions extends AbstractOptions
{
    /**
     * @var string Token Header
     */
    private $token_header;

    /**
     * @var string The graphql server url
     */
    private $graphql_server_url;

    /**
     * @var string The registered template name to render
     */
    private $template_name;
    /**
     * @return string
     */
    public function getTokenHeader(): string
    {
        return $this->token_header;
    }

    /**
     * @param string $token_header
     */
    public function setTokenHeader(string $token_header)
    {
        $this->token_header = $token_header;
    }

    /**
     * @return string
     */
    public function getGraphqlServerUrl(): string
    {
        return $this->graphql_server_url;
    }

    /**
     * @param string $graphql_server_url
     */
    public function setGraphqlServerUrl(string $graphql_server_url)
    {
        $this->graphql_server_url = $graphql_server_url;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->template_name;
    }

    /**
     * @param string $template_name
     */
    public function setTemplateName(string $template_name)
    {
        $this->template_name = $template_name;
    }
}