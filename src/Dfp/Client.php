<?php


use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;


use Google\Auth\CredentialsLoader;
use Google\Auth\OAuth2;



namespace Dfp;



class Client
{



	protected static $service;
	protected static $session;
	protected static $credentials;
	protected static $client;

	public function __construct($client_id, $client_secret, $refresh_token, $application_name)
	{

		self::$credentials = $this->GoogleRefreshTokenClient($client_id, $client_secret, $refresh_token);

		self::$client 		= $this->DfpClient($credentials, $application_name)

	}


	protected function GetAllNetworks()
	{

		    network_service = self.client.GetService('NetworkService')
    networks = network_service.getAllNetworks()
    return {
        'results': networks,
        'totalResultSetSize': len(networks),
    }

    protected function MakeTestNetwork()
    {

    }
    protected function GoogleRefreshTokenClient($client_id, $client_secret, $refresh_token)
    {

    }




	}






	public static function main() {
	// Generate a refreshable OAuth2 credential for authentication.
	$oAuth2Credential = (new OAuth2TokenBuilder())
	->fromFile()
	->build();
	// Construct an API session configured from a properties file and the OAuth2
	// credentials above.
	$session = (new DfpSessionBuilder())
	->fromFile()
	->withOAuth2Credential($oAuth2Credential)
	->build();


	self::runExample(
	new DfpServices(),
	$session,
	self::USER_EMAIL,
	self::USER_NAME,
	intval(self::USER_ROLE_ID)
	);
	}



}