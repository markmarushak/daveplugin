<?php
    namespace markmarushak\curlapi\Client;

    use markmarushak\curlapi\Auth;
    use markmarushak\curlapi\Transport;

    /**
     *
     *  Client class
     *
     * @author        <Marko Janosevic> <madness.studio@gmail.com>
     * @copyright (c) MadnessCODE
     *
     *  For the full copyright and license information, please view the LICENSE
     *  file that was distributed with this source code.
     *
     */
    class API implements APIInterface
    {

        /**
         * @var Auth\AuthInterface $auth
         */
        public $auth;

        /**
         * @var null Voluum\Transport $transport
         */
        public $transport = null;

        /**
         * Client constructor.
         *
         * @param Auth\OAuthInterface $auth
         */
        public function __construct(Auth\OAuthInterface $auth)
        {
            $this->auth = $auth;
            $this->transport = new Transport\Curl($this);
        }
    }