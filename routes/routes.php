<?php

use src\Route as Route;


// ROTAS PT 
Route::get('/', function(){  require _CAMINHO_PT. "index.php";});

Route::get('/pt', function(){  require _CAMINHO_PT. "index.php";});

Route::get('/oportunidade', function(){  require _CAMINHO_PT. "oportunidade_details.php";});

Route::get('/oportunidades', function(){  require _CAMINHO_PT. "oportunidades.php";});

Route::get('/noticias', function(){  require _CAMINHO_PT. "noticias.php";});

Route::get('/noticia', function(){  require _CAMINHO_PT. "noticia_details.php";});

// ROTAS EN
Route::get('/en', function(){  require _CAMINHO_EN. "index.php";});

Route::get('/opportunity', function(){  require _CAMINHO_EN. "opportunity_details.php";});

Route::get('/opportunities', function(){  require _CAMINHO_EN. "opportunities.php";});

Route::get('/news', function(){  require _CAMINHO_EN. "news.php";});

Route::get('/new', function(){  require _CAMINHO_EN. "new_details.php";});



// ROTAS Dashboard

Route::get('/dashboard', function(){  require _CAMINHO_DASHBOARD. "login.php";});

Route::get('/dashboard/login', function(){  require _CAMINHO_DASHBOARD. "login.php";});

Route::get('/dashboard/inicio', function(){  require _CAMINHO_DASHBOARD. "dashboard.php";});

Route::get('/dashboard/informacoes', function(){  require _CAMINHO_DASHBOARD. "InformacoesGerais.php";});

Route::get('/dashboard/configuracoes', function(){  require _CAMINHO_DASHBOARD. "configuracoes.php";});

Route::get('/dashboard/noticias', function(){  require _CAMINHO_DASHBOARD. "noticias.php";});

Route::get('/dashboard/oportunidades', function(){  require _CAMINHO_DASHBOARD. "oportunidades.php";});

Route::get('/dashboard/candidaturas', function(){  require _CAMINHO_DASHBOARD. "candidaturas.php";});

Route::get('/dashboard/menus', function(){  require _CAMINHO_DASHBOARD. "menusGiratorios.php";});

Route::get('/dashboard/servicos', function(){  require _CAMINHO_DASHBOARD. "servicos.php";});

//rotas Formularios

Route::get('/dashboard/criarNoticia', function(){  require _CAMINHO_DASHBOARD. "addNoticia.php";});

Route::get('/dashboard/editarNoticia', function(){  require _CAMINHO_DASHBOARD. "editarNoticia.php";});

Route::get('/dashboard/criarOportunidade', function(){  require _CAMINHO_DASHBOARD. "addOportunidade.php";});

Route::get('/dashboard/editarOportunidade', function(){  require _CAMINHO_DASHBOARD. "editarOportunidade.php";});

Route::get('/dashboard/editarMenus', function(){  require _CAMINHO_DASHBOARD. "editarMenusGiratorios.php";});

Route::get('/dashboard/editarServicos', function(){  require _CAMINHO_DASHBOARD. "editarServicos.php";});

Route::get('/dashboard/verCandidatura', function(){  require _CAMINHO_DASHBOARD. "verCandidatura.php";});


// Rotas Actions

Route::get('/dashboard/adicionar/noticia', function(){  require _CAMINHO_DASHBOARD. "phpcodes/addNoticia.php";});

Route::get('/dashboard/editar/noticia', function(){  require _CAMINHO_DASHBOARD. "phpcodes/editarNoticia.php";});

Route::get('/dashboard/adicionar/oportunidade', function(){  require _CAMINHO_DASHBOARD. "phpcodes/addEmprego.php";});

Route::get('/dashboard/editar/oportunidade', function(){  require _CAMINHO_DASHBOARD. "phpcodes/editarEmprego.php";});

Route::get('/dashboard/editar/menus', function(){  require _CAMINHO_DASHBOARD. "phpcodes/editarMenu.php";});

Route::get('/dashboard/editar/servico', function(){  require _CAMINHO_DASHBOARD. "phpcodes/editarServico.php";});

?>