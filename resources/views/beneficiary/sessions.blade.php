<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment App | theuicode.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
    
<section class="relative bg-gray-100 min-h-[100vh]">
    <div class="w-[80%] mx-auto container my-10">
       
       
        <h1 class="text-3xl font-semibold my-8">Passenger Panel</h1>
        <div class=" bg-white w-fit">
            <ul class="flex items-center rounded-tl-md shadow-md rounded-tr-lg overflow-hidden shadow-[0px_0px_20px_1px_#eee]" id="">
                <li class="bg-black px-4 relative cursor-pointer border-l border-white py-2 text-yellow-400 active  linktab">
                    My histories
                </li>
                <li class="bg-black px-4 relative cursor-pointer border-l border-white py-2 text-yellow-400 linktab">
                    My reservations
                </li>
                <li class="bg-black px-4 relative cursor-pointer border-l border-white py-2  text-yellow-400 linktab">
                    My Services
                </li>
            </ul>
        </div>
        <div class="w-full bg-white p-3" id="content">
            <div class="content active">
                <!-- ========= Hisorique ============ -->
                <div>
                    <h1 class="text-2xl relative py-4 font-medium w-fit">My Histories <span class="absolute bg-yellow-300 w-[50px] h-[3px] bottom-0 left-[50%] translate-x-[-50%]"></span></h1>
                    <div class="my-5">
                        <div>
                            <div class="overflow-hidden border border-yellow-200  md:rounded-lg">
                                <table class="min-w-full divide-y divide-yellow-500">
                                    <thead class="bg-yellow-400 ">
                                        <tr>

                                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Date Trips
                                            </th>

                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Departure
                                            </th>

                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Destination
                                            </th>

                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Reservated at
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-orange-200 " id="users-container">
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap"></td>
                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap"></td>
                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap"></td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap"></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========= Section Route ============ -->

            <div class="content">
                <!-- ========= Hisorique ============ -->
                <div>
                    <h1 class="text-2xl relative py-4 font-medium w-fit">My Reservation <span class="absolute bg-yellow-300 w-[50px] h-[3px] bottom-0 left-[50%] translate-x-[-50%]"></span></h1>
                    <div class="my-5">
                        <div>
                            <div class="overflow-hidden border border-yellow-200  md:rounded-lg">
                                <table class="min-w-full divide-y divide-yellow-500">
                                    <thead class="bg-yellow-400 ">
                                        <tr>

                                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Date Trips
                                            </th>

                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Departure
                                            </th>

                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Destination
                                            </th>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Status
                                            </th>

                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black">
                                                Reservated at
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-orange-200 " id="users-container">
                                        
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                    hhh
                                                </td>
                                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                   hhh
                                                </td>
                                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
hhh
                                                </td>
                                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap"></td>
                                            </tr>
                                            


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========== NEW SECTION  ================ -->
        <div class="content">
            <h1>My Services</h1>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, provident.
        </div>
    </div>
    </div>

</section>

</body>
</html>