<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('/utilisateur', function(){
	return view('pages.utilisateur');  //Affiche la liste d'utilsateur
})->middleware('auth');

Route::get('/accueil', function(){
	return view('pages.index-online');
})->middleware('auth');

Route::get('/profil', function(){
	return view('pages.profil'); //  /profil sera remplacer par le nom d'utilisateur
})->middleware('auth');

Route::get('/profil/amis', function(){
	return view('pages.amis'); 
})->middleware('auth');



// Route::get('/profil/parametre', function(){
// 	return view('pages.parametre'); 
// })->middleware('auth');
Route::get('/test', function(){
	return view('pages.test');
});


Route::get('/rubriques', function(){
	return view('pages.rubriques');
})->middleware('auth');

Route::get('/profil/contenu', function(){
	return view('pages.contenu');  //  /profil/contenu
})->middleware('auth');

Route::get('/apropos', function(){
	return view('pages.apropos'); 
})->middleware('throttle');

Route::get('/conditions', function(){
	return view('pages.conditions');
})->middleware('throttle');

Route::get('/contact', function(){
	return view('pages.contact');
})->middleware('auth');

Route::get('/faq', function(){
	return view('pages.faq');
})->middleware('throttle');

Route::get('/profil/historique', function(){
	return view('pages.historique_perso');   //   /profil/historique
})->middleware('auth');

Route::get('/resultat-recherche', function(){
	return view('pages.resultat-recherche');  //  /resultat-recherche/mot-clé
})->middleware('auth');

Route::get('/profil/info', function(){
	return view('pages.info');
})->middleware('auth');

Route::get('/profil_amis', function(){
	return view('pages.profil_amis');
})->middleware('auth');

// Authentification
Auth::routes();

Route::get('/home', 'HomeController@index');

//CONTACT 
//************************************************************************************************************






//FAQ 
//**********************************************************************************************************

// Route::get('/faq', 'FaqController@create');
//affiche le formulaire de creation de message 

Route::post('/faq', 'FaqController@store');
//sauvegarde le message crée dans la bdd
Route::get('/faq', 'FaqController@index');
//affichage LES  messages de la bdd columns "message"
Route::get('/faq/faq_detail/{id}','FaqController@show');
//affiche la question selectionné par l'id
//FIN
//**********************************************************************************************************

Route::post('/home', 'HomeController@store');

//----------------------------------

//Parametre
Route::get('/parametre/{id}', 'ControllerParametre@index'); // affichage des parametre du compte.
Route::put('/Modif_parametre/{id}','ControllerParametre@update'); // modification mise a jour des parametres.



// //Modif Post
Route::get('/modif_post/{id}', 'HomeController@show');
Route::put('/home/{id}', 'HomeController@update');
Route::put('/home/destroy/{id}', 'HomeController@destroy');








//*********************************************************
//----------------------G R O U P E------------------------
//*********************************************************
//Affiche le formulaire de création d'un groupe
Route::get('/creation_groupe', 'GroupeController@create');
//---------------------------------------------------------
//Enregistre le nouveau groupe dans la BDD et l'affiche
Route::post('/creation_groupe', 'GroupeController@store');
//---------------------------------------------------------
//Affiche le groupe
Route::get('/groupe/{id}', 'GroupeController@show');
//---------------------------------------------------------
//Modifier un groupe
Route::get('groupe/{id}/edit', 'GroupeController@edit');
//---------------------------------------------------------
//Enregistre mofication d'un groupe
Route::put('groupe/{id}', 'GroupeController@update');
//---------------------------------------------------------
//Supprime un groupe
Route::delete('groupe/{id}', 'GroupeController@destroy');
//---------------------------------------------------------
//--------------------FIN GROUPE---------------------------
//---------------------------------------------------------


//*********************************************************
//----------------------M E S S A G E----------------------
//*********************************************************
//Affiche tous le message de la conversation
Route::get('/messagerie', 'MessageController@index'); 
//---------------------------------------------------------
//Enregistre le nouveau messages dans la BDD et l'affiche
Route::post('/messagerie/{chatroom_ID}', 'MessageController@store'); 
//---------------------------------------------------------
//Page de messagerie privé
Route::get('/messagerie/{user_id}', 'MessageController@show');
//---------------------------------------------------------
//Créer une nouvelle conversation
Route::get('/create/messagerie', 'MessageController@create');
//---------------------------------------------------------
//Enregiste un nouveau chatroom
Route::post('/store/chatroom/{id}', 'MessageController@storeChatroom');
//---------------------------------------------------------
//Enregiste les users sur le chatroom
Route::get('/store/participechat/{id}', 'MessageController@storeParticipechat');
//---------------------------------------------------------
//--------------------FIN MESSAGE--------------------------
//---------------------------------------------------------



//*********************************************************
//----------------------A M I S----------------------------
//*********************************************************
//Affiche la liste de tous les amis
Route::get('/friend', 'FriendController@index');
//---------------------------------------------------------
//--------------------FIN FRIEND---------------------------
//---------------------------------------------------------





//*********************************************************
//----------------------P O S T----------------------------
//*********************************************************
//Commente post
Route::get('/home/1/', 'HomeController@commentIndex');
Route::post('/home/1/{id}', 'HomeController@commentStore');

// //Modif Comment
Route::get('/commentaire/{id}', 'HomeController@commentShow');
Route::put('/home/2/{id}', 'HomeController@updateComment');
Route::delete('/home/2/{id}', 'HomeController@destroyComment');





