<?php

namespace Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\FormLoginBundle\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;

class LocalizedFormFailureHandler implements AuthenticationFailureHandlerInterface
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        return new RedirectResponse($this->router->generate('localized_login_path', array(), true));
    }
}
