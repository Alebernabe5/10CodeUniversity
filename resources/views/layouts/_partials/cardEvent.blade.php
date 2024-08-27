<div class="grid grid-cols-4 gap-4 text-center">
  @foreach ($events as $index => $event)
    @if ($index == 0)
      <div class="border border-gray-400 col-span-2 row-span-2">
        <ul>
          <li><a>{{ \Carbon\Carbon::parse($event->date)->format('d-M-Y') }}</a></li>
          <li>{{ $event->title }}</li>
          <li>{{ $event->description }}</li>
          <a class="bg-sky-200 text-sky-800 font-bold py-1 px-2 rounded-lg" href="{{ route('events.show', $event->id) }}">Ver evento</a>
        </ul>
      </div>
    @elseif ($index == 1)
      <div class="border border-gray-400 col-span-2">
        <ul>
          <li><a>{{ \Carbon\Carbon::parse($event->date)->format('d-M-Y') }}</a></li>
          <li>{{ $event->title }}</li>
          <li>{{ $event->description }}</li>
          <a class="bg-sky-200 text-sky-800 font-bold py-1 px-2 rounded-lg" href="{{ route('events.show', $event->id) }}">Ver evento</a>
          
        </ul>
      </div>
    @elseif ($index == 2)
      <div class="border border-gray-400 col-span-2">
        <ul>
          <li><a>{{ \Carbon\Carbon::parse($event->date)->format('d-M-Y') }}</a></li>
          <li>{{ $event->title }}</li>
          <li>{{ $event->description }}</li>
          <a class="bg-sky-200 text-sky-800 font-bold py-1 px-2 rounded-lg" href="{{ route('events.show', $event->id) }}">Ver evento</a>
        </ul>
      </div>
    @endif
  @endforeach
</div>
