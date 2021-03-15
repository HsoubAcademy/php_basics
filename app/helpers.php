<?php

use App\App;

function home()
{
    return trim(App::get('config')['app']['home_url'], '/');
}

function redirect($to)
{
    header("Location: {$to}");
}

function redirect_home()
{
    redirect(home());
}

function back()
{
    redirect($_SERVER['HTTP_REFERER'] ?? home());
}

function view($name, $data) 
{
    extract($data);
    require "resources/{$name}.view.php";
}