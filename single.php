<?php

  $compiler = include 'compiler.php';

  $context = Timber::get_context();

  $context['post'] = new TimberPost();

  echo $compiler->render(get_template_directory() . '/views/single.jade', $context);

?>
