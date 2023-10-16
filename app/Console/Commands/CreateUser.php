<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize user admin and password';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
{
    $username = Str::random(10);
    $randomPassword = Str::random(10) . '!@#' . rand(0, 999); // Genera una contraseña aleatoria con símbolos, letras y números
    $passwordHashed = hash('sha256', $randomPassword);

    User::create([
        'username' => $username,
        'password' => $passwordHashed,
    ]);

    // Guarda las credenciales en un archivo JSON en el storage.
    Storage::put('user_credentials.json', json_encode([
        'username' => $username,
        'password' => $randomPassword
    ]));

    $this->info("User created succesfully: {$username}");
}
}
