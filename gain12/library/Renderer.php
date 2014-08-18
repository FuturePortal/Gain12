<?php

namespace gain12\library;

class Renderer {
    protected function render($file, $params = [])
    {
        // Start recording the output
        ob_start();

        // Extract the params into their own variables
        extract($params);

        // Require the file to render
        require $file;

        // Grab the dropped content
        $content = ob_get_contents();
        ob_end_clean();

        // Return grabbed content
        return $content;
    }
} 
