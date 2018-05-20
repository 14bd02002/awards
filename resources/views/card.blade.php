@extends('layouts.master')
 
@section('content')

    <div class="container">
        <div class="card">
            <h1> {{$data['award_name']}}</h1>            
        </div>

        <div class="comments">
            <div class="comments show">
                @foreach ($comments as $comment)
                @if ($comment['page_id'] == $data['id'])
                    <div class="single_comment">
                        <h3>{{$comment['commentator']}}</h3>
                        {{$comment['comment_text']}}
                    </div>
                @endif
                @endforeach
            </div>
            <div class= "comments write">
                <form name="comment" action="{{'/awards/'}}{{$data['id']}}" method="post">
                    {{ csrf_field() }}                                              
                        <input type="hidden" name="name" value="{{ auth()->user()->name }}"/>                      
                      <p>
                        <label>Комментарий:</label>
                        <br>
                        <textarea name="comment_text" cols="30" rows="1"></textarea>
                      </p>
                      <p>
                        <input type="hidden" name="page_id" value="{{$data['id']}}"/>
                        <input type="submit" value="Отправить" />
                      </p>
                    </form>
            </div>
        </div>
    </div>

@endsection