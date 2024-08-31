@extends('layouts.main.main', ['isReversed' => true])

@section('title', 'Au Chœur des Voix')

@section('meta_description', "Metadata")

@section('content')

    <div class="flex flex-col mt-[116px] lg:mt-[145px] lg:w-full lg:max-w-[1260px] lg:mx-auto px-4 lg:px-0">
        <h1 data-aos-duration="1800" data-aos="fade-down" class="mb-10 text-blue-950 text-4xl font-outfit font-semibold md:text-[50px] lg:text-[50px] text-center leading-[48px] md:leading-[75px] lg:leading-[90px] ">Je suis Carole Formisano</h1>
        <div class="relative w-full flex flex-col">
            <section class="flex flex-col items-center lg:w-full lg:mx-auto pb-[100px]">
                <div class="flex flex-col gap-9 lg:flex-row">
                    <div>
                        <div data-aos="fade-right" data-aos-duration="1800" style="background-image: url(/images/about/carole_about.jpg)" class="w-full h-[400px] lg:h-[900px] bg-cover lg:bg-[length:600px] bg-[center_top_37%] lg:bg-center rounded-lg bg-no-repeat"></div>
                        <div data-aos-duration="1200" data-aos="fade-up" class="relative flex flex-col justify-start gap-6 w-full lg:max-w-[612px] p-6 lg:p-8 mt-9 border-2 border-indigo-400 rounded-lg lg:text-lg">
                            <div class="text-lightgrey font-inter">
                                Depuis toute petite en tant que danseuse, puis plus tard à mes débuts dans le chant en 2004, j'ai été captivée par la puissance émotionnelle de la musique. <br><br>Au fil des années, j'ai emprunté divers chemins musicaux, me produisant avec différents groupes. Cette diversité m'a permis d'explorer une multitude de styles, du rock à la soul en passant par le funk, la pop et le Gospel. <br><br>Chaque performance est pour moi une occasion de partager avec le public cette passion brûlante qui m'anime, créant ainsi des instants uniques et inoubliables. <br><br>Je suis ravie de vous inviter à découvrir mon monde musical et à vous embarquer avec moi dans cette aventure où j'espère que ma musique touchera vos cœurs et vous fera vibrer au rythme de mes mélodies.
                            </div>
                            <a href="/contact" class="text-white bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit mt-4">
                                Me contacter <img class="ml-4" src="/images/arrow-right.svg" alt="Flèche">
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-stretch gap-10 md:gap-5 lg:gap-9">
                        <div data-aos-duration="1200" data-aos="fade-up" class="relative w-full lg:max-w-[288px] p-6 lg:p-8 bg-lighter-grey border-2 border-indigo-400 rounded-lg">
                            <h2 class="font-outfit font-semibold text-2xl leading-9">Mon parcours musical</h2>
                            @php
                                $timeline = [
                                    ["year" => "2004", "text" => "Orchestre BCBG - Chant et Chœurs"],
                                    ["year" => "2015", "text" => "Groupe Second Life Band – Chant et Chœurs (style pop/rock)"],
                                    ["year" => "2018 à 2022", "text" => "Duo OSMOSIS – Chant lead (pop/rock/variété)"],
                                    ["year" => "2020 à 2022", "text" => "Groupe Danger Public – Chant lead (pop/rock)"],
                                    ["year" => "Depuis 2021", "text" => "Enregistrements studios auprès du Label OF Music – Chant et Chœurs"],
                                    ["year" => "Depuis 2022", "text" => "Masterclass Gospel avec Yoann FreeJay et Joby Smith"],
                                    ["year" => "2022", "text" => "Choriste au GospelNSoul Voices – Tournée avec Jean MENCONI et ses musiciens"],
                                    ["year" => "2023", "text" => "Groupe Feelgood Spirit – Chant lead et chœurs (set de reprises années 80/soul/funk)"],
                                    ["year" => "Depuis 2023", "text" => "Duo Choeurs & Chords – Chant lead (reprises revisitées de standards)"],
                                    ["year" => "Aujourd'hui", "text" => "Carole and Friends: formules à la carte du duo au groupe, avec des répertoires variés et adaptés"],
                                ]
                            @endphp
                            @foreach($timeline as $event)
                                <div class="mt-6">
                                    <p class="mb-2 text-lightbrown font-inter">{{$event["year"]}}</p>
                                    <p class="text-lg leading-[27px] font-inter font-semibold">{{$event["text"]}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section class="flex flex-col w-full lg:max-w-[1260px] items-center pb-[100px]">
                <h2 data-aos="fade-up" data-aos-duration="1200" class="mb-10 text-[32px] md:text-[50px] leading-[48px] lg:leading-[75px] font-outfit font-semibold">Informations de contact</h2>
                <div data-aos="fade-left" data-aos-duration="1200" class="w-full max-w-full md:max-w-full md:min-w-[440px] lg:max-w-[507px] border-2 border-indigo-400 p-6 rounded-lg md:p-8">
                    @php
                        $contact = [
                            ["type" => "Mail", "content" => "caroleforsinger@gmail.com", "href" => "mailto:caroleforsinger@gmail.com"],
                            ["type" => "Numéro de téléphone", "content" => "06 11 88 16 86", "href" => "tel:+0611881686"],
                            ["type" => "Adresse", "content" => "Marseille 11ème", "href" => "https://maps.app.goo.gl/WaJ6ySajKE7A11Fs6"]
                        ]
                    @endphp
                    @foreach($contact as $info)
                        <div>
                            <p class="mb-2 text-lightbrown">{{$info["type"]}}</p>
                            <a href="{{$info["href"]}}" target="_blank"><p class="text-lg font-semibold">{!! $info["content"] !!}</p></a>
                        </div>
                    @endforeach
                    <a href="/contact" class="text-white bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit mt-4">
                        Me contacter <img class="ml-4" src="/images/arrow-right.svg" alt="Flèche">
                    </a>
                </div>
            </section>
        </div>
@endsection
