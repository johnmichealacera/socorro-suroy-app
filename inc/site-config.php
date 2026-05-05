<?php
/**
 * Central site configuration. Override via environment variables on the host
 * (e.g. Vercel project settings) or by copying `site-config.local.php.example`
 * to `site-config.local.php` at the project root (gitignored).
 */
$defaults = [
    'site_name' => 'E-SUROY Socorro',
    'site_url' => 'https://soroy-sa-socorro.vercel.app',
    'description' => 'Discover Socorro, Surigao del Norte—tourist spots, delicacies, barangays, and island travel information.',
    'og_image' => 'https://live.staticflickr.com/65535/53794506071_0f0f92939b_c.jpg',
    'contact_form_to' => 'socorro.tourismoffice@gmail.com',
];

$local = dirname(__DIR__) . '/site-config.local.php';
if (is_readable($local)) {
    $extra = require $local;
    if (is_array($extra)) {
        $defaults = array_merge($defaults, $extra);
    }
}

$defaults['site_url'] = getenv('SOCORRO_SITE_URL') ?: $defaults['site_url'];
$defaults['contact_form_to'] = getenv('SOCORRO_CONTACT_EMAIL') ?: $defaults['contact_form_to'];

return $defaults;
