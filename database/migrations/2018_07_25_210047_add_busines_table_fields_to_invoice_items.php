<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBusinesTableFieldsToInvoiceItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('invoice_items', function (Blueprint $table) {
            $table->string('project');
            $table->integer('business_unit');
            $table->integer('fund');
            $table->integer('account');
            $table->integer('department');
            $table->integer('site');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function ($table) {
            $table->dropColumn('project');
            $table->dropColumn('business_unit');
            $table->dropColumn('fund');
            $table->dropColumn('account');
            $table->dropColumn('department');
            $table->dropColumn('site');
            $table->dropColumn('amount');
        });
    }
}
