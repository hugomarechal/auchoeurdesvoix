@extends('layouts.main.main')

@section('title', 'Prochainement')

@section('meta_description', "Retrouvez prochainement toutes les actualités et prestations de Carole Formisano sur le site de Carol's Events")

@section('content')

    <section style="background-image: url(/images/micro.png)" class="bg-[top_left_55%] md:bg-center lg:bg-left bg-cover lg:h-[100vh] lg:flex pt-32">
        <div class="flex flex-col justify-center md:items-center gap-12 w-full px-4 md:px-20 lg:px-0 mx-auto lg:max-w-[1260px] mb-[100px]">
{{--
            <div  style="background-image: url(/images/carole_hero.jpeg)" class="border-2 border-white rounded-full md:rounded-lg self-center grayscale-0 w-[250px] h-[250px] md:w-[300px] md:h-[300px] bg-[top_left_40%] bg-[length:310px] md:bg-[length:450px]"></div>
--}}
            <div class="flex-col items-center justify-center text-start text-white py-8 gap-6 lg:text-start lg:items-start">
                <h1 class=" w-full text-5xl md:max-w-full md:text-6xl lg:text-[74px] font-outfit font-semibold leading-[1.2] mb-2 lg:mt-[120px]">
                    Prochainement : Carole Formisano
                </h1>
                <h3 class="font-light text-lg md:text-3xl leading-[36px] max-w-[296px] w-full md:max-w-full lg:my-4 bg-indigo-700 bg-opacity-50 p-2 rounded-lg">
                    Retrouvez toute mon actualité <br>Concerts en groupe ou en solo - Evenementiel - Marseille et alentours
                </h3>
                <div class="flex items-center gap-3">

                    <a href="https://www.instagram.com/carols.events/" target="_blank" class="lg:flex items-center text-white bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold p-3 flex w-fit mt-4">
                        <img class="mr-2 w-8" src="/images/facebook.svg" alt="Instagram">
                        Instagram
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100008156319543" target="_blank" class="lg:flex items-center text-white bg-blue-700 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold p-3 flex w-fit mt-4">
                        <img class="mr-2 w-8" src="/images/facebook.svg" alt="Facebook">
                        Facebook
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section id="services" class="flex flex-col items-center justify-center mx-auto w-full lg:max-w-[1260px] px-4 mt-[100px]">
        <h2 class="self-start mb-10 text-3xl text-blue-950 md:text-[50px] leading-[48px] lg:leading-[75px] font-outfit font-semibold">Laissez vous accompagner dans votre prochaine expérience musicale</h2>
        <div class="flex flex-col md:flex-row md:flex-wrap md:items-stretch md:justify-center lg:items-start lg:flex-nowrap gap-10 md:gap-5 lg:gap-9">
            @php
                $cards = [
                    [
                        "icon" => "/images/about/clipboard-tick.svg",
                        "title" => "Concerts et représentations",
                        "text" => "Venez mettre un pied dans mon univers... Retrouvez moi en solo ou accompagnée lors de mes prochains évènements musicaux ou sur mes réseaux sociaux."
                    ],
                    [
                        "icon" => "/images/about/search-normal.svg",
                        "title" => "Préstations évènementielles",
                        "text" => "Pour toute occasion, je vous accompagne dans la création de votre évènement musical, de la planification au jour J. Conçevons ensemble votre projet pour rendre ce moment unique et inoubliable."
                    ],
                    [
                        "icon" => "/images/about/pen-tool.svg",
                        "title" => "Cours de chant individuel",
                        "text" => "Envie d'apprendre à chanter, de libérer votre voix et d’explorer votre musicalité ? Je vous initie aux techniques vocales, le travail de la respiration, la gestion des effets…"
                    ],
                    [
                        "icon" => "/images/about/clipboard-tick.svg",
                        "title" => "Ateliers en groupe enfants ou adultes",
                        "text" => "Apprendre à chanter et écouter, se positionner dans l’espace et au sein d'un groupe, partager de belles énergies, s'amuser en reprenant des titres actuels, sympas et dynamiques..."
                    ],

                ]
            @endphp
            @foreach($cards as $key => $card)
                @include("components.card", $card)
            @endforeach
        </div>

    </section>

    <section class="flex flex-col lg:flex-row px-4 w-full items-center lg:justify-center pb-[100px] mt-9 lg:gap-14 lg:mx-auto bg-indigo-900 pt-20">
        <h3 ="fade-left" -duration="1000" class="text-white text-xl md:text-2xl mb-10 px-4 lg:pt-2 font-light">Vous avez un projet d'évènement ? <br><br>Vous souhaitez explorer votre potentiel musical ? <br><br>Connaître les dates des prochains concerts ?</h3>
        <div ="fade-left" -duration="1200" class="bg-white w-full max-w-full md:max-w-full md:min-w-[440px] lg:max-w-[507px] border-2 border-indigo-400 p-6 rounded-lg md:p-8">
            <h4 class="self-stretch mb-4 text-indigo-950 text-center text-xl font-semibold leading-[34px] md:text-3xl md:text-start">
                Informations générales
            </h4>
            @php
                $contact = [
                    ["type" => "Mail", "content" => "caroleforsinger@gmail.com", "href" => "mailto:caroleforsinger@gmail.com"],
                    ["type" => "Numéro de téléphone", "content" => "06 11 88 16 86", "href" => "tel:+0611881686"],
                    ["type" => "Adresse", "content" => "Marseille 11ème", "href" => "https://maps.app.goo.gl/WaJ6ySajKE7A11Fs6"]
                ]
            @endphp
            @foreach($contact as $info)
                <div class="mt-6">
                    <p class="mb-2">{{$info["type"]}}</p>
                    <a href="{{$info["href"]}}" target="_blank"><p class="text-lg text-indigo-800 font-semibold">{!! $info["content"] !!}</p></a>
                </div>
            @endforeach
        <div class="flex flex-col md:flex-row items-start md:items-center gap-3 w-full ">

                <a href="https://www.instagram.com/carols.events/" target="_blank" class="lg:flex items-center text-white bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold p-3 flex w-fit mt-4">
                    <img class="mr-2 w-8" src="/images/facebook.svg" alt="Instagram">
                    Instagram
                </a>
                <a href="https://www.facebook.com/profile.php?id=100008156319543" target="_blank" class="lg:flex items-center text-white bg-blue-700 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold p-3 flex w-fit mt-4">
                    <img class="mr-2 w-8" src="/images/facebook.svg" alt="Facebook">
                    Facebook
                </a>
        </div>
    </section>
@endsection
