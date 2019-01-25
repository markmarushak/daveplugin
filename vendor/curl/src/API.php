<?php
    namespace markmarushak\curlapi;

    use markmarushak\curlapi\Client;
    use markmarushak\curlapi\Core;

    /**
     *
     *  API class
     *
     * @author        <Marko Janosevic> <madness.studio@gmail.com>
     * @copyright (c) MadnessCODE
     *
     *  For the full copyright and license information, please view the LICENSE
     *  file that was distributed with this source code.
     *
     */
    class API extends Core
    {

        /**
         * @var null Client\Api $client
         */
        protected $client;

        /**
         * Report constructor.
         *
         * @param Client\Api $client
         */
        public function __construct(Client\Api $client)
        {
            $this->client = $client;
        }
    }