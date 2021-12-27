@extends('layouts.master')

@section('content')
    <!-- side bar -->
    @include('balde_components.navs.side-bar')     
    <!-- top nav bar -->
    @include('balde_components.navs.nav-bar-v1')
    {{-- banner  --}}
    <banner></banner>
    @include('balde_components.popular-categories')
    
    <main-index :app_name="`{{setting('app_name')}}`" :countMarket={{$countMarket}} ></main-index>

    <footer class="h-96 relative" >
        <img src="/images/bg3.jpg" alt="delivery" class="w-full h-full absolute top-0 left-0 object-cover">
        <div style="background: rgba(0, 0, 0, 0.281);" class="rounded w-full h-full absolute ">
        <div class="absolute p-4 top-1/4 right-12 h-2/4 w-2/3 md:w-1/3 bg-black rounded flex flex-col">
            <h2 class="text-white font-bold text-xl  md:text-3xl ">
                {{ __('Are you a Rider') }}?
            </h2>
            <p class="text-md text-gray-200 w-5/6">
                {{__("indexPage_footer_banner_description")}}
            </p>
            <br>
            <a href="/contact-us" class="btn bg-green custom-btn-blue md:w-1/3 ">
                {{ __('Contact Us') }} 
            </a>
        </div>
        </div>
    </footer>
    @include('balde_components.footer')
@endsection
