<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ str_replace('-', ' ', config('app.name')) ?? 'Simple CRM' }}</title>
</head>
<body class="bg-gray-200">
<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen translate-x-0" aria-label="Sidebar">
    <div class="h-full py-4 overflow-y-auto bg-gray-900 dark:bg-gray-800 flex flex-col justify-between">
        <div class="text-2xl font-normal mb-2 pb-2 text-white text-center">CRM</div>
        <ul class="space-y-2 font-medium flex flex-col flex-1">
            <li>
                <a href="#"
                   class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#cccc" class="bi bi-house"
                         viewBox="0 0 16 16">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#cccc" class="bi bi-people"
                         viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                    </svg>
                    <span class="ms-3">Users</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#cccc"
                         class="bi bi-person-vcard" viewBox="0 0 16 16">
                        <path
                            d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                        <path
                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                    </svg>
                    <span class="ms-3">Clients</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#cccc"
                         class="bi bi-file-earmark" viewBox="0 0 16 16">
                        <path
                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg>
                    <span class="ms-3">Projects</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#cccc" class="bi bi-list-task"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"/>
                        <path
                            d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"/>
                        <path fill-rule="evenodd"
                              d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"/>
                    </svg>
                    <span class="ms-3">Tasks</span>
                </a>
            </li>
        </ul>
        <div class="font-medium">
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                     class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                    <path fill-rule="evenodd"
                          d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
            </a>
        </div>
    </div>
</aside>
<header class="flex items-center justify-end bg-white py-5 px-20 w-full">
    <div class="flex items-center justify-center space-x-5 relative">
        <a href="#" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#222222" class="bi bi-bell-fill"
                 viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
            </svg>
        </a>
        <button class="cursor-pointer" onclick="dropDownMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#222222" class="bi bi-person-fill"
                 viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
        </button>
        <div id="dropdown-menu"
             class="hidden absolute flex top-10 right-0 flex-col items-center bg-white border-gray-900 w-40 text-gray-700 border justify-start dropdown-menu">
            <a href="#" class="self-start py-3 px-5 w-full hover:bg-gray-300 border-b border-gray-900">Profile</a>
            <a href="#" class="self-start py-3 px-5 w-full hover:bg-gray-300">Logout</a>
        </div>
    </div>
</header>

{{ $slot }}

</body>
</html>
