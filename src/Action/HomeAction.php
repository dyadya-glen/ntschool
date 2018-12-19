<?php

namespace NtSchool\Action;

use NtSchool\LoggerInterface;
use Ntschool\Notifier\NotifierAdapterInterface;
use Ntschool\Notifier\NotifierObserverInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $notifier;

    public function __construct($view, NotifierObserverInterface $notifier)
    {
        $this->renderer = $view;
        $this->notifier = $notifier;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        //$this->notifier->emergency('Observer !');
        return $this->renderer->make('index', [
            'title' => 'Pet Salon'
        ]);
    }
}
