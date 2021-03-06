<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            // ID
            $table->id();

            // foreign key
            $table->foreignId('company_id')
                ->constrained('companies')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Data
            $table->string('title');
            $table->text('description');

            // Links
            $table->string('application_link')->nullable();

            // Timestamps
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
