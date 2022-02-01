<?php

class Renderer
{

    /**
     * Affiche la vue demandée dans $path en injectant les variables contenues dans $variables
     *
     * @param string $path
     * @param array $variables
     *
     * @return void
     */
    public static function render(string $path, array $variables = []): void
    {

        extract($variables);
        ob_start();

        require('templates/' . $path . '.html.php');
        $pageContent = ob_get_clean();

        if($path == "user/login" || $path == "user/register")
        {
            require('templates/login_layout.html.php');
        } else {
            require('templates/layout.html.php');
        }



    }
}
