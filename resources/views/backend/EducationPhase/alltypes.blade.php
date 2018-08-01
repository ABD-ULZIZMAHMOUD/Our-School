all added
@foreach($allTypes as $type)
    <li>{{$type->name}}</li>
  <li>
      <form action="{{url('studyType/delete/' . $type->typeofstudeyid)}}">

          {{csrf_field()}}
          <input type="hidden" value="DELETE">

        <input type="submit" value="delete" />
      </form>
  </li>
@endforeach