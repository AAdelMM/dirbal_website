<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معاينة حكم المحكمة العليا</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        h1, h2 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .section p {
            font-size: inherit; /* يضمن أن حجم الخط يتبع التنسيق المحدد */
        }
    </style>
</head>
<body>
    <h1>{{ $ma7kamaOlia->title }}</h1>
    
    <div class="section">
        <h2>معلومات عامة</h2>
        <p>السنة: {{ $ma7kamaOlia->year }}</p>
        <p>الشهر: {{ $ma7kamaOlia->month }}</p>
        <p>الرقم المرجعي: {{ $ma7kamaOlia->ref_number }}</p>
    </div>

    <div class="section">
        <h2>موجز</h2>
        {!! $ma7kamaOlia->mogaz !!}
    </div>

    <div class="section">
        <h2>{{ $ma7kamaOlia->ka3da_title }}</h2>
        {!! $ma7kamaOlia->ka3da_text !!}
    </div>

    <div class="section">
        <h2>الديباجة</h2>
        {!! $ma7kamaOlia->dibaga !!}
    </div>

    <div class="section">
        <h2>{{ $ma7kamaOlia->waka3_title }}</h2>
        {!! $ma7kamaOlia->waka3_text !!}
    </div>

    <div class="section">
        <h2>{{ $ma7kamaOlia->egraa_title }}</h2>
        {!! $ma7kamaOlia->egraa_text !!}
    </div>

    <div class="section">
        <h2>{{ $ma7kamaOlia->reason_title }}</h2>
        {!! $ma7kamaOlia->reason_text !!}
    </div>

    <div class="section">
        <h2>{{ $ma7kamaOlia->hokm_title }}</h2>
        {!! $ma7kamaOlia->hokm_text !!}
    </div>
</body>
</html>