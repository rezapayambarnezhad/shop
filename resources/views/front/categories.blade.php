@extends('front.base')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb" dir="rtl">
                <li><a href="#">منوی کاربری</a></li>
                <li class="active">دسته بندی ها</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

        <div class="row">

            @foreach($categories as $category)
                <div class="col-md-2" style="float: right ;margin: 3%;text-align: center" >
                    <h3>{{$category->id}}</h3><br>
                    <h3><a href="{{route('category',$category->id)}}">{{$category->name}}</a></h3><br>
                    <h3>{{$category->slug}}</h3><br>
                </div>


{{--                        @foreach($category->articles()->get() as $article)--}}

{{--                    <img src="<?php echo '/storage/photos/1/'.basename($article->image) ?> " style="width: 200px;height: 200px">--}}
{{--                    <p>{{$article->user->name}}</p><br>--}}
{{--                    <p>{{$article->user->created_at}}</p><br>--}}
{{--                    <h3><a href="{{route('article',$article->id)}}">{{$article->name}}</a> </h3>--}}
{{--                    <p><?php echo substr(strip_tags( $article->desc),1,10). '...' ?></p>--}}
{{--                        @endforeach--}}

            @endforeach

         </div>


@endsection
