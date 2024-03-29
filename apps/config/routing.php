<?php

use Phalcon\Session\Adapter\Files as Session;

$di['router'] = function() use ($defaultModule, $modules, $di, $config) {

	$router = new \Phalcon\Mvc\Router(false);
	$router->clear();

	// $eventsManager = new \Phalcon\Events\Manager();

	// $eventsManager->attach(
	//     'router:beforeCheckRoute',
	//     function (\Phalcon\Events\Event $event, $connection) {
	//     	$session = new Session();
	// 		$session->start();
	//         if(!$session->has('auth')) (new \Phalcon\Http\Response())->redirect('/');
	//     }
	// );


	// $router->setEventsManager($eventsManager);

	/**
	 * Default Routing
	 */
	$router->add('/', [
	    'namespace' => $modules[$defaultModule]['webControllerNamespace'],
		'module' => $defaultModule,
	    'controller' => isset($modules[$defaultModule]['defaultController']) ? $modules[$defaultModule]['defaultController'] : 'index',
	    'action' => isset($modules[$defaultModule]['defaultAction']) ? $modules[$defaultModule]['defaultAction'] : 'index'
	]);

	$router->addGet('/akun/daftar/mahasiswa', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'daftarmhs'
	]);

	$router->addGet('/akun/daftar/perusahaan', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'daftarper'
	]);

	$router->addGet('/akun', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'akun'
	]);

	$router->addGet('/akun/masuk/mahasiswa', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'masukmhs'
	]);

	$router->addGet('/akun/masuk', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'error'
	]);

	$router->addGet('/akun/masuk/perusahaan', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'masukper'
	]);

	$router->addGet('/perusahaan/pekerjaan', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'pekerjaan'
	]);

	$router->addGet('/perusahaan/pekerjaan/tambah', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'pekerjaantambah'
	]);

	$router->addGet('/beranda', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'user'
	]);

	$router->addGet('/perusahaan', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'perusahaan'
	]);

	$router->addGet('/profil', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'profil'
	]);

	$router->addGet('/profil/edit', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'editakun'
	]);

	$router->addPost('/profil/edit', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'editakun1'
	]);

	$router->addGet('/ppdb/edit', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'editppdb'
	]);

	$router->addPost('/ppdb/edit', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'editppdb1'
	]);

	$router->addGet('/kp', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'kp'
	]);

	$router->addGet('/kp/ambil/{id_pek}', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
		'action' => 'kpambil'
	]);

	$router->addPost('/kp/ambilya', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'kpambillagi'
	]);

	$router->addGet('/kp/batal/{id_pek}', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
		'action' => 'kpbatal'
	]);

	$router->addPost('/kp/batalya', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'kpbatallagi'
	]);

	$router->addGet('/ppdb2019', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'ppdb2019'
	]);

	$router->addGet('profil/downloadpdf', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'download'
	]);

	$router->addPost('perusahaan/pekerjaan/hapus/{id_pek}', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'hapusdata'
	]);

	$router->addPost('/post_register', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'store'
	]);

	$router->addPost('/post_per', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'registerperusahaan'
	]);

	$router->addPost('/post_mhs', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'registermahasiswa'
	]);

	$router->addPost('/post_pek', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'tambahpekerjaan'
	]);

	$router->addGet('/perusahaan/pekerjaan/hapus', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'pekerjaanhapus'
	]);

	$router->addPost('/perusahaan/pekerjaan/hapus', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'hapusdata'
	]);

	$router->addPost('/login', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'login'
	]);

	$router->addPost('/login_per', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'loginperusahaan'
	]);

	$router->addPost('/login_mhs', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'loginmahasiswa'
	]);

	$router->addPost('/logout', [
	    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
		'module' => 'dashboard',
	    'controller' => 'Dashboard',
	    'action' => 'logout'
	]);


	/**
	 * Not Found Routing
	 */
	$router->notFound(
		[
			'namespace' => 'Phalcon\Init\Common\Controllers',
			'controller' => 'base',
			'action'     => 'route404',
		]
	);

	/**
	 * Module Routing
	 */
	foreach ($modules as $moduleName => $module) {

		if ($module['defaultRouting'] == true) {
			/**
			 * Default Module routing
			 */
			$router->add('/'. $moduleName . '/:params', array(
				'namespace' => $module['webControllerNamespace'],
				'module' => $moduleName,
				'controller' => isset($module['defaultController']) ? $module['defaultController'] : 'index',
				'action' => isset($module['defaultAction']) ? $module['defaultAction'] : 'index',
				'params'=> 1
			));
			
			$router->add('/'. $moduleName . '/:controller/:params', array(
				'namespace' => $module['webControllerNamespace'],
				'module' => $moduleName,
				'controller' => 1,
				'action' => isset($module['defaultAction']) ? $module['defaultAction'] : 'index',
				'params' => 2
			));

			$router->add('/'. $moduleName . '/:controller/:action/:params', array(
				'namespace' => $module['webControllerNamespace'],
				'module' => $moduleName,
				'controller' => 1,
				'action' => 2,
				'params' => 3
			));	

			/**
			 * Default API Module routing
			 */
			$router->add('/'. $moduleName . '/api/{version:^(\d+\.)?(\d+\.)?(\*|\d+)$}/:params', array(
				'namespace' => $module['apiControllerNamespace'] . "\\" . 1,
				'module' => $moduleName,
				'version' => 1,
				'controller' => isset($module['defaultController']) ? $module['defaultController'] : 'index',
				'action' => isset($module['defaultAction']) ? $module['defaultAction'] : 'index',
				'params'=> 2
			));
			
			$router->add('/'. $moduleName . '/api/{version:^(\d+\.)?(\d+\.)?(\*|\d+)$}/:controller/:params', array(
				'namespace' => $module['apiControllerNamespace'] . "\\" . 1,
				'module' => $moduleName,
				'version' => 1,
				'controller' => 2,
				'action' => isset($module['defaultAction']) ? $module['defaultAction'] : 'index',
				'params' => 3
			));

			$router->add('/'. $moduleName . '/api/{version:^(\d+\.)?(\d+\.)?(\*|\d+)$}/:controller/:action/:params', array(
				'namespace' => $module['apiControllerNamespace'] . "\\" . 1,
				'module' => $moduleName,
				'version' => 1,
				'controller' => 2,
				'action' => 3,
				'params' => 4
			));	
		} else {
			
			$webModuleRouting = APP_PATH . '/modules/'. $moduleName .'/config/routes/web.php';
			
			if (file_exists($webModuleRouting) && is_file($webModuleRouting)) {
				include $webModuleRouting;
			}

			$apiModuleRouting = APP_PATH . '/modules/'. $moduleName .'/config/routes/api.php';
			
			if (file_exists($apiModuleRouting) && is_file($apiModuleRouting)) {
				include $apiModuleRouting;
			}
		}
	}
	
    $router->removeExtraSlashes(true);
    
	return $router;
};