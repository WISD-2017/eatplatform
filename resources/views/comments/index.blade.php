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
                <h3>{{ $comments->store }}</h3>
                <h4>我給{{ $comments->score }}分</h4>
                <p>{{ $comments->content }}</p>
                <a class="btn btn-danger" href="/comments/{{ $comments->id}}">刪除評價 <span class="glyphicon"></span></a>
                <a class="btn btn-primary" href="#">編輯評價 <span class="glyphicon"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    @endforeach


        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

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

