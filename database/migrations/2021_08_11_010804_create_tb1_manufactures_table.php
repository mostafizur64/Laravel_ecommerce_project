<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>this is all Manufacutute page</title>
</head>
<body>
  @if(session('status'))
  <h4 class="alert alert-success">{{(session('status'))}}</h4>
  @endif

	<table class="table">
  <thead>

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Manufacutute_name</th>
      <th scope="col">Manufacutute_description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  @foreach($data as $item)
  <tbody>
  	
    <tr>
     <td>{{$item->id}}</td>
      <td>{{$item->manufacture_name}}</td>
      <td>{{$item->manufacture_description}}</td>
      
      <td class="center">
      	@if($item->publication_status==1)
      	<span class="label label-success">Active</span>
      	@else
      	<span class="btn btn-danger">Unactive</span>
      	@endif
      </td>
      <td class="center">
      	@if($item->publication_status==1)
      	<a class="btn btn-success" href="{{'/Unactive_manufacture/'.$item->id}}">
      <i class="glyphicon glyphicon-thumbs-up">done</i>
      	</a>
        @else
        <a class=" btn btn-danger" href="{{'/Active_manufacture/'.$item->id}}">
        <i class="halflings-icon white thumbs-up">done</i>
        </a>
        @endif
      <a href="{{'/edit_manufacture/'.$item->id}}" class="btn btn-info">Edit</a>
      <a href="{{'/delete/'.$item->id}}}" class="btn btn-success">Delete</a>

      </td>


    </tr>
    
    
  
  </tbody>
   @endforeach
</table>

</body>
</html> -->
