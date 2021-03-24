<?php
$time = time() + 60 * 60 *7;
session_set_cookie_params($time, '/', $_SERVER['HTTP_HOST'], true);
session_start();
setcookie(session_name(), session_id(), $time);
require_once 'vendor/autoload.php';
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use \Curso\Page;
use \Curso\PageAdmin;
use \Curso\Model\User;
use \Curso\Model\Aluno;
use \Curso\Model\Contract;
use \Curso\Model\Order;
use \Curso\Model\Schedule;
use \Curso\Model\Stating;
use \Curso\Model\Sales;
use \Curso\Model\OS;
use \Curso\Model\Client;
use \Curso\Model\Product;
use \Curso\Model\Stock;
$app = AppFactory::create();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);
require_once("functions.php");




//index site
$app->get('/', function(Request $request, Response $response, $args){
    
    $page = new Page();
    $page->setTpl('index',[
        "msgSuccess"=>Aluno::getSuccess()
    ]);
return $response;
});

$app->post('/create', function(){

    $index = new Aluno();

    $index->setData($_POST);

    $index->save();
    Aluno::setSuccess("Nosso consultor recebeu seu contato");
    header('Location: /');
    exit;

});


//admin
$app->get('/admin', function(Request $request, Response $response, $args){

    User::verifyLogin();
   
    $statinguser = Stating::statingUser();
    $statingstudant= Stating::statingStudant();
    $statingconsultantd = Stating::statingConsultantd('4');
    $statingconsultante = Stating::statingConsultantd('2');
    $stagea = Stating::getStage('1');
    $stageb = Stating::getStage('2');
    $stagec = Stating::getStage('3');
    $d =  date('d/m/Y');
    
    $month = Stating::getMonth();
    //var_dump($month);
    $page = new PageAdmin();

    $page->setTpl('index', [
        "statinguser"=>$statinguser,
        "statingstudant"=>$statingstudant,
        "statingconsultantd"=>$statingconsultantd,
        "statingconsultante"=>$statingconsultante,
        "stagea"=>$stagea,
        "stageb"=>$stageb,
        "stagec"=>$stagec,
        "month"=>$month,
        "alert"=>Schedule::lembrete(),
        "niver"=>Stating::dateNow(),
        "leads"=>Stating::getGoogle()
       
    ]);
return $response;
});


$app->get('/admin/login', function(Request $request, Response $response, $args){

    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl('login', [
        "getErro"=>User::getError()
    ]);
return $response;
});

$app->post('/admin/login', function(Request $request, Response $response, $args){

    if (!isset($_POST['deslogin']) || $_POST['despassword']==='') {

		User::setError("Preencha Login e Senha!");
		header("Location: /admin/login");

	}

    User::login($_POST['deslogin'], $_POST['despassword']);

    header('Location: /admin');
    exit;
return $response;
});

$app->get('/admin/logout', function(){
   
    User::logout();

    header('Location: /admin/login');
    exit;
});



//admin alunos
$app->get('/admin/alunos', function(){
     
    User::verifyLogin();

    $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = Aluno::getPageSearch($search, $page);

	} else {

		$pagination = Aluno::getPage($page);
        
	}

	$pages = [];

	for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
	{

    if($x >= 1){
		array_push($pages, [
			'href'=>'/admin/alunos?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$page,
			'next'=>'/admin/alunos?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'previous'=>'/admin/alunos?'.http_build_query([
				'page'=>$x-1,
				'search'=>$search
			])
			
		]);
    }

	}

    $page = new PageAdmin();

    $page->setTpl("aluno", array(
        "aluno"=>$pagination['data'],
        "search"=>$search,
        'pages'=>$pages
    ));


});


// stages a b e c

$app->get('/admin/alunos/stage-a', function(){
     
    User::verifyLogin();

    $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = Stating::getPageSearch($search, $page);

	} else {

		$pagination = Stating::getPageA($page);
        
	}

	$pages = [];

	for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
	{

    if($x >= 1){
		array_push($pages, [
			'href'=>'/admin/alunos/stage-a?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$page,
			'next'=>'/admin/alunos/stage-a?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'previous'=>'/admin/alunos/stage-a?'.http_build_query([
				'page'=>$x-1,
				'search'=>$search
			])
			
		]);
    }

	}

    $page = new PageAdmin();

    $page->setTpl("aluno-stage-a", array(
        "stagea"=>$pagination['data'],
        "search"=>$search,
        'pages'=>$pages
    ));


});

