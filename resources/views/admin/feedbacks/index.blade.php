@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                  Xabarlar
                  

                  </h6>

                 

                </div>
                <div class="card-body">
                @if(session()->has('delete'))
                  <div class="alert alert-danger">
                      {{ session()->get('delete')}}
                  </div>
                @endif

            <table class="table table-bordered">
                <thead>
                    <th>Ismi</th>
                    <th>Familyasi</th>
                    <th>E-mail</th>
                    <th>Xabar Mavzusi</th>
                    <th>Holati</th>
                    <th>Vaqti</th>
                    <th width="100px">Amallar</th>
                </thead>
            
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->surname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->status ? 'O`qilgan' : 'O`qilmagan'}}</td>
                        <td>{{ $item->created_at->format('H/i d/m/Y') }}</td>
                        <td>
                        <form method="POST" action="{{ route('feedbacks.delete', $item->id)}}">
                        
                        <a class="btn btn-sm btn-primary" href="{{ route('feedbacks.show', $item->id)}}"><i class="fa fa-eye"></i></a>  
                        
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit"> <i class="fa fa-trash"></i> </button>
                        </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            
            </div>
              </div>
@endsection