<?php

function dd($value) {
    echo "<pre style='background:#111; color:#0f0; padding:15px; border-radius:8px; font-size:14px; line-height:1.4;'>";
    
    var_dump($value);
    echo "</pre>";
    die();
}