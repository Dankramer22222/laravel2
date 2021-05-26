@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">

                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Заголовок</th>
                                <th>Анонс</th>
                                <th>Дата публикации</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $item)
                                @php
                                    /** @var \App\Models\News $item */
                                @endphp
                                <tr @if(!$item->is_published) style="background-color: #ccc;" @endif>
                                    <td>{{ $item->id }}</td>


                                    <td>
                                        <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('news.show', $item->id) }}">{{ $item->excerpt }}</a>
                                    </td>
                                    <td>{{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d.M H:i') : '' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfood></tfood>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
