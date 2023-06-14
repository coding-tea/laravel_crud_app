@extends('layout')
@section('content')

<div class="container">
    <button class="btn btn-primary"> <a href="{{ route('announces.create') }}">create announce</a> </button>
    @isset($announces)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col">description</th>
                <th scope="col">ville</th>
                <th scope="col">type</th>
                <th scope="col">neuf</th>
                <th scope="col">superficie</th>
                <th scope="col">prix</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
           @foreach ($announces as $item)
                <tr>
                    <th scope="row"> {{ $item->id }} </th>
                    {{-- <td> {{ $item->photo }} </td> --}}
                    <td> {{ $item->titre }} </td>
                    <td> {{ $item->description }} </td>
                    <td> {{ $item->ville }} </td>
                    <td> {{ $item->type }} </td>
                    <td> {{ $item->neuf }} </td>
                    <td> {{ $item->superficie }} </td>
                    <td> {{ $item->prix }} </td>
                    <td>
                        <form action="{{ route('announces.destroy', $item) }}" method="post" >
                            @csrf
                            @method('DELETE')
                            <button> <a href="{{ route('announces.edit', $item) }}">edit</a> </button>
                            <button> <a href="{{ route('announces.show', $item) }}">show</a> </button>
                            <button type="submit" >delete</button>
                        </form>
                    </td>
                </tr>
           @endforeach
            </tbody>
        </table>
    @endisset
</div>

@endsection