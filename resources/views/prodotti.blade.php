@extends('layout.app')

@section('homeTitle')
   - Prodotti
@endsection

@section('main')
  <main>
    <h2>Paste Lunghe</h2>
    <div class="pasteLunghe">
      @foreach ($pasteDB as $value)
        @if ($value['tipo'] == "lunga")
          @include('partials/pastaCard')
        @endif
      @endforeach
    </div>
    <h2>Paste Corte</h2>
    <div class="pasteCorte">
      @foreach ($pasteDB as $value)
        @if ($value['tipo'] == "corta")
          @include('partials/pastaCard')
        @endif
      @endforeach
    </div>
    <h2>Paste Cortissime</h2>
    <div class="pasteCortissime">
      @foreach ($pasteDB as $value)
        @if ($value['tipo'] == "cortissima")
          @include('partials/pastaCard')
        @endif
      @endforeach
    </div>
  </main>
@endsection
