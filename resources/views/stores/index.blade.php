@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @foreach ($stores as $stores)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="container-fluid" style="padding:0;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 style="margin-top:0;">{{ $stores->store }}</h4>
                                        地址：{{ $stores->address }}
                                        <br/>
                                        電話：{{ $stores->telephone }}
                                    </div>
                                </div>

                                <hr style="margin:10px 0;" />
                                <div class="row">

                                    <div class="col-md-12" style="height:100px;overflow:hidden;">
                                        {{ $stores->introduction }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-8">
                                        @if(Auth::check())
                                            <form method="POST" action="">
                                                <span style="padding-left: 10px;">
                                                    <a class="btn btn-xs btn-primary" href="">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                        <span style="padding-left: 5px;">編輯文章</span>
                                                    </a>
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button type="submit" class="btn btn-xs btn-danger">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                        <span style="padding-left: 5px;">刪除文章</span>
                                                    </button>
                                                </span>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('stores.show',$stores->id)}}" class="pull-right">繼續閱讀...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection