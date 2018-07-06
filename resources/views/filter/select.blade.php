<select class="form-control {{ $class }}" name="{{$name}}" >
    <option></option>
    @foreach($options as $select => $option)
        <option value="{{$select}}" {{ (string)$select === request($name, $value) ?'selected':'' }}>{{$option}}</option>
    @endforeach
</select>