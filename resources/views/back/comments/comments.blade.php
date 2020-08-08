@extends('back.index')
@section('title')

    پنل مدیریت -مدیریت نظرات
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->

            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">پنل مدیریت -مدیریت نظرات</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="template-demo">
{{--                            <a href="{{route('admin.articles.create')}}" type="button" class="btn btn-primary btn-fw">مطلب جدید</a>--}}
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
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('back.massage')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>نویسنده</th>
                                <th>خلاصه نظرات</th>
                                <th>برای مطلب</th>
                                <th>باریخ مطلب</th>
                                <th>وضعیت</th>
                                <th>مدیریت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($comments as $comment)
                                @if($comment->status==1)

                                    @php
                                    $url=route('admin.comments-status',$comment->id);
                                        $status='<a href="'.$url.'"class="btn btn-success btn-fw">فعال<i class="far fa-eye"></i></a>'
                                    @endphp
                                    @else
                                    @php
                                        $url=route('admin.comments-status',$comment->id);
                                            $status='<a href="'.$url.'"class="btn btn-inverse-success btn-fw">غیر فال<i class="far fa-eye-slash"></i></a>'
                                    @endphp
                                    @endif

                            <tr>
                                <td>{{$comment->name}}</td>
                                <td>{!! mb_substr($comment->body,0,50) !!}</td>
                                <td>{{$comment->article->name}}</td>
                                <td>{!! jdate($comment->created_at)->format('%Y-%m-%d') !!}</td>
                                <td>{!! $status !!}</td>

                                <td>
                                    <a href="{{route('admin.comments.edit',$comment->id)}}"class="btn btn-success btn-md">edit <i class='far fa-edit'></i></a>
                                    <a href="{{route('admin.comments.destroy',$comment->id)}}"onclick=" return confirm('Delete entry?')" class="btn btn-danger btn-md">del<i class='fas fa-trash-alt'></i></a>
                                </td>

                            </tr>
                            @endforeach


                            </tbody>
                        </table>
{{--                    </div>--}}
{{--                        {{$comments->links()}}--}}
{{--                </div>--}}
{{--            </div>--}}

            </div>
                    {{$comments->links()}}
        </div>
        @include('back.footer')
    </div>
@endsection

