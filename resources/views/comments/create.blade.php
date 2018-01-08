@extends('layouts.comments')


<div class="container">
    <div class="row">
        <h4 align="center">評論一下這家店吧</h4>
        <div class="col col-md-2"></div>
        <div class="col col-md-8">
            <form>

                <div class="form-group required">
                    <label for="exampleSelect1" class='control-label'>給個評分吧</label>
                    <select class="form-control" id="exampleSelect1">
                        <option>5分</option>
                        <option>4分</option>
                        <option>3分</option>
                        <option>2分</option>
                        <option>1分</option>
                    </select>
                </div>

                <hr size="1">

                <div class="form-group required">
                    <label for="exampleTextarea" class='control-label'>評論</label>
                    <textarea class="form-control" id="exampleTextarea" rows="7" placeholder='寫下評論吧'></textarea>
                </div>

                <hr size="1">

                <div class="form-group required">
                    <label for="exampleInputEmail1" class='control-label'>商家編號</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="輸入編號">
                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>



                <hr size="1">
                <div class="form-group">
                    <label for="exampleInputFile">照片上傳</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <!--<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>-->
                </div>

                <ul class="media-date text-uppercase reviews list-inline">

                    <a class="btn btn-primary" href="/comments">取消<span class="glyphicon"></span></a>
                    <a class="btn btn-success" href="/comments">送出評論<span class="glyphicon"></span></a>

                </ul>
            </form>
        </div>
        <div class="col col-md-2"></div>

    </div>
</div>