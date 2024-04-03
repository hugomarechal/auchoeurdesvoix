<!-- Footer -->
<footer class="z-10 bg-indigo-950 relative md:flex md:flex-col items-center">
    <div data-aos-duration="1200" data-aos="fade-up" class="mx-auto flex flex-col w-full items-center px-4 py-[80px] md:items-start md:justify-between md:flex-row md:px-[80px] lg:pt-[65px] lg:pr-[188px] lg:pb-[65px] lg:pl-[108px] lg:max-w-[1440px]">
    <h2 class="mb-2 text-3xl md:text-xl md:font-semibold text-white md:text-[50px] leading-[48px] lg:leading-[75px] font-outfit">Au Chœur des Voix</h2>
        @php
            $content = [
                "Pages" => ["Accueil" => "home", "À propos" => "about", "Me contacter" => "contact", "Mentions légales" => "mentions-legales"],
                "Contact info" => ["caroleforsinger@gmail.com" => "mailto:caroleforsinger@gmail.com",
                                    "06 11 88 16 86" => "tel:+0611881686",
                                    "Marseille 11ème" => "https://maps.app.goo.gl/WaJ6ySajKE7A11Fs6",
                                    "<img class='w-6' src='/images/facebook.svg' alt='Logo Facebook'>" => "https://www.facebook.com/profile.php?id=100008156319543"]
            ]
        @endphp
        <div class="flex flex-col w-full max-w-[250px] items-center mt-10 gap-6 text-white md:w-fit md:mt-0 md:items-start">
            <h5 class="text-lg font-bold">Pages</h5>
            <ul class="flex flex-col gap-4 text-center items-center md:items-start md:text-left md:mt-0">
                @foreach($content["Pages"] as $page => $route)
                    <li class="text-[15px] z-30"><a href={{route($route)}}>{{$page}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="flex flex-col w-full max-w-[250px] items-center mt-10 gap-6 text-white md:w-fit md:mt-0 md:items-start">
            <h5 class="text-lg font-bold">Contact</h5>
            <ul class="flex flex-col gap-4 text-center items-center md:items-start md:text-left md:mt-0">
                @foreach($content["Contact info"] as $info => $link)
                    <li class="text-[15px] z-30"><a target="_blank" href={{$link}}>{!! $info !!}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <p class="text-gray-500 w-full p-4">
        © {{Carbon\Carbon::now()->format('Y')}} Copyright Carole Formisano. Tous droits réservés.
    </p>
</footer>
<!-- Footer -->
