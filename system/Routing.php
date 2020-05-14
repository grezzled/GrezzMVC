<?php

class Routing
{
    // TODO start building the magic behind routs
    // (:nbr) to identify a number
    // (:str) to identify a sequence of characters: numbers, text or symbols except for "/"
    // eg: site.com/blog/(:str) --> site.com/blog/getArticle/$1 and $1 is the blog webId
    // eg: site.com/page/(:nbr) --> site.com/page/getPage/$1 and $1 is the page ID
    private $eg = "https://site.com/applications/1";

    private function extractPath($baseUrl, $destination, $routes)
    {
        //removeBaseUrl -> result (/applications/1)
        $destination = str_replace($baseUrl, '', $destination);
        //explode Url
        $exp = explode('/', $destination);
        // Generate Route Pattern
        $pattern = "";
        foreach ($exp as $item) {
            if (is_int($item)) {
                $pattern .= '/{:nbr}';
            } else {
                $pattern .= '/{:str}';
            }
        }
        $expPattern = explode('/', $pattern);
        $matches = array();
        for ($i = 0; $i < sizeof($expPattern); $i++) {
            foreach ($routes as $rout) {
                if (explode('/', $rout)[1] === $expPattern[$i]) {

                }
            }
        }

    }
}
