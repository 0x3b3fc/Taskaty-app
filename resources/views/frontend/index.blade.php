@extends('frontend.layouts.app')
@section('content')


    <div class="row justify-content-center">
        {{--  Form For Task Submit  --}}
        <div class="col-md-4 p-4">
            @livewire('app-add-task')
        </div>
        {{--  Table For View Tasks  --}}
        <div class="col-md-8 p-4">
            @livewire('app-tasks')
        </div>
    </div>


@endsection
