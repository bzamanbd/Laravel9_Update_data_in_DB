<center>
 <h2>Edit Member</h2>
 <form action="update" method="POST">
  @csrf
  <input type="hidden" name="id" value={{ $data['id'] }}>
  <input type="text" name="name" value="{{ $data['name'] }}" ><br><br>
  <input type="email" name="email" value="{{ $data['email'] }}"><br><br>
  <button type="submit">Update</button>
 </form>
</center>