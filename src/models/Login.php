<?php

loadModel('User');

class Login extends Model {
    public function validate(){
        $errors = [];
        if (!$this->email){ ### Onde está esssa variável
            $errors['email'] = 'Por favor, informe seu e-mail.';
        }

        if (!$this->password){
            $errors['password'] = 'A senha é obrigatória.';
        }

        if(count($errors) > 0){
            throw new ValidationException($errors); ###### Como consigo usar isso?
        }
    }

    public function checkLogin(){
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if ($user){
            if($user->end_date){
                throw new AppException('Usuário desligado da empresa');   
            }
            if(password_verify($this->password, $user->password)){ ### essa função ja existe?
                return $user;
            }
        }
        throw new AppException('Usuário/Senha inválidos');
    }
}