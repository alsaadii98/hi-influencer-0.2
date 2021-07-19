<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hi Influencer</title>
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
        <div class="lg:max-w-6xl m-3  lg:mx-auto">
          <div class="flex items-center justify-between">
              <!-- Logo -->
              <div>
               <a href="#" class="flex items-center space-x-3">
                   <img src="imgs/LOGO HI Influencers.svg" class="w-8" alt="Hi influencer">
                   <span class="font-bold text-xl lg:text-2xl " >Hi Influencer</span>
               </a>   
              </div>
              <!-- Primary nav -->
              <!-- <div class="hidden  md:flex space-x-10 ">
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">Home</a>
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">About us</a>
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">What we do</a>
                  <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">Influencers</a>
              </div> -->
              
      </div>
      </nav>
      <!-- Main -->
      <!-- Section-1 -->
      <main class="mt-8 ">
        <div class="overflow-x-auto">
            <div class="flex items-center justify-center font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-300 text-gray-800 uppercase text-sm leading-normal">
                                    <th class="py-3 px-3 text-left">Name</th>
                                    <th class="py-3 px-8 text-left">Message</th>
                                    <th class="py-3 px-6 text-center">Email</th>
                                    <th class="py-3 px-6 text-center">Phone Number</th>
                                    <th class="py-3 px-6 text-center">Company link</th>
                                </tr>
                            </thead>
                            
                            <tbody class="text-gray-700 text-sm font-light">
                                @foreach($emails as $email)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-3 text-left ">
                                        <div>
                                            <span class="font-medium">{{$email->name}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-8 text-left w-96 ">
                                        <div class="">
                                            
                                            <span class="leading-loose text-md" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus fuga non provident? Soluta fugiat magnam dolorum, eaque itaque laboriosam cupiditate dolorem ab non ipsam explicabo doloremque, repellendus rerum nostrum! Quaerat, architecto molestiae atque ducimus officia odio suscipit explicabo eaque at magnam natus voluptate sequi alias omnis voluptas rem vitae. Animi?</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div>
                                            <span class="text-lg" >{{$email->email}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div>
                                            <span class="text-lg" >{{$email->phone}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div>
                                            <span class="text-lg" > Google.com</span>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>  
                 




          
      </main>
    </div>
  

    

</body>

</html>