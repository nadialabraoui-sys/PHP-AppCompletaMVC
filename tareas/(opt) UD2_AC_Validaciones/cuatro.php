<?php

//4. Email

function valida_email($v) {

    $dominiosNoPermitidos = [
    "mailinator.com",
    "10minutemail.com",
    "temp-mail.org",
    "tempmail.net",
    "tempmail.io",
    "yopmail.com",
    "guerrillamail.com",
    "sharklasers.com",
    "maildrop.cc",
    "dropmail.me",
    "getnada.com",
    "throwawaymail.com",
    "trashmail.com",
    "dispostable.com",
    "mailnesia.com",
    "spamgourmet.com",
    "mintemail.com",
    "moakt.com",
    "spam4.me",
    "fakemail.net"];

    foreach ($dominiosNoPermitidos as $dominio) {
        if (str_ends_with($v, '@' . $dominio)) {
            return false;
        }
    }
    filter_var();
FILTER_VALIDATE_EMAIL;

}