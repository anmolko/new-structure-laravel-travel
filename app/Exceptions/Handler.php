<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if($this->isHttpException($e)){
            $code = $e->getStatusCode();
            $message = $e->getMessage();
            switch ($code){
                case 404:
                    if ($e instanceof NotFoundHttpException) {
                        // Check if the request URL belongs to the backend
                        if ($request->is('adminsite/*')) {
                            return redirect()->route('backend.404');
                        }

                        // Handle frontend 404 route
                        return redirect()->route('frontend.404');
                    }
                    return \Response::view('error.404',compact('message','code'),404);
                    break;
            }
        }else{
            return parent::render($request,$e);

        }



    }
}
