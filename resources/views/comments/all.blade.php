@extends('layouts.comments')


<!-- Page Content -->
<div class="container">
    <h3>哈囉~{{ Auth::user()->name }}</h3>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">所有評價
                <small>共{{count($comments)}}筆</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->


    @foreach ($comments as $comments)
    <form action="/comments/report/{{ $comments->id }}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight:bold;">{{ $comments->store }}</h3>
                <h4>"{{ $comments->name }}"給{{ $comments->score }}分</h4>
                <p style="line-height:90px;" border="1">{{ $comments->content }}</p>
                <button type="submit" class="btn btn-danger" >檢舉</button>


                <p>於{{ $comments->created_at }}評價 | 於{{ $comments->updated_at }}編輯過</p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
@endforeach
    </form>




    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; 美食評價大平台Eatplatform 2018</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
