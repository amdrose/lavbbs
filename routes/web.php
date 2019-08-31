<?php




Route::get('/index','Admin\IndexController@showIndex');

//老式写法
//Route::group(['prefix'=>'front','namespace'=>'Front'],function (){
//
//});
//用户前台和后台
Route::namespace('Front')->prefix('front')->group(function (){
    //主界面显示
    Route::get('index','IndexController@indexShow')->name('front.index');
    //帖子列表的显示
    Route::get('listpost','ListpostController@showPost')->name('front.listpost');
    //登陆界面
    Route::get('login','LoginController@login')->name('front.login');
    //登陆相关处理
    Route::post('login','LoginController@userDeal')->name('front.login');
    //退出登陆
    Route::get('/prompt','LoginController@loginout')->name('front.loginout');
    //帖子发布页
    Route::get('public','PublicController@show')->name('front.public');
    //帖子添加页
    Route::post('public','PublicController@add')->name('front.public');
    //文件上传相关操作
    Route::get('upload','FileController@showUpLoad')->name('front.showupload');
    Route::post('upload','FileController@upload')->name('front.upload');
    //文件下载
    Route::get('down/{name}','DownfileController@down')->name('front.down');
    //帖子内容显示
    Route::get('content/{modid}/{contenttitle}/{username}/{created_at}','ContentController@showContent')->name('front.content');
    //用户个人页面展示
    Route::get('user','UserController@showMes')->name('front.user');
    //用户帖子显示
    Route::get('usershow/{contentid}','UserOpController@show')->name('front.show');
    //用户帖子删除
    Route::get('userdelete/{contentid}','UserOpController@delete')->name('front.userdelete');
    //用户帖子编辑
    Route::post('userupdate/{id}','UserOpController@update')->name('front.userupdate');
    //用户头像修改
    Route::get('headport','HeadportController@show')->name('front.headport');
    Route::post('headport','HeadportController@headdeal')->name('front.headport');

    //用户注册页
    Route::get('regist','RegistController@regist')->name('front.regist');
    Route::post('regist','RegistController@registdeal')->name('front.regist');
});



Route::get('/prompt','Inc\PromptController@showPrompt')->name('inc.prompt');

Route::get('/home', 'HomeController@index')->name('home');

