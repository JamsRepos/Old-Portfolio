<head>
    <title>James David Finch | JDF.GG</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="title" content="<?= $full_name ?>">
	<meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="<?= $meta_tags ?>">
    <meta name="author" content="<?= $full_name ?>">

    <meta name="theme-color" content="#EBCB8B">
	<link href="<?= $base_url ?>assets/img/portrait.png" rel="icon" type="image/png">
	<link href="<?= $base_url ?>assets/img/portrait.png" rel="shortcut-icon" type="image/png">
	<link href="<?= $base_url ?>assets/img/portrait.png" rel="apple-touch-icon" type="image/png">

    <link rel="stylesheet" href="<?= $base_url ?>assets/css/base.css">

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['setDocumentTitle', document.title]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        _paq.push(['enableHeartBeatTimer']);
        (function() {
            var u="//stats.jdf.gg/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Code -->
</head>