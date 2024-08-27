@extends('layouts.landing')

@section('title', 'Eventos')

@section('content')

<h2 class="title px-6 py-2 text-3xl bg-sky-200 text-tL font-bold border-2 border-tL p-2">Configuración</h2>
{{-- BOTON VOLVER  --}}
<div class="mb-4">
  <a href="{{route('home')}}" class="inline-flex items-center text-secundario underline">
    <svg class="inline mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.0375C0 4.74356 4.49 0.447042 10 0.447042L10.2798 0.450729C15.6706 0.592974 20 4.83329 20 10.0375C20 15.3218 15.52 19.6279 10 19.6279C4.49 19.6279 0 15.3218 0 10.0375ZM11.98 13.8737C12.27 13.586 12.27 13.1352 11.97 12.8571L9.02 10.0375L11.97 7.2179C12.27 6.93977 12.27 6.47943 11.98 6.20131C11.68 5.9136 11.21 5.9136 10.92 6.20131L7.43 9.52919C7.29 9.66346 7.21 9.84568 7.21 10.0375C7.21 10.2293 7.29 10.4115 7.43 10.5458L10.92 13.8737C11.06 14.0175 11.25 14.0847 11.44 14.0847C11.64 14.0847 11.83 14.0175 11.98 13.8737Z" fill="#58BEBE"/>
    </svg>
    Volver
  </a>
</div>
<a href="{{route('events.create')}}" class="bg-sky-200 text-sky-800 font-bold py-1 px-2 rounded-lg  hover:bg-secundario">Crear nuevo evento</a>
</div>
<div class="flex flex-col items-center justify-center min-h-screen">


  <div class="mb-2">

  <table class="border-collapse border border-primario w-full max-w-4xl">
    <thead>
      <tr class="bg-primario text-white">
        <th class="border border-primario px-4 py-2">Eventos</th>
        <th class="border border-primario px-4 py-2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($events as $event)
      <tr>
        <td class="border border-primario px-4 py-2">{{ $event->title }}</td>
        <td class="border border-primario px-4 py-2">
          <a href="{{ route('events.show', $event->id) }}" class="text-sm text-blue-500 underline">Ver detalles</a>
          <a href="{{ route('events.edit', $event->id) }}" class="bg-sky-200 text-sky-800 font-bold py-1 px-4 rounded-lg inline-block text-center w-32  hover:bg-sky-300">Editar evento</a>
          <form method="POST" action="{{ route('events.destroy', $event->id) }}" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-700 text-white font-bold py-1 px-4 rounded-lg w-32  hover:bg-red-500">Borrar evento</button>
          </form>
          
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="2" class="border border-primario px-4 py-2">No hay datos</td>
      </tr>
      @endforelse
    </tbody>
  </table>

</div>
<div class="mt-4">
  {{ $events->links() }}
</div>
@endsection


