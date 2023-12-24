
<header>

    <div class="header-left">
    <div class="logo">
        <img src="images/ic_favicon.png" alt="Logo">
    </div>
    <nav class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew fs-12">
        <a href="https://acharyaprashant.org/" class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew ">होम</a>
        <a href="#" class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew ">लाइव सत्र</a>
            <span class="down-arrow-session" onclick="toggleDropdownSession()" ></span>
            <span class="up-arrow-session" onclick="toggleDropdownSession()" style="display: none;"></span>

            <div class="session-dropdown-content" class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">
                <div class="float-left"><a href="https://acharyaprashant.org/en/online-courses/gita" >श्रीमद् भगवद् गीता</a></div><br/>
                <div  class="float-left"><a href="https://acharyaprashant.org/en/sant-sarita" > संत सरिता</a></div><br/>
                <div  class="float-left"><a href="https://acharyaprashant.org/en/vedant-samhita" > वेदांत संहिता</a></div><br/>
                <div class="float-left"><a href="https://acharyaprashant.org/en/bodh-pratyusha" > बोध प्रत्यूषा</a></div>
            </div>
        <a href="#" class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew video-series-text">वीडियो श्रृंखलाएँ</a>
        <a href="https://acharyaprashant.org/en/books"  class="text-decor-none text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew" >पुस्तकें</a>
        <a href="https://acharyaprashant.org/en/articles"  class="text-decor-none text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew ">लेख</a>
        <a href="#"  class="text-decor-none text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew ">आमंत्रित करें</a>
            <span class="down-arrow-invite" onclick="toggleDropdownInvite()"></span>
            <span class="up-arrow-invite" onclick="toggleDropdownInvite()" style="display: none;"></span>

            <div class="invite-dropdown-content">
                <div class="float-left">
                    <a href="https://acharyaprashant.org/en/invite?tIn=0">कॉलेज संवाद के लिए</a>
                </div><br/>
                <div class="float-left">
                    <a href="https://acharyaprashant.org/en/invite?tIn=1" >साक्षात्कार के लिये</a>
                </div>
            </div>
        <a href="https://acharyaprashant.org/en/media"  class="text-decor-none text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">प्रेस प्रकाशिनी</a>
        <a href="https://acharyaprashant.org/en/hiring"  class="text-decor-none text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">करियर</a>
        <a href="https://acharyaprashant.org/en/contribute"  class="text-decor-none text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">योगदान करें</a>
    </nav>
    </div>
    <div class="language-dropdown">
        <div class="ml-195">
            <span class="en-style">HI</span>
            <div class="language-dropdown">

                <form method="post" action="your_php_script.php" id="languageForm">
                    
                    <input type="hidden" name="language_selection" id="languageSelection" value="hindi-selected">
                    
                </form>

                <span class="down-arrow" onclick="toggleDropdown()"></span>
                <span class="up-arrow" onclick="toggleDropdown()" style="display: none;"></span>
            
                <div class="language-dropdown-content md-1" id="languageDropdown">
                    <div class="hindi-font">
                        <a href="#" id="hindiLink" class="hindi" onclick="setLanguage('hindi')">हिन्दी</a>
                    </div>
                    <div class="hindi-font">
                        <a href="#" id="englishLink" class="english" onclick="setLanguage('english')"><?php echo strtoupper("English"); ?></a>
                    </div>
                </div>
            </div>
            <div class="receiver-icon">
                <svg class="call-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="h-5 w-5"><path d="M11.895 16c.708 0 1.314-.104 1.817-.313.503-.209.965-.548 1.388-1.017a1.27 1.27 0 0 0 .094-.103l.086-.103a2.93 2.93 0 0 0 .544-.81 1.98 1.98 0 0 0 .176-.785c0-.298-.086-.585-.257-.862-.171-.278-.44-.54-.806-.785l-2.382-1.665a2.048 2.048 0 0 0-1.17-.39c-.408-.003-.781.164-1.118.502l-.617.609c-.097.103-.193.159-.287.167a.49.49 0 0 1-.305-.09 8.1 8.1 0 0 1-.544-.416 18.5 18.5 0 0 1-1.332-1.205c-.206-.2-.405-.405-.596-.614a11.947 11.947 0 0 1-.527-.613 5.1 5.1 0 0 1-.394-.558.42.42 0 0 1-.095-.296.506.506 0 0 1 .163-.287l.609-.618c.343-.343.512-.719.51-1.128a1.985 1.985 0 0 0-.399-1.162L4.782 1.047C4.536.692 4.275.431 3.998.262A1.699 1.699 0 0 0 3.137 0C2.61-.01 2.08.223 1.543.704a.848.848 0 0 0-.108.09.648.648 0 0 1-.098.081c-.469.43-.809.897-1.02 1.403C.106 2.784 0 3.398 0 4.118c0 .784.153 1.612.458 2.484.306.872.762 1.76 1.367 2.664a18.027 18.027 0 0 0 2.237 2.685 18.605 18.605 0 0 0 2.674 2.217c.897.604 1.782 1.06 2.657 1.369.874.309 1.708.463 2.502.463Zm0-1.295c-.691.005-1.428-.146-2.211-.455a11.557 11.557 0 0 1-2.365-1.296 16.925 16.925 0 0 1-2.28-1.921 16.885 16.885 0 0 1-1.941-2.3A12.06 12.06 0 0 1 1.765 6.32c-.32-.798-.474-1.543-.462-2.235.005-.44.087-.847.244-1.218a2.64 2.64 0 0 1 .788-1.038c.026-.023.053-.046.082-.069.114-.097.233-.173.355-.227a.895.895 0 0 1 .365-.082c.251 0 .45.115.6.343l1.55 2.317a.663.663 0 0 1 .13.411c-.007.143-.075.28-.207.412l-.685.678c-.291.292-.437.6-.437.922 0 .323.1.625.3.905.223.31.515.67.878 1.081.363.412.707.78 1.033 1.107.228.223.48.462.754.716.274.255.546.496.814.725.269.229.503.418.703.566.28.2.581.3.904.3.323 0 .63-.148.921-.445l.677-.678c.132-.137.27-.208.416-.21a.69.69 0 0 1 .416.133L14.2 12.26c.12.08.206.171.257.274a.738.738 0 0 1 .078.335c0 .234-.103.474-.309.72a2.054 2.054 0 0 1-.137.155c-.269.314-.591.55-.968.708a3.384 3.384 0 0 1-1.226.253Z"></path></svg>
                <div>
                <i class="fa cart-icon" >&#xf07a;</i>
                <span class='badge badge-warning' id='lblCartCount'> 3 </span>
            </div>
            <div class="menu-sign md-3 menu-icon"  onclick="toggleMenu()" >&#9776;</div> 
            <div class="md-2 menu"  onclick="toggleMenu()"> मेन्यू </div>
            </div>
            
        </div>
    </div>

</header>

<div class="secondary-nav text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew sub-heading-title">
    <p>
        <span class="red-circle"></span>
         सभी 350+ वीडियो श्रृंखला पाएँ एक साथ!
        <a href="https://acharyaprashant.org/en/packs/all-video-series" class="cta-button" > यहाँ क्लिक करें</a>
    </p>
</div>
