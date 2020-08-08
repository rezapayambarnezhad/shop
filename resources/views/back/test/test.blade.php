@extends('back.index')
@section('title')

    پنل مدیریت -مدیریت مطالب
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->

            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">پنل مدیریت -مدیریت مطالب</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="template-demo">
                            <a href="{{route('admin.articles.create')}}" type="button" class="btn btn-primary btn-fw">مطلب جدید</a>
                            <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                            <button type="button" class="btn btn-success btn-fw">Success</button>
                            <button type="button" class="btn btn-danger btn-fw">Danger</button>
                            <button type="button" class="btn btn-warning btn-fw">Warning</button>
                            <button type="button" class="btn btn-info btn-fw">Info</button>
                            <button type="button" class="btn btn-light btn-fw">Light</button>
                            <button type="button" class="btn btn-dark btn-fw">Dark</button>
                            <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <th>چک</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($tests as $test)
                                    @if($test->check==true)

                                        @php
                                            $url=route('admin.tests-status',$test->id);
                                                $status='<a href="'.$url.'"class="btn btn-success btn-fw">فعال<i class="far fa-eye"></i></a>';




                                        @endphp
                                    @else
                                        @php
                                            $url=route('admin.tests-status',$test->id);
                                                $status='<a href="'.$url.'"class="btn btn-danger">غیر فال<i class="far fa-eye-slash"></i></a>';

                                        @endphp
                                    @endif
                                    <tr>
                                        <td>{{$test->id}}</td>
                                        <td>{{$test->name}}</td>
                                        <td>{{$test->body}}</td>
                                        <td>{!! $status !!}</td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
{{--                        {{$articles->links()}}--}}
                    </div>
                </div>

            </div>

        </div>
        @include('back.footer')
    </div>
@endsection

