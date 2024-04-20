<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Educational portal  project</title>
</head>
<body>
  <div class="bg-slate-950 h-screen w-full ">
  
  <!-- navbar goes here  -->
  <nav class="bg-indigo-200 h-14 w-full flex justify-between px-3 md:px-44 items-center ">
    <div class="text-2xl text-indigo-600 capitalize font-bold ">Studo skills </div>
    <ul  class="md:flex sm:gap-10 gap-4 hidden ">
        <li  class="mx-[10px] cursor-pointer" >Home</li>
        <li class="mx-[10px] cursor-pointer" >About Us </li>
        <li class="mx-[10px] cursor-pointer" >Contact</li>
    </ul>
    
    <div class="hidden  md:block ">
        <button class="bg-indigo-700 py-2 px-2 rounded-sm text-white font-bold">
            Login/Signup
        </button>
    </div>
    <div class="md:hidden ">
        <a class="text-4xl " href="#">&#8801;</a>
    </div>
        
    
  </nav>

  <!-- navbar ended here  -->



  <!-- image section starts here  -->

 <header class="w-full h-auto">
  <img class="w-full hidden md:block" src="https://cdn.pwskills.com/assets/uploads/banners/63a18cca807628f5968f528a/web.jpg" loading="lazy" alt="">
   <img class="w-full md:hidden  " src="https://cdn.pwskills.com/assets/uploads/banners/63a18cca807628f5968f528a/mobile.jpg" loading="lazy" alt="">
 </header>

<!-- image section ends here  -->

<!-- our student section  -->


<div class="h-auto w-full flex flex-wrap flex-col items-center text-center p-10 bg-slate-950 ">
       <div>
           <p class="capitalize text-indigo-700 text-2xl md:text-4xl text-center">"Pure handwork , no shortcut!" </p>
           <div class="h-[4px] w-[80px] bg-yellow-500 rounded-sm m-auto my-1 border-2 border-yellow-400 md:mt-4 mb-12 "></div>
       </div>
       <div class="w-full flex flex-wrap justify-evenly ">
          <div class="w-46 flex flex-col items-center mb-12">
            <img class="h-44 w-44" src="https://pwskills.com/images/landing-page/statistics/books-icon.svg" alt="">
            <p class="text-3xl font-bold text-white ">600+</p>
            <p class="text-2xl font-bold text-gray-500">Different Courses</p>
          </div>
       
          <div class="w-46 flex flex-col items-center mb-12">
            <img class="h-44 w-44" src="https://pwskills.com/images/landing-page/statistics/student-icon.svg" alt="">
            <p class="text-3xl font-bold text-white ">70000+</p>
            <p class="text-2xl font-bold text-gray-500">Students Enrolled</p>
          </div>
       
          <div class="w-46 flex flex-col items-center mb-12">
            <img class="h-44 w-44" src="https://pwskills.com/images/landing-page/statistics/credit-card-icon.svg" alt="">
            <p class="text-3xl font-bold text-white ">10000+</p>
            <p class="text-2xl font-bold text-gray-500">Successful Transition</p>
          </div>
       </div>
</div>

<!-- our student section ends here  -->

<!-- product section starts here  -->
    <div class="h-auto w-full flex flex-wrap flex-col items-center text-center p-10 bg-slate-950 ">
       <div>
        <p class="capitalize text-indigo-700 text-2xl md:text-4xl text-center">Our Products</p>
        <div class="h-[4px] w-[80px] bg-yellow-500 rounded-sm m-auto my-1 border-2 border-yellow-400 md:mt-4 mb-12 "></div>
       </div>
   
       <div class="w-[90%] h-auto flex flex-wrap justify-around ">
              <div class="w-64 flex flex-col items-center mb-12 border-white border-2 rounded-xl p-2 ">
                <img src="https://pwskills.com/images/landing-page/products/neurolab-icon.svg" loading="lazy" alt="lab image">
                  <p class="text-3xl font-bold text-white">Studo Skills Labs</p>
                  <p class="text-xl text-gray-500 ">SuperCharge your project development with our robust labs.</p>
              </div>
              <div class="w-64 flex flex-col items-center mb-12  p-2 ">
                <img src="https://pwskills.com/images/landing-page/products/jobPortal-icon.svg" loading="lazy" alt="lab image">
                  <p class="text-3xl font-bold text-white">Job Portal</p>
                  <p class="text-xl text-gray-500 "> Use unexceptional templates for a standout resume.</p>
              </div>
              <div class="w-64 flex flex-col items-center mb-12  p-2 ">
                <img src="https://pwskills.com/images/landing-page/products/Internship-icon.svg" loading="lazy" alt="lab image">
                  <p class="text-3xl font-bold text-white">Experience Portal</p>
                  <p class="text-xl text-gray-500 ">Self-paced experience for hands-on training.</p> 
              </div>
              <div class="w-64 flex flex-col items-center mb-12  p-2 ">
                <img src="https://pwskills.com/images/landing-page/products/affilitatePortal-icon.svg" loading="lazy" alt="lab image">
                  <p class="text-3xl font-bold text-white">Affiliate</p>
                  <p class="text-xl text-gray-500 ">Explore Affilate marketing opportunity. </p>
              </div>
              
        </div>
    </div>
   <!-- product section ends here  -->





   <!-- footer -->

   <footer class="w-full bg-gray-900 px-4 text-white pt-8 flex flex-col md:flex-row flex-wrap justify-between md:px-12">
          
         <div>
            <div class="text-2xl text-indigo-600 capitalize font-bold ">Studo Skills</div>
            <p>Email Us : akshaysd592@gmail.com</p>
            <P class="font-bold text-xl uppercase ">Founder : Akshay Dhobale </P>
            <img class="w-32 h-32 " src="https://pwskills.com/images/iso-9001-2015.svg" loading="lazy" alt="ISO image">
         </div>

         <div>
            <h2 class="font-bold text-xl mt-4 ">Studo Skills </h2>

            <div class="w-32 h-1 border-b-2 border-yellow-400  rounded-2xl my-2"></div>
             <div>
                <p>About Us</p>
                <p>FAQs</p>
                <p>Privacy Policy</p>
             </div>
         </div>
         <div>
            <h2 class="font-bold text-xl mt-4 ">Products </h2>
            <div class="w-32 h-1 border-b-2 border-yellow-400  rounded-2xl my-2"></div>
             <div>
                <p>studo skills labs</p>
                <p>Job Portal</p>
                <p>Experience Portal </p>
                <p>Become An Affiliate </p>
             </div>
         </div>

 <!-- footer closed here  -->






   </footer>

  </div>
</body>
</html>