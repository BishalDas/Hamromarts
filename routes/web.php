<?php



//-------Route added for Frontend-------------
Route::group(['namespace'=>'Frontend'],function(){
    Route::any('/','ApplicationController@index')->name('index');
    Route::any('food_and_beverage','ApplicationController@food')->name('food_and_beverage');
    Route::any('contact','ApplicationController@contact')->name('contact');
    Route::any('contact/submit','ApplicationController@contactform')->name('contactform');

    Route::any('login','UserLoginController@index')->name('login');
    Route::any('user-register','UserLoginController@add')->name('user-register');
    Route::any('password-reset','UserLoginController@passwordreset')->name('password-reset');

    Route::group(['prefix'=>'users','middleware'=>'auth:web'],function(){
        Route::any('user-info','UserLoginController@userdetails')->name('user-info');
        Route::group(['prefix'=>'user-info'],function() {
            Route::group(['prefix' => 'user-dashboard'], function () {
                Route::any('user', 'ProfileController@index')->name('user');
                Route::any('my-detail', 'ProfileController@mydetail')->name('my-detail');
                Route::any('my-profile', 'ProfileController@myprofile')->name('my-profile');
                Route::any('my-profile-detail', 'ProfileController@myprofiledetail')->name('my-profile-detail');
                Route::any('my-product', 'ProfileController@myproduct')->name('my-product');
               // Route::any('product-add', 'ProfileController@addproduct')->name('product-add');
                Route::any('product-add','ProfileController@getcategory')->name('product-add');
                Route::get('category_list/{id}', 'ProfileController@getSubCategoryList');
                Route::get('subcategory_list/{id}', 'ProfileController@getSubsubCategoryList');
                //Route::any('get-subcategory-list','ProfileController@getSubcategoryList');
               // Route::any('get-city-list','ProfileController@getSubsubcategoryList');
                //Route::any('change-password', 'ProfileController@changepassword')->name('change-password');
            });
        });


    });
    Route::any('logout','ProfileController@logout')->name('logout');
    Route::any('logout','UserLoginController@logout')->name('logout');

});
// Viewall
    Route::get('/categories/viewall',['as'=>'categories/viewall','uses'=>'PageController@categoriesviewall']);
Route::get('/food_and_beverage/viewall',['as'=>'food_and_beverage/viewall','uses'=>'PageController@foodviewall']);



/*---------For Admin Log in ---------*/
Route::group(['namespace'=>'Backend'],function() {
    Route::any('admin-login', 'AdminLoginController@index')->name('admin-login');
});

//--------Route added for Backend -------------
Route::group(['namespace'=>'Backend','prefix'=>'admin','middleware'=>'auth:admin'],function(){
    Route::any('/','DashboardController@index')->name('admin-dashboard');

    Route::group(['prefix'=>'admin-users'],function(){
        Route::any('add-product','ProductController@add')->name('add-product');
        Route::get('admin_category_list/{id}', 'ProductController@getSubCategoryList');
        Route::get('admin_subcategory_list/{id}', 'ProductController@getSubsubCategoryList');
        Route::any('/','AdminUserController@index')->name('admin-users');
        Route::any('add-admin','AdminUserController@add')->name('add-admin');
        Route::any('admin-edit/{id}','AdminUserController@edit')->name('admin-edit');
        Route::any('admin-update/{id}','AdminUserController@update')->name('admin-update');
        Route::any('delete/{id}','AdminUserController@destroy')->name('delete');
        Route::any('users-search/{criteria?}','AdminUserController@search')->name('users-search');
        Route::any('users-details/{criteria?}','AdminUserController@details')->name('users-details');
        Route::any('users-update-status','AdminUserController@status')->name('users-update-status');
        Route::any('admin-users-type','AdminUserController@user_type')->name('admin-users-type');
        Route::any('admin-edit/{id}','AdminUserController@edit')->name('admin-edit');
        Route::any('changePassword','PasswordController@showChangePasswordForm')->name('changePassword');
        Route::any('changePasswordsubmit','PasswordController@changePassword')->name('changepasswordform');
      //  Route::any('password','@index')->name('password');
    });

    Route::group(['prefix'=>'category'],function(){
        Route::any('show-categories','Categorycontroller@show')->name('show-categories');
        Route::any('add-categories','Categorycontroller@add')->name('add-categories');
        Route::any('update-status','Categorycontroller@status')->name('update-status');
        Route::any('delete/{id}','Categorycontroller@delete')->name('delete');
        Route::any('edit-cat','Categorycontroller@edit')->name('edit-cat');
    });

    Route::group(['prefix'=>'product'],function(){
        Route::any('products', 'ProductController@index')->name('products');
        Route::any('show-products','productcontroller@index')->name('show-products');
        Route::any('add-product','ProductController@add')->name('add-product');
        Route::get('admin_category_list/{id}', 'ProductController@getSubCategoryList');
        Route::get('admin_subcategory_list/{id}', 'ProductController@getSubsubCategoryList');
        Route::any('product-details/{criteria?}','ProductController@details')->name('product-details');
        Route::any('product-edit/{id}','ProductController@edit')->name('product-edit');
        Route::any('product-update/{id}','ProductController@update')->name('product-update');

        Route::get('product-search', 'ProductController@action')->name('product-search');
        Route::any('delete/{id}', 'ProductController@destroy')->name('delete');

        //Route::any('add-product','productcontroller@add')->name('add-product');

        Route::any('deletepro/{id}','productcontroller@delete')->name('deletepro');
    });
   Route::any('admin-logout','AdminLoginController@logout')->name('admin-logout');
});





/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
