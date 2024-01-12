<?php

namespace Database\Seeders;

use App\enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        create 3 users : admin manager customer
        $userAdmin = User::factory()
            ->create(['status'=>UserStatus::Administrator->value]);

        $userBoss = User::factory()
                      ->create(['status'=>UserStatus::Boss->value]);

        $user=User::factory()
            ->count(9)
            ->state(new Sequence(
                ['status' => UserStatus::Customer->value],
                ['status' => UserStatus::Manager],
            ))
        ->create();

//        users roles
        $users = User::all();

        foreach ($users as $user) {

            switch ($user->status) {

                case(UserStatus::Customer):
                    $user->assignRole(UserStatus::Customer->value);
                    break;

                case(UserStatus::Manager):
                    $user->assignRole(UserStatus::Manager->value);
                    break;

                case(UserStatus::Administrator):
                    $user->assignRole(UserStatus::Administrator->value);
                    break;

                case(UserStatus::Boss):
                    $user->assignRole(UserStatus::Boss->value);
                    break;
            }
        }

    }
}
