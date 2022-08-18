
<form action="{{route('student_infos.store')}}" method="post">
    @csrf
<input type="text" name='name' placeholder='Name'><br/><br/>
<input type="text"  name='roll' placeholder='Roll'><br/><br/>
<input type="textarea"  name='address' placeholder='Address'><br/><br/>
<input type="submit">
</form>
    