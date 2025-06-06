@section('content')
@include('layouts.navbar') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bank BKC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset('css/warna.css') }}">
    @vite('resources/css/app.css')
    <style>
        .action-btn {
        z-index: 1;
        position: relative;
        font-size: inherit;
        font-family: inherit;
        color: white;
        outline: none;
        border: none;
        background: none; /* remove background if hover is only for icon */
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        }

        /* Style for icon container */
        .icon-hover {
        background-color: white;
        padding: 1em;
        border-radius: 0.75rem;
        width: 75px;
        height: 75px;
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        /* Hover effect only inside the icon */
        .icon-hover::after {
        content: '';
        position: absolute;
        top: -50%;
        bottom: -50%;
        width: 1.25em;
        background-color: hsla(0, 100%, 100%, 9.2);
        transform: translate3d(-525%, 0, 0) rotate(35deg);
        z-index: 1;
        }

        .icon-hover:hover::after {
        transition: transform 0.45s ease-in-out;
        transform: translate3d(200%, 0, 0) rotate(35deg);
        }

        .icon-hover img {
        position: relative;
        z-index: 1;
        }
    </style>
</head>
<body class="bg-gray-200 font-sans mb-20 px-7 py-8 shadow-sm">
    <h1 class="text-center mb-5 font-extrabold text-[#13545C] text-xl">Account</h1>
    <div class="h-auto rounded-xl overflow-hidden flex flex-col">
        <a class="bg-white h-auto px-4 py-4 flex" href="">
            <img src="{{ asset('images/settings-svgrepo-com.svg')}}" alt="" class="w-5 mr-5">
            <p class="text-bold">
                Account Settings
            </p>
        </a>
        <hr>
        <a class="bg-white h-auto px-4 py-4 flex" href="">
            <img src="{{ asset('images/log-out-svgrepo-com.svg') }}" alt="" class="w-5 mr-5 red">
            <p class="text-bold">Log Out</p>
        </a>
    </div>

</body>
</html>