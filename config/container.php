<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$builder = new ContainerBuilder();
$container = $builder->newInstance();

$container->set('file-logger', function () {
    $logger = new Logger('name');
    $logger->pushHandler(new StreamHandler(__DIR__ . '/../resources/logs/main.log'));
    $notifier = new \Ntschool\Notifier\Adapter\MonologNotifierAdapter($logger);
    return $notifier;
});

$container->set('telegram-logger', function () {
    $notifier = new \Ntschool\Notifier\Adapter\TelegramNotifierAdapter(
        '742482006:AAEHNdvrrA1f1CbHbfJRglrXYdTfGZWbQPM',
        '315264334'
    );
    return $notifier;
});

$container->set('notifier', function () use ($container) {
    $notifier = new \Ntschool\Notifier\NotifierObserver();
    $notifier->add($container->get('file-logger'));
    $notifier->add($container->get('telegram-logger'));
    return $notifier;
});


$container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\HomeAction($renderer, $container->get('notifier'));
});

$container->set(\NtSchool\Action\ListOfGoodsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ListOfGoodsAction($renderer);
});

$container->set(\NtSchool\Action\ItemGoodAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ItemGoodAction($renderer);
});

$container->set(\NtSchool\Action\CartAction::class, function () use ($renderer) {
    return new \NtSchool\Action\CartAction($renderer);
});

$container->set(\NtSchool\Action\ShopCheckoutAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ShopCheckoutAction($renderer);
});

$container->set(\NtSchool\Action\ShopRegisterAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ShopRegisterAction($renderer);
});

$container->set(\NtSchool\Action\TimetableAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TimetableAction($renderer);
});

$container->set(\NtSchool\Action\TeamAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TeamAction($renderer);
});

$container->set(\NtSchool\Action\TeamSingleAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TeamSingleAction($renderer);
});

$container->set(\NtSchool\Action\ServicesAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ServicesAction($renderer);
});

$container->set(\NtSchool\Action\ServiceSingleAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ServiceSingleAction($renderer);
});

$container->set(\NtSchool\Action\FaqAction::class, function () use ($renderer) {
    return new \NtSchool\Action\FaqAction($renderer);
});

$container->set(\NtSchool\Action\Action404::class, function () use ($renderer) {
    return new \NtSchool\Action\Action404($renderer);
});

$container->set(\NtSchool\Action\BlogAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogAction($renderer);
});

$container->set(\NtSchool\Action\PostAction::class, function () use ($renderer) {
    return new \NtSchool\Action\PostAction($renderer);
});

$container->set(\NtSchool\Action\VideoPostAction::class, function () use ($renderer) {
    return new \NtSchool\Action\VideoPostAction($renderer);
});

$container->set(\NtSchool\Action\ContactAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ContactAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminBootstrapAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminBootstrapAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminCommentAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminCommentAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminCommentsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminCommentsAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminFaqAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminFaqAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminFormsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminFormsAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminInboxAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminInboxAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminOrderAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminOrderAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminOrdersAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminOrdersAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminPostAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminPostAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminPostsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminPostsAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminProductAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminProductAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminProductsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminProductsAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminProfileAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminProfileAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminProfileEditAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminProfileEditAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminTablesAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminTablesAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminSigninAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminSigninAction($renderer);
});

$container->set(\NtSchool\Action\ActionAdmin\AdminSignupAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ActionAdmin\AdminSignupAction($renderer);
});
