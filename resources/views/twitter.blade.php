<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Testing Thingy</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>


    <body class="bg-grey-light font-sans">

        <!-- Start: Container -->
        <div class="bg-white">
            <div class="container mx-auto flex items-center py-4">
                <!-- Start:Navigation Links  -->
                <nav class="w-2/5">
                    <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="top-nav-item"><i class="fa fa-bolt fa-lg"></i> Moments</a>
                    <a href="#" class="top-nav-item"><i class="fa fa-bell fa-lg"></i> Notifications</a>
                    <a href="#" class="top-nav-item"><i class="fa fa-envelope fa-lg"></i> Messages</a>
                </nav>
                <!-- End:Navigation Links  -->


                <div class="w-1/5 text-center">
                    <a href="#"><i class="fab fa-twitter fa-lg text-blue"></i></a>
                </div>


                <!-- Start:Other Side -->
                <div class="w-2/5 flex justify-end">
                    <div class="mr-4 relative">
                        <input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search Twitter">
                        <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-grey"></i></span>
                    </div>
                    <div>
                        <a href="#" class="mr-4">
                            <img class="h-8 w-8 rounded-full" src="https://api.adorable.io/avatars/285/11@adorable.png" alt="Avatar">
                        </a>
                    </div>
                    <div>
                        <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet</button>
                    </div>

                </div>
                <!-- End:Other Side -->
            </div>
        </div>
        <!-- End: Container -->

        <div class="hero h-112"></div>

        <!-- Start: Container -->
        <div class="bg-white shadow">
            <div class="container mx-auto flex items-center relative">

                <div class="w-1/4">
                    <img src="https://api.adorable.io/avatars/285/11@adorable.png" alt="Logo" class="rounded-full h-48 w-48 absolute pin-l pin-t -mt-24">
                </div>

                <div class="w-1/2">
                    <ul class="list-reset flex">
                        <li class="text-center py-3 px-4 border-b-2 border-solid border-teal">
                            <a class="text-grey-darker hover:no-underline" href="#">
                                <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                                <div class="text-lg tracking-tight font-bold text-teal">50</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a class="text-grey-darker hover:no-underline" href="#">
                                <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                                <div class="text-lg tracking-tight font-bold hover:text-teal">4</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a class="text-grey-darker hover:no-underline" href="#">
                                <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                                <div class="text-lg tracking-tight font-bold hover:text-teal">12</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a class="text-grey-darker hover:no-underline" href="#">
                                <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                                <div class="text-lg tracking-tight font-bold hover:text-teal">9</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a class="text-grey-darker hover:no-underline" href="#">
                                <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                                <div class="text-lg tracking-tight font-bold hover:text-teal">1</div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-1/4 flex justify-end items-center">
                    <div class="mr-6">
                        <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Following</button>
                    </div>

                    <div>
                        <a href="#" class="text-grey-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
                    </div>
                </div>


            </div>
        </div>
        <!-- End:Container -->


        <!-- Start:Container -->

        <div class="container mx-auto mt-3 flex text-sm leading-normal">
            <div class="w-1/4 pr-6 mt-8 mb-4">
                <h1><a href="#" class="text-black">Christian Jurilla</a></h1>
                <div class="mb-4"><a href="#" class="text-grey-darker">@christianjurilla</a></div>


                <div class="mb-4">Not a man but rather a cow</div>

                <div class="mb-2"> <i class="fa fa-link fa-lg text-grey-darker mr-1"></i><a href="#">TailwindCSS</a> </div>

                <div class="mb-4"> <i class="fa fa-calendar fa-lg text-grey-darker mr-1"></i><a href="#">Joined August 2018</a> </div>

                <div class="mb-2">
                    <button class="bg-teal rounded-full text-white font-medium hover:bg-teal-dark py-2 w-full h-10 px-4">Tweet to Christian</button>
                </div>


                <div class="mb-4">
                    <i class="fa fa-user fa-lg text-grey-dark mr-1"></i>
                    <a href="#">27 Followers you know</a>
                </div>


                <div class="mb-4">
                    <a href="#"><img src="https://api.adorable.io/avatars/285/1@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/2@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/3@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/4@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/5@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/6@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/7@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/8@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/9@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/10@adorable.png" alt="Avatar" class="rounded-full h-12 w-12"></a>
                </div>


                <div class="mb-4">
                    <i class="far fa-image fa-lg text-grey-dark mr-1"></i>
                    <a href="#">Photos and Videos</a>
                </div>

                <div class="mb-4">
                    <a href="#"><img src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="Avatar" class="mr-1 mb-1 w-20 h-20"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/30@adorable.png" alt="Avatar" class="mr-1 mb-1 w-20 h-20"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/31@adorable.png" alt="Avatar" class="mr-1 mb-1 w-20 h-20"></a>
                    <a href="#"><img src="https://api.adorable.io/avatars/285/32@adorable.png" alt="Avatar" class="mr-1 mb-1 w-20 h-20"></a>
                </div>


            </div>

            <div class="w-1/2 bg-white mb-4">
                <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                    <a href="#" class="text-black mr-6">Tweets</a>
                    <a href="#" class="mr-6">Tweets & Replies</a>
                    <a href="#">Media</a>
                </div>


                <!-- Start:Main Tweet -->
                <div class="flex border-b border-solid border-grey-light">
                    <div class="w-1/8 text-right pl-3 pt-3">
                        <div><i class="fas fa-thumbtack text-teal mr-2"></i></div>
                        <div>
                            <a href="#"><img src="https://api.adorable.io/avatars/285/33@adorable.png" class="rounded-full h-12 w-12 mr-2" alt="Avatar"></a>
                        </div>
                        <!-- <img src="https://api.adorable.io/avatars/285/32@adorable.png" alt="Logo"> -->
                    </div>

                    <div class="w-7/8 p-3 pl-0">
                        <div class="text-xs text-grey-dark">
                            Pinned Tweet
                        </div>

                        <div class="flex justify-between">
                            <div>
                                <span class="font-bold">I hate you all</span>
                                <span class="text-grey-dark">@christianjurilla</span>
                                <span class="text-grey-dark">&middot;</span>
                                <span class="text-grey-dark">13 Apr 2019</span>
                            </div>

                            <div>
                                <a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>


                        <div>
                            Amet facilis ducimus ratione tempora reprehenderit ullam nulla! Doloribus atque quos animi accusamus distinctio Vero doloribus cumque facere ducimus odit Corrupti eius nostrum distinctio natus provident. Nihil eveniet voluptatum totam
                        </div>


                        <div class="pt-2 pb-2">
                            <span class="mr-8">
                                <a class="text-grey-dark hover:no-underline hover:text-blue-light" href="">
                                    <i class="fa fa-comment fa-lg mr-2"></i> 9
                                </a>
                            </span>
                            <span class="mr-8">
                                <a class="text-grey-dark hover:no-underline hover:text-green" href="">
                                    <i class="fa fa-retweet fa-lg mr-2"></i> 29
                                </a>
                            </span>
                            <span class="mr-8">
                                <a class="text-grey-dark hover:no-underline hover:text-red" href="">
                                    <i class="fa fa-heart fa-lg mr-2"></i> 135
                                </a>
                            </span>
                            <span class="mr-8">
                                <a class="text-grey-dark hover:no-underline hover:text-teal" href="">
                                    <i class="fa fa-envelope fa-lg mr-2"></i>
                                </a>
                            </span>
                        </div>

                    </div>
                </div>
                <!-- End:Main Tweet -->
            </div>

            <!-- Start:Third Column -->
            <div class="w-1/4 pl-4">
                <div class="bg-white p-3 mb-3">
                    <div>
                        <span class="text-lg font-bold">Who to follow</span>
                        <span>&middot;</span>
                        <span><a href="#" class="text-xs">Refresh</a></span>
                        <span>&middot;</span>
                        <span><a href="#" class="text-xs">View All</a></span>
                    </div>


                    <div class="flex border-b border-solid border-grey-light">

                        <div class="py-2">
                            <a href="#"><img src="https://api.adorable.io/avatars/285/33@adorable.png" class="rounded-full h-12 w-12" alt="Icon"></a>
                        </div>

                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <a href="#" class="font-bold text-black">Testing</a>
                                    <a href="#" class="text-grey-dark">@testingnerd</a>
                                </div>


                                <div><a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a></div>
                            </div>

                            <div>
                                <button class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b border-solid border-grey-light">
                        <div class="py-2">
                            <a href="#"><img src="https://api.adorable.io/avatars/285/33@adorable.png" class="rounded-full h-12 w-12" alt="Icon"></a>
                        </div>

                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <a href="#" class="font-bold text-black">Testing</a>
                                    <a href="#" class="text-grey-dark">@testingnerd</a>
                                </div>


                                <div><a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a></div>
                            </div>

                            <div>
                                <button class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b border-solid border-grey-light">
                        <div class="py-2">
                            <a href="#"><img src="https://api.adorable.io/avatars/285/33@adorable.png" class="rounded-full h-12 w-12" alt="Icon"></a>
                        </div>

                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <a href="#" class="font-bold text-black">Testing</a>
                                    <a href="#" class="text-grey-dark">@testingnerd</a>
                                </div>


                                <div><a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a></div>
                            </div>

                            <div>
                                <button class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="flex border-b border-solid border-grey-light">
                        <div class="py-4">
                            <a href="#" class="p-1">
                                <img src="https://api.adorable.io/avatars/285/33@adorable.png" alt="Icon" class="rounded h-6 w-6">
                            </a>
                        </div>

                        <div class="pl-2 py-2 w-full">
                            <div class="flex justify-between">
                                <div><a class="font-bold text-black" href="#">Find people you know</a></div>
                            </div>
                            <div class="text-xs">Import your contacts from Outlook</div>
                        </div>
                    </div>


                    <div class="pt-2">
                        <a href="#" class="text-xs">Connect other address book</a>
                    </div>

                </div>


                <div class="bg-white p-3 mb-3">

                    <div class="py-2">
                        <h2>Worldwide Trends</h2>
                    </div>


                    <div class="mb-2">
                        <a href="#" class="text-base text-teal">#HelloWorld</a>
                        <div class="text-xs font-hairline text-grey-dark">25 Tweets</div>
                    </div>

                    <div class="mb-2">
                        <a href="#" class="text-base text-teal">#HelloWorld</a>
                        <div class="text-xs font-hairline text-grey-dark">25 Tweets</div>
                    </div>

                    <div class="mb-2">
                        <a href="#" class="text-base text-teal">#HelloWorld</a>
                        <div class="text-xs font-hairline text-grey-dark">25 Tweets</div>
                    </div>


                </div>


                <div class="flex flex-row flex-wrap p-3">
                    <div class="text-xs mr-2">
                        &copy; 2019 Twitter
                    </div>

                    <div class="text-xs mr-2">
                        <a href="#" class="text-grey-dark hover:text-teal">About</a>
                    </div>

                    <div class="text-xs mr-2">
                        <a href="#" class="text-grey-dark hover:text-teal">Help Center</a>
                    </div>

                    <div class="text-xs mr-2">
                        <a href="#" class="text-grey-dark hover:text-teal">Terms</a>
                    </div>
                    <div class="text-xs mr-2">
                        <a href="#" class="text-grey-dark hover:text-teal">Privacy Policy</a>
                    </div>
                    <div class="text-xs mr-2">
                        <a href="#" class="text-grey-dark hover:text-teal">Cookies</a>
                    </div>
                    <div class="text-xs mr-2">
                        <a href="#" class="text-grey-dark hover:text-teal">Ads Info</a>
                    </div>
                </div>




            </div>
            <!-- End:Third Column -->

        </div>
        <!-- End:Container -->

    </body>
</html>
