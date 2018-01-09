@extends('layouts.comments')


    <!-- Page Content -->
    <div class="container">
        <h3>哈囉~{{ Auth::user()->name }}</h3>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">我的評價
                    <small>共{{count($comments)}}筆</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        @foreach ($comments as $comments)
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight:bold;">{{ $comments->store }}</h3>
                <h4 >我給{{ $comments->score }}分</h4>
                <p style="line-height:90px;" border="1">{{ $comments->content }}</p>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    刪除評價
                </button>

                <!-- Modal 彈跳提示框-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">刪除</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                確定要刪除這篇評價?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
                                <a class="btn btn-danger" href="/comments/{{ $comments->id}}">刪除評價 <span class="glyphicon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>



                <a class="btn btn-primary" href="/comments/{{ $comments->id}}/edit">編輯評價 <span class="glyphicon"></span></a>
                <p>於{{ $comments->created_at }}評價 | 於{{ $comments->updated_at }}編輯過</p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    @endforeach





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

