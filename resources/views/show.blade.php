@extends('layouts.app')

@section('content')
    @php
        /** @var \App\Models\News $item */
    @endphp
    <div class="container">
        @include('includes.result_messages')




                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @include('includes.post_show_main_col')
                            </div>
                            <div class="col-md-3">
                                @include('includes.post_edit_add_col')
                            </div>
                        </div>



    </div>
@endsection




