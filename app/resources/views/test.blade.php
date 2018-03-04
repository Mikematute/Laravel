<!doctype html>

    <head>
        
        <title></title>

    </head>
    <body>
        <h1>Testing route</h1>

        <ul> 
        	@foreach ($tasks as $task)
        		<li>{{$task->id}}</li>
        	@endforeach
        </ul>
    </body>
</html>
