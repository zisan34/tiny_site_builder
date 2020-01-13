<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
* Website Routes
*/
Route::get('/', 'HomeController@index');

Route::post('/vistorlog', 'Admin\VisitorLogController@store');

Route::get('page/{id}/{slug?}', 'HomeController@getPage')->name('page');
Route::get('post/{id}/{slug?}', 'HomeController@getPost')->name('post');
Route::get('post-category/{id}/{slug?}', 'HomeController@getPostCategory')->name('post.category');
Route::get('gallery/{id}/{slug?}', 'HomeController@getGallery')->name('gallery');
Route::get('photo-gallery', 'HomeController@photoGallery')->name('photo_gallery');
Route::get('video-gallery', 'HomeController@videoGallery')->name('video_gallery');


Route::post('get_content', 'HomeController@getContent')->name('get_content');

Route::post('get_gallery', 'HomeController@getGallery')->name('get_gallery');



Route::get('/admin/', function(){
    return redirect()->route('admin.dashboard');
});
/*
* Admin Panel Routes
*/
// Auth::routes();
Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'Admin'], function() {

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/albums/images/{id}', 'AlbumController@images')->name('albums.images');
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::post('/profile/update','ProfileController@update')->name('profile.update');

    Route::post('/drafts/review','DraftController@review')->name('drafts.review');

    Route::get('/dashboard/getTodos', 'TodoController@getTodos')->name('dashboard.getTodos');


    Route::get('/user-access/permissions/{id}','UserAccessController@user_permissions')->name('user_permissions');
    
    Route::post('/user-access/toggle', 'UserAccessController@toggleStatus')->name('user-access.toggle');


    Route::resources([
        'drafts' => 'DraftController',
        'events' => 'EventController',
        'todos' => 'TodoController',
        'draft_type' => 'DraftTypeController',
        'posts' => 'PostController',
        'categories' => 'PostCategoryController',
        'subcategories' => 'PostSubCategoryController',
        'pages' => 'PageController',
        'sliders' => 'SliderController',
        'headerfooters' => 'HeaderFooterController',
        'social_medias' => 'SocialMediaController',
        'logos' => 'LogoController',
        'widgets' => 'WidgetController',
        'widget-data' => 'WidgetDataController',
        'welcome-settings' => 'WelcomePageSettingController',
        'general-settings' => 'GeneralSettingController',
        'menus' => 'MenuController',
        'members' => 'MemberController',
        'albums' => 'AlbumController',
        'videos' => 'VideoController',
        'album-images' => 'AlbumImageController',
        'users' => 'UserController',
        'user-access' => 'UserAccessController',

        // 'posts' => 'PostController'
    ]);


    Route::post('/dashboard/saveQuote', 'DashboardController@saveQuote')->name('dashboard.saveQuote');
    Route::get('/dashboard/getQuote', 'DashboardController@getQuote')->name('dashboard.getQuote');



    Route::post('/posts/toogle', 'PostController@toogleStatus')->name('posts.toogle');
    
    Route::post('/todos/toogle', 'TodoController@toogleStatus')->name('todos.toogle');

    Route::post('/drafts/toogle', 'DraftController@toogleStatus')->name('drafts.toogle');

    Route::post('/draft-type/toogle', 'DraftTypeController@toogleStatus')->name('draft_type.toogle');

    Route::post('/users/toogle', 'UserController@toogleStatus')->name('users.toogle');

    Route::post('/videos/toogle', 'VideoController@toogleStatus')->name('videos.toogle');

    Route::get('/album-images/toogle/{id}', 'AlbumImageController@toogleStatus')->name('album-images.toogle');

    Route::post('/albums/toogle', 'AlbumController@toogleStatus')->name('albums.toogle');

    Route::post('/members/toogle', 'MemberController@toogleStatus')->name('members.toogle');

    Route::post('/social_medias/toogle', 'SocialMediaController@toogleStatus')->name('social_medias.toogle');

    Route::post('/member-categories/toogle', 'MemberCategoryController@toogleStatus')->name('member-categories.toogle');

    Route::post('/post-categories/toogle', 'PostCategoryController@toogleStatus')->name('post-categories.toogle');

    Route::get('/subcategories/toogle/{id}', 'PostSubCategoryController@toogleStatus')->name('subcategories.toogle');

    Route::post('/sliders/toogle', 'SliderController@toogleStatus')->name('sliders.toogle');

    Route::post('/menus/toogle', 'MenuController@toogleStatus')->name('menus.toogle');


    Route::post('/widgets/toogle', 'WidgetController@toogleStatus')->name('widgets.toogle');

    Route::get('/widget-data/toogle/{id}', 'WidgetDataController@toogleStatus')->name('widget-data.toogle');

    Route::get('/logos/toogle/{id}', 'LogoController@toogleStatus')->name('logos.toogle');



    Route::post('/pages/toogle', 'PageController@toogleStatus')->name('pages.toogle');




    Route::post('/widgets/type','WidgetDataController@getType')->name('widgets.getType');

    Route::post('/menus/get','MenuController@getMenus')->name('menus.getMenus');

    Route::post('/pages/view_data','PageController@viewData');

    Route::post('/food-menu/view_data','FoodMenuController@viewData')->name('food-menu.view');

    Route::post('/members/view_data','MemberController@viewData');

    Route::post('/widgets/view_data','WidgetController@viewData');
    Route::get('/widgets/x/{id}','WidgetController@x');

    Route::post('/posts/view_data','PostController@viewData')->name('posts.view');

    Route::post('/drafts/view_data','DraftController@viewData')->name('drafts.view');

    Route::post('/notes/view_data','NoteController@viewData')->name('notes.view');

    Route::post('/categories/view_data','PostCategoryController@viewData');





 
});

