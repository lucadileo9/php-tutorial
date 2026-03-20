<?php
namespace Core;

class Validator
{
    public static function validateNoteContent($content)
    {
        $content = trim($content);
        if (empty($content)) {
            return false;
        }
        if (strlen($content) > 255 || strlen($content) < 5) {
            return false;
        }
        return true; // No errors
    }
}