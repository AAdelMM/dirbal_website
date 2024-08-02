<textarea id="editor">{{ $getState() }}</textarea>
<script src="https://cdn.tiny.cloud/1/j6zats0eca1h402xomzh845yw0zqwas67by2waj7b4gbwx8x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#editor',
        plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons advtable',
        plugins: 'code table lists',
        menubar: 'file edit view insert format tools table tc help',
        height: 500,
       
    });
</script>
