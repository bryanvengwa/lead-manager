
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('fonts/poppinsFont/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css2/styles.css')}}" />
    <link rel="canonical" href="https://tailwindcomponents.com/component/tailwind-css-modal-popup" itemprop="URL">
    <script src="https://cdn.tailwindcss.com"></script>

    {{--    original linkings--}}

    <title>Agent Dashboard</title>

</head>
<body >
@include('components.modall' )

<nav class="mobile-nav  navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img  class="lolo" src="{{asset('images/logo.svg')}}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <div class="offcanvas-title" id="offcanvasDarkNavbarLabel"> <img  class="lolo" src="{{asset('images/logo.svg')}}" alt="logo"></div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('agent.dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <form  style="color: white ; background: none; " action="{{route('logout')}}"  method="post">
                            @csrf
                            <button type="submit" style="color: white ; background: none; ">Log out</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
                <!-- <form class="d-flex mt-3" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </div>
</nav>
<nav class="pc-nav">
    <a class="img-container" href="index.html" title="home" >
        <img  class="lolo" src="{{asset('images/logo.svg')}}" alt="logo">
    </a>
    <ul>

        <li><span class="menu-button2 ">Pages</span>

            <ul class="small-menu2 hide">
                <li><a href="{{route('agent.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('agent.create')}}">Create</a></li>

            </ul>
        </li>
        <li><a href="">Listings</a></li>
        <li><a href="">Listings</a></li>
        <li><a href="">Listings</a></li>
    </ul>
    <ul class="icons">

        <li class="menu-container">
            <i title="button"  class="menu-button fas fa-th clickable-icon "></i>
            <ul class="small-menu hide">
                <li><a href="">logout</a></li>
                <li><a href="">profile</a></li>

            </ul>


        </li>
        <li><i class="fas fa-bell notification-iconn"></i></li>

    </ul>
</nav>

<section id="profile">
    <div class="profile-inner">
        <div class="profile-btns">
            <div class="avatar">
                <img src="./images/bigMan.png" alt="" />
            </div>
            <div class="greetings">
                <h1><span>Hi </span>Peter Adams</h1>
            </div>
            <div class="addNewListing">
                <button>+ Add New Listing</button>
            </div>
        </div>
        <div class="dashboard-menu">
            <div class="menu">
                <div class="hamburger_menu">
                    <iconify-icon id="bulletsIcon" icon="ph:list-bullets-thin"></iconify-icon>
                    <span>Dashboard Menu</span>
                </div>
                <div class="dd_wrap">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="wrap">
                                    <iconify-icon id="houseIcon" icon="bi:house"></iconify-icon>
                                    <span class="text">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./listings.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="noteIcon"
                                        icon="fluent:notepad-28-regular"
                                    ></iconify-icon
                                    ><span class="text">Listings</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./leads.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="leadIcon"
                                        icon="arcticons:magnetometer"
                                    ></iconify-icon
                                    ><span class="text">Leads</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./reviews.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="reviewsIcon"
                                        icon="iconamoon:star-thin"
                                    ></iconify-icon
                                    ><span class="text">Reviews</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./settings.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="settings"
                                        icon="arcticons:settings"
                                    ></iconify-icon
                                    ><span class="text">Settings</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="a_parent">
                                <div class="wrap">
                                    <iconify-icon
                                        id="bulletsIcon"
                                        icon="ph:list-bullets-thin"
                                    ></iconify-icon
                                    ><span class="text"
                                    >Dropdown<iconify-icon
                                            id="dropdownArrow"
                                            icon="iconamoon:arrow-down-2-thin"
                                        ></iconify-icon
                                        ></span>
                                </div>
                            </a>
                            <div class="dd_menu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dashboard-menu-expanded">
            <div class="menu">
                <div class="dd_wrap">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="wrap">
                                    <iconify-icon
                                        id="houseIcon"
                                        icon="bi:house"
                                    ></iconify-icon
                                    ><span class="text">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./listings.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="noteIcon"
                                        icon="fluent:notepad-28-regular"
                                    ></iconify-icon
                                    ><span class="text">Listings</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./leads.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="leadIcon"
                                        icon="arcticons:magnetometer"
                                    ></iconify-icon
                                    ><span class="text">Leads</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./reviews.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="reviewsIcon"
                                        icon="iconamoon:star-thin"
                                    ></iconify-icon
                                    ><span class="text">Reviews</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./settings.html">
                                <div class="wrap">
                                    <iconify-icon
                                        id="settings"
                                        icon="arcticons:settings"
                                    ></iconify-icon
                                    ><span class="text">Settings</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="a_parent">
                                <div class="wrap">
                                    <iconify-icon
                                        id="bulletsIcon"
                                        icon="ph:list-bullets-thin"
                                    ></iconify-icon
                                    ><span class="text"
                                    >Dropdown<iconify-icon
                                            id="dropdownArrow"
                                            icon="iconamoon:arrow-down-2-thin"
                                        ></iconify-icon
                                        ></span>
                                </div>
                            </a>
                            <div class="dd_menu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="wrap">
                                                <span class="text">content</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- respect -->
<div class="listHeadingContainer">
    <iconify-icon id="connectionIcon" icon="fluent:connected-20-filled"></iconify-icon>
    <h1>Leads</h1>
</div>
<section class="leadsSection">
    <div class="leadsSectionDiv">
        <div class="leads-viewAllButton">
            <h2> {{$totalLeads}} Leads</h2>
            <form style="background: unset ; border: none ; box-shadow: none" method="get" action="{{route('agent.create')}}">
                <button type="submit">Create Leads</button>
            </form>
            <div class="divisionLine"></div>
        </div>
        <div class="leads-createDateSection">
            <div class="allLeads-createDate-div">
                <div class="allLeadsDiv commonDiv">
                    <div class="text-downArrow">
                        <p>All Leads</p>
                        <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                    </div>
                </div>
                <div class="createDateDiv commonDiv">
                    <div class="text-downArrow">
                        <p>Create Date</p>
                        <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                    </div>
                </div>
            </div>
            <div class="showingResultsDiv">
                <p>Showing of 90 results</p>
            </div>
        </div>
        <div class="search-sort-div">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <form style="width: 100%; background: none ; border: none ; box-shadow: none" action="{{ route('agent.search', ['query' => ' ']) }}" method="get">
                        @csrf
                        <div class="searchLeadsDiv">
                            <input type="text" class="search-bar" placeholder="Search...">
                            <button type="submit">  <iconify-icon id="searchIcon" icon="ei:search"></iconify-icon></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="dropdown" id="dropdown">
                        <div class="dropdown-toggle" onclick="toggleDropdown()">Sort By <i class="fa fa-caret-down"></i></div>
                        <div class="dropdown-content" id="dropdown-content">
                            <a href="#">Leads</a>
                            <a href="#">Calls</a>
                            <a href="#">Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- THE TABLE  -->
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>
                        <div class="nameHeading columnheading">
                            <input type="checkbox">
                            <h3>Name</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="contactHeading columnheading">
                            <h3>Contact</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="leadsSourceHeading columnheading">
                            <h3>Leads Source</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="leadsStatusHeading columnheading">
                            <h3>Leads Status</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="actionHeading columnheading">
                            <h3>Action</h3>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($leads as $lead)
                    <tr data-id="{{$lead->id}}" class="open-modal">
                        <td>
                            <div class="checkBox-leadName">
                                <input type="checkbox">
                                <img src="{{asset('images/agProfile.png')}}" alt="">
                                <div class="personName-date-div">
                                    <p>{{$lead->first_name}}</p>
                                    <div class="clockIcon-date-div">
                                        <iconify-icon id="clockIcon" icon="ph:clock-thin"></iconify-icon>
                                        <p>{{$lead->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="email-telephone-div">
                                <div class="messageIcon-email-div email-telephone-common-div">
                                    <iconify-icon id="messageIcon" icon="ep:message"></iconify-icon>
                                    <p>{{$lead->email_address}}</p>
                                </div>
                                <div class="telephoneIcon-phoneNumer-div email-telephone-common-div">
                                    <iconify-icon id="telephoneIcon" icon="ph:phone-thin"></iconify-icon>
                                    @if($lead->contact_number_1 == null)
                                        <p>{{$lead->contact_number_2}}</p>
                                    @else
                                        <p>{{$lead->contact_number_1}}</p>
                                    @endif

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="leadSourcebuttons">
                                <p>Agent</p>
                            </div>
                        </td>
                        <td>
                            <div class="leadStatusButtons1">
                                <p>{{$lead->status}}</p>
                            </div>
                        </td>
                        <td>
                            <div class="writeOrDelete-div">

                                <a href="{{route('agent.edit' , ['id'=>$lead->id])}}"><iconify-icon id="writingIcon" class="actionIcon" icon="streamline:interface-edit-write-2-change-document-edit-modify-paper-pencil-write-writing"></iconify-icon></a>
                                <button  onclick="openDeleteLeadModal({{$lead->id}})" style="background: none" ><iconify-icon id="deleteIcon" class="actionIcon" icon="material-symbols:delete-outline"></iconify-icon></button>
                            </div>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <div class="next-prev-div">
        <a href="{{ $prevPageLink }}">   <button class="next-prev-buttons">Prev</button></a>
        <a href="{{$nextPageLink }}">   <button class="next-prev-buttons">Next</button></a>


    </div>
</section>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script>
    const buttons = document.querySelectorAll(".open-modal")
    const deleteButton = document.getElementById('deleteButton');
    const closebutton2 = document.querySelector('.close-button2');
    const closebutton3 = document.getElementById('close-button3')
    const form = document.getElementById('form-a')
    const modal = document.querySelector('.delete-modal')
    let currentId = null;

    function openDeleteLeadModal(id){
        console.log('function ran')
        console.log(id)
        buttons.forEach(button =>{
            if(button.dataset.id = id){
                console.log('they are the same' , button.dataset.id , id )
                modal.classList.remove('hide')
                currentId = id
                const url = `leads/${currentId}`
                deleteButton.href = url


            }
        })
    }

    deleteButton.addEventListener('click',(e)=> {
        const newUrl = `/agent/leads/${currentId}`;
        window.location.href = newUrl;


    })

    function hide(){
        modal.classList.add('hide')

    }
    closebutton3.addEventListener('click',()=>modal.classList.add('hide'))
</script>

</body>
</html>
