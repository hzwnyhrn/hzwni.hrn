@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Notes</div>
                <div class="panel-body">


                    @foreach ($notes as $note)
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>{{$note->title}}</strong></div>

                        <div class="panel-body">
                            {{ $note->body }}
                            <hr>

                            <form method="POST" action="{{ route('notes.destroy', $note->id) }}">
                                {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                            
                            {{-- Update button --}}    

                            <a href="{{ route('notes.edit', $note->id) }}"
                            class="btn btn-default">Update</a>


                            {{-- Delete button --}}

                            <button type="submit" class="btn btn-default">Delete</button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
             <div class="col-md-8 col-md-offset-2">
                <div class="text-center">
                    {{ $notes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
