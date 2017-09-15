# FidoUAF_SP03

A implementação do SP foi realizada com a versão 1.24.0 do mediawiki (https://www.mediawiki.org), template WPTouch (https://www.mediawiki.org/wiki/Skin:WPtouch) e versão 1.14.8 do simpleSAMLphp (https://simplesamlphp.org/).


----------------------------------
Na mediawiki, acrescentar no final do arquivo de configuração "LocalSettings.php", as seguintes linhas:

require_once "$IP/extensions/SimpleSamlAuth/SimpleSamlAuth.php";

  $wgSessionName = ini_get('session.name');
  
  // SAML_OPTIONAL // SAML_LOGIN_ONLY // SAML_REQUIRED //
  
    $wgSamlRequirement = SAML_REQUIRED;
    
  // Should users be created if they don't exist in the database yet?
  
    $wgSamlCreateUser = true;
    
    $wgSamlConfirmMail = false;
    
  // SAML attributes
  
  //(UID)- $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.1";
  
  //(Sobrenome) - $wgSamlUsernameAttr = "urn:oid:2.5.4.4";
  
  // (uidMD5) - $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.2";
  
  // (eduPersonTargetedID) - $wgSamlUsernameAttr = "urn:oid:1.3.6.1.4.1.5923.1.1.1.10";
  
  // (username) $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.2";
  
    $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.1";
    
  // Local do simpleSAMLphp
  
    $wgSamlSspRoot = '/var/www/simplesamlphp';
    
  // Módulo de autenticação
  
    $wgSamlAuthSource = 'default-sp';
    
    $wgSamlPostLogoutRedirect = NULL;
    
  // Array: [MediaWiki group][SAML attribute name][SAML expected value]
  
  // If the SAML assertion matches, the user is added to the MediaWiki group
  
  $wgSamlGroupMap = array(
  
      'sysop' => array(
      
        'groups' => array('admin'),
        
      ),
      
  );
  
