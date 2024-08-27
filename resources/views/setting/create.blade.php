@extends('layouts.landing')

@section('title', 'Configuración')

@section('content')

{{-- BOTON VOLVER  --}}
<a href="{{route('events.setting')}}">
  <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.0375C0 4.74356 4.49 0.447042 10 0.447042L10.2798 0.450729C15.6706 0.592974 20 4.83329 20 10.0375C20 15.3218 15.52 19.6279 10 19.6279C4.49 19.6279 0 15.3218 0 10.0375ZM11.98 13.8737C12.27 13.586 12.27 13.1352 11.97 12.8571L9.02 10.0375L11.97 7.2179C12.27 6.93977 12.27 6.47943 11.98 6.20131C11.68 5.9136 11.21 5.9136 10.92 6.20131L7.43 9.52919C7.29 9.66346 7.21 9.84568 7.21 10.0375C7.21 10.2293 7.29 10.4115 7.43 10.5458L10.92 13.8737C11.06 14.0175 11.25 14.0847 11.44 14.0847C11.64 14.0847 11.83 14.0175 11.98 13.8737Z" fill="#58BEBE"/>
  </svg>
</a>
<a href="{{route('events.setting')}}" class="link underline text-secundario">Volver</a>

{{-- <div class="mx-auto  p-4 w-3/4 border-terciario h-100%">  --}}
  <form method="POST" action="{{route('events.store')}}">
    @csrf  {{-- tokken para identificar nuestro formulario  --}}
  
      <label class="font-bold text-secundario">Título:</label>
      <input type="text" name="title" class="border-2 border-primario focus:ring-primario focus:border-primario rounded-md mt-1 w-full">
      @error('title')
        <p class="text-red-500">{{$message}}</p>
      @enderror
  
      <label class="font-bold text-secundario">Descripción:</label>
      <input type="text" name="description" class="border-2 border-primario focus:ring-primario focus:border-primario rounded-md mt-1 w-full">
      @error('description')
        <p class="text-red-500">{{$message}}</p>
      @enderror
    
  
      <label class="font-bold text-secundario">Lugar:</label>
      <input type="text" name="place" class="border-2 border-primario focus:ring-primario focus:border-primario rounded-md mt-1 w-full">
      @error('place')
        <p class="text-red-500">{{$message}}</p>
      @enderror
  
      <label class="font-bold text-secundario">Fecha:</label>
      <input type="date" name="date" class="border-2 border-primario focus:ring-primario focus:border-primario rounded-md mt-1 w-full">
      @error('date')
        <p class="text-red-500">{{$message}}</p>
      @enderror
  
      <label class="font-bold text-secundario">Capacidad:</label>
      <input type="text" name="capacity" class="border-2 border-primario focus:ring-primario focus:border-primario rounded-md mt-1 w-full">
      @error('capacity')
        <p class="text-red-500">{{$message}}</p>
      @enderror
  
      <label class="font-bold text-secundario">Organizador:</label>
      <input type="text" name="organizer" class="border-2 border-primario focus:ring-primario focus:border-primario rounded-md mt-1 w-full">
      @error('organizer')
        <p class="text-red-500">{{$message}}</p>
      @enderror
  
      <br>
      <input type="submit" class="bg-sky-200 text-sky-800 font-bold py-1 px-2 rounded-lg  hover:bg-secundario  focus:ring-violet-300" value="Crear">
  </form>
</div>

@endsection
