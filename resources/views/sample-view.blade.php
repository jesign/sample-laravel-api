<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sample Hello</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
        	body{
        		font-size: 30px;
        		
        	}
        	.theTable {
        	}
        	.theTable tr >th{
				border: 1px #ddd solid;
        	}
        	.theTable tr>td{
        		padding: 5px;
				border: 1px #ddd solid;
	        }
        </style>
    </head>
    <body>
        <form action="/storeUser" method="POST">
        	{{ csrf_field() }}
        	name	<input type="text" name="name"><br>
        	email	<input type="email" name="email"><br>
        	password	<input type="password" name="password"><br>
        	<input type="submit" name="submit" value="submit"><br>
        </form>
	
		<table class="theTable">
			<thead>
				<tr>
					<th>name</th>
					<th>email</th>
					<th>password</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->password}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>


    </body>
</html>
