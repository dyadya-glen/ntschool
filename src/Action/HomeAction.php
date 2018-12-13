<?php

namespace NtSchool\Action;

use NtSchool\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $logger;

    public function __construct($view, LoggerInterface $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->logger->warning('Some event');
        return $this->renderer->make('index', [
            'title' => 'Pet Salon'
        ]);
    }
}
