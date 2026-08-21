<?php
$files = glob('old_html/*.html');
foreach ($files as $file) {
    $content = file_get_contents($file);
    $headerPos = strpos($content, '</header>');
    if ($headerPos !== false) {
        $content = "@extends('layouts.app')\n@section('content')\n" . substr($content, $headerPos + 9);
    }
    $footerPos = strpos($content, '<footer');
    if ($footerPos !== false) {
        $content = substr($content, 0, $footerPos) . "\n@endsection\n";
    }
    $bladeName = str_replace('.html', '.blade.php', basename($file));
    file_put_contents('resources/views/' . $bladeName, $content);
}
echo 'Done';
