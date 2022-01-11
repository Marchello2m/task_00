<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wallet') }}
        </h2>
    </x-slot>
    @csrf



    <div>
        <form action="update" method="POST" class="text-center">
            @csrf
            <select name="id" >
            @foreach($data as $item)

                <option >{{$item->id}} {{$item->name}}</option>

                @endforeach
            </select>
            <h1>Wallets id-{{$item->id}}</h1>
            <div class="pt-5">
            name
                <input type="text" name="name" value=" {{$item->name}}" required> <br> <br>
            description
                <input type="text" name="wallet_name" value="{{$item->description}}" required> <br> <br>
            wallet name
            <input type="text" name="description" value="{{$item->wallet_name}}" required> <br> <br>
            Add money
            <input type="text" name="amount" value=" {{$item->amount}}" required> <br> <br>
            <button type="submit">Update</button>
            </div>

        </form>
    </div>

</x-app-layout>


