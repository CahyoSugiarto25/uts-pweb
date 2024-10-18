@extends('layouts.app')

@section('title')
        Homepage
@endsection 

@section('content')
<div class="flex min-h-[90vh] flex-col justify-center px-6 py-12 lg:px-8">
        <div class="w-[90vw] h-[90vh] flex justify-center">
                <table class=" w-[1200px] bg-white rounded-xl overflow-hidden" border="1" cellspacing="0">
                <thead>
                        <tr class="bg-indigo-600 text-white h-[60px]">
                        <th>Nama Mahasiswa</th>
                        <th>Nama Karyawan</th>
                        </tr>
                </thead>
                <tbody>
                        @foreach ($contacts as $contact)
                        <tr class="border-2 border-gray-200">
                        <td class="text-center">{{ $contact['nameMhs'] }}</td>
                        <td class="text-center">{{ $contact['nameKry'] }}</td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection