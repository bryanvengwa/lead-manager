<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fonts/poppinsFont/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>AdminDashboard</title>
</head>
<!-- NAVIGATION-SECTION -->
<header id="navigationSection">
    <nav id="navbar">
        <a href="{{route('admin.dashboard')}}"><div id="logo"><img src="{{asset('images/logo.png')}}" alt=""></div></a>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="custom-dropdown">
                <a href="#">Pages<iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon></a>
                <div class="custom-dropdown-content">
                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                    <a href="{{route('admin.create')}}">Leads</a>
                    <a href="#">Reviews</a>
                </div>
            </li>
            <li class="custom-dropdown">
                <a href="#">About Us<iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon></a>
                <div class="custom-dropdown-content">
                    <a href="#">Mission</a>
                    <a href="#">Team</a>
                    <a href="#">History</a>
                </div>
            </li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="hamMenu-navIcons-pImage">
            <a href="#" class="toggle-button" onclick="openNav()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="darkModeIconContainer">
                <iconify-icon id="changeModeIcon" icon="ph:sun-bold"></iconify-icon>
            </div>
            <iconify-icon id="notificationIcon" icon="ic:outline-notifications"></iconify-icon>
            <!-- <iconify-icon id="menuGridIcon" icon="gg:menu-grid-o"></iconify-icon>  -->
            <div class="dropdown-container">
                <iconify-icon id="menuGridIcon" icon="gg:menu-grid-o" class="icon"></iconify-icon>
                <div style=" flex-direction: column" class="dropdown-content grid-content" id="dropdownContent">
                    <a href="#">Profile</a>
                    <form  style="color: white ; background: none; " action="{{route('logout')}}"  method="post">
                        @csrf
                        <button type="submit" style="color: white ; background: none; ">Log out</button>
                    </form>
                </div>
            </div>
            <img src="{{asset('images/bigMan.png')}}" alt="">
        </div>
    </nav>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="custom-dropdown">
                    <a href="#">Pages <iconify-icon icon="ep:arrow-down" style="color: white;" rotate="270deg"></iconify-icon></a>
                    <div class="custom-dropdown-content content1">
                        <a href="{{route('admin.dashboard')}}">Dashboard</a>
                        <a href="{{route('admin.create')}}">Leads</a>
                        <a href="#">Reviews</a>
                    </div>
                </li>
                <li class="custom-dropdown">
                    <a href="#">About Us <iconify-icon icon="ep:arrow-down" style="color: white;" rotate="270deg"></iconify-icon></a>
                    <div class="custom-dropdown-content content2">
                        <a href="#">Mission</a>
                        <a href="#">Team</a>
                        <a href="#">History</a>
                    </div>
                </li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <!-- <div class="darkModeIconContainer">
                <iconify-icon id="changeModeIcon" icon="ph:sun-bold"></iconify-icon>
            </div> -->
        </div>
    </div>
</header>
<body>


<header>

    <div class="heading">
        <h1>Add New Leads</h1>
        '<p> " Go Green and Stay Warm with Our Eco4 Boilers  Your Eco-Friendly Comfort Solution!"</p>'
    </div>
    <div class="navigation">
        <div class="button-container ">
            <a href="#basic-section">
                <button data-number="1" class="nav-button active">
                    1
                </button>
            </a>
            <h6>Basic Info</h6>
        </div>
        <div class="line"></div>
        <div class="button-container">
            <a href="#benefits-section">
                <button data-number="2"  class="nav-button">
                    2
                </button>
            </a>
            <h6>Benefits</h6>
        </div>
        <div class="line"></div>
        <div class="button-container">
            <a href="#property-section">
                <button data-number="3"  class="nav-button">
                    3
                </button>
            </a>
            <h6>property info</h6>
        </div>
    </div>
    <div id="basic-section" ></div>
    <br><br>
</header>

