<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

<div class="h-full bg-gray-400 dark:bg-gray-900">
	<!-- Container -->
	<div class="mx-auto">
		<div class="flex justify-center px-6 py-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
                <div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" 
                style="background-image: url('https://png.pngtree.com/png-clipart/20220704/original/pngtree-autism-child-disorder-care-health-png-image_8311213.png'); background-size: 540px 600px; background-position: left;"></div>
<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
					<h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Create an Account!</h3>
					<form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded" id="registerForm" action="{{route('register')}}" method="POST"  enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="role" value="member">
                       	<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="firstName">
                                    First Name
                                </label>
								<input
                                    class="w-full px-8 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstName"
                                    type="text"
                                    placeholder="First Name"
                                    name="first_name"
                                />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                    Last Name
                                </label>
								<input
                                    class="w-full px-8 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    placeholder="Last Name"
                                    name="last_name"
/>
							</div>
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                Email
                            </label>
							<input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="Email"
                                name="email"
                            />
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                                    Password
                                </label>
								<input
                                    class="w-full px-8 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    type="password"
                                    placeholder="******************"
                                    name="password"
                                />
								<p class="text-xs italic text-red-500">Please choose a password.</p>
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="c_password">
                                    Address
                                </label>
								<input
                                    class="w-full px-8 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="address"
                                    type="address"
                                    placeholder="address"
                                    name="address"
                                />
							</div>
						</div>
                        <div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                                    Child First Name
                                </label>
								<input
                                    class="w-full px-8 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstName"
                                    type="text"
                                    placeholder="Child First Name"
                                    name="child_first_name"
                                />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="c_password">
                                    Child Last Name
                                </label>
								<input
                                    class="w-full px-8 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    placeholder="Child Last Name"
                                    name="child_last_name"
                                />
							</div>
						</div>
                        <div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                                    Date of birth
                                </label>
								<input
                                    class="w-full px-8 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstName"
                                    type="date"
                                    placeholder="date of birth"
                                    name="date_of_birth"

                                />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="c_password">
                                    Disorder
                                </label>
								<input
                                    class="w-full px-8 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="date_of_birth"
                                    type="text"
                                    placeholder="Date of birth"
                                    name="disorder"
                                />
							</div>
						</div>
                       
						<div class="mb-6 text-center">
                        <button
            class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline"
            type="submit"
        >
            Register Account
        </button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
								href="#">
								Forgot Password?
							</a>
						</div>
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
								href="/login">
								Already have an account? Login!
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>