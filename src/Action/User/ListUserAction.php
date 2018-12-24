<?php

namespace NtSchool\Action\User;

use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class ListUserAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $validator;

    public function __construct($renderer, $validator)
    {
        $this->renderer = $renderer;
        $this->validator = $validator;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $users = User::all();

        return $this->renderer->make('admin.admin-posts', [
            'title' => 'Users List',
            'users' => $users
        ]);
    }
}