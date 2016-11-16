# Zend Expressive GraphiQL extension

GraphQL in-browser interface to explore graphql server

## Assets

You need to copy the graphql assets in your public assets folder. 

## Template

A twig template is provided but you can write your own template using the template engines supported by zend-expressive

If you want to override the default configuration, add a configuration for `graphql::graphiql` template in your `templates.global.php`
and place the `graphiql.html.php` 

```
'templates' => [
        'extension' => 'html.php', //<-- Your extension
        'paths'     => [
            'graphql'    => ['templates/graphql'],
            ...
        ],
    ],
```