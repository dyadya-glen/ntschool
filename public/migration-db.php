<?php

use Illuminate\Database\Capsule\Manager;

require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/database.php';

//Manager::schema()->create('forgot_password_codes1', function ($table) {
//    $table->increments('id');
//    $table->unsignedInteger('user_id');
//    $table->string('code');
//    $table->timestamps();
//    $table->tinyInteger('is_active')->default(0);
//});
//
////$passwordCodes = new \NtSchool\Model\ForgotPasswordCode;
////$passwordCodes->user_id = '1';
////$passwordCodes->code = 'cRpzsavFgTT42tajcy';
////$passwordCodes->created_at = '2018-11-09 15:05:57';
//
//Manager::schema()->create('posts', function ($table) {
//    $table->increments('id');
//    $table->string('image');
//    $table->string('title');
//    $table->text('content');
//    $table->timestamps();
//});
//
//Manager::schema()->create('user', function ($table) {
//    $table->increments('id');
//    $table->string('email')->unique();
//    $table->string('password');
//    $table->tinyInteger('is_active')->default(0);
//    $table->string('activation_code');
//});

//Manager::schema()->create('posts', function ($table) {
//    $table->increments('id');
//    $table->string('cover');
//    $table->string('title');
//    $table->string('description');
//    $table->text('content');
//    $table->timestamps();
//});

//Manager::schema()->create('categories', function ($table) {
//    $table->increments('id');
//    $table->string('title');
//    $table->string('key');
//    $table->timestamps();
//});


//Manager::schema()->create('category_post', function ($table) {
//    $table->unsignedInteger('post_id');
//    $table->unsignedInteger('category_id');
//    $table->timestamps();
//    $table->primary(['post_id', 'category_id']);
//});

//**************************************//

//$category = new \NtSchool\Model\Category();
//$category->title = 'Category 1';
//$category->key = 'category-1';
//$category->save();
//
//$category = new \NtSchool\Model\Category();
//$category->title = 'Category 2';
//$category->key = 'category-2';
//$category->save();
//
//$category = new \NtSchool\Model\Category();
//$category->title = 'Category 3';
//$category->key = 'category-3';
//$category->save();
