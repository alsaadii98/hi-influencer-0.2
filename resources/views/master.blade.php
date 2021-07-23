<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hi Influencer</title>
    
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.min.css">
    <link rel="icon" href="imgs/LOGO HI Influencers.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@300;400;500;700&display=swap" rel="stylesheet">
  </head>
  <body class="bg-gray-200 fadeIn ">
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
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10  fill-current text-gray-800 hover:text-red-500 duration-150 ease-in  " viewBox="0 0 24 24"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
            </a>
         <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10  fill-current text-gray-800 hover:text-red-500 duration-150 ease-in  " viewBox="0 0 24 24"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
         </a> 
         <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10  fill-current text-gray-800 hover:text-red-500 duration-150 ease-in  " viewBox="0 0 24 24"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h16c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z M8.339,18.337H5.667 v-8.59h2.672V18.337z M7.003,8.574c-0.856,0-1.548-0.694-1.548-1.548s0.691-1.548,1.548-1.548c0.854,0,1.548,0.693,1.548,1.548 S7.857,8.574,7.003,8.574z M18.338,18.337h-2.669V14.16c0-0.996-0.018-2.277-1.388-2.277c-1.39,0-1.601,1.086-1.601,2.207v4.248 h-2.667v-8.59h2.56v1.174h0.037c0.355-0.675,1.227-1.387,2.524-1.387c2.704,0,3.203,1.778,3.203,4.092V18.337z"></path></svg>
         </a>  
        </div>
    </div>
    </nav>
    <!-- Main -->
    <!-- Section-1 -->
    <main class="mt-8 ">
       <div class="lg:max-w-6xl m-5  lg:mx-auto">
        <div id="MainColor" class=" rounded-3xl flex flex-col  lg:flex-row lg:justify-between justify-center overflow-hidden lg:overflow-visible items-center  shadow-xl ">
            <!-- Info -->
            <div class="  lg:mx-10 my-10 text-center md:text-center lg:text-left">
              <h1 id="fontColor" class="  font-bold py-1 text-4xl lg:text-6xl">
                Hi Influencer
              </h1>
              <p class="font-light pb-3 text-md  lg:text-2xl text-white lg:text-justify">
                Is an Influencers marketing agency, 
                Specialized <br> in creating social media influencers campaigns .
              </p>
              <button id="ColorBtn"class="px-14 py-3 rounded-full shadow-md 
                focus:outline-none hover:shadow-xl hover:text-white ease-in text-2xl
                text-white duration-200">
                Contact us
              </button>
            </div>
            <!-- illustration -->
            <div class="mt-5 mr-5 lg:mt-2 lg:mr-14 items-center overflow-hidden ">
              <img src="imgs/LOGO HI Influencers Final.svg" alt="Hi Influencer">
            </div>
        </div>
       </div> 
    </main>
    <!-- Section-1 -->
    <main class="mt-8 ">
      <div class="lg:max-w-6xl m-5  lg:mx-auto">
       <div>
        <h1 id="fontColor" class="text-center font-bold text-4xl lg:text-5xl">Our Customers</h1> 
        <div class="mt-8">
          <div class="flex flex-col md:flex-row justify-center items-center md:space-x-10  space-y-10 lg:space-y-0">
            {{-- 1 --}}
            <div class="flex justify-center md:space-x-10 items-center">
              <div>
                <img class="w-40 " src="imgs\Our Customers\Mask Group 1.svg" alt="">
              </div>
              <div>
                <img class="w-40" src="imgs\Our Customers\Mask Group 2.svg" alt="">
              </div>
            </div>
            {{-- 2 --}}
            <div class="flex justify-center md:space-x-10 items-center">
              <div>
                <img class="w-40" src="imgs\Our Customers\Mask Group 3.svg" alt="">
              </div>
              <div>
                <img class="w-40" src="imgs\Our Customers\Mask Group 4.svg" alt="">
              </div>
            </div>
          </div>
          <div class="flex flex-col md:flex-row justify-center items-center md:space-x-10  space-y-10 lg:space-y-0  mt-10">
            {{-- 1 --}}
            <div class="flex justify-center md:space-x-10 items-center ">
              <div>
                <img class="w-40" src="imgs\Our Customers\Mask Group 5.svg" alt="">
              </div>
              <div>
                <img class="w-40" src="imgs\Our Customers\Mask Group 6.svg" alt="">
              </div>
            </div>
            <div>
              <img class="w-40" src="imgs\Our Customers\Mask Group 7.svg" alt="">
            </div>
          </div>
          
          
          
        </div>
       </div>
      </div> 
   </main>
    <!-- Section-2 -->
    <main class="mt-8">
      <div class="lg:max-w-6xl m-5  lg:mx-auto">
        <h1 id="fontColor" class="text-center font-bold text-4xl lg:text-5xl">Save your time</h1> 
        <!-- Card 1&2 -->
        <!-- Card-1 -->
        <div class=" mt-10 my-5 flex  flex-col lg:flex-row justify-around items-center space-y-5 lg:spcae-y-0 ">
          <!-- text -->
          <div class="lg:w-1/2">
            <h1 id="fontColor" class="  font-medium py-1 text-2xl lg:text-3xl">Campaign strategy</h1>
            <div id="CardRed" class="Card1 w-52 lg:w-64 my-2"></div>
            <p class="font-normal text-lg   lg:text-xl text-justify leading-relaxed tracking-wide	">
              The first and the main step that we start working on it, it’s the campaign strategy, 
              where we focus on telling a story that lives in people’s minds after the campaign is over. 
              We do that by infusing your core messages into all aspects of the campaigns we create.
            </p>
          </div>
          <!-- icon contianer -->
          <div id="CardBlue" class="mt-8 lg:mt-0 rounded-2xl  overflow-hidden  lg:w-96  p-5  lg:p-8 shadow-xl"> 
            <img class="w-80" src="imgs/Card-icon/Brord.svg" class="" alt="">
          </div>
        </div>
        <!-- Card-2 -->
        <div class=" mt-10 my-5 flex  flex-col lg:flex-row lg:flex-row-reverse justify-around items-center space-y-5 lg:spcae-y-0 ">
          <!-- text -->
          <div class="lg:w-1/2">
            <h1 id="fontColor" class="  font-medium py-1 text-2xl lg:text-3xl">Right influencers</h1>
            <div id="CardRed" class="Card1 w-52 lg:w-64 my-2"></div>
            <p class="font-normal text-lg   lg:text-xl text-justify leading-relaxed tracking-wide	">
              The process of selecting the right influencers for the campaign it’s one of the most important processes in marketing with influencers where finding the right 
              influencers doesn’t end at the discovery. At Hi Influencer, we study and analyze the influencers and their social accounts, in order to select the right influencers for your influencers campaign
            </p>
          </div>
          <!-- icon contianer -->
          <div id="CardBlue" class="mt-8 lg:mt-0 rounded-2xl  flex justify-center  overflow-hidden  lg:w-96 p-5  lg:p-8  shadow-xl"> 
            <img class="w-80" src="imgs/Card-icon/Filtter.svg" class="" alt="">
          </div>
        </div>
        <!-- Card-3 -->
        <div class="mt-10 my-5 flex  flex-col lg:flex-row justify-around items-center space-y-5 lg:spcae-y-0 ">
          <!-- text -->
          <div class="lg:w-1/2">
            <h1 id="fontColor" class="  font-medium py-1 text-2xl lg:text-3xl">Coordination & Follow-up</h1>
            <div id="CardRed" class="Card1 w-96 my-2"></div>
            <p class="font-normal text-lg  lg:text-xl text-justify leading-relaxed tracking-wide	">
              If you’ve gone the DIY route, you know that this process is the most time-consuming. At Hi Influencer when our time spent is your time gained, so we’ll handle all the 
              behind-the-scenes tasks, from price negotiations to compliance and payment. In between, we’ll handle all the coordination of content deliverables with them, keeping your campaign on-time and on-budget.z
            </p>
          </div>
          <!-- icon contianer -->
          <div id="CardBlue" class="mt-8 lg:mt-0 rounded-2xl flex justify-center  overflow-hidden lg:w-96 p-5  lg:p-8  shadow-xl"> 
            <img class="w-80" src="imgs/Card-icon/Mesagge.svg" class="" alt="">
          </div>
        </div>
        <!-- Card-4 -->
        <div class="mt-10 my-5 flex  flex-col lg:flex-row lg:flex-row-reverse justify-around items-center space-y-5 lg:spcae-y-0 ">
          <!-- text -->
          <div class="lg:w-1/2 items-center">
            <h1 id="fontColor" class="  font-medium py-1 text-2xl lg:text-3xl">Detailed reporting</h1>
            <div id="CardRed" class="Card1 w-52 lg:w-64 my-2"></div>
            <p class="font-normal text-lg   lg:text-xl text-justify leading-relaxed tracking-wide	">
              At the end of every campaign it’s important  to know how was the performance of the campaign. At Hi Influencer, we create a detailed report that includes all the campaign insights, and we focus on the metrics that matter most to you, 
              such as the target audience information,   influencers performance information, as well as the campaign cost and other important information that plays an important role in measuring the campaign performance.
            </p>
          </div>
          <!-- icon contianer -->
          <div id="CardRed" class="mt-8 lg:mt-0 rounded-2xl flex  justify-center  overflow-hidden lg:w-96 p-5  lg:p-8 shadow-xl"> 
            <img class="w-80" src="imgs/Card-icon/REPORT.svg" class="  " alt="">
          </div>
        </div>
      </div>
    </main>
    <!-- Section-3 -->
    <main class="mt-8">
      <div class="lg:max-w-6xl m-5  lg:mx-auto">
          <div>
          <h1 id="fontColor" class="text-center font-bold text-5xl">Influencers Content</h1> 
          {{-- Tabs --}}
          <div class="tab mt-10 flex justify-center space-x-5 lg:space-x-20">
            <button class="tablinks text-xl p-2 font-medium  hover:text-red-500 ease-in duration-150 focus:outline-none" onclick="openCity(event, 'Food')">Food</button>
            <button class="tablinks text-xl p-2 font-medium  hover:text-red-500 ease-in duration-150 focus:outline-none" onclick="openCity(event, 'E-commerce')">E-commerce</button>
            <button class="tablinks text-xl p-2 font-medium  hover:text-red-500 ease-in duration-150 focus:outline-none" onclick="openCity(event, 'Life-Style')">Life-Style</button>
          </div>
          {{-- Content --}}
            <div class="mt-10 flex flex-col md:flex-row justify-around">
                {{-- Pics --}}
                <div class="flex justify-center itmes-center  md:w-1/2  ">
                  <div id="Food" class="tabcontent block ">
                    <img class="md:w-4/5 m-0 float-none 	"  src="imgs/Influencers Content/Food.PNG" alt="Food">
                  </div>
                  
                  <div id="E-commerce" class="tabcontent ">
                    <img class="md:w-4/5 m-0 float-none " src="imgs/Influencers Content/E-commerce.PNG" alt="E-commerce">
                  </div>
                  
                  <div id="Life-Style" class="tabcontent ">
                    <img class="md:w-4/5 m-0 float-none " src="imgs/Influencers Content/Life-Style.PNG" alt="Life-Style">
                  </div>

                </div>
                {{-- Para --}}
                <div class="md:w-1/2 lg:mt-5 ">
                  <h1 id="fontColor" class="text-3xl lg:text-5xl font-bold leading-snug ">
                    Good content grabs
                    your attention. Great
                    content inspires action.
                  </h1>
                  <p class=" mt-2 text-justify text-lg lg:text-xl font-mediem leading-normal"> 
                      Create great influencer campaigns and content in a fraction of the time it would take you to do it manually. 
                      Everything under one roof from influencer discovery, workflow, and analytics to amplification and distrbution.
                  </p>
                </div>
            </div>
          </div>
      </div>
    </main>
    <!-- Section-4 -->
    <main class="mt-12 ">
      <div class="lg:max-w-6xl m-5  lg:mx-auto">
        <h1 id="fontColor" class="text-center mb-10 font-bold text-5xl">
          Influencers We’ve Worked With
        </h1>
        <p class="mb-10  text-center text-lg lg:text-2xl font-mediem leading-normal">
          We are able to match your brand with the right influencers,
         from micro-influencers to macro-influencers on Instagram, here are a few amazing influencers that we’ve worked with.
        </p>
        <!-- Glider JS -->
        <div id="CardBlue" class=" shadow-2xl p-2 rounded-2xl">
          
            {{-- Slider --}}
            <div class="images glide ">
              <div class="glide__track " data-glide-el="track">
                <ul class="glide__slides">
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Amna.png" alt="Amna" />
                  </li>
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Ealaf.png" alt="Elaf" />
                  </li>
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Hala.png" alt="Hala" />
                  </li>
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Heba.png" alt="Heba" />
                  </li>
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Hussein.png" alt="Hussein" />
                  </li>
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Sara.png" alt="Sara" />
                  </li>
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Shams.png"alt="Shams" />
                  </li>
                  <li class="glide__slide">
                    <img src="imgs/infuencer-pics/Zahraa.png" alt="Zahraa" />
                  </li>
                </ul>
              </div>
              <div class="nav glide">
                <div class="glide__arrows" data-glide-el="controls">
                  <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg
                      class="focus:outline-none "
                      xmlns="http://www.w3.org/2000/svg"
                      width="75"
                      height="75"
                      
                      viewBox="0 0 24 24"
                      style="fill: rgba(211, 82, 82, 1)"
                    >
                      <path
                        d="M13.293 6.293L7.586 12 13.293 17.707 14.707 16.293 10.414 12 14.707 7.707z"
                      ></path>
                    </svg>
                  </button>
                  <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                    <button class="glide__bullet" data-glide-dir="=4"></button>
                    <button class="glide__bullet" data-glide-dir="=5"></button>
                  </div>
                 
                  <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="75"
                      height="75"
                      
                      viewBox="0 0 24 24"
                      style="fill: rgba(211, 82, 82, 1); "
                    >
                      <path
                        d="M10.707 17.707L16.414 12 10.707 6.293 9.293 7.707 13.586 12 9.293 16.293z"
                      ></path>
                    </svg>
                  </button>
                </div>
                
              </div>
            </div>
             {{-- end-slider --}}
          </div>
        
      </div>
    </main>
    <!-- Section-5 -->
    <main class="mt-12">
      <div class="lg:max-w-3xl m-5  lg:mx-auto">
        <!-- About us -->
       
        <div id="counters" class="text-white shadow-2xl p-12 rounded-2xl mt-8">
          <h1 id="fontColor" class="text-2xl lg:text-4xl  text-center">Want to start an influencers campaign?
            Feel free to contact us</h1>
          <div class="mt-5 flex justify-center">
            <button id="ColorBtn"class="px-8 lg:px-14 py-4 rounded-full shadow-md 
            focus:outline-none hover:shadow-xl hover:text-white ease-in text-2xl
            text-white duration-200">
            Contact us
          </button>
        </div>
        </div>
      </div>
    </main>
      <!-- Footer  -->
      <footer class="mt-12">
        <div id="MainColor" class="mx-auto rounded-tr-3xl rounded-tl-3xl shadow-2xl  lg:flex justify-center lg:space-x-10 items-center text-white">
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
          </div>
          <!-- Social Accounts -->  
          <div class="flex p-5 space-x-5 items-center">
            <h1 class="lg:text-2xl text-xl font-light">Social Accounts</h1>
            <!-- Icon -->
            <div class="flex items-center">
              <!-- Instagram -->
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); ">
                  <path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,
                  15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path>
                  <circle cx="16.806" cy="7.207" r="1.078"></circle>
                  <path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,
                  6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469
                  ,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,
                  2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311
                  ,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,
                  0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,
                  0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,
                  0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path>
                </svg>
              </a>
              <!-- Facebook -->
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                  <path
                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,
                    0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path>
                </svg>
              </a>
              <!-- Linkedn -->
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); ">
                  <path
                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h16c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z M8.339,18.337H5.667 v-8.59h2.672V18.337z M7.003,8.574c-0.856
                    ,0-1.548-0.694-1.548-1.548s0.691-1.548,1.548-1.548c0.854,0,1.548,0.693,1.548,1.548 S7.857,8.574,7.003,8.574z M18.338,18.337h-2.669V14.16c0-0.996-0.018-2.277-1.388-2.277c-1.39
                    ,0-1.601,1.086-1.601,2.207v4.248 h-2.667v-8.59h2.56v1.174h0.037c0.355-0.675,1.227-1.387,2.524-1.387c2.704,0,3.203,1.778,3.203,4.092V18.337z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <img src="imgs/LOGO HI Influencers White.svg" class="lg:w-20 w-14" alt="Hi-Influncer">
        </div>


        </div>
      </footer>
      <script src="js/app.js"></script>
    <script src="js/main.js"></script>
    <script src="js/glide.min.js"></script>
    <script src="js/gilde.js"></script>
  </body>
</html>
