<?php

namespace NtSchool\Action\ActionAdmin;

use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationException;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class AdminSigninAction
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
        $messages = new MessageBag();
        $data = [];
        $passwordHash = '';

        if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();

            $userData = User::where('email', $data['email'])->first();
            if ($userData['email'] == $data['email']){
                $passwordHash = $userData['password'];
            }

            try {
                $this->validator->validate(
                    $data,
                    [
                        'email' => ['required', 'email', 'exists:users,email'],
                        'password' => ['required']
                    ]
                );
                if (!password_verify($data['password'], $passwordHash)){
                    $messages->add('password', 'Пароль задан не верено!');
                }

            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }

            if ($messages->count() === 0){
                $_SESSION['login'] = $userData['user_name'];
                header("Location: /admin_index");
                exit;
            }

        }
        return $this->renderer->make('admin.admin-signin', array_merge([
            'title' => 'Sign In',
            'messages' => $messages,
        ]), $data);
    }
}
