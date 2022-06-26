@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Member
                </div>
                <div class="card-body">
                    @livewire('contact-index') 
                    {{-- <livewire:counter />  --}}
                    {{-- <livewire:contact />  --}}
                   {{-- <livewire:contact-index />  --}}
                    {{-- <livewire:content-index></livewire:content-index> --}}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection