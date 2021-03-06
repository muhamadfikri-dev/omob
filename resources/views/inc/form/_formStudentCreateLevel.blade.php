        <div class="form-group">
        <select name="kelas_id" id="" class="form-control @error('users_id') is-invalid @enderror">
            <option value="">Pilih Kelas</option>
            @foreach ($units as $unit)
            <optgroup label="{{$unit->nama_unit}}">
                @foreach ($levels->where('units_id',$unit->id) as $level)
                <option value="{{$level->id}}" {{old('units_id')==$unit->id ?'selected':''}}>{{$level->nama_kelas}}</option>
                @endforeach
            </optgroup>
            @endforeach
        </select>
    </div>
    @error('kelas_id')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror