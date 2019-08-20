<?php
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('backend')->group(function () {
	Route::get('/', ['uses' => 'DashboardController@dashboard','as' => 'back.index']);
	Route::resource('/banners', 'BannerController');
	Route::resource('/categories', 'CategoryController');
	Route::resource('/customers', 'CustomerController');
	Route::resource('/providers', 'ProviderController');
	Route::resource('/pics', 'PicController');
	Route::resource('/reviews', 'ReviewController');
	Route::resource('/services', 'ServiceController');
	Route::resource('/subscriptions', 'SubscriptionController');
	Route::resource('/subscription_types', 'SubscriptionTypeController');

	Route::get('/informacion',['uses' => 'DashboardController@informacion', 'as' => 'customer.informacion']);
	Route::get('/servicios',['uses' => 'DashboardController@servicios', 'as' => 'customer.servicios']);
	Route::get('/ordenes',['uses' => 'DashboardController@ordenes', 'as' => 'customer.ordenes']);
	Route::get('/notificaciones',['uses' => 'DashboardController@notificaciones', 'as' => 'customer.notificaciones']);
	Route::get('/estadisticas',['uses' => 'DashboardController@estadisticas', 'as' => 'estadisticas']);
	Route::get('/ajustes',['uses' => 'DashboardController@ajustes', 'as' => 'customer.ajustes']);

	Route::put('/provider-update/{id}',['uses' => 'DashboardController@providerUpdate','as' => 'customer.actualizar']);

	Route::post('/customer-upgrade',['uses' => 'ProviderController@upgradeUserToProvider','as' => 'customer.upgrade']);
	Route::post('/provider-downgrade',['uses' => 'CustomerController@downgradeProviderToCustomer','as' => 'provider.downgrade']);

	Route::get('confirmar/{sub_type_id}', ['uses' => 'DashboardController@confirmarCompra', 'as' => 'back.confirmar']);
	Route::get('formaPago/{sub_type_id}', ['uses' => 'DashboardController@formaPago', 'as' => 'back.formaPago']);
	Route::get('asignarSubscripcion/{sub_type_id}', ['uses' => 'SubscriptionController@asignarSubscripcion', 'as' => 'back.asignarSubscripcion']);
	
	Route::get('customerReviews/{customer_id}', ['uses' => 'CustomerController@reviews', 'as' => 'back.customerReviews']);
	Route::get('providerReviews/{provider_id}', ['uses' => 'ProviderController@reviews', 'as' => 'back.providerReviews']);
	Route::get('favoritos/{customer_id}', ['uses' => 'CustomerController@favoritos', 'as' => 'back.customerFavoritos']);
	
	Route::get('createInteraction/{customer_id}/{provider_id}/{interaction_id}', ['uses' => 'InteractionController@createInteraction', 'as' => 'back.createInteraction']);
	Route::get('toggleApproved/{review_id}', ['uses' => 'ReviewController@toggleApproved', 'as' => 'back.toggleApproved']);
	Route::post('customerReview/', ['uses' => 'ReviewController@saveCustomerReview', 'as' => 'back.customerReview']);

	Route::get('/stats/provider/{id}', ['uses' => 'StatController@show', 'as' => 'stats.show']);
	Route::get('/stats/providers', ['uses' => 'StatController@index', 'as' => 'stats.index']);
	Route::get('/stats', ['uses' => 'StatController@dashboard', 'as' => 'stats.dashboard']);
});
