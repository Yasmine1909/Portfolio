@extends('../FrontLayouts.app')
@section('content')
    


        <!-- Navigation-->
        @include('partials._navigation')

        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
           @include('partials._about')
            <hr class="m-0" />
            <!-- Experience-->
            @include('../partials._experience')

            <hr class="m-0" />
            <!-- Education-->
            @include('../partials._education')

            <hr class="m-0" />
            <!-- Skills-->
            @include('../partials._skills')

            <hr class="m-0" />
            <!-- Interests-->
            @include('../partials._interests')

            <hr class="m-0" />
            <!-- Awards-->
            @include('../partials._awards')

        </div>
        
        @endsection