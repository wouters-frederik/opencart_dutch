<?php

/**
 *  ICEPAY Basic module for OpenCart
 *  Admin language vars NL
 *
 *  @version 0.1.1
 *  @author Olaf Abbenhuis
 *  @copyright Copyright (c) 2011 ICEPAY B.V.
 *  www.icepay.com
 *
 */

// Heading					
$_['heading_title']		      = 'ICEPAY Basic';


// Tabs
$_['tab_general']       = 'Merchant instellingen';
$_['tab_statuscodes']       = 'Statuscodes';
$_['tab_appearance']       = 'Weergave';
$_['tab_about']       = 'Informatie';

// Text
$_['text_payment']       = 'Betaling';
$_['text_success']       = 'Voltooid: De ICEPAY module instellingen zijn aangepast!';
$_['text_icepay_basic']    = '<img src="view/image/payment/icepay_basic.png" alt="ICEPAY" title="ICEPAY" />';

//About Tab
$_['text_about_logo']    = '<a onclick="window.open(\'http://www.icepay.com/webshop-modules/ideal-voor-opencart/\');"><img src="view/image/payment/icepay-logo.png" alt="ICEPAY" title="ICEPAY" border="0"/></a>';
$_['text_about_link']    = '<a onclick="window.open(\'http://www.icepay.com/\');">www.icepay.com</a>';
$_['text_about_support']    = 'Offici&euml;le ICEPAY module';
$_['text_about_support_link']    = '<a onclick="window.open(\'http://www.icepay.com/downloads/pdf/manuals/opencart/icepay-manual-opencart.pdf\');">Handleiding (Engels)</a>';
$_['text_about_description']       = 'De betalingen zijn op verschillende manieren door ICEPAY beveiligd, doordat:<BR/>';
$_['text_about_description']       .= 'ICEPAY een iDEAL Certificering van <a onclick="window.open(\'http://www.currence.nl/nl-NL/OverOnzeProducten/LicentieEnCertificaathouders/Pages/iDEAL.aspx\');">Currence</a> (eigenaar iDEAL) heeft. ICEPAY voldoet daarmee aan de gestelde eisen van Currence op het gebied van o.a. techniek, veiligheid en betrouwbaarheid;<BR/>';
$_['text_about_description']       .= 'ICEPAY beschikt over de Thawte SSL certificering . Zo verkrijgt ICEPAY het hoogste niveau van authentificatie bij de afhandeling van een betaling. Dit betekent een gegarandeerd veilige betaalomgeving;<BR/>';
$_['text_about_description']       .= 'ICEPAY business partner van Thuiswinkel. org is. Dit verzekert u ervan dat  ICEPAY strikte regels op gebied van informatieplicht, privacy, herroepingrecht en geschillenbeslechting naleeft.';
$_['text_about_img']       = '<img src="view/image/payment/logo-currence.png" alt="Currence" title="Currence" border="0" style="margin-right:6px;"/><img src="view/image/payment/logo-thawte.png" alt="Thawte" title="Thawte" border="0" style="margin-right:6px;"/><img src="view/image/payment/logo-thuiswinkel.png" alt="Thuiswinkel certificate" title="Thuiswinkel certificate" border="0" style="margin-right:6px;"/>';
$_['text_checksettings']        = 'Controleer de Basic instellingen:';
$_['text_checksettings_link']   = 'Click here to perform the check';

// Entry
$_['entry_url_success']     = 'URL voor succes:<br/><span class="help">Copy-paste deze URL in uw ICEPAY Merchant (Bedankt pagina)</span>';
$_['entry_url_error']       = 'URL voor error:<br/><span class="help">Copy-paste deze URL in uw ICEPAY Merchant (Foutmelding pagina)</span>';
$_['entry_url_postback']    = 'URL voor postback:<br/><span class="help">Copy-paste deze URL in uw ICEPAY Merchant</span>';
$_['entry_merchantid']      = 'Merchant ID:';
$_['entry_secretcode']      = 'SecretCode:';
$_['entry_total']             = 'Totaal:<br /><span class="help">Het totaal van de bestelling waarop deze betaalmethode zichtbaar wordt.</span>';
$_['entry_geo_zone']          = 'Geo Zone:';
$_['entry_status']            = 'Status:';
$_['entry_sort_order']        = 'Sorteervolgorde:';
$_['entry_checkout_title']  = 'Omschrijving tijdens het afrekenen:';
$_['entry_checkout_icon']   = 'Toon het ICEPAY Logo:';

$_['entry_new_status']      = 'New Order Status:<br/><span class="help">Recommended: Pending</span>';
$_['entry_open_status']      = 'In afwachting van betaling status:<br/><span class="help">Recommended: Pending</span>';
$_['entry_ok_status']      = 'Betaling ontvangen status:<br/><span class="help">Recommended: Processing</span>';
$_['entry_err_status']      = 'Fout bij betaling status:<br/><span class="help">Recommended: Failed</span>';
$_['entry_cback_status']      = 'Chargeback aanvraag status:<br/><span class="help">Recommended: Chargeback</span>';
$_['entry_refund_status']      = 'Refund aanvraag status:<br/><span class="help">Recommended: Refunded</span>';




// Error
$_['error_merchantid']              = 'ICEPAY Merchant ID vereist!';
$_['error_merchantid_incorrect']    = 'ICEPAY Merchant ID dient 5 getallen te bevatten!';
$_['error_secretcode']              = 'ICEPAY SecretCode ID vereist!';
$_['error_secretcode_incorrect']    = 'ICEPAY Merchant ID dient exact 40 karakters lang te zijn.';
$_['error_checkout_title']          = '!';



?>