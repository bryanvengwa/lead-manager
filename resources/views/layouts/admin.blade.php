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

    <meta property="og:image" content="https://tailwindcomponents.com/storage/8345/conversions/temp89170-ogimage.jpg?v=2023-10-15 23:56:52" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/dashboard-example/landing" />
    <meta property="og:title" content="Dark Dashboard Example by pantazisoftware" />
    <meta property="og:description" content="Simple and minimalist dashboard example made using Tailwind CSS" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Dark Dashboard Example by pantazisoftware" />
    <meta name="twitter:description" content="Simple and minimalist dashboard example made using Tailwind CSS" />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/8345/conversions/temp89170-ogimage.jpg?v=2023-10-15 23:56:52" />

    <link rel="canonical" href="https://tailwindcomponents.com/component/dashboard-example" itemprop="URL">

    <title>Dark Dashboard Example by pantazisoftware. </title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">

    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
        :root {
            font-family: 'Inter', sans-serif;
        }

        @supports (font-variation-settings: normal) {
            :root {
                font-family: 'Inter var', sans-serif;
            }
        }
    </style>

    <div class="antialiased bg-black w-full min-h-screen text-slate-300 relative py-4">
        <div class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
            <div id="menu" class="bg-white/10 col-span-3 rounded-lg p-4 ">
                <h1 class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-transparent">Dashboard<span class="text-indigo-400">.</span></h1>
                <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
                <a href="#" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                    <div>
                        <img class="rounded-full w-10 h-10 relative object-cover" src="https://img.freepik.com/free-photo/no-problem-concept-bearded-man-makes-okay-gesture-has-everything-control-all-fine-gesture-wears-spectacles-jumper-poses-against-pink-wall-says-i-got-this-guarantees-something_273609-42817.jpg?w=1800&t=st=1669749937~exp=1669750537~hmac=4c5ab249387d44d91df18065e1e33956daab805bee4638c7fdbf83c73d62f125" alt="">
                    </div>
                    <div>
                        <p class="font-medium group-hover:text-indigo-400 leading-4">{{auth()->user()->first_name}}</p>
                        <span class="text-xs text-slate-400">{{auth()->user()->last_name}}</span>
                    </div>
                </a>
                <hr class="my-2 border-slate-700">
                <div id="menu" class="flex flex-col space-y-2 my-5">
                    <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                            </div>
                            <div>
                                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Dashboard</p>
                                <p class="text-slate-400 text-sm hidden md:block">Data overview</p>
                            </div>

                        </div>
                    </a>
                    <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5.25H3M15 5.25H9M21 5.25c1.035 0 1.875 1.125 1.875 2.5V19.75c0 1.125-.84 2-1.875 2H3c-1.035 0-1.875-1.125-1.875-2V7.75c0-1.125.84-2 1.875-2M9 15L3 15M15 15L9 15M21 15c1.035 0 1.875 1.125 1.875 2.5V19.75c0 1.125-.84 2-1.875 2H3c-1.035 0-1.875-1.125-1.875-2V7.75c0-1.125.84-2 1.875-2" />
                                </svg>


                            </div>
                            <div>
                                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Leads</p>
                                <p class="text-slate-400 text-sm hidden md:block">Lead overview</p>
                            </div>

                        </div>
                    </a>
                    <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Invoices</p>
                                <p class="text-slate-400 text-sm hidden md:block">Manage invoices</p>
                            </div>
                            <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold">23</div>
                        </div>
                    </a>
                    <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Users</p>
                                <p class="text-slate-400 text-sm hidden md:block">Manage users</p>
                            </div>

                        </div>
                    </a>
                    <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                            </div>
                            <div>
                                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Settings</p>
                                <p class="text-slate-400 text-sm hidden md:block">Edit settings</p>
                            </div>


                        </div>
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <x-dropdown-link :href="route('logout')" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group" onclick=" event.preventDefault(); this.closest('form').submit();">
                            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H5m14 0a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v9a2 2 0 002 2h14z" />
                                    </svg>

                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Log Out</p>
                                    <p class="text-slate-400 text-sm hidden md:block"></p>
                                </div>

                            </div>
                        </x-dropdown-link>
                    </form>
                </div>
                <p class="text-sm text-center text-gray-600">v2.0.0.3 | &copy; 2022 Pantazi Soft</p>
            </div>
            <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">


                <div id="last-users">
                    <h1 class="font-bold py-4 uppercase">Leads</h1>
                    <div class="overflow-x-scroll">
                        <table class="w-full whitespace-nowrap">
                            <thead class="bg-black/60">
                                <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
                                <th class="text-left py-3 px-2">Email</th>
                                <th class="text-left py-3 px-2">Group</th>
                                <th class="text-left py-3 px-2">Status</th>
                                <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
                            </thead>

                            @foreach($leads as $lead)
                            <tr class="border-b border-gray-800">
                                <td class="py-3 px-2 font-bold">
                                    <div class="inline-flex space-x-3 items-center">
                                        <span><img class="rounded-full w-8 h-8" src="https://images.generated.photos/f_xU7q780YXiKG7IwKVV05eU6Sj2nIodEkN1S8GyM2M/rs:fit:256:256/czM6Ly9pY29uczgu/Z3Bob3Rvcy1wcm9k/LnBob3Rvcy92M18w/NDk2MTc4LmpwZw.jpg" alt=""></span>
                                        <span>{{$lead->first_name}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="345955465f1a47445d5f51745556571a575b59">{{$lead->email_address}}</a></td>
                                <td class="py-3 px-2">{{ $lead->address_1 }}</td>
                                <td class="py-3 px-2">{{ $lead->status }}</td>
                                <td class="py-3 px-2">
                                    <div class="inline-flex items-center space-x-3">
                                        <a href="{{url('agent/leads/edit'.$lead->id)}}" title="Edit" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                        <button onclick="openDeleteLeadModal({{$lead->id}})" type="button" data-id="{{ $lead->id }}" class="open-modal hover:underline" data-target="modal-container">delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        const buttons = document.querySelectorAll(".open-modal")
        const deleteButton = document.getElementById('deleteButton')
        const closebutton2 = document.getElementById('closebutton2')
        const closebutton3 = document.getElementById('closebutton3')
        const modal = document.querySelector('.modal')
        let currentId = null;


        function openDeleteLeadModal(id) {
            console.log('function ran')
            buttons.forEach(button => {
                if (button.dataset.id = id) {
                    modal.classList.add('scale-100')
                    currentId = id
                    const url = `leads/${currentId}`
                    deleteButton.href = url

                }
            })
        }

        deleteButton.addEventListener('click', (e) => {
            // modal.classList.remove('scale-100')
            const newUrl = `agent/leads/${currentId}`;
            window.location.href = newUrl;


        })
        closebutton2.addEventListener('click', () => modal.classList.remove('scale-100'))
        closebutton3.addEventListener('click', () => modal.classList.remove('scale-100'))
    </script>

</body>

</html>