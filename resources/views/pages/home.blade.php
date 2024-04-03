@extends('layouts.main.main')

@section('title', 'Au Chœur des Voix')

@section('meta_description', "Metadata")

@section('content')

    <section style="background-image: url(/images/home/hero/stage.jpeg)" class="bg-center bg-cover lg:h-[100vh] lg:flex">
        <div class="flex flex-col md:flex-row-reverse justify-center md:items-center gap-12 w-full px-4 md:px-20 lg:px-0 mx-auto lg:max-w-[1260px] mt-[50%] mb-[100px] md:mt-[140px] lg:mt-[104px]">
            <div data-aos="fade-down" data-aos-duration="3000" style="background-image: url(/images/carole_hero.jpeg)" class="border-2 border-white rounded-full md:rounded-lg self-center grayscale-0 w-[250px] h-[250px] md:w-[300px] md:h-[300px] bg-[top_left_40%] bg-[length:310px] md:bg-[length:450px]"></div>
            <div data-aos="fade-left" data-aos-duration="1200" class="flex-col items-center justify-center text-start text-white py-8 gap-6 lg:text-start lg:items-start">
                <h1 class="max-w-[292px] w-full text-5xl md:max-w-full md:text-6xl lg:text-[64px] font-outfit font-semibold leading-[1.2] mb-px">
                    Carole Formisano
                </h1>
                <h3 data-aos="fade-left" data-aos-duration="800" class="font-light text-lg md:text-2xl leading-[36px] max-w-[296px] w-full md:max-w-full">
                    Chanteuse lead et choriste
                </h3>
                <a href="/about" class="bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit mt-4">
                    Découvrez mon univers <img class="ml-4" src="/images/arrow-right.svg" alt="Flèche">
                </a>
            </div>
        </div>
    </section>
    <section class="flex flex-col items-center justify-center mx-auto w-full lg:max-w-[1260px] px-4 mt-[100px]">
        <h2 data-aos-duration="1800" data-aos="fade-left" class="self-start mb-10 text-3xl text-blue-950 md:text-[50px] leading-[48px] lg:leading-[75px] font-outfit font-semibold">Laissez vous accompagner dans votre prochaine expérience musicale</h2>
        <div class="flex flex-col md:flex-row md:flex-wrap md:items-stretch md:justify-center lg:items-start lg:flex-nowrap gap-10 md:gap-5 lg:gap-9">
            @php
                $cards = [
                    [
                        "icon" => "/images/about/clipboard-tick.svg",
                        "title" => "Concerts et représentations",
                        "text" => "Venez mettre un pied dans mon univers... Retrouvez moi en solo ou accompagnée lors de mes prochains évènements musicaux ou sur mes réseaux sociaux."
                    ],
                    [
                        "icon" => "/images/about/pen-tool.svg",
                        "title" => "Cours de chant individuel",
                        "text" => "Envie d'apprendre à chanter, de libérer votre voix ? Je vous initie aux techniques vocales, la gestion des effets, le travail de la respiration, l'augmentation de la puissance..."
                    ],
                    [
                        "icon" => "/images/about/clipboard-tick.svg",
                        "title" => "Chorale enfants ou adultes",
                        "text" => "Apprendre à chanter et écouter au sein d'un groupe, travail sur la posture et la justesse, s'amuser en reprenant des titres actuels, sympas et dynamiques..."
                    ],
                    [
                        "icon" => "/images/about/search-normal.svg",
                        "title" => "Préstations évènementielles",
                        "text" => "Pour toute occasion, je vous accompagne dans la création de votre évènement musical, de la planification au jour J. Conçevons ensemble votre projet pour rendre ce moment unique et inoubliable."
                    ],

                ]
            @endphp
            @foreach($cards as $key => $card)
                @include("components.card", $card)
            @endforeach
        </div>
        <a data-aos="fade-up" data-aos-duration="1200" href="/contact" class="text-white bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit mt-6">
            Obtenir un renseignement <img class="ml-4" src="/images/arrow-right.svg" alt="Flèche">
        </a>
    </section>
    <section class="relative flex flex-col w-full lg:max-w-[1260px] items-between lg:justify-end px-4 mx-auto mt-[100px] pb-[100px] overflow-x-hidden">
        <div class="w-full lg:max-w-[720px] lg:items-start lg:mb-[120px]">
            <h2 data-aos-duration="1200" data-aos="fade-left" class="self-start mb-10 text-3xl text-indigo-950 md:text-[50px] leading-[48px] lg:leading-[75px] font-outfit font-semibold">À propos de moi</h2>
            <h5 data-aos="fade-left" data-aos-duration="3000" class="text-indigo-800 text-2xl md:text-2xl mb-10 px-4 font-light">Chanter : une activité extraordinaire, sans artifice <br>et accessible à chacun d'entre nous.<br><br>Notre voix est le reflet de notre être et de nos émotions.</h5>
            <div class="lg:flex flex-row gap-6">
                <div data-aos="fade-up" data-aos-duration="1200" class="w-full lg:max-w-[50%] h-[300px] bg-cover bg-right rounded-lg lg:hidden" style="background-image: url('/images/home/carole_studio.jpg');"></div>
                <div data-aos="fade-up" data-aos-duration="1800" class="border-2 border-indigo-400 bg-white rounded-lg py-6 px-4 mt-4 md:mt-6 md:text-lg">
                    <p>Je suis <span class="text-indigo-800">Carole</span>. Bienvenue dans mon monde ! <br><br>Depuis mes débuts en 2004 au sein d'un orchestre, ma passion pour le chant n'a cessé de croître. <br><br>Depuis 2015, je me produis avec différents groupes et en solo, explorant un vaste éventail de styles musicaux, du rock à la soul en passant par le funk et la pop. <br><br>Je suis impatiente de partager avec vous ma musique et mon énergie lors de nos prochains événements et sessions de chorale !</p>
                    <a href="/about" class="text-white bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit mt-4">
                        En savoir plus <img class="ml-4" src="/images/arrow-right.svg" alt="Flèche">
                    </a>
                </div>
            </div>
        </div>
        <div data-aos-duration="1200" data-aos="fade-left" class="-z-50 !absolute hidden lg:block translate-x-[105.8%] right-0 w-full max-w-[612px] h-[767px] bg-cover bg-right" style="background-image: url('/images/home/carole_studio.jpg');"></div>
    </section>
{{--    <section class="flex flex-col w-full lg:max-w-[1260px] items-center px-4 mb-[100px]">
        <h2 data-aos-duration="1200" data-aos="fade-left" class="self-start mb-10 text-3xl text-indigo-950 md:text-[50px] leading-[48px] lg:leading-[75px] font-outfit font-semibold">Mes dernières actualités</h2>
        <iframe class="w-full rounded-lg shadow-lg shadow-blue-950" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid02q25U8KVophALYR897Tg4ob3yjZvfthYnD6M5uhsp1BGLwpkbz6hrBAe75EV2195zl%26id%3D100008156319543&show_text=true" width="100%" height="645" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        <a data-aos="fade-up" data-aos-duration="1200" href="https://www.facebook.com/profile.php?id=100008156319543" target="_blank" class="text-white bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit mt-6">
            Plus d'actu <img class="ml-4" src="/images/arrow-right.svg" alt="Flèche">
        </a>
    </section>--}}

@endsection
