<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tiny.cloud/1/j6zats0eca1h402xomzh845yw0zqwas67by2waj7b4gbwx8x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body class="p-6">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
        <h2 class="text-2xl mb-4">{{ $article->sub_title }}</h2>
        <div class="text-lg mb-4"> {{ $article->mogaz }}</div>
        <h3 class="text-xl mb-4">{{ $article->mokadma_title }}</h3>
        <div class="text-lg mb-4">{{ $article->mokadma }}</div>
        <div class="prose">{!! $article->article_text !!}</div>
    </div>

    
</body>
</html>
