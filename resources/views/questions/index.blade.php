@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($questions as $quesion)
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mt-0">{{ $quesion->title }}</h3>
                            {{ str_limit($quesion->body, 250) }}
                        </div>
                    </div>
                        
                    @endforeach
                    

                   {{ $questions ->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
