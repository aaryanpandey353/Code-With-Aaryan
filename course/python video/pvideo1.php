<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta charSet="utf-8" />
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    
    <title>Using Modules & Pip In Python | Python Tutorials For Absolute Beginners In Hindi #2</title>
    <meta name="description" />
    <link rel="icon" href="https://huntingcoder.mehttps://huntingcoder.mehttps://huntingcoder.me/img/logo-blue.png" />
<meta name="next-font-preconnect" />
<link rel="preload" href="https://huntingcoder.me/css/c2a8c86eebdcf29d.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/c2a8c86eebdcf29d.css" data-n-g="" />
    <link rel="preload" href="https://huntingcoder.me/css/470c5e8db7cdc7e9.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/470c5e8db7cdc7e9.css" data-n-p="" />
    <link rel="preload" href="https://huntingcoder.me/css/ef46db3751d8e999.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/ef46db3751d8e999.css" data-n-p="" /><noscript data-n-css=""></noscript>
</head>

<body>
    <div id="__next">
        <div class=""
            style="position:fixed;top:0;left:0;height:2px;background:transparent;z-index:99999999999;width:100%">
            <div class="" style="height:100%;background:purple;transition:all 500ms ease;width:0%">
                <div
                    style="box-shadow:0 0 10px purple, 0 0 10px purple;width:5%;opacity:1;position:absolute;height:100%;transition:all 500ms ease;transform:rotate(3deg) translate(0px, -4px);left:-10rem">
                </div>
            </div>
        </div>
        <div class="w-full z-10 sticky bg-white top-0 border-b border-grey-light shadow-md">
            <div class="w-full flex flex-wrap items-center lg:justify-between mt-0 py-4">
                <div
                    class="px-0 lg:pl-4 flex items-center lg:mx-4 cursor-pointer text-purple-700 text-xl font-bold mx-3">
                    <a href="../../welcome.php">CodeWithAaryan</a></div>
                <div class="flex items-center md:hidden">
                    <div class="text-purple-700 text-md font-semibold">Menu</div><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-purple-700 mt-1"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                        </path>
                    </svg>
                </div><button
                    class="md:hidden text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1 absolute right-3 md:right-12">Login</button>
                <div class="w-full flex-grow lg:flex lg:flex-1 lg:content-center lg:justify-end lg:w-auto h-0 lg:h-auto overflow-hidden mt-2 lg:mt-0 z-20 transition-all"
                    id="nav-content">
                    <ul class="flex items-center flex-col lg:flex-row">
                        <div id="search-toggle" class="search-icon cursor-pointer px-6 hidden"><svg
                                class="fill-current pointer-events-none text-grey-darkest w-4 h-4 inline"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg></div>
                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a href="../../welcome.php">Home</a>
                        </li>
                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a
                                href="../../welcomevideo.php">Courses</a></li>
                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a
                                href="../../welcomecontact.php">Contact</a></li>
                    </ul>
                    
                </div>
            </div>
            <hr />
            
            <div class="bg-purple-100 text-center shadow-lg absolute w-full hidden mt-1 md:hidden">
                <ul>
                    <li class="pt-4 text-purple-500 font-bold"><a href="/">Home</a></li>
                    <li class="pt-4 text-purple-500 font-bold"><a href="/videos/">Courses</a></li>
                    <li class="pt-4 text-purple-500 font-bold pb-5"><a href="/contact/">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="Toastify"></div>
        <section class="mx-2 justify-center align-middle">
            <div class="flex flex-wrap lg:-mx-1 xl:-mx-1">
                <div class="w-full border lg:my-1 lg:px-1 lg:w-2/3 xl:my-1 xl:px-1 xl:w-2/3 mx-auto">
                    <div class="h-[30vh] lg:h-[30vh] mx-auto xl:h-[70vh]"><iframe title="YouTube Video"
                            src="https://www.youtube.com/embed/KbYFYZrRzqI" frameBorder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            class="w-full h-full"></iframe></div>
                </div>
                <div class="mx-auto w-full xl:text-lg font-medium pt-3 px-2 rounded-t-lg lg:w-1/3 overflow-x-hidden">
                    <div class="flex items-center font-karla font-medium md:hidden">Show
                        <!-- --> Course Contents
                        <!-- --><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                            class="ml-2 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="my-0 lg:h-[30vh] xl:h-[64vh] w-full lg:my-1 xl:my-1 lg:px-3 transition-all overflow-scroll overflow-x-hidden h-0">
                        <div class="px-2 mt-4 flex lg:px-8 py-2 bg-white rounded-lg shadow-lg"><input type="checkbox"
                            name="" id="" class="mr-2" />
                           <a href="../../course/python video/index.php"> <div class="mt-4 cursor-pointer">Downloading Python and Pycharm Installation</div>
                        </div></a>
                        <div class="px-2 mt-4 flex lg:px-8 py-2 bg-white rounded-lg shadow-lg"><input type="checkbox"
                                name="" id="" class="mr-2" />
                            <a href="../../course/python video/pvideo1.php"><div class="mt-4 cursor-pointer">Using Modules & Pip In Python | Python Tutorials For Absolute Beginners In Hindi #2</div></a>
                        </div>
                        <div class="px-2 mt-4 flex lg:px-8 py-2 bg-white rounded-lg shadow-lg"><input type="checkbox"
                                name="" id="" class="mr-2" />
                            <a href="../../course/python video/pvideo2.php"><div class="mt-4 cursor-pointer">Writing Our First Python Program | Python Tutorials For Absolute Beginners In Hindi #3</div></a>
                        </div>
                            
                        
                    </div>
                </div>
            </div>
        </section>
        <nav class="mx-2 px-3 tabs flex sm:flex-row overflow-x-scroll lg:overflow-x-hidden"><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium border-b-2 border-purple-700">Overview</button><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium false border-purple-700">Q&amp;A</button><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium false border-purple-700">Downloads</button><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium false border-purple-700">Announcements</button>
        </nav>
        <div id="panels">
            <div class="lg:w-2/3 mx-4 lg:mx-8 my-2 min-h-screen">
                <h1 class="text-2xl my-4 lg:text-3xl flex font-semibold">Using Modules & Pip In Python | Python Tutorials For Absolute Beginners In Hindi #2
                    <!-- -->
                </h1>
                <div class="cont font-karla text-lg">
                    <div class="cont font-karla text-lg" style="height: auto !important;"><p>Sometimes we have to use someone else's code in our program because it saves us a lot of time. Today, we will learn a technique to use code that is not written by us but will enhance the quality of our program, save us time and energy, and of course, it is legal and free.</p>
                        <p>Let us understand what utilities like modules and pip are,</p>
                        <p><strong>Module </strong>– Module or library is a file that contains definitions of several functions, classes, variables, etc., which is written by someone else for us to use.</p>
                        <p><strong>Pip </strong>– Pip is a package manager for Python, i.e., pip command can be used to download any external module in Python. It is something that helps us to get code written by someone else.</p>
                        <p>We can install a module in our system by using the pip command :</p>
                        <ul>
                        <li>Open cmd or Powershell in your system.</li>
                        <li>And then, type pip install module_name and press enter.</li>
                        <li>Once you do that, the module will start downloading and will install automatically on your computer.</li>
                        </ul>
                        <p>For example, for installing flask, I will do this:</p>
                        <p><img class="img-fluid img-responsive mx-auto d-block" src="https://api.codewithharry.com/media/videoSeriesFiles/courseFiles/python-tutorials-for-absolute-beginners-3/2-1.jpg" width="670" height="377"></p>
                        <p>After pressing the enter key, you will see something like this:</p>
                        <p><img class="img-fluid img-responsive mx-auto d-block" src="https://api.codewithharry.com/media/videoSeriesFiles/courseFiles/python-tutorials-for-absolute-beginners-3/2-2.jpg" width="662" height="372"></p>
                        <p>After installing any module in Python, you can import it into your Python program. For example, I will type "import flask" at the top of my Python program to use the flask.</p>
                        <div class="code-toolbar"><pre class="language-python" tabindex="0"><code class="language-python"><span class="token keyword">import</span> flask</code></pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copy</span></button></div></div></div>
                        <p>There are two types of modules in Python:</p>
                        <ul>
                        <li>
                        <h5>Built-in Modules:</h5>
                        </li>
                        </ul>
                        <p style="padding-left: 80px;">Built-in modules are pre-installed in Python, i.e., there is no need to download them. These modules come with the python interpreter itself. For example– random, os, etc.</p>
                        <p style="padding-left: 80px;">To get a complete list of built-in modules of python, head over to the following page of the official documentation - <a href="https://docs.python.org/3/py-modindex.html" target="_blank" rel="noopener">https://docs.python.org/3/py-modindex.html</a>.</p>
                        <ul>
                        <li>
                        
            </div>
            <div class="flex mx-4 lg:mr-16 my-3 px-3 justify-between lg:w-2/3"><a href="../../course/python video/pvideo1.php"><button
                    class="text-white w-20 cursor-pointer justify-center bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1 disabled:bg-gray-200 disabled:text-gray-400 disabled:cursor-default">
                    Previous </button></a><a href="../../course/python video/pvideo2.php"><button
                    class="text-white w-20 cursor-pointer justify-center bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1 disabled:bg-gray-200 disabled:text-gray-400 disabled:cursor-default">
                    Next </button></div></a>
        </div>
        <footer class="text-gray-600 bg-white body-font ">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <div class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"><img
                        src="https://huntingcoder.mehttps://huntingcoder.me/img/logo-blue.png" class="rounded h-12" />
                    <div class="ml-3 text-xl">CodeWithAaryan</div>
                </div>
                <p
                    class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 mt-4 md:mt-2 mb-2 md:mb-0 text-center">
                    Copyright © 2022 CodeWithAaryan.com</p>
                <div class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start"
                    style="align-items:center"><a href="https://www.facebook.com/CodeWithAaryan353/" target="_blank"
                        rel="noreferrer" class="text-gray-500"><svg fill="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg></a><a href="https://twitter.com/AaryanCode" target="_blank" rel="noreferrer"
                        class="ml-3 text-gray-500"><svg fill="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg></a><a href="https://www.instagram.com/code_with_aaryan/" target="_blank" rel="noreferrer"
                        class="ml-3 text-gray-500"><svg fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg></a><a href="https://github.com/CodeAaryan" target="_blank" rel="noreferrer"
                        class="ml-3 text-gray-500"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 1024 1024" class="text-xl" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z">
                            </path>
                        </svg></a></div>
            </div>
        </footer>
    </div>
</body>

</html>