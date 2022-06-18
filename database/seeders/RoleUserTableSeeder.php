<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_ids = User::where('email', 'edson2017silva123@gmail.com')
            ->orWhere('email', 'helderlucheses@gmail.com')
            ->orWhere('email', 'rodrigogunza007@gmail.com')
            ->orWhere('email', 'uniilsiis@gmail.com')
            ->orWhere('email', 'gideaodossantosdomingos@gmail.com')
            ->pluck('id');
        foreach($users_ids as $id){
            DB::table('role_user')->insert([
                'user_id' => $id,
                'role_id' => 3,
            ]);    
        }
    }
}
