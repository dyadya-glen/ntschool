<?php

namespace NtSchool\Action;

use NtSchool\LoggerInterface;
use Ntschool\Notifier\NotifierAdapterInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $notifier;

    public function __construct($view, NotifierAdapterInterface $notifier)
    {
        $this->renderer = $view;
        $this->notifier = $notifier;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->notifier->emergency('Message new Adapter method error');
        return $this->renderer->make('index', [
            'title' => 'Pet Salon'
        ]);
    }
}