$app->get('/admin/alunos/stage-b', function(){
     
    User::verifyLogin();

    $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = Stating::getPageSearch($search, $page);

	} else {

		$pagination = Stating::getPageB($page);
        
	}

	$pages = [];

	for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
	{

    if($x >= 1){
		array_push($pages, [
			'href'=>'/admin/alunos/stage-b?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$page,
			'next'=>'/admin/alunos/stage-b?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'previous'=>'/admin/alunos/stage-b?'.http_build_query([
				'page'=>$x-1,
				'search'=>$search
			])
			
		]);
    }

	}

    $page = new PageAdmin();

    $page->setTpl("aluno-stage-b", array(
        "stageb"=>$pagination['data'],
        "search"=>$search,
        'pages'=>$pages
    ));


});

$app->get('/admin/alunos/stage-c', function(){
     
    User::verifyLogin();

    $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = Stating::getPageSearch($search, $page);

	} else {

		$pagination = Stating::getPageC($page);
        
	}

	$pages = [];

	for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
	{

    if($x >= 1){
		array_push($pages, [
			'href'=>'/admin/alunos/stage-c?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$page,
			'next'=>'/admin/alunos/stage-c?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'previous'=>'/admin/alunos/stage-c?'.http_build_query([
				'page'=>$x-1,
				'search'=>$search
			])
			
		]);
    }

	}

    $page = new PageAdmin();

    $page->setTpl("aluno-stage-c", array(
        "stagec"=>$pagination['data'],
        "search"=>$search,
        'pages'=>$pages
    ));


});
// end stages

$app->get('/admin/aluno/create', function(){
     
    User::verifyLogin();
    $page = new PageAdmin();

    $page->setTpl("aluno-create");

});

$app->get('/admin/aluno/view/:idaluno', function($idaluno){

    User::verifyLogin();

    $aluno = new Aluno();

    $aluno->get((int)$idaluno);
    $page = new PageAdmin();

    $page->setTpl("view-aluno", array(
        "aluno"=>$aluno->getValues()
    ));
    
});

//stage alunos
$app->get('/admin/aluno/stage/s1/:idaluno', function($idaluno){

    User::verifyLogin();

    $aluno = new Aluno();

    $aluno->get((int)$idaluno);
    $page = new PageAdmin();

    $page->setTpl("etapa-o", array(
        "aluno"=>$aluno->getValues()
    ));
    
});

$app->get('/admin/aluno/stage/s2/:idaluno', function($idaluno){

    User::verifyLogin();

    $aluno = new Aluno();

    $aluno->get((int)$idaluno);
    $page = new PageAdmin();

    $page->setTpl("etapa-a", array(
        "aluno"=>$aluno->getValues()
    ));
    
});

$app->get('/admin/aluno/stage/s3/:idaluno', function($idaluno){

    User::verifyLogin();

    $aluno = new Aluno();

    $aluno->get((int)$idaluno);
    $page = new PageAdmin();

    $page->setTpl("etapa-b", array(
        "aluno"=>$aluno->getValues()
    ));
    
});

//admin aluno method post 
$app->post('/admin/aluno/create', function(){
     
    User::verifyLogin();
    
    $aluno = new Aluno();

    $aluno->setData($_POST);

    $aluno->save();

    header('Location: /admin/alunos');
    exit;

});

$app->post('/admin/aluno/:idaluno', function($idaluno){
     
    User::verifyLogin();

    $aluno = new Aluno();


    $aluno->get((int)$idaluno);

    $aluno->setData($_POST);

    $aluno->save();

    header('Location: /admin/alunos');
    exit;

});

// admin users
$app->get('/admin/users', function(){
     
    User::verifyLogin();

    $user = $_SESSION[User::SESSION]['deslogin'];

    $users = User::listAll();
    
    $page = new PageAdmin();

    $page->setTpl("users", array(
        "users"=>$users,
        "user"=>$user
    ));
});

