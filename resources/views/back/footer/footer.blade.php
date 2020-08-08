@extends('back.index')
@section('title')

    پنل مدیریت -مدیریت فوتر
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->

            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">پنل مدیریت -مدیریت فوتر</h4>
                    </div>
                </div>

            </div>
{{--            @foreach($footers as $footer)--}}
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{route('admin.footers.update',$footer->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">محتوا</label>
                                        <textarea  id="editor" name="body" >{!! $footer->body !!}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mr-2" >Add</button>
                                <button class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
{{--            @endforeach--}}
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.massage')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام</th>
                                <th>متن</th>
                                <th>عکس</th>
                                <th>وضعیت</th>
                                <th>مدیریت</th>
                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>

            </div>

            </div>

        </div>
        @include('back.footer')
    </div>
@endsection

