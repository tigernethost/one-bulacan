<!-- text input -->
@include('crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')

    @if(isset($field['prefix']) || isset($field['suffix'])) <div class="input-group"> @endif
        @if(isset($field['prefix'])) <div class="input-group-prepend"><span class="input-group-text">{!! $field['prefix'] !!}</span></div> @endif
        <input
            type="text"
            name="{{ $field['name'] }}"
            value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
            @include('crud::fields.inc.attributes')
        >
        @if(isset($field['suffix'])) <div class="input-group-append"><span class="input-group-text">{!! $field['suffix'] !!}</span></div> @endif
    @if(isset($field['prefix']) || isset($field['suffix'])) </div> @endif

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')


{{-- FIELD EXTRA CSS  --}}
{{-- push things in the after_styles section --}}

    {{-- @push('crud_fields_styles')
        <!-- no styles -->
    @endpush --}}


{{-- FIELD EXTRA JS --}}
{{-- push things in the after_scripts section --}}

    @push('crud_fields_scripts')
        <!-- no scripts -->
        <script>
            $( document ).ready(function() {
                $('input[name="referred_by"').parent().hide();
                $('input[name="referred_by"').parent().hide();
            
            });
            $('select[name="medium"').on('change', function() {
                if ($('select[name="medium"').find(":selected").val() == 'Referral'){
                    $('input[name="referred_by"').parent().show();
                    $('input[name="referred_by"').parent().show();
                } else {
                    $('input[name="referred_by"').parent().hide();
                    $('input[name="referred_by"').parent().hide();
                }
            });
        </script>
    @endpush


{{-- Note: you can use @if ($crud->checkIfFieldIsFirstOfItsType($field, $fields)) to only load some CSS/JS once, even though there are multiple instances of it --}}
