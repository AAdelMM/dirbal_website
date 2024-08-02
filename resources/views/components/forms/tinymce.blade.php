@php
    $id = $getId();
    $statePath = $getStatePath();
@endphp

<script src="https://cdn.tiny.cloud/1/j6zats0eca1h402xomzh845yw0zqwas67by2waj7b4gbwx8x/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<div wire:ignore>
    <textarea id="{{ $id }}" name="{{ $getName() }}" wire:model.defer="{{ $statePath }}">
        {{ $getState() }}
    </textarea>
</div>

<script>
    console.log('Initializing TinyMCE for', '{{ $id }}');
    tinymce.init({
        selector: '#{{ $id }}',
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table' ,
        height: 500,
        setup: function (editor) {
            editor.on('init', function () {
                console.log('TinyMCE initialized for', '{{ $id }}');
            });
            editor.on('change', function (e) {
                @this.set('{{ $statePath }}', editor.getContent())
            });
        }
    });
</script>