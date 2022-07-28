<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloğum</title>
</head>
<body>

{{--{{dd($menus)}}--}}
{{--@foreach($menus as $menu)--}}
{{--            {{$menu->name}} =>--}}
{{--            @foreach($menu->getMenulang as $men)--}}
{{--                {{$men->name}} =>--}}
{{--            @endforeach <br>--}}
{{--@endforeach--}}
{{--<br>--------------------------------------<br>--}}

@foreach($menulangs as $mlang)
    {{$mlang->name.' => '.$mlang->parentMenu->name}} <br>
    &emsp;<h1>{{$mlang->getPage->title}}</h1><br>
    &emsp;<p>{{$mlang->getPage->content}}</p><br>
@endforeach

</body>
</html>
