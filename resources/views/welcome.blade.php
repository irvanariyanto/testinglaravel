<html>
<head>
    <title> OpenTok Getting Started </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
</head>
<body>
	<input type="hidden" id="id" value="{{ $data['id'] }}">
    <div id="videos">
        <div id="subscriber1"></div>
        <div id="subscriber2"></div>
        <div id="subscriber3"></div>
        <div id="publisher"></div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
