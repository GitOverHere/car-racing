<?php

require_once 'core/init.php';


if (Input::exists())
{
    if (Token::check(Input::get('token')))
    {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true),
        ));
        if ($validation->passed())
        {
            $user = new User();
            $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);
            if ($login)
            {
                Redirect::to('index.php');
            }
            else
            {
                echo '<p>Sorry, loggin failed';
            }
        }
        else
        {
            foreach ($validation->errors() as $error)
            {
                echo $error, '<br>';
            }
        }
    }
}