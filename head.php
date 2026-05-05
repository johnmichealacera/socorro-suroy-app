<?php
$site = require __DIR__ . '/inc/site-config.php';
$siteUrl = htmlspecialchars($site['site_url'] ?? 'https://soroy-sa-socorro.vercel.app', ENT_QUOTES, 'UTF-8');
$siteName = htmlspecialchars($site['site_name'] ?? 'E-SUROY Socorro', ENT_QUOTES, 'UTF-8');
$description = htmlspecialchars($site['description'] ?? '', ENT_QUOTES, 'UTF-8');
$ogImage = htmlspecialchars($site['og_image'] ?? '', ENT_QUOTES, 'UTF-8');
?>
<head>
    <meta charset="utf-8">
    <title><?php echo $siteName; ?> — Socorro Island Tourism</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="theme-color" content="#5a9a28">
    <meta property="og:url" content="<?php echo $siteUrl; ?>/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $siteName; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicon -->
    <link href="img/socorro-logo.png" rel="icon">
    <link rel="icon" href="/favicon.png" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/portfolio-polish.css" rel="stylesheet">
</head>
