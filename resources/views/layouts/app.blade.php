<html>
    <head>
        <title>{{config('app.name')}}</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="bg-slate-200 font-sans">
<div class="min-h-screen flex items-center justify-center ">
        {{$slot}}
</div>
    </body>
</html>
