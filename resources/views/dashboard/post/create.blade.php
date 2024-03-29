
@extends('dashboard.master')

@section('content')

  {{-- Mostrando errores de validación --}}
  @if ( $errors->any() )
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">

        {{ $error }}
      </div>
    @endforeach
  @endif
  <form action="{{ route('post.store') }}" method="POST">
    {{-- csrf protection --}}
    @csrf
    {{-- End csrf protection --}}
    
    {{-- Title --}}
    <div class="form-group">
      <label for="title">Título</label>
      <input class="form-control" type="text" name="title" id="title">

      {{-- Mostrar error individual (solo sirve de muestra) --}}
      @error('title')
        <small class="text-danger">{{ $error }}</small>
      @enderror
      
    </div> 
    {{-- End Title --}}
  
    {{-- Url-Clean --}}
    <div class="form-group">
      <label for="url_clean">Url limpia</label>
      <input class="form-control" type="text" name="url_clean" id="url_clean">
    </div>
    {{-- End Url-Clean --}}
  
    {{-- Content --}}
    <div class="form-group">
      <label for="content">Contenido</label>
      <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>
    {{-- End Content --}}
  
    {{-- Button --}}
    <input class="btn btn-primary" type="submit" value="Enviar">
    {{-- End Button --}}
  </form>
  
@endsection