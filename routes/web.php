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

Route::get('page/{id}', 'HomeController@getPage')->name('page');
Route::get('post/{id}', 'HomeController@getPost')->name('post');
Route::get('post-category/{id}', 'HomeController@getPostCategory')->name('post.category');
Route::get('gallery/{id}', 'HomeController@getGallery')->name('gallery');
Route::get('photo-gallery', 'HomeController@photoGallery')->name('photo_gallery');
Route::get('video-gallery', 'HomeController@videoGallery')->name('video_gallery');


Route::post('get_content', 'HomeController@getContent')->name('get_content');

Route::post('get_gallery', 'HomeController@getGallery')->name('get_gallery');


Route::get('/about/archive-gallery', function () {
    return view('frontend.archive_gallery');
});
Route::get('/units/27-re', function () {
    return view('frontend.blank')->with("page_title", "27 Riverine Engineering Battalion (RE)")->with("sidebar_dynamic", "_27");
});
Route::get('/units/28-ebr', function () {
    return view('frontend.blank')->with("page_title", "28 East Bangle Regiments (EB)")->with("sidebar_dynamic", "_28");
});
Route::get('/units/19-bir', function () {
    return view('frontend.blank')->with("page_title", "19 Bangladesh Infantry Regiment (BIR)")->with("sidebar_dynamic", "_19");
});
Route::get('/units/43-shorad', function () {
    return view('frontend.blank')->with("page_title", "43 Short Range Air Defence (SHORAD)")->with("sidebar_dynamic", "_2");
});
Route::get('/units/ads', function () {
    return view('frontend.blank')->with("page_title", "ADS")->with("sidebar_dynamic", "_3");
});
Route::get('/units/adhoc-ssd', function () {
    return view('frontend.blank')->with("page_title", "Adhoc SSD")->with("sidebar_dynamic", "_3");
});
Route::get('/units/adhoc-workshop', function () {
    return view('frontend.blank')->with("page_title", "Adhoc Workshop")->with("sidebar_dynamic", "_3");
});
Route::get('/units/garrison-engineers', function () {
    return view('frontend.blank')->with("page_title", "Garrison Workshop (GW)")->with("sidebar_dynamic", "_3");
});
// War Heroes
Route::get('/war-heroes/munshiganj', function () {
    return view('frontend.war_heroes')->with("district", "Munshiganj");
});
Route::get('/war-heroes/faridpur', function () {
    return view('frontend.war_heroes')->with("district", "Faridpur");
});
Route::get('/war-heroes/madaripur', function () {
    return view('frontend.war_heroes')->with("district", "Madaripur");
});
// Padma Bridge
Route::get('/padma-bridge/history', function () {
    return view('frontend.blank')->with("page_title", "History");
});
Route::get('/padma-bridge/project-cost', function () {
    return view('frontend.blank')->with("page_title", "Project Cost");
});
Route::get('/padma-bridge/contract-details', function () {
    return view('frontend.blank')->with("page_title", "Contract Details");
});
Route::get('/padma-bridge/resettlement-details', function () {
    return view('frontend.blank')->with("page_title", "Resettlement Details");
});
Route::get('/padma-bridge/environment-details', function () {
    return view('frontend.blank')->with("page_title", "Environment Details");
});
Route::get('/padma-bridge/land-acquisition-details', function () {
    return view('frontend.blank')->with("page_title", "Land Acquisition Details");
});
Route::get('/padma-bridge/project-cost-summary', function () {
    return view('frontend.blank')->with("page_title", "Project Cost Summary");
});
Route::get('/padma-bridge/main-bridge-details', function () {
    return view('frontend.blank')->with("page_title", "Main Bridge Details (Technical)");
});
Route::get('/padma-bridge/river-training-work', function () {
    return view('frontend.blank')->with("page_title", "River Training Work (Technical)");
});
Route::get('/padma-bridge/approach-road-and-service-areas-details', function () {
    return view('frontend.blank')->with("page_title", "Approach Road and Service Areas Details");
});

// National Building
Route::get('/national-building/development-work', function () {
    return view('frontend.blank')->with("page_title", "Development Work");
});
Route::get('/national-building/construction-work', function () {
    return view('frontend.blank')->with("page_title", "Construction Work");
});
Route::get('/national-building/civil-administration', function () {
    return view('frontend.blank')->with("page_title", "In Aid to Civil Administration");
});
// Media
Route::get('/media/spotlight', function () {
    return view('frontend.blank')->with("page_title", "Spotlight");
});
Route::get('/media/publications', function () {
    return view('frontend.blank')->with("page_title", "Publications");
});
Route::get('/media/photo-gallery', function () {
    return view('frontend.blank')->with("page_title", "Photo Gallery");
});
Route::get('/media/video-gallery', function () {
    return view('frontend.blank')->with("page_title", "Video Gallery");
});

