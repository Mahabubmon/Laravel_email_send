<!DOCTYPE html>
<html>
<body>

<h2>Mail Send From Laravel</h2>

<form action="{{route('send.mail.data')}}" method="POST">
  @csrf 
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="Phone">Phone:</label><br>
  <input type="text" id="Phone" name="Phone"><br>

  <label for="">Address:</label><br>
  <input type="text" id="address" name="address"><br><br>

  <input type="submit" value="Submit">

</form> 


</body>
</html>
