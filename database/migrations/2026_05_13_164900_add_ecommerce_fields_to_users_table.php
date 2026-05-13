<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('name');
            $table->string('last_name')->after('first_name');
            $table->string('phone')->unique()->after('email');
            $table->string('shopping_preference')->nullable()->after('password');
            $table->date('birthday')->nullable()->after('shopping_preference');
            $table->text('address')->nullable()->after('birthday');
            $table->string('city')->nullable()->after('address');
            $table->string('state')->nullable()->after('city');
            $table->string('postal_code', 20)->nullable()->after('state');
            $table->string('referral_code')->nullable()->index()->after('postal_code');
            $table->boolean('marketing_opt_in')->default(false)->after('referral_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'last_name',
                'phone',
                'shopping_preference',
                'birthday',
                'address',
                'city',
                'state',
                'postal_code',
                'referral_code',
                'marketing_opt_in',
            ]);
        });
    }
};
