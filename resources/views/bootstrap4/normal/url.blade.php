<div class="form-group">

    {!! \Hafijul233\Form\Facades\Form::label($name . '[]', $label, $required) !!}
    {!! \Hafijul233\Form\Facades\Form::url($name, $default, $required, $attributes) !!}
    {!! \Hafijul233\Form\Facades\Form::error($name . '[]') !!}
</div>
