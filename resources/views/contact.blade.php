<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hi Influencer</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/app.css">
  
  <link rel="icon" href="imgs/LOGO HI Influencers.svg">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-200 fadeIn ">
  <!-- NavBar -->
  <div id="topPage">
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
            <div class="hidden  lg:flex space-x-10 ">
                <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">Home</a>
                <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">About us</a>
                <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">What we do</a>
                <a class="text-xl p-2 font-medium hover:text-red-500 ease-in duration-150 focus:outline-none " href="#">Influencers</a>
            </div>
            <!-- Mobile btn  -->
            <div class="flex items-center lg:hidden">
                <button id="Mobile-btn" class="focus:outline-none ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" style="fill:rgba(211, 82, 82, 1);"><path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z"></path></svg>
                </button>
            </div>

        </div>
      </div>
      <!-- Mobile menu  -->
      <div id="Mobile-menu" class="mt-2 bg-gray-300 rounded-xl md:hidden hidden ">
        <a class="text-md block py-4 px-2 hover:bg-red-500 rounded-xl focus:outline-none  hover:text-white ease-in duration-150 focus:outline-none " href="#">Home</a>
        <a class="text-md block py-4 px-2 hover:bg-red-500 rounded-xl focus:outline-none  hover:text-white ease-in duration-150 focus:outline-none " href="#">About us</a>
        <a class="text-md block py-4 px-2 hover:bg-red-500 rounded-xl focus:outline-none  hover:text-white ease-in duration-150 focus:outline-none " href="#">What we do</a>
        <a class="text-md block py-4 px-2 hover:bg-red-500 rounded-xl focus:outline-none  hover:text-white ease-in duration-150 focus:outline-none " href="#">Influencers</a>
        <div class="flex items-center justify-center space-x-5 p-5">
          {{-- class="w-10  fill-current text-gray-800 hover:text-red-500 duration-150 ease-in  " --}}
            <a href="http://www.instagram.com/hiinfluencer.iq">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-10  fill-current text-gray-800 hover:text-red-500 duration-150 ease-in  " viewBox="0 0 24 24" ;transform: ;msFilter:;"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>
            </a>
         <a href="https://www.facebook.com/hiinfluencer.iq/">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10  fill-current text-gray-800 hover:text-red-500 duration-150 ease-in  " viewBox="0 0 24 24"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
         </a> 
         <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10  fill-current text-gray-800 hover:text-red-500 duration-150 ease-in  " viewBox="0 0 24 24"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h16c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z M8.339,18.337H5.667 v-8.59h2.672V18.337z M7.003,8.574c-0.856,0-1.548-0.694-1.548-1.548s0.691-1.548,1.548-1.548c0.854,0,1.548,0.693,1.548,1.548 S7.857,8.574,7.003,8.574z M18.338,18.337h-2.669V14.16c0-0.996-0.018-2.277-1.388-2.277c-1.39,0-1.601,1.086-1.601,2.207v4.248 h-2.667v-8.59h2.56v1.174h0.037c0.355-0.675,1.227-1.387,2.524-1.387c2.704,0,3.203,1.778,3.203,4.092V18.337z"></path></svg>
         </a>  
      </div>
    
  </nav>
  </div>
  <!-- Main -->
  <!-- Section-1 -->
  <main class="lg:mt-10 mt-5  ">
    <div class="lg:max-w-6xl m-5  lg:mx-auto">
      <div id="MainColor"
        class="rounded-3xl flex flex-col  lg:flex-row justify-between overflow-hidden lg:overflow-visible items-center  shadow-xl ">
        <!-- Info -->
        <div class="   lg:mx-10 my-10 text-center md:text-center lg:text-left">
        <h1 id="fontColor" class="  font-bold py-1 text-4xl lg:text-5xl">
        Got a question?
        </h1>
        <p class="font-light pb-3 mx-5 lg:mx-0  text-md  lg:text-2xl text-white lg:text-justify">
             We’d love to answer all your questions about our service, and how we can work together to help you achieve your influencers marketing goals.
        </p>

        </div>
        <!-- illustration -->
        <div class="ml-20 md:mt-5">
          <img src="imgs\Card-icon\Artboard 1.svg" class="w-screen" alt="Hi Influencer">
        </div>
      </div>
    </div>
  </main>
  <!-- Section-2 -->
  <main class="mt-10 lg:mt-20">
    <div class="lg:max-w-6xl m-5  lg:mx-auto">
    <h1 id="fontColor" class="text-center font-bold text-4xl lg:text-5xl">Let's Get In Touch</h1> 
    <p class=" mt-5 text-center text-lg lg:text-2xl leading-loose tracking-wide	">
    Submit the form below, tell us a bit more about your business, and we’ll be in touch shortly
    </p>
    <div class="relative mt-20 mx-auto">
      <div class=" bg-white flex justify-center mx-auto  absolute inset-x-0 -top-12 md:-top-13 lg:-top-14 w-28 h-28 rounded-full ">
            <button>
              <a href="">
                <img  src="imgs/LOGO HI Influencers.svg" class="w-10" alt="Hi-Influncer">
              </a>
            </button>
            
          </div>
          
        <!--Form-->
        <form action="/contact" method="POST">
        @csrf
        <div class=" bg-white rounded-2xl shadow-xl lg:p-16 p-10   mt-5 flex flex-col justify-center">
          
          <div class="md:grid grid-cols-2 md:space-x-10  ">
            <div class="flex flex-col" action="">
              <label class="block pb-2 text-lg text-red-600 " for="Name">Name *</label>
              <input name="name" class="block  bg-gray-100 p-3 rounded-lg cursor-auto focus:outline-none focus:ring-2 focus:ring-red-400 " type="text"
                placeholder="Enter your name">
                @if($errors->has("name"))
              

                {{$errors->first("name")}}
            
                @endif
            </div>
            <div class="flex flex-col" action="">
              <label class="block pb-2 text-lg text-red-600 " for="Email">Email Address *</label>
              <input name="email" class="block  bg-gray-100 p-3 rounded-lg cursor-auto focus:outline-none focus:ring-2 focus:ring-red-400 placeholder-gray-400 " type="text"
                placeholder="Enter your Email">
                @if($errors->has("email"))
              

                {{$errors->first("email")}}
            
            @endif
            </div>
            
          </div>
          <div class="md:grid grid-cols-2 md:space-x-10 ">
            <div class="flex flex-col" action="">
              <label class="block pb-2 text-lg text-red-600 " for="Name">Phone Number *</label>
              <input name="phone" placeholder="Enter you Phone Number" class="block  bg-gray-100 p-3 rounded-lg cursor-auto focus:outline-none focus:ring-2 focus:ring-red-400 placeholder-gray-400 " type="text">
              @if($errors->has("phone"))
              

                {{$errors->first("phone")}}
            
            @endif
            </div>
            <div class="flex flex-col" action="">
              <label class="block pb-2 text-lg text-red-600 " for="Email">Company website or social media *</label>
              <input name="link" class="block  bg-gray-100 p-3 rounded-lg cursor-auto focus:outline-none focus:ring-2 focus:ring-red-400 placeholder-gray-400 " type="text"
                placeholder="Enter a link">
          
              </div>
          </div>
          <div>
            <div class="flex flex-col" action="">
              <label class="block pb-2 text-lg text-red-600 " for="Name">Tell us how can we help you? *</label>
              <div class="mt-1">
                <textarea name="info"  rows="3" class="resize-y w-full rounded-lg p-3 bg-gray-100 p-3 rounded-lg cursor-auto focus:outline-none focus:ring-2 focus:ring-red-400 placeholder-gray-400"
                  placeholder="Write your message"></textarea>
                  @if($errors->has("info"))
              

                {{$errors->first("info")}}
            
            @endif
                </div>
            </div>
          </div>
          <!-- Submit-btn -->
          <div class="flex justify-center mt-8">
            <button id="bg-color-main"class="px-14 py-3 rounded-full shadow-md 
                  focus:outline-none hover:shadow-xl hover:text-white ease-in text-2xl
                  text-white duration-200" type="submit" >Submit</button>
          </div>
        </div>
        </form>
    </div>
        <h1 id="err"></h1>
    <div class="mt-14 flex flex-col md:flex-row items-center justify-center md:space-x-10">
      <h1 id="fontColor" class="text-center  text-2xl lg:text-4xl">Or you can give us a call at</h1> 
      <p class="  text-center text-3xl lg:text-4xl leading-loose tracking-wide	">
      +964 772 644 4088
      </p>
    </div>
      
    </div>
  </main>
  <!-- Section 3 -->
  <main class="mt-10 lg:mt-20">
    <div class="lg:max-w-6xl m-5  lg:mx-auto">
      <div class=" mt-10 my-5  items-center space-y-5 lg:spcae-y-0 ">
        <!-- text -->
        <h1 id="fontColor" class="text-center font-bold text-4xl lg:text-5xl">Visit Us</h1> 
    <p class=" mt-5 text-center text-lg lg:text-2xl leading-loose tracking-wide	">
    You can visit us at the address below
    </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1178.884095581202!2d44.44876473105302!3d33.30867692610371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1557816258dbf97d%3A0xf1a8cbffa4e89b26!2sNational%20Foundation%20for%20Computers!5e0!3m2!1sen!2siq!4v1627072772705!5m2!1sen!2siq" class="w-full h-96 rounded-2xl shadow-2xl" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
    </div> 
 </main>
    
 <!-- Footer  -->
 <footer class="mt-32 relative">
        <div id="footerColor"  class="flex justify-center mx-auto  absolute inset-x-0 -top-12 md:-top-13 lg:-top-14 w-28 h-28 rounded-full ">
          <button>
            <a href="#topPage">
              <img  src="imgs/LOGO HI Influencers White.svg" class="w-10 animate-bounce " alt="Hi-Influncer">
            </a>
          </button>
          
        </div>

        <div id="footerColor" class=" p-10 mx-auto rounded-tr-3xl rounded-tl-3xl shadow-2xl  lg:flex justify-center lg:space-x-10 items-center text-white">
          <div class="flex flex-col justify-evenly ">
          <!-- Contact -->
          <div class="lg:flex  items-center space-y-5 lg:space-y-0  lg:space-x-10  p-5">
            <!-- Contact -->
            <div>
              <h1 class="lg:text-3xl text-xl font-light my-4  ">Contact</h1>
              <h2 class="lg:text-xl font-light" >Email : Info@hi-influncer.com</h2>
              <h2 class="lg:text-xl font-light" >Mobile : +964 772 644 4088</h2>
            </div>
            <!-- Address -->
            <div>
              <h1 class="lg:text-3xl text-xl font-light my-3  ">Address</h1>
              <h2 class="lg:text-xl font-light" >Iraq / Baghdad / Karrada <br />
                / Alsinaa street / National foundation for computers / Fourth
                floor</h2>
            </div>
             <!-- Social Accounts -->  
          <div class="flex flex-col justify-start items-start lg:p-5 space-y-3  ">
            <h1 class="lg:text-2xl text-xl font-light">Social Accounts</h1>
            <!-- Icon -->
            <div class="flex space-x-5 items-center">
              <!-- Instagram -->
              <a href="http://www.instagram.com/hiinfluencer.iq">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"class="w-10 fill-current text-white hover:text-red-500 duration-150 ease-in  " ;transform: ;msFilter:;"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>

              </a>
              <!-- Facebook -->
              <a href="https://www.facebook.com/hiinfluencer.iq/">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current text-white hover:text-red-500 duration-150 ease-in  " viewBox="0 0 24 24" ">
                  <path
                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,
                    0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path>
                </svg>
              </a>
              <!-- Linkedn -->
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current text-white hover:text-red-500 duration-150 ease-in" viewBox="0 0 24 24"  ">
                  <path
                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h16c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z M8.339,18.337H5.667 v-8.59h2.672V18.337z M7.003,8.574c-0.856
                    ,0-1.548-0.694-1.548-1.548s0.691-1.548,1.548-1.548c0.854,0,1.548,0.693,1.548,1.548 S7.857,8.574,7.003,8.574z M18.338,18.337h-2.669V14.16c0-0.996-0.018-2.277-1.388-2.277c-1.39
                    ,0-1.601,1.086-1.601,2.207v4.248 h-2.667v-8.59h2.56v1.174h0.037c0.355-0.675,1.227-1.387,2.524-1.387c2.704,0,3.203,1.778,3.203,4.092V18.337z"></path>
                </svg>
              </a>
            </div>
          </div>
          </div>
         
        </div>
        

        </div>
</footer>
  
  
  
  
  
  
  
  
  
  <script src="js/app.js"></script>
  <script src="js/main.js"></script>
</body>

</html>