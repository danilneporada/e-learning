<?php

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' => 'Danil',
            'email' => 'danil.neporada@lamp-dev.com',
            'email_verified_at' => null,
            'password' => '$2y$10$DfzxcklZMTrruWveG.Ty3OCgaSqludoyvdm7Jhp4cSkg5kr.kPNHy',
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => null,
            'current_team_id' => null,
            'course_id' => Course::first()->id,
            'profile_photo_path' => null,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::query()->truncate();
    }
}
