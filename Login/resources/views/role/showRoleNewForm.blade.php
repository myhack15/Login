<html>
<head>
  <title></title>
</head>
<body>

  @if (Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
  @endif

  <form action="{{URL::route('store_new_role')}}" method="POST">
    <input type="text" name="_token" value="{{csrf_token()}}"> 
    <label>Role Name</label>
    <input name="name">
    <button type="submit">Submit</button>
  </form>
</body>
</html>