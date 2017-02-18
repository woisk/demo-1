<?php
Route::group(['domain' => 'api.woisk.ff'], function () {

    Route::group(['namespace' => 'Api'], function () {

        Route::any('signup', 'Account\AccountController@signupAccount')->name('account.signup'); //注册 @param username  password
        Route::any('login', 'Account\AccountController@login')->name('account.login'); //登录@param login_name password
        Route::any('loginout', 'Account\AccountController@loginout')->name('account.loginout'); //退出登录
        Route::any('back/password', 'Password\PasswordController@backPassword')->name('back.password'); //找回密码@param email OR mobile
        Route::any('terminal', 'Terminal\TerminalController@getTerminal');//终端信息
        Route::any('test', 'TestController@test');//测试

        Route::group(['middleware' => 'jwt.auth'], function () {
            Route::any('auth/token', 'Account\AccountController@getAuthenticatedUser')->name('auth.token');//获取token用户信息@param token
            Route::any('refresh/token', 'Account\AccountController@refreshToken')->name('refresh.token');//刷新token用户信息@param  token
            Route::any('binding', 'Bind\BindController@index')->name('bind.index');//绑定邮箱@param email
            Route::any('auth/email', 'Bind\BindController@authEmail')->name('auth.email');//验证邮箱@param token
            Route::any('auth/back/email', 'Password\PasswordController@authBackEmail')->name('auth.back.email');//验证找回密码邮箱@param token
            Route::any('up/password', 'Password\PasswordController@upPassword')->name('up.password');//修改密码

            /*-------------------------------------------------------------*/
            //Home  路由组
            /*--------------------------------------------------------------*/
            Route::any('home/', 'Password\PasswordController@upPassword')->name('up.password');//home@param  name  key   dsrceipt

        });

    });
});