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
{{--                <div class="col-lg-12 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
                        @include('back.massage')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام</th>
                                <th>قیمت</th>
                                <th>تخفیف</th>
                                <th>اف</th>
                                <th>نام مستعار-slug</th>
                                <th>نویسنده</th>
                                <th>دسته بندی</th>
                                <th>بازدید</th>
                                <th>وضعیت</th>
                                <th>پیشنهاد</th>
                                <th>مدیریت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($articles as $article)
                                @if($article->status==1)

                                    @php
                                    $url=route('admin.article-status',$article->id);
                                        $status='<a href="'.$url.'"class="btn btn-success btn-fw">فعال<i class="far fa-eye"></i></a>'
                                    @endphp
                                    @else
                                    @php
                                        $url=route('admin.article-status',$article->id);
                                            $status='<a href="'.$url.'"class="btn btn-inverse-success btn-fw">غیر فال<i class="far fa-eye-slash"></i></a>'
                                    @endphp
                                    @endif
                                @if($article->suggestion==1)

                                    @php
                                        $url=route('admin.article-test',$article->id);
                                            $suggestion='<a href="'.$url.'"class="btn btn-info btn-fw">ویژه<i class="far fa-eye"></i></a>'
                                    @endphp
                                @else
                                    @php
                                        $url=route('admin.article-test',$article->id);
                                            $suggestion='<a href="'.$url.'"class="btn btn-inverse-info btn-fw">نرمال<i class="far fa-eye-slash"></i></a>'
                                    @endphp
                                @endif


                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->name}}</td>
                                <td>{{$article->main_price}}</td>
                                <td>{{$article->suggest_price}}</td>
                                <td>{{$article->off_price}}</td>
                                <td>{{$article->slug}}</td>
                                <td>{{$article->user->name}}</td>
                                <td>
                                    @foreach($article->categories()->get() as $category)
                                       <span class="badge badge-warning"> {{$category->name}} </span>
                                        @endforeach
                                </td>
                                <td>{{$article->hit}}</td>
                                <td>{!! $status !!}</td>
                                <td>
{{--                                    @if($article->suggestion==1)--}}

{{--                                        @php--}}
{{--                                                $u=route('admin.article-test',$article->id);--}}
{{--                                                    $t=$article->id;--}}
{{--                                                    $suggest='<form id="myForm'.$t.'" action="'.$u.'">--}}
{{--                                                               <input type="checkbox" onclick="myFunction()" name="suggestion" checked="checked">--}}
{{--                                                             </form>--}}
{{--                                                                     <script>--}}
{{--            function myFunction(){--}}
{{--                document.getElementById("myForm'.$t.'").submit();--}}
{{--            }--}}
{{--        </script>'--}}
{{--                                        @endphp--}}
{{--                                    @else--}}
{{--                                        @php--}}

{{--                                            $u=route('admin.article-test',$article->id);--}}
{{--                                            $t=1;--}}
{{--                                                $suggest='<form id="myForm'.$t.'" action="'.$u.'">--}}
{{--                                                          <input type="checkbox" onclick="myFunction()"  name="suggestion">--}}
{{--                                                          </form>--}}
{{--                                                                  <script>--}}
{{--            function myFunction(){--}}
{{--                document.getElementById("myForm'.$t.'").submit();--}}
{{--            }--}}
{{--        </script>'--}}
{{--                                        @endphp--}}
{{--                                    @endif--}}
{{--                                    @if($article->suggestion==1)--}}
{{--                                        <form id="<?php $article='n'; echo $article+1; ?>" action="{{route('admin.article-test',$article->id)}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <input type="checkbox" onclick="myFunction()" name="suggestion" checked="checked">--}}
{{--                                        </form>--}}
{{--                                        <script>--}}
{{--                                            function myFunction(){--}}
{{--                                                document.getElementById("<?php echo $article->id ?>").submit();--}}
{{--                                            }--}}
{{--                                        </script>--}}
{{--                                    @else--}}
{{--                                        <form id="<?php echo $article->id ?>" action="{{route('admin.article-test',$article->id)}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <input type="checkbox" onclick="myFunction()" name="suggestion">--}}
{{--                                        </form>--}}
{{--                                        <script>--}}
{{--                                            function myFunction(){--}}
{{--                                                document.getElementById("<?php echo $article->id ?>").submit();--}}
{{--                                            }--}}
{{--                                        </script>--}}
{{--                                    @endif--}}
                                    {!! $suggestion !!}

                                </td>

{{--                                <td>{{ $suggest }}</td>--}}


                                <td>
                                    <a href="{{route('admin.articles.edit',$article->id)}}"  class="btn btn-success btn-md">edit <i class='far fa-edit'></i></a>
{{--                                    <i class="far fa-edit"><a href="{{route('admin.articles.edit',$article->id)}}">edit</a></i>--}}
{{--                                    <a href="{{route('admin.articles.edit',$article->id)}}"class="badge badge-success">edit</a>--}}
                                    <a href="{{route('admin.articles.destroy',$article->id)}}"onclick=" return confirm('Delete entry?')" class="btn btn-danger btn-md">del<i class='fas fa-trash-alt'></i></a>
                                </td>

                            </tr>
                            @endforeach


                            </tbody>
                        </table>
{{--                    </div>--}}
                        {{$articles->links()}}
{{--                </div>--}}
{{--            </div>--}}

            </div>

        </div>
{{--        <script>--}}
{{--            function myFunction(){--}}
{{--                document.getElementById("myForm").submit();--}}
{{--            }--}}
{{--        </script>--}}

        @include('back.footer')
    </div>
@endsection

