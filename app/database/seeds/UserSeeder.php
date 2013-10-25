<?php

class UserSeeder extends DatabaseSeeder {
    public function run(){
        $user = [
            "username" => "ruta",
            "password" => Hash::make("labas")
        ];

        User::create($user);
    }
}