<?php
function render($templates, $params = []){
    $content = renderTemplates($templates, $params);
    echo renderTemplates('layout/main', ['content' => $content]);
}

function renderTemplates($templates, $params = []){
    extract($params);
    ob_start();
    include TEMPLATES_DIR . "{$templates}.php";
    return ob_get_clean();
}