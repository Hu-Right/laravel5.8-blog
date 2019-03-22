<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>我的博客</title>
<meta name="keywords" content="个人博客,个人博客">
<meta name="description" content="个人博客,个人原创网站。">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{-- @include('public/src') --}}
<style>
.as{
  font-size: 23px;
}
</style>
</head>
<body>
 @include('public.src')  
  <article style="position: relative;"> 
      @yield('baner')
      @yield('content')
      @yield('right')
    </article>
<!--通用底部-->
       <footer>
        <p>Design by <a href="#" target="_blank">晓明个人博客</a> <a href="#">豫ICP备11002373号-1</a><a href="#" class="links">友情链接</a></p>
      </footer>
      <a href="#" class="cd-top">Top</a>
</body>
</html>