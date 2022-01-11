<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wallet') }}
        </h2>
    </x-slot>
@csrf
    <form action="wallet" method="GET">

    <table class="table text-gray-400 border-separate space-y-6 text-sm">
        <thead class="bg-blue-500 text-white">
        <tr>

            <th class="p-3">User_id</th>
            <th class="p-3 text-left">amount</th>
            <th class="p-3">Name</th>
            <th class="p-3">Wallet name</th>
            <th class="p-3 text-left">Description</th>
            <th class="p-3">Created_at</th>


        </tr>
        </thead>

        <tbody>
        @foreach($data as $item)
        <tr class="bg-blue-200 lg:text-black">
            <td class="p-3">{{$item->user_id}}</td>
            <td class="p-3">{{$item->amount}}</td>
            <td class="p-3 font-medium capitalize">{{$item->name}}</td>
            <td class="p-3 font-medium capitalize">{{$item->wallet_name}}</td>
            <td class="p-3">{{$item->description}}</td>
            <td class="p-3">{{$item->created_at}}</td>
         {{--  <td>  <button onclick="window.location.href='/update/{{ $item->id }}'">edit</button></td> --}}

            <td><a href={{"delete/".$item->id}}>Delete</a></td>

{{--<td><button><a href="{{'delete/'.$item->id}}"></a>Delete</button></td> --}}

        </tr>

        @endforeach
        </tbody>

    </table>
    </form>
</x-app-layout>
