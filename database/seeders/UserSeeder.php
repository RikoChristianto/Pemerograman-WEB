<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        // [
        //      'name' => 'Admin',
        //      'alamat' => 'Jl Admin',
        //      'no_hp' => '0800000000',
        //      'role' => 'admin',
        //      'id_poli' => null,
        //      'email' => 'admin@gmail.com',
        //      'password' => 'admin1234'
        // ],

        ];
        foreach($data as $d){
            User::create([
                'name' => $d['name'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'id_poli' => $d['id_poli'],
                'email' => $d['email'],
                'password' => bcrypt($d['password']),
            ]);
        }
    }
}