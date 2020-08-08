@if(session('success'))
    <div class="container">
        <div id="hideDiv" class="alert alert-success" dir="rtl">
            {{session('success')}}
        </div>
    </div>

@elseif(session('warning'))
    <div class="container">
        <div id="hideDiv" class="alert alert-danger" dir="rtl">
            {{session('warning')}}
        </div>
    </div>
@endif

{{--<script>--}}
{{--    $(function() {--}}
{{--        setTimeout(function() { $("#hideDiv").hide(1500); }, 5000)--}}

{{--    })--}}
{{--</script>--}}
