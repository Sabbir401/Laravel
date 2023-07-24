<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" class="form-control border-success" name="{{$name}}" id="">
    <span class="text-danger">
        {{$demo}}
        {{-- @error('email')
            {{$message}}
        @enderror --}}
    </span>
</div>
