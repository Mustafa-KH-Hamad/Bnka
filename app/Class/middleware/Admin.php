<?php

namespace App\Class\Middleware;

class Admin
{
    public function handle()
    {
        if (!isset($_SESSION['is_admin'])) {
            header('Location: /');
            exit;
        }
    }
}