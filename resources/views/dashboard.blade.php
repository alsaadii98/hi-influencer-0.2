<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="style/glide.core.min.css">
  <link rel="stylesheet" href="style/glide.theme.min.css">
  <link rel="icon" href="imgs/LOGO HI Influencers.svg">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body class=" bg-gray-200 fadeIn">
     <!-- NavBar -->
     <nav class="mt-5 px-2">
        <div class="lg:max-w-7xl  lg:mx-auto">
          <div class="flex items-center justify-between">
              <!-- Logo -->
              <div>
               <a href="#" class="flex items-center space-x-3">
                   <img src="imgs/LOGO HI Influencers.svg" class="w-8" alt="Hi influencer">
                   <span class="font-mediem text-lg lg:text-xl " >Hi Influencer Dashboard</span>
               </a>   
              </div>
              <!-- Primary nav -->
              <!-- <div class="hidden  md:flex space-x-10 ">
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">Home</a>
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">About us</a>
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">What we do</a>
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">Influencers</a>
              </div> -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <div class="flex space-x-3 items-center bg-red-500 py-3 px-5 rounded-lg text-white font-light shadow-lg hover:bg-red-600 hover:transition duration-300 ease-in-out" >
                        <span>Logout</span>
                        <div>
                            <svg class="w-5 h-5 stroke-current text-white " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        </div>
                        
                    </div>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
          </div>     
      </div>
      </nav>
      <!-- Main -->
      <!-- Section-1 -->
     <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-200 flex  justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-red-500 text-white text-left uppercase text-sm leading-normal">
                                <th class="py-3 px-3 w-24 text-left">ID</th>
                                <th class="py-3 px-3 text-left">Name</th>
                                <th class="py-3 px-3 text-left">Message</th>
                                <th class="py-3 px-3 text-left">Email</th>
                                <th class="py-3 px-3 text-left">Phone Number</th>
                                <th class="py-3 px-3 text-left">Company link</th>
                                <th class="py-3 px-3 text-left">Date</th>
                                

                            </tr>
                        </thead>
                        <tbody class="text-gray-600  text-sm font-light">
                            @foreach($emails as $email)
                                <tr class="border-b  text-left border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 w-24   whitespace-nowrap">
                                        <span class="font-sm ">{{$email->id}}</span>
                                    </td>
                                    <td class="py-3 px-3 w-32 ">
                                        <span class="font-sm">{{$email->name}}</span>
                                    </td>
                                    <td class="py-3 px-3 w-96 ">
                                        <span class="text-md leading-relaxed" >{{$email->info}}</span>
                                    </td>
                                    <td class="py-3 px-3 w-auto ">
                                        <span class="text-sm " >{{$email->email}}</span>
                                    </td>
                                    <td class="py-3 px-3 ">
                                        <span class="text-sm" >{{$email->phone}}</span>
                                    </td>
                                    <td class="py-3 px-3 ">
                                        <span class="text-sm" >{{$email->link}}</span>
                                    </td>
                                    <td class="py-3 px-3 ">
                                        <span class="text-sm" >{{$email->created_at}}</span>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>  
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 shadow-none py-3 outline-none">
        <span>
            {{$emails->links()}}
        </span>
    </div>
    

</body>

</html>