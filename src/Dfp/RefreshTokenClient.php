<?php

use Google\Auth\CredentialsLoader;
use Google\Auth\OAuth2;



namespace Dfp;



class RefreshTokenClient
{


  /**
   * @var string the OAuth2 scope for the DFP API
   * @see https://developers.google.com/doubleclick-publishers/docs/authentication#scope
   */
  
  const DFP_API_SCOPE = 'https://www.googleapis.com/auth/dfp';

  /**
   * @var string the Google OAuth2 authorization URI for OAuth2 requests
   * @see https://developers.google.com/identity/protocols/OAuth2InstalledApp#formingtheurl
   */
  
  const AUTHORIZATION_URI = 'https://accounts.google.com/o/oauth2/v2/auth';

  /**
   * @var string the redirect URI for OAuth2 installed application flows
   * @see https://developers.google.com/identity/protocols/OAuth2InstalledApp#formingtheurl
   */
  
  const REDIRECT_URI  = 'urn:ietf:wg:oauth:2.0:oob';

  const REFRESH_TOKEN;


	public function __construct($clientId, $clientSecret)
	{

		self::REFRESH_TOKEN = $this->GoogleRefreshTokenClient($clientId, $clientSecret);


	}

	private function GoogleRefreshTokenClient($clientId, $clientSecret)
	{
		return new OAuth2([
	        'authorizationUri' 			=> self::AUTHORIZATION_URI,
	        'redirectUri' 				=> self::REDIRECT_URI,
	        'tokenCredentialUri' 		=> CredentialsLoader::TOKEN_CREDENTIAL_URI,
	        'clientId' 					=> $clientId,
	        'clientSecret' 				=> $clientSecret,
	        'scope' 					=> self::DFP_API_SCOPE
	    ]);

	}


}

