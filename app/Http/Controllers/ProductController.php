<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Members;

class ProductController extends Controller
{
    public function create()
    {
        return View('welcome');
    }

    public function store(Request $request)
    {

         // Validation rules
    $validatedData = $request->validate([


        'son_of' => 'required',
'fname' => 'required',
'lname' => 'required',
        'gender' => 'required',
        'dob' => 'required|date',
        'bloodgroup' => 'required',
        'profile_pic' => 'required|image|mimes:jpeg,png,jpg',
'phone' => 'required',
'email' => 'required',
        'house_no' => 'required',
        'streetaddress' => 'required',
        'city' => 'required',
        'country' => 'required',
        'province' => 'required',
        'district' => 'required',
        'tehsil' => 'required',

        'matric_qualification' => 'required',
        'matric_institute' => 'required',
        'matric_totalMarks' => 'required',
        'matric_obtainMarks' => 'required',
        'matric_certificate_picture' => 'required|image|mimes:jpeg,png,jpg',

        'inter_qualification' => 'required',
        'inter_institute' => 'required',
        'inter_totalMarks' => 'required',
        'inter_obtainMarks' => 'required',
        'inter_certificate_picture' => 'required|image|mimes:jpeg,png,jpg',

        'batch_qualification' => 'required',
        'batch_institute' => 'required',
        'batch_totalMarks' => 'required',
        'batch_obtainMarks' => 'required',
        'batch_certificate_picture' => 'required|image|mimes:jpeg,png,jpg',



        'rec_mem'=> 'required'
    ]);


        try{


            $imageName = time().'.'.$request->profile_pic->extension();
            $request->profile_pic->move(public_path('images'),$imageName);

            if ($request->hasFile('fbr_photo')) {
            $imageNameone = time().'.'.$request->fbr_photo->extension();
            $request->fbr_photo->move(public_path('images'),$imageNameone);
            }else {
                $imageNameone = null;
            }

            if ($request->hasFile('fbr_photo_one')) {
            $imageNametwo = time().'.'.$request->fbr_photo_one->extension();
            $request->fbr_photo_one->move(public_path('images'),$imageNametwo);
            }else {
                $imageNametwo = null;
            }

            if ($request->hasFile('fbr_photo_two')) {
            $imageNamethree = time().'.'.$request->fbr_photo_two->extension();
            $request->fbr_photo_two->move(public_path('images'),$imageNamethree);
            }else {
                $imageNamethree = null;
            }



            $mat = time().'.'.$request->matric_certificate_picture->extension();
            $request->matric_certificate_picture->move(public_path('images'),$mat);

            $inte = time().'.'.$request->inter_certificate_picture->extension();
            $request->inter_certificate_picture->move(public_path('images'),$inte);

            $bati = time().'.'.$request->batch_certificate_picture->extension();
            $request->batch_certificate_picture->move(public_path('images'),$bati);


            if ($request->hasFile('transaction_picture')) {
                $tran = time() . '.' . $request->transaction_picture->extension();
                $request->transaction_picture->move(public_path('images'), $tran);
            } else {
                $tran = null;
            }


            if ($request->hasFile('other_certificate_picture')) {
                $otheri = time() . '.' . $request->other_certificate_picture->extension();
                $request->other_certificate_picture->move(public_path('images'), $otheri);
            } else {
                $otheri = null;
            }

            if ($request->hasFile('llb_certificate_picture')) {
                $llbi = time() . '.' . $request->llb_certificate_picture->extension();
                $request->llb_certificate_picture->move(public_path('images'), $llbi);
            } else {
                $llbi = null;
            }




            $Product = new Product;
             $Product->u_id = $request->u_id;
             $Product->u_name = $request->u_name;
                 $Product->lname = $request->lname;
                 $Product->fname = $request->fname;
                 $Product->son_of = $request->son_of;
                 $Product->gender = $request->gender;
                 $Product->dob = $request->dob;
                 $Product->bloodgroup = $request->bloodgroup;
                 $Product->profile_pic = $imageName;
                 $Product->phone = $request->phone;
                 $Product->email = $request->email;

                 $Product->id_cnic = $request->id_cnic;
                 $Product->bar_license = $request->bar_license;
                 $Product->fbr_photo = $imageNameone;
                 $Product->fbr_photo_one = $imageNametwo;
                 $Product->fbr_photo_two = $imageNamethree;




                 $Product->house_no = $request->house_no;
                 $Product->streetaddress = $request->streetaddress;
                 $Product->town = $request->town;
                 $Product->city = $request->city;
                 $Product->postalcode = $request->postalcode;
                 $Product->country = $request->country;
                 $Product->province = $request->province;
                 $Product->district = $request->district;
                 $Product->tehsil = $request->tehsil;


                 // Matriculation
                 $Product->matric_qualification = $request->matric_qualification;
                 $Product->matric_institute = $request->matric_institute;
                 $Product->matric_totalMarks = $request->matric_totalMarks;
                 $Product->matric_obtainMarks = $request->matric_obtainMarks;
                 // Assuming you're storing the file path of the certificate picture
                 $Product->matric_certificate_picture = $mat;

                 // Intermediate
                 $Product->inter_qualification = $request->inter_qualification;
                 $Product->inter_institute = $request->inter_institute;
                 $Product->inter_totalMarks = $request->inter_totalMarks;
                 $Product->inter_obtainMarks = $request->inter_obtainMarks;
                 // Assuming you're storing the file path of the certificate picture
                 $Product->inter_certificate_picture = $inte;

                 // Batchelor
                 $Product->batch_qualification = $request->batch_qualification;
                 $Product->batch_institute = $request->batch_institute;
                 $Product->batch_totalMarks = $request->batch_totalMarks;
                 $Product->batch_obtainMarks = $request->batch_obtainMarks;
                 // Assuming you're storing the file path of the certificate picture
                 $Product->batch_certificate_picture = $bati;

                 // LLB
                 $Product->llb_qualification = $request->llb_qualification;
                 $Product->llb_institute = $request->llb_institute;
                 $Product->llb_totalMarks = $request->llb_totalMarks;
                 $Product->llb_obtainMarks = $request->llb_obtainMarks;
                 // Assuming you're storing the file path of the certificate picture
                 $Product->llb_certificate_picture = $llbi;

                 // Other Qualification
                 $Product->other_qualification = $request->other_qualification;
                 $Product->other_institute = $request->other_institute;
                 $Product->other_totalMarks = $request->other_totalMarks;
                 $Product->other_obtainMarks = $request->other_obtainMarks;
                 // Assuming you're storing the file path of the certificate picture
                 $Product->other_certificate_picture = $otheri;



                 $Product->acc_no = $request->acc_no;
                 $Product->transaction_picture = $tran;
                 $Product->rec_mem = $request->rec_mem;
                 $Product->gtba_mem = $request->gtba_mem;
                 $Product->rec_city = $request->rec_city;
             $Product->rec_sig = $request->rec_sig;
             $Product->rec_nameone = $request->rec_nameone;
             $Product->rec_nametwo = $request->rec_nametwo;
             $Product->rec_namethree = $request->rec_namethree;
             $Product->rec_addressone = $request->rec_addressone;
             $Product->rec_addresstwo = $request->rec_addresstwo;
             $Product->rec_addressthree = $request->rec_addressthree;

            $Product->save();

            return back()->withSuccess('Details Added Successfully !!');
        }
        catch (\Exception $e) {

            return back()->with('error' , 'Error in Submitting Details');
        }
    }

    public function details($id){
        $product = Product::where('id',$id)->first();
        return View('details',['product' => $product]);
    }


}
