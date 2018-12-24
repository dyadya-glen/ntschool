<?php

namespace NtSchool\Action\User;

use Psr\Http\Message\ServerRequestInterface;

class CreateUserAction
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

        return $this->renderer->make('admin.admin-profile-edit', [
            'title' => 'User Profile'
        ]);
    }
}