$app->get('/admin/users/create', function(){
     
    User::verifyLogin();
    
    $page = new PageAdmin();

    $page->setTpl("users-create");

});

//admin users delete
$app->get('/admin/users/:iduser/delete', function($iduser){
     
    User::verifyLogin();

    $user = new User();

    $user->get((int)$iduser);

    $user->delete();

    header('Location: /admin/users');
    exit;

});

//admin aluno delete
$app->get('/admin/aluno/:idaluno/delete', function($idaluno){
     
    User::verifyLogin();
    $aluno = new Aluno();
   

    $aluno->get((int)$idaluno);

    $aluno->delete();

    header('Location: /admin/alunos');
    exit;

});

$app->get('/admin/users/:iduser', function($iduser){
     
    User::verifyLogin();
    
    $user = new User();

    $user->get((int)$iduser);

    $page = new PageAdmin();

    $page->setTpl("users-update", array(
        "user"=>$user->getValues()
    ));

});

//admin users method post
$app->post('/admin/users/create', function(){
     
    User::verifyLogin();

    $user = new User();

    $_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

    $user->setData($_POST);

    $user->save();
    header('Location: /admin/users');
    exit;

});

$app->post('/admin/users/:iduser', function($iduser){
     
    User::verifyLogin();

    $user = new User();

    $_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

    $user->get((int)$iduser);

    $user->setData($_POST);

   
    $user->update();
 $user->setPhoto($_FILES["desphoto"]);


    header('Location: /admin/users');
    exit;

});

//admin contrato

$app->get('/admin/contratos', function(Request $request, Response $response){

    User::verifyLogin();
    
    //$con = Contract::listAll();
    
    $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $consultant = (isset($_GET['consultant'])) ? $_GET['consultant'] : "";
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = Contract::getPageSearch($search, $page);

	} else {

		$pagination = Contract::getPage($page);
        
	}
	$se= new Stating();
	$searchconsultant = $se->countContract($consultant);

	//var_dump($searchconsultant);

	$pages = [];

	for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
	{

    if($x >= 1){
		array_push($pages, [
			'href'=>'/admin/contratos?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$page,
			'next'=>'/admin/contratos?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'previous'=>'/admin/contratos?'.http_build_query([
				'page'=>$x-1,
				'search'=>$search
			])
			
		]);
    }

	}


    $page = new PageAdmin();

    $page->setTpl("contract", [
        "contract"=>$pagination['data'],
        "all"=>Contract::listAll(),
        "search"=>$search,
        "consultant"=>$searchconsultant,
        "pages"=>$pages
    ]);
return $response;
});

$app->get('/admin/contrato/:idcontract/delete', function($idcontract){

    User::verifyLogin();

    $contract = new Contract();

    $contract->get((int)$idcontract);

    $contract->delete();

    header('Location: /admin/contratos');
    exit;
});

$app->get('/admin/contrato/create', function(Request $request, Response  $response){

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("contrato-create");
return $response;
});

$app->get('/admin/contrato/view/{idcontract}', function(Request $request, Response $response, $args){

    User::verifyLogin();

    $get = new Contract();
    $get->get((int)$args['idcontract']);
    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl("contract-view",[
        "contract"=>$get->getValues()
    ]);
return $response;
});

$app->get('/admin/recibo/{idcontract}', function(Request $request, Response $response, $args){

    User::verifyLogin();

    $get = new Contract();
    $get->get((int)$args['idcontract']);
    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl("recibo",[
        "recib"=>$get->getValues()
    ]);
    return $response;
});

$app->get('/admin/ticket/{idcontract}', function(Request $request, Response $response, $args){

    User::verifyLogin();

    $get = new Contract();
    $get->get((int)$args['idcontract']);
    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl("tiket",[
        "ticket"=>$get->getValues()
    ]);
    return $response;
});


$app->post('/admin/contrato/create', function(){

    User::verifyLogin();

    $contract = new Contract();

    $contract->setData($_POST);

    $contract->save();

    header('Location: /admin/contratos');
    exit;
   

});

$app->get('/admin/contrato/update/:idcontract', function($idcontract){

    User::verifyLogin();

    $contract = new Contract();

    $contract->get((int)$idcontract);

    $page = new PageAdmin();

    $page->setTpl("contract-update",[
        "contract"=>$contract->getValues()
    ]);
   

});

$app->post('/admin/contrato/update/:idcontract', function($idcontract){

    User::verifyLogin();

    $contract = new Contract();

    $contract->get((int)$idcontract);

    $contract->setData($_POST);
   
    $contract->save();

    header('Location: /admin/contratos');
    exit;

});

//admin controle

$app->get('/admin/orders', function(){

    User::verifyLogin();

   
   
    $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = Order::getPageSearch($search, $page);

	} else {

		$pagination = Order::getPage($page);

	}

	$pages = [];

	for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
	{

    if($x >= 1){
		array_push($pages, [
			'href'=>'/admin/orders?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$page,
			'next'=>'/admin/orders?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'previous'=>'/admin/orders?'.http_build_query([
				'page'=>$x-1,
				'search'=>$search
			])
			
		]);
    }

	}
    $st = Order::getL($search);
    $sp = Order::getP($search);
    $page = new PageAdmin();

    $page->setTpl("order",[
        "order"=>$pagination['data'],
        "search"=>$search,
        "lari"=>$st,
        "prof"=>$sp,
        "pages"=>$pages
    ]);

});

$app->get('/admin/order/create', function(){

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("order-create");

});

$app->get('/admin/order/starting', function(){

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("order-startistic");

});

$app->get('/admin/order/:idcontrol/delete', function($idcontrol){

    User::verifyLogin();

    $controls = new Order();

    $controls->get((int)$idcontrol);

    $controls->delete();

    header('Location: /admin/orders');
    exit;

});

$app->get('/admin/order/:idcontrol', function($idcontrol){

    User::verifyLogin();

    $controls = new Order();

    $controls->get((int)$idcontrol);

    $page = new PageAdmin();

    $page->setTpl("order-update",[
        "order"=>$controls->getValues()
    ]);

});

$app->post('/admin/order/create', function(){

    User::verifyLogin();

    $control = new Order();

    $control->setData($_POST);

    $control->save();

    header('Location: /admin/orders');
    exit;

});

$app->post('/admin/order/:idcontrol', function($idcontrol){

    User::verifyLogin();

    $controls = new Order();

    $controls->get((int)$idcontrol);

    $controls->setData($_POST);

    $controls->save();

    header('Location: /admin/orders');
    exit;

});

//agendar
$app->get('/admin/schedule/:idshe/delete', function($idshe){

    User::verifyLogin();

    $shedule = new Schedule();

    $shedule->get((int)$idshe);

    $shedule->delete();

    header('Location: /admin/schedule');
    exit;

});

$app->get('/admin/schedule', function(){

    User::verifyLogin();

    $shedule = Schedule::listAll();
    $page = new PageAdmin();

    $page->setTpl('shedules',[
        "schedule"=>$shedule
    ]);

});

$app->get('/admin/schedule/create', function(){

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl('shedule-create');

});

$app->post('/admin/schedule/create', function(){

    User::verifyLogin();

    $shedule = new Schedule();

    $shedule->setData($_POST);

    $shedule->save();

    header('Location: /admin/schedule');
    exit;

});

$app->get('/admin/sales/:iduser', function($iduser){

    User::verifyLogin();
    $person = getUserId();
    $sales = new User();

    $sales->get((int)$iduser);

$page = new PageAdmin();
    $page->setTpl("sales",[
        "sale"=>$sales->getValues(),
        "sales"=>Sales::mySales($person)
    ]);

});

$app->get('/admin/os', function(){

   User::verifyLogin();

       $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = OS::getPageSearch($search, $page);

	} else {

		$pagination = OS::getPage($page);
        
	}

	$pages = [];

	for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
	{

    if($x >= 1){
		array_push($pages, [
			'href'=>'/admin/os?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$page,
			'next'=>'/admin/os?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'previous'=>'/admin/os?'.http_build_query([
				'page'=>$x-1,
				'search'=>$search
			])
			
		]);
    }

	}

   $page = new PageAdmin();

   $page->setTpl('os', [
    "os"=>$pagination['data'],
    "search"=>$search,
    "pages"=>$pages
   ]);

});

