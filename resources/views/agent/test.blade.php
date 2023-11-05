<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">
    <meta property="og:image" content="https://tailwindcomponents.com/storage/6641/conversions/temp38299-ogimage.jpg?v=2023-10-09 10:26:58" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="https://tailwindcomponents.com/component/input-field/landing" />
    <meta property="og:title" content="Input field by zoltanszogyenyi" />
    <meta property="og:description" content="Get started with these input fields coded with Tailwind CSS classes and selected from the Flowbite library to start receiving text content from your users" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Input field by zoltanszogyenyi" />
    <meta name="twitter:description" content="Get started with these input fields coded with Tailwind CSS classes and selected from the Flowbite library to start receiving text content from your users" />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/6641/conversions/temp38299-ogimage.jpg?v=2023-10-09 10:26:58" />

    <link rel="canonical" href="https://tailwindcomponents.com/component/input-fie" itemprop="URL">

    <title>Agent edit lead</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">
<div class="fixed bottom-0 left-0 right-0 z-40 px-4 py-3 text-center text-white bg-gray-800">

</div>
<!-- This is an example component -->
<div class="max-w-2xl mx-auto bg-white p-16">

    <form action="{{route('agent.store')}}" method="POST">
        @csrf
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First name</label>
                <input type="text" id="first_name" name="first_name"  value="{{$lead->first_name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" >
            </div>
            <div>
                <label for="middle_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Middle name</label>
                <input type="text" id="middle_name" name="middle_name" value="{{$lead->middle_name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John">
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last name</label>
                <input type="text" id="last_name" name="last_name" value="{{$lead->last_name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" >
            </div>
            <div>
                <label for="address_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address 1</label>
                <input type="text" id="company" name="address_1" value="{{$lead->address_1}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" >
            </div>
            <div>
                <label for="address_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address 2</label>
                <input type="text" id="company" name="address_2" value="{{$lead->address_2}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite">
            </div>
            <div>
                <label for="postalCode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Portal Code</label>
                <input type="number" id="postal _code" name="portalCode"  value="{{$lead->portalCode}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" >
            </div>
            <div>
                <label for="contact_number_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contact Number 1</label>
                <input type="number" id="contact_number_1" name="contact_number_1" value="{{$lead->contact_number_1}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" >
            </div>
            <div>
                <label for="contact_number_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contact Number 2</label>
                <input type="number" id="contact_number_2" name="contact_number_2" value="{{$lead->contact_number_2}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            <div>
                <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" value="{{$lead->date_of_birth}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" >
            </div>
            <div>
                <label for="energy_rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Energy rating</label>
                <select type="text" name="energy_rating"   id="energy_rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                    <option value="{{$lead->energy_rating}}">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="no EPC">No EPC</option>
                </select>
            </div>
            <div>
                <label for="boiler_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Boiler type</label>
                <select type="text" name="boiler_type"  id="boiler_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    <option value="{{$lead->boiler_type}}">Non Condensing Boiler</option>
                    <option value="back boiler">Back Boiler</option>
                    <option value="condensing boiler">Condensing Boiler</option>
                    <option value="combination boiler">Combination Boiler</option>
                </select>
            </div>
            <div>
                <label for="boiler_years" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Boiler Years</label>
                <input type="number" id="boiler_years" name="boiler_years" value="{{$lead->boiler_years}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            <div>
                <label for="boiler_model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Boiler Model</label>
                <input type="text" id="boiler_model" name="boiler_model" value="{{$lead->boiler_model}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            portal
            <div>
                <label for="room_thermostart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Do you have Room Thermostart</label>
                <select type="text" name="room_thermostart" id="room_thermostart" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    <option value="{{$lead->room_thermostart}}">yes</option>
                    <option value="no">no</option>
                </select>
            </div>
            <div>
                <label for="room_dials" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Do you have radiator dials</label>
                <select type="text" name="room_dials" id="room_dials" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    <option value="{{$lead->room_dials}}">yes</option>
                    <option value="no">no</option>
                </select>
            </div>
            <div>
                <label for="secondary_heating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Secondary Heating</label>
                <select type="text" name="secondary_heating" id="secondary_heating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    <option value="{{$lead->secondary_heating}}" >Non Condensing Boiler</option>
                    <option value="back boiler">Back Boiler</option>
                    <option value="condensing boiler">Condensing Boiler</option>
                    <option value="combination boiler">Combination Boiler</option>
                </select>
            </div>
            <div>
                <label for="property_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property Type</label>
                <select type="text" name="property_type" id="property_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    <option value="{{$lead->property_type}}">Non Condensing Boiler</option>
                    <option value="back boiler">Back Boiler</option>
                    <option value="condensing boiler">Condensing Boiler</option>
                    <option value="combination boiler">Combination Boiler</option>
                    <option value="combination boiler">Combination Boiler</option>
                </select>
            </div>
            <div>
                <label for="build_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Build Year</label>
                <input type="date" id="build_year" name="build_year" value="{{$lead->build_year}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com">
            </div>
            <div>
                <label for="number_of_bedrooms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Number of Bedrooms</label>
                <input type="number" id="number_of_bedrooms" name="number_of_bedrooms" value="{{$lead->number_of_bedrooms}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com">
            </div>
            <div>
                <label for="habitable_rooms_unheated" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Herbitable Rooms Unheated</label>
                <input type="number" id="habitable_rooms_unheated" name="habitable_rooms_unheated" value="{{$lead->habitable_rooms_unheated}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com">
            </div>
            <div>
                <label for="extensions_on_property" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Extensions On Property</label>
                <input type="url" id="extensions_on_property" name="extensions_on_property" value="{{$lead->extensions_on_property}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com">
            </div>
            <div>
                <label for="when was the extension built?" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">When was the extension built?</label>
                <input type="date" id="when_was_the_extension_built?" name="when_was_the_extension_built?" value="{{$lead->when_was_the_extension_built}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com">
            </div>
        </div>
        <div class="mb-6">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RIR date built</label>
            <input type="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com">
        </div>
        <div>
            <label for="property_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ground floor type</label>
            <select type="text" name="property_type" id="property_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                <option value="{{$lead->property_type}}">Concrete floor</option>
                <option value="back boiler">Suspended wooden floor boards</option>
                <option value="condensing boiler">Both</option>
                <option value="combination boiler">NULL</option>
                <option value="combination boiler">DEFAULT</option>
            </select>
        </div>
        <div>
            <label for="property_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property Wall Type</label>
            <select type="text" name="property_type" id="property_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                <option value="{{$lead->property_type}}">cavity walls and they have been filled</option>
                <option value="back boiler">solid brick</option>
                <option value="combination boiler">NULL</option>
                <option value="combination boiler">DEFAULT</option>
            </select>
        </div>
        <div>
            <label for="thickness_of_left_insulation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Thickness of left insulation</label>
            <select type="text" name="thickness_of_left_insulation" id="property_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                <option value="{{$lead->thickness_of_left_insulation}}">cavity walls and they have been filled</option>
                <option value="back boiler">solid brick</option>
                <option value="combination boiler">NULL</option>
                <option value="combination boiler">DEFAULT</option>
            </select>
        </div>
        <div>
            <label for="glaze_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Glaze Type</label>
            <select type="text" name="glaze_type" id="property_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                <option value="{{$lead->glaze_type}}">full doubled glaze</option>
                <option value="back boiler">partially doubled glaze</option>
                <option value="combination boiler">NULL</option>
                <option value="combination boiler">DEFAULT</option>
            </select>
        </div>
        <div>
            <label for="solar_ashp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Do you want to use solar or ASHP</label>
            <select type="text" name="solar_ashp" id="solar_ashp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                <option value="{{$lead->solar_ashp}}">solar</option>
                <option value="back boiler">ASHP</option>
            </select>
        </div>
        <div>
            <label for="thermostat_attachment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Do you have thermostat attachment</label>
            <select type="text" name="thermostat_attachment" id="thermostat_attachment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                <option value="{{$lead->thermostat_attachment}}">yes</option>
                <option value="back boiler">no</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">What time should we call you back</label>
            <input type="time" id="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com">
        </div>






        <div class="mb-6">
            <label for="optio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
            <input type="optio" id="optio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••">
        </div>
        <div class="mb-6">
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm password</label>
            <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••">
        </div>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

    <p class="mt-5">These input field components is part of a larger, open-source library of Tailwind CSS components. Learn
        more by going to the official <a class="text-blue-600 hover:underline" href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
            Documentation</a>.
    </p>
</div>
</body>

</html>





