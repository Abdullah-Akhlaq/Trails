<table>
	<tbody class="m-5">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Address</td>
		<td>Message</td>
		<td>Operation</td>
	</tr>
	@foreach($list1 as $data)
	<tr>
		<td>{{$data['YourName']}}</td>
		<td>{{$data['YourEmail']}}</td>
		<td>{{$data['subject']}}</td>
		<td>{{$data['message']}}</td>
		<td><a href= {{"index/".$data['id']}}>Delete</a>
			<a href= {{"updatee/".$data['id']}}>Edit</a>
		</td>

	</tr>
	@endforeach
</tbody>
</table>