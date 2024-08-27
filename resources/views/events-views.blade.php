@extends('layouts.landing')

@section('title', 'Eventos')

@section('content')

{{-- BOTON VOLVER  --}}
<a href="{{route('home')}}">
    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.0375C0 4.74356 4.49 0.447042 10 0.447042L10.2798 0.450729C15.6706 0.592974 20 4.83329 20 10.0375C20 15.3218 15.52 19.6279 10 19.6279C4.49 19.6279 0 15.3218 0 10.0375ZM11.98 13.8737C12.27 13.586 12.27 13.1352 11.97 12.8571L9.02 10.0375L11.97 7.2179C12.27 6.93977 12.27 6.47943 11.98 6.20131C11.68 5.9136 11.21 5.9136 10.92 6.20131L7.43 9.52919C7.29 9.66346 7.21 9.84568 7.21 10.0375C7.21 10.2293 7.29 10.4115 7.43 10.5458L10.92 13.8737C11.06 14.0175 11.25 14.0847 11.44 14.0847C11.64 14.0847 11.83 14.0175 11.98 13.8737Z" fill="#58BEBE"/>
    </svg>
</a>
<a href="{{route('home')}}" class="link underline text-secundario">Volver</a>


<h2 class="title px-6 py-2 text-3xl bg-sky-200 text-tL font-bold border-2 border-tL p-2">Eventos</h2>

<div class="grid grid-cols-3 gap-4">
  @foreach ($events as $index => $event)
    @if ($index < 9)
      <div class="border border-gray-100 p-4">
        <h2 class="text-xl font-bold">{{ \Carbon\Carbon::parse($event->date)->format('d-M-Y') }}</h2>
        <h3 class="text-lg">{{ $event->title }}</h3>
        <p>{{ $event->description }}</p>
        <a href="{{ route('events.show', $event->id) }}" class="bg-sky-200 text-sky-800 font-bold py-1 px-2 rounded-lg">Leer más</a>
      </div>
    @endif
  @endforeach
</div>

<div class="mt-4">
    {{ $events->links() }}
  </div>

@endsection
