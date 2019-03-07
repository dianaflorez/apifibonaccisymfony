<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

use AppBundle\Utils\Fibonacci;

/**
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/listar", methods={"POST"})
     */
    public function listarAction(Request $request)
    {
        $fibo = new Fibonacci;

        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());
        
        $limite = $data['limite'];
        if($limite > 0){
            $respuesta = array();
            $respuesta["Limite"] = $limite;
            $respuesta["Serie"] = $fibo->generar($limite);

            $response = new JsonResponse($respuesta);
            return $response;
        }
        throw new BadRequestHttpException('Falta limite', null, 400);

    }
    
}

