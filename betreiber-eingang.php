<?php
// Legt Anfragen und gebuchte Gespraeche zusaetzlich zur Mail im
// Betreiber-Bereich ab (ENT-038), fuer anfrage.php und termine.php.
// Den Schluessel setzt der Deploy aus dem Secret ANFRAGE_SCHLUESSEL ein,
// derselbe Wert wie in formateins-betreiber. Bleibt der Platzhalter stehen,
// geht alles nur per Mail.
const BETREIBER_EINGANG    = 'https://betreiber.formateins.ch/api/anfrage_eingang.php';
const BETREIBER_SCHLUESSEL = '__ANFRAGE_SCHLUESSEL__';

// Ein Aufruf von Server zu Server, hoechstens fuenf Sekunden. Scheitert er,
// steht es im Fehlerprotokoll, und die Mail ist trotzdem unterwegs.
function ablegen(array $anfrage): bool {
  if (BETREIBER_SCHLUESSEL === '__' . 'ANFRAGE_SCHLUESSEL__' || !function_exists('curl_init')) return false;
  $c = curl_init(BETREIBER_EINGANG);
  curl_setopt_array($c, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($anfrage, JSON_UNESCAPED_UNICODE),
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json', 'X-Schluessel: ' . BETREIBER_SCHLUESSEL],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 3,
    CURLOPT_TIMEOUT        => 5,
  ]);
  $antwort = curl_exec($c);
  $code = (int) curl_getinfo($c, CURLINFO_HTTP_CODE);
  $fehler = curl_error($c);
  curl_close($c);
  if ($code === 200 && (json_decode((string) $antwort, true)['status'] ?? '') === 'ok') return true;
  error_log('Betreiber-Bereich antwortet ' . $code . ' ' . ($fehler ?: mb_substr((string) $antwort, 0, 200)));
  return false;
}
