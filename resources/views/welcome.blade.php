{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="vi|en">

<head>
    <!-- Basehref -->
    <base href="http://pedaco.com.vn/" />

    <!-- UTF-8 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Title, Keywords, Description -->
    <title>Công ty Cổ phần Môi trường Xanh PEDACO</title>
    <meta name="keywords" content="" />
    <meta name="description"
        content="PEDACO, một trong những đơn vị tư vấn môi trường, có đầy đủ năng lực và chức năng về thu gom Chất thải công nghiệp, Chất thải nguy hại, Chất thải sinh hoạt và một số dịch vụ đi kèm như: thu mua phế liệu, thu mua và tái chế dầu nhớt thải." />

    <!-- Robots -->
    <meta name="robots" content="index,follow" />

    <!-- Favicon -->
    <link href="upload/photo/logopedacomoi-6080-7278.png" rel="shortcut icon" type="image/x-icon" />

    <!-- Webmaster Tool -->

    <!-- GEO -->
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Hồ Chí Minh" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />

    <!-- Author - Copyright -->
    <meta name='revisit-after' content='1 days' />
    <meta name="author" content="PEDACO" />
    <meta name="copyright" content="PEDACO - [info@pedaco.com.vn]" />

    <!-- Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="PEDACO" />
    <meta property="og:title" content="Công ty Cổ phần Môi trường Xanh PEDACO" />
    <meta property="og:description"
        content="PEDACO, một trong những đơn vị tư vấn môi trường, có đầy đủ năng lực và chức năng về thu gom Chất thải công nghiệp, Chất thải nguy hại, Chất thải sinh hoạt và một số dịch vụ đi kèm như: thu mua phế liệu, thu mua và tái chế dầu nhớt thải." />
    <meta property="og:url" content="http://pedaco.com.vn/" />
    <meta property="og:image" content="http://pedaco.com.vn/thumbs/791x726x2/upload/photo/logopedacomoi-6080.png" />
    <meta property="og:image:alt" content="Công ty Cổ phần Môi trường Xanh PEDACO" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="791" />
    <meta property="og:image:height" content="726" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="info@pedaco.com.vn" />
    <meta name="twitter:creator" content="PEDACO" />
    <meta property="og:url" content="http://pedaco.com.vn/" />
    <meta property="og:title" content="Công ty Cổ phần Môi trường Xanh PEDACO" />
    <meta property="og:description"
        content="PEDACO, một trong những đơn vị tư vấn môi trường, có đầy đủ năng lực và chức năng về thu gom Chất thải công nghiệp, Chất thải nguy hại, Chất thải sinh hoạt và một số dịch vụ đi kèm như: thu mua phế liệu, thu mua và tái chế dầu nhớt thải." />
    <meta property="og:image" content="http://pedaco.com.vn/thumbs/791x726x2/upload/photo/logopedacomoi-6080.png" />

    <!-- Canonical -->
    <link rel="canonical" href="http://pedaco.com.vn/" />

    <!-- Chống đổi màu trên IOS -->
    <meta name="format-detection" content="telephone=no">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="./assets/css/animate.min.css?v=zHAcS7cd1" rel="stylesheet">
    <link href="./assets/bootstrap/bootstrap.css?v=YVpIoJjFxL" rel="stylesheet">
    <link href="./assets/css/all.css?v=O0zUv02AA2" rel="stylesheet">
    <link href="./assets/fancybox3/jquery.fancybox.css?v=MCtZO4AOKC" rel="stylesheet">
    <link href="./assets/fancybox3/jquery.fancybox.style.css?v=BezVDDuyiN" rel="stylesheet">
    <link href="./assets/login/login.css?v=3IhKD1wbau" rel="stylesheet">
    <link href="./assets/css/cart.css?v=vLHNYi1FS" rel="stylesheet">
    <link href="./assets/photobox/photobox.css?v=PZseSWgzZ4" rel="stylesheet">
    <link href="./assets/slick/slick.css?v=muH1Gb85Wq" rel="stylesheet">
    <link href="./assets/slick/slick-theme.css?v=QPZrMUZo6O" rel="stylesheet">
    <link href="./assets/slick/slick-style.css?v=hh0w7FwW9I" rel="stylesheet">
    <link href="./assets/simplyscroll/jquery.simplyscroll.css?v=jokXty9dCa" rel="stylesheet">
    <link href="./assets/simplyscroll/jquery.simplyscroll-style.css?v=jjfBqtwEkB" rel="stylesheet">
    <link href="./assets/fotorama/fotorama.css?v=XmhRWCrqvr" rel="stylesheet">
    <link href="./assets/fotorama/fotorama-style.css?v=n3rBJeXabJ" rel="stylesheet">
    <link href="./assets/magiczoomplus/magiczoomplus.css?v=kRUurh4Jd" rel="stylesheet">
    <link href="./assets/datetimepicker/jquery.datetimepicker.css?v=Tlj8MIavgQ" rel="stylesheet">
    <link href="./assets/owlcarousel2/owl.carousel.css?v=Q29wXlIOeW" rel="stylesheet">
    <link href="./assets/owlcarousel2/owl.theme.default.css?v=Ls7B93KYal" rel="stylesheet">
    <link href="./assets/css/style.css?v=rXjbaTeeo" rel="stylesheet">
    <link href="./assets/css/media.css?v=sbZQ2iIZL" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S0Z4P4QZF4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-S0Z4P4QZF4');
    </script>
</head>

<body>
    <div class="wap_main">
        <ul class="h-card hidden">
            <li class="h-fn fn">PEDACO</li>
            <li class="h-org org">PEDACO</li>
            <li class="h-tel tel">0902384797</li>
            <li><a class="u-url ul" href="">http://pedaco.com.vn/</a></li>
        </ul>
        <h1 class="hidden-seoh">Công ty Cổ phần Môi trường Xanh PEDACO</h1>
        <div class="menu tss">
            <div class="flex wrap ja wap_1200">
                <div class="logo tss">
                    <a class="logo-header" href=""><img onerror="this.src='';" src="" /></a>
                </div>
                <ul class="menu_desktop flex ja">
                    <li><a class="transition active" href="{{ url('/dashboard') }}" title="Dashboard">
                            <h2>Dashboard</h2>
                        </a></li>
                    <li><a class="transition " href="{{ url('/about') }}" title="About us">
                            <h2>About us</h2>
                        </a>
                        <ul>
                            <li><span></span><a href="">
                                    <h2>OPEN LETTER</h2>
                                </a></li>
                            <li><span></span><a href="">
                                    <h2>INTRODUCTION TO THE INVESTOR</h2>
                                </a></li>
                            <li><span></span><a href="">
                                    <h2>COMPANY RESOURCES STRUCTURE</h2>
                                </a></li>
                            <li><span></span><a href="">
                                    <h2> GENERAL INTRODUCTION TO THE WASTE TREATMENT COMBINATION</h2>
                                </a></li>
                            <li><span></span><a href="">
                                    <h2></h2>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="transition " href="{{ url('/field_of_activity') }}" title="Field of operations">
                            <h2>Field of operations</h2>
                        </a>
                        <ul>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>HAZARDOUS WASTE TREATMENT TECHNOLOGY</h2>
                                </a></li>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>INDUSTRIAL WASTE TREATMENT TECHNOLOGY</h2>
                                </a></li>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>INDUSTRIAL WASTE TREATMENT TECHNOLOGY</h2>
                                </a></li>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>COLLECTION OF SCRAP, RECYCLING OIL WASTE</h2>
                                </a></li>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>COLLECTION, TRANSPORT DESTRUCTIVE GOODS</h2>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="transition " href="{{ url('/legal_record') }}" title="Legal records">
                            <h2>Legal records</h2>
                        </a>
                        <ul>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>CERTIFICATE OF ENVIRONMENT MANAGEMENT SYSTEM ISO 14001: 2015</h2>
                                </a></li>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>SAFETY &amp; HEALTH MANAGEMENT SYSTEM ISO 45001: 2018 CERTIFICATION</h2>
                                </a></li>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>CERTIFICATE OF QUALITY MANAGEMENT SYSTEM ISO 9001: 2015</h2>
                                </a></li>
                            <li><span></span><a href="{{ url('/home') }}">
                                    <h2>LICENSE TO OPERATION PEDACO GREEN ENVIRONMENT JOINT STOCK COMPANY</h2>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="transition " href="{{url('/home')}}" title="Client partner">
                            <h2>Client partner</h2>
                        </a></li>
                    <li><a class="transition " href="{{ url('/event-news') }}" title="Event news">
                            <h2>Event news</h2>
                        </a></li>
                    <li><a class="transition " href="{{ url('/contact') }}" title="Contact us">
                            <h2>Contact us</h2>
                        </a></li>
                </ul>
                <div class="lang-header">
                    <a href="ngon-ngu/vi/"><img src="assets/images/vi.jpg" alt="VI"></a>
                </div>
            </div>
        </div>
        <div class="menu_mobi_add"></div>
        <div class="menu_mobi flex ja">
            <p class="menu_baophu"></p>
            <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
            <a href="" class="home_mobi"><img onerror="this.src='thumbs/60x60x2/assets/images/noimage.png';"
                    src="thumbs/60x60x2/upload/photo/logopedacomoi-6080.png" /></a>
            <p class="langs">
                <a href="ngon-ngu/vi/"><img src="assets/images/vi.jpg" alt="VI"></a>
            </p>
        </div>
        <div class="slideshow">
            <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
            <div class="owl-carousel owl-theme owl-slideshow">
                <div>
                    <a href="http://pedaco.com.vn/httppedacocomvndich-vu-xu-ly-chat-thai-nguy-hai" target="_blank"
                        title="Slide">
                        <img onerror="this.src='thumbs/1366x560x2/assets/images/noimage.png';"
                            src="thumbs/1366x560x1/upload/photo/hazardous-waste-treatment-technology-3581.jpg"
                            alt="Slide" title="Slide" />
                    </a>
                </div>
                <div>
                    <a href="" target="_blank" title="Slide">
                        <img onerror="this.src='thumbs/1366x560x2/assets/images/noimage.png';"
                            src="thumbs/1366x560x1/upload/photo/as-79030.jpg" alt="Slide" title="Slide" />
                    </a>
                </div>
                <div>
                    <a href="" target="_blank" title="Slide">
                        <img onerror="this.src='thumbs/1366x560x2/assets/images/noimage.png';"
                            src="thumbs/1366x560x1/upload/photo/ssss-9670.jpg" alt="Slide" title="Slide" />
                    </a>
                </div>
                <div>
                    <a href="" target="_blank" title="Slide">
                        <img onerror="this.src='thumbs/1366x560x2/assets/images/noimage.png';"
                            src="thumbs/1366x560x1/upload/photo/bbbbb-2150.jpg" alt="Slide" title="Slide" />
                    </a>
                </div>
                <div>
                    <a href="" target="_blank" title="Slide">
                        <img onerror="this.src='thumbs/1366x560x2/assets/images/noimage.png';"
                            src="thumbs/1366x560x1/upload/photo/collection-of-scrap-recycling-waste-oil-2233.jpg"
                            alt="Slide" title="Slide" />
                    </a>
                </div>
            </div>
            <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
        </div>
        <div class=" wrap-home w-clear">
            <div class="bggt pd50">
                <div class="wap_1200 flex ja wrap">
                    <div class="noidunggt">
                        <p class="p1">PEDACO GREEN ENVIRONMENT JOIN STOCK COMPANY</p>
                        <p class="p2">PEDACO</p>
                        <p class="p3">Dear customer!

                            First of all, Pedaco Green Environment Joint Stock Company (PEDACO) would like to send
                            respectful greetings and sincere thanks for your trust in PEDACO in the past time.

                            Now we would like to send to our customers a set of Capacity Profile - information about the
                            projects we are implementing, as well as development plans in the future.

                            PEDACO, is one of the environmental consultancy units, has full capacity and functions in
                            industrial waste, hazardous waste, domestic waste collection and some associated services
                            such as: waste collection raw materials, purchasing and recycling waste oil.</p>
                        <div class="slick_gt">
                            <div class="item_gt">
                                <div class="flex ja wrap">
                                    <a class="sp_img img_gt hover_sang1" href="{{ url('/open-letter') }}"
                                        title="OPEN LETTER">
                                        <img onerror="this.src='thumbs/100x100x2/assets/images/noimage.png';"
                                            src="thumbs/100x100x2/upload/news/hinh-an-5496.jpg" alt="OPEN LETTER">
                                    </a>
                                    <div class="ndgt">
                                        <h3 class="gt_name"><a class="catchuoi1" href="{{ url('/open-letter') }}"
                                                title="OPEN LETTER">OPEN
                                                LETTER</a></h3>
                                        <p class="mtgt catchuoi2">First of all, Pedaco Green Environment Joint Stock
                                            Company (PEDACO) would like to send respectful greetings and sincere thanks
                                            for your trust in PEDACO in the past time.

                                            Now we would like to send to our customers a set of Capacity Profile -
                                            information about the projects we are implementing, as well as development
                                            plans in the future.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item_gt">
                                <div class="flex ja wrap">
                                    <a class="sp_img img_gt hover_sang1" href="{{ url('/about-us') }}"
                                        title="INTRODUCTION TO THE INVESTOR">
                                        <img onerror="this.src='thumbs/100x100x2/assets/images/noimage.png';"
                                            src="thumbs/100x100x2/upload/news/download-7089.jpg"
                                            alt="INTRODUCTION TO THE INVESTOR">
                                    </a>
                                    <div class="ndgt">
                                        <h3 class="gt_name"><a class="catchuoi1" href="{{ url('/about-us') }}"
                                                title="INTRODUCTION TO THE INVESTOR">INTRODUCTION TO THE INVESTOR</a>
                                        </h3>
                                        <p class="mtgt catchuoi2">Name of investor: PEDACO Green Environment Joint
                                            Stock
                                            Company operates under the business registration license and tax
                                            registration No. 3401201904 issued by the Department of Planning and
                                            Investment of Binh Thuan province for the first time on March 2, 2020.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item_gt">
                                <div class="flex ja wrap">
                                    <a class="sp_img img_gt hover_sang1" href="{{ url('/resource-structure') }}"
                                        title="COMPANY RESOURCES STRUCTURE">
                                        <img onerror="this.src='thumbs/100x100x2/assets/images/noimage.png';"
                                            src="thumbs/100x100x2/upload/news/26394-3327.jpg"
                                            alt="COMPANY RESOURCES STRUCTURE">
                                    </a>
                                    <div class="ndgt">
                                        <h3 class="gt_name"><a class="catchuoi1"
                                                href="{{ url('/resource-structure') }}"
                                                title="COMPANY RESOURCES STRUCTURE">COMPANY RESOURCES STRUCTURE</a>
                                        </h3>
                                        <p class="mtgt catchuoi2">PEDACO staff and staff have professional
                                            qualifications and experience in the environmental field. In addition, our
                                            company is supported and advised by reputable environmental experts, so we
                                            can meet all the most stringent requirements of customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item_gt">
                                <div class="flex ja wrap">
                                    <a class="sp_img img_gt hover_sang1" href="hieu-chung"
                                        title=" GENERAL INTRODUCTION TO THE WASTE TREATMENT COMBINATION">
                                        <img onerror="this.src='thumbs/100x100x2/assets/images/noimage.png';"
                                            src="thumbs/100x100x2/upload/news/environmental-audit-reporting-good-pr-or-bad-press-5124.jpg"
                                            alt=" GENERAL INTRODUCTION TO THE WASTE TREATMENT COMBINATION">
                                    </a>
                                    <div class="ndgt">
                                        <h3 class="gt_name"><a class="catchuoi1" href="hieu-chung"
                                                title=" GENERAL INTRODUCTION TO THE WASTE TREATMENT COMBINATION">
                                                GENERAL INTRODUCTION TO THE WASTE TREATMENT COMBINATION</a></h3>
                                        <p class="mtgt catchuoi2">Natural Resources and Environment on the approval of
                                            the environmental impact assessment. project of the complex of domestic
                                            waste, industrial waste and organic fertilizer production.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hinhgt">
                        <div class="slick_qc">
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/cong-nha-may-6389.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/hy7a2249-16531.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/hy7a2300-98610.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/hy7a2242-98850.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/hy7a2319-48450.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/hy7a2246-51040.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/hy7a2337-84220.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item_qc">
                                <a class="sp_img hover_sang1" title="">
                                    <img onerror="this.src='thumbs/520x515x2/assets/images/noimage.png';"
                                        src="thumbs/520x515x1/upload/photo/z2245900108608b5156f75a9792d9cd1363ebc75079e02-12620.jpg"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wap_1200 pd50 overflow">
                <div class="title-main"><span>Field of operations</span></div>
                <p class="slogan"></p>
                <div class="slick_lvhd wap_item">
                    <div class="item">
                        <a class="sp_img hover_sang1" href="" title="HAZARDOUS WASTE TREATMENT TECHNOLOGY">
                            <img onerror="this.src='thumbs/280x220x2/assets/images/noimage.png';"
                                src="thumbs/280x220x1/upload/news/hinh-ctnh-5164.jpg"
                                alt="HAZARDOUS WASTE TREATMENT TECHNOLOGY">
                        </a>
                        <h3 class="sp_name"><a class="catchuoi2" href=""
                                title="HAZARDOUS WASTE TREATMENT TECHNOLOGY">HAZARDOUS WASTE TREATMENT TECHNOLOGY</a>
                        </h3>
                    </div>
                    <div class="item">
                        <a class="sp_img hover_sang1" href="cong-nghe-xu-ly-chat-thai-cong-nghiep"
                            title="INDUSTRIAL WASTE TREATMENT TECHNOLOGY">
                            <img onerror="this.src='thumbs/280x220x2/assets/images/noimage.png';"
                                src="thumbs/280x220x1/upload/news/26394-1996.jpg"
                                alt="INDUSTRIAL WASTE TREATMENT TECHNOLOGY">
                        </a>
                        <h3 class="sp_name"><a class="catchuoi2" href="cong-nghe-xu-ly-chat-thai-cong-nghiep"
                                title="INDUSTRIAL WASTE TREATMENT TECHNOLOGY">INDUSTRIAL WASTE TREATMENT TECHNOLOGY</a>
                        </h3>
                    </div>
                    <div class="item">
                        <a class="sp_img hover_sang1" href="cong-nghe-xu-ly-chat-thai-sinh-hoat"
                            title="INDUSTRIAL WASTE TREATMENT TECHNOLOGY">
                            <img onerror="this.src='thumbs/280x220x2/assets/images/noimage.png';"
                                src="thumbs/280x220x1/upload/news/rac-sinh-hoat-3909.jpg"
                                alt="INDUSTRIAL WASTE TREATMENT TECHNOLOGY">
                        </a>
                        <h3 class="sp_name"><a class="catchuoi2" href="cong-nghe-xu-ly-chat-thai-sinh-hoat"
                                title="INDUSTRIAL WASTE TREATMENT TECHNOLOGY">INDUSTRIAL WASTE TREATMENT TECHNOLOGY</a>
                        </h3>
                    </div>
                    <div class="item">
                        <a class="sp_img hover_sang1" href="thu-mua-phe-lieu"
                            title="COLLECTION OF SCRAP, RECYCLING OIL WASTE">
                            <img onerror="this.src='thumbs/280x220x2/assets/images/noimage.png';"
                                src="thumbs/280x220x1/upload/news/thu-mua-phe-lieu-gia-cao-tai-tphcm-quang-dat-dong-4211.jpg"
                                alt="COLLECTION OF SCRAP, RECYCLING OIL WASTE">
                        </a>
                        <h3 class="sp_name"><a class="catchuoi2" href="thu-mua-phe-lieu"
                                title="COLLECTION OF SCRAP, RECYCLING OIL WASTE">COLLECTION OF SCRAP, RECYCLING OIL
                                WASTE</a></h3>
                    </div>
                    <div class="item">
                        <a class="sp_img hover_sang1" href="tieu-huy-hang-hoa"
                            title="COLLECTION, TRANSPORT DESTRUCTIVE GOODS">
                            <img onerror="this.src='thumbs/280x220x2/assets/images/noimage.png';"
                                src="thumbs/280x220x1/upload/news/11172012114834pm-xe-ep-rac-hino-fg2-1400x875-4003.jpg"
                                alt="COLLECTION, TRANSPORT DESTRUCTIVE GOODS">
                        </a>
                        <h3 class="sp_name"><a class="catchuoi2" href="tieu-huy-hang-hoa"
                                title="COLLECTION, TRANSPORT DESTRUCTIVE GOODS">COLLECTION, TRANSPORT DESTRUCTIVE
                                GOODS</a></h3>
                    </div>
                </div>
            </div>
            <div class="wap_1200 pd50 w-clear">
                <div class="left-intro">
                    <p class="title-intro"><span>Event news</span></p>
                    <div class="item_new flex ja wrap">
                        <a class="sp_img hover_sang1 img_tt" href="ket-qua-quan-trac-moi-truong-dinh-ky-quy-i2022-1"
                            title="">
                            <img onerror="this.src='thumbs/380x240x2/assets/images/noimage.png';"
                                src="watermark/news/380x240x1/upload/news/quan-trac-moi-truong-dinh-ky-quy-i2022page-0006-2254-1357.jpg"
                                alt="">
                        </a>
                        <div class="nd_new">
                            <p class="ngay">27/03/2023 02:58 PM</p>
                            <h3 class="sp_name"><a class="catchuoi2"
                                    href="ket-qua-quan-trac-moi-truong-dinh-ky-quy-i2022-1" title=""></a></h3>
                            <p class="catchuoi4 mt_tt"></p>
                            <a class="xemthem flex fcc" href="ket-qua-quan-trac-moi-truong-dinh-ky-quy-i2022-1"
                                title="View more">View more <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="flex ju wrap">
                        <div class="item_tt">
                            <p class="ngay">17/06/2022 10:52 AM</p>
                            <h3 class="tt_name"><a class="catchuoi2"
                                    href="ket-qua-quan-trac-moi-truong-dinh-ky-quy-i2022" title=""></a></h3>
                        </div>
                        <div class="item_tt">
                            <p class="ngay">06/01/2021 04:23 PM</p>
                            <h3 class="tt_name"><a class="catchuoi2"
                                    href="rac-thai-nhua-tren-the-gioi-dang-huy-hoai-trai-dat-nhu-the-nao"
                                    title=""></a>
                            </h3>
                        </div>
                        <div class="item_tt">
                            <p class="ngay">06/01/2021 08:41 AM</p>
                            <h3 class="tt_name"><a class="catchuoi2"
                                    href="ke-hoach-cai-cach-hanh-chinh-nam-2021-cua-bo-tai-nguyen-va-moi-truong"
                                    title=""></a></h3>
                        </div>
                        <div class="item_tt">
                            <p class="ngay">30/12/2020 08:37 AM</p>
                            <h3 class="tt_name"><a class="catchuoi2" href="dong-hanh-cung-giam-rac-thai-nhua"
                                    title=""></a></h3>
                        </div>
                        <div class="item_tt">
                            <p class="ngay">25/12/2020 08:11 AM</p>
                            <h3 class="tt_name"><a class="catchuoi2"
                                    href="trong-thap-rau-thong-minh-tu-tan-dung-rac-thai"
                                    title="Plant a smart vegetable tower from using waste">Plant a smart vegetable
                                    tower
                                    from using waste</a></h3>
                        </div>
                        <div class="item_tt">
                            <p class="ngay">25/12/2020 08:08 AM</p>
                            <h3 class="tt_name"><a class="catchuoi2"
                                    href="tphcm-nam-2025-80-ho-gia-dinh-phan-loai-rac-sinh-hoat-tai-nguon"
                                    title="HCMC: By 2025, 80% of households classify household waste at source">HCMC:
                                    By
                                    2025, 80% of households classify household waste at source</a></h3>
                        </div>
                        <div class="item_tt">
                            <p class="ngay">23/12/2020 09:32 AM</p>
                            <h3 class="tt_name"><a class="catchuoi2"
                                    href="nha-san-xuat-phai-cam-ket-tai-che-bao-bi-san-pham"
                                    title="The manufacturer must commit to recycling the product packaging">The
                                    manufacturer must commit to recycling the product packaging</a></h3>
                        </div>
                        <div class="item_tt">
                            <p class="ngay">18/12/2020 02:29 PM</p>
                            <h3 class="tt_name"><a class="catchuoi2"
                                    href="can-xu-ly-triet-de-tinh-trang-do-thai-trai-phep-san-lap-dat-nong-lam-nghiep"
                                    title="It is necessary to thoroughly handle the illegal dumping and leveling of agricultural and forestry land">It
                                    is necessary to thoroughly handle the illegal dumping and leveling of agricultural
                                    and forestry land</a></h3>
                        </div>
                    </div>
                </div>
                <div class="right-intro">
                    <p class="title-intro"><span>Client partner</span></p>
                    <div class="slick_doitac">
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/2013795411883881166074809172575317750214162n-61480.png"
                                    alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/v-3251.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/512x512e614e7c21fd39fb32a851917f5770397ai1-9773.png"
                                    alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/44-4887.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/333-5589.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="http://www.binhthuannhabe.com/" target="_blank"
                                title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/555-2934.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/2176245019530669115840367396770755819002864o-8389.jpg"
                                    alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/gg-7342.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/x-7427.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/dd-4649.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/qq-4706.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/fffff-2997.png" alt="" />
                            </a>
                        </div>
                        <div class="item_dt">
                            <a class="sp_img hover_sang1" href="" target="_blank" title="">
                                <img onerror="this.src='thumbs/91x91x2/assets/images/noimage.png';"
                                    src="thumbs/91x91x2/upload/photo/s-7060.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <p class="title-intro"><span><a href="giay-chung-nhan" title="certificate">certificate</a></span>
                    </p>
                    <div class="slick_gcn">
                        <div class="item_gcn">
                            <a class="sp_img hover_sang1" data-fancybox="gallerygcn" href="upload/photo/3-57031.png"
                                data-caption="" title="">
                                <img onerror="this.src='thumbs/245x175x2/assets/images/noimage.png';"
                                    src="thumbs/245x175x2/upload/photo/3-57031.png" alt="" />
                            </a>
                        </div>
                        <div class="item_gcn">
                            <a class="sp_img hover_sang1" data-fancybox="gallerygcn" href="upload/photo/2-99590.png"
                                data-caption="" title="">
                                <img onerror="this.src='thumbs/245x175x2/assets/images/noimage.png';"
                                    src="thumbs/245x175x2/upload/photo/2-99590.png" alt="" />
                            </a>
                        </div>
                        <div class="item_gcn">
                            <a class="sp_img hover_sang1" data-fancybox="gallerygcn" href="upload/photo/1-17500.png"
                                data-caption="" title="">
                                <img onerror="this.src='thumbs/245x175x2/assets/images/noimage.png';"
                                    src="thumbs/245x175x2/upload/photo/1-17500.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-article tdt">
                <div class="wap_1200 flex wrap ju">
                    <div class="footer-news">
                        <div class="info-footer">
                            <p><img alt=""
                                    src="http://pedaco.com.vn/upload/elfinder/ffffffffffffffffffffffffffffffffffffff.png"
                                    style="width: 280px;" /></p>

                            <table align="center" border="0" cellpadding="5" cellspacing="5"
                                style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 190px;"><span style="line-height:1;"><span
                                                    style="font-size:14px;"><span
                                                        style="font-family:Tahoma,Geneva,sans-serif;"><img
                                                            alt=""
                                                            src="http://pedaco.com.vn/upload/elfinder/GI%E1%BA%A4Y%20CH%E1%BB%A8NG%20NH%E1%BA%AC/111.png"
                                                            style="width: 100px;" /></span></span></span></td>
                                        <td style="width: 934px;">
                                            <p><span style="line-height:1;"><span style="font-size:14px;"><span
                                                            style="font-family:Arial,Helvetica,sans-serif;">La Gi Waste
                                                            Treatment Complex - Tan Ly 1 Hamlet, Tan Binh Commune, La Gi
                                                            Town, Binh Thuan Province</span></span></span></p>

                                            <p><span style="line-height:1;"><span style="font-size:14px;"><span
                                                            style="font-family:Arial,Helvetica,sans-serif;">Unit 102,
                                                        </span></span></span><span
                                                    style="font-family:Calibri,sans-serif;"><span
                                                        style="font-size:11.0pt;">1</span></span><sup><span
                                                        style="font-family:Calibri,sans-serif;"><span
                                                            style="font-size:11.0pt;">st</span></span></sup><span
                                                    style="line-height:1;"><span style="font-size:14px;"><span
                                                            style="font-family:Arial,Helvetica,sans-serif;"> Floor,
                                                            No.1- 5 Le Duan Street, Ben Nghe Ward, District 1,
                                                            HCMC</span></span></span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 210px;"><span style="line-height:1;"><span
                                                    style="font-size:14px;"><span
                                                        style="font-family:Arial,Helvetica,sans-serif;"><img
                                                            alt=""
                                                            src="http://pedaco.com.vn/upload/elfinder/GI%E1%BA%A4Y%20CH%E1%BB%A8NG%20NH%E1%BA%AC/ggggggggggggggg.png"
                                                            style="width: 100px;" /></span></span></span></td>
                                        <td style="width: 915px;">
                                            <p><span style="line-height:1;"><span style="font-size:16px;"><span
                                                            style="font-family:Arial,Helvetica,sans-serif;"><small> 024
                                                                999 55 868 -
                                                                info@pedaco.com.vn</small></span></span></span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="footer-news">
                        <h2 class="title-footer">menu</h2>
                        <ul class="footer-ul ftul flex ju wrap">
                            <li><a href="{{ url('/home') }}" title="About us">About us</a></li>
                            <li><a href="{{ url('/legal-records') }}" title="Legal records">Legal records</a></li>
                            <li><a href="{{ url('/events-news') }}" title="Event news">Event news</a></li>
                            <li><a href="" title="Field of operations">Field of operations</a></li>
                            <li><a href="" title="Client partner">Client partner</a></li>
                            <li><a href="" title="Contact us">Contact us</a></li>
                        </ul>
                        <ul class="social social-footer">
                            <li><a href="https://www.google.com/" target="_blank"><img src="upload/photo/1-9152.png"
                                        alt=""></a></li>
                            <li><a href="https://www.google.com/" target="_blank"><img src="upload/photo/4-3042.png"
                                        alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-powered">
                    <div class="wap_1200 flex ja">
                        <p class="copyright">2020 Copyright © <span>PEDACO GREEN ENVIRONMENT JOIN STOCK COMPANY
                                PEDACO</span>. All rights reserved.</p>

                    </div>
                </div>
            </div>
        </div>

        <a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/0902384797">
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            <i><img src="assets/images/zl.png" alt="zalo" /></i>
        </a>

        <a class="btn-phone btn-frame text-decoration-none" href="tel:0902384797">
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            <i><img src="assets/images/hl.png" alt="hotline" /></i>
        </a>
        <!-- Modal notify -->
        <div class="modal modal-custom fade" id="popup-notify" tabindex="-1" role="dialog"
            aria-labelledby="popup-notify-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="popup-notify-label">Notify</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal cart -->
        <div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="popup-cart-label">Your cart</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>

        <!-- Modal xem nhanh sản phẩm -->
        <div class="modal fade" id="popup-pro-detail" tabindex="-1" role="dialog"
            aria-labelledby="popup-pro-detail-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="popup-pro-detail-label">XEM NHANH SẢN PHẨM</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var NN_FRAMEWORK = NN_FRAMEWORK || {};
            var CONFIG_BASE = 'http://pedaco.com.vn/';
            var WEBSITE_NAME = 'PEDACO';
            var TIMENOW = '01/12/2023';
            var SHIP_CART = false;
            var GOTOP = 'assets/images/top.png';
            var LANG = {
                'no_keywords': 'No search keywords entered',
                'delete_product_from_cart': 'Do you want to remove this product from your shopping cart?',
                'no_products_in_cart': 'No products in your shopping cart !',
                'wards': 'Wards',
                'back_to_home': 'Back to homepage',
            };
        </script>
        <script type="text/javascript" src="assets/js/cached.js"></script>
        <!-- Js Google Recaptcha V3 -->
        <script src="https://www.google.com/recaptcha/api.js?render=6LeM_QkaAAAAAIRFRbYh3ChRqV2kRiB0-inai53R"></script>
        <script type="text/javascript">
            grecaptcha.ready(function() {
                grecaptcha.execute('6LeM_QkaAAAAAIRFRbYh3ChRqV2kRiB0-inai53R', {
                    action: 'Newsletter'
                }).then(function(token) {
                    var recaptchaResponseNewsletter = document.getElementById('recaptchaResponseNewsletter');
                    recaptchaResponseNewsletter.value = token;
                });
            });
        </script>


        <!-- Js Structdata -->

        <!-- General -->
        <script type="application/ld+json">
        {
            "@context" : "https://schema.org",
            "@type" : "Organization",
            "name" : "PEDACO",
            "url" : "http://pedaco.com.vn/",
            "sameAs" :
            [
                                    "https://www.google.com/",                                    "https://www.google.com/"                            ],
            "address":
            {
                "@type": "PostalAddress",
                "streetAddress": "Địa chỉ công ty, văn phòng",
                "addressRegion": "Ho Chi Minh",
                "postalCode": "70000",
                "addressCountry": "vi"
            }
        }
    </script>

        <!-- Js Addons -->
        <div id="script-main"></div>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 0.5 && !a && ($("#script-main").load(
                        "ajax/ajax_addons.php?type=script-main"), a = !0)
                })
            });
        </script>
        <!-- Js Body -->
        <div class="support-online">
            <a class="mes not-loading" target="_blank"
                href="https://www.google.com/maps/dir/10.7776331,106.7116815/Khu+Li%C3%AAn+hi%E1%BB%87p+X%E1%BB%AD+l%C3%BD+ch%E1%BA%A5t+th%E1%BA%A3i+La+Gi+-+Th%C3%B4n+T%C3%A2n+L%C3%BD+1,+X%C3%A3+T%C3%A2n+B%C3%ACnh,+TX+La+Gi,+T%E1%BB%89nh+B%C3%ACnh+Thu%E1%BA%ADn/@10.8162897,106.6820282,9z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3175cb4cd324c3e9:0x5ae5585b6650e6e!2m2!1d107.7563575!2d10.7305077">
                <i class="fa fa-map-marker"></i>
                <span>Directions</span>
            </a>
        </div>
    </div>
    <script>
        $().ready(function() {
            $size = [{
                w: 1200,
                h: 0
            }, {
                w: 600,
                h: 0
            }, {
                w: 450,
                h: 0
            }, {
                w: 370,
                h: 0
            }];

            $(".slideshowPlugin").each(function() {
                $(this).find("*").removeAttr("height contenteditable width");
                $col = "gallery-col-" + $(this).data("showid");
                $list = $(this).find("ul");
                $data = $size[$(this).data("showid")];
                $has_slide = 1;
                /*$(this).data("autostartid");*/
                $cls = '';
                if ($has_slide == true) {
                    $cls = "class='owl-carousel owl-carousel-custom' data-type='" + $(this).data("showid") +
                        "'";
                }
                patch = "/";
                $list.find("a").each(function() {
                    $(this).find("img").attr("src", patch + "thumbs/" + $data.w + "x" + $data.h +
                        "x1/" + $(this).attr("href").replace(patch, ''));
                })
                $(this).html("<ul " + $cls + " data-type='" + ($col) + "'>" + $list.html() + "</ul>").attr(
                    "class", "z-gallery " + $col);
                if ($has_slide) {
                    $(this).find("ul").wrap('<div ' + $cls + '"/>').contents().unwrap();
                    $(this).find('li').wrap('<div/>').contents().unwrap();
                }
                $id = "gallery-" + Math.floor(Math.random() * 100);
                $(this).find("a").attr("data-fancybox", $id);


            })
            $(".owl-carousel-custom").each(function() {

                $col = $(this).data("type");

                $responsive = "";
                if ($col == 0) {
                    $responsive = {
                        0: {
                            items: 1
                        }
                    };
                }
                if ($col == 1) {
                    $responsive = {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,

                        },
                        1000: {
                            items: 2,

                        }
                    };
                }
                if ($col == 2) {
                    $responsive = {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,

                        },
                        1000: {
                            items: 3,

                        }
                    };
                }
                if ($col == 3) {
                    $responsive = {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,

                        },
                        1000: {
                            items: 3,

                        },
                        1200: {
                            items: 4,

                        }
                    };
                }
                $(this).owlCarousel({
                    loop: true,
                    margin: 10,
                    dots: false,
                    autoplay: true,
                    nav: true,
                    responsiveClass: true,
                    responsive: $responsive
                })

            })


        })
    </script>
    <style>
        .owl-carousel-custom .owl-nav {
            height: 0;
        }

        .owl-carousel-custom .owl-nav .owl-prev {
            position: absolute;
            top: calc(35% - 10px);
            left: 20px;
            outline: none !important;
        }

        .owl-carousel-custom .owl-nav span {
            font-size: 5em;
            opacity: 0.6;
            color: #fff;
        }

        .owl-carousel-custom .owl-nav .owl-next {
            position: absolute;
            top: calc(35% - 10px);
            right: 20px;
            outline: none !important;
        }
    </style>
</body>

</html>
