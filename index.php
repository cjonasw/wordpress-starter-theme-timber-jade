<?php

$compiler = include 'compiler.php';

$context = Timber::get_context();

$context['pagination'] = Timber::get_pagination();

echo $compiler->render(get_template_directory() . '/views/index.jade', $context);

?>
