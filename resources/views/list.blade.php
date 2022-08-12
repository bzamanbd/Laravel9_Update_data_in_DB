<center>
 <h2>List of Members</h2>
 <table border="1">
  <tr>
   <td>ID</td>
   <td>NAME</td>
   <td>EMAIL</td>
   <td>ACTION</td>
  </tr>
  @foreach ($collection as $item)
      <tr>
       <td>{{ $item->id }}</td>
       <td>{{ $item->name }}</td>
       <td>{{ $item->email }}</td>
       <td>
        <a href={{ 'delete/'.$item->id }}>Delete</a>
        <a href={{ 'edit/'.$item->id }}>Edit</a>
       </td>
      </tr>
  @endforeach
 </table>
</center>