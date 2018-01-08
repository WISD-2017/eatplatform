@extends('layouts.comments')



<div class="container">
    <div class="row">
        <h4 align="center">評論一下這家店吧</h4>
        <div class="col col-md-2"></div>
        <div class="col col-md-8">

            <form action="/comments" method="POST" role="form">
                {{csrf_field()}}


                <div class="form-group required">
                    <label for="exampleSelect1" class='control-label'>給個評分吧</label>
                    <select class="form-control" id="exampleSelect1" name="score">
                        <option>5</option>
                        <option>4</option>
                        <option>3</option>
                        <option>2</option>
                        <option>1</option>
                    </select>
                </div>

                <hr size="1">

                <div class="form-group required">
                    <label for="exampleTextarea" class='control-label'>評論</label>
                    <textarea name="content" class="form-control" id="exampleTextarea" rows="7" placeholder='寫下評論吧'></textarea>
                </div>

                <hr size="1">

                <div class="form-group required">
                    <label for="exampleInputEmail1" class='control-label'>商家編號</label>
                    <input name="store_id" class="form-control" id="exampleInputTextarea" placeholder="輸入編號"></input>
                </div>



                <hr size="1">
                <div class="form-group">
                    <label for="exampleInputFile">照片上傳</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <!--<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>-->
                </div>

                <ul class="media-date text-uppercase reviews list-inline">

                    <a class="btn btn-primary" href="/comments">取消<span class="glyphicon"></span></a>
                    <button type="submit" class="btn btn-success" >送出評論</button>

                </ul>
            </form>
        </div>
        <div class="col col-md-2"></div>

    </div>
</div>