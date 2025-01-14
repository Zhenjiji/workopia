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
function loadView($name, $data = []) {
// require basePath("views/{$name}.view.php");
  $viewPath = basePath("views/{$name}.view.php");

  //Make sure path exits
  if (file_exists($viewPath)) {
    extract($data);
    require $viewPath;
  }else {
    echo "View '{$name}' not found.";
  }
  }

/**
 * Load a partial
 *
 * @param string $name
 * @param array $data
 * @return void
 */
function loadPartial($name, $data = []) {
  // require basePath("views/partials/{$name}.php");
  $partialPath = basePath("views/partials/{$name}.php");

  // Make sure path exists
  if (file_exists($partialPath)) {
    extract($data);
    require $partialPath;
  } else {
    echo "Partial '{$name}' not found";
  }
  }
/**
 * Inspect a value
 *
 * @param array $values
 * @return void
 */
function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}
function inspectView($name)
{
  $viewPath = basePath("views/{$name}.view.php");

  inspect($viewPath);

  // Make sure path exists
  if (file_exists($viewPath)) {
    require $viewPath;
  } else {
    echo "View '{$name}' not found.";
  }
}


/**
 * Inspect a value and die
 *
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
  echo '<pre>';
  die(var_dump($value));
  echo '</pre>';
}
/**
 * Format Salary
 *
 * @param string $salary
 * @return string $formattedSalary
 */
function formatSalary($salary)
{
  return '$' . number_format(floatval($salary));
}