<?php

namespace App\Helpers;

class LayoutHelper
{

    static function bootstrap(): array {

        return [
            // General app values.
            'app.url' => fn () => url('/'),
            'app.name' => fn () => config('app.name', 'Laravel'),
            'app.csrf' => fn () => csrf_token(),
            // Auth values.
            'auth.user' => fn () => auth()->user(),
            // Routes.
            'route.login' => fn () => route('login'),
            'route.register' => fn () => route('register'),
            'route.logout' => fn () => route('logout'),
        ];

    }

    static function test() {
        return route('login');
    }

}