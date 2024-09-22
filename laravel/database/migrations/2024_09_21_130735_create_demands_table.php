<?php

use App\Enums\DemandStatusEnum;
use App\Enums\RoleEnum;
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
        Schema::create('demands', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->enum('status', [DemandStatusEnum::Approved->value, DemandStatusEnum::Pending->value, DemandStatusEnum::Declined->value])->default(DemandStatusEnum::Pending->value);
            $table->enum('role', [RoleEnum::Admin->value, RoleEnum::Employee->value]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demands');
    }
};
