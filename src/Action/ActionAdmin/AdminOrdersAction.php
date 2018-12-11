<?php

namespace NtSchool\Action\ActionAdmin;

use Psr\Http\Message\ServerRequestInterface;

final class AdminOrdersAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('admin.admin-orders', [
            'title' => 'Pet Salon Admin'
        ]);
    }
}
