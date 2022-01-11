<form method="post" action="/updatee">
		@csrf
	<input type="hidden" name="id" value="{{$data['id']}}">
	<input type="text" name="YourName"  value="{{$data['YourName']}}">
	<input type="text" name="YourEmail" value="{{$data['YourEmail']}}">
	<input type="text" name="subject" value="{{$data['subject']}}">
	<input type="text" name="message" value="{{$data['message']}}">
	<button type="submit " value="submit">update</button>
</form>