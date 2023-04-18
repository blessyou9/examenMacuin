<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<!-- component -->
<body class = "body bg-white dark:bg-[#2460e3]">

    <div class = "bg-black before:animate-pulse before:bg-gradient-to-b before:from-gray-900 overflow-hidden before:via-[#2460e3] before:to-gray-900 before:absolute ">
        <div id="myDIV" >
            <div class = "w-[100vw] h-[100vh] px-3 sm:px-5 flex items-center justify-center absolute">
                <div class = "w-full sm:w-1/2 lg:2/3 px-6 bg-gray-500 bg-opacity-20 bg-clip-padding backdrop-filter backdrop-blur-sm text-white z-50 py-4  rounded-lg">
                    <form method="get" action="{{ route('validacion') }}">
                    <div class = "w-full flex justify-center text-[#2460e3] text-xl mb:2 md:mb-5">
                        Sign In
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-xs font-medium text-white">Your email</label>
                        <input type="email" name="email"  id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@neurolink.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-xs font-medium text-white">Your password</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class = "flex flex-row justify-between">
                        <div class = "text-white text-sm md:text-md ">Forgot Password</div>
                        <div class = "text-[#2460e3] text-sm md:text-md">Signup</div>
                    </div>
                    <div>
                        <button type="submit" name="btnGuardar"  class = "mt-4 md:mt-10 w-full flex justify-center text-sm md:text-xl bg-[#2460e3] py-2 rounded-md">Log in</button>
                    </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</body>


    <script>
        const para = document.createElement("div");
        para.className = 'flex flex-wrap gap-0.5 h-screen items-center justify-center  relative';
            let el = '<div class = "  transition-colors duration-[1.5s] hover:duration-[0s] border-[#2460e3] h-[calc(5vw-2px)] w-[calc(5vw-2px)] md:h-[calc(4vw-2px)] md:w-[calc(4vw-2px)] lg:h-[calc(3vw-4px)] lg:w-[calc(3vw-4px)] bg-gray-900 hover:bg-[#2460e3]"></div>'
            for (var k = 1; k<=1000; k++){
                el+= '<div class = " transition-colors duration-[1.5s] hover:duration-[0s] border-[#2460e3] h-[calc(5vw-2px)] w-[calc(5vw-2px)] md:h-[calc(4vw-2px)] md:w-[calc(4vw-2px)] lg:h-[calc(3vw-4px)] lg:w-[calc(3vw-4px)] bg-gray-900 hover:bg-[#2460e3]"></div>';
            };

            para.innerHTML = el;
        document.getElementById("myDIV").appendChild(para);
    </script>

