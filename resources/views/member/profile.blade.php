
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f3f4f6]">
    <!-- navbar goes here  -->
   

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Change the background color of the sidebar */
        aside {
            background-color: #cbd5e1; /* Updated color */
            padding-top: 20px; /* Adjusted padding-top */
        }

        /* Adjust padding-left for the main content */
        main {
            padding-left: 5rem; /* Adjusted padding-left */
        }
    </style>

    <div class="bg-[#f3f4f6] w-full flex flex-col gap-5 md:flex-row text-[#161931]">
        <!-- Sidebar -->
        <aside class="bg-[#cbd5e1] md:w-60 flex flex-col items-center space-y-12 md:block hidden">
            <img class="mt-8 ml-8  object-cover w-32 h-32 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.JZ3eTMeBLN8Kns45eIA_nAHaHw%26pid%3DApi&f=1&ipt=7ec33fd9d4975f4cd5f741d672f15d46ef2a65ada05d3bc795ad077aafd2de63&ipo=images" alt="Bordered avatar">

            <nav class= "ml-12  text-[#202142]">
                <ul class="space-y-4 ">
                    <li><a href="#" class="block hover:text-indigo-700 ">Profile</a></li>
                    <li><a href="#" class="block hover:text-indigo-700 ">Home</a></li>
                    <li><a href="#" class="block hover:text-indigo-700 ">Session</a></li>
                    <li><a href="#" class="block hover:text-indigo-700">Settings</a></li>
                </ul>
                
            </nav>
            <ul class="space-y-4 ml-12 pt-64 ">
                    <li><a href="#" class="block hover:text-indigo-700 ">Logout</a></li>
            </ul>
        </aside>
        <!-- Main content -->
        <main class="bg-[#f3f4f6] w-full min-h-screen md:w-2/3 lg:w-3/4">
            <div class="">
                <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-8">
                    <!-- Avatar here -->
                    <!-- Form here -->
                    <div class="mt-24 flex flex-col space-y-5 sm:ml-8 w-2/3">
                        <!-- Form fields -->
                <div class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                    <!-- First name -->
                    <div class="w-full">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your first name</label>
                        <input type="text" id="first_name" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" placeholder="{{$users->first_name}}" required>
                    </div>

                    <!-- Last name -->
                    <div class="w-full">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your last name</label>
                        <input type="text" id="last_name" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" placeholder="{{$users->last_name}}" required>
                    </div>
                </div>

                <!-- Email, Profession, Password, and Save button -->
                <!-- Include other form fields here -->

                <!-- Save button -->
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                </div>
            </div>
        </div>
    </div>
</main>


    </div>
</body>
</html>
