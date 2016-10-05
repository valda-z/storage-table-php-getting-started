<?php
/**----------------------------------------------------------------------------------
* Microsoft Developer & Platform Evangelism
*
* Copyright (c) Microsoft Corporation. All rights reserved.
*
* THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND, 
* EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE IMPLIED WARRANTIES 
* OF MERCHANTABILITY AND/OR FITNESS FOR A PARTICULAR PURPOSE.
*----------------------------------------------------------------------------------
* The example companies, organizations, products, domain names,
* e-mail addresses, logos, people, places, and events depicted
* herein are fictitious.  No association with any real company,
* organization, product, domain name, email address, logo, person,
* places, or events is intended or should be inferred.
*----------------------------------------------------------------------------------
**/

class Config
{
    const ACCOUNT_NAME = 'valdawaf';
    const ACCOUNT_KEY = '7jz6sJPKpkSc8ojcvzscMIXAN1yBfzvsAO5ue0wwuWDVfIVQ0cLcqB6nYuczknHnj8xkW7B/n8mOOxblOBLX0g==';
    const IS_EMULATED = false;

    public static function getConnectionString()
    {
      if(Config::IS_EMULATED)
        return "UseDevelopmentStorage=true";
      else
        return "DefaultEndpointsProtocol=https;AccountName=" . Config::ACCOUNT_NAME . ";AccountKey=" . Config::ACCOUNT_KEY;
    }
}
?>
