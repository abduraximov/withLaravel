@extends ('layouts.admin')

@section('content')

<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                  {{ $post->title }} -- O`zgartirish
                  </h6>
                </div>
                <div class="card-body">
                
                
             @if($errors->any())
             <div class="alert alert-danger">
                 <ul>     
                 @foreach($errors->all() as $error)
                  <li> {{$error}} </li>
                @endforeach
                 </ul>
             </div>
             @endif

            <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
               <label for="">Sarlavha</label>
               <input  class="form-control" value="{{ $post->title }}" name="title" type="text">
            </div>

            <div class="form-group">
               <label for="">Qisqacha</label>
               <input  class="form-control"  value="{{ $post->shorttitle }}" name="shorttitle" type="text">
            </div>

            <div class="form-group">
               <label for="">Maqola</label>
               <textarea name="content" class="form-control" id="" cols="30" rows="10">{{ $post->content }}</textarea>
            </div>

            <button class="btn btn-success" type="submit">Saqlash</button>

            </form>
            
            </div>
              </div>

@endsection