@extends('layouts.app')
{{--
@section('title',$post->title)--}}

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="container-fluid" style="padding:0;">
                            <div class="row">
                                    <!-- Title -->
                                    <h3 style="margin-top:0;" class="col-xs-8">{{ $store->store }}</h3>
                                    @if(Auth::check())
                                        @if(Auth::user()->userable_type=='App\Member' || Auth::user()->userable_id!=$store->firm_id)
                                            <form method="POST" action="" class="col-xs-4">
                                                 <span style="padding-left: 10px;">
                                                        <a class="btn btn-xs btn-primary"
                                                           href="{{route('comments.create',$store->id)}}">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                            <span style="padding-left: 5px;">新增評論</span>
                                                        </a>
                                                 </span>
                                            </form>
                                        @endif
                                    @endif
                            </div>
                            <!-- Author -->
                            {{--<p class="lead">
                                by
                                <a href="#">Start Bootstrap</a>
                            </p>--}}
                            地址：{{ $store->address }}
                            <br/>
                            電話：{{ $store->telephone }}
                            <!-- Date/Time -->
                            <p>{{$store->created_at}}</p>
                            <hr style="margin:10px 0;"/>

                            <!-- Post Content -->
                            <p class="lead">{{$store->introduction}}</p>
                        </div>
                    </div>

                    <!-- Preview Image -->
                    {{--<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">--}}
                </div>
            </div>

        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container-fluid" style="padding:0;">
                    <div class="row">
                        <div class="col-md-12">
                        @foreach($comments as $comment)
                            <!-- Single Comment -->
                                <div class="media mb-4">
                                    {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
                                    <div class="media-body">
                                        @foreach($comment->member->user as $member)
                                            <h5 class="mt-0">{{$member->name}}：在{{$comment->created_at}}
                                                評論此店家</h5>
                                        @endforeach
                                        {{$comment->content}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Comment with nested comments -->
    {{--<div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

        </div>
    </div>--}}

    </div>
    </div>
@endsection