// os preview

$app->get('/admin/os/preview', function(){

     User::verifyLogin();

     $search = (isset($_GET['search'])) ? $_GET['search'] : "";
     $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
 
     if ($search != '') {
 
         $pagination = OS::getPageSearch($search, $page);
 
     } else {
 
         $pagination = OS::getPage($page);
         
     }
 
     $pages = [];
 
     for ($x = $page, $pagination['pages'] = $x + 1; $x < $pagination['pages']; $x++)
     {
 
     if($x >= 1){
         array_push($pages, [
             'href'=>'/admin/os/preview?'.http_build_query([
                 'page'=>$x+1,
                 'search'=>$search
             ]),
             'text'=>$page,
             'next'=>'/admin/os/preview?'.http_build_query([
                 'page'=>$x+1,
                 'search'=>$search
             ]),
             'previous'=>'/admin/os/preview?'.http_build_query([
                 'page'=>$x-1,
                 'search'=>$search
             ])
             
         ]);
     }
 
     }

     $page_list = OS::listAll();
     $page = new PageAdmin();

     $page->setTpl("page_os",[
        "page_list"=>$pagination['data'],
        "search"=>$search,
        "pages"=>$pages
     ]);

});

// service delete
$app->get('/admin/os/:id_os_service/delete', function($id_os_service){

    User::verifyLogin();

    $os = new OS();

    $os->get((int)$id_os_service);

    $os->delete();

    header('Location: /admin/os/preview');
    exit;

});

// stock delete
$app->get('/admin/service/:id_stock/delete', function($id_stock){

    User::verifyLogin();

    $stock = new Stock();

    $stock->get((int)$id_stock);

    $stock->delete();

    header('Location: /admin/stock');
    exit;

});

$app->get('/admin/os/:idos/delete', function($idos){

    User::verifyLogin();

    $os = new OS();

    $os->get((int)$idos);

    $os->delete();

    header('Location: /admin/os');
    exit;

});

$app->get('/admin/os/create', function(){

   User::verifyLogin();
   
       $client = Client::listClient();
       $product = Product::listProduct();
       $stock  = new Stock();

   $page = new PageAdmin();

   $page->setTpl('os-create',[
        "client"=>$client,
       "product"=>$product,
       "stock"=>$stock->listStock()
       ]);

});

// update os
$app->get('/admin/os/update/:idos', function($idos){

   User::verifyLogin();

   $os = new OS();
   $stock = new Stock();
   $os->get((int)$idos);

   $page = new PageAdmin();

   $page->setTpl('os-update',[
    "os"=>$os->getValues(),
    "stock"=>$stock->listStock()
   ]);

});

$app->get('/admin/os/controle/:idos', function($idos){

    User::verifyLogin();
 
    $os = new OS();
 
    $os->get((int)$idos);
 
    $page = new PageAdmin();
 
    $page->setTpl('os-controle',[
     "os"=>$os->getValues()
    ]);
 
 });

$app->get('/admin/os/edit/:idos', function($idos){

   User::verifyLogin();

   $os = new OS();

   $os->get((int)$idos);

   $page = new PageAdmin();

   $page->setTpl('os-update',[
    "os"=>$os->getValues()
   ]);

});

$app->post('/admin/os/create', function(){

    User::verifyLogin();

    $os = new OS();

    $os->setData($_POST);

    $os->save();

    header('Location: /admin/os/preview');
    exit;

});

$app->post('/admin/os/edit/:idos', function($idos){

    User::verifyLogin();

    $os = new OS();

    $os->get((int)$idos);
    $os->setData($_POST);

    $os->save();

    header('Location: /admin/os');
    exit;
});

//client create
$app->post('/admin/client/create', function(){

    User::verifyLogin();

    $client = new Client();

    $client->setData($_POST);

    $client->save();

    header('Location: /admin/os/create');
    exit;

});

//product create
$app->post('/admin/product/create', function(){

    User::verifyLogin();

    $product = new Product();

    $product->setData($_POST);

    $product->save();

    header('Location: /admin/os/create');
    exit;

});


$app->get('/admin/os/tecnico/:idos', function($idos){

    User::verifyLogin();

    $os = new OS();
    $os->get((int)$idos);
    $page = new PageAdmin();

    $page->setTpl("os-related",[
        "os"=>$os->getValues()
    ]);

});

$app->post('/admin/os/edit/related/:idos', function($idos){

    User::verifyLogin();

    $os = new OS();

    $os->get((int)$idos);
    $os->setData($_POST);
  
    $os->save();
    $os->setPhotoOn();
    $os->setPhotoTwo();
    header('Location: /admin/os');
    exit;
});

$app->get('/admin/os/view/:idos', function($idos){

    User::verifyLogin();

    $os = new OS();
    $os->get((int)$idos);
    $page = new PageAdmin();

    $page->setTpl("os_view",[
        "os"=>$os->getValues()
    ]);

});
// post os
$app->post('/admin/os/update/:idos', function($idos){

    User::verifyLogin();

    $os = new OS();

    $os->get((int)$idos);
    $os->setData($_POST);

    $os->save();

    header('Location: /admin/os/preview');
    exit;
});

// print os
$app->get('/admin/os/print/:idos', function($idos){

    User::verifyLogin();

    $os = new OS();
    $os->get((int)$idos);
    $page = new PageAdmin();

    $page->setTpl("print_os",[
        "os"=>$os->getValues()
    ]);

});

$app->get('/admin/os/print/start/:idos', function($idos){

    User::verifyLogin();

    $os = new OS();
    $os->get((int)$idos);
    $page = new PageAdmin();

    $page->setTpl("print_os_start",[
        "os"=>$os->getValues()
    ]);

});

// list stock
$app->get("/admin/stock", function(){

    User::verifyLogin();

    $stock = new Stock();

    $page = new PageAdmin();

    $page->setTpl("page_list_stock",[
        "page_list"=>$stock->listStock()
    ]);

});

$app->get('/admin/service/create', function(){

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("service_create");

});

// service create

$app->get('/admin/service/update/:id_stock', function($id_stock){

    User::verifyLogin();

    $stock = new Stock();
    $stock->get((int)$id_stock);
    $page = new PageAdmin();

    $page->setTpl("service_update",[
        "stock"=>$stock->getValues()
    ]);

});

$app->post('/admin/service/create', function(){

    User::verifyLogin();

    $stock = new Stock();

    $stock->setData($_POST);

    $stock->save();
    $stock->setPhotoOn();
    $stock->setPhotoTwo();
    header('Location: /admin/stock');
    exit;

});

$app->post('/admin/service/update/:id_stock', function($id_stock){

    User::verifyLogin();

    $stock = new Stock();
    $stock->get((int)$id_stock);
    $stock->setData($_POST);

    $stock->save();
    $stock->setPhotoOn();
    $stock->setPhotoTwo();
    header('Location: /admin/stock');
    exit;

});

$app->get('/admin/simulator/:idsimulator/delete', function($idsimulator){
    User::verifyLogin();
    
    $client = new Client();
    
    $client->get((int)$idsimulator);
    
    $client->delete();
    
    header('Location: /admin/simulator');
    exit;

});

$app->get('/parcelas', function(Request $request, Response $response, $args){
  
    $page = new pageAdmin();

    $page->setTpl("parcela");

    return $response;
});

$app->get('/admin/simulator', function(){
    User::verifyLogin();
    
    $search = (isset($_GET['search'])) ? $_GET['search'] : "";
    $page =   (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    
    if($search !== ''){
        $pagination = Client::getSearchPage($search, $page);
    }else{
        $pagination = Client::getPage($page);
    }
    
    $pages = [];
    
    for($i = 0; $i < $pagination['pages']; $i++){
        array_push($pages, [
            'href'=>'/admin/simulator?'.http_build_query([
                'page'=>$i+1,
                'search'=>$search
                ]),
                'text'=>$i+1
            ]);
    }
    
    $page = new PageAdmin();
    
    $page->setTpl("simulator",[
        "simulator"=>$pagination['data'],
        "search"=>$search,
        "pages"=>$pages
        ]);
});

$app->run();

?>