
<div class="form-group {{ $errors->has('projet_id') ? 'has-error' : '' }}">
    <label for="projet_id" class="col-md-2 control-label">Projet</label>
    <div class="col-md-10">
        <select class="form-control" id="projet_id" name="projet_id">
        	    <option value="" style="display: none;" {{ old('projet_id', optional($projectAgent)->projet_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select projet</option>
        	@foreach ($projets as $key => $projet)
			    <option value="{{ $key }}" {{ old('projet_id', optional($projectAgent)->projet_id) == $key ? 'selected' : '' }}>
			    	{{ $projet }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('projet_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Agent_id') ? 'has-error' : '' }}">
    <label for="Agent_id" class="col-md-2 control-label">Agent</label>
    <div class="col-md-10">
        <select class="form-control" id="Agent_id" name="Agent_id">
        	    <option value="" style="display: none;" {{ old('Agent_id', optional($projectAgent)->Agent_id ?: '') == '' ? 'selected' : '' }} disabled selected>Enter agent here...</option>
        	@foreach ($agents as $key => $agent)
			    <option value="{{ $key }}" {{ old('Agent_id', optional($projectAgent)->Agent_id) == $key ? 'selected' : '' }}>
			    	{{ $agent }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Agent_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

