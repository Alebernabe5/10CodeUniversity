@extends('layouts.landing')

@section('title', 'Home')

@section('content')

<div class="w-auto h-150">
  <img src="{{asset('assets/img/heroCampus.jpg')}}" alt="" class="w-full h-full object-contain">
</div>

{{-- QUE ESTUDIAR  --}}
<section>
  <h2 class="title  px-6 py-2 text-3xl bg-sky-200  text-tL font-bold border-2 border-tL p-2">Qué estudiar</h2>
  <div>
    
    <p>En 10Code University, el objetivo es desarrollar la mejor educación  de Europa, donde los estudiantes puedan desarrollar todo su potencial en beneficio de las personas y la sociedad.</p>
    {{-- Aqui va un div con 3 columnas  --}}
    <div></div>
  </div>

</section>
 
{{-- EVENTOS  --}}
<section>
  <h2 class="title  px-6 py-2 text-3xl bg-sky-200  text-tL font-bold border-2 border-tL p-2">Eventos</h2>
      <div class="flex items-center space-x-2 p-2">
        <h3 class="subtitle inline mr-5 text-xl font-bold text-sky-800">Próximos eventos</h3>
        <a href="{{route('events.index')}}" class="link underline text-secundario">Ver todos</a>
        <a href="{{route('events.index')}}" class="ml-1">
            <svg class="inline w-5 h-5" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3011 10.3013C20.3011 15.8213 15.8111 20.3013 10.3011 20.3013L10.0214 20.2974C4.63057 20.1491 0.301147 15.7277 0.301147 10.3013C0.301147 4.79127 4.78115 0.30127 10.3011 0.30127C15.8111 0.30127 20.3011 4.79127 20.3011 10.3013ZM8.32115 6.30127C8.03115 6.60127 8.03115 7.07127 8.33115 7.36127L11.2811 10.3013L8.33115 13.2413C8.03115 13.5313 8.03115 14.0113 8.32115 14.3013C8.62115 14.6013 9.09115 14.6013 9.38115 14.3013L12.8711 10.8313C13.0111 10.6913 13.0911 10.5013 13.0911 10.3013C13.0911 10.1013 13.0111 9.91127 12.8711 9.77127L9.38115 6.30127C9.24115 6.15127 9.05115 6.08127 8.86115 6.08127C8.66115 6.08127 8.47115 6.15127 8.32115 6.30127Z" fill="#58BEBE"/>
            </svg>
        </a>
        <a href="{{route('events.setting')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 50 50">
                <path d="M47.16,21.221l-5.91-0.966c-0.346-1.186-0.819-2.326-1.411-3.405l3.45-4.917c0.279-0.397,0.231-0.938-0.112-1.282 l-3.889-3.887c-0.347-0.346-0.893-0.391-1.291-0.104l-4.843,3.481c-1.089-0.602-2.239-1.08-3.432-1.427l-1.031-5.886 C28.607,2.35,28.192,2,27.706,2h-5.5c-0.49,0-0.908,0.355-0.987,0.839l-0.956,5.854c-1.2,0.345-2.352,0.818-3.437,1.412l-4.83-3.45 c-0.399-0.285-0.942-0.239-1.289,0.106L6.82,10.648c-0.343,0.343-0.391,0.883-0.112,1.28l3.399,4.863 c-0.605,1.095-1.087,2.254-1.438,3.46l-5.831,0.971c-0.482,0.08-0.836,0.498-0.836,0.986v5.5c0,0.485,0.348,0.9,0.825,0.985 l5.831,1.034c0.349,1.203,0.831,2.362,1.438,3.46l-3.441,4.813c-0.284,0.397-0.239,0.942,0.106,1.289l3.888,3.891 c0.343,0.343,0.884,0.391,1.281,0.112l4.87-3.411c1.093,0.601,2.248,1.078,3.445,1.424l0.976,5.861C21.3,47.647,21.717,48,22.206,48 h5.5c0.485,0,0.9-0.348,0.984-0.825l1.045-5.89c1.199-0.353,2.348-0.833,3.43-1.435l4.905,3.441 c0.398,0.281,0.938,0.232,1.282-0.111l3.888-3.891c0.346-0.347,0.391-0.894,0.104-1.292l-3.498-4.857 c0.593-1.08,1.064-2.222,1.407-3.408l5.918-1.039c0.479-0.084,0.827-0.5,0.827-0.985v-5.5C47.999,21.718,47.644,21.3,47.16,21.221z M25,32c-3.866,0-7-3.134-7-7c0-3.866,3.134-7,7-7s7,3.134,7,7C32,28.866,28.866,32,25,32z"></path>
            </svg>
        </a>
      </div>
    @include('layouts._partials.cardEvent')
     
</section>

{{-- COMUNIDAD 10CODE --}}
<section>
  <h2 class="title  px-6 py-2 text-3xl bg-sky-200  text-tL font-bold border-2 border-tL p-2">Comunidad 10Code University</h2>
    <div>
      <p>Uno de los objetivos prioritarios del proyecto Comunidad 10Code University es incrementar la conexión entre todos los alumnos y ex-alumnos de 10Code University repartidos por el mundo. Para ello, se articulan cuatro interesantes programas que fomentan el intercambio de experiencias y potencian la colaboración mutua.</p>
      {{-- Aqui van las imagenes separadas en 5 columnas  --}}
    </div>

</section>


@endsection
    



