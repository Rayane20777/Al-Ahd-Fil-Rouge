<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Sessions</title>
    
</head>
<body class=""> 
  <div class="bg-950  w-full">
  
  <!-- navbar goes here  -->
  <nav class="bg-indigo-200 h-20 w-full flex justify-between px-3 md:px-10 items-center">
    <div class="text-2xl text-indigo-600 capitalize font-bold ">Al Ahd Fundation </div>
    <ul class="md:flex sm:gap-10 gap-4 hidden">
        <li class="mx-[10px] cursor-pointer">Home</li>
        <li class="mx-[10px] cursor-pointer">Appointment </li>
        <li class="mx-[10px] cursor-pointer">Sessions</li>
    </ul>
    
    <div class="hidden  md:block">

        <button class="bg-indigo-700 py-2 px-2 rounded-sm text-[#e7e5e4] font-bold">
    Logout 
       </button>
    </div>
    <div class="md:hidden">
        <a class="text-4xl burger-menu" href="#">&#8801;</a>
    </div>
        
    
  </nav>

  <!-- navbar  -->

  <!-- burger menu -->
  <div id="burgerMenu" class="md:hidden hidden bg-indigo-200 w-full py-4 px-8">
    <ul class="text-center">
      <li class="py-2"><a href="#" class="block">Home</a></li>
      <li class="py-2"><a href="#" class="block">Appointment</a></li>
      <li class="py-2"><a href="#" class="block">Sessions</a></li>
      <li class="py-2"><a href="#" class="block">Login</a></li>
      <li class="py-2"><a href="#" class="block">Register</a></li>
    </ul>
  </div>
  <!-- burger menu  -->

  <!-- image   -->

 <header class="w-full  h-auto">
  <img class="w-full hidden md:block " src="https://www.abautisme.fr/upload/slide/01.jpg" loading="lazy" alt="">
 </header>

<!-- image   -->







  


<div class="bg-[#e7e5e4]  p-6 rounded-xl shadow-lg">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      

     

      <div class="flex flex-col">
        <label for="date" class="font-medium text-sm text-stone-600">Date</label>
        <input
          type="date"
          id="date"
          class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50"
        >
      </div>

      <div class="flex flex-col">
        <label for="Paramedical Service" class="font-medium text-sm text-stone-600">Paramedical Service</label>

        <select
          id="status"
          class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50"
        >
          <option>Active</option>
      
        </select>
      </div>
      

      <div class="grid md:flex   space-x-4  my-3">
      
      
      <button class="px-4 py-2 rounded-lg text-orange-50 bg-orange-400 hover:bg-orange-500 font-bold text-white shadow-lg shadow-orange-200 transition ease-in-out duration-200 translate-10">
        Search
      </button> 
    </div>
</div>

   
  </div>
</div>

<div class="bg-[#e7e5e4] ">


<!-- session -->
<div class="container  mx-auto w-5/6 ">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 ">
  <div class="my-12 card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
    <!--  -->
    <div class="m-3">
      <h2 class="text-lg mb-2">Title
     <span class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 align-top float-right animate-pulse">Tag</span></h2>
    <p class="font-light font-mono text-sm text-gray-700 hover:text-gray-900 transition-all duration-200">Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds.</p>
    </div>
  </div>
  <!--  -->
</div>
</div>

<!-- session -->
</div>




   <!-- footer -->

   <footer class="w-full bg-gray-900 px-4 text-[#e7e5e4] pt-8 flex flex-col md:flex-row flex-wrap justify-between md:px-12">
          
         <div>
            <div class="text-2xl text-indigo-600 capitalize font-bold ">AL AHD</div>
            <p>Email Me : hafsaa@gmail.com</p>
            <P class="font-bold text-xl uppercase ">Founder : Hafsaa Houmaidi </P>
            <img class="w-32 h-32 " src="https://pwskills.com/images/iso-9001-2015.svg" loading="lazy" alt="********">
         </div>

         <div>
            <h2 class="font-bold text-xl mt-4 ">CONTACTS </h2>

            <div class="w-32 h-1 border-b-2 border-yellow-400  rounded-2xl my-2"></div>
             <div>
                <p>About Us</p>
                <p>FAQs</p>
                <p>Privacy Policy</p>
             </div>
         </div>
         <div>
            <h2 class="font-bold text-xl mt-4 ">AFFILIATE </h2>
            <div class="w-32 h-1 border-b-2 border-yellow-400  rounded-2xl my-2"></div>
             <div>
                <p>studo skills labs</p>
                <p>Job Portal</p>
                <p>Experience Portal </p>
                <p>Become An Affiliate </p>
             </div>
         </div>
     </footer>
        
    
<!-- footer  -->


  </div>
  
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const burgerMenu = document.querySelector('.burger-menu');
      const menu = document.getElementById('burgerMenu');
      
      burgerMenu.addEventListener('click', function () {
        menu.classList.toggle('hidden');
      });
    });
  </script>
</body>
</html>