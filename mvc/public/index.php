 <?php

/**
 * This file is an example of a Front Controller, through which all requests pass.
 */

 // Include configuration and controller files
 include "../src/config.php";

 include "../src/controllers/ctrlIndex.php";
 include "../src/controllers/ctrlJson.php";
 include "../src/controllers/ctrlDoRegister.php";
 include "../src/controllers/ctrlRegister.php";
 include "../src/controllers/ctrlDoLogin.php";
 include "../src/controllers/ctrlLogin.php";
 include "../src/controllers/ctrlDoLogout.php";
  include "../src/controllers/ctrlConfirmacio.php";
  include "../src/controllers/ctrlLlistat.php";



 include "../src/middleware/isLogged.php";

/**
  * Load the classes of the Emeset Framework.
*/
  
 include "../src/Emeset/Container.php";
 include "../src/Emeset/Request.php";
 include "../src/Emeset/Response.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

 /* 
  * This is the part that makes the Front Controller work.
  * If there is no parameter, load the home page.
  * If there is a parameter, load the corresponding page.
  * If the page does not exist, load the error page.
  */
 $r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }
 
 /* Determine which action to execute based on the 'r' parameter */
if($r == "") {
     $response = ctrlIndex($request, $response, $container);
} elseif($r == "json") {
  $response = ctrlJson($request, $response, $container);
}
elseif($r == "register") {
  $response = ctrlRegistroView($request, $response, $container);
}elseif($r == "doregister") {
  $response = ctrlRegister($request, $response, $container);
}
elseif($r == "login") {
  $response = ctrlLoginView($request, $response, $container);
}
elseif($r == "dologin") {
  $response = ctrlDoLogin($request, $response, $container);
}
elseif($r == "dologout") {
  $response = ctrlDoLogout($request, $response, $container);
} elseif($r == "confirmacio") {
  $response = ctrlConfirmacioView($request, $response, $container);

} elseif($r == "llistat") {
  $response = ctrlLlistatView($request, $response, $container);
}
else {
  echo "404";
}
 $response->response(); 