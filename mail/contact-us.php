<?php
declare(strict_types=1);

header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method not allowed';
    exit;
}

$config = require __DIR__ . '/../inc/site-config.php';
$to = $config['contact_form_to'] ?? 'socorro.tourismoffice@gmail.com';

$rawName = $_POST['name'] ?? '';
$rawEmail = $_POST['email'] ?? '';
$rawSubject = $_POST['subject'] ?? '';
$rawMessage = $_POST['message'] ?? '';

$maxName = 120;
$maxSubject = 200;
$maxMessage = 4000;

if (
    $rawName === '' || $rawSubject === '' || $rawMessage === ''
    || ! filter_var($rawEmail, FILTER_VALIDATE_EMAIL)
) {
    http_response_code(400);
    exit();
}

if (
    strlen($rawName) > $maxName
    || strlen($rawSubject) > $maxSubject
    || strlen($rawMessage) > $maxMessage
) {
    http_response_code(400);
    exit();
}

// Strip tags and newlines to reduce header / log injection.
$sanitize = static function (string $s): string {
    $s = strip_tags($s);
    $s = str_replace(["\r", "\n"], ' ', $s);
    return trim($s);
};

$name = $sanitize($rawName);
$replyEmail = filter_var($rawEmail, FILTER_VALIDATE_EMAIL);
if ($replyEmail === false) {
    http_response_code(400);
    exit();
}
$m_subject = $sanitize($rawSubject);
$message = strip_tags($rawMessage);
$message = preg_replace("/\r\n|\r|\n/", "\n", $message);
if (strlen($message) > $maxMessage) {
    http_response_code(400);
    exit();
}

$subject = $m_subject . ' — ' . $name;
$body = "New message from the E-SUROY Socorro contact form.\r\n\r\n"
    . "Name: {$name}\r\n"
    . "Email: {$replyEmail}\r\n"
    . "Subject: {$m_subject}\r\n\r\n"
    . "Message:\r\n{$message}\r\n";

$siteHost = parse_url($config['site_url'] ?? 'https://soroy-sa-socorro.vercel.app', PHP_URL_HOST);
if (! is_string($siteHost) || $siteHost === '') {
    $siteHost = 'localhost';
}
$fromHeader = 'noreply@' . $siteHost;
$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: ' . $fromHeader,
    'Reply-To: ' . $replyEmail,
    'X-Mailer: PHP/' . PHP_VERSION,
];

$sent = @mail($to, $subject, $body, implode("\r\n", $headers));
if (! $sent) {
    http_response_code(500);
    exit();
}

http_response_code(200);
echo 'OK';
