<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.tailwindcss.com"></script>
        
        <title>Appointment</title>
        
    </head>
    <body class=""> 
        <div class="bg-950 h-screen w-full">
            
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
            Login
        </button>
        <button class="bg-indigo-700 py-2 px-2 rounded-sm text-[#e7e5e4] font-bold">
            Sign up
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