{{--here is where the form starts--}}
<form method="POST" action="{{route('admin.update')}}" id="form" >
    @csrf
    <input type="hidden" value="{{$lead->id}}" name="id" >
    <div class="container here">
        <div  class="basic-information form" >
            <div class="form-header">
                <h3>Basic Information</h3>
            </div>

            <div class="flex-container">
                <div class="input-container col-sm-6">
                    <div class="error-container">
                        <label for="first-name">First Name</label>
                        <br>
                        <span>@error('first_name'){{$message}}**@enderror</span>
                    </div>
                    <input type="text" name="first_name"  value="{{$lead->first_name}}" class="form-control" id="first-name" >

                </div>
                <div class="input-container col-md-6">
                    <div class="error-container">
                        <label for="last-name">Last Name</label>
                        <br>
                        <span>@error('last_name'){{$message}}**@enderror</span>
                    </div>
                    <input type="text" name="last_name"  value="{{$lead->last_name}}" class="form-control" id="last-name" >

                </div>

            </div>
            <div class="flex-container">
                <div class="input-container col-md-6">
                    <label for="middle-name">Middle Name</label>
                    <input type="text" name="middle_name"  value="{{$lead->middle_name}}" class="form-control" id="middle-name" >

                </div>
                <div class="input-container col-md-6">
                    <div class="error-container">
                        <label for="date-of-birth">Date of birth</label>
                        <br>
                        <span>@error('date_of_birth'){{$message}}**@enderror</span>
                    </div>
                    <input type="date" name="date_of_birth"  value="{{$lead->date_of_birth}}" class="form-control" id="date-of-birth" >

                </div>

            </div>
            <div class="flex-container">
                <div class="input-container col-md-6">
                    <div class="error-container">
                        <label for="email">Email</label>
                        <br>
                        <span>@error('address_1'){{$message}}@enderror</span>
                    </div>
                    <input type="email" name="email_address" value="{{$lead->email_address}}"  class="form-control" id="email" >

                </div>
                <div class="input-container col-md-6">
                    <div class="error-container">
                        <label for="phone">Phone 1</label>
                        <br>
                        <span>@error('contact_number_1'){{$message}}**@enderror</span>
                    </div>
                    <input type="number" name="contact_number_1" value="{{$lead->contact_number_1}}" class="form-control" id="phone" >

                </div>

            </div>
            <div class="flex-container">
                <div class="input-container col-md-6">
                    <label for="phone2">Phone 2</label>
                    <input type="number" name="contact_number_2" value="{{$lead->contact_number_1}}"  class="form-control" id="phone2" >

                </div>
                <div class="input-container col-md-6">
                    <div class="error-container">
                        <label for="address">Address 1</label>
                        <br>
                        <span>@error('address_1'){{$message}}**@enderror</span>
                    </div>
                    <input type="text" name="address_1" value="{{$lead->address_1}}"  class="form-control" id="address" >

                </div>

            </div>
            <div class="flex-container">
                <div class="input-container col-md-6">
                    <label for="address2">Address 2</label>
                    <input type="text" name="address_2" value="{{$lead->address_1}}" class="form-control" id="address2" >

                </div>
                <div class="input-container col-md-6">
                    <div class="error-container">
                        <label for="postal-code">Post Code</label>
                        <br>
                        <span>@error('postal_code'){{$message}}**@enderror</span>
                    </div>
                    <input type="number" name="postal_code" value="{{$lead->postal_code}}" class="form-control" id="postal-code" >

                </div>

            </div>
            <br>
        </div>
        <br><br>
        <div id="benefits-section" ></div>
        <div class="benefits form"  id="form">
            <div class="form-header">
                <h3>Benefits</h3>
            </div>
            <br>
            <div class="flex-container">

                <div class="input-container col-sm-12">
                    <label for="1">Income-based Job Seekers Allowance</label>
                    <input type="checkbox" name="income_based_job_seekers_allowance" class="checkbox" value="1" {{$lead->income_based_job_seekers_allowance  ? 'checked' : '' }} id="1" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="2">Income-related Employment and Support Allowance</label>
                    <input type="checkbox" name="income_related_employment" class="checkbox" value="1" {{$lead->income_related_employment ? 'checked' : '' }} id="2" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="3">Income Support</label>
                    <input type="checkbox" name="income_support" class="checkbox" value="1" {{$lead->income_support  ? 'checked' : '' }} id="3" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="4">Pension Credit either Savings Credit or Guarantee Credit</label>
                    <input type="checkbox" name="pension_credit" class="checkbox" value="1" {{$lead->pension_credit ? 'checked' : '' }} id="4" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="5">Working Tax Credit</label>
                    <input type="checkbox" name="working_tax_credit" class="checkbox" value="1" {{$lead->working_tax_credit ? 'checked' : '' }} id="5" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="6">Child Tax Credit</label>
                    <input type="checkbox" name="child_tax_credit" class="checkbox" value="1" {{$lead->child_tax_credit  ? 'checked' : '' }} id="6" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="7">Universal Credit</label>
                    <input type="checkbox" name="universal_credit" class="checkbox" value="1" {{$lead->universal_credit ? 'checked' : '' }} id="7" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="8">Housing Benefit</label>
                    <input type="checkbox" name="housing_benefit" class="checkbox" value="1" {{$lead->housing_benefit ? 'checked' : '' }} id="8" >

                </div>
                <div class="input-container col-sm-12">
                    <label for="9">Child benefit where the occupants meet the below income thresholds*</label>
                    <input type="checkbox" name="child_benefit_where" class="checkbox" value="1" {{$lead->child_benefit_where ? 'checked' : '' }} id="9" >

                </div>

            </div>
            <br>
        </div>


        <br><br>

        <div id="property-section" ></div>
        <div action=""  class="property-information form">
            <div class="form-header">
                <h3>Property Information</h3>
            </div>
            <div class="flex-container">
                <div class="input-container col-sm-12 col-md-6">
                    <label for="energy_rating">What is your energy rating ?</label>
                    <select type="text" name="energy_rating" id="energy_rating" class="form-control"  >
                        <option value="{{$lead->energy_rating}}">A</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="">Null</option>
                        <option value="No EPC">No EPC</option>

                    </select>
                </div>
                <label for="rating_notes">Energy rating notes</label>
                <textarea name="rating_notes"   id="rating_notes" class="form-control" cols="30" rows="10">{{$lead->rating_notes}}</textarea>
            </div>
            <div class="flex-container flex-containers ">
                <div class="input-container col-sm-12">
                    <label for="boiler_years">How old is your Boiler?</label>
                    <input type="number" name="boiler_years" value="{{$lead->boiler_years}}" class="form-control" id="boiler_years" >

                </div>
                <div class="input-container col-md-6">
                    <label for="boiler_model">What is the make and model of the Boiler?</label>
                    <input type="text" name="boiler_model" value="{{$lead->boiler_model}}" class="form-control" id="boiler_model" >

                </div>

            </div>
            <div class="flex-container flex-containers">
                <div class="input-container col-sm-12">
                    <label for="heating_times">Do you have a timer to program  the heating times?</label>
                    <select type="number" name="heating_times" class="form-control" id="heating_times" >
                        <option value="yes">yes</option>
                        <option value="no">no</option>

                    </select>
                </div>
                <div class="input-container col-md-6 ">
                    <label for="room_thermostat">Do you have a Thermostat to control the temperature of the room?</label>
                    <select type="text" name="room_thermostat"  id="room_thermostat"  class="form-control"   >
                        <option value="{{$lead->room_thermostat}}">yes</option>
                        <option value="no">no</option>

                    </select>
                </div>

            </div>
            <div class="flex-container flex-containers">

                <div class="input-container col-md-6">
                    <label for="radiator_availability">Do you have any radiator to control the temperature of the radiator?</label>
                    <select type="text" name="radiator_availability"  class="form-control" id="radiator_availability"  >
                        <option value="{{$lead->radiator_availability}}">yes</option>
                        <option value="no">no</option>

                    </select>
                </div>
                <div class="input-container col-md-6">
                    <label for="secondary_heating">Do you have any secondary heating available ?</label>
                    <select type="text" name="secondary_heating"  class="form-control" id="secondary_heating" >
                        <option value="{{$lead->secondary_heating}}">yes</option>
                        <option value="no">no</option>
                        <option value="electric heater">electric heater</option>
                        <option value="wood or log burners">wood or log burners</option>

                    </select>
                </div>

            </div>
            <div class="flex-container flex-containers">
                <div class="input-container col-md-6">
                    <label for="property_type">What type of property do you live in?</label>
                    <select type="text" name="property_type" id="property_type"  class="form-control" >
                        <option value="{{$lead->property_type}}">detached</option>
                        <option value="semi_detached">semi detached</option>
                        <option value="terraced">terraced</option>
                        <option value="bungalow">bungalow</option>
                        <option value="flat">flat</option>

                    </select>
                </div>
                <div class="input-container col-md-6">
                    <label for="build_year">When was the property build</label>
                    <input type="date" name="build_year" value="{{$lead->build_year}}" class="form-control" id="build_year" >

                </div>


            </div>
            <div class="flex-container">
                <div class="input-container col-md-6">
                    <label for="habitable_rooms_unheated">Are any of the habitable rooms unheated?</label>
                    <select type="text"  class="form-control" name="habitable_rooms_unheated" id="habitable_rooms_unheated"  >
                        <option value="{{$lead->habitable_rooms_unheated}}">yes</option>
                        <option value="0">no</option>

                    </select>
                </div>
                <div class="input-container col-md-6">
                    <label for="habitable_rooms_unheated_notes">Habitable rooms notes</label>
                    <textarea  id="habitable_rooms_unheated_notes"  class="form-control" cols="30" rows="10">{{$lead->habitable_rooms_unheated_notes}}</textarea>

                </div>

            </div>
            <div class="flex-container flex-containers" >
                <div class="input-container col-sm-6 col-md-6">
                    <label for="extension_built_date">Extension built date</label>
                    <input type="date" name="extension_built_date" value="{{$lead->extension_built_date}}" class="form-control" id="extension_built_date" >

                </div>
                <div class="input-container col-sm-6  col-md-6">
                    <label for="rooms_in_the_roof_or_loft_space">Do you have any rooms in the roof or loft space</label>
                    <select type="text" name="rooms_in_the_roof_or_loft_space" id="rooms_in_the_roof_or_loft_space"  class="form-control" >
                        <option value="{{$lead->rooms_in_the_roof_or_loft_space}}">yes</option>
                        <option value="0">no</option>

                    </select>
                </div>

            </div>
            <div class="flex-container flex-containers">
                <div class="input-container col-sm-12">
                    <label for="RIR_built_date">If there is RIR when was it built ?</label>
                    <input type="date" name="RIR_built_date" value="{{$lead->RIR_built_date}}" class="form-control" id="RIR_built_date" >

                </div>
                <div class="input-container col-md-6">
                    <label for="floor_type">Floor types</label>
                    <select type="text"  class="form-control" name="floor_type" id="floor_type" >
                        <option value="{{$lead->floor_type}}">concrete floor</option>
                        <option value="suspended wooden floorboards">suspended wooden floorboards</option>
                        <option value="both">both</option>

                    </select>
                </div>

            </div>
            <div class="flex-container ">
                <div class="input-container col-md-6">
                    <label for="property_wall_type">Do the walls of the property have cavity walls and have they filled, or they are solid bricks?</label>
                    <select type="text" name="property_wall_type" id="property_wall_type"  class="form-control" >
                        <option value="cavity walls and they have been filled">cavity walls and they have been filled</option>
                        <option value="{{$lead->property_wall_type}}">No cavities</option>
                        <option value="solid brick">solid brick</option>

                    </select>
                </div>
                <div class="input-container col-md-6">
                    <label for="property_wall_type_notes" value="{{$lead->property_wall_type_notes}}">Property cavity notes</label>
                    <textarea  id="property_wall_type_notes" name="property_wall_type_notes" class="form-control" cols="30" rows="10">{{$lead->property_wall_type_notes}}</textarea>

                </div>

            </div>
            <div class="flex-container">
                <div class="input-container col-md-6">
                    <label for="loft_insulation_thickness">Regarding the thickness of your loft insulation, is it above or below the joists in thickness?</label>
                    <select type="text" name="loft_insulation_thickness"  class="form-control"  id="loft_insulation_thickness" >

                        <option value="{{$lead->loft_insulation_thickness}}">above</option>
                        <option value="middle">middle</option>
                        <option value="below">below</option>


                    </select>
                </div>
                <div class="input-container col-md-6">
                    <label for="glaze_type">What is the type of glaze on your property </label>
                    <select type="text" name="glaze_type" id="glaze_type"  class="form-control" >

                        <option value="{{$lead->glaze_type}}">{{$lead->glaze_type}}</option>
                        <option value="fully double glazed">fully double glazed</option>
                        <option value="partially double glazed">partially double glazed</option>

                    </select>
                </div>

            </div>
            <div class="flex-container flex-containers">
                <div class="input-container col-sm-12">
                    <label for="solar_or_ASHP">Have you ever had Solar panels or an ASHP installed?</label>
                    <input type="text" name="solar_or_ASHP" value="{{$lead->solar_or_ASHP}}" class="form-control" id="solar_or_ASHP" >

                </div>
                <div class="input-container col-md-6">
                    <label for="Memorable password">Memorable password</label>
                    <input type="text" name="password" value="{{$lead->password}}" class="form-control" id="Memorable password" >


                </div>

            </div>
        </div>
    </div>
    <br><br>
    <div class="button-container2"><br><br>
        <button class="submit-button">submit</button>
    </div>
</form>
<br>
<br>
<br>

<footer>
    <div class="footerContents">
        <div class="col-lg-4 col-md-4">
            <div class="footerLogoContainer">
                <a href="#navigationSection"><img src="{{asset('images/footerLogo.png')}}" alt=""></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="copyrightText">
                <p>Copyrights ©2023 Booking. Build by Youpro Contact</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="footerIconsContainer">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>--}}
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>

