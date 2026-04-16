<?php
route('/oauth/response/handler', 'GET', ['Controller\API\App\Authentication\OauthController', 'response']);

route(
    '/webhooks/oauth/response/[:provider]',
    'GET',
    ['Controller\Views\OauthResponseHandlerController', 'response']
);