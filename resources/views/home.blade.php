<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio | Sandhi Karunia Sugihartana</title>

    <link rel="icon" href="{{ asset('/images/logo.ico') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
        #particles-js {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .typing-effect {
            border-right: 2px solid;
            white-space: nowrap;
            overflow: hidden;
            animation: blink-caret 0.75s step-end infinite;
        }

        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: red; }
        }

        #skills img {
            filter: grayscale(1);
            --transition-1: 0.25s ease;
            transition: var(--transition-1);
        }

        #skills img:hover { filter: grayscale(0); }
    </style>

    @vite('resources/css/app.css')
</head>
<body>

    {{-- Navigation Bar --}}
    <div id="navbar" class="navbar bg-neutral fixed top-0 z-20 transition-all duration-1000 flex justify-center">
        <div class="container w-full max-w-6xl">
            <div class="navbar-start text-neutral-content">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-neutral rounded-box z-[1] mt-4 w-52 p-2 shadow">
                        <li class="text-base font-semibold"><a href="">Home</a></li>
                        <li class="text-base font-semibold"><a href="">About</a></li>
                        <li class="text-base font-semibold"><a href="">Skills</a></li>
                        <li class="text-base font-semibold"><a href="">Projects</a></li>
                    </ul>
                </div>
                    <a href="{{ route('home') }}" class="btn btn-ghost text-xl">
                        <img src="{{ asset('/images/logo.png') }}" alt="" class="hidden md:block md:h-12 md:pr-2">
                        Sandhi Karunia Sugihartana
                    </a>
                </div>
                <div class="navbar-end hidden lg:flex text-neutral-content mr-1">
                    <ul class="menu menu-horizontal px-1">
                        <li id="nav-home" class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]"><a onclick="scrollToHome()">Home</a></li>
                        <li id="nav-about" class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]"><a onclick="scrollToAbout()">About</a></li>
                        <li id="nav-skills" class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]"><a onclick="scrollToSkills()">Skills</a></li>
                        <li id="nav-projects" class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]"><a onclick="scrollToProjects()">Projects</a></li>
                    </ul>
                </div>
        </div>
        
    </div>

    {{-- Home --}}
    <div id="home" class="bg-gray-200 min-h-screen py-48">
        <div id="particles-js"></div>
        <div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 max-w-5xl max-md:max-w-md mx-auto z-10">
            <div class="max-md:order-1 max-md:text-center z-10">
                <h1 class="text-neutral md:text-5xl text-2xl md:leading-10 font-bold z-10">Hi There,</h1>
                <h2 class="text-red-600 mt-5 md:text-5xl text-2xl md:leading-10 font-bold z-10">I'm Sandhi Karunia Sugihartana</h2>
                <p class="mt-6 text-neutral text-2xl mx-10 md:mx-0 font-bold">
                    I Am Into <span id="typing-text" class="typing-effect text-red-600"></span>               
                </p>
                <div class="space-x-4 mt-5 z-10">
                    <a href="https://github.com/Lowl16" target="_blank"
                        class="w-12 h-12 inline-flex items-center justify-center border-none outline-none btn btn-neutral">
                        <img src="{{ asset('/images/github.png') }}" alt="GitHub" width="25px">
                    </a>
                    <a href="https://www.linkedin.com/in/sandhi-karunia-sugihartana" target="_blank"
                        class="w-12 h-12 inline-flex items-center justify-center border-none outline-none btn btn-neutral">
                        <img src="https://www.pagetraffic.com/blog/wp-content/uploads/2022/09/white-linkedin-logo.png" alt="LinkedIn" width="25px">
                    </a>
                    <a href="https://www.instagram.com/sandhi372" target="_blank"
                        class="w-12 h-12 inline-flex items-center justify-center border-none outline-none btn btn-neutral">
                        <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/instagram-white-icon.png" alt="Instagram" width="25px">
                    </a>
                    <a href="{{ asset('/documents/CV Sandhi Karunia Sugihartana.pdf') }}" download>
                        <button class="btn btn-neutral text-gray-100">CV<span class="material-symbols-outlined -mr-1">download</span></button>
                    </a>
                </div>
                <button class="btn btn-neutral text-gray-100 mt-10 md:mt-6" onclick="scrollToAbout()">About Me<span class="material-symbols-outlined -mr-1">arrow_downward</span></button>
            </div>
            <div class="h-48 -mt-6 md:h-[400px] md:mt-0 z-10">
                <img src="{{ asset('images/sandhi.jpg') }}" class="h-full rounded-full md:ml-32 border-8 border-neutral" />
            </div>
        </div>        
    </div>
    
    {{-- About Me --}}
    <div id="about-me" class="bg-neutral min-h-screen py-20">
        <div class="max-w-2xl mx-auto text-center mt-14">
            <h2 class="text-gray-200 text-5xl font-extrabold mb-14">About <span class="text-red-600">Me</span></h2>
        </div>
        <div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 max-w-5xl max-md:max-w-md mx-auto mb-2">
            <div class="h-48 ml-20 -mt-6 md:h-[350px] md:-ml-12 md:mt-0 md:col-start-1 md:row-start-1">
                <img src="{{ asset('images/about-me.png') }}" class="w-full h-full md:object-contain -ml-8" />
            </div>
            <div class="max-md:order-2 max-md:text-center -ml-16 mr-16">
                <h1 class="text-gray-200 md:text-4xl text-2xl md:leading-10 font-bold">I'm Sandhi</h1>
                <p class="mt-6 text-gray-200 mx-10 md:mx-0">
                    An organized and self-motivated person with a strong interest in the world of technology, particularly programming and other IT-related areas. Possessing a vision to collaborate on ideas and infuse them with attention to detail and creativity, while demonstrating the courage to make decisions and overcome challenges.               
                </p>
                <ul class="mt-6 text-neutral list-disc list-inside">
                    <li class="flex space-x-3 mx-16 mt-8 md:mx-0 md:mt-0">
                        <span class="material-symbols-outlined text-gray-200">school</span>
                        <span class="text-base font-medium leading-tight text-gray-200">University : Politeknik Negeri Jakarta</span>
                    </li>
                    <li class="flex space-x-3 mt-3 mx-16 md:mx-0">
                        <span class="material-symbols-outlined text-gray-200">mail</span>
                        <span class="text-base font-medium leading-tight text-gray-200">Email : sandhi372@gmail.com</span>
                    </li>
                    <li class="flex space-x-3 mt-3 mx-16 md:mx-0">
                        <span class="material-symbols-outlined text-gray-200">home</span>
                        <span class="text-base font-medium leading-tight text-gray-200">Address : Bogor, West Java, Indonesia</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    {{-- Skills --}}
    <div id="skills" class="bg-gray-200 min-h-screen pt-16 md:pb-24">
        <section class="w-full flex justify-center items-center p-8">
            <div class="max-w-screen-lg px-4 pb-8 mx-auto">
                <div class="flex justify-center mt-10">
                    <p class="text-5xl font-bold border-x-8 border-t-8 border-neutral inline-block px-5 py-4 pb-6 rounded-t-3xl bg-neutral text-gray-200">My <span class="text-red-600">Skills</span></p>
                </div>
                <div id="skills" class="grid grid-cols-2 gap-8 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6 overflow-x-auto border-8 border-neutral p-10 rounded-3xl justify-center">
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/J/java-logo-7833D1D21A-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/C%2B%2B_logo.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/P/python-logo-A32636CAA3-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/VB.NET_Logo.svg/2048px-VB.NET_Logo.svg.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/H/html5-logo-EF92D240D7-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/C/css3-logo-8724075274-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/J/javascript-logo-E967E87D74-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/J/jquery-logo-CFE6ECE363-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/B/bootstrap-5-logo-85A1F11F4F-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/T/tailwind-css-logo-5AD4175897-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="{{ asset('/images/react.png') }}" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/V/vuejs-logo-17D586B587-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/P/PHP-logo-0B2FDC4529-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/L/laravel-logo-41EC1D4C3F-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/C/codeigniter-logo-3499DA29EB-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/K/kotlin-logo-30C1970B05-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="{{ asset('/images/jetpack-compose.png') }}" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/F/firebase-logo-402F407EE0-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/M/MySQL-logo-F6FF285A58-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/P/postgre-sql-logo-600AD1A66B-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/O/oracle-corporation-logo-F61D1B9D7E-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/G/github-logo-5F384D0265-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/G/gitlab-logo-757620E430-seeklogo.com.png" alt="" class="h-20">
                    </a>
                    <a class="flex items-center justify-center" target="_blank">
                        <img src="https://seeklogo.com/images/G/git-logo-CD8D6F1C09-seeklogo.com.png" alt="" class="h-20">
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Projects -->
    <div class="bg-neutral">
        <section id="projects" class="py-40 min-h-screen max-w-screen-lg mx-auto bg-neutral">
            <div class="container mx-auto px-4">
                <div class="flex justify-center -mt-12">
                    <p class="text-5xl font-bold border-x-8 border-t-8 border-neutral inline-block px-5 py-4 pb-6 rounded-t-3xl bg-neutral text-gray-200 mb-20">My <span class="text-red-600">Projects</span></p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/projects-scientiaignis.png') }}" alt="Project Image" class="w-full h-52 object-fit">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-4">ScientiaIgnis</h3>
                            <p class="text-gray-700">A project-based learning approach that integrates data mining, machine learning, NLP, and IoT technologies.</p>
                            <a href="https://github.com/Lowl16/ScientiaIgnis">
                                <button class="btn btn-neutral text-gray-200 mt-6">Source Code<span class="material-symbols-outlined">code</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/projects-bloomy.png') }}" alt="Project Image" class="w-full h-52 object-fit">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-4">Bloomy</h3>
                            <p class="text-gray-700">Android application as a capstone project in the Mobile Development Cohort for Bangkit Academy 2023 Batch 2.</p>
                            <a href="https://github.com/Lowl16/Bangkit-Capstone-Project-Bloomy-Android-Application">
                                <button class="btn btn-neutral text-gray-200 mt-6">Source Code<span class="material-symbols-outlined">code</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/projects-the-15th-enfution.png') }}" alt="Project Image" class="w-full h-52 object-fit">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-4">The 15th Enfution</h3>
                            <p class="text-gray-700">A website for information and registration for business competitions at The 15th Enfution event at Diponegoro University.</p>
                            <a href="https://github.com/Lowl16/The-15th-Enfution">
                                <button class="btn btn-neutral text-gray-200 mt-6">Source Code<span class="material-symbols-outlined">code</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/projects-pixel-run.png') }}" alt="Project Image" class="w-full h-52 object-fit">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-4">Pixel Run</h3>
                            <p class="text-gray-700">Side-scrolling game with 8-bit graphics inspired by the game Postknight, created using Processing software.</p>
                            <a href="https://github.com/Lowl16/Pixel-Run">
                                <button class="btn btn-neutral text-gray-200 mt-6">Source Code<span class="material-symbols-outlined">code</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/projects-cdc-pnj.png') }}" alt="Project Image" class="w-full h-52 object-fit">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-4">CDC PNJ</h3>
                            <p class="text-gray-700">A static website for the Career Development Center of Politeknik Negeri Jakarta, created using vanilla CSS.</p>
                            <a href="https://github.com/Lowl16/CDC-Politeknik-Indonesia">
                                <button class="btn btn-neutral text-gray-200 mt-6">Source Code<span class="material-symbols-outlined">code</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden flex flex-col justify-center items-center h-full p-6">
                        <a href="https://github.com/Lowl16?tab=repositories">
                            <center><img src="https://seeklogo.com/images/G/github-logo-5F384D0265-seeklogo.com.png" class="h-20 mb-6" alt=""></center>
                            <h3 class="text-2xl font-bold mb-4 text-center text-neutral">More Projects on GitHub</h3>
                        </a>
                    </div>                    
                </div>
            </div>
        </section>
    </div>

    {{-- Footer --}}
    <footer class="footer bg-gray-200 text-neutral p-4 flex items-center justify-between flex-nowrap">
        <aside class="flex items-center">
            <svg
                width="30"
                height="30"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
                class="fill-neutral">
                <path
                d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p class="ml-2">Copyright © 2024 - All right reserved</p>
        </aside>
        <nav class="flex items-center gap-4">
            <a href="https://github.com/Lowl16">
                <svg 
                xmlns="http://www.w3.org/2000/svg" 
                width="40" height="40" viewBox="0 0 24 24" class="fill-neutral">
                    <path d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.17 6.839 9.49.5.09.682-.216.682-.48 0-.237-.01-.866-.015-1.698-2.782.603-3.37-1.34-3.37-1.34-.455-1.155-1.113-1.463-1.113-1.463-.912-.623.07-.61.07-.61 1.006.07 1.536 1.034 1.536 1.034.894 1.53 2.347 1.087 2.918.83.09-.646.35-1.087.636-1.337-2.23-.253-4.573-1.115-4.573-4.96 0-1.095.39-1.992 1.034-2.69-.103-.254-.448-1.275.098-2.656 0 0 .845-.27 2.76 1.03a9.593 9.593 0 0 1 2.49-.335c.845.004 1.698.114 2.49.335 1.915-1.3 2.758-1.03 2.758-1.03.548 1.381.202 2.402.1 2.656.644.698 1.033 1.595 1.033 2.69 0 3.855-2.347 4.703-4.582 4.953.36.31.678.923.678 1.858 0 1.34-.01 2.425-.01 2.755 0 .267.18.578.688.478C19.14 20.165 22 16.413 22 12c0-5.523-4.477-10-10-10z"/>
                </svg>
            </a>
        </nav>
    </footer>

    <script src="{{ asset('/js/particles.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <script>
        function scrollToHome() {
            const target = document.getElementById('home');
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth'
            });
        }

        function scrollToAbout() {
            const target = document.getElementById('about-me');
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth'
            });
        }

        function scrollToSkills() {
            const target = document.getElementById('skills');
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth'
            });
        }

        function scrollToProjects() {
            const target = document.getElementById('projects');
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth'
            });
        }

        let navbar = document.getElementById("navbar");

        let prevScrollpos = window.pageYOffset;

        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            
            if (prevScrollpos > currentScrollPos) {
                navbar.style.top = "0";
            } else {
                navbar.style.top = "-80px";
            }
            
            prevScrollpos = currentScrollPos;
        }
    </script>

    <script>
        const phrases = ["Web Development", "Android Development", "Back-End Development"];
        let currentPhraseIndex = 0;
        let currentCharIndex = 0;
        let deleting = false;

        function typeEffect() {
            const textElement = document.getElementById("typing-text");
            const currentPhrase = phrases[currentPhraseIndex];

            if (deleting) {
                textElement.textContent = currentPhrase.substring(0, currentCharIndex - 1);
                currentCharIndex--;
                if (currentCharIndex === 0) {
                    deleting = false;
                    currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
                }
            } else {
                textElement.textContent = currentPhrase.substring(0, currentCharIndex + 1);
                currentCharIndex++;
                if (currentCharIndex === currentPhrase.length) {
                    deleting = true;
                }
            }
        }

        setInterval(typeEffect, 150);
    </script>
</body>
</html>