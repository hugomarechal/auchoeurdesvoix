@extends('layouts.main.main', ['isReversed' => true])

@section('title', 'Au Chœur des Voix')

@section('meta_description', "Metadata")

@section('content')
<div class="w-full mx-auto lg:max-w-[1260px] mt-[150px] lg:mt-[104px] lg:mb-[100px] px-4">
    <h1 class="mb-10 text-[#1A1A1A] text-4xl font-outfit font-semibold md:text-[50px] lg:text-[50px] text-center leading-[48px] md:leading-[75px] lg:leading-[90px]">Contact et coordonnées</h1>
    <div class="flex flex-col lg:flex-row-reverse lg:gap-5 mx-auto">
        <section data-aos="fade-right" data-aos-duration="1200" class="w-full h-full mx-auto flex flex-col px-6 py-10 border-2 border-indigo-400 rounded-lg text-start md:items-start relative">
            <div id="contact-loader" class="absolute top-0 left-0 w-full hidden bg-[#000000] opacity-40 rounded-lg">
                <img src="/loader.svg" class="w-20 absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
            </div>
            <div class="self-stretch mb-10 text-indigo-950 text-center text-xl font-semibold leading-[34px] md:text-3xl md:text-start">Pour toute demande d’information <br>(horaires, tarifs, dispos)</div>
            <form class="md:text-lg" id="contact-form" action="{{route('contact.post')}}" method="post">
                @csrf
                <input type="text" class="px-4 py-2.5 mb-6 w-full rounded-lg border border-indigo-400 bg-indigo-50" required name="name" placeholder="Nom">
                <input type="email" class="px-4 py-2.5 mb-6 w-full rounded-lg border border-indigo-400 bg-indigo-50" required name="email" placeholder="Email">
                <input type="text" class="px-4 py-2.5 mb-6 w-full rounded-lg border border-indigo-400 bg-indigo-50" required name="subject" placeholder="Sujet de la demande">
                <textarea class="px-4 py-2.5 mb-6 w-full rounded-lg border border-indigo-400 bg-indigo-50 min-h-20 max-h-40" required name="message" placeholder="Votre message"></textarea>
                <div id="contact-success-alert" class="bg-[#2ecc71] px-4 py-2 hidden text-sm text-white mb-6 rounded-lg">
                    Le formulaire a bien été envoyé !
                </div>
                <button type="submit" class="text-white bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit">
                        Envoyer
                </button>
            </form>
        </section>
        <section class="flex flex-col w-full items-center pb-[100px] mt-9 lg:mt-0">
            <h3 data-aos="fade-left" data-aos-duration="1000" class="text-indigo-800 text-xl md:text-2xl mb-10 px-4 lg:pt-2 font-light">Vous avez un projet d'évènement ? <br>Vous souhaitez explorer votre potentiel musical ? <br>Connaître les dates des prochains concerts ?</h3>
            <div data-aos="fade-left" data-aos-duration="1200" class="w-full max-w-full md:max-w-full md:min-w-[440px] lg:max-w-[507px] border-2 border-indigo-400 p-6 rounded-lg md:p-8">
            <h4 class="self-stretch mb-10 text-indigo-950 text-center text-xl font-semibold leading-[34px] md:text-3xl md:text-start">
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
                <a href="https://www.facebook.com/profile.php?id=100008156319543" target="_blank" class="lg:flex lg:items-center text-white bg-indigo-400 hover:opacity-80 hover:scale-105 transition-all duration-500 rounded-lg font-outfit font-semibold py-3 px-6 flex w-fit mt-4">
                    <img class="mr-4 w-8" src="/images/facebook.svg" alt="Facebook"> Plus d'actualités sur ma page Facebook
                </a>
            </div>
        </section>
    </div>
</div>
@endsection


@push('script_stack')
    <script type="module">
        var isFormSent = false;

        $('#contact-form').submit(function(e){
            e.preventDefault();

            const formData = $('#contact-form').serialize();

            if(!isFormSent){
                isFormSent = true;
                $('#contact-loader').fadeIn()

                axios.post('/contact', formData)
                    .then(data => {
                        $('#contact-loader').fadeOut(function() {
                            $('#contact-success-alert').fadeIn()
                        })
                    })
                    .catch(err => {
                        console.log("error " , err)
                    })
            }
        })
    </script>
@endpush

