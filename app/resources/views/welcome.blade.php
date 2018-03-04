<!doctype html>

    <head>
        
        <title></title>

    </head>
    <body>
    	<h1> THIS IS A TEST </h1>
        <ul> 
        	@foreach ($tasks as $task)
        		<li>{{$task}}</li>
        	@endforeach
        </ul>
    </body>
</html>
