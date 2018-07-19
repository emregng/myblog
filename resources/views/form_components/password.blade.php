<div class="form-group {{ $errors->has($name) ? 'has-error' : null }}">
    {{ Form::label($name,$label_name, ['class' => 'control-label']) }}
    {{ Form::password($name,array_merge(['class' => 'form-control'])) }}
    @if($errors->has('isim'))
        <span class="help-block">
            <strong>{{$errors->first($name)}}</strong>
        </span>
    @endif
</div>
