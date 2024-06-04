@extends('layouts.app')
 
@section('title', 'Laravel 10 Login SignUp with User Roles and Permissions with Admin CRUD | Tailwind CSS Custom Login register')
 
@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Dashboard</h1>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Produk</th>
                <th scope="col" class="px-6 py-3">Jumlah</th>
                <th scope="col" class="px-6 py-3">Total</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if($->count() > 0) --}}
            @foreach($transactions as $transaction)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $transaction->produk }}
                </td>
                <td>
                    {{ $transaction->jumlah }}
                </td>
                <td>
                    {{ $transaction->total }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection