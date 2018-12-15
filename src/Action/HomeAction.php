<?php

namespace NtSchool\Action;

use NtSchool\LoggerInterface;
use Ntschool\Notifier\NotifierAdapterInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $logger;

    public function __construct($view, NotifierAdapterInterface $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->logger->error('Message new Adapter method error');
        return $this->renderer->make('index', [
            'title' => 'Pet Salon'
        ]);
    }
}
