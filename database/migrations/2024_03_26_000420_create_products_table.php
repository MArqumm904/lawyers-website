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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('u_id');
            $table->string('u_name');
            $table->string('email');
            $table->string('phone');
            $table->string('fname');
            $table->string('lname');
            $table->string('son_of');
            $table->string('gender');
            $table->string('dob');
            $table->string('bloodgroup');
            $table->string('profile_pic');

            $table->string('id_cnic');
            $table->string('bar_license');
            $table->string('fbr_photo')->nullable();
            $table->string('fbr_photo_one')->nullable();
            $table->string('fbr_photo_two')->nullable();



            $table->string('house_no');
            $table->string('streetaddress');
            $table->string('town')->nullable();
            $table->string('city');
            $table->string('postalcode')->nullable();
            $table->string('country');
            $table->string('province');
            $table->string('district');
            $table->string('tehsil');

            $table->string('matric_qualification');
            $table->string('matric_institute');
            $table->string('matric_totalMarks');
            $table->string('matric_obtainMarks');
            $table->string('matric_certificate_picture');

            $table->string('inter_qualification');
            $table->string('inter_institute');
            $table->string('inter_totalMarks');
            $table->string('inter_obtainMarks');
            $table->string('inter_certificate_picture');

            $table->string('batch_qualification');
            $table->string('batch_institute');
            $table->string('batch_totalMarks');
            $table->string('batch_obtainMarks');
            $table->string('batch_certificate_picture');

            $table->string('llb_qualification')->nullable();
            $table->string('llb_institute')->nullable();
            $table->string('llb_totalMarks')->nullable();
            $table->string('llb_obtainMarks')->nullable();
            $table->string('llb_certificate_picture')->nullable();

            $table->string('other_qualification')->nullable();
            $table->string('other_institute')->nullable();
            $table->string('other_totalMarks')->nullable();
            $table->string('other_obtainMarks')->nullable();
            $table->string('other_certificate_picture')->nullable();

            $table->string('acc_no')->nullable();
            $table->string('transaction_picture')->nullable();
            $table->string('rec_mem');
            $table->string('gtba_mem')->nullable();
            $table->string('rec_city')->nullable();
            $table->string('rec_sig')->nullable();
            $table->string('rec_nameone')->nullable();
            $table->string('rec_nametwo')->nullable();
            $table->string('rec_namethree')->nullable();
            $table->string('rec_addressone')->nullable();
            $table->string('rec_addresstwo')->nullable();
            $table->string('rec_addressthree')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
