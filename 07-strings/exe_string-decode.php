<?php
/**
 * Yesterday you received a strange message from HQ which simply said: str_rot13()
 * Today you received a long coded message:
 * Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.
 * Your task is to decode the message and act on it.
 */

$secret_msg = "Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.";

$decoded_msg = str_rot13( $secret_msg );

echo $decoded_msg;
