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
                                    <div class="col-md-10">
                                        <h4 style="margin-top:0;">{{ $stores->store }}</h4>
                                        地址：{{ $stores->address }}
                                        <br/>
                                        電話：{{ $stores->telephone }}
                                    </div>
                                    <div class="col-md-2">
                                        @if(Auth::check())
                                            @if(Auth::user()->userable_type=='App\Member')
                                                <form method="POST" action="" class="col-xs-4">
                                                 <span style="padding-left: 10px;">
                                                        <a class="btn btn-xs btn-primary"
                                                           href="{{route('comments.create',$stores->id)}}">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                            <span style="padding-left: 5px;">新增評論</span>
                                                        </a>
                                                 </span>
                                                </form>
                                                <form action="{{route('stores.report',$stores->id)}}" method="POST" role="form">
                                                {{csrf_field()}}
                                                {{method_field('PATCH')}}
                                                <!-- Project One -->
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <button type="submit" class="btn btn-xs btn-danger" >檢舉此店家</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                            @elseif(Auth::user()->userable_id!=$stores->firm_id)
                                                <form action="{{route('stores.report',$stores->id)}}" method="POST" role="form">
                                                {{csrf_field()}}
                                                {{method_field('PATCH')}}
                                                <!-- Project One -->
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <button type="submit" class="btn btn-xs btn-danger" >檢舉此店家</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                            @endif
                                        @endif
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
                                            @if(Auth::user()->userable_id==$stores->firm_id && Auth::user()->userable_type=='App\Firm')
                                                <form method="POST" action="">
                                                    <span style="padding-left: 10px;">
                                                        <a class="btn btn-xs btn-primary" href="{{route('stores.edit',$stores->id)}}">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                            <span style="padding-left: 5px;">編輯文章</span>
                                                        </a>
                                                    </span>
                                                </form>
                                                {{ csrf_field() }}

                                                <a href="{{route('stores.destroy',$stores->id)}}" class="btn btn-xs btn-danger">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span style="padding-left: 5px;">刪除文章</span>
                                                </a>
                                            @endif
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