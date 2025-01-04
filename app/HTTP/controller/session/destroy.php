<?php 
use App\Class\Authenticator;

(new Authenticator) -> logout();

redirect('/');
 