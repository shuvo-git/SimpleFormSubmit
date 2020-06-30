<?php

$uri = parse_url($_SERVER['REQUEST_URI']);

require('./controller/Home.php');
require('./controller/Details.php');



function getArgumentStart($uri)
{
    foreach($uri as $key=>$value)
    {
        if($value == 'index.php')
        {
            if( $key == count($uri)-1 )
                return -1;
            else return $key+1;
        }
    }
}



$uri_parameters = explode('/',$uri['path']);
$start          = getArgumentStart($uri_parameters);

if($start != -1)
{
    /* index.php is the landing page which refers to ($start-1) from the method getArgumentStart(). 
    Hence, controller name in URI should be ($start)th index 
    and  function name in URI should be ($start+1)th index  */
    $controller_name = $uri_parameters[$start];
    $method_name     = $uri_parameters[$start+1]. "_" . strtolower($_SERVER['REQUEST_METHOD']);

    /* Rest of the indexes of parameter list should be the counted as argument list */
    $args = array();

    $len_uri_parameter = count($uri_parameters);

    for($start+=2;$start<$len_uri_parameter;$start++)
        array_push($arg,$uri_parameters[$start]);

    call_user_func_array(array(new $controller_name, $method_name), $args);
}
else echo '404 Not Found';

?>