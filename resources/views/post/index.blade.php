@extends('layouts/master')

@section('anycontentname')

<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $p)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->title}}</td>
                    <td>{{$p->body}}</td>
                    <td>
                        <ul>
                            @foreach ( $p->comments as $comment)
                                <li>{{$comment->body}}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
        {{-- @foreach( $posts as $p)
            <h2>{{$p->title}}</h2>
            <h4>{{$p->body}}</h4>
            <ul>
                @foreach ( $p->comments as $comment)
                    <li>{{$comment->body}}</li>
                @endforeach
            </ul>
        @endforeach --}}
    </div>
</div>

@endsection