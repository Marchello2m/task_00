<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create-Wallet') }}
        </h2>
    </x-slot>
    <form action="create-wallet" method="POST">
        @csrf
<div class="p-5">
    <div class="mt-2">
        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
            <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800"> Wallet name</div>
            <div class="flex-1 flex flex-col md:flex-row">
                <div class="w-full flex-1 mx-2">
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input placeholder="Wallet name" name="name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
            <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800"> Description</div>
            <div class="flex-1 flex flex-col md:flex-row">
                <div class="w-full flex-1 mx-2">
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input placeholder="Description" name="description" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
            <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800"> Input wallet amount</div>
            <div class="flex-1 flex flex-col md:flex-row">
                <div class="w-full flex-1 mx-2">
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input placeholder="Amount"  name="amount" type="number" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row">
            <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800"></div>
            <div class="flex-1 flex flex-col md:flex-row">
                <button name="Submit" class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-700 hover:text-teal-100
        bg-teal-100
        text-teal-700
        border duration-200 ease-in-out
        border-teal-600 transition">Submit</button>
            </div>
        </div>
    </div>
</div>
    </form>
</x-app-layout>
