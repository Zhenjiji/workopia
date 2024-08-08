<?php 

/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
  return __DIR__ . '/' . $path;
}
/**
 * Load a view
 *
 * @param string $name
 * @param array $data
 * @return void
 */
function loadView($name)
{ // require basePath("views/{$name}.view.php");
  $viewPath = basePath("views/{name}.view.php");

  //Make sure path exits
  if (file_exists($viewPath)) {
    require $viewPath;
  }else {
    echo "View '{name}' not found.";
  }
  }

/**
 * Load a partial
 *
 * @param string $name
 * @param array $data
 * @return void
 */
function loadPartial($name)
{
  // require basePath("views/partials/{$name}.php");
  $partialPath = basePath("views/partials/{$name}.php");

  // Make sure path exists
  if (file_exists($partialPath)) {
    require $partialPath;
  } else {
    echo "Partial '{$name}' not found";
  }
  }