// Branch Activities
Route::get('/branch-activities/general-staff-branch', function () {
    return view('frontend.blank')->with("page_title", "General Staff Branch (GS)");
});
Route::get('/branch-activities/admin-quartering-branch', function () {
    return view('frontend.blank')->with("page_title", "Admin & Quartering Branch");
});
Route::get('/branch-activities/establishment-branch', function () {
    return view('frontend.blank')->with("page_title", "Establishment Branch");
});
Route::get('/branch-activities/ord-branch', function () {
    return view('frontend.blank')->with("page_title", "Ord Branch");
});


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

    Route::get('/notes/outgoing', 'NoteController@outGoing')->name('notes.outgoing');
    
    Route::get('/dashboard/getTodos', 'TodoController@getTodos')->name('dashboard.getTodos');


    Route::get('/mess/foodmenu/get', 'FoodMenuController@get_filtered')->name('foodmenu.get_filtered');
    Route::post('/mess/foodmenu/get', 'MealController@get_food_menu')->name('food_menu.get');

    Route::get('/meals/entry/{user_id}', 'MealController@entry')->name('meals.entry');
    Route::post('/meals/insert','MealController@insert')->name('meals.insert');

    Route::get('/mess/food/meal-calendar', 'MealController@meal_calendar')->name('mess.meal_calendar');
    Route::get('/mess/food/user-meal-calendar', 'MealController@user_meal_calendar')->name('mess.user_meal_calendar');

    Route::post('/meals/make-payment', 'MealController@make_payment')->name('meals.make_payment');

    Route::post('/user-transaction/make-payment', 'UserTransactionController@make_payment')->name('user-transaction.make_payment');

    Route::get('/user-transaction/confirm-payment/{tr_id}', 'UserTransactionController@confirm_payment')->name('user-transaction.confirm_payment');

    Route::post('/meals/view_data','MealController@viewData')->name('meals.view');


    Route::post('/user-transaction/view_data','UserTransactionController@viewData')->name('user-transaction.view');

    Route::get('/report/meals/meal-budget','MealController@meal_budget')->name('meals.meal_budget');
    Route::get('/report/meals/meal-budget-print','MealController@meal_budget_print')->name('meals.meal_budget_print');

    Route::get('/report/meals/user-meal-report','MealController@user_meal_report')->name('meals.user_meal_report');
    Route::post('/report/meals/user-meal-report-print','MealController@user_meal_report_print')->name('meals.user_meal_report_print');

    Route::get('/report/meals/meal-report','MealController@meal_report')->name('meals.meal_report');
    Route::get('/report/meals/meal-report-print','MealController@meal_report_print')->name('meals.meal_report_print');

    Route::get('/user-access/permissions/{id}','UserAccessController@user_permissions')->name('user_permissions');
    
    Route::post('/user-access/toggle', 'UserAccessController@toggleStatus')->name('user-access.toggle');


    Route::resources([
        'drafts' => 'DraftController',
        'events' => 'EventController',
        'food-menu' => 'FoodMenuController',
        'meals' => 'MealController',
        'food-category' => 'FoodCategoryController',
        'user-transaction' => 'UserTransactionController',
        'notes' => 'NoteController',
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
        'general-settings' => 'GeneralSettingController',
        'menus' => 'MenuController',
        'members' => 'MemberController',
        'albums' => 'AlbumController',
        'videos' => 'VideoController',
        'album-images' => 'AlbumImageController',
        'member-categories' => 'MemberCategoryController',
        'users' => 'UserController',
        'user-access' => 'UserAccessController',

        // 'posts' => 'PostController'
    ]);


    Route::post('/dashboard/saveQuote', 'DashboardController@saveQuote')->name('dashboard.saveQuote');
    Route::get('/dashboard/getQuote', 'DashboardController@getQuote')->name('dashboard.getQuote');



    Route::post('/food-menu/toggle', 'FoodMenuController@toggleStatus')->name('food-menu.toggle');

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


    // prescription
    Route::get('/prescription/mdcn_corner',function(){
        return view('admin.prescription.mdcn_corner');
    })->name('prescription.mdcn_corner');

    Route::get('/prescription/prescription',function(){
        return view('admin.prescription.prescription');
    })->name('prescription.prescription');



 
});

