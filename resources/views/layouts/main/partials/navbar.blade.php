<nav class="-z-10 relative lg:max-w-[1260px] py-6 px-[26px] xl:px-0 xl:mx-auto w-full flex items-center justify-between">
    <a href="{{route('home')}}" class="z-50">
        <img class="w-[80px] lg:w-[120px] hover:scale-110 transition-all" src="{{ asset('images/logo_acdv.png') }}" alt="logo">
    </a>
{{--
    <h2 class="pb-px text-2xl md:text-3xl lg:text-4xl hover:scale-105 transition-all duration-300 @if($isReversed) text-indigo-950 @else text-white @endif"><a href="/">Au Chœur des Voix</a></h2>
--}}
    <ul id="desktop-menu" class="hidden invisible md:flex md:visible md:justify-end text-white text-[15px] lg:text-2xl md:w-[460px]">
        <li @class(['relative py-4 px-6 w-fit font-normal text-lg font-outfit before:transition-all before:duration-500 before:origin-left before:scale-0 before:absolute before:bottom-0 before:left-0 before:right-0 before:right-[50%] before:translate-x-1/2 before:h-[1px] hover:before:scale-100 '. (!$isReversed ? 'text-white/60 before:bg-white' : 'text-black before:bg-dark-pink'), (!$isReversed ? '!font-bold !text-white' : '!font-bold !text-dark-pink') => Request::route()->getName() === 'home'])>
            <a href="{{route('home')}}">Accueil</a>
        </li>
        <li @class(['py-4 px-6 w-fit relative font-normal text-lg font-outfit before:transition-all before:duration-500 before:origin-left before:scale-0 before:absolute before:bottom-0 before:left-0 before:right-0 before:right-[50%] before:translate-x-1/2 before:h-[1px] hover:before:scale-100 '. (!$isReversed ? 'text-white/60 before:bg-white' : 'text-black before:bg-dark-pink'), (!$isReversed ? '!font-bold !text-white' : '!font-bold !text-dark-pink')=> Request::route()->getName() === 'about'])>
            <a href="{{route('about')}}">À propos</a>
        </li>
        <li @class(['py-4 px-6 w-fit font-normal relative text-lg font-outfit font-normal before:transition-all before:duration-500 before:origin-left before:scale-0 before:absolute before:bottom-0 before:left-0 before:right-[50%] before:translate-x-1/2 before:h-[1px] hover:before:scale-100 '. (!$isReversed ? 'text-white/60 before:bg-white' : 'text-black before:bg-dark-pink'), (!$isReversed ? '!font-bold !text-white' : '!font-bold !text-dark-pink') => Request::route()->getName() === 'contact'])>
            <a href="{{route('contact')}}">Contact</a>
        </li>
    </ul>
    <div class="z-50 md:hidden p-2 cursor-pointer" id="burger-menu">
        <div class="pt-0.5 rounded-[7px] w-[20px] mb-[5px] relative top-0 rotate-0 transition-all @if($isReversed) bg-indigo-950 @else bg-white @endif"></div>
        <div class="pt-0.5 rounded-[7px] w-[20px] mb-[5px] relative right-0 opacity-100 transition-all @if($isReversed) bg-indigo-950 @else bg-white @endif"></div>
        <div class="pt-0.5 rounded-[7px] w-[20px] relative bottom-0 rotate-0 transition-all @if($isReversed) bg-indigo-950 @else bg-white @endif"></div>
    </div>
</nav>

<div id="mobile-menu" class="invisible md:!invisible transition-all md:!hidden z-10 fixed top-0 pt-[118px] pb-[100px] left-0 px-4 w-full text-white text-2xl bg-gradient-to-b from-indigo-800 via-indigo-900 to-indigo-950 font-semibold ">
    <ul class="menu-list opacity-0 w-full translate-y-10 transition-all flex flex-col items-start gap-4 md:gap-[60px] text-white text-2xl font-light md:font-bold md:text-[15px]">
        <li @class(['font-bold' => Request::route()->getName() === 'home'])><a href="{{route('home')}}">Accueil</a></li>
        <li @class(['font-bold' => Request::route()->getName() === 'about'])><a href="{{route('about')}}">À propos</a></li>
        <li @class(['font-bold' => Request::route()->getName() === 'contact'])><a href="{{route('contact')}}">Contact</a></li>
    </ul>
</div>

@push('script_stack')
    <script type="module">

        $('#close-top-menu').click(function () {
            $('#top-menu').css('display', 'none');
        })

        $('#burger-menu').click(function () {
            $('#mobile-menu').toggleClass('invisible overflow-auto overflow-hidden opacity-1');
            $('.menu-list').toggleClass('opacity-1 opacity-0 translate-y-0 translate-y-10');
            $('header').toggleClass('bg-[#17213F] bg-transparent')
            $('body,html').toggleClass('overflow-hidden')
            toggleBurgerMenu()
        })

        var toggleBurgerMenu = function () {
            $('#burger-menu div:first-child').toggleClass('top-[7px] top-0 -rotate-45 rotate-0')
            $('#burger-menu div:nth-child(2)').toggleClass('right-[40px] right-0 opacity-0 opacity-100')
            $('#burger-menu div:nth-child(3)').toggleClass('bottom-[7px] bottom-0 rotate-45 rotate-0')
        }

        $(window).on('load', function () {

            $('#desktop-menu li').mouseenter(function () {
                if(!$(this).hasClass('font-bold')) {
                    $(this).toggleClass('font-normal');
                }
            })
            $('#desktop-menu li').mouseleave(function () {
                $(this).toggleClass('font-normal');
            })
        });
    </script>
@endpush
