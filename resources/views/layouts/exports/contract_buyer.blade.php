<table>
    <thead>
      <tr>
        <th>S.N.</th>
        <th>Full Name</th>
        <th>Email Address</th>
        <th>Country</th>
        <th>Contact Number</th>
        <th>Join Date</th>
      </tr>
    </thead>
      <tbody>
    @foreach ($buyers as $i=>$buyer)
    <tr>
      <td>{{$i+1}}</td>
      <td>{{$buyer->firstname}} {{$buyer->lastname}}</td>
      <td>{{$buyer->email}}</td>
      <td>{{$buyer->country}}</td>
      <td>{{$buyer->contact_number}}</td>
      <td>{{$buyer->created_at->format('Y-m-d')}}</td>
    </tr>
  @endforeach    
      
      
    </tbody>
  </table>