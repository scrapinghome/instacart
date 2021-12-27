@extends('layouts.master')

    @section('title')
        | About
    @endsection
    @section('extraStyle')
        <link href="{{ asset('css/help-page.css') }}" rel="stylesheet">
    @endsection


    @section('content')
    {{-- side bar --}}
        @include('balde_components.navs.side-bar')
    {{-- top nav bar --}}
        @include('balde_components.navs.nav-bar-v1')
    {{-- main  --}}
        <main class="w-full bg-white" >
            <div class=" w-full  relative flex justify-center  " style="z-index: 0;height: 470px;">
                <img src="/images/piper.jpg" alt="banner" class="absolute w-full h-full object-cover opacity-70 z-0">
                <div class="w-full h-full bg-black"></div>
                <div class="z-10 container  absolute  pt-5 w-11/12 md:w-2/3 flex flex-col justify-center text-center   h-96 ">
                    <h2 class="text-2xl font-bold md:text-6xl text-white my-2">
                        About Fridgii
                    </h2>
                    <p class="text-white text-xl font-semibold my-2 ">
                        Fridgii is an innovative supermarket delivery and pick-up service based in the USA. You can choose to use a smartphone or app to utilize the services on the platform. 
                    </p>
                    <p class="text-white text-xl font-semibold my-2 ">
                        Customers can select from a wide variety of local stores nearby where they can order groceries and have a shopper pick up their order and deliver it to them. 
                    </p>
                </div>
            </div>
            <section class="py-16 flex flex-col bg-gray-100">
                <div class="container">
                    <div class="w-full  self-center content-center flex flex-row justify-center mt-4 mb-2">
                        <p class="border-1 border-green w-44"></p>
                    </div> 
                    <h2 class="text-black text-4xl font-bold py-2 text-center">
                        How does Fridgii Work?
                    </h2> 
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Ordering food has never been easier .Shop through a wide variety of options from your favorite stores and order using Fridgii. After you’ve made your selection, Fridgii will secure a shopper near you and deliver your items. You can also choose, “contactless delivery,” if you choose not to have contact with any shopper.
                    </p>
                    <p class="text-gray-600 text-md font-normal  py-2">
                        We’ll never leave you hanging. Stay up to date of your order by tracking its location or communicate with your shopper via the app or website. 
                    </p>
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Fridgii also has the option to use curbside pickup at various stores. Just place an order, choose your pickup time and a shopper will organize your items at the nearby location you selected. 
                    </p>
                    <p class="text-gray-600 text-md font-normal  py-2">
                        After you arrive at the store, make sure to let us know on the app. Each store will have its own set of rules where you will be greeted with your items from a worker from the actual store or shopper. They will bring your items to your car or you can also pick them up from a specific location. 
                    </p>
                </div>
                
                <div class="container">
                    <div class="w-full  self-center content-center flex flex-row justify-center mt-5 mb-2">
                        <p class="border-1 border-green w-44"></p>
                    </div> 
                    <h2 class="text-black text-4xl font-bold py-2 text-center">
                        Does the price differ from in-store and through Fridgii?
                    </h2> 
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Each store partner creates a limit threshold of items that are listed on the Fridgii marketplace. There are many store partners that offer the same price points in store and on our platform, however, occasionally you may see a slight difference in price range.
                    </p>
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Check out our pricing guide for each store partner through our platform via site or app. 
                    </p>
                    
                </div>
                
                <div class="container">
                    <div class="w-full  self-center content-center flex flex-row justify-center mt-5 mb-2">
                        <p class="border-1 border-green w-44"></p>
                    </div> 
                    <h2 class="text-black text-4xl font-bold py-2 text-center">
                        Do Items Ever Run Out of Stock?
                    </h2> 
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Fridgii understands when you want a certain item and how it can feel when it is out of stock. No need to worry, we make the process of communicating with your shopper seamless. When the item you wanted is no longer available, your shopper will follow up with your regarding replacement options. 
                    </p>
                    <p class="text-gray-600 text-md font-normal  py-2">
                        You have the option to communicate with your shopper while they are shopping for your items to give them specifics of your requirements before they choose a replacement.<br>
                        If you really want a specific item that is no longer available, you can always update or cancel your order before your shopper makes it to the store.
                    </p>
                </div>
                
                <div class="container">
                    <div class="w-full  self-center content-center flex flex-row justify-center mt-5 mb-2">
                        <p class="border-1 border-green w-44"></p>
                    </div> 
                    <h2 class="text-black text-4xl font-bold py-2 text-center">
                        What happens if my order isn’t correct?
                    </h2> 
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Accidents do happen, typically not with Fridgii. However, if you notice there is a discrepancy with your order please let us know right away. 
                    </p>
                </div>
                
                <div class="container">
                    <div class="w-full  self-center content-center flex flex-row justify-center mt-5 mb-2">
                        <p class="border-1 border-green w-44"></p>
                    </div> 
                    <h2 class="text-black text-4xl font-bold py-2 text-center">
                        Do you offer contactless deliveries?
                    </h2> 
                    <p class="text-gray-600 text-md font-normal  py-2">
                        We take safety seriously here at Fridgii and are always up-to-date with the latest health and safety protocols happening in the US. We are proud to announce that we do offer contactless deliveries for your convenience. 
                    </p>
                    <p class="text-gray-600 text-md font-normal  py-2">
                        If you decide to order items that require ID, we do ask that you show the appropriate identification upon delivery. Our shoppers are required to wear a mask whenever they are in distance with our customers. 
                    </p>
                </div>
                <div class="container">
                    <div class="w-full  self-center content-center flex flex-row justify-center mt-5 mb-2">
                        <p class="border-1 border-green w-44"></p>
                    </div> 
                    <h2 class="text-black text-4xl font-bold py-2 text-center">
                        Delivery Information
                    </h2> 
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Once you place an order with Fridgii, a personal shopper will fulfill your order and deliver it right to your doorstep. You have the option of choosing same day delivery or for a future date. 
                    </p>
                    <p class="text-gray-600 text-md font-normal  py-2">
                        Get started today by adding your address on the site, and find stores nearby to order from.  
                    </p>
                </div>
                
            </section>
        </main>
        {{-- footer--}}
        @include('balde_components.footer')
@endsection
