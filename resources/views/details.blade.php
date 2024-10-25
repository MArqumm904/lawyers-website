<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <style>
    body{
        overflow-x: hidden;
    }
     legend {
    font-weight: bold;
    color: green;
  }


  .pdf{
    width: 100vw;
    height: auto !important;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  @media only screen and (max-width: 768px) {
  .fieldsett {
    width: 80vw !important;
  }
}

  .fieldsett span{
    margin: auto 6px;
  }
  </style>
  <body>
  <div class="">
    <h1>Admin Panel</h1>
    <a href="/admin" class="btn btn-dark">Back To List</a>
    </div>

    <div class="pdf">

<h1>User Details</h1>
<fieldset class="fieldsett" style="width: 700px;">
    <legend>Personal Informations</legend>
    <span><strong>Full Name:</strong> {{$product->fn}}</span>
    <span><strong>Last Name:</strong>{{$product->ln}}</span>
    <br><br><br>

    <span><strong>Son Of:</strong> {{$product->son_of}}</span>
    <span><strong>gender:</strong> {{$product->gender}}</span>
    <span><strong>Date:</strong> {{$product->dob}}</span>
    <span><strong>bloodgroup:</strong> {{$product->bloodgroup}}</span>
    <br><br><br>
    <img src="{{ asset('images/' . $product->profile_pic) }}" height="100" width="100">
</fieldset>
<br><br><br>
<fieldset class="fieldsett" style="width: 700px;">
    <legend>Identifications</legend>
    <span><strong>C.N.I.C No.:</strong> {{$product->id_cnic}}</span>
    <span><strong>Bar license:</strong>{{$product->bar_license}}</span>
    <br>
    <span><strong>FBR license Pic: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/' . $product->fbr_photo) }}" height="100" width="100" onerror="this.onerror=null; this.src='{{ asset('images/default.jpg') }}' ">
</strong></span>
<br>
    <span><strong>C.N.I.C pic (front): <img src="{{ asset('images/' . $product->fbr_photo_one) }}" height="100" width="100" onerror="this.onerror=null; this.src='{{ asset('images/default.jpg') }}'" alt="Default Image"></strong></span>
    <br>
    <span><strong>C.N.I.C pic (Back): <img src="{{ asset('images/' . $product->fbr_photo_two) }}" height="100" width="100" onerror="this.onerror=null; this.src='{{ asset('images/default.jpg') }}'" alt="Default Image">
</strong></span>
</fieldset>
<br><br><br>
<fieldset class="fieldsett" style="width: 700px;">
    <legend>Address Information</legend>
    <span><strong>house no:</strong> {{$product->house_no}}</span>
    <span><strong>Street Adderss:</strong> {{$product->streetaddress}}</span>
    <span><strong>town-mohalla:</strong> {{$product->town}}</span>
    <span><strong>home-city:</strong> {{$product->city}}</span>
    <br><br><br>
    <span><strong>postalCodeError:</strong> {{$product->postalcode}}</span>
    <span><strong>home-country:</strong> {{$product->country}}</span>
    <span><strong>home-province:</strong>{{$product->province}}</span>
    <br><br><br>
    <span><strong>home-district:</strong>{{$product->district}}</span>
    <span><strong>home-tehsil:</strong> {{$product->tehsil}}</span>
</fieldset>
<br><br><br>
<fieldset class="fieldsett" style="width: 700px;">
    <legend>Academic Information</legend>
    <h2>Matriculation : </h2>
    <br>

    <span><strong>qualification:</strong> {{$product->matric_qualification}}</span>
    <span><strong>institute:</strong>{{$product->matric_institute}}</span>
    <span><strong>totalMarks:</strong>{{$product->matric_totalMarks}}</span>
    <span><strong>obtainMarks:</strong> {{$product->matric_obtainMarks}}</span>
    <br><br>
    <span><strong>Certificate Pic:</strong></span>
    <img src="{{ asset('images/' . $product->matric_certificate_picture) }}" height="100" width="100">
    <br>
    <h2>Intermediate : </h2>
    <br>

    <span><strong>qualification:</strong>{{$product->inter_qualification}}</span>
    <span><strong>institute:</strong>{{$product->inter_institute}}</span>
    <span><strong>totalMarks:</strong> {{$product->inter_totalMarks}}</span>
    <span><strong>obtainMarks:</strong>{{$product->inter_obtainMarks}}</span>
    <br><br>
    <span><strong>Certificate Pic:</strong></span>
    <img src="{{ asset('images/' . $product->inter_certificate_picture) }}" height="100" width="100">
    <br>
     <h2>Batchelor : </h2>
     <br>

    <span><strong>qualification:</strong>{{$product->batch_qualification}}</span>
    <span><strong>institute:</strong> {{$product->batch_institute}}</span>
    <span><strong>totalMarks:</strong> {{$product->batch_totalMarks}}</span>
    <span><strong>obtainMarks:</strong> {{$product->batch_obtainMarks}}</span>
    <br><br>
    <span><strong>Certificate Pic:</strong></span>
    <img src="{{ asset('images/' . $product->batch_certificate_picture) }}" height="100" width="100">
    <br>
    <p>Note : LLB qualification if user enters otherwise itwill remain empty</p>
    <br><br>
     <h2>LLB : </h2>
     <br>

    <span><strong>qualification:</strong> {{$product->llb_qualification}}</span>
    <span><strong>institute:</strong> {{$product->llb_institute}}</span>
    <span><strong>totalMarks:</strong> {{$product->llb_totalMarks}}</span>
    <span><strong>obtainMarks:</strong> {{$product->llb_obtainMarks}}</span>
    <br><br>
    <span><strong>Certificate Pic:</strong></span>
    <img src="{{ asset('images/' . $product->llb_certificate_picture) }}" height="100" width="100" onerror="this.onerror=null; this.src='{{ asset('images/default.jpg') }}'" alt="Default Image">
    <br>
    <p>Note : Other qualification if user enters otherwise itwill remain empty</p>
    <br>
    <br>
     <h2>Other Qualification : </h2>
     <br>

    <span><strong>qualification:</strong> {{$product->other_qualification}}</span>
    <span><strong>institute:</strong> {{$product->other_institute}}</span>
    <span><strong>totalMarks:</strong>{{$product->other_totalMarks}}</span>
    <span><strong>obtainMarks:</strong> {{$product->other_obtainMarks}}</span>
    <img src="{{ asset('images/' . $product->other_certificate_picture) }}" height="100" width="100" onerror="this.onerror=null; this.src='{{ asset('images/default.jpg') }}'" alt="Default Image">

</fieldset>
<br><br><br>
<fieldset class="fieldsett" style="width: 700px;">
    <legend>Member Information</legend>
    <span><strong>Member Type:</strong> {{$product->rec_mem}}</span>
</fieldset>
<br><br><br>
<fieldset class="fieldsett" style="width: 700px;">
    <legend>Payment Information</legend>
    <span><strong>gtba member:</strong> {{ $product->gtba_mem }}</span>
    <span><strong>account number:</strong> {{ $product->acc_no }}</span>
    <br><br>
    <span><strong>Transaction Pic:</strong></span>
    <img src="{{ asset('images/' . $product->transaction_pic) }}" height="100" width="100" onerror="this.onerror=null; this.src='{{ asset('images/default.jpg') }}'" alt="Default Image">
</fieldset>
<br><br><br>
<fieldset class="fieldsett" style="width: 700px;">
    <legend>Recomendation Information</legend>
    <span><strong>rec_city:</strong> {{ $product->rec_city }}</span>
<span><strong>rec_sig:</strong> {{ $product->rec_sig }}</span>
<span><strong>rec_nameone:</strong> {{ $product->rec_nameone }}</span>
<br><br><br>
<span><strong>rec_nametwo:</strong> {{ $product->rec_nametwo }}</span>
<span><strong>rec_namethree:</strong> {{ $product->rec_namethree }}</span>
<span><strong>rec_addressone:</strong> {{ $product->rec_addressone }}</span>
<br><br><br>
<span><strong>rec_addresstwo:</strong> {{ $product->rec_addresstwo }}</span>
<span><strong>rec_addressthree:</strong> {{ $product->rec_addressthree }}</span>
</fieldset>

</div>


  </body>
</html>
