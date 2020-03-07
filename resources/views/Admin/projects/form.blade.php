
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($project)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
    <label for="photo" class="col-md-2 control-label">Photo</label>
    <div class="col-md-10">
        <div class="input-group uploaded-file-group">
                  <img id="blah" src="http://chittagongit.com//images/icon-avatars/icon-avatars-20.jpg" alt=" " style="height:260px;width:260px;border-radius: 50%;border-style: solid;border-width:2px;border-color:#3C8DBC;"/>
                    <input type="file" name="photo" id="photo" class=" {{ $errors->has('photo') ? 'is-invalid' : '' }}" onchange="readURL(this);" id="photo" style="text-align:center;">
                     {!! $errors->first('photo', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
        
        </div>

        @if (isset($project->photo) && !empty($project->photo))
            <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" name="custom_delete_photo" class="custom-delete-file" value="1" {{ old('custom_delete_photo', '0') == '1' ? 'checked' : '' }}> Delete
                </span>

                <span class="input-group-addon custom-delete-file-name">
                    {{ $project->photo }}
                </span>
            </div>
        @endif
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('decreption') ? 'has-error' : '' }}">
    <label for="decreption" class="col-md-2 control-label">Decreption</label>
    <div class="col-md-10">
        <input class="form-control" name="decreption" type="text" id="decreption" value="{{ old('decreption', optional($project)->decreption) }}" minlength="1" placeholder="Enter decreption here...">
        {!! $errors->first('decreption', '<p class="help-block">:message</p>') !!}
    </div>
</div>

