<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  body{
    overflow-x: hidden;
  }
.logo {
        color: black !important;
        background: linear-gradient(135deg, #057863, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-decoration: none;
        font-weight: bold;
        font-size: 2vw; /* Adjust font size for responsiveness */
        letter-spacing: 0.3vw; /* Adjust letter spacing for responsiveness */
        font-weight: 800;
        margin-top: 1vh; /* Adjust margin top for responsiveness */
    }

    .logo:hover {
        text-decoration: underline;
    }

    .navbarr {
        display: flex;
        background-color: #8edcb2;
        padding: 1vw; /* Adjust padding for responsiveness */
        justify-content: space-between;
        height: 12vh;
        width: 95vw;
        box-shadow: 0.5vw 0.5vw 0.5vw #057863; /* Adjust box shadow for responsiveness */
    }

    .profile {
        margin-top: -3vh; /* Adjust margin top for responsiveness */
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
        width: 100vw;
    }

    .logoo img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        /* Adjust styles for smaller screens (e.g., tablets, smartphones) */
        .logo {
            font-size: 6vw;
            letter-spacing: 0.5vw;
        }
        .navbarr {
            padding: 2vw;
        }
    }

         /* Style for the fieldset */
  fieldset {
    margin: 20px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    border: green 2px solid;
    width: 50%;

  }

  /* Style for the legend */
  legend {
    font-weight: bold;
    color: green;
  }


  .pdf{
    width: 100vw;
    height: auto !important;
    display: flex;
    justify-content: center !important;
    align-items: center;
    flex-direction: column;
    margin-left:-130px;
  }

  .fieldsett span{
    margin: auto 6px;
  }
</style>

</head>
<body>

<div class="navbarr">
    <p class="logo">E-Sahulat</p>
    <div class="profile" style="display:flex; margin-top: 2vh;">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit"><i class="fa-solid fa-right-from-bracket"></i> &nbsp;Logout</button>
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('images/5.jpg') }}" class="imgss" style="border-radius:50%; height:3vw; width:3vw;"> &nbsp;
        <h4 style="margin-top: 1vh;">{{ auth()->user()->username }}</h4>
    </div>
</div>


<br>
<div class="mx-auto " style="width: 85% !important;">

    <center>
      <div class="container" style="margin-top:20px;">
        <div class="logoo">
            <img src="{{ asset('images/esahulat.png') }}" alt="logo image">
        </div>
    </div>
    </center>


  @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <span><b>{{ $message }}</b></span>
    </div>
  @endif
  <!-- Progress Form -->
  <form id="progress-form" class="p-4 progress-form mt-5" method="POST" action="/store" enctype="multipart/form-data">
@csrf
<input type="hidden" name="u_id"  value="{{ auth()->user()->id }}">
<input type="hidden" name="u_name"   value="{{ auth()->user()->username }}">
    <!-- Step Navigation -->
    <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
      <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
        <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 6</span></span>
        Personal<br>Information
      </button>

      <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
        <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 6</span></span>
        Identification
      </button>

      <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
        <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 6</span></span>
        Address
    </button>

    <button id="progress-form__tab-4" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-4" aria-selected="false" tabindex="-1" aria-disabled="true">
        <span class="d-block step" aria-hidden="true">Step 4 <span class="sm:d-none">of 6</span></span>
        Academic <br>Record
      </button>
      <button id="progress-form__tab-5" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-5" aria-selected="false" tabindex="-1" aria-disabled="true">
        <span class="d-block step" aria-hidden="true">Step 5 <span class="sm:d-none">of 6</span></span>
        Recommendation
      </button>
      <button id="progress-form__tab-6" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-6" aria-selected="false" tabindex="-1" aria-disabled="true">
        <span class="d-block step" aria-hidden="true">Step 6 <span class="sm:d-none">of 6</span></span>
        Process
      </button>
      <button id="progress-form__tab-7" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-7" aria-selected="false" tabindex="-1" aria-disabled="true">
        <span class="d-block step" aria-hidden="true">Step 7 <span class="sm:d-none">of 6</span></span>
        Final<br>Confirmation
      </button>

    </div>
    <hr>
    <!-- / End Step Navigation -->



    <!-- Step 1 -->
    <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">



        <h3>Personal Information</h3>
        <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
            <div class="mt-3 sm:mt-0 form__field">
                <label for="fn">
                  First name
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="fn" type="text" name="fname" autocomplete="given-name" required>
              </div>

              <div class="mt-3 sm:mt-0 form__field">
                <label for="ln">
                  Last name
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="ln" type="text" name="lname" autocomplete="family-name" required>
              </div>
              <div class="mt-3 sm:mt-0 form__field">
                <label for="so">
                    S/O, D/O, W/O
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="so" type="text" name="son_of" autocomplete="family-name" required>
              </div>

        </div>

        <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
            <div class="mt-3 sm:mt-0 form__field">
                <label for="Gender">
                  Gender
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <select required id="gender" name="gender">
                    <option selected disabled>--Select Gender--</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
              </div>
              <div class="mt-3 sm:mt-0 form__field">
                <label for="Date">
                    Date of Birth (As per CNIC)
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="Date" type="date" name="dob"  required>


              </div>
              <div class="mt-3 sm:mt-0 form__field">
                <label for="Blood">
                  Blood Group
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <select required id="bloodgroup" name="bloodgroup">
                    <option selected disabled>--Select Blood Group--</option>
                    <option  value="A+">A+
                    </option>
                    <option  value="A-">A-
                    </option>
                    <option  value="B+">B+
                    </option>
                    <option  value="B-">B-
                    </option>
                    <option  value="O+">O+
                    </option>
                    <option  value="O-">O-
                    </option>
                    <option  value="AB+">AB+
                    </option>
                    <option  value="AB-">AB-
                    </option>
                </select>
              </div>
              <div class="sm:mt-0 form__field" style="margin-top:10px !important;">
                <label for="profile_pic">
                    Profile Picture
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="file" type="file" name="profile_pic"  required>


              </div>
        </div>
        <!-- <div class="" style="display: flex; justify-content: center;">
            <h4 >
               Profile Picture (only jpeg,png,jpg are allowed)
                <span data-required="true" aria-hidden="true"></span>
            </h4>
                <div class="img_con" style="position: relative; top: 40px;">
                    <img id="preview" src=""/>
                </div>

                    <div class="custom-file-input">
                        <input type="file" id="fileInput" name="profile_pic" class="file" onchange="previewImage()" required/>
                        <label for="fileInput"><p><i class="fa-solid fa-image"></i>&nbsp; Upload Photo</p></label>
                    </div>


        </div> -->

        <br>
        <h3>Contact Information</h3>
        <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
            <div class="mt-3 sm:mt-0 form__field">
                <label for="em">
                  Email address
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="em" type="email" value="{{ auth()->user()->emailaddress }}" readonly name="email" autocomplete="email" inputmode="email" required>
              </div>
              <div class="mt-3 sm:mt-0 form__field">
                <label for="ph">
                  Active Phone number
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="ph" type="tel" name="phone" value="{{ auth()->user()->p_number }}" autocomplete="tel" readonly inputmode="tel" required>
              </div>
        </div>




        <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" data-action="next">
          Continue
        </button>
      </div>
    </section>
    <!-- / End Step 1 done -->

    <!-- Step 2 start -->
 <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden>
    <h3>Identification</h3>

    <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
            <div class="mt-3 sm:mt-0 form__field">
                <label for="id_cnic">
                  C.N.I.C No:
                  <span data-required="true" aria-hidden="true" id="cnic-error-message"></span>
                </label>
                <input id="id_cnic" type="text" name="id_cnic" oninput="validateCNIC()" required>
              </div>
              <div class="mt-3 sm:mt-0 form__field">
                <label for="bar_license">
                  Bar License
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <select required id="bar_license" name="bar_license">
                    <option selected disabled>--Select Bar License--</option>
                    <option value="Punjab Bar Council License">Punjab Bar Council License</option>
                    <option value="FBR License">FBR License</option>
                </select>
              </div>


              <div class="sm:d-grid sm:grid-col-2 sm:mt-3" style="display:flex;">
              <div id="fbr">
            <div class="mt-3 sm:mt-0 form__field">
                    <label for="fbr_photo">
                        Upload Photo
                        <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="fbr_photo" type="file" name="fbr_photo" autocomplete="fbr_photo" inputmode="fbr_photo">
                </div>
            </div>

            <div id="bar">
                <div class="mt-3 sm:mt-0 form__field">
                    <label for="fbr_photo_one">
                        Upload Photo (Front)
                        <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="fbr_photo_one" type="file" name="fbr_photo_one" autocomplete="fbr_photo_one" inputmode="fbr_photo_one">
                </div>
                <br>
                <div class="mt-3 sm:mt-0 form__field">
                    <label for="fbr_photo_two">
                        Upload Photo (Back)
                        <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="fbr_photo_two" type="file" name="fbr_photo_two" autocomplete="fbr_photo_two" inputmode="fbr_photo_two">
                </div>
            </div>



        </div>

        <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
          Back
        </button>
        <button type="button" data-action="next">
          Continue
        </button>
      </div>
 </section>
    <!-- Step 2 end -->

    <!-- Step 3 -->
    <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden>

      <h3>Home Address</h3>

      <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
        <!-- House No -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="house-no">
            House No
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="house_no" type="text" name="house_no" autocomplete="given-name" required>
        </div>

        <!-- Street Address -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="street-address">
            Street Address
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="street_address" type="text" name="streetaddress" autocomplete="family-name" required>
        </div>
      </div>


      <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
        <!-- Town/Mohalla -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="town-mohalla">
            Town/Mohalla
          </label>
          <input id="town_mohalla" type="text" name="town" autocomplete="given-name">
        </div>

        <!-- City -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="home_city">
            City
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="home_city" type="text" name="city" autocomplete="family-name" required>
        </div>
      </div>

      <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
        <!-- Postal Code -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="post">
            Postal Code
          </label>
          <input id="post" type="number" name="postalcode" oninput="validatePostalCode()">
          <span id="postalCodeError" style="color: red; font-size: 12px;"></span>
        </div>


        <!-- Country -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="home-country">
            Country
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="home_country" required name="country">
            <option selected disabled>--Select Country--</option>
            <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
          </select>
        </div>
      </div>

      <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
        <!-- Province/State -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="home_province">
            Province/State
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="home_province" required name="province">
            <option selected disabled>--Select Province--</option>
            <option
                                                                                                value="Azad Jammu" >Azad Jammu &amp; Kashmir</option>
                                                                                        <option
                                                                                                value="Balochistan" >Balochistan</option>
                                                                                        <option
                                                                                                value="Gilgit Baltistan" >Gilgit Baltistan</option>
                                                                                        <option
                                                                                                value="Islamabad Capital" >Islamabad Capital</option>
                                                                                        <option
                                                                                                value="Khyber Pakhtunkhwa" >Khyber Pakhtunkhwa</option>
                                                                                        <option
                                                                                                value="Punjab" >Punjab</option>
                                                                                        <option
                                                                                                value="Sindh" >Sindh</option>
          </select>
        </div>

        <!-- District -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="home-district">
            District
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="home_district" required name="district">
            <option selected disabled>--Select District--</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Attock">Attock</option>
            <option value="Bahawalnagar">Bahawalnagar</option>
            <option value="Bahawalpur">Bahawalpur</option>
            <option value="Bhakkar">Bhakkar</option>
            <option value="Chakwal">Chakwal</option>
            <option value="Chiniot">Chiniot</option>
            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
            <option value="Faisalabad">Faisalabad</option>
            <option value="Gujranwala">Gujranwala</option>
            <option value="Hafizabad">Hafizabad</option>
            <option value="Islamabad">Islamabad</option>
            <option value="Jhang">Jhang</option>
            <option value="Jhelum">Jhelum</option>
            <option value="Kasur">Kasur</option>
            <option value="Khanewal">Khanewal</option>
            <option value="Khushab">Khushab</option>
            <option value="Lahore">Lahore</option>
            <option value="Layyah">Layyah</option>
            <option value="Lodhran">Lodhran</option>
            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
            <option value="Mianwali">Mianwali</option>
            <option value="Multan">Multan</option>
            <option value="Muzaffargarh">Muzaffargarh</option>
            <option value="Nankana Sahib">Nankana Sahib</option>
            <option value="Narowal">Narowal</option>
            <option value="Okara">Okara</option>
            <option value="Pakpattan">Pakpattan</option>
            <option value="Rahim Yar Khan">Rahim Yar Khan</option>
            <option value="Rajanpur">Rajanpur</option>
            <option value="Rawalpindi">Rawalpindi</option>
            <option value="Sahiwal">Sahiwal</option>
            <option value="Sargodha">Sargodha</option>
            <option value="Sheikhupura">Sheikhupura</option>
            <option value="Sialkot">Sialkot</option>
            <option value="Toba Tek Singh">Toba Tek Singh</option>
            <option value="Vehari">Vehari</option>
          </select>
        </div>

        <!-- Tehsil -->
        <div class="mt-3 sm:mt-0 form__field">
          <label for="home-tehsil">
            Tehsil
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="home_tehsil" required name="tehsil">
            <option selected disabled>--Select Tehsil--</option>
            <option value="Gujranwala - 041">Gujranwala - 041</option>
          </select>
        </div>
      </div>

      <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
          Back
        </button>
        <button type="button" data-action="next">
          Continue
        </button>
      </div>
    </section>

    <!-- / End Step 3 -->



        <!-- Step 4 -->
<section id="progress-form__panel-4" role="tabpanel" aria-labelledby="progress-form__tab-4" tabindex="0" hidden>

        <h1>Academic Record</h1>
                <!-- Matriculation-->
             <div>


                <div class="sm:d-grid sm:grid-col-5 sm:mt-3">
                    <!-- Qualification -->
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="matric_qualification">
                            Qualification
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input id="matric_qualification" type="text" name="matric_qualification" required value="Matric" readonly>
                    </div>



                    <!-- Institute -->
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="matric_institute">
                            Institute
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input id="matric_institute" type="text" name="matric_institute" required>

                    </div>

                     <!-- Total Marks -->
                     <div class="mt-3 sm:mt-0 form__field">
                        <label for="matric_totalMarks">
                            Total Marks
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input id="matric_totalMarks" type="text" name="matric_totalMarks" required>

                    </div>

                    <!-- Obtain Marks -->
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="matric_obtainMarks">
                            Obtain Marks
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input id="matric_obtainMarks" type="text" name="matric_obtainMarks" oninput="validateMarks()" required>
                        <span id="validationMessage" style="color: red; font-size: 12px;"></span>

                    </div>

                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="matric_certificate_picture">
                            Certificate Picture
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="file" id="matric_certificate_picture" name="matric_certificate_picture" class="filee"
                               required />

                    </div>



                </div>
             </div>
             <!-- marks javascript -->
             <script>
                   function validateMarks() {
                    var totalMarks = parseInt(document.getElementById('matric_totalMarks').value);
                    var obtainMarks = parseInt(document.getElementById('matric_obtainMarks').value);

                  // Check if obtainMarks is greater than totalMarks
                 if (obtainMarks > totalMarks) {
                 document.getElementById('validationMessage').innerText = 'Obtain Marks cannot be greater than Total Marks';
                 } else {
                  document.getElementById('validationMessage').innerText = '';
                 }
                 }

            </script>
                <!-- Matriculation END -->
            <br>
            <!-- Intermediate start -->

            <div>


                <div class="sm:d-grid sm:grid-col-5 sm:mt-3">
                    <!-- Qualification -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="inter_qualification" type="text" name="inter_qualification" required value="Intermediate" readonly>
                    </div>



                    <!-- Institute -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="inter_institute" type="text" name="inter_institute" required>

                    </div>

                     <!-- Total Marks -->
                     <div class="mt-3 sm:mt-0 form__field">

                        <input id="inter_totalMarks" type="text" name="inter_totalMarks" required>

                    </div>

                    <!-- Obtain Marks -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="inter_obtainMarks" type="text" name="inter_obtainMarks" oninput="validateMarks2()" required>
                        <span id="validationMessage2" style="color: red; font-size: 12px;"></span>

                    </div>

                    <div class="mt-3 sm:mt-0 form__field">

                        <input type="file" id="inter_certificate_picture" name="inter_certificate_picture" class="filee"
                               required />

                    </div>


                </div>

            </div>
            <script>
              function validateMarks2() {
    var totalMarks = parseInt(document.getElementById('inter_totalMarks').value);
    var obtainMarks = parseInt(document.getElementById('inter_obtainMarks').value);

    // Check if obtainMarks is greater than totalMarks
    if (obtainMarks > totalMarks) {
        document.getElementById('validationMessage2').innerText = 'Obtain Marks cannot be greater than Total Marks';
    } else {
        document.getElementById('validationMessage2').innerText = '';
    }
}
             </script>
            <!-- Intermediate End -->
            <br>
            <!-- batchelor start -->

            <div>


                <div class="sm:d-grid sm:grid-col-5 sm:mt-3">
                    <!-- Qualification -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="batch_qualification" type="text" name="batch_qualification" required value="Batchelor" readonly>
                    </div>



                    <!-- Institute -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="batch_institute" type="text" name="batch_institute" required>

                    </div>

                       <!-- Total Marks -->
                       <div class="mt-3 sm:mt-0 form__field">

                        <input id="batch_totalMarks" type="text" name="batch_totalMarks" required>

                    </div>
                    <!-- Obtain Marks -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="batch_obtainMarks" type="text" name="batch_obtainMarks" oninput="validateMarks3()" required>
                        <span id="validationMessag3" style="color: red; font-size: 12px;"></span>

                    </div>

                    <div class="mt-3 sm:mt-0 form__field">

                        <input type="file" id="batch_certificate_picture" name="batch_certificate_picture" class="filee"
                               required />

                    </div>


                </div>

            </div>
            <script>
              function validateMarks3() {
    var totalMarks = parseInt(document.getElementById('batch_totalMarks').value);
    var obtainMarks = parseInt(document.getElementById('batch_obtainMarks').value);

    // Check if obtainMarks is greater than totalMarks
    if (obtainMarks > totalMarks) {
        document.getElementById('validationMessag3').innerText = 'Obtain Marks cannot be greater than Total Marks';
    } else {
        document.getElementById('validationMessag3').innerText = '';
    }
}
             </script>
            <!-- Batchelor end -->
            <br>

            <!-- LLB start -->
            <div>


                <div class="sm:d-grid sm:grid-col-5 sm:mt-3">
                    <!-- Qualification -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="llb_qualification" type="text" name="llb_qualification"  value="LLB" readonly>
                    </div>
                     <!-- Institute -->
                     <div class="mt-3 sm:mt-0 form__field">

                        <input id="llb_institute" type="text" name="llb_institute" >

                    </div>
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="llb_totalMarks" type="text" name="llb_totalMarks" >

                    </div>

                     <!-- Obtain Marks -->
                     <div class="mt-3 sm:mt-0 form__field">

                        <input id="llb_obtainMarks" type="text" name="llb_obtainMarks" oninput="validateMarks4()" >
                        <span id="validationMessag4" style="color: red; font-size: 12px;"></span>

                    </div>

                    <div class="mt-3 sm:mt-0 form__field">

                        <input type="file" id="llb_certificate_picture" name="llb_certificate_picture" class="filee"
                                />

                    </div>


                </div>
            </div>

            <script>
              function validateMarks4() {
    var totalMarks = parseInt(document.getElementById('llb_totalMarks').value);
    var obtainMarks = parseInt(document.getElementById('llb_obtainMarks').value);

    // Check if obtainMarks is greater than totalMarks
    if (obtainMarks > totalMarks) {
        document.getElementById('validationMessag4').innerText = 'Obtain Marks cannot be greater than Total Marks';
    } else {
        document.getElementById('validationMessag4').innerText = '';
    }
}
             </script>

            <!-- Batechelor end -->
            <br>
            <!-- Other start -->
            <div>

                <div class="sm:d-grid sm:grid-col-5 sm:mt-3">
                    <!-- Qualification -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="other_qualification" value="Other Qualification" type="text" name="other_qualification" readonly>
                    </div>



                    <!-- Institute -->
                    <div class="mt-3 sm:mt-0 form__field">

                        <input id="other_institute" type="text" name="other_institute" >

                    </div>
                     <!-- Total Marks -->
                     <div class="mt-3 sm:mt-0 form__field">

                        <input id="other_totalMarks" type="text" name="other_totalMarks" >

                    </div>
                     <!-- Obtain Marks -->
                     <div class="mt-3 sm:mt-0 form__field">

                        <input id="other_obtainMarks" type="text" oninput="validateMarks5()" name="other_obtainMarks" >
                        <span id="validationMessag5" style="color: red; font-size: 12px;"></span>

                    </div>

                    <div class="mt-3 sm:mt-0 form__field">

                        <input type="file" id="other_certificate_picture" name="other_certificate_picture" class="filee"
                                />

                    </div>


            </div>

                <script>
              function validateMarks5() {
    var totalMarks = parseInt(document.getElementById('other_totalMarks').value);
    var obtainMarks = parseInt(document.getElementById('other_obtainMarks').value);

    // Check if obtainMarks is greater than totalMarks
    if (obtainMarks > totalMarks) {
        document.getElementById('validationMessag5').innerText = 'Obtain Marks cannot be greater than Total Marks';
    } else {
        document.getElementById('validationMessag5').innerText = '';
    }
}
             </script>

         </div>


          <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
            <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
              Back
            </button>
            <button type="button" data-action="next">
              Continue
            </button>
          </div>
        </section>

        <section id="progress-form__panel-5" role="tabpanel" aria-labelledby="progress-form__tab-5" tabindex="0" hidden>
           <div class="mt-3 sm:mt-0 form__field">
              <label for="rec_mem">
                Select Member
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <select id="rec_mem" name="rec_mem" required onchange="togglememrec()">
                <option selected disabled>--Select--</option>
                <option value="Existing">Existing Member</option>
                <option value="Non-Existing">New Member</option>
              </select>
            </div>



            <div class="rec" id="rec" style="display: none;">
                  <center>
             <h1>Recommendation</h1>
              </center>

         <div class="sm:d-grid sm:grid-col-12 sm:mt-3">
          <!-- Select Payment Method -->
          <div class="mt-3 sm:mt-0 form__field">
            <label for="PaymentMethod">
              The General Secretary,<br>
              Gujrat Tax Bar Association,<br>
              Gujrat.
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <center>

              <h3>Subject: &nbsp;&nbsp; <b><u>APPLICATION FOR MEMBERSHIP BAR</u></b></h3>
            </center>
          </div>


          <div>
            <p>|! wish to become Member of the Gujrat Tax Bar Association, Gujrat and declare
              that | shall abide by the Rules and Regulations of the Association. | am duly qualified

              according to Section 223 of the Income Tax Ordinance, 2001. My Bio-data is enclosed
              herewith. <br>

              Yours faithfully,</p>
          </div>



         </div>

         <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
          <div class="mt-3 sm:mt-0 form__field">
            <label for="rec_city">
              CitY
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="rec_city" type="text" name="rec_city" >

          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="mt-3 sm:mt-0 form__field">
            <label for="rec_sig">
              Signature
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="rec_sig" type="text" name="rec_sig" >

          </div>
         </div>
         <br>

         <div id="rec1" >
       <b> 1) When applicant is associated with existing members: -</b> </h4>
        <div class="sm:d-grid sm:grid-col-4 sm:mt-3">
          <div class="mt-6 sm:mt-0 form__field">
            <label for="rec_nameone">
              Name of Principal/Main member.
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="rec_nameone" type="text" name="rec_nameone" >
          </div>
          <div class="mt-6 sm:mt-0 form__field">
            <label for="rec_addressone">
              Law Form
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="rec_addressone" type="text" name="rec_addressone" >
          </div>
        </div>



        <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
          <div class="mt-3 sm:mt-0 form__field">
            <h5>| know him personally,</h5>

          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="mt-3 sm:mt-0 form__field">
            <label for="Signature">
              Signature
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="Signature" type="text" name="signature" >

          </div>
        </div>


       </div>

        <br>
        <hr>
        <br>

        <div id="rec2" >
        <b> 2) In other cases recommendations by two members:-</b> </h4>
        <div class="sm:d-grid sm:grid-col-4 sm:mt-3">
          <div class="mt-6 sm:mt-0 form__field">
            <label for="rec_nametwo">
              a) Name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <select name="rec_nametwo" id="rec_nametwo" >
							<option value="1" selected disabled>Choose GTBA member</option>
							<option value="GTBA 1 - CH MUHAMMAD ASLAM SAHI">GTBA 1 - CH MUHAMMAD ASLAM SAHI</option>
							<option value="GTBA 2 - ISHFAQ AHMAD RAZI">GTBA 2 - ISHFAQ AHMAD RAZI</option>
							<option value="GTBA 3 - SH. MUHAMMAD HABIB ULLAH">GTBA 3 - SH. MUHAMMAD HABIB ULLAH</option>
							<option value="GTBA 4 - AKRAM ABID BHATTI">GTBA 4 - AKRAM ABID BHATTI</option>
							<option value="GTBA 5 - SH.KHALID ASLAM ">GTBA 5 - SH.KHALID ASLAM </option>
							<option value="GTBA 6 - SAEED ANWAR SIDDIQUI ">GTBA 6 - SAEED ANWAR SIDDIQUI </option>
							<option value="GTBA 7 - KHURRAM TAUFIQ MALK">GTBA 7 - KHURRAM TAUFIQ MALK</option>
							<option value="GTBA 8 - SYED MEHMOOD ABID">GTBA 8 - SYED MEHMOOD ABID</option>
							<option value="GTBA 9 - NADEEM AKHTAR SHAHZAD">GTBA 9 - NADEEM AKHTAR SHAHZAD</option>
							<option value="GTBA 10 CH.AZHAR FAROOQ WARRAICH">GTBA 10 - CH.AZHAR FAROOQ WARRAICH</option>
							<option value="GTBA 11 - Mian Mehroz Ashraf">GTBA 11 - Mian Mehroz Ashraf</option>
							<option value="GTBA 12 - MALIK TAFHEEM AZMAT">GTBA 12 - MALIK TAFHEEM AZMAT</option>
							<option value="GTBA 13 - MUHAMMMAD MUJAHID BUTT">GTBA 13 - MUHAMMMAD MUJAHID BUTT</option>
							<option value="GTBA 14 - TABRAIZ AHMAD QURESHI">GTBA 14 - TABRAIZ AHMAD QURESHI</option>
							<option value="GTBA 15 - SYED SHAHBAZ AKHTAR">GTBA 15 - SYED SHAHBAZ AKHTAR</option>
							<option value="GTBA 16 - MUKHTAR AHMAD WARRAICH">GTBA 16 - MUKHTAR AHMAD WARRAICH</option>
							<option value="GTBA 17 - SYED TASEER ALI SHAH">GTBA 17 - SYED TASEER ALI SHAH</option>
							<option value="GTBA 18 - SAJJAD AHMED QURESHI">GTBA 18 - SAJJAD AHMED QURESHI</option>
							<option value="GTBA 19 - MISBAH UD DIN FAROOQ E AZAM">GTBA 19 - MISBAH UD DIN FAROOQ E AZAM</option>
							<option value="GTBA 20 - SYED USMAN HAIDER">GTBA 20 - SYED USMAN HAIDER</option>
							<option value="GTBA 21 - SYED MUBASHAR ABBAS">GTBA 21 - SYED MUBASHAR ABBAS</option>
							<option value="GTBA 22 - MUHAMMAD KHALIL CHOUDHARY">GTBA 22 - MUHAMMAD KHALIL CHOUDHARY</option>
							<option value="GTBA 23 - SIKANDER ISHFAQ">GTBA 23 - SIKANDER ISHFAQ</option>
							<option value="GTBA 24 - MUHAMMAD NASEER BUTT">GTBA 24 - MUHAMMAD NASEER BUTT</option>
							<option value="GTBA 25 - UMER ASLAM SAHI">GTBA 25 - UMER ASLAM SAHI</option>
							<option value="GTBA 26 - TARIQ JAVAID">GTBA 26 - TARIQ JAVAID</option>
							<option value="GTBA 27 - TAHIR HASSAN">GTBA 27 - TAHIR HASSAN</option>
							<option value="GTBA 28 - USMAN HABIB">GTBA 28 - USMAN HABIB</option>
							<option value="GTBA 29 - Adil Muhammad">GTBA 29 - Adil Muhammad</option>
							<option value="GTBA 30 - AQEEL ABBAS">GTBA 30 - AQEEL ABBAS</option>
							<option value="GTBA 31 -  MUHAMMAD IMRAN ALI ">GTBA 31 -  MUHAMMAD IMRAN ALI </option>
							<option value="GTBA 32 - SHEIKH AWAIS AMJAD">GTBA 32 - SHEIKH AWAIS AMJAD</option>
							<option value="GTBA 33 - MIAN SHEHZAD AHMED MIR">GTBA 33 - MIAN SHEHZAD AHMED MIR</option>
							<option value="GTBA 34 - MEHVISH SADIQ">GTBA 34 - MEHVISH SADIQ</option>
							<option value="GTBA 35 - MUBARAK ULLAH">GTBA 35 - MUBARAK ULLAH</option>
							<option value="GTBA 36 - MUDASSER ABBAS">GTBA 36 - MUDASSER ABBAS</option>
							<option value="GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG">GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG</option>
							<option value="GTBA 38 - SYED MUAZZAM ALI">GTBA 38 - SYED MUAZZAM ALI</option>
							<option value="GTBA 39 - UMAR NAEEM">GTBA 39 - UMAR NAEEM</option>
							<option value="GTBA 40 - SALMAN RAZA">GTBA 40 - SALMAN RAZA</option>
							<option value="GTBA 41 - MISS MARYAM GHAZANFAR">GTBA 41 - MISS MARYAM GHAZANFAR</option>
							<option value="GTBA 42 - ASIM ASHRAF">GTBA 42 - ASIM ASHRAF</option>
							<option value="GTBA 43 - SH. ABDUL QUDDUS ABID">GTBA 43 - SH. ABDUL QUDDUS ABID</option>
							<option value="GTBA 44 - ADEEL ABBAS">GTBA 44 - ADEEL ABBAS</option>
							<option value="GTBA 45 - MUHAMMAD ALI">GTBA 45 - MUHAMMAD ALI</option>
							<option value="GTBA 46 - IMTIAZ AHMAD">GTBA 46 - IMTIAZ AHMAD</option>
							<option value="GTBA 47 - QAISAR NASEER">GTBA 47 - QAISAR NASEER</option>
							<option value="GTBA 48 - MUBASHAR HUSSAIN KAZMI">GTBA 48 - MUBASHAR HUSSAIN KAZMI</option>
							<option value="GTBA 49 - AHEMD TAUQIR">GTBA 49 - AHEMD TAUQIR</option>
							<option value="GTBA 50 - AHMED TOUQEER">GTBA 50 - AHMED TOUQEER</option>
							<option value="GTBA 51 - QASIM SHAHBAZ">GTBA 51 - QASIM SHAHBAZ</option>
							<option value="GTBA 52 -  BILAL AHMED CHANDALA">GTBA 52 -  BILAL AHMED CHANDALA</option>
							<option value="GTBA 53 - ZAHEER AHMAD">GTBA 53 - ZAHEER AHMAD</option>
							<option value="GTBA 54 - MUHAMMAD YOUSAF">GTBA 54 - MUHAMMAD YOUSAF</option>
							<option value="GTBA 55 - ABDUL QUDOOS">GTBA 55 - ABDUL QUDOOS</option>
							<option value="GTBA 56 - WAQAS AHMED">GTBA 56 - WAQAS AHMED</option>
							<option value="GTBA 57 - MUHAMMAD BASHIR">GTBA 57 - MUHAMMAD BASHIR</option>
							<option value="GTBA 58 - ZAIN NAWAZ">GTBA 58 - ZAIN NAWAZ</option>
							<option value="GTBA 59 - MUHAMMAD TOUSEEF">GTBA 59 - MUHAMMAD TOUSEEF</option>
							<option value="GTBA 60 - ALI ANWAAR SIDDIQUI">GTBA 60 - ALI ANWAAR SIDDIQUI</option>
							<option value="GTBA 61 - MIRZA TAIMOOR ALI">GTBA 61 - MIRZA TAIMOOR ALI</option>
							<option value="GTBA 62 - SHEIKH KHURAM SHAFIQUE">GTBA 62 - SHEIKH KHURAM SHAFIQUE</option>


						</select>

            <label for="rec_addresstwo">
              a) Law Form
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="rec_addresstwo" type="text" name="rec_addresstwo" >
            <br>
            <label for="a_signature">
              a) Signature
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="a_signature" type="text" name="a_signature" >
            <br>
          </div>

        </div>



        <br><br>




        <div class="sm:d-grid sm:grid-col-4 sm:mt-3">
          <div class="mt-6 sm:mt-0 form__field">
            <label for="rec_namethree">
              b) Name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <select name="rec_namethree" id="rec_namethree" >
							<option value="1" selected disabled>Choose GTBA member</option>
							<option value="GTBA 1 - CH MUHAMMAD ASLAM SAHI">GTBA 1 - CH MUHAMMAD ASLAM SAHI</option>
							<option value="GTBA 2 - ISHFAQ AHMAD RAZI">GTBA 2 - ISHFAQ AHMAD RAZI</option>
							<option value="GTBA 3 - SH. MUHAMMAD HABIB ULLAH">GTBA 3 - SH. MUHAMMAD HABIB ULLAH</option>
							<option value="GTBA 4 - AKRAM ABID BHATTI">GTBA 4 - AKRAM ABID BHATTI</option>
							<option value="GTBA 5 - SH.KHALID ASLAM ">GTBA 5 - SH.KHALID ASLAM </option>
							<option value="GTBA 6 - SAEED ANWAR SIDDIQUI ">GTBA 6 - SAEED ANWAR SIDDIQUI </option>
							<option value="GTBA 7 - KHURRAM TAUFIQ MALK">GTBA 7 - KHURRAM TAUFIQ MALK</option>
							<option value="GTBA 8 - SYED MEHMOOD ABID">GTBA 8 - SYED MEHMOOD ABID</option>
							<option value="GTBA 9 - NADEEM AKHTAR SHAHZAD">GTBA 9 - NADEEM AKHTAR SHAHZAD</option>
							<option value="GTBA 10 CH.AZHAR FAROOQ WARRAICH">GTBA 10 - CH.AZHAR FAROOQ WARRAICH</option>
							<option value="GTBA 11 - Mian Mehroz Ashraf">GTBA 11 - Mian Mehroz Ashraf</option>
							<option value="GTBA 12 - MALIK TAFHEEM AZMAT">GTBA 12 - MALIK TAFHEEM AZMAT</option>
							<option value="GTBA 13 - MUHAMMMAD MUJAHID BUTT">GTBA 13 - MUHAMMMAD MUJAHID BUTT</option>
							<option value="GTBA 14 - TABRAIZ AHMAD QURESHI">GTBA 14 - TABRAIZ AHMAD QURESHI</option>
							<option value="GTBA 15 - SYED SHAHBAZ AKHTAR">GTBA 15 - SYED SHAHBAZ AKHTAR</option>
							<option value="GTBA 16 - MUKHTAR AHMAD WARRAICH">GTBA 16 - MUKHTAR AHMAD WARRAICH</option>
							<option value="GTBA 17 - SYED TASEER ALI SHAH">GTBA 17 - SYED TASEER ALI SHAH</option>
							<option value="GTBA 18 - SAJJAD AHMED QURESHI">GTBA 18 - SAJJAD AHMED QURESHI</option>
							<option value="GTBA 19 - MISBAH UD DIN FAROOQ E AZAM">GTBA 19 - MISBAH UD DIN FAROOQ E AZAM</option>
							<option value="GTBA 20 - SYED USMAN HAIDER">GTBA 20 - SYED USMAN HAIDER</option>
							<option value="GTBA 21 - SYED MUBASHAR ABBAS">GTBA 21 - SYED MUBASHAR ABBAS</option>
							<option value="GTBA 22 - MUHAMMAD KHALIL CHOUDHARY">GTBA 22 - MUHAMMAD KHALIL CHOUDHARY</option>
							<option value="GTBA 23 - SIKANDER ISHFAQ">GTBA 23 - SIKANDER ISHFAQ</option>
							<option value="GTBA 24 - MUHAMMAD NASEER BUTT">GTBA 24 - MUHAMMAD NASEER BUTT</option>
							<option value="GTBA 25 - UMER ASLAM SAHI">GTBA 25 - UMER ASLAM SAHI</option>
							<option value="GTBA 26 - TARIQ JAVAID">GTBA 26 - TARIQ JAVAID</option>
							<option value="GTBA 27 - TAHIR HASSAN">GTBA 27 - TAHIR HASSAN</option>
							<option value="GTBA 28 - USMAN HABIB">GTBA 28 - USMAN HABIB</option>
							<option value="GTBA 29 - Adil Muhammad">GTBA 29 - Adil Muhammad</option>
							<option value="GTBA 30 - AQEEL ABBAS">GTBA 30 - AQEEL ABBAS</option>
							<option value="GTBA 31 -  MUHAMMAD IMRAN ALI ">GTBA 31 -  MUHAMMAD IMRAN ALI </option>
							<option value="GTBA 32 - SHEIKH AWAIS AMJAD">GTBA 32 - SHEIKH AWAIS AMJAD</option>
							<option value="GTBA 33 - MIAN SHEHZAD AHMED MIR">GTBA 33 - MIAN SHEHZAD AHMED MIR</option>
							<option value="GTBA 34 - MEHVISH SADIQ">GTBA 34 - MEHVISH SADIQ</option>
							<option value="GTBA 35 - MUBARAK ULLAH">GTBA 35 - MUBARAK ULLAH</option>
							<option value="GTBA 36 - MUDASSER ABBAS">GTBA 36 - MUDASSER ABBAS</option>
							<option value="GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG">GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG</option>
							<option value="GTBA 38 - SYED MUAZZAM ALI">GTBA 38 - SYED MUAZZAM ALI</option>
							<option value="GTBA 39 - UMAR NAEEM">GTBA 39 - UMAR NAEEM</option>
							<option value="GTBA 40 - SALMAN RAZA">GTBA 40 - SALMAN RAZA</option>
							<option value="GTBA 41 - MISS MARYAM GHAZANFAR">GTBA 41 - MISS MARYAM GHAZANFAR</option>
							<option value="GTBA 42 - ASIM ASHRAF">GTBA 42 - ASIM ASHRAF</option>
							<option value="GTBA 43 - SH. ABDUL QUDDUS ABID">GTBA 43 - SH. ABDUL QUDDUS ABID</option>
							<option value="GTBA 44 - ADEEL ABBAS">GTBA 44 - ADEEL ABBAS</option>
							<option value="GTBA 45 - MUHAMMAD ALI">GTBA 45 - MUHAMMAD ALI</option>
							<option value="GTBA 46 - IMTIAZ AHMAD">GTBA 46 - IMTIAZ AHMAD</option>
							<option value="GTBA 47 - QAISAR NASEER">GTBA 47 - QAISAR NASEER</option>
							<option value="GTBA 48 - MUBASHAR HUSSAIN KAZMI">GTBA 48 - MUBASHAR HUSSAIN KAZMI</option>
							<option value="GTBA 49 - AHEMD TAUQIR">GTBA 49 - AHEMD TAUQIR</option>
							<option value="GTBA 50 - AHMED TOUQEER">GTBA 50 - AHMED TOUQEER</option>
							<option value="GTBA 51 - QASIM SHAHBAZ">GTBA 51 - QASIM SHAHBAZ</option>
							<option value="GTBA 52 -  BILAL AHMED CHANDALA">GTBA 52 -  BILAL AHMED CHANDALA</option>
							<option value="GTBA 53 - ZAHEER AHMAD">GTBA 53 - ZAHEER AHMAD</option>
							<option value="GTBA 54 - MUHAMMAD YOUSAF">GTBA 54 - MUHAMMAD YOUSAF</option>
							<option value="GTBA 55 - ABDUL QUDOOS">GTBA 55 - ABDUL QUDOOS</option>
							<option value="GTBA 56 - WAQAS AHMED">GTBA 56 - WAQAS AHMED</option>
							<option value="GTBA 57 - MUHAMMAD BASHIR">GTBA 57 - MUHAMMAD BASHIR</option>
							<option value="GTBA 58 - ZAIN NAWAZ">GTBA 58 - ZAIN NAWAZ</option>
							<option value="GTBA 59 - MUHAMMAD TOUSEEF">GTBA 59 - MUHAMMAD TOUSEEF</option>
							<option value="GTBA 60 - ALI ANWAAR SIDDIQUI">GTBA 60 - ALI ANWAAR SIDDIQUI</option>
							<option value="GTBA 61 - MIRZA TAIMOOR ALI">GTBA 61 - MIRZA TAIMOOR ALI</option>
							<option value="GTBA 62 - SHEIKH KHURAM SHAFIQUE">GTBA 62 - SHEIKH KHURAM SHAFIQUE</option>


						</select>

            <label for="rec_addressthree">
              b) Law Form
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="rec_addressthree" type="text" name="rec_addressthree" >

            <br>
            <label for="b_signature">
              b) Signature
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="b_signature" type="text" name="b_signature" >
            <br>
          </div>

        </div>
        </div>








      </div>

      <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
          Back
        </button>
        <button type="button" data-action="next">
          Continue
        </button>
      </div>
    </section>

          <!-- / End Step 4 -->
     <!-- Step 5 -->
     <section id="progress-form__panel-6" role="tabpanel" aria-labelledby="progress-form__tab-6" tabindex="0" hidden>
    <div class="mt-3 sm:mt-0 form__field">
        <label for="rec_pay">
            Select Member
            <span data-required="true" aria-hidden="true"></span>
        </label>
        <select id="rec_pay" name="rec_pay" required onchange="togglemempay()">
            <option selected disabled>--Select--</option>
            <option value="Existing">Existing Member</option>
            <option value="Non-Existing">New Member</option>
        </select>
    </div>

    <div class="recooo" id="recooo" style="display: none;">
               <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
                  <div class="mt-3 sm:mt-0 form__field">
                  <label for="gtba_mem">
                  Select GTBA Number
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                        <select name="gtba_mem" id="gtba_mem" >
							<option value="1" selected disabled>Choose GTBA member</option>
							<option value="GTBA 1 - CH MUHAMMAD ASLAM SAHI">GTBA 1 - CH MUHAMMAD ASLAM SAHI</option>
							<option value="GTBA 2 - ISHFAQ AHMAD RAZI">GTBA 2 - ISHFAQ AHMAD RAZI</option>
							<option value="GTBA 3 - SH. MUHAMMAD HABIB ULLAH">GTBA 3 - SH. MUHAMMAD HABIB ULLAH</option>
							<option value="GTBA 4 - AKRAM ABID BHATTI">GTBA 4 - AKRAM ABID BHATTI</option>
							<option value="GTBA 5 - SH.KHALID ASLAM ">GTBA 5 - SH.KHALID ASLAM </option>
							<option value="GTBA 6 - SAEED ANWAR SIDDIQUI ">GTBA 6 - SAEED ANWAR SIDDIQUI </option>
							<option value="GTBA 7 - KHURRAM TAUFIQ MALK">GTBA 7 - KHURRAM TAUFIQ MALK</option>
							<option value="GTBA 8 - SYED MEHMOOD ABID">GTBA 8 - SYED MEHMOOD ABID</option>
							<option value="GTBA 9 - NADEEM AKHTAR SHAHZAD">GTBA 9 - NADEEM AKHTAR SHAHZAD</option>
							<option value="GTBA 10 CH.AZHAR FAROOQ WARRAICH">GTBA 10 - CH.AZHAR FAROOQ WARRAICH</option>
							<option value="GTBA 11 - Mian Mehroz Ashraf">GTBA 11 - Mian Mehroz Ashraf</option>
							<option value="GTBA 12 - MALIK TAFHEEM AZMAT">GTBA 12 - MALIK TAFHEEM AZMAT</option>
							<option value="GTBA 13 - MUHAMMMAD MUJAHID BUTT">GTBA 13 - MUHAMMMAD MUJAHID BUTT</option>
							<option value="GTBA 14 - TABRAIZ AHMAD QURESHI">GTBA 14 - TABRAIZ AHMAD QURESHI</option>
							<option value="GTBA 15 - SYED SHAHBAZ AKHTAR">GTBA 15 - SYED SHAHBAZ AKHTAR</option>
							<option value="GTBA 16 - MUKHTAR AHMAD WARRAICH">GTBA 16 - MUKHTAR AHMAD WARRAICH</option>
							<option value="GTBA 17 - SYED TASEER ALI SHAH">GTBA 17 - SYED TASEER ALI SHAH</option>
							<option value="GTBA 18 - SAJJAD AHMED QURESHI">GTBA 18 - SAJJAD AHMED QURESHI</option>
							<option value="GTBA 19 - MISBAH UD DIN FAROOQ E AZAM">GTBA 19 - MISBAH UD DIN FAROOQ E AZAM</option>
							<option value="GTBA 20 - SYED USMAN HAIDER">GTBA 20 - SYED USMAN HAIDER</option>
							<option value="GTBA 21 - SYED MUBASHAR ABBAS">GTBA 21 - SYED MUBASHAR ABBAS</option>
							<option value="GTBA 22 - MUHAMMAD KHALIL CHOUDHARY">GTBA 22 - MUHAMMAD KHALIL CHOUDHARY</option>
							<option value="GTBA 23 - SIKANDER ISHFAQ">GTBA 23 - SIKANDER ISHFAQ</option>
							<option value="GTBA 24 - MUHAMMAD NASEER BUTT">GTBA 24 - MUHAMMAD NASEER BUTT</option>
							<option value="GTBA 25 - UMER ASLAM SAHI">GTBA 25 - UMER ASLAM SAHI</option>
							<option value="GTBA 26 - TARIQ JAVAID">GTBA 26 - TARIQ JAVAID</option>
							<option value="GTBA 27 - TAHIR HASSAN">GTBA 27 - TAHIR HASSAN</option>
							<option value="GTBA 28 - USMAN HABIB">GTBA 28 - USMAN HABIB</option>
							<option value="GTBA 29 - Adil Muhammad">GTBA 29 - Adil Muhammad</option>
							<option value="GTBA 30 - AQEEL ABBAS">GTBA 30 - AQEEL ABBAS</option>
							<option value="GTBA 31 -  MUHAMMAD IMRAN ALI ">GTBA 31 -  MUHAMMAD IMRAN ALI </option>
							<option value="GTBA 32 - SHEIKH AWAIS AMJAD">GTBA 32 - SHEIKH AWAIS AMJAD</option>
							<option value="GTBA 33 - MIAN SHEHZAD AHMED MIR">GTBA 33 - MIAN SHEHZAD AHMED MIR</option>
							<option value="GTBA 34 - MEHVISH SADIQ">GTBA 34 - MEHVISH SADIQ</option>
							<option value="GTBA 35 - MUBARAK ULLAH">GTBA 35 - MUBARAK ULLAH</option>
							<option value="GTBA 36 - MUDASSER ABBAS">GTBA 36 - MUDASSER ABBAS</option>
							<option value="GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG">GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG</option>
							<option value="GTBA 38 - SYED MUAZZAM ALI">GTBA 38 - SYED MUAZZAM ALI</option>
							<option value="GTBA 39 - UMAR NAEEM">GTBA 39 - UMAR NAEEM</option>
							<option value="GTBA 40 - SALMAN RAZA">GTBA 40 - SALMAN RAZA</option>
							<option value="GTBA 41 - MISS MARYAM GHAZANFAR">GTBA 41 - MISS MARYAM GHAZANFAR</option>
							<option value="GTBA 42 - ASIM ASHRAF">GTBA 42 - ASIM ASHRAF</option>
							<option value="GTBA 43 - SH. ABDUL QUDDUS ABID">GTBA 43 - SH. ABDUL QUDDUS ABID</option>
							<option value="GTBA 44 - ADEEL ABBAS">GTBA 44 - ADEEL ABBAS</option>
							<option value="GTBA 45 - MUHAMMAD ALI">GTBA 45 - MUHAMMAD ALI</option>
							<option value="GTBA 46 - IMTIAZ AHMAD">GTBA 46 - IMTIAZ AHMAD</option>
							<option value="GTBA 47 - QAISAR NASEER">GTBA 47 - QAISAR NASEER</option>
							<option value="GTBA 48 - MUBASHAR HUSSAIN KAZMI">GTBA 48 - MUBASHAR HUSSAIN KAZMI</option>
							<option value="GTBA 49 - AHEMD TAUQIR">GTBA 49 - AHEMD TAUQIR</option>
							<option value="GTBA 50 - AHMED TOUQEER">GTBA 50 - AHMED TOUQEER</option>
							<option value="GTBA 51 - QASIM SHAHBAZ">GTBA 51 - QASIM SHAHBAZ</option>
							<option value="GTBA 52 -  BILAL AHMED CHANDALA">GTBA 52 -  BILAL AHMED CHANDALA</option>
							<option value="GTBA 53 - ZAHEER AHMAD">GTBA 53 - ZAHEER AHMAD</option>
							<option value="GTBA 54 - MUHAMMAD YOUSAF">GTBA 54 - MUHAMMAD YOUSAF</option>
							<option value="GTBA 55 - ABDUL QUDOOS">GTBA 55 - ABDUL QUDOOS</option>
							<option value="GTBA 56 - WAQAS AHMED">GTBA 56 - WAQAS AHMED</option>
							<option value="GTBA 57 - MUHAMMAD BASHIR">GTBA 57 - MUHAMMAD BASHIR</option>
							<option value="GTBA 58 - ZAIN NAWAZ">GTBA 58 - ZAIN NAWAZ</option>
							<option value="GTBA 59 - MUHAMMAD TOUSEEF">GTBA 59 - MUHAMMAD TOUSEEF</option>
							<option value="GTBA 60 - ALI ANWAAR SIDDIQUI">GTBA 60 - ALI ANWAAR SIDDIQUI</option>
							<option value="GTBA 61 - MIRZA TAIMOOR ALI">GTBA 61 - MIRZA TAIMOOR ALI</option>
							<option value="GTBA 62 - SHEIKH KHURAM SHAFIQUE">GTBA 62 - SHEIKH KHURAM SHAFIQUE</option>


						</select>
                  </div>
               </div>
            </div>

    <div class="payment" id="payment" style="display:none;">
        <h3>Payment Info</h3>

        <div class="sm:d-grid sm:grid-col-2 sm:mt-3">

            <!-- Credit Card Input -->
            <div class="mt-3 sm:mt-0 form__field" id="creditCardInput">
                <label for="creditCardNumber">
                    Account Number
                    <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="creditCardNumber" type="text" name="acc_no" class="acc_no1" oninput="validateCreditCard()">
                <span id="creditCardError" style="color: red; font-size: 12px;"></span>
            </div>

            <div class="mt-3 sm:mt-0 form__field">
                        <label for="transaction_picture">
                            Transaction Picture
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="file" id="transaction_picture" name="transaction_picture" c
                                />

                    </div>

        </div>

    </div>
    <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
            <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                Back
            </button>
            <button type="button" data-action="next" id="submitBtn">
                Continue
            </button>
        </div>
</section>


     <!-- Step 6 done -->
     <section id="progress-form__panel-7" role="tabpanel" aria-labelledby="progress-form__tab-7" tabindex="0" hidden>
        <h3>Preview Your InFormation</h3>
        <h4><span styel="color:red;">Note : Firstly check your information before saving pdf </span></h4>
        <button type="button" onclick="saveAsPDF()">Save PDF</button>
        <div class="pdf">

        </div>
        <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
          <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
            Back
          </button>
          <button type="submit">
            Submit
          </button>
        </div>
      </section>
      <!-- / End Step 6 -->



    <!-- Thank You -->

    <!-- / End Thank You -->

  </form>
  <!-- / End Progress Form -->
<br><br>
</div>


<script>






document.getElementById("submitBtn").addEventListener("click", function() {
            // Get form values
            var fn = document.getElementById("fn").value;
            var ln = document.getElementById("ln").value;
            var so = document.getElementById("so").value;
            var gender = document.getElementById("gender").value;
            var Date = document.getElementById("Date").value;
            var bloodgroup = document.getElementById("bloodgroup").value;
            var fileInput = document.getElementById("file").files[0];
            var em = document.getElementById("em").value;
            var ph = document.getElementById("ph").value;

            // identifications values
            var id_cnic = document.getElementById("id_cnic").value;
            var bar_license = document.getElementById("bar_license").value;
            var fbr_photo = document.getElementById("fbr_photo").files[0];
            var fbr_photo_one = document.getElementById("fbr_photo_one").files[0];
            var fbr_photo_two = document.getElementById("fbr_photo_two").files[0];




             // Get the selected file
            var house_no = document.getElementById("house_no").value;
            var street_address = document.getElementById("street_address").value;
            var town_mohalla = document.getElementById("town_mohalla").value;
            var home_city = document.getElementById("home_city").value;
            var post = document.getElementById("post").value;
            var home_country = document.getElementById("home_country").value;
            var home_province = document.getElementById("home_province").value;
            var home_district = document.getElementById("home_district").value;
            var home_tehsil = document.getElementById("home_tehsil").value;

            //academic record
            var matric_qualification = document.getElementById("matric_qualification").value;
            var matric_institute = document.getElementById("matric_institute").value;
            var matric_totalMarks = document.getElementById("matric_totalMarks").value;
            var matric_obtainMarks = document.getElementById("matric_obtainMarks").value;
            var matric_certificate_picture = document.getElementById("matric_certificate_picture").files[0];

            var inter_qualification = document.getElementById("inter_qualification").value;
            var inter_institute = document.getElementById("inter_institute").value;
            var inter_totalMarks = document.getElementById("inter_totalMarks").value;
            var inter_obtainMarks = document.getElementById("inter_obtainMarks").value;
            var inter_certificate_picture = document.getElementById("inter_certificate_picture").files[0];

            var batch_qualification = document.getElementById("batch_qualification").value;
            var batch_institute = document.getElementById("batch_institute").value;
            var batch_totalMarks = document.getElementById("batch_totalMarks").value;
            var batch_obtainMarks = document.getElementById("batch_obtainMarks").value;
            var batch_certificate_picture = document.getElementById("batch_certificate_picture").files[0];

           var rec_mem = document.getElementById("rec_mem").value;

            // Display form values
            var htmlContent = `
            <h1>Form Data</h1>
        <fieldset class="fieldsett">
            <legend>Personal Information</legend>
            <span><strong>Full Name:</strong> ${fn}</span>
            <span><strong>Last Name:</strong> ${ln}</span>
            <br><br><br>

            <span><strong>Son Of:</strong> ${so}</span>
            <span><strong>gender:</strong> ${gender}</span>
            <span><strong>Date:</strong> ${Date}</span>
            <span><strong>bloodgroup:</strong> ${bloodgroup}</span>

            <span><strong>Email:</strong> ${em}</span>
            <span><strong>Phone Number:</strong> ${ph}</span>
            <br><br><br>
            <img id="displayImage" src="" alt="" style="height: 100px; width: 100px;">
        </fieldset>

        <fieldset class="fieldsett">
            <legend>Identification</legend>
            <span><strong>C.N.IC number:</strong> ${id_cnic}</span>
            <span><strong>License Type:</strong> ${bar_license}</span>

        </fieldset>

        <fieldset class="fieldsett">
            <legend>Address Information</legend>
            <span><strong>house no:</strong> ${house_no}</span>
            <span><strong>Street Adderss:</strong> ${street_address}</span>
            <span><strong>town-mohalla:</strong> ${town_mohalla}</span>
            <span><strong>home-city:</strong> ${home_city}</span>
            <br><br><br>
            <span><strong>postalCodeError:</strong> ${post}</span>
            <span><strong>home-country:</strong> ${home_country}</span>
            <span><strong>home-province:</strong> ${home_province}</span>
            <br><br><br>
            <span><strong>home-district:</strong> ${home_district}</span>
            <span><strong>home-tehsil:</strong> ${home_tehsil}</span>
        </fieldset>
        <fieldset class="fieldsett">
            <legend>Academic Information</legend>
            <h2>Matriculation : </h2>
            <br>

            <span><strong>qualification:</strong> ${matric_qualification}</span>
            <span><strong>institute:</strong> ${matric_institute}</span>
            <span><strong>totalMarks:</strong> ${matric_totalMarks}</span>
            <span><strong>obtainMarks:</strong> ${matric_obtainMarks}</span>
            <img id="matric_image" src="" alt="" style="height: 100px; width: 100px;">
            <br>
            <h2>Intermediate : </h2>
            <br>

            <span><strong>qualification:</strong> ${inter_qualification}</span>
            <span><strong>institute:</strong> ${inter_institute}</span>
            <span><strong>totalMarks:</strong> ${inter_totalMarks}</span>
            <span><strong>obtainMarks:</strong> ${inter_obtainMarks}</span>
            <img id="inter_image" src="" alt="" style="height: 100px; width: 100px;">
            <br>
             <h2>Batchelor : </h2>
             <br>

            <span><strong>qualification:</strong> ${batch_qualification}</span>
            <span><strong>institute:</strong> ${batch_institute}</span>
            <span><strong>totalMarks:</strong> ${batch_totalMarks}</span>
            <span><strong>obtainMarks:</strong> ${batch_obtainMarks}</span>
            <img id="batch_image" src="" alt="" style="height: 100px; width: 100px;">
            <br>


        </fieldset>
        <fieldset class="fieldsett">
            <legend>Member Information</legend>
            <span><strong>Member Type:</strong> ${rec_mem}</span>

        </fieldset>

                <!-- Include other form fields here -->
            `;

            // Set the HTML content into the PDF div
            document.querySelector('.pdf').innerHTML = htmlContent;

            // Display image

            if (fileInput) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("displayImage").src = e.target.result;
                }
                reader.readAsDataURL(fileInput);
            }
            //matric image
            if (matric_certificate_picture) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("matric_image").src = e.target.result;
                }
                reader.readAsDataURL(matric_certificate_picture);
            }
            //intermediate image
            if (inter_certificate_picture) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("inter_image").src = e.target.result;
                }
                reader.readAsDataURL(inter_certificate_picture);
            }
            //batchelor image
            if (batch_certificate_picture) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("batch_image").src = e.target.result;
                }
                reader.readAsDataURL(batch_certificate_picture);
            }
            //llb image
            if (llb_certificate_picture) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("llb_image").src = e.target.result;
                }
                reader.readAsDataURL(llb_certificate_picture);
            }
            //other image
            if (fbr_photo) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("ident").src = e.target.result;
                }
                reader.readAsDataURL(fbr_photo);
            }

            if (fbr_photo_one) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("identi").src = e.target.result;
                }
                reader.readAsDataURL(fbr_photo_one);
            }
            if (fbr_photo_two) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("identii").src = e.target.result;
                }
                reader.readAsDataURL(fbr_photo_two);
            }


        });


        document.addEventListener("DOMContentLoaded", function() {
    // Initial hide/show based on default selected value
    toggleDivs();

    // Adding event listener to select element
    document.getElementById('bar_license').addEventListener('change', function() {
        toggleDivs();
    });
});

function toggleDivs() {
    var selectedValue = document.getElementById('bar_license').value;
    if (selectedValue === 'FBR License') {
        document.getElementById('fbr').style.display = 'block';
        document.getElementById('bar').style.display = 'none';

    } else if (selectedValue === 'Punjab Bar Council License') {
        document.getElementById('fbr').style.display = 'none';
        document.getElementById('bar').style.display = 'block';
    } else {
        document.getElementById('fbr').style.display = 'none';
        document.getElementById('bar').style.display = 'none';
    }
}


function validateCNIC() {
        var cnicRegex = /^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/; // CNIC format: 12345-1234567-1

        var cnicInput = document.getElementsByName("cnic/gtba")[0].value;
        var errorSpan = document.getElementById("cnic-error-message");

        if (cnicRegex.test(cnicInput)) {
            // CNIC is valid, clear any previous error message
            errorSpan.textContent = "";
        } else {
            // CNIC is invalid, display error message
            errorSpan.textContent = "Please enter a valid CNIC number.";
        }
    }





        function saveAsPDF() {
    // Get the content of the element with class "pdf"
    const pdfContent = document.querySelector('.pdf').innerHTML;

    // Create a new window for the PDF
    let printWindow = window.open('', '_blank');

    // Write the content to the new window
    printWindow.document.write('<html><head><title>PDF Content</title></head><body>');
    printWindow.document.write(pdfContent);
    printWindow.document.write('</body></html>');

    // Print the window
    printWindow.document.close(); // Necessary for IE >= 10
    printWindow.print();
}





console.clear();

function ready(fn) {
  if (document.readyState === 'complete' || document.readyState === 'interactive') {
    setTimeout(fn, 1);
    document.removeEventListener('DOMContentLoaded', fn);
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}


ready(function() {

  // Global Constants

  const progressForm = document.getElementById('progress-form');

  const tabItems  = progressForm.querySelectorAll('[role="tab"]')
      , tabPanels = progressForm.querySelectorAll('[role="tabpanel"]');

  let currentStep = 0;

  // Form Validation

  /*****************************************************************************
   * Expects a string.
   *
   * Returns a boolean if the provided value *reasonably* matches the pattern
   * of a US phone number. Optional extension number.
   */

  const isValidPhone = val => {
    const regex = new RegExp(/^(\+92|0)?[-. ]?(\d{3})[-. ]?(\d{7})(?: *x(\d+))?$/);

  // Check if the length of the digits is not more than 11
  const isValidLength = val.replace(/\D/g, '').length <= 11;

  return regex.test(val) && isValidLength;
  };


  /*****************************************************************************
   * Expects a string.
   *
   * Returns a boolean if the provided value *reasonably* matches the pattern
   * of a real email address.
   *
   * NOTE: There is no such thing as a perfect regular expression for email
   *       addresses; further, the validity of an email address cannot be
   *       verified on the front end. This is the closest we can get without
   *       our own service or a service provided by a third party.
   *
   * RFC 5322 Official Standard: https://emailregex.com/
   */

  const isValidEmail = val => {
    const regex = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    return regex.test(val);
  };



  /*****************************************************************************
   * Expects a Node (input[type="text"] or textarea).
   */

  const validateText = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false
      };
    } else {
      return {
        isValid: true
      };
    }
  };

  /*****************************************************************************
   * Expects a Node (select).
   */

  const validateSelect = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false,
        message: 'Please select an option from the dropdown menu.'
      };
    } else {
      return {
        isValid: true
      };
    }
  };

  /*****************************************************************************
   * Expects a Node (fieldset).
   */

  const validateGroup = fieldset => {
    const choices = fieldset.querySelectorAll('input[type="radio"], input[type="checkbox"]');

    let isRequired = false
      , isChecked  = false;

    for (const choice of choices) {
      if (choice.required) {
        isRequired = true;
      }

      if (choice.checked) {
        isChecked = true;
      }
    }

    if (!isChecked && isRequired) {
      return {
        isValid: false,
        message: 'Please make a selection.'
      };
    } else {
      return {
        isValid: true
      };
    }
  };

  /*****************************************************************************
   * Expects a Node (input[type="radio"] or input[type="checkbox"]).
   */

  const validateChoice = field => {
    return validateGroup(field.closest('fieldset'));
  };

  /*****************************************************************************
   * Expects a Node (input[type="tel"]).
   */

  const validatePhone = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false
      };
    } else if (val !== '' && !isValidPhone(val)) {
      return {
        isValid: false,
        message: 'Please enter a valid Pakistan phone number (e.g., 03xx-xxxxxxx)."'
      };
    } else {
      return {
        isValid: true
      };
    }
  };

  /*****************************************************************************
   * Expects a Node (input[type="email"]).
   */

  const validateEmail = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false
      };
    } else if (val !== '' && !isValidEmail(val)) {
      return {
        isValid: false,
        message: 'Please provide a valid email address.'
      };
    } else {
      return {
        isValid: true
      };
    }
  };

  const validatePassword = password => {
    // Minimum 6 characters, maximum 25 characters
    const lengthRegex = /^.{6,25}$/;

    // At least one uppercase letter
    const uppercaseRegex = /[A-Z]/;

    // At least one lowercase letter
    const lowercaseRegex = /[a-z]/;

    // At least one digit
    const digitRegex = /\d/;

    // At least one special character (you can modify the list of special characters)
    const specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;

    // Combine all the individual checks
    const isValid =
      lengthRegex.test(password) &&
      uppercaseRegex.test(password) &&
      lowercaseRegex.test(password) &&
      digitRegex.test(password) &&
      specialCharRegex.test(password);

    return isValid;
  };

  const validatepas = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false
      };
    } else if (val !== '' && !validatePassword(val)) {
      return {
        isValid: false,
        message: 'Password must be 6-20 characters, contain at least one uppercase and lowercase letter, one digit, and one special character.'
      };
    } else {
      return {
        isValid: true
      };
    }
  };

  /*****************************************************************************
   * Expects a Node (field or fieldset).
   *
   * Returns an object describing the field's overall validity, as well as
   * a possible error message where additional information may be helpful for
   * the user to complete the field.
   */

  const getValidationData = field => {
    switch (field.type) {
      case 'text':
      case 'textarea':
        return validateText(field);
      case 'select-one':
        return validateSelect(field);
      case 'fieldset':
        return validateGroup(field);
      case 'radio':
      case 'checkbox':
        return validateChoice(field);
      case 'tel':
        return validatePhone(field);
      case 'email':
        return validateEmail(field);
      case 'password':
        return validatepas(field);
      case 'number':
        return validateNumber(field);
        case 'date':
        return validatedate(field);
        case 'file':
        return validatefile(field);
      default:
        throw new Error(`The provided field type '${field.tagName}:${field.type}' is not supported in this form.`);
    }
  };


  const validatefile = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false
      };
    } else {
      // You can add additional validation logic for numbers if needed
      return {
        isValid: true
      };
    }
  };

  const validatedate = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false
      };
    } else {
      // You can add additional validation logic for numbers if needed
      return {
        isValid: true
      };
    }
  };

  const validateNumber = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false
      };
    } else {
      // You can add additional validation logic for numbers if needed
      return {
        isValid: true
      };
    }
  };


  /*****************************************************************************
   * Expects a Node (field or fieldset).
   *
   * Returns the field's overall validity based on conditions set within
   * `getValidationData()`.
   */

  const isValid = field => {
    return getValidationData(field).isValid;
  };

  /*****************************************************************************
   * Expects an integer.
   *
   * Returns a promise that either resolves if all fields in a given step are
   * valid, or rejects and returns invalid fields for further processing.
   */

  const validateStep = currentStep => {
    const fields = tabPanels[currentStep].querySelectorAll('fieldset, input:not([type="radio"]):not([type="checkbox"]), select, textarea');

    const invalidFields = [...fields].filter(field => {
      return !isValid(field);
    });

    return new Promise((resolve, reject) => {
      if (invalidFields && !invalidFields.length) {
        resolve();
      } else {
        reject(invalidFields);
      }
    });
  };

  // Form Error and Success

  const FIELD_PARENT_CLASS = 'form__field'
      , FIELD_ERROR_CLASS  = 'form__error-text';

  /*****************************************************************************
   * Expects a Node (fieldset) that contains any number of radio or checkbox
   * input elements, and a string representing the group's validation status.
   */

  function updateChoice(fieldset, status, errorId = '') {
    const choices = fieldset.querySelectorAll('[type="radio"], [type="checkbox"]');

    for (const choice of choices) {
      if (status) {
        choice.setAttribute('aria-invalid', 'true');
        choice.setAttribute('aria-describedby', errorId);
      } else {
        choice.removeAttribute('aria-invalid');
        choice.removeAttribute('aria-describedby');
      }
    }
  }

  /*****************************************************************************
   * Expects a Node (field or fieldset) that either has the class name defined
   * by `FIELD_PARENT_CLASS`, or has a parent with that class name. Optional
   * string defines the error message.
   *
   * Builds and appends an error message to the parent element, or updates an
   * existing error message.
   *
   * https://www.davidmacd.com/blog/test-aria-describedby-errormessage-aria-live.html
   */

  function reportError(field, message = 'Please complete this required field.') {
    const fieldParent = field.closest(`.${FIELD_PARENT_CLASS}`);

    if (progressForm.contains(fieldParent)) {
      let fieldError   = fieldParent.querySelector(`.${FIELD_ERROR_CLASS}`)
        , fieldErrorId = '';

      if (!fieldParent.contains(fieldError)) {
        fieldError = document.createElement('p');

        if (field.matches('fieldset')) {
          fieldErrorId = `${field.id}__error`;

          updateChoice(field, true, fieldErrorId);
        } else if (field.matches('[type="radio"], [type="checkbox"]')) {
          fieldErrorId = `${field.closest('fieldset').id}__error`;

          updateChoice(field.closest('fieldset'), true, fieldErrorId);
        } else {
          fieldErrorId = `${field.id}__error`;

          field.setAttribute('aria-invalid', 'true');
          field.setAttribute('aria-describedby', fieldErrorId);
        }

        fieldError.id = fieldErrorId;
        fieldError.classList.add(FIELD_ERROR_CLASS);

        fieldParent.appendChild(fieldError);
      }

      fieldError.textContent = message;
    }
  }

  /*****************************************************************************
   * Expects a Node (field or fieldset) that either has the class name defined
   * by `FIELD_PARENT_CLASS`, or has a parent with that class name.
   *
   * https://www.davidmacd.com/blog/test-aria-describedby-errormessage-aria-live.html
   */

  function reportSuccess(field) {
    const fieldParent = field.closest(`.${FIELD_PARENT_CLASS}`);

    if (progressForm.contains(fieldParent)) {
      const fieldError = fieldParent.querySelector(`.${FIELD_ERROR_CLASS}`);

      if (fieldParent.contains(fieldError)) {
        if (field.matches('fieldset')) {
          updateChoice(field, false);
        } else if (field.matches('[type="radio"], [type="checkbox"]')) {
          updateChoice(field.closest('fieldset'), false);
        } else {
          field.removeAttribute('aria-invalid');
          field.removeAttribute('aria-describedby');
        }

        fieldParent.removeChild(fieldError);
      }
    }
  }

  /*****************************************************************************
   * Expects a Node (field or fieldset).
   *
   * Reports the field's overall validity to the user based on conditions set
   * within `getValidationData()`.
   */

  function reportValidity(field) {
    const validation = getValidationData(field);

    if (!validation.isValid && validation.message) {
      reportError(field, validation.message);
    } else if (!validation.isValid) {
      reportError(field);
    } else {
      reportSuccess(field);
    }
  }

  // Form Progression

  /*****************************************************************************
   * Resets the state of all tabs and tab panels.
   */

  function deactivateTabs() {
    // Reset state of all tab items
    tabItems.forEach(tab => {
      tab.setAttribute('aria-selected', 'false');
      tab.setAttribute('tabindex', '-1');
    });

    // Reset state of all panels
    tabPanels.forEach(panel => {
      panel.setAttribute('hidden', '');
    });
  }

  /*****************************************************************************
   * Expects an integer.
   *
   * Shows the desired tab and its associated tab panel, then updates the form's
   * current step to match the tab's index.
   */

  function activateTab(index) {
    const thisTab   = tabItems[index]
        , thisPanel = tabPanels[index];

    // Close all other tabs
    deactivateTabs();

    // Focus the activated tab for accessibility
    thisTab.focus();

    // Set the interacted tab to active
    thisTab.setAttribute('aria-selected', 'true');
    thisTab.removeAttribute('tabindex');

    // Display the associated tab panel
    thisPanel.removeAttribute('hidden');

    // Update the current step with the interacted tab's index value
    currentStep = index;
  }

  /*****************************************************************************
   * Expects an event from a click listener.
   */

  function clickTab(e) {
    activateTab([...tabItems].indexOf(e.currentTarget));
  }

  /*****************************************************************************
   * Expects an event from a keydown listener.
   */

  function arrowTab(e) {
    const { keyCode, target } = e;

    /**
     * If the current tab has an enabled next/previous sibling, activate it.
     * Otherwise, activate the tab at the beginning/end of the list.
     */

    const targetPrev  = target.previousElementSibling
        , targetNext  = target.nextElementSibling
        , targetFirst = target.parentElement.firstElementChild
        , targetLast  = target.parentElement.lastElementChild;

    const isDisabled = node => node.hasAttribute('aria-disabled');

    switch (keyCode) {
      case 37: // Left arrow
        if (progressForm.contains(targetPrev) && !isDisabled(targetPrev)) {
          activateTab(currentStep - 1);
        } else if (!isDisabled(targetLast)) {
          activateTab(tabItems.length - 1);
        } break;
      case 39: // Right arrow
        if (progressForm.contains(targetNext) && !isDisabled(targetNext)) {
          activateTab(currentStep + 1);
        } else if (!isDisabled(targetFirst)) {
          activateTab(0);
        } break;
    }
  }

  /*****************************************************************************
   * Expects a boolean.
   *
   * Updates the visual state of the progress bar and makes the next tab
   * available for interaction (if there is a next tab).
   */

  // Immediately attach event listeners to the first tab (happens only once)
  tabItems[0].addEventListener('click', clickTab);
  tabItems[0].addEventListener('keydown', arrowTab);

  function handleProgress(isComplete) {
    const currentTab = tabItems[currentStep]
        , nextTab    = tabItems[currentStep + 1];

    if (isComplete) {
      currentTab.setAttribute('data-complete', 'true');

      /**
       * Verify that there is, indeed, a next tab before modifying or listening
       * to it. In case we've reached the last item in the tablist.
       */

      if (progressForm.contains(nextTab)) {
        nextTab.removeAttribute('aria-disabled');

        nextTab.addEventListener('click', clickTab);
        nextTab.addEventListener('keydown', arrowTab);
      }

    } else {
      currentTab.setAttribute('data-complete', 'false');
    }
  }

  // Form Interactions

  /*****************************************************************************
   * Returns a function that only executes after a delay.
   *
   * https://davidwalsh.name/javascript-debounce-function
   */

  const debounce = (fn, delay = 500) => {
    let timeoutID;

    return (...args) => {
      if (timeoutID) {
        clearTimeout(timeoutID);
      }

      timeoutID = setTimeout(() => {
        fn.apply(null, args);
        timeoutID = null;
      }, delay);
    };
  };

  /*****************************************************************************
   * Waits 0.5s before reacting to any input events. This reduces the frequency
   * at which the listener is fired, making the errors less "noisy". Improves
   * both performance and user experience.
   */

  progressForm.addEventListener('input', debounce(e => {
    const { target } = e;

    validateStep(currentStep).then(() => {

      // Update the progress bar (step complete)
      handleProgress(true);

    }).catch(() => {

      // Update the progress bar (step incomplete)
      handleProgress(false);

    });

    // Display or remove any error messages
    reportValidity(target);
  }));

  /****************************************************************************/

  progressForm.addEventListener('click', e => {
    const { target } = e;

    if (target.matches('[data-action="next"]')) {
      validateStep(currentStep).then(() => {

        // Update the progress bar (step complete)
        handleProgress(true);

        // Progress to the next step
        activateTab(currentStep + 1);

      }).catch(invalidFields => {

        // Update the progress bar (step incomplete)
        handleProgress(false);

        // Show errors for any invalid fields
        invalidFields.forEach(field => {
          reportValidity(field);
        });

        // Focus the first found invalid field for the user
        invalidFields[0].focus();

      });
    }

    if (target.matches('[data-action="prev"]')) {

      // Revisit the previous step
      activateTab(currentStep - 1);

    }
  });

});






function previewcer() {
    var file = document.getElementById("Certificate_picture").files[0];
    var preview = document.getElementById("previewCertificate");

    // Ensure that the file is an image
    if (file) {
        var reader = new FileReader();

        reader.onload = function (event) {
            // Set the src attribute of the image element with the data URL
            preview.src = event.target.result;
        };

        // Read the uploaded file as a data URL
        reader.readAsDataURL(file);
    } else {
        // If no file is selected or an invalid file is selected, set the src attribute to empty or a placeholder image
        preview.src = ""; // You can set a placeholder image URL here if you want
    }
}




  function previewtran() {
  var file = document.getElementById("transaction_picture").files[0];
  var preview = document.getElementById("previewTransaction");

  // Ensure that the file is an image
  if (file) {
      var reader = new FileReader();

      reader.onload = function (event) {
          // Set the src attribute of the image element with the data URL
          preview.src = event.target.result;
      };

      // Read the uploaded file as a data URL
      reader.readAsDataURL(file);
  } else {
      // If no file is selected or an invalid file is selected, set the src attribute to empty or a placeholder image
      preview.src = ""; // You can set a placeholder image URL here if you want
  }
}


function previewImage() {
  var file = document.getElementById("fileInput").files[0];
  var preview = document.getElementById("preview");

  // Ensure that the file is an image
  if (file) {
      var reader = new FileReader();

      reader.onload = function (event) {
          // Set the src attribute of the image element with the data URL
          preview.src = event.target.result;
      };

      // Read the uploaded file as a data URL
      reader.readAsDataURL(file);
  } else {
      // If no file is selected or an invalid file is selected, set the src attribute to empty or a placeholder image
      preview.src = ""; // You can set a placeholder image URL here if you want
  }
}


function togglememrec(){
  var e_m = document.getElementById("rec_mem").value;
  var e_m1 = document.getElementById("rec");


  if(e_m == "Existing"){
    e_m1.style.display = "none";

  }
  else if(e_m == "Non-Existing"){
    e_m1.style.display = "block";

  }
  else{
    e_m1.style.display = "none";
  }
}

function togglemempay(){
  var e_m = document.getElementById("rec_pay").value;
  var e_m1 = document.getElementById("payment");
  var e_m2 = document.getElementById("recooo");


  if(e_m == "Existing"){
    e_m1.style.display = "none";
    e_m2.style.display = "block";

  }
  else if(e_m == "Non-Existing"){
    e_m1.style.display = "block";
    e_m2.style.display = "none";

  }
  else{
    e_m1.style.display = "none";
    e_m2.style.display = "none";
  }
}






function validateCreditCard() {
var creditCardNumber = document.getElementById("creditCardNumber").value.replace(/\s/g, ''); // Remove spaces
var creditCardError = document.getElementById("creditCardError");

// Simple Luhn algorithm check for credit card validation
var sum = 0;
var double = false;

for (var i = creditCardNumber.length - 1; i >= 0; i--) {
  var digit = parseInt(creditCardNumber.charAt(i), 10);

  if (double) {
    digit *= 2;
    if (digit > 9) {
      digit -= 9;
    }
  }

  sum += digit;
  double = !double;
}

if (sum % 10 !== 0 || sum === 0) {
  creditCardError.innerText = "Invalid credit card number";
} else {
  creditCardError.innerText = "";
}
}




function validatePostalCode() {
var postalCode = document.getElementById("post").value;
var postalCodeError = document.getElementById("postalCodeError");

// Check if the postal code is a numeric value and has a length between 5 and 10 characters
if (!(/^\d+$/.test(postalCode)) || postalCode.length < 5 || postalCode.length > 10) {
  postalCodeError.innerText = "Invalid postal code";
} else {
  postalCodeError.innerText = "";
}
};



</script>

</body>
</html>
