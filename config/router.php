<?php

$routerContainer = new \Aura\Router\RouterContainer();
$router = $routerContainer->getMap();

$router->get('home', '/', \NtSchool\Action\HomeAction::class);
$router->get('list of goods', '/list-of-goods', \NtSchool\Action\ListOfGoodsAction::class);
$router->get('item good', '/item-good', \NtSchool\Action\ItemGoodAction::class);
$router->get('shop cart', '/shop-cart', \NtSchool\Action\CartAction::class);
$router->get('shop checkout', '/shop-checkout', \NtSchool\Action\ShopCheckoutAction::class);
$router->get('shop register', '/shop-register', \NtSchool\Action\ShopRegisterAction::class);
$router->get('timetable', '/timetable', \NtSchool\Action\TimetableAction::class);
$router->get('team', '/team', \NtSchool\Action\TeamAction::class);
$router->get('team single', '/team-single', \NtSchool\Action\TeamSingleAction::class);
$router->get('services', '/services', \NtSchool\Action\ServicesAction::class);
$router->get('service', '/service-single', \NtSchool\Action\ServiceSingleAction::class);
$router->get('faq', '/faq', \NtSchool\Action\FaqAction::class);
$router->get('404', '/404', \NtSchool\Action\Action404::class);
$router->get('blog', '/blog', \NtSchool\Action\BlogAction::class);
$router->get('post', '/blog-single', \NtSchool\Action\PostAction::class);
$router->get('video post', '/blog-single-video', \NtSchool\Action\VideoPostAction::class);
$router->get('contact', '/contact', \NtSchool\Action\ContactAction::class);
$router->get('admin', '/admin_index', \NtSchool\Action\ActionAdmin\AdminAction::class);
$router->get('admin bootstrap', '/admin_bootstrap', \NtSchool\Action\ActionAdmin\AdminBootstrapAction::class);
$router->get('admin comment', '/admin_comment', \NtSchool\Action\ActionAdmin\AdminCommentAction::class);
$router->get('admin comments', '/admin_comments', \NtSchool\Action\ActionAdmin\AdminCommentsAction::class);
$router->get('admin faq', '/admin_faq', \NtSchool\Action\ActionAdmin\AdminFaqAction::class);
$router->get('admin forms', '/admin_forms', \NtSchool\Action\ActionAdmin\AdminFormsAction::class);
$router->get('admin inbox', '/admin_inbox', \NtSchool\Action\ActionAdmin\AdminInboxAction::class);
$router->get('admin order', '/admin_order', \NtSchool\Action\ActionAdmin\AdminOrderAction::class);
$router->get('admin orders', '/admin_orders', \NtSchool\Action\ActionAdmin\AdminOrdersAction::class);
$router->get('admin post', '/admin_post', \NtSchool\Action\ActionAdmin\AdminPostAction::class);
$router->get('admin posts', '/admin_posts', \NtSchool\Action\ActionAdmin\AdminPostsAction::class);
$router->get('admin product', '/admin_product', \NtSchool\Action\ActionAdmin\AdminProductAction::class);
$router->get('admin profile', '/admin_profile', \NtSchool\Action\ActionAdmin\AdminProfileAction::class);
$router->get('admin profile edit', '/admin_profile_edit', \NtSchool\Action\ActionAdmin\AdminProfileEditAction::class);
$router->get('admin tables', '/admin_tables', \NtSchool\Action\ActionAdmin\AdminTablesAction::class);
$router->get('admin sign in', '/administrator', \NtSchool\Action\ActionAdmin\AdminSigninAction::class);
$router->get('admin sign up', '/admin_signup', \NtSchool\Action\ActionAdmin\AdminSignupAction::class);