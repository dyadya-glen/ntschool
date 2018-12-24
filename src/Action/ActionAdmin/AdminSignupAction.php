<?php

namespace NtSchool\Action\ActionAdmin;

use Illuminate\Validation\ValidationException;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class AdminSignupAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $validator;

    public function __construct($view, $validator)
    {
        $this->renderer = $view;
        $this->validator = $validator;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $messages = null;
        $data = [];

        if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();
            try {
                $this->validator->validate(
                    $data,
                    [
                        'user_name' => ['required', 'min:2', 'unique:users,user_name'],
                        'email' => ['required', 'email', 'unique:users,email'],
                        'password' => ['required', 'min:8', 'confirmed'],
                        'password_confirmation' => ['required', 'min:8']
                    ]
                );

                $user = new User();
                $user->user_name = $data['user_name'];
                $user->email = $data['email'];
                $user->password = password_hash($data['password'], PASSWORD_ARGON2I);
                $user->activation_code = md5($data['user_name']);
                $user->save();
                header("Location: /admin_index");
                exit;
            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
        }
        return $this->renderer->make('admin.admin-signup', array_merge([
            'title' => 'Sign Un',
            'messages' => $messages
        ]), $data);
    }
}
