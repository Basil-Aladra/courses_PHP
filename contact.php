<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="Group1957 w-[1440px] h-[66.10px] left-0 top-0 absolute">
        <div class="Rectangle1 w-[1520px] h-[66.10px] left-0 top-0 absolute bg-white shadow"></div>
        <div class="Frame3 w-[457px] h-[20.06px] left-[458px] top-[28px] absolute justify-center items-center gap-[16.47px] inline-flex">
          <a href="index.php" class="Home text-gray-900 text-sm font-normal">Home</a>
          <a href="Course.html" class="Course text-gray-900 text-sm font-normal">Course</a>
          <a href="About.html" class="AboutUs text-gray-900 text-sm font-normal">About Us</a>
          <a href="Article.html" class="Article text-gray-900 text-sm font-normal">Article</a>
          <a href="Contact.php" class="Contact text-indigo-500 text-sm font-bold">Contact</a>
          
        </div>
        <a href="register.html" class="Frame1 w-[110px] h-[30px] px-[20.18px] py-[5.35px] left-[1305px] top-[18px] absolute bg-indigo-500 rounded justify-center items-center gap-[4.12px] inline-flex">
          <span class="Register text-white text-xs font-bold">Register</span>
        </a>
        <a href="login.html" class="Frame2 w-[110px] h-[30px] px-[20.18px] py-[5.35px] left-[1181px] top-[18px] absolute rounded border border-indigo-500 justify-center items-center gap-[4.12px] inline-flex">
          <span class="LogIn text-indigo-500 text-xs font-bold ">Log in</span>
        </a>
      </div>
      <div class="Group4 left-[81px] top-[10px] absolute">
      <div class="flex items-center gap-4">
    <img class="w-10 h-10 rounded-full bg-red-500"  alt="">
    <div class="font-medium dark:text-white">
        <div>
        <?php
            session_start();
            if(isset($_SESSION['name'])) {
                // إذا كان المستخدم قد قام بتسجيل الدخول
                echo "<p style='color:blue'>".$_SESSION['name']."</p>";
            } else {
                // إذا لم يقم المستخدم بتسجيل الدخول
                echo "<p style='color:red'>guest</p>";
            }
        ?>

        </div>
        <?php
            echo  '<a href="logout.php" class="Contact text-gray-900 text-sm font-normal underline">Logout</a>';
        ?>
    </div>
</div>
        <div class="Group3 w-[22.88px] h-[22.88px] left-0 top-0 absolute">
        </div>
      </div>
    <section class="py-10 bg-gray-100 sm:py-16 lg:py-24 mt-5">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Contact us</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>
    
            <div class="max-w-5xl mx-auto mt-12 sm:mt-16">
                <div class="grid grid-cols-1 gap-6 px-8 text-center md:px-0 md:grid-cols-3">
                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                            </svg>
                            <p class="mt-6 text-lg font-medium text-gray-900">+1-316-555-0116</p>
                            <p class="mt-1 text-lg font-medium text-gray-900">+1-446-526-0117</p>
                        </div>
                    </div>
    
                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <p class="mt-6 text-lg font-medium text-gray-900">ccdoc123@gmail.com</p>
                            <p class="mt-1 text-lg font-medium text-gray-900">ccdoc123@gmail.com</p>
                        </div>
                    </div>
    
                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="mt-6 text-lg font-medium leading-relaxed text-gray-900">8502 Preston Rd. Ingle, Maine 98380, USA</p>
                        </div>
                    </div>
                </div>
    
                <div class="mt-6 overflow-hidden bg-white rounded-xl">
                    <div class="px-6 py-12 sm:p-12">
                        <h3 class="text-3xl font-semibold text-center text-gray-900">Send us a message</h3>
    
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>