<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGBPropertiesSyncTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GB_PropertySync', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
            $table->string('status')->nullable();
            $table->string('title')->nullable();
            $table->string('type');
            $table->string('propind')->nullable();
            $table->string('price_display')->nullable();
            $table->string('price_qualifier')->nullable();
            $table->unsignedFloat('price')->default(0);
            $table->unsignedMediumInteger('beds')->default(0);
            $table->unsignedMediumInteger('bathrooms')->default(0);
            $table->unsignedMediumInteger('receptions')->default(0);
            $table->string('bedswithtype')->nullable();
            $table->text('summary')->nullable();
            $table->mediumText('website_url')->nullable();
            $table->string('area')->nullable();
            $table->json('amenities')->nullable();
            $table->string('reference')->nullable();
            $table->mediumText('floorplan')->nullable();
            $table->mediumText('epc')->nullable();
            $table->mediumText('virtual_tour_link')->nullable();
            $table->string('img_listingIcon')->nullable();
            $table->string('img_1200x600')->nullable();
            $table->string('img_600x600')->nullable();
            $table->string('img_600x1200')->nullable();
            $table->json('imagelist')->nullable();
            $table->longText('rawdata')->nullable();
            $table->text('disclaimer_text')->nullable();
            $table->text('full_address')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->float('latitude',14,11)->nullable();
            $table->float('longitude',14,11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GB_PropertySync');
    }
}
