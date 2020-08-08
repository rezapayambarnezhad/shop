<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{url('/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{url('/assets/css/shared/style.css')}}">
  <link rel="stylesheet" href="{{url('/assets/css/demo_1/style.css')}}">
  <link rel="shortcut icon" href="{{url('/assets/images/favicon.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('/assets/chosen/chosen.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="{{ asset('/vendor/file-manager/css/file-manager.css') }}">--}}
{{--    <script src="{{ asset('/vendor/file-manager/js/file-manager.js') }}"></script>--}}



    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
{{--    <textarea name="content" class="form-control my-editor">{!! old('content', $content) !!}</textarea>--}}
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea#editor",
            directionality:"rtl",
            plugins: [
                "directionality advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | ltr rtl",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
</head>
<body style="font-family: p30">
  <div class="container-scroller">

    @include('back.navbar')

    <div class="container-fluid page-body-wrapper">

      @include('back.sidebar')

{{--        @include('back.main')--}}
{{--        <div class="container">--}}
            @yield('content')
{{--        </div>--}}


    </div>

  </div>
  <script src="{{url('/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{url('/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{url('/assets/js/shared/off-canvas.js')}}"></script>
  <script src="{{url('/assets/js/shared/misc.js')}}"></script>
  <script src="{{url('/assets/js/demo_1/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript" src="{{url('/assets/chosen/chosen.jquery.js')}}"></script>

<script>
    {!!\File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js'))!!};
    $('#lfm').filemanager('image');
</script>




  <script>
      $(document).ready(function () {
          $(".test").chosen();
          $(".test_mull").chosen();

      })

  </script>

</body>

</